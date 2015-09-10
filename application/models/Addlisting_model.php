<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Addlisting_model extends CI_Model {

    function addlisting_model() {
        // Call the Model constructor
        parent::__construct();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_post($id, $url) {




        //pass validation
        $data = array(
            'address' => $this->input->post('address'),
            'price' => $this->input->post('price'),
            'property_type' => $this->input->post('property_type'),
            'parking' => $this->input->post('parking'),
            'room' => $this->input->post('room'),
            'description' => $this->input->post('description'),
            'user_id' => $id,
            'image' => $url,
             'lat'=>$this->input->post('lat'),
            'lng'=>$this->input->post('lng')
        );


        //insert the form data into database

        $this->db->insert('upload', $data);

        $this->session->set_flashdata('success_upload', 'Successfully posted');
    }

}

?>