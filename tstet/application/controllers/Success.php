<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Success extends FrontendController {
	
	public function __construct()
	  {
		parent::__construct();
		if(!$this->session->userdata('member_id')){redirect('/');}
	  }
	
	public function index() {
		
		$data['member'] = $this->index->get_data_info('registrations',$this->session->userdata('member_id'));
		
        $this->load->view('links/top', $data);
		$this->load->view('success');
		$this->load->view('links/bottom');
		
		$this->session->unset_userdata('member_id');
	  }
}
