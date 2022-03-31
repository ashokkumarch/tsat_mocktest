<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Library extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
	    $this->table = 'library';
		$this->controller = 'library';
	  }
     public function index() {
		$data['list'] = $this->index->get_data_list($this->table);
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/library');
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
		$english = $this->security->xss_clean($this->input->post('english'));
		$arabic = $this->security->xss_clean($this->input->post('arabic'));
		
		$this->form_validation->set_rules('english', 'English', 'required');
		$this->form_validation->set_rules('arabic', 'Arabic', 'required');
		if ($this->form_validation->run($this) == FALSE)
		{
			$errors = array_map('strip_tags',array('english'=> form_error('english'),'arabic'=> form_error('arabic')));
            echo json_encode($errors);
		}
		else
		{
			$data['data']=array('english' => $english,'arabic' => $arabic);
			if($id==''){
			$id = $this->index->submit($this->table,$data['data']);	
			}else{
			$this->index->update($this->table,$id,$data['data']);
			}
			file_get_contents(str_replace($this->folder_key.'/','',base_url('lang/update_file')));
			echo json_encode(array('success'=> 'Success'));
		}  
      }
	  
}
