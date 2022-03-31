<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Questions extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
	    $this->table = 'questions';
		$this->controller = 'questions';
	  }
     public function index() {
		
		$data['categories'] = $this->index->get_data('category');
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/'.$this->controller);
		$this->load->view($this->folder_key.'/links/bottom');
     }
	 
	 public function data() {
		extract($_REQUEST);
		$cond="id!=0"; $condd='';
		$searchk=$search['value'];
		
		if($searchk!=""){
			if(strtolower($searchk)=='active'){$condd.=" or status='1'";}
			if(strtolower($searchk)=='inactive'){$condd.=" or status='0'";}
			$cond.=" and (question_name like '%$searchk%' or question_ans_1 like '%$searchk%' or question_ans_2 like '%$searchk%' or question_ans_3 like '%$searchk%' or question_ans_4 like '%$searchk%' or question_correct_ans like '%$searchk%' or category IN (select id from category where title like '%$searchk%' and status=1)".$condd.")";			
		}

		$res = $this->index->get_data_count($this->table,$cond)->cnt;

		$dat['draw']=$draw;
		$dat['recordsTotal']=$res;
		$dat['recordsFiltered']=$dat['recordsTotal'];
	
		$where = $cond." order by id DESC";
		$list = $this->index->get_data_src_spl($this->table,$cond,'id','DESC',$start,$length);
		
		$sno=$start;
		$valu=array();
		
		foreach($list as $key => $value){ 
		$category = $this->index->get_data_info('category',$value['category'])->title;
		if($value['status']==1){$status= 'Active';}else{$status=  'Inactive';}
		
		$valu[$sno][]=$sno+1;
		$valu[$sno][]=$value['question_name'];	
		$valu[$sno][]=$value['question_ans_1'];
		$valu[$sno][]=$value['question_ans_2'];
		$valu[$sno][]=$value['question_ans_3'];
		$valu[$sno][]=$value['question_ans_4'];
		$valu[$sno][]=$value['question_correct_ans'];
		$valu[$sno][]=$category;
		$valu[$sno][]='<a href="javascript:void(0)" id="status'.$value['id'].'" onclick="return status('.$value['id'].',\'questions\')">'.$status.'</a>';
		$valu[$sno][]='<a href="javascript:void(0)" onclick="getinfo(\'questions\','.$value['id'].')"  data-toggle="modal" data-target="#model" title="Edit"><i class="fa fa-pencil"></i></a>';
		 
		$sno++; 

		}
		
		$colo=$order[0]['column'];
		
		$dir=$order[0]['dir'];
		if($dir=='asc'){
		array_multisort(array_column($valu, intval($colo)), SORT_ASC, $valu);
		}else{
		array_multisort(array_column($valu, intval($colo)), SORT_DESC, $valu);
		}
		
		$dat['data']=$valu;
		
		echo json_encode($dat,JSON_PRETTY_PRINT);
     }
	 
	 public function edit($id) {
		$data = $this->index->get_data_info($this->table,$id);
		echo json_encode($data);
	  }
	  
	  public function delete($id){
		$data['id'] = $id;
		$this->index->delete($this->table,$id);
		redirect($this->folder_key.'/'.$this->controller);
	  }
	  
	  public function check($id,$col,$val){
		$data['id'] = $id;
		$data['data']=array($col => $val);
		$this->index->update($this->table,$id,$data['data']);
	  }
	  
	  public function status($id,$status){
		$data['id'] = $id;
		if($status == 'Active'){$newstatus='0';}else{$newstatus='1';}
		$data['data']=array('status' => $newstatus);
		$this->index->update($this->table,$id,$data['data']);
		if($newstatus==0){echo 'Inactive';}else if($newstatus==1){echo 'Active';}
	  }
	  
	  public function sorting($id,$val){
		$data['id'] = $id;
		$data['data']=array('sorting' => $val);
		$this->index->update($this->table,$id,$data['data']);
	  }
	 
	 public function submit(){
		
		$id = $this->security->xss_clean($this->input->post('id'));
		$question_name = $this->security->xss_clean($this->input->post('question_name'));
		$category = $this->security->xss_clean($this->input->post('category'));
		$question_ans_1 = $this->security->xss_clean($this->input->post('question_ans_1'));
		$question_ans_2 = $this->security->xss_clean($this->input->post('question_ans_2'));
		$question_ans_3 = $this->security->xss_clean($this->input->post('question_ans_3'));
		$question_ans_4 = $this->security->xss_clean($this->input->post('question_ans_4'));
		$question_correct_ans = $this->security->xss_clean($this->input->post('question_correct_ans'));		
		
		$this->form_validation->set_rules('question_name', 'Question', 'required');
		$this->form_validation->set_rules('question_ans_1', 'Answer 1', 'required');
		$this->form_validation->set_rules('question_ans_2', 'Answer 2', 'required');
		$this->form_validation->set_rules('question_ans_3', 'Answer 3', 'required');
		$this->form_validation->set_rules('question_ans_4', 'Answer 4', 'required');
		$this->form_validation->set_rules('question_correct_ans', 'Correct Answer', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		
		if ($this->form_validation->run($this) == FALSE)
		{
			$errors = array_map('strip_tags',array('question_name'=> form_error('question_name'),'question_ans_1'=> form_error('question_ans_1'),'question_ans_2'=> form_error('question_ans_2'),'question_ans_3'=> form_error('question_ans_3'),'question_ans_4'=> form_error('question_ans_4'),'question_correct_ans'=> form_error('question_correct_ans'),'category'=> form_error('category')));
            echo json_encode($errors);
		}
		else
		{
			$data['data']=array('question_name' => $question_name,'question_ans_1' => $question_ans_1,'question_ans_2' => $question_ans_2,'question_ans_3' => $question_ans_3,'question_ans_4' => $question_ans_4,'question_correct_ans' => $question_correct_ans,'category' => $category);
			
			if($id==''){
			$id = $this->index->submit($this->table,$data['data']);	
			}else{
			$this->index->update($this->table,$id,$data['data']);
			}
			echo json_encode(array('success'=> 'Success'));
		}  
      }
	  
}
