<?php

class User_controller extends CI_Controller {

    function user_controller() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url');

        $this->load->library('googlemaps', 'session');
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //register user
    //////////////////////////////////////////////////////////////////////////////////////////////////////////               
    function signup() {


        $this->load->library('form_validation');

        $this->form_validation->set_rules('firstname', 'Firstname', 'required');
        $this->form_validation->set_rules('lastname', 'Lastname', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
          $this->form_validation->set_rules('Phone', 'Phone', 'required');
        $this->form_validation->set_rules('passconf', 'Re-Enter Password', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == TRUE) {


            $this->User_model->add_user();

            $this->session->set_flashdata('success_message', 'Registration Successful');
            // grab user input
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Validate the user can login
            $result = $this->User_model->validate($email, $password);
            // Now we verify the result
            if ($result == TRUE) {


                // If user did validate, 
                // Send them to members area

                $this->map_view();
            }

            //  $data['msg']='Register successful';
            //  $this ->load->view('profile',$data);
        } else {
            $this->load->view('home');
            //$this->start_session();
        }
    }

    /////////////////////////////////////////////end-signup//////////////////////////////////////////////////////  

    public function login() {
        // grab user input
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Validate the user can login
        $result = $this->User_model->validate($email, $password);

        // Now we verify the result
        if ($result == TRUE) {

            $this->map_view();
            // If user did validate, 
            // Send them to members area
        } else {

            // If user did not validate, then show them login page again
            if (isset($this->session->userdata['logged_in'])) {



                $this->map_view();
            } else {
                redirect('Welcome/index');
            }
        }
    }

    /////////////////////////////////////////////////////////end-login-/////////////////////////////////////////////////          

    function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('index.php', 'refresh');
    }

    ///////////////////////////////////////////////////////map draggable///////////////////////////////////////////////     
    function map_view() {
       $data['mpost'] = $this->User_model->mypost();
      

        $this->load->view('header');
        $this->load->view('navbar2');
        $this->load->view('tabs2', $data);
        $this->load->view('footer');
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////     
// function latlng($lati,$lngi){
//        
////   }
//      $lat=lati;
//     $lng=Lngi;
//     echo ($lat+ "," + $lng);
//	
	
     
            




}//user_controller
?>