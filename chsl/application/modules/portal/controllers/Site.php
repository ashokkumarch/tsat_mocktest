<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends BackendController
{
  public function __construct()
	  {
		parent::__construct();
	  }
	 function _remap($method_name = 'index'){
		 $id=$this->uri->segment('2');
		 if($id==''){redirect($this->folder_key.'/');}
		 if(!method_exists($this, $method_name)){
			$this->index($id);
		 }
		 else{
			$this->{$method_name}();
		 }
	 }
   function index($lang) {
	   if($lang=='flowers' || $lang=='food' || $lang=='sweets' || $lang=='general' || $lang=='fashion'){$language='webykwco_weby_'.$lang;}else{$language='webykwco_weby';}
       $this->session->set_userdata('dbr_name', $language);	
       $_SESSION['dbr_name']=$language;
       redirect($this->folder_key.'/'.$this->controller);
   } 
}