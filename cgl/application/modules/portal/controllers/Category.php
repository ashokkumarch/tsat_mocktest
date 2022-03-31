<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
	    $this->table = 'category';
		$this->controller = 'category';
	  }
     public function index() {
		$data['list'] = $this->index->get_data_list($this->table);
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/'.$this->controller);
		$this->load->view($this->folder_key.'/links/bottom');
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
		$title = $this->security->xss_clean($this->input->post('title'));
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		
		if ($this->form_validation->run($this) == FALSE)
		{
			$errors = array_map('strip_tags',array('title'=> form_error('title')));
            echo json_encode($errors);
		}
		else
		{
			$data['data']=array('title' => $title);
			
			if($id==''){
			$id = $this->index->submit($this->table,$data['data']);	
			}else{
			$this->index->update($this->table,$id,$data['data']);
			}
			$info = $this->index->get_data_info($this->table,$id);
			if($info->image!=''){$img = base_url($info->image);}else{$img = base_url('assets/admin/images/no-image.gif');}
			if($info->status==1){$status = 'Active';}else{$status = 'Inactive';}
			echo json_encode(array('success'=> 'Success'));
		}  
      }
}
