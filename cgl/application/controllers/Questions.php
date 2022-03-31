<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Questions extends FrontendController {
	
	public function __construct()
	  {
		parent::__construct();
	  }
	
	public function index() {
		$questions = $this->session->userdata('questions_list');
		$cat = $this->session->userdata('questions_cat');
		$sub = $this->session->userdata('questions_no');
		$data['questions_cat'] = $questions[$cat]['title'];
		$data['questions'] = $questions[$cat]['list'];
        $this->load->view('questions', $data);
	  }
	  
	  public function answer() {
		extract($_REQUEST);
		$questions = $this->session->userdata('questions_list');
		$cat = $this->session->userdata('questions_cat');
		$sub = $this->session->userdata('questions_no');
		$questions[$cat]['list'][$sub]['answer'] = $answer;
		$questions[$cat]['list'][$sub]['ytr'] = $ytr;
		$this->session->set_userdata('questions_list',$questions);
		$this->session->userdata('questions_cat');
		if(((count($questions)-1)>$cat) && ((count($questions[$cat]['list'])-1)<=$sub)){
		$catt = $cat+1;	 $subb = 0;
		}else if((count($questions[$cat]['list'])-1)>$sub){
		$catt = $cat; $subb = $sub+1;	
		}else{
		$catt = $cat; $subb = $sub;	
		}
		$this->session->set_userdata('questions_cat',$catt);		
		$this->session->set_userdata('questions_no',$subb);
		
		echo 'Success@@'.($catt+1);
	  }
	  
	   public function previous() {
		extract($_REQUEST);
		$this->session->set_userdata('questions_no',$id);
	  }
	  
	  public function prevtab() {
		extract($_REQUEST);
		$this->session->set_userdata('questions_cat',$id);
		$questions = $this->session->userdata('questions_list');
		foreach($questions[$id]['list'] as $key => $value){
			if(!isset($value['answer'])){$sub = $key; break;}else{$sub = $key;}			
		}
		$this->session->set_userdata('questions_no',$sub);
	  }	  
}
