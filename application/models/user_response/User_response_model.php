<?php

class User_response_model extends CI_Model
{
    var $id;
    var $company_id;
    var $user_id;
    var $package_id;
    var $question_id;
    var $question_instance_id;
    var $response_text;
    var $status;
    var $created_by;
    var $created_datetime;
    var $modified_by;
    var $modified_datetime;
	

    function __construct()
    {
        parent::__construct();
    }

    function getId(){return $this->id;}
    function getCompany_id(){return $this->company_id;}
    function getUser_id(){return $this->user_id;}
    function getPackage_id(){return $this->package_id;}
    function getQuestion_id(){return $this->question_id;}
    function getQuestion_instance_id(){return $this->question_instance_id;}
    function getResponse_text(){return $this->response_text;}
    function getStatus(){return $this->status;}
    function getCreated_by(){return $this->created_by;}
    function getCreated_datetime(){return $this->created_datetime;}
    function getModified_by(){return $this->modified_by;}
    function getModified_datetime(){return $this->modified_datetime;}
    function getDelete_index(){return $this->delete_index;}

    function setId($id){$this->id = $id;}
    function setCompany_id($company_id){$this->company_id = $company_id;}
    function setUser_id($user_id){$this->user_id = $user_id;}
    function setPackage_id($package_id){$this->package_idpackage_id = $package_id;}
    function setQuestion_id($question_id){$this->question_id = $question_id;}
    function setQuestion_instance_id($question_instance_id){$this->question_instance_id = $question_instance_id;}
    function setResponse_text($response_text){$this->response_text = $response_text;}
    function setStatus($status){$this->status = $status;}
    function setCreated_by($created_by){$this->created_by = $created_by;}
    function setCreated_datetime($created_datetime){$this->created_datetime = $created_datetime;}
    function setModified_by($modified_by){$this->modified_by = $modified_by;}
    function setModified_datetime($modified_datetime){$this->modified_datetime = $modified_datetime;}
    function setDelete_index($delete_index){$this->delete_index = $delete_index;}
}