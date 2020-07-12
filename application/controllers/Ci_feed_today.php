<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ci_feed_today extends CI_Controller {

	public function index()
	{
		$this->load->view('ci_feed_today');
	}
}
