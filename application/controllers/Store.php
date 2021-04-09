<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Store Online',
			'view' => 'home',
			'data_view' => array()
		);
		$this->load->view('template/main_view',$data);
	}

	
}
