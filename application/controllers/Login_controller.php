<?php

class Login_controller extends CI_Controller {
function login_controller(){
		parent::__construct();
		//$this->load->model('login_model');
		//$this->load->library('session');
		}
	
	function login()
	{
		
              //  $this->load->helper(array('form', 'url'));
	//	$this->load->library('form_validation');

		$this->form_validation->set_rules('password', 'Password','required|min_length[5]');
		
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == TRUE)
		{
			
                            $this->load->view('profile'); 
              
		}
		else  
		{  
               
                    $this->load->view('header');
                    $this->load->view('navbar1');
                    $this->load->view('tabs');
                    $this->load->view('footer');
			
		

// $success=$this->signup_model->add_user();
			//	if($success){
			//		$this->session->set_flashdata('success_message','Sign Up Successful');
			//		redirect('profile','refresh');
				//	}
			//$this->load->view('profile');
		}
	}
}
?>