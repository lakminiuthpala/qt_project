<?php

class User_response_service extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_user_replies_by_userid($user_response_model){
        $this->db->select('*, user_response.id as response_id');
        $this->db->from('user_response');
        $this->db->join('question_instance', 'question_instance.id = user_response.question_instance_id');
        $this->db->join('user', 'user_response.user_id = user.id');
        $this->db->where('user_response.question_id',$user_response_model->getQuestion_id());
        $this->db->where('user_response.user_id',$this->session->userdata('USER_ID'));
        $this->db->where('user_response.modified_datetime','DESC');
        $query = $this->db->get(); //echo $this->db->last_query();exit;
        return $query->result();   
    }

    public function get_replies_photos_by_userid($user_response_model){
        $this->db->select('*');
        $this->db->from('user_response_image');
        $this->db->where('user_response_image.question_id',$user_response_model->getQuestion_id());
        $this->db->where('user_response_image.user_id',$this->session->userdata('USER_ID'));
        $this->db->where('user_response_image.modified_datetime','DESC');
        $query = $this->db->get(); //echo $this->db->last_query();exit;
        return $query->result(); 
    }


    
}