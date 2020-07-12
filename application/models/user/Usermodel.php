<?php

class Usermodel extends CI_Model
{
    var $id;
    var $user_group_id;
    var $name;
    var $designation;
    var $department;
    var $department_id;
    var $is_dept_head;
    var $team;
    var $team_id;
    var $is_team_head;
    var $user_name;
    var $password;
    var $email;
    var $profile_pic;
    var $dob;
    var $login_fail_count;
    var $login_status;
    var $pwd_reset_count;
    var $status;
    var $created_by;
    var $created_datetime;
    var $modified_by;
    var $modified_datetime;
    var $delete_index;
	

    function __construct()
    {
        parent::__construct();
    }

    function getId(){return $this->id;}
    function getUser_group_id(){return $this->user_group_id;}
    function getName(){return $this->name;}
    function getDesignation(){return $this->designation;}
    function getDepartment(){return $this->department;}
    function getDepartment_id(){return $this->department_id;}
    function getIs_dept_head(){return $this->is_dept_head;}
    function getTeam(){return $this->team;}
    function getTeam_id(){return $this->team_id;}
    function getIs_team_head(){return $this->is_team_head;}
    function getUser_name(){return $this->user_name;}
    function getPassword(){return $this->password;}
    function getEmail(){return $this->email;}
    function getProfile_pic(){return $this->profile_pic;}
    function getDob(){return $this->dob;}
    function getLogin_fail_count(){return $this->login_fail_count;}
    function getLogin_status(){return $this->login_status;}
    function getPwd_reset_count(){return $this->pwd_reset_count;}
    function getStatus(){return $this->status;}
    function getCreated_by(){return $this->created_by;}
    function getCreated_datetime(){return $this->created_datetime;}
    function getModified_by(){return $this->modified_by;}
    function getModified_datetime(){return $this->modified_datetime;}
    function getDelete_index(){return $this->delete_index;}

    function setId($id){$this->id = $id;}
    function setUser_group_id($user_group_id){$this->user_group_id = $user_group_id;}
    function setName($name){$this->name = $name;}
    function setDesignation($designation){$this->designation = $designation;}
    function setDepartment($department){$this->department = $department;}
    function setDepartment_id($department_id){$this->department_id = $department_id;}
    function setIs_dept_head($is_dept_head){$this->is_dept_head = $is_dept_head;}
    function setTeam($team){$this->team = $team;}
    function setTeam_id($team_id){$this->team_id = $team_id;}
    function setIs_team_head($is_team_head){$this->is_team_head = $is_team_head;}
    function setUser_name($user_name){$this->user_name = $user_name;}
    function setPassword($password){$this->password = $password;}
    function setEmail($email){$this->email = $email;}
    function setProfile_pic($profile_pic){$this->profile_pic = $profile_pic;}
    function setDob($dob){$this->dob = $dob;}
    function setLogin_fail_count($login_fail_count){$this->login_fail_count = $login_fail_count;}
    function setLogin_status($login_status){$this->login_status = $login_status;}
    function setPwd_reset_count($pwd_reset_count){$this->pwd_reset_count = $pwd_reset_count;}
    function setStatus($status){$this->status = $status;}
    function setCreated_by($created_by){$this->created_by = $created_by;}
    function setCreated_datetime($created_datetime){$this->created_datetime = $created_datetime;}
    function setModified_by($modified_by){$this->modified_by = $modified_by;}
    function setModified_datetime($modified_datetime){$this->modified_datetime = $modified_datetime;}
    function setDelete_index($delete_index){$this->delete_index = $delete_index;}
}