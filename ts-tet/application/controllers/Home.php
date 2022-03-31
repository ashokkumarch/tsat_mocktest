<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Home extends FrontendController {
	
	public function __construct()
	  {
		parent::__construct();
		if($this->session->userdata('questions_list')){
		redirect('exam');	
		}
	  }
	
	public function index() {
		$this->session->set_userdata('current_url', current_url());
		
		$data['banners'] = $this->index->get_data_sort('banners','sorting','ASC');
		$this->load->view('links/top', $data);
		$this->load->view('index');
		$this->load->view('links/bottom');
	  }
	  
	public function submit() {

		$name = $this->security->xss_clean($this->input->post('name'));
		$qualification = $this->security->xss_clean($this->input->post('qualification'));
		$email = $this->security->xss_clean($this->input->post('email'));
		$phone = $this->security->xss_clean($this->input->post('phone'));
		
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('qualification', 'Qualification', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		
		if ($this->form_validation->run($this) == FALSE)
		{
			$this->index(true);
		}
		else
		{
			
			$data['data']=array('name' => $name,'qualification' => $qualification,'email' => $email,'phone' => $phone);
			
			$id = $this->index->submit('registrations',$data['data']);	
			$this->session->set_userdata('member_id',$id);
			redirect('exam');
		}
	  }  	  
}
