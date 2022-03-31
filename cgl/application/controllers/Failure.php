<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Failure extends FrontendController {
	
	public function __construct()
	  {
		parent::__construct();
		
	  }
	
	public function index() {
		$this->load->view('links/top.php');
		$this->load->view('404');
		$this->load->view('links/bottom.php');
	  }
	
	
}
