<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller {
	
	public function __construct()
	  {
		parent::__construct();
		$this->folder_key = 'portal';
		$this->load->model('index');		
		$this->data = $this->index->get_data_info('settings', 1);
	  }
    function index() {
        if( $this->session->userdata($this->folder_key.'_isLoggedIn') ) {
            redirect($this->folder_key.'/');
        } else {
            $this->show_login(false);
        }
    }
	
	public function login_user(){
		
		$username = $this->security->xss_clean($this->input->post('username'));
		$pass  = $this->security->xss_clean($this->input->post('password'));
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run($this) == FALSE)
		{
				$this->show_login();
		}
		else
		{
			if($this->index->validate_user($username,$pass)) {
				redirect($this->folder_key.'/');
			} else {
				$this->show_login(true);
			}
		}  
      }
	  
	public function show_login( $show_error = false ) {
		$data['settings'] = $this->data;
        if($show_error){$data['error'] = "Invalid Username / Password";}
        $this->load->view($this->folder_key.'/login',$data);
    }
	  
	public function logout_user() {
	  $this->session->sess_destroy();
	  $this->index();
	}
}
