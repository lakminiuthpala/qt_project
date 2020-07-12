<?php

class User_response_mention extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_all_mentions_for_user_id($question_type){
        $this->db->select('question_instance.title, user_response.response_text, question_instance.id as instance_id, user_response.id as response_id');
        $this->db->from('user_response_mention');
        $this->db->join('user_response','user_response.id = user_response_mention.user_response_id');
        $this->db->join('question_instance', 'question_instance.id = user_response.question_instance_id');
        $this->db->where('user_response.status',0);
        $this->db->where('user_response_mention.question_id',$question_type);
        $this->db->where('user_response_mention.mentioned_userid',$this->session->userdata('USER_ID'));
        // $this->db->like('question_invitation.scheduled_start',date('Y-m-d'));
        $query = $this->db->get(); //echo $this->db->last_query();exit;
        return $query->result();   
    }

    
}