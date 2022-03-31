<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu_list extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
	    $this->table = 'menu_list';
		$this->controller = 'menu_list';
	  }
     public function index() {
		$data['list'] = $this->index->get_data_list($this->table);
		foreach($data['list'] as $key => $row)
		{
		  if($row['category']==0){
		  $data['list'][$key]['category'] = 'Parent';
		  }else{
		  $data['list'][$key]['category'] = $this->index->get_data_info('menu_list',$row['category'])->title;
		  }
		}
		$data['menu_list'] = $this->index->get_data_sub('menu_list','category','0');
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/menu_list');
		$this->load->view($this->folder_key.'/links/bottom');
     }
	 
	 public function edit($id) {
		$data = $this->index->get_data_info($this->table,$id);
		if($data->image==''){$data->image=base_url("assets/admin/images/no-image.gif");}else{$data->image=base_url($data->image);}
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
		$title = $this->security->xss_clean($this->input->post('title'));
		$controller = $this->security->xss_clean($this->input->post('controller'));
		$category = $this->security->xss_clean($this->input->post('category'));
		$icon = $this->security->xss_clean($this->input->post('icon'));
		
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('category', 'Category', 'required');
		if ($this->form_validation->run($this) == FALSE)
		{
			$errors = array_map('strip_tags',array('title'=> form_error('title'),'category'=> form_error('category')));
            echo json_encode($errors);
		}
		else
		{
			$data['data']=array('title' => $title,'controller' => $controller,'category' => $category,'icon' => $icon);
			if($id==''){
			$id = $this->index->submit($this->table,$data['data']);	
			}else{
			$this->index->update($this->table,$id,$data['data']);
			}
			echo json_encode(array('success'=> 'Success'));
		}  
      }
}
