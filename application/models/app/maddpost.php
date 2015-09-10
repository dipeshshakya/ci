<?php

class maddpost extends CI_Model {

    function maddpost() {
        // Call the Model constructor
        parent::__construct();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function add_post($address, $price, $property_type, $room, $parking, $image,$description,$lat,$lng,$user_id) {
        $data = array(
            'address' => $address,
            'price' => $price,
            'property_type' => $property_type,
            'parking' => $parking,
            'room' => $room,
            'description' => $description,
             'user_id' => $id,
            'image' => $image,
            'lat'=>$lat,
             'lng'=>$lng
        );


        //insert the form data into database

        $this->db->insert('upload', $data);
        return TRUE;
    }

}
