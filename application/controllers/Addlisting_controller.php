<?php
class Addlisting_controller extends CI_Controller{
    
    
    public function addlisting() {
        parent::__construct();
       // $this->load->model('Addlisting_model');
          $this->load->database();
       
        
    }
     
    public function uploadpost()
            {
        $this->load->model('Addlisting_model','Addlisting_model');
        //fetch data from  and parking tables
        $data['property_type'] = $this->Addlisting_model->get_property_type();
        $data['room'] = $this->Addlisting_model->get_room();
        $data['parking'] = $this->Addlisting_model->get_parking();
        //set validation rules
        $this->form_validation->set_rules('address', 'Location', 'trim|required|xss_clean|callback_alpha_only_space');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|numeric');
        $this->form_validation->set_rules('property_type', 'property Type', 'callback_combo_check');
        $this->form_validation->set_rules('room', 'Room', 'callback_combo_check');
         $this->form_validation->set_rules('parking', 'Parking', 'callback_combo_check');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean|callback_alpha_only_space');
       

        if ($this->form_validation->run() == FALSE)
        {
            //fail validation
            $this->load->view('profile', $data);
        }
        else
        { $this->User_model->add_post();
                    $this ->load->view('profile');}
    }
    
    
     //custom validation function for dropdown input
    function combo_check($str)
    {
        if ($str == '-SELECT-')
        {
            $this->form_validation->set_message('combo_check', 'Valid %s Name is required');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    
    //custom validation function to accept only alpha and space input
    function alpha_only_space($str)
    {
        if (!preg_match("/^([-a-z ])+$/i", $str))
        {
            $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    
    
    
    
    
    
    
    
    
    
}
