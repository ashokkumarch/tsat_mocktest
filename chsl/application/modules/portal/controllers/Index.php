<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();		
	  }
	
	public function index() {
	
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/index');
		$this->load->view($this->folder_key.'/links/bottom');
	  }
	  
	  public function view($page) {
	
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/index');
		$this->load->view($this->folder_key.'/links/bottom');
	  }
}
