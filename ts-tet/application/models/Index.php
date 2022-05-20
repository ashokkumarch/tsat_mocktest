<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Model {
public function __construct()
{
	parent::__construct();
}

public function content($id)
{
	$this->db->select('*');
	$this->db->from('pages');
	$this->db->where('id',$id);
	$query = $this->db->get();
	return $query->row();
}
public function get_categories()
{
	$this->db->select('id,title');
	$this->db->from('category');
	$this->db->where('status', '1');
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_questions($id)
{
	$this->db->select('id,question_name,question_ans_1,question_ans_2,question_ans_3,question_ans_4,question_correct_ans');
	$this->db->from('questions');
	$this->db->where('category', $id);
	$this->db->where('status', '1');
	$this->db->order_by('id', 'RANDOM');
    $this->db->limit('30');
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function record_count($id)
{
	$this->db->select('COUNT(id) as cnt');
	$this->db->from('questions');
	$this->db->where('category', $id);
	$this->db->where('status', '1');
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->row();
}
public function registrations_count($phone)
{
	$this->db->select('COUNT(id) as cnt');
	$this->db->from('registrations');
	$this->db->where('phone', $phone);
	$this->db->where('status', '1');
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->row();
}
public function get_data($table)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where('status', '1');
	$query = $this->db->get();
	return $query->result_array();
}
public function get_data_sort($table,$key,$value)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where('status', '1');
	$this->db->order_by($key, $value);
	$query = $this->db->get();
	return $query->result_array();
}
public function get_data_sub($table,$key,$val)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where($key, $val);
	$this->db->where('status', '1');
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_data_sub_sort($table,$key,$val,$sort_key,$sort_val)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where($key, $val);
	$this->db->where('status', '1');
	$this->db->order_by($sort_key, $sort_val);
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_data_sub_stat($table,$key,$val)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where($key, $val);
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_data_sub_info($table,$key,$val)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where($key, $val);
	$query = $this->db->get();
	return $query->row();
}
public function get_data_sub_info_sort($table,$key,$val,$sort_key,$sort_val)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where($key, $val);
	$this->db->order_by($sort_key, $sort_val);
	$query = $this->db->get();
	return $query->row();
}	
public function get_data_info($table,$id)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where('id', $id);
	$query = $this->db->get();
	return $query->row();
}
public function get_data_src_list($table,$where,$sort_key=NULL,$sort_val=NULL,$limit=NULL,$start=NULL)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where('status', '1');
	$this->db->where($where);
	if($sort_key!='' && $sort_val!=''){
	$this->db->order_by($sort_key, $sort_val);
	}
	if($limit!='' && ($start!='' || $start=='0')){
    $this->db->limit($limit, $start);
    }
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_data_src($table,$where)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where($where);
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_data_src_info($table,$where,$sort_key=NULL,$sort_val=NULL)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where($where);
	$this->db->where('status', '1');	
	if($sort_key!='' && $sort_val!=''){
	$this->db->order_by($sort_key, $sort_val);
	}
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->row();
}
public function get_data_src_spl($table,$where,$sort_key,$sort_val,$start,$length)
{
	$this->db->select('*');
	$this->db->from($table);
	$this->db->where($where);
	$this->db->order_by($sort_key, $sort_val);
	$this->db->limit($length, $start);
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
public function get_data_count($table,$where)
{
	$this->db->select('COUNT(id) as cnt');
	$this->db->from($table);
	$this->db->where($where);
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->row();
}
public function submit($table,$data){
	$this->db->insert($table, $data);
	$id = $this->db->insert_id();
    $this->db->cache_delete_all();
	return $id;
}		
public function update($table,$id,$data){
	$this->db->where('id', $id);
	$this->db->update($table, $data);
    $this->db->cache_delete_all();
}
public function delete($table,$id){
	$this->db->where('id', $id);
	$this->db->delete($table);
    $this->db->cache_delete_all();
}
public function delete_sub($table,$key,$val){
	$this->db->where($key, $val);
	$this->db->delete($table);
    $this->db->cache_delete_all();
}
public function delete_src($table,$where){
	$this->db->where($where);
	$this->db->delete($table);
    $this->db->cache_delete_all();
}
public function check_unique($table, $key, $val, $id = '') {
	$this->db->where($key, $val);
	if($id) {
		$this->db->where_not_in('id', $id);
	}
	return $this->db->get($table)->num_rows();
}
public function get_library($lang)
{
	if($lang=='arabic'){
	$this->db->select('english as english,arabic as arabic');
	}else{
	$this->db->select('english as english,english as arabic');	
	}
	$this->db->from('library');
	$this->db->where('status', 1);
	$query = $this->db->get();
	//echo $this->db->last_query();
	return $query->result_array();
}
function forget( $email ) {
	$this->db->from('members');
	$this->db->where('email',$email );
	$query = $this->db->get();
	return $query->row()->id;
}

function forget_cnt( $email ) {
	$this->db->from('members');
	$this->db->where('email',$email );
	$query = $this->db->get()->result();
	return count($query);
}
}
?>
