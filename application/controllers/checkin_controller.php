<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkin_controller extends CI_Controller {

	public function index()
	{
        $this->load->view('menu');
    	$this->load->view('checkin');
	}
}
