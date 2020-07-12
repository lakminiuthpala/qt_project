<?php

class Question_invitation_services extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_all_question_invitations_count_for_user($question_type){
        $this->db->select('count(question_invitation.id) as invitation_count');
        $this->db->from('question_invitation');
        $this->db->where('question_invitation.invitation_status',1);
        $this->db->where('question_invitation.status',0);
        $this->db->where('question_invitation.question_id',$question_type);
        $this->db->where('question_invitation.user_id',$this->session->userdata('USER_ID'));
        $this->db->like('question_invitation.scheduled_start',date('Y-m-d'));
        $query = $this->db->get(); //echo $this->db->last_query();exit;
        return $query->row();   
    }

    public function get_response_count_for_user($question_type){
        $this->db->select('count(question_invitation.id) as response_count');
        $this->db->from('question_invitation');
        $this->db->where('question_invitation.response_status',1);
        $this->db->where('question_invitation.invitation_status',1);
        $this->db->where('question_invitation.status',0);
        $this->db->where('question_invitation.question_id',$question_type);
        $this->db->where('question_invitation.user_id',$this->session->userdata('USER_ID'));
        $this->db->like('question_invitation.scheduled_start',date('Y-m-d'));
        $query = $this->db->get(); 
        return $query->row();   
    }

    public function pending_questions_count($question_type){
        $this->db->select('count(question_invitation.id) as pending_count');
        $this->db->from('question_invitation');
        $this->db->where('question_invitation.response_status',0);
        $this->db->where('question_invitation.invitation_status',1);
        $this->db->where('question_invitation.status',0);
        $this->db->where('question_invitation.question_id',$question_type);
        $this->db->where('question_invitation.user_id',$this->session->userdata('USER_ID'));
        $this->db->like('question_invitation.scheduled_start',date('Y-m-d'));
        $query = $this->db->get(); 
        return $query->row();  
    }

    public function get_pending_questions($question_type){
        $this->db->select('question_instance.*');
        $this->db->from('question_invitation');
        $this->db->join('question_instance','question_instance.id = question_invitation.question_instance_id');
        $this->db->where('question_invitation.response_status',0);
        $this->db->where('question_invitation.invitation_status',1);
        $this->db->where('question_invitation.status',0);
        $this->db->where('question_invitation.question_id',$question_type);
        $this->db->where('question_invitation.user_id',$this->session->userdata('USER_ID'));
        $this->db->like('question_invitation.scheduled_start',date('Y-m-d'));
        $query = $this->db->get(); //echo $this->db->last_query();exit;
        return $query->result();  
    }
    
}