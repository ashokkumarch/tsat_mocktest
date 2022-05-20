<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Exam extends FrontendController {
	
	public function __construct()
	  {
		parent::__construct();
		if(!$this->session->userdata('member_id')){redirect('/');}
	  }
	
	public function index() {
		$this->session->set_userdata('current_url', current_url());
		$data['member'] = $this->index->get_data_info('registrations',$this->session->userdata('member_id'));
		$data['attempts'] = $this->index->registrations_count($data['member']->phone)->cnt;
		$where = "phone='".$data['member']->phone."' and questions!=''";
		$data['last_attempt'] = $this->index->get_data_src_info('registrations',$where,'id','DESC');
		if(!$this->session->userdata('questions_list')){
		$data['questions'] = $this->index->get_categories();
		foreach($data['questions'] as $key => $value){
			$data['questions'][$key]['list'] = $this->index->get_questions($value['id']);
		}
		$questions_list = $data['questions'];
		$this->session->set_userdata('questions_list',$questions_list);	
		$this->session->set_userdata('questions_timer',strtotime('+60 Minutes'));
		$this->session->set_userdata('questions_cat',0);
		$this->session->set_userdata('questions_no',0);
		}
		$data['timer'] = ($this->session->userdata('questions_timer')-time())/60;
        $this->load->view('links/top', $data);
		$this->load->view('exam');
		$this->load->view('links/bottom');
	  }
	  
	  public function submit() {
		$add_score = 1; $sub_score = 0;
		$score = 0; $total_questions = 0; $total = 0;
		$questions = $this->session->userdata('questions_list');
		foreach($questions as $key => $value){
		 $cat_questions = 0;  $cat_score = 0; 
		 foreach($value['list'] as $key1 => $value1){			
			if(isset($value1['answer'])){
				if($value1['question_correct_ans']==$value1['answer']){$total = $total+$add_score; $cat_score = $cat_score+$add_score;}
				else{$total = $total-$sub_score; $cat_score = $cat_score-$sub_score;}
			}
		 }	
		 $cat_questions = count($value['list']);		 
		 //$cat_score = ($cat_score/$cat_questions)*100;
		 $questions[$key]['score'] = $cat_score;
		 $total_questions+=$cat_questions;
		}
		//$score = ($total/$total_questions)*100;
		$data['data']=array('questions' => json_encode($questions),'score' => $total);
		
		$this->index->update('registrations',$this->session->userdata('member_id'),$data['data']);	
		
		
		$this->session->unset_userdata('questions_list');	
		$this->session->unset_userdata('questions_timer');
		$this->session->unset_userdata('questions_cat');
		$this->session->unset_userdata('questions_no');
		$this->session->unset_userdata('questions_timer');
		redirect('success');
	  }	  
}
