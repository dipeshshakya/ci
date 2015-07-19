<?php

class Signup_controller extends CI_Controller {
function signup_controller(){
		parent::__construct();
		//$this->load->model('signup_model');
		//$this->load->library('session');
		}
	
	function signup()
	{
		

		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Re-Enter Password', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');

		if ($this->form_validation->run() == True)
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
				//	$this->session->set_flashdata('success_message','Sign Up Successful');
				//	redirect('profile','refresh');
				//	}
			//$this->load->view('profile');
		}
	}
}
?>