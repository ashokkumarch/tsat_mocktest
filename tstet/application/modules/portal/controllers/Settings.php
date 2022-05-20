<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Settings extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
				
	    $this->table = 'settings';
		$this->controller = 'settings';
	  }
     public function index() {
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/settings');
		$this->load->view($this->folder_key.'/links/bottom');
     }
	 	 
	 public function submit(){
		
		$id = 1;
		$title = $this->security->xss_clean($this->input->post('title'));		
		$email  = $this->security->xss_clean($this->input->post('email'));
		$phone  = $this->security->xss_clean($this->input->post('phone'));
		$address  = $this->security->xss_clean($this->input->post('address'));
		$meta_title  = $this->security->xss_clean($this->input->post('meta_title'));
		$meta_keywords  = $this->security->xss_clean($this->input->post('meta_keywords'));
		$meta_description  = $this->security->xss_clean($this->input->post('meta_description'));
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		if ($this->form_validation->run($this) == FALSE)
		{
			$errors = array_map('strip_tags',array('title'=> form_error('title')));
            echo json_encode($errors);
		}
		else
		{
			
			$data['data']=array('title' => $title,'email' => $email,'phone' => $phone,'address' => $address,'meta_title' => $meta_title,'meta_keywords' => $meta_keywords,'meta_description' => $meta_description);
			
			if (isset($_FILES['file']) && $_FILES['file']['name'] != ''){
				$file = $this->file_upload('file');
				if(isset($file['upload_data']['file_name'])){													
				$image = 'uploads/images/'.$file['upload_data']['file_name'];				
				$data['data']['image'] = $image;
				}else if(isset($file['error'])){
				$errors['file'] = $file['error'];
				}
			}
			
			if (isset($_FILES['file1']) && $_FILES['file1']['name'] != ''){
				$file = $this->file_upload('file1');
				if(isset($file['upload_data']['file_name'])){													
				$favicon = 'uploads/images/'.$file['upload_data']['file_name'];				
				$data['data']['favicon'] = $favicon;
				}else if(isset($file['error'])){
				$errors['file1'] = $file['error'];
				}
			}
				
			if($errors!=''){
				$errors = array_map('strip_tags',$errors);
				echo json_encode($errors);
			}else{
			
			$this->index->update($this->table,$id,$data['data']);
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
