<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
		$this->data = $this->index->get_data_info('settings', 1);
	  }
	
	public function index() {
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/index');
		$this->load->view($this->folder_key.'/links/bottom');
	  }
}
