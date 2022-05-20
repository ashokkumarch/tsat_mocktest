<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard_model extends CI_Model {
  
var $details;
public function get_dashboard($where)
{
	$this->db->select('invoice.*,(SELECT SUM(quantity) FROM invoice_products WHERE invoice_id = invoice.id) AS cnt,(SELECT title FROM areas WHERE id = invoice.area) AS area_tit');
	$this->db->from('invoice');
	$this->db->where('payment', '1');
	$this->db->where($where);
	$this->db->like('now', date('Y-m-d'));
	$this->db->order_by("id", "DESC");
	$query = $this->db->get();
	return $query->result_array();
}
public function get_orders_day()
{
	$this->db->select('COUNT(id) AS cnt');
	$this->db->from('invoice');
	$this->db->where('payment', '1');
	$this->db->where('delivery !=', '4');
	$this->db->like('now', date('Y-m-d'));
	$query = $this->db->get();
	return $query->row();
}
public function get_orders_sales()
{
	$this->db->select('SUM(total_price) AS cnt');
	$this->db->from('invoice');
	$this->db->where('payment', '1');
	$this->db->where('delivery !=', '4');
	$this->db->like('now', date('Y-m-d'));
	$query = $this->db->get();
	return $query->row();
}
public function get_orders_pending()
{
	$this->db->select('COUNT(id) AS cnt');
	$this->db->from('invoice');
	$this->db->where('payment', '1');
	$where = '(delivery="0" or delivery = "1")';
	$this->db->where($where);
	$this->db->like('now', date('Y-m-d'));
	$query = $this->db->get();
	return $query->row();
}
public function get_orders_pend()
{
	$this->db->select('COUNT(id) AS cnt');
	$this->db->from('invoice');
	$this->db->where('payment', '1');
	$this->db->where('delivery', '0');
	$query = $this->db->get();
	return $query->row();
}
public function get_orders_failed()
{
	$this->db->select('COUNT(id) AS cnt');
	$this->db->from('invoice');
	$this->db->where('payment!=', '1');
	//$this->db->where('delivery=', '4');
	$this->db->like('now', date('Y-m-d'));
	$query = $this->db->get();
	return $query->row();
}
public function get_orders($val)
{
	$query = $this->db->query("select COUNT(id) AS cnt from invoice where now >= '".$val."%' and payment=1 and delivery!=4");
	return $query->row();
}
public function get_orders_all()
{
	$query = $this->db->query("select COUNT(id) AS cnt from invoice where payment=1 and delivery!=4");
	return $query->row();
}
public function get_orders_custom($date1,$date2,$delivery_date,$payment,$delivery,$country)
{
	$str='';
	if($delivery!='all' && $delivery!=''){$str.=' and delivery='.$delivery;}else{$str.=' and delivery!=4';}
	if($country!='all' && $country!=''){$str.=' and country_id='.$country;}
	if($delivery_date!=''){$str.=' and delivery_date='.$delivery_date;}
	if($payment!='all' && $payment!=''){$str.=' and payment_method="'.$payment.'"';}
	$query = $this->db->query("select COUNT(id) AS cnt from invoice where payment=1 and now >= '".$date1." 00:00:00' and now <= '".$date2." 23:59:59'".$str);
   // echo $this->db->last_query();
	return $query->row();
}
public function get_income($val)
{
	$query = $this->db->query("select SUM(total_price) AS cnt from invoice where now >= '".$val."%' and payment=1 and delivery!=4");
	return $query->row();
}
public function get_income_all()
{
	$query = $this->db->query("select SUM(total_price) AS cnt from invoice where payment=1 and delivery!=4");
	return $query->row();
}
public function get_income_custom($date1,$date2,$delivery_date,$payment,$delivery,$country)
{
	$str='';
	if($delivery!='all' && $delivery!=''){$str.=' and delivery='.$delivery;}else{$str.=' and delivery!=4';}
	if($country!='all' && $country!=''){$str.=' and country_id='.$country;}
	if($delivery_date!=''){$str.=' and delivery_date='.$delivery_date;}
	if($payment!='all' && $payment!=''){$str.=' and payment_method="'.$payment.'"';}
	$query = $this->db->query("select SUM(total_price) AS cnt from invoice where payment=1 and now >= '".$date1." 00:00:00' and now <= '".$date2." 23:59:59'".$str);
	return $query->row();
}
public function get_dashboard_src($date1,$date2,$delivery_date,$payment,$delivery,$country)
{
	$this->db->select('invoice.*,(SELECT SUM(quantity) FROM invoice_products WHERE invoice_id = invoice.id) AS cnt,(SELECT title FROM areas WHERE id = invoice.area) AS area_tit');
	$this->db->from('invoice');
	$this->db->where('payment', '1');
	if($delivery_date!='all' && $delivery_date!=''){
	$this->db->where('delivery_date', $delivery_date);
	}
	if($payment!='all' && $payment!=''){
	$this->db->where('payment_method', $payment);
	}
	if($delivery!='all' && $delivery!=''){
	$this->db->where('delivery', $delivery);
	}else{
	//$this->db->where('delivery !=', 4);	
	}
	if($country!='all' && $country!=''){
	$this->db->where('country_id', $country);
	}
	$this->db->where('now >=', $date1.' 00:00:00');
	$this->db->where('now <=', $date2.' 23:59:59');
	$this->db->order_by("id", "DESC");
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_dashboard_failed()
{
	$this->db->select('invoice.*,(SELECT COUNT(id) FROM invoice_products WHERE invoice_id = invoice.id) AS cnt,(SELECT title FROM areas WHERE id = invoice.area) AS area_tit');
	$this->db->from('invoice');
	$this->db->where('payment', '0');
	$this->db->order_by("id", "DESC");
	$query = $this->db->get();
	return $query->result_array();
}
public function get_products($date1,$date2,$product_code)
{
	$this->db->select('*');
	$this->db->from('invoice_products');
	if($delivery!='all' && $product_code!=''){
	$this->db->where("(invoice_id IN (select id from invoice where payment=1 and delivery!=4 and now>='".$date1." 00:00:00' and now<='".$date2." 23:59:59')) and product_code='".$product_code."'");
	}else{
	$this->db->where("invoice_id IN (select id from invoice where payment=1 and delivery!=4 and now>='".$date1." 00:00:00' and now<='".$date2." 23:59:59')");
	}
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_areas($date1,$date2,$area)
{
	$this->db->select('id,total_price');
	$this->db->from('invoice');
	$this->db->where("payment=1 and delivery!=4 and now>='".$date1." 00:00:00' and now<='".$date2." 23:59:59' and area='".$area."'");
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_drivers($date1,$date2,$driver)
{
	$this->db->select('id,total_price,delivery,now');
	$this->db->from('invoice');
	$this->db->where("payment=1 and delivery!=4 and now>='".$date1." 00:00:00' and now<='".$date2." 23:59:59' and driver_id='".$driver."'");
	$this->db->order_by("id", "DESC");
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_staff($date1,$date2,$staff)
{
	$this->db->select('id,total_price,delivery,now');
	$this->db->from('invoice');
	$this->db->where("payment=1 and delivery!=4 and now>='".$date1." 00:00:00' and now<='".$date2." 23:59:59' and staff_id='".$staff."'");
	$this->db->order_by("id", "DESC");
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_members($date1,$date2,$member)
{
	$this->db->select('id,total_price,delivery,now');
	$this->db->from('invoice');
	$this->db->where("payment=1 and delivery!=4 and now>='".$date1." 00:00:00' and now<='".$date2." 23:59:59' and member_id='".$member."'");
	$this->db->order_by("id", "DESC");
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
}
?>