<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model {
  
var $details;
		
function validate_user( $email, $password ) {
	$this->db->from('members');
	$this->db->where('email',$email );
	$this->db->where('status', 1);
	$this->db->where( 'password', md5($password) );
	$login = $this->db->get()->result();
	if ( is_array($login) && count($login) == 1 ) {
		$this->details = $login[0];
		$this->set_session();
		return true;
	}
	return false;
}

public function check_unique_user($id = '', $email) {
	$this->db->where('email', $email);
	if($id) {
		$this->db->where_not_in('id', $id);
	}
	return $this->db->get('members')->num_rows();
}

public function check_unique_phone($id = '', $phone) {
	$this->db->where('phone', $phone);
	if($id) {
		$this->db->where_not_in('id', $id);
	}
	return $this->db->get('members')->num_rows();
}

public function register($data){
	$this->db->insert('members', $data);
	$id = $this->db->insert_id();
	$this->db->from('members');
	$this->db->where('id',$id );
	$register = $this->db->get()->result();
	$this->details = $register[0];	
	$this->set_session();
    $this->db->cache_delete_all();
	return true;
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

function set_session() {
	$this->session->set_userdata( array(
		'member_id'=>$this->details->id,
		'member_fname'=> $this->details->fname,
		'member_lname'=> $this->details->lname,
		'member_email'=> $this->details->email,
		'member_logged'=>true
		)
	);
}



}
?>