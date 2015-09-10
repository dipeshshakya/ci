<?php

class addlisting extends CI_Controller {

    public function addlisting() {
        parent::__construct();


        $this->load->database();
    }

    public function uploadpost() {
        $this->load->model('Addlisting_model');

        //set validation rules
        $this->form_validation->set_rules('address', 'Address', 'required|callback_alpha_only_space');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|numeric');
        $this->form_validation->set_rules('property_type', 'Property Type');
        $this->form_validation->set_rules('room', 'Room');
        $this->form_validation->set_rules('parking', 'Parking');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|callback_alpha_only_space');


        if ($this->form_validation->run() == TRUE) {

            if (isset($this->session->userdata['logged_in'])) {
                $id = $this->session->userdata['id'];
                $url = $this->save();

                $this->Addlisting_model->add_post($id, $url);
                redirect('User_controller/login');
            } else {
                redirect('Welcome/index','refresh');
            }
        } else {
            if (isset($this->session->userdata['logged_in'])) {
                $this->session->set_flashdata('validation_error', 'Enter the correct input');
                redirect('User_controller/login');
            } else {
                redirect('Welcome/index','refresh');
            }
        }
    }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
    //custom validation function to accept only alpha and space input
    function alpha_only_space($str) {
        if (!preg_match("/^([-a-z ])+$/i", $str)) {
            $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    /////////////////////////////////////////////////////////////////////
    function save() {
        $type = explode('.', $_FILES["userfile"]["name"]);
        $type = $type[count($type) - 1];
        $uploaddir = 'uploads/' . uniqid(rand()) . '.' . $type;
        $uploadfile = $uploaddir;
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
        return $uploadfile;
    }

}
