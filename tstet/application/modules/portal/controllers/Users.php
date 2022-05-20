<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
		        
	    $this->table = 'users';
		$this->controller = 'users';
	  }
     public function index() {
		$data['list'] = $this->index->get_data_list($this->table);
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/users');
		$this->load->view($this->folder_key.'/links/bottom');
     }
	 
	  public function addedit($error = false) {
		if(isset($_GET['id'])){
		$id = $_GET['id'];
		$data['info'] = $this->index->get_data_info('users',$id);
		}
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/user');
		$this->load->view($this->folder_key.'/links/bottom');
	  }
	 
	 public function edit($id) {
		$info = $this->index->get_data_info($this->table,$id);
		$data = array('id' => $info->id,'name' => $info->name,'username' => $info->username,'email' => $info->email,'type' => $info->type,'access' => $info->access);
		echo json_encode($data);
	  }
	  
	  public function delete($id){
		$data['id'] = $id;
		$this->index->delete($this->table,$id);
		redirect($this->folder_key.'/'.$this->controller);
	  }
	 
	 public function check_user($value) {        
		if($this->input->post('id'))
			$id = $this->input->post('id');
		else
			$id = '';
		$result = $this->index->check_unique($this->table, 'username', $value, $id);
		if($result == 0)
			$response = true;
		else {
			$this->form_validation->set_message('check_user', 'Username already Exists');
			$response = false;
		}
		return $response;
	 }
	 
	 public function check_username($value) {        
		if($this->input->post('id'))
			$id = $this->input->post('id');
		else
			$id = '';
		$result = $this->index->check_unique($this->table, 'username', $value, $id);
		if($result == 0)
			$response = true;
		else {
			$this->form_validation->set_message('check_username', 'Username already Exists');
			$response = false;
		}
		return $response;
	 }
	  
	  public function submit(){
		
		$id = $this->security->xss_clean($this->input->post('id'));
		$name = $this->security->xss_clean($this->input->post('name'));
		$email  = $this->security->xss_clean($this->input->post('email'));
		$username  = $this->security->xss_clean($this->input->post('username'));
		$password  = $this->security->xss_clean($this->input->post('password'));
		$type  = $this->security->xss_clean($this->input->post('type'));
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		if($id==''){
		$this->form_validation->set_rules('password', 'Password', 'required');
		}
		$this->form_validation->set_rules('type', 'Type', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$errors = array_map('strip_tags',array('name'=> form_error('name'),'email'=> form_error('email'),'username'=> form_error('username'),'password'=> form_error('password'),'type'=> form_error('type')));
            echo json_encode($errors);
		}
		else
		{
			$result = $this->index->check_unique($this->table, 'username', $username, $id);
			if($result != 0){
				$errors = array_map('strip_tags',array('username'=> 'Username already Exists'));
				echo json_encode($errors);
			}else{
			$access = array();
			if($this->input->post('access')){
			foreach($this->input->post('access') as $key => $value){
				$access[]=$value; 
			}}
			$accesss = json_encode($access);
			$data['data']=array('name' => $name,'email' => $email,'username' => $username,'type' => $type,'access' => $accesss);
			if($id==''){
			$id = $this->index->submit($this->table,$data['data']);	
			}else{
			$this->index->update($this->table,$id,$data['data']);
			}
			if($password!=''){
			$pass=md5($password);			
			$data['pass']=array('password' => $pass);
			$this->index->update($this->table,$id,$data['pass']);
			}
			echo json_encode(array('success'=> 'Success'));
		  }
		}  
      }
	 	
	  
}
