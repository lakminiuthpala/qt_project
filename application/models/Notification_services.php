<?php

class Notification_services extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function get_imoji_count_for_response($response_id){
    	$this->db->select('user_response_imoji.id as imoji_id, count(user_response_imoji.id) as imoji_count, user_response_imoji.imoji_ascii, question_instance.title, question_instance.id');
    	$this->db->from('user_response_imoji');
    	$this->db->join('user_response','user_response_imoji.user_response_id = user_response.id');
    	$this->db->join('question_instance', 'question_instance.id = user_response.question_instance_id');
    	$this->db->where('user_response_imoji.user_response_id',$response_id);
    	$this->db->group_by('user_response_imoji.imoji_ascii');
    	$query = $this->db->get(); //echo $this->db->last_query();exit;
        return $query->result(); 

	}
	
	 public function get_comment_count_for_response($response_id){
    	$this->db->select('user_response_comment.id as comment_id, count(user_response_comment.id) as comment_count, user_response_comment.comment_text, question_instance.title, question_instance.id');
    	$this->db->from('user_response_comment');
    	$this->db->join('user_response','user_response_comment.user_response_id = user_response.id');
    	$this->db->join('question_instance', 'question_instance.id = user_response.question_instance_id');
    	$this->db->where('user_response_comment.user_response_id',$response_id);
    	$query = $this->db->get(); //echo $this->db->last_query();exit;
        return $query->result(); 

	}
    
}