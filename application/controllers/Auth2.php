<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth2 extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		# Set data atribut
		$this->_view['template'] = 'template/auth/index'; # Set template location
		$this->_view['css'] 	 = 'auth'; 				  # Set CSS 
	}

	public function index()
	{
		# set configuration for view
		$this->_view['page']  = 'auth/login';
		$this->_view['title'] = 'Login HOTELS';
		
		# initialize
		$this->init();
	}

}
