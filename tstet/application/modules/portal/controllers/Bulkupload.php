<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bulkupload extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
		$this->controller = 'bulkupload';
	  }
     public function index() {

		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/'.$this->controller);
		$this->load->view($this->folder_key.'/links/bottom');
     }	 

	 public function submit(){
		if (!file_exists('uploads/files/')) {
			mkdir('uploads/files/', 0777, true);
		}
		$config['upload_path']          = './uploads/files/';
		$config['allowed_types']        = 'csv';
		$config['encrypt_name'] 		= true;
		
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file'))
		{
				echo json_encode(array('file'=> $this->upload->display_errors()));
		}
		else
		{
				$array = array();
				$file_data = $this->upload->data();
				$file =  './uploads/files/'.$file_data['file_name'];
				$handle = fopen($file,"r"); 
				$i=0;
				while (($row = fgetcsv($handle, 10000, ",")) != FALSE) //get row vales
				{					
					if($i>0){
						$cnt = $this->index->get_data_count('questions','question_name="'.$this->db->escape($row[0]).'" and category="'.$row[1].'" and question_ans_1="'.$this->db->escape($row[2]).'" and question_ans_2="'.$this->db->escape($row[3]).'" and question_ans_3="'.$this->db->escape($row[4]).'" and question_ans_4="'.$this->db->escape($row[5]).'" and question_correct_ans="'.$row[6].'"')->cnt;
						if($cnt==0){					
							$array[] = array('question_name' => $this->db->escape($row[0]),'category' => $row[1],'question_ans_1' => $this->db->escape($row[2]),'question_ans_2' => $this->db->escape($row[3]),'question_ans_3' => $this->db->escape($row[4]),'question_ans_4' => $this->db->escape($row[5]),'question_correct_ans' => $row[6]);
						}
					}	
					$i++;		
				}
				$this->db->insert_batch('questions', $array);
				$_SESSION['success'] = 'Inserted Successfully';
				echo json_encode(array('success'=> 'Success'));
		}		
      }
}
