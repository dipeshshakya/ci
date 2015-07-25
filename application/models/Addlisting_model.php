<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addlisting_model extends CI_Model
{
    function addlisting_model()
    {
        // Call the Model constructor
        parent::__construct();
    }

    //get property table to populate the property name dropdown
    public function get_property_type()     
    { 
        $this->db->select('property_type_id');
        $this->db->select('property_type_name');
        $this->db->from('property_type');
        $query = $this->db->get();
        $result = $query->result();

        //array to store proprty id & property name
      $property_type_id = array('-SELECT-');
        $property_type_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($property_type_id, $result[$i]->property_type_id);
            array_push( $property_type_name, $result[$i]->property_type_name);
        }
        return $property_type_result = array_combine($property_type_id, $property_type_name);
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //get room table to populate the room  dropdown
    public function get_room()     
    { 
        $this->db->select('room_id');
        $this->db->select('room_no');
        $this->db->from('room');
        $query = $this->db->get();
        $result = $query->result();

        $room_id = array('-SELECT-');
        $room_no = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($room_id, $result[$i]->room_id);
            array_push($room_no, $result[$i]->room_no);
        }
        return $room_result = array_combine($room_id, $room_no);
    }
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     //get parking table to populate the parking name dropdown
     public function get_parking()     
    { 
        $this->db->select('parking_id');
        $this->db->select('parking_name');
        $this->db->from('parking');
        $query = $this->db->get();
        $result = $query->result();

        //array to store parkingid & parking name
      $parking_id = array('-SELECT-');
        $parking_name = array('-SELECT-');

        for ($i = 0; $i < count($result); $i++)
        {
            array_push($parking_id, $result[$i]->parking_id);
            array_push( $parking_name, $result[$i]->parking_name);
        }
        return $parking_result = array_combine($parking_id, $parking_name);
    }
    function add_post() {


          
            //pass validation
            $data = array(
                'address' => $this->input->post('address'),
                'price' => $this->input->post('price'),
                'property_type_id' => $this->input->post('property_type'),
                'parking_id' => $this->input->post('parking'),
                 'room_id' => $this->input->post('room'),
                //'upload_date' => @date('Y-m-d', @strtotime($this->input->post('uploaddate'))),
                'description' => $this->input->post('discription'),
            );

            //insert the form data into database
            $this->db->insert('upload', $data);

            //display success message
            $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"> details added to Database!!!</div>');
            redirect('Addlisting_controller/Add_post');
        }

}
?>
