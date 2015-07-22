<?php

class User_controller extends CI_Controller {

   

    function user_controller(){
		parent::__construct();
		$this->load->model('User_model');
		//$this->load->library('session');
		}
////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //register user
 //////////////////////////////////////////////////////////////////////////////////////////////////////////               
	function signup()
	{
		

		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname', 'Firstname', 'required');
		$this->form_validation->set_rules('lastname', 'Lastname', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('passconf', 'Re-Enter Password', 'required|matches[password]');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');

		if ($this->form_validation->run() ==TRUE)
                    {
			  
                  
                    $this->User_model->add_user();
                    $this ->load->view('profile');

                    }
		else
		{  
                    
                    $this->start_session();
			//if($success){
			//	$this->session->set_flashdata('success_message','Sign Up Successful');
			//	redirect('profile','refresh');
			//	}
			//$this->load->view('profile');
		}
	}//signup
        
        
        
        
 ///////////////////////////////////////////////////////////////////////////////
        
        //session function
///////////////////////////////////////////////////////////////////////////////        
        
        
        function start_session()
        {
            
            
              if(($this->session->userdata('email')!=""))
                    {
                     $this->load->view('profile');
                    }
                    else{

                     $this->load->view('header');
                    $this->load->view('navbar1');
                     $this->load->view("Register_view");
                    // $this->load->view('tabs');
                     $this->load->view('footer');
                    }
        }
//start_session() end
        
//////////////////////////////////////////////////////////////////////////////////////////////////////////////        
        
        //login
/////////////////////////////////////////////////////////////////////////////////////////////////////////////        
         public function login()
            {
             $email=$this->input->post('email');
             $password=md5($this->input->post('password'));

             $result=$this->User_model->login($email,$password);
             if($result) $this->load->view('profile');
             else        $this->start_session();
            }

        //login ends
        
        
            
 //////////////////////////////////////////////////////////////////////////////////////////////////////////////           
            
            //logout
////////////////////////////////////////////////////////////////////////////////////////////////////////////////            
        public function logout()
            {
             $newdata = array(
             'user_id'   =>'',
             'firstname'  =>'',
              'lastname'  =>'',
             'email'     => '',
             'logged_in' => FALSE,
             );
             $this->session->unset_userdata($newdata );
             $this->session->sess_destroy();
             $this->start_session();
            }
        
        //logout_ends
        
        
  /////////////////////////////////////////////////////////////////////////////////////////////////////////////      
        
        
        
        
        
        
        
        
        
        
}
?>