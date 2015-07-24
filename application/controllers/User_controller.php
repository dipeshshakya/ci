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
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() ==TRUE)
                    {
			  
                  
                    $this->User_model->add_user();
                    $this ->load->view('profile');

                    }
		else
		{  
                    
                    $this->start_session();
		
		}
	}//signup
        
        
        
        
 ///////////////////////////////////////////////////////////////////////////////
        
        //session function
///////////////////////////////////////////////////////////////////////////////        
        
        
       public function start_session()
        {
            
            
              if(($this->session->userdata('email')!=""))
                    {
                     $this->load->view('profile');
                    }
                    else{
                    $data['error']="please input valid ";
                     $this->load->view('home',$data);
                  
                    }
        }
//start_session() end
         
        
        
//////////////////////////////////////<<<<<login>>>>>>>>///////////////////////////////////////////////////////////////////////        

        
//     public function login()
//    {
//        
//          //set validations
//         $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
//         $this->form_validation->set_rules("password", "Password", "trim|required");
//          if ($this->form_validation->run() == TRUE)
//         {
//              
//           
//               $auth=$this->User_model->login($this->input->post("email"),$this->input->post("password"));
//                    if($auth)
//                    {
//                        redirect('profile');
//                    }
//                   else {
//                       $this->start_session(); 
//                    }
//          }  
//        else {
//           $this->start_session();
//        }
//
//           }//login

 public function login(){
       // grab user input
                    $email =$this->input->post('email');
                    $password = $this->input->post('password');

        // Validate the user can login
        $result = $this->User_model->validate($email,$password);
        // Now we verify the result
                if( $result==TRUE){
                    
                // If user did validate, 
                    // Send them to members area
                    $this->load->view('profile');
                 
                }
                else{
                       
                    // If user did not validate, then show them login page again
                 $data['error']="please use valid email or register now";
                 $this->load->view('home',data);
                 
                  
                    }
        
        
            }
        
        

       
        
        
            
 //////////////////////////////////////// <login ends>//////////////////////////////////////////////////////////////////////           
            
            //logout
////////////////////////////////////////////////////////////////////////////////////////////////////////////////            
//        public function logout()
//            {
//             $newdata = array(
//             'user_id'   =>'',
//             'firstname'  =>'',
//              'lastname'  =>'',
//             'email'     => '',
//             'logged_in' => FALSE,
//             );
//             $this->session->unset_userdata($newdata );
//             $this->session->sess_destroy();
//             $this->start_session();
//            }
//        
        //logout_ends
        
        
  /////////////////////////////////////////////////////////////////////////////////////////////////////////////      
        
        
         function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('index.php', 'refresh');
 }
        
        
        
        
        
        
        
}//user_controller
?>