<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Banners extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
	    $this->table = 'banners';
		$this->controller = 'banners';
	  }
     public function index() {
		$data['list'] = $this->index->get_data_list('banners');
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/banners');
		$this->load->view($this->folder_key.'/links/bottom');
     }
	 
	 public function edit($id,$error = false) {
		$info = $this->index->get_data_info($this->table,$id);
		if($info->image==''){$info->image="assets/admin/images/no-image.gif";}
		$data = array('id' => $info->id,'image' => base_url($info->image),'type' => $info->type);
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
		$type = $this->security->xss_clean($this->input->post('type'));
		
		$this->form_validation->set_rules('type', 'Type', 'required');
		if ($this->form_validation->run($this) == FALSE)
		{
			$errors = array_map('strip_tags',array('type'=> form_error('type')));
            echo json_encode($errors);
		}
		else
		{
			$data['data']=array('type' => $type);
			
			$file = $this->file_upload('file');
			if(isset($file['upload_data']['file_name'])){													
			$image = 'uploads/images/'.$file['upload_data']['file_name'];				
			$data['data']['image'] = $image;
			}else if(isset($file['error'])){
			$errors['file'] = $file['error'];
			}
			
			if($errors!=''){
				$errors = array_map('strip_tags',$errors);
				echo json_encode($errors);
			}else{
			if($id==''){
			$id = $this->index->submit($this->table,$data['data']);	
			}else{
			$this->index->update($this->table,$id,$data['data']);
			}
			echo json_encode(array('success'=> 'Success'));
			}
		}	 			
	 }
	 
	 function file_upload($filename){
		$config['upload_path'] = 'uploads/images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '2048000';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
		$config['encrypt_name'] = true;
	
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload($filename)) {
		$data = array('error' => $this->upload->display_errors());
		} else {
		$data = array('upload_data' => $this->upload->data());			
		}
		return $data;
	}
}
