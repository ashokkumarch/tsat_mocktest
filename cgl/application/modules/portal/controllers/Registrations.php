<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registrations extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
	    $this->data = $this->index->get_data_info('settings',1);
		$this->table = 'registrations';
		$this->controller = 'registrations';
	  }
     public function index() {
		$data['list'] = $this->index->get_data_list($this->table);
		
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
			$cond.=" and (name like '%$searchk%' or email like '%$searchk%' or phone like '%$searchk%'".$condd.")";			
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

		if($value['status']==1){$status= 'Active';}else{$status=  'Inactive';}
		
		$valu[$sno][]=$sno+1;
		$valu[$sno][]=$value['name'];
		$valu[$sno][]=$value['qualification'];	
		$valu[$sno][]=$value['email'];
		$valu[$sno][]=$value['phone'];
		$valu[$sno][]=$value['score'];
		//$valu[$sno][]='<a href="javascript:void(0)" id="status'.$value['id'].'" onclick="return status('.$value['id'].',\'registrations\')">'.$status.'</a>';
		//$valu[$sno][]='<a href="javascript:void(0)" onclick="getinfo(\'registrations\','.$value['id'].')"  data-toggle="modal" data-target="#model" title="Edit"><i class="fa fa-pencil"></i></a>';
		if($value['questions']!=''){
		$valu[$sno][]='<a href="'.base_url('portal/registrations/view/'.$value['id']).'" title="Questions" target="_blank">Questions</a>';
		}else{
		$valu[$sno][]='';	
		}
		 
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
	 
	 public function view($id) {
		$data['info'] = $this->index->get_data_info($this->table,$id);
		
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/registration_questions');
		$this->load->view($this->folder_key.'/links/bottom');
     }
	 
	 public function edit($id) {
		$data = $this->index->get_data_info($this->table,$id);
		echo json_encode($data);
	  }
	  
	  public function status($id,$status){
		$data['id'] = $id;
		if($status == 'Active'){$newstatus='0';}else{$newstatus='1';}
		$data['data']=array('status' => $newstatus);
		$this->index->update($this->table,$id,$data['data']);
		if($newstatus==0){echo 'Inactive';}else if($newstatus==1){echo 'Active';}
	  }
	  
	  public function delete($id){
		$data['id'] = $id;
		$this->index->delete($this->table,$id);
		redirect($this->folder_key.'/'.$this->controller);
	  }
	  
	  public function check_email($value) {        
		if($this->input->post('id'))
			$id = $this->input->post('id');
		else
			$id = '';
		$result = $this->index->check_unique($this->table, 'email', $value, $id);
		if($result == 0)
			$response = true;
		else {
			$this->form_validation->set_message('check_email', 'Email Id already Exists');
			$response = false;
		}
		return $response;
	 }
	 
	 public function submit(){
		
		$id = $this->security->xss_clean($this->input->post('id'));
		$name = $this->security->xss_clean($this->input->post('name'));
		$email  = $this->security->xss_clean($this->input->post('email'));	
		$phone  = $this->security->xss_clean($this->input->post('phone'));	
		$qualification  = $this->security->xss_clean($this->input->post('qualification'));
		
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('qualification', 'Qualification', 'required');
		
		if ($this->form_validation->run($this) == FALSE)
		{
			$errors = array_map('strip_tags',array('name'=> form_error('name'),'email'=> form_error('email'),'phone'=> form_error('phone'),'qualification'=> form_error('qualification')));
            echo json_encode($errors);
		}
		else
		{
			
			$email_result = $this->index->check_unique($this->table, 'email', $email, $id);
			$phone_result = $this->index->check_unique($this->table, 'phone', $phone, $id);
			if($email_result != 0){
				$errors = array_map('strip_tags',array('email'=> 'Email already Exists'));
				echo json_encode($errors);
			}else if($phone_result != 0){
				$errors = array_map('strip_tags',array('phone'=> 'Phone Number already Exists'));
				echo json_encode($errors);
			}else{			
			$data['data']=array('name' => $name,'email' => $email,'phone' => $phone,'qualification' => $qualification);
			if($id==''){
			$id = $this->index->submit($this->table,$data['data']);	
			}else{
			$this->index->update($this->table,$id,$data['data']);
			}
			echo json_encode(array('success'=> 'Success'));
			}
		}
      }
	  
	  public function export() {
		// create file name
        $fileName = 'Members('.date('d-m-Y').').xls';  
		// load excel library
        $this->load->library('excel');
        $empInfo = $this->index->get_data_list($this->table);
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Phone');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Qualification');     
        // set Row
        $rowCount = 2;
        foreach ($empInfo as $element) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $element['name']);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $element['email']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $element['phone']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $element['qualification']);
            $rowCount++;
        }
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$fileName);
		header('Cache-Control: max-age=0');
		
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
		$objWriter->save('php://output');
    }	  
}
