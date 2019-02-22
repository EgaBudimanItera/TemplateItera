<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
	}

	public function index(){
		$data = array(
			'page' => 'admin',
			'link' => 'admin',
			'script'=>'',
			
		);

		$this->load->view('template/wrapper', $data);
	}

	

}