<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {


	 function __construct() {
        parent::__construct();

        $this->load->model('user/usermodel');
        $this->load->model('user/userservices');

        $this->load->model('user_response/user_response_model');
        $this->load->model('user_response/user_response_service');

        $this->load->helper('url');
    }


}
