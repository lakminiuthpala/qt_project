<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class forgot_password extends CI_Controller {

	public function index()
	{
		$this->load->view('forgot_password');
	}
}