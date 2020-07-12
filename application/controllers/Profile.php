<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	 function __construct() {
        parent::__construct();

        $this->load->model('user/usermodel');
        $this->load->model('user/userservices');

        $this->load->model('user_response/user_response_model');
        $this->load->model('user_response/user_response_service');
        $this->load->model('question_invitation_services');
        $this->load->model('user_response_mention');
        $this->load->model('notification_services');

        $this->load->helper('url');
    }

public function load_replies(){ 

    $this->load->view('template/replies');    
    

}
public function load_mentions(){ 

    $this->load->view('template/mentions');    
    

}
public function load_notifications(){ 

    $this->load->view('template/notifications');    
    

}
public function load_status(){ 

    $this->load->view('template/status');    
    

}



public function get_waterpooler_replies(){ 
	$user_response_service = new user_response_service();
	$user_response_model = new user_response_model();

	$user_response_model->setQuestion_id($this->input->post('question'));

	$data['replies'] = $user_response_service->get_user_replies_by_userid($user_response_model);
    $data['watercoller_photo'] = $user_response_service->get_replies_photos_by_userid($user_response_model);

    if($this->input->post('question') == 1){
	$this->load->view('replies_watercooler',$data);
    }else if($this->input->post('question') == 2){
    $this->load->view('replies_check_in',$data);    
    }

}

public function get_watercooler_status_by_profile(){
    $question_invitation_services = new question_invitation_services();

    $data['watercoller_invitation_count'] = $question_invitation_services->get_all_question_invitations_count_for_user($this->input->post('question'));
    $data['watercoller_respose_count'] = $question_invitation_services->get_response_count_for_user($this->input->post('question'));
    $data['pending_watercooler_questions'] = $question_invitation_services->get_pending_questions($this->input->post('question'));
    $data['pending_questions_count'] = $question_invitation_services->pending_questions_count($this->input->post('question'));

    if($this->input->post('question') == 1){
    $this->load->view('status_watercoller',$data);
    }else if($this->input->post('question') == 2){
    $this->load->view('status_checkin',$data);    
    }
}

public function get_pending_questions(){
    $question_invitation_services = new question_invitation_services();

    $pending_questions = $question_invitation_services->get_pending_questions($this->input->post('question'));

    $html="";
    if(!empty($pending_questions)){
        $i =0;
        foreach ($pending_questions as $value) {
            $i++;
            $html .='<div class="chat_status">';
            $html .= '<div class="status_wc">';
            $html .= '<b>'.$i.'</b>'.". ".$value->title;
            $html .= '<input type="hidden" value="'.$value->id.'>';
            $html .='</div>';
            $html .='</div>';
        }
        echo $html;
    }
}

public function get_waterpooler_mentions(){
$user_response_mention = new user_response_mention();

$responses = $user_response_mention->get_all_mentions_for_user_id($this->input->post('question'));
$html="";
if(!empty($responses)){
    $i =0;
    foreach ($responses as $response) {
       $i++;
       $html .= '<input type="hidden" value="'.$response->instance_id.'">';
       $html .= '<a>'.$response->title.'</a><br/>';
       $html .= '<input type="hidden" value="'.$response->response_id.'">';
       $html .= '<a>'.$response->response_text.'</a><br/><br/>';
    }
    echo $html;
}else{
    $html .='No Mentions Found';
}

}

public function get_watercooler_notifications(){
$user_response_service = new user_response_service();
$user_response_model = new user_response_model();
$notification_services =new notification_services();

$user_response_model->setQuestion_id($this->input->post('question'));
$response = $user_response_service->get_user_replies_by_userid($user_response_model);

$imoj_array= array();
if(!empty($response)){
    foreach ($response as $key=>$value) {
       $imoji = $notification_services->get_imoji_count_for_response($value->response_id);
       foreach ($imoji as $key1=>$imoji) {
       $imoj_array[$imoji->title]["title"] = $value->title;
       $imoj_array[$imoji->title]["imoji"][$imoji->imoji_id] = $imoji;
       }
    }
    $data['imoj_array'] = $imoj_array;
}

$comment_array= array();
if(!empty($response)){
    foreach ($response as $key=>$value) {
       $comment = $notification_services->get_comment_count_for_response($value->response_id);
       foreach ($comment as $key1=>$comment) {
       $comment_array[$comment->title]["title"] = $value->title;
       $comment_array[$comment->title]["comment"][$comment->comment_id] = $comment;
       }
    }
    $data['comment_array'] = $comment_array;
}

$this->load->view('notification_list',$data);
 }
}
