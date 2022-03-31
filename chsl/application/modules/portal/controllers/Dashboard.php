<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
	    
		$this->load->model('dashboard_model');
		$this->table = 'invoice';
		$this->controller = 'dashboard';		
	  }
     public function index() {		
	 	$where = "delivery=0"; 
		$data['invoice'] = $this->dashboard_model->get_dashboard($where);
		foreach($data['invoice'] as $key => $value){
		  $data['invoice'][$key]['products'] = $this->index->get_data_sub_stat('invoice_products','invoice_id',$value['id']);
		  foreach($data['invoice'][$key]['products'] as $keyy1 => $valuee1){
			$str = "invoice_id = '".$valuee1['invoice_id']."' AND product_id = '".$valuee1['id']."'";
			$data['invoice'][$key]['products'][$keyy1]['addons'] = $this->index->get_data_src('invoice_products_addons',$str);
		  }
		}
		$where = "delivery=1"; 
		$data['invoice1'] = $this->dashboard_model->get_dashboard($where);
		foreach($data['invoice1'] as $key => $value){
		$data['invoice1'][$key]['products'] = $this->index->get_data_sub_stat('invoice_products','invoice_id',$value['id']);
		  foreach($data['invoice1'][$key]['products'] as $keyy1 => $valuee1){
			$str = "invoice_id = '".$valuee1['invoice_id']."' AND product_id = '".$valuee1['id']."'";
			$data['invoice1'][$key]['products'][$keyy1]['addons'] = $this->index->get_data_src('invoice_products_addons',$str);
		  }
		}
		$where = "delivery=2";
		$data['invoice2'] = $this->dashboard_model->get_dashboard($where);
		foreach($data['invoice2'] as $key => $value){
		$data['invoice2'][$key]['products'] = $this->index->get_data_sub_stat('invoice_products','invoice_id',$value['id']);
		  foreach($data['invoice2'][$key]['products'] as $keyy1 => $valuee1){
			$str = "invoice_id = '".$valuee1['invoice_id']."' AND product_id = '".$valuee1['id']."'";
			$data['invoice2'][$key]['products'][$keyy1]['addons'] = $this->index->get_data_src('invoice_products_addons',$str);
		  }
		}
		$where = "delivery=3";
		$data['invoice3'] = $this->dashboard_model->get_dashboard($where);
		foreach($data['invoice3'] as $key => $value){
		$data['invoice3'][$key]['products'] = $this->index->get_data_sub_stat('invoice_products','invoice_id',$value['id']);
		  foreach($data['invoice3'][$key]['products'] as $keyy1 => $valuee1){
			$str = "invoice_id = '".$valuee1['invoice_id']."' AND product_id = '".$valuee1['id']."'";
			$data['invoice3'][$key]['products'][$keyy1]['addons'] = $this->index->get_data_src('invoice_products_addons',$str);
		  }
		}
		$where = "delivery=4";
		$data['invoice4'] = $this->dashboard_model->get_dashboard($where);
		foreach($data['invoice4'] as $key => $value){
		$data['invoice4'][$key]['products'] = $this->index->get_data_sub_stat('invoice_products','invoice_id',$value['id']);
		  foreach($data['invoice4'][$key]['products'] as $keyy1 => $valuee1){
			$str = "invoice_id = '".$valuee1['invoice_id']."' AND product_id = '".$valuee1['id']."'";
			$data['invoice4'][$key]['products'][$keyy1]['addons'] = $this->index->get_data_src('invoice_products_addons',$str);
		  }
		}
		
		$data['orders_day'] = $this->dashboard_model->get_orders_day();
		$data['orders_sales'] = $this->dashboard_model->get_orders_sales();
		$data['orders_pending'] = $this->dashboard_model->get_orders_pending();
		$data['orders_failed'] = $this->dashboard_model->get_orders_failed();
		$data['drivers'] = $this->index->get_data('drivers');
		$data['staff'] = $this->index->get_data('staff');
		
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/dashboard');
		$this->load->view($this->folder_key.'/links/bottom');
     }
	  
	  public function view($id,$error = false) {
		$data['id'] = $id;
		$data['list'] = $this->index->get_data_info('invoice',$id);
		$data['products'] = $this->index->get_data_sub_stat('invoice_products','invoice_id',$id);
		foreach($data['products'] as $key => $value){
		$data['products'][$key]['image'] = $this->index->get_products_image($value['product_id'])->image;
		$str = "invoice_id = '".$value['invoice_id']."' AND product_id = '".$value['id']."'";
		$data['products'][$key]['addons'] = $this->index->get_data_src('invoice_products_addons',$str);
		}
		$data['drivers'] = $this->index->get_data('drivers');
		$data['staff'] = $this->index->get_data('staff');
		$data['history'] = $this->index->get_data_sub_stat('invoice_history','invoice_id',$id);
		$this->load->view($this->folder_key.'/links/top', $data);		
		$this->load->view($this->folder_key.'/invoice_view');
		$this->load->view($this->folder_key.'/links/bottom');
	  }
	  
	  public function print_page($id,$error = false) {
		$data['id'] = $id;
		$data['list'] = $this->index->get_data_info('invoice',$id);
		$data['products'] = $this->index->get_data_sub_stat('invoice_products','invoice_id',$id);
		foreach($data['products'] as $key => $value){
		$data['products'][$key]['image'] = $this->index->get_products_image($value['product_id'])->image;
		$str = "invoice_id = '".$value['invoice_id']."' AND product_id = '".$value['id']."'";
		$data['products'][$key]['addons'] = $this->index->get_data_src('invoice_products_addons',$str);
		}
		$this->load->view($this->folder_key.'/print',$data);
	  }
	  
	  public function curstatus($status){
		$data['data']=array('cur_status' => $status);
		$this->index->update('settings',1,$data['data']);
	  }
	  
	  public function history($id) {
		$data['id'] = $id;
		$data['list'] = $this->index->get_data_info('invoice',$id);
		$data['history'] = $this->index->get_data_sub_stat('invoice_history','invoice_id',$id);
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/history');
		$this->load->view($this->folder_key.'/links/bottom');
     }
	 
	 public function delivery($id,$val){
		$data['history']=array('invoice_id' => $id,'status' => $val,'message' => '','now' => date('Y-m-d H:i:s'));
		$this->index->submit('invoice_history',$data['history']);
			
		$data['data']=array('delivery' => $val);
		$this->index->update('invoice',$id,$data['data']);
	  }
	  
	  public function drivers($id,$val){
		$data['data']=array('driver_id' => $val);
		$this->index->update('invoice',$id,$data['data']);
	  }
	  
	  public function staff($id,$val){
		$data['data']=array('staff_id' => $val);
		$this->index->update('invoice',$id,$data['data']);
	  }
	  
	  public function deliveryall(){
		extract($_REQUEST);
		$invoice=explode(',',urldecode($invoice));
		if($invoice!=''){
		foreach($invoice as $key => $value){
			$data['history']=array('invoice_id' => $value,'status' => $val,'message' => '','now' => date('Y-m-d H:i:s'));
			$this->index->submit('invoice_history',$data['history']);
			
			$data['data']=array('delivery' => $val);
			$this->index->update('invoice',$value,$data['data']);
		}
		}
	  }
	  
	  public function driversall(){
		extract($_REQUEST);
		$invoice=explode(',',urldecode($invoice));
		if($invoice!=''){
		foreach($invoice as $key => $value){
			$data['data']=array('driver_id' => $val);
			$this->index->update('invoice',$value,$data['data']);
		}
		}
	  }
	  
	  public function staffall(){
		extract($_REQUEST);
		$invoice=explode(',',urldecode($invoice));
		if($invoice!=''){
		foreach($invoice as $key => $value){
			$data['data']=array('staff_id' => $val);
			$this->index->update('invoice',$value,$data['data']);
		}
		}
	  }
	  
	   public function his_submit($id){
		
		$status = $this->security->xss_clean($this->input->post('status'));
		$message  = $this->security->xss_clean($this->input->post('message'));
		
		$this->form_validation->set_rules('status', 'Delivery Status', 'required');		
		if ($this->form_validation->run($this) == FALSE)
		{
				$this->history($id);
		}
		else
		{
			$data['data']=array('invoice_id' => $id,'status' => $status,'message' => $message,'now' => date('Y-m-d H:i:s'));
			$this->index->submit('invoice_history',$data['data']);
			$data['data']=array('delivery' => $status);
			$this->index->update($this->table,$id,$data['data']);
			redirect($this->folder_key.'/'.$this->controller.'/history/'.$id);
		}  
      }
	  
	  public function submit($id){
		
		$status = $this->security->xss_clean($this->input->post('status'));
		$message  = $this->security->xss_clean($this->input->post('message'));
		
		$this->form_validation->set_rules('status', 'Delivery Status', 'required');		
		if ($this->form_validation->run($this) == FALSE)
		{
				$this->view($id);
		}
		else
		{
			$data['data']=array('invoice_id' => $id,'status' => $status,'message' => $message,'now' => date('Y-m-d H:i:s'));
			$this->index->submit('invoice_history',$data['data']);
			$data['data']=array('delivery' => $status);
			$this->index->update($this->table,$id,$data['data']);
			redirect($this->folder_key.'/'.$this->controller.'/view/'.$id);
		}  
      }
	  
	  public function driver($id){
		
		$driver = $this->security->xss_clean($this->input->post('driver'));
		
		$this->form_validation->set_rules('driver', 'Driver', 'required');		
		if ($this->form_validation->run($this) == FALSE)
		{
				$this->view($id);
		}
		else
		{
			$data['data']=array('driver_id' => $driver);
			$this->index->update($this->table,$id,$data['data']);
			redirect($this->folder_key.'/'.$this->controller.'/view/'.$id);
		}  
      }
	  public function staffs($id){
		
		$staff = $this->security->xss_clean($this->input->post('staff'));
		
		$this->form_validation->set_rules('staff', 'Staff', 'required');		
		if ($this->form_validation->run($this) == FALSE)
		{
				$this->view($id);
		}
		else
		{
			$data['data']=array('staff_id' => $staff);
			$this->index->update($this->table,$id,$data['data']);
			redirect($this->folder_key.'/'.$this->controller.'/view/'.$id);
		}  
      }
	  
}
