<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
	    $this->table = 'pages';
		$this->controller = 'pages';
	  }
     public function index() {
		$data['list'] = $this->index->get_data_list($this->table);
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/pages');
		$this->load->view($this->folder_key.'/links/bottom');
     }
	 
	 
	 public function addedit($error = false) {
		if(isset($_GET['id'])){
		$id = $_GET['id'];
		$data['info'] = $this->index->get_data_info('pages',$id);
		}
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/page');
		$this->load->view($this->folder_key.'/links/bottom');
	  }
	  
	  public function delete($id){
		$data['id'] = $id;
		$this->index->delete($this->table,$id);
		redirect($this->folder_key.'/'.$this->controller);
	  }
	 
	 public function submit(){
		
		$id = $this->security->xss_clean($this->input->post('id'));
		$title = $this->security->xss_clean($this->input->post('title'));
		$description  = $this->security->xss_clean($this->input->post('description'));
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		if(isset($_FILES['file']['name']) && $_FILES['file']['name']!=""){
		$this->form_validation->set_rules('file', '', 'callback_upload_image');
		}
		if ($this->form_validation->run($this) == FALSE)
		{
			$errors = array_map('strip_tags',array('title'=> form_error('title'),'description'=> form_error('description')));
            echo json_encode($errors);
		}
		else
		{
			$data['data']=array('title' => $title,'description' => $description);
			if(isset($_FILES['file']['name']) && $_FILES['file']['name']!=""){
				$upload_data = $this->upload->data();
				
				$data_ary = array(
				'title'     => $upload_data['client_name'],
				'file'      => $upload_data['file_name'],
				'width'     => $upload_data['image_width'],
				'height'    => $upload_data['image_height'],
				'type'      => $upload_data['image_type'],
				'size'      => $upload_data['file_size'],
				'path'      => $upload_data['full_path'],
				'date'      => time(),
				);
									
				$image = 'uploads/images/'.$data_ary['file'];
				$data['data']['image'] = $image;
			}
			if($id==''){
			$this->index->submit($this->table,$data['data']);	
			}else{
			$this->index->update($this->table,$id,$data['data']);
			}
			echo json_encode(array('success'=> 'Success'));
		}  
      }
	  
	  public function upload_image(){
		$config = array(
            'upload_path'   => 'uploads/images/',
            'allowed_types' => 'gif|jpg|png|jpeg',
            'max_size'      => '2048000',
            //'max_width'     => '1024',
            //'max_height'    => '768',
            'encrypt_name'  => true,
			 );
			$this->load->library('upload', $config);	
			if ($this->upload->do_upload('file')) {
				return TRUE;
			}else if (isset($_FILES['file']) && $_FILES['file']['size'] != 0) {
				$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG", "JPEG", "GIF", "PNG");
				$allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
				$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
				$detectedType = exif_imagetype($_FILES['file']['tmp_name']);
				$type = $_FILES['file']['type'];
				$dimen = getimagesize($_FILES['file']['tmp_name']);
				$width = $dimen[0]; $height = $dimen[1];
				if (!in_array($detectedType, $allowedTypes)) {
					$this->form_validation->set_message('upload_image', 'Invalid Image Content!');
					return FALSE;
				}else if(filesize($_FILES['file']['tmp_name']) > $config['max_size']) {
					$this->form_validation->set_message('upload_image', 'The Image file size shoud not exceed '.($config['max_size']/102400).'MB!');
					return FALSE;
				}else if(!in_array($extension, $allowedExts)) {
					$this->form_validation->set_message('upload_image', "Invalid file extension {$extension}");
					return FALSE;
				/*}else if($width>$config['max_width'] || $height>$config['max_height']){
					$this->form_validation->set_message('upload_image', "Image sizes should be less than ".$config['max_width']." and ".$config['max_height']);
					return FALSE;*/
				}
			  }
	}
	
	  
}
