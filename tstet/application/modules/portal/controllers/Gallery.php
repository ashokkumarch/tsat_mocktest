<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gallery extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
	    $this->table = 'gallery';
		$this->controller = 'gallery';
	  }
     public function index() {
		$data['list'] = $this->index->get_data_list('gallery');
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/gallery');
		$this->load->view($this->folder_key.'/links/bottom');
     }
	 
	 public function edit($id,$error = false) {
		$info = $this->index->get_data_info($this->table,$id);
		if($info->image==''){$info->image="assets/admin/images/no-image.gif";}
		$data = array('id' => $info->id,'link' => $info->link,'image' => base_url($info->image));
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
		$link = $this->security->xss_clean($this->input->post('link'));
		
		$this->form_validation->set_rules('link', 'Link', 'required');
		if($id==''){
		$this->form_validation->set_rules('file', '', 'callback_upload_image');	
		}
		if ($this->form_validation->run($this) == FALSE)
		{
			$errors = array_map('strip_tags',array('link'=> form_error('link'),'file'=> form_error('file')));
            echo json_encode($errors);
		}
		else
		{
			$data['data']=array('link' => $link);
			
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
									
				$image = 'uploads/gallery/'.$data_ary['file'];				
				$data['data']['image'] = $image;
			}
			if($id==''){
			$id = $this->index->submit($this->table,$data['data']);	
			}else{
			$this->index->update($this->table,$id,$data['data']);
			}
			echo json_encode(array('success'=> 'Success'));
		}	 			
	 }
	 
	 public function upload_image(){
		$config = array(
			'upload_path'   => 'uploads/gallery/',
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
		 }else{
			$this->form_validation->set_message('upload_image', 'Please choose a file to upload');
			return false;
		 }
	}	  
}
