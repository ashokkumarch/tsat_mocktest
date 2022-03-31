<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {
	
	public function __construct()
	  {
		parent::__construct();		
	  }	
}

class FrontendController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('index');		
		$this->data = $this->index->get_data_info('settings', 1);

		$this->cart_contents = !empty($_SESSION['cart_contents'])?$_SESSION['cart_contents']:NULL;	
		if($this->cart_contents === NULL){			
            $this->cart_contents = array('cart_total' => 0, 'total_items' => 0, 'discount_value' => 0, 'discount_coupon' => '', 'delivery_charges' => 0, 'grand_total' => 0);
        }
		$this->cart = $this->contents();
    }
	
	public function contents(){
        // rearrange the newest first
        if(isset($this->cart_contents)){$cart = array_reverse($this->cart_contents);}else{$cart = array();}
        // remove these so they don't create a problem when showing the cart table
        unset($cart['total_items']);
        unset($cart['cart_total']);
		unset($cart['discount_value']);
		unset($cart['discount_coupon']);
		unset($cart['discount_type']);
		unset($cart['delivery_charges']);
		unset($cart['grand_total']);		
		
        return $cart;
    }
}

class BackendController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('index');		
		$this->data = $this->index->get_data_info('settings', 1);
		$this->folder_key = 'portal';
		if(!$this->session->userdata($this->folder_key.'_isLoggedIn') ) {
			redirect('/'.$this->folder_key.'/login');
		}
		//$this->orders_cnt = $this->index->get_orders_pending()->cnt;
		$this->user = $this->index->get_data_info('users', $this->session->userdata($this->folder_key.'_user_id'));
		$menu_access = json_decode($this->user->access);
		$menu_str = "category = '0' order by sorting ASC";
		$this->menu_list = $this->index->get_data_src_list('menu_list', $menu_str);
		foreach($this->menu_list as $key => $value){			
			$menu_str = "category = '".$value['id']."' order by sorting ASC";
			$this->menu_list[$key]['list'] = $this->index->get_data_src_list('menu_list', $menu_str);
			$i=0;
			foreach($this->menu_list[$key]['list'] as $key1 => $value1){
			if($this->session->userdata($this->folder_key.'_user_id')==1){$sub_access = 1; $i++;}else if(in_array($value1['id'], $menu_access)){$sub_access = 1; $i++;}else{$sub_access = 0;}
			$this->menu_list[$key]['list'][$key1]['access'] = $sub_access;			
			}
			
			if($this->session->userdata($this->folder_key.'_user_id')==1){$tab_access = 1; $i++;}else if(in_array($value['id'], $menu_access) || $i>0){$tab_access = 1;}else{$tab_access = 0;}
			$this->menu_list[$key]['access'] = $tab_access;			
		}
    }
}