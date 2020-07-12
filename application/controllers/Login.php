<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct() {
        parent::__construct();

        $this->load->model('user/usermodel');
        $this->load->model('user/userservices');

        $this->load->helper('url');
    }

	public function index()
	{
		if ($this->session->userdata('USER_LOGGED_IN')) {
			$this->load->view('profile');
		}else{
		$this->load->view('login');
	}
	}

	public function authenticate_user(){
		$usermodel = new usermodel();
		$userservices = new userservices();

		$email = $this->input->post('user_name',TRUE);
		$password = $this->input->post('password',TRUE);

		$usermodel->setEmail($email);
		$usermodel->setPassword($password);
		$usermodel->setDelete_index(0);

		$login = $userservices->check_user_login($usermodel);

		if(!empty($login)){
			//Setting sessions
                $this->session->set_userdata('USER_ID', $login->id);
                $this->session->set_userdata('USER_GROUP_ID', $login->user_group_id);
                $this->session->set_userdata('NAME', $login->name);
                $this->session->set_userdata('NAME', $login->user_name);
                $this->session->set_userdata('DESIGNATION', $login->designation); 
                $this->session->set_userdata('DEPARTMENT', $login->department);
                $this->session->set_userdata('DEPARTMENT_ID', $login->department_id);
                $this->session->set_userdata('IS_DEP_HEAD', $login->is_dept_head);
                $this->session->set_userdata('TEAM', $login->team);
                $this->session->set_userdata('TEAM_ID', $login->team_id);
                $this->session->set_userdata('USER_NAME', $login->user_name);
                $this->session->set_userdata('USER_LOGGED_IN', 'TRUE');

                 redirect(base_url().'index.php/login/profile/'.$login->id, 'refresh');
		}else{
            $this->session->set_flashdata('msg', 'Please Insert valid Email and Password');
            redirect(base_url().'index.php/login/');
        }

	}

	public function logout()
    {
    	$this->session->set_userdata('USER_LOGGED_IN', FALSE);
        $this->session->sess_destroy();
        redirect(base_url().'index.php/login/');
    }

	public function profile($id)
    {
    	$usermodel = new usermodel();
		$userservices = new userservices();

		$usermodel->setId($id);

    	$data['user_detail'] = $userservices->get_user_details_by_id($usermodel);

    	$this->load->view('profile',$data);
    }

    public function edit_profile($user_id){
        $usermodel = new usermodel();
        $userservices = new userservices();

        $usermodel->setId($user_id);
        $data['user_detail'] = $userservices->get_user_details_by_id($usermodel);
        $this->load->view('edit_profile',$data);
    }

    public function do_upload(){

        $config['upload_path']          = './application_resources/uploads/user_profiles';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image')){
            $error = array('error' => $this->upload->display_errors());
            var_dump($error);
            }else{
            $data = array('upload_data' => $this->upload->data());

            $userservices = new userservices();
                $userservices->delete_old_image($this->input->post('id'));
                $userservices->save_user_image($data['upload_data']['file_name'], $this->input->post('id'));
            }


            $user_details = array(
              'name' => $this->input->post('name'),
              'designation' => $this->input->post('designation'),
              'department' => $this->input->post('department'),
              'user_name' => $this->input->post('user_name'),
              'dob' => $this->input->post('dob'),
              'email' => $this->input->post('email'),
            );
            $userservices->update_user_details($user_details, $this->input->post('id'));
        }

    public function resizeImage($filename)
   {

      $source_path = 'application_resources/uploads/user_profiles' . $filename;
      $target_path = 'application_resources/uploads/user_profiles/thumbnail/';
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $source_path,
          'new_image' => $target_path,
          'maintain_ratio' => TRUE,
          'create_thumb' => TRUE,
          'thumb_marker' => '_thumb',
          'width' => 50,
          'height' => 50
      );


      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }


      $this->image_lib->clear();
   }    

}