<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reports extends BackendController {
	
	public function __construct()
	  {
		parent::__construct();
	    $this->load->model('dashboard_model');
		$this->table = 'invoice';
		$this->controller = 'reports';
	  }
     public function index() {
		$days=array('0','7','30','90','All');
		$chart_months=array(date('M', mktime(0, 0, 0, date('m')-5, 1, date('Y'))),date('M', mktime(0, 0, 0, date('m')-4, 1, date('Y'))),date('M', mktime(0, 0, 0, date('m')-3, 1, date('Y'))),date('M', mktime(0, 0, 0, date('m')-2, 1, date('Y'))),date('M', mktime(0, 0, 0, date('m')-1, 1, date('Y'))),date('M'));
		foreach($days as $value){
		if($value=='All'){
		$data['orders'][$value] = $this->dashboard_model->get_orders_all();
		$data['income'][$value] = $this->dashboard_model->get_income_all();
		}else{
		$date=date('Y-m-d', strtotime('today - '.$value.' days'));	
		$data['orders'][$value] = $this->dashboard_model->get_orders($date);
		$data['income'][$value] = $this->dashboard_model->get_income($date);
		}
		if(isset($_POST['submit'])){
		$date1=date('Y-m-d',strtotime($this->input->post('date_from')));
		$date2=date('Y-m-d',strtotime($this->input->post('date_to')));
		$delivery_date=$this->input->post('delivery_date');
		$delivery=$this->input->post('delivery');
		$payment=$this->input->post('payment');
            
            
            if($payment=='VISAMASTER'){
             $payment='VISA/MASTER';
         }
            
		$country=$this->input->post('country');
		$data['orders']['custom'] = $this->dashboard_model->get_orders_custom($date1,$date2,$delivery_date,$payment,$delivery,$country);
		$data['income']['custom'] = $this->dashboard_model->get_income_custom($date1,$date2,$delivery_date,$payment,$delivery,$country);
		$data['list'] = $this->dashboard_model->get_dashboard_src($date1,$date2,$delivery_date,$payment,$delivery,$country);
		foreach($data['list'] as $key => $value){
		  $data['list'][$key]['products'] = $this->index->get_data_sub_stat('invoice_products','invoice_id',$value['id']);
		  foreach($data['list'][$key]['products'] as $keyy1 => $valuee1){
			$str = "invoice_id = '".$valuee1['invoice_id']."' AND product_id = '".$valuee1['id']."'";
			$data['list'][$key]['products'][$keyy1]['addons'] = $this->index->get_data_src('invoice_products_addons',$str);
		  }
		}
		}	
		}
		for($i=5;$i>=0;$i--){
		$date1=date('Y-m-01', mktime(0, 0, 0, date('m')-$i, 1, date('Y')));
		$date2=date('Y-m-t', mktime(0, 0, 0, date('m')-$i, 1, date('Y')));
		$data['orders_chart'][] = $this->dashboard_model->get_orders_custom($date1,$date2,$delivery_date='',$payment='',$delivery='',$country='');
		$data['income_chart'][] = $this->dashboard_model->get_income_custom($date1,$date2,$delivery_date='',$payment='',$delivery='',$country='');
		$data['orders_chart']['max']=max($data['orders_chart']);
		$data['income_chart']['max']=max($data['income_chart']);
		}
		$data['countries'] = $this->index->get_data('countries');
		
		$this->load->view($this->folder_key.'/links/top', $data);
		$this->load->view($this->folder_key.'/reports');
		$this->load->view($this->folder_key.'/links/bottom');
     }	
	 public function export($date1,$date2,$delivery_date,$payment,$delivery,$country) {
		$date1=date('Y-m-d',strtotime($date1));
		$date2=date('Y-m-d',strtotime($date2));
		// create file name
        $fileName = 'Reports('.date('d-m-Y').').xls';  
		// load excel library
        $this->load->library('excel');
        $empInfo = $this->dashboard_model->get_dashboard_src($date1,$date2,$delivery_date,$payment,$delivery,$country);
		$products=array();
		foreach($empInfo as $key => $value){
		  $products[$value['id']] = $this->index->get_data_sub_stat('invoice_products','invoice_id',$value['id']);
		}
	    foreach($products as $keyy => $valuee){
		  foreach($valuee as $keyy1 => $valuee1){
			$str = "invoice_id = '".$valuee1['invoice_id']."' AND product_id = '".$valuee1['id']."'";
			$products[$keyy][$keyy1]['addons'] = $this->index->get_data_src('invoice_products_addons',$str);
		  }
		}
		
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'Order Id');
		$objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Full Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'Phone');
		$objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Address');
		$objPHPExcel->getActiveSheet()->SetCellValue('F1', 'Payment Method');
		$objPHPExcel->getActiveSheet()->SetCellValue('G1', 'Price');
		$objPHPExcel->getActiveSheet()->SetCellValue('H1', 'Discount');
		$objPHPExcel->getActiveSheet()->SetCellValue('I1', 'Coupon');
		$objPHPExcel->getActiveSheet()->SetCellValue('J1', 'Delivery Charges');    
		$objPHPExcel->getActiveSheet()->SetCellValue('K1', 'Total Price');
		$objPHPExcel->getActiveSheet()->SetCellValue('L1', 'Delivery Type');
		$objPHPExcel->getActiveSheet()->SetCellValue('M1', 'Delivery Date');
		$objPHPExcel->getActiveSheet()->SetCellValue('N1', 'Delivery Time');		
		$objPHPExcel->getActiveSheet()->SetCellValue('O1', 'Delivery');
		$objPHPExcel->getActiveSheet()->SetCellValue('P1', 'Driver');
		$objPHPExcel->getActiveSheet()->SetCellValue('Q1', 'Staff');
		$objPHPExcel->getActiveSheet()->SetCellValue('R1', 'Payment');
		$objPHPExcel->getActiveSheet()->SetCellValue('S1', 'Payment Id');
		$objPHPExcel->getActiveSheet()->SetCellValue('T1', 'Transaction Id');
		$objPHPExcel->getActiveSheet()->SetCellValue('U1', 'Date');
		$objPHPExcel->getActiveSheet()->SetCellValue('V1', 'Products');
		
        // set Row
        $rowCount = 2;
        foreach ($empInfo as $element) {
			$str = '';
			if($element['area']!=''){
			$str.='Country: '.$element['country'].', Area: '.$element['area'];
			if($element['type']=='House'){$str.=', House: '.$element['house'];}
			else{$str.=', Building: '.$element['building'].', Floor: '.$element['floor'].', '.$element['type'].' : '.$element['flat'];}
			if($element['directions']!=''){$str.=', Directions: '.$element['directions'];}
		  }else{
			$str.='Address: '.$element['address'].', '.$element['address2'].', City: '.$element['city'].', State: '.$element['state'].', Country: '.$element['country'].' - '.$element['pincode'];
		  }
			
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $element['id']);
			$objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $element['fname']);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $element['email']);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $element['phone']);
			$objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $str);
			$objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $element['payment_method']);
			$objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $element['price']);
			$objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $element['discount']);
			$objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $element['coupon']);
			$objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $element['delivery_charges']);
			$objPHPExcel->getActiveSheet()->SetCellValue('K' . $rowCount, $element['total_price']);
			if($element['delivery_timing']==1){$delivery_timing='Now';}else if($element['delivery_timing']==2){$delivery_timing='Later';}
			$objPHPExcel->getActiveSheet()->SetCellValue('L' . $rowCount, $delivery_timing);
			$objPHPExcel->getActiveSheet()->SetCellValue('M' . $rowCount, $element['delivery_date']);
			$objPHPExcel->getActiveSheet()->SetCellValue('N' . $rowCount, $element['delivery_time']);
			if($element['delivery']==0){$delivery='Pending';}else if($element['delivery']==1){$delivery='Order Accepted';}else if($element['delivery']==2){$delivery='Parcel Ready';}else if($element['delivery']==3){$delivery='Delivered';}else if($element['delivery']==4){$delivery='Cancelled';}
			$objPHPExcel->getActiveSheet()->SetCellValue('O' . $rowCount, $delivery);
			if($element['payment']==0){$payment='Pending';}else if($element['payment']==1){$payment='Success';}else if($element['payment']==2){$payment='Failed';}
			if($element['driver_id']==0){$driver='';}
			else{
				$driv=$this->index->get_data_info('drivers',$element['driver_id']);
				$driver=$driv->fname.' '.$driv->lname;
			}
			if($element['staff_id']==0){$staff='';}
			else{
				$staf=$this->index->get_data_info('staff',$element['staff_id']);
				$staff=$staf->fname.' '.$staf->lname;
			}
			$objPHPExcel->getActiveSheet()->SetCellValue('P' . $rowCount, $driver);
			$objPHPExcel->getActiveSheet()->SetCellValue('Q' . $rowCount, $staff);
			$objPHPExcel->getActiveSheet()->SetCellValue('R' . $rowCount, $payment);
			$objPHPExcel->getActiveSheet()->SetCellValue('S' . $rowCount, $element['payment_id']);
			$objPHPExcel->getActiveSheet()->SetCellValue('T' . $rowCount, $element['transaction_id']);
			$objPHPExcel->getActiveSheet()->SetCellValue('U' . $rowCount, date('d-m-Y H:i:s',strtotime($element['now'])));
			$prods='';
			foreach($products[$element['id']] as $key => $value){
					$addons='';
					foreach($value['addons'] as $key1 => $value1){
						$addons.=$value1['addon_title'].', ';
					}
				$prods.=$value['product_name'].' - '.$value['product_code'];
				if($addons!=''){
					$prods.='('.rtrim($addons,', ').')';					
			    }
				$prods.='(Qty : '.$value['quantity'].')';
				$prods.=', ';
			}
			$objPHPExcel->getActiveSheet()->SetCellValue('V' . $rowCount, rtrim($prods,', '));
            $rowCount++;
        }
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'.$fileName);
		header('Cache-Control: max-age=0');
		
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        ob_end_clean();
        ob_start();
		$objWriter->save('php://output');
         exit;
    }  
}
