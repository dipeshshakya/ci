<?php

class search_model extends CI_Model {

    function get_search() {

        $data = $this->input->post("search_post");

        $this->db->select('*');

        $this->db->from('upload ');

        $this->db->where_in(" address", $data);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
            $query->free_result();
            return $data;
        }
    }

    function advance_search() {

        $address = $this->input->post("address");
        $data['minprice'] = $this->input->post("minprice");
        $data['maxprice'] = $this->input->post("maxprice");
        $condition = "price BETWEEN " . "'" . $data['minprice'] . "'" . " AND " . "'" . $data['maxprice'] . "'";
        $property_type = $this->input->post('property_type');
        $parking = $this->input->post('parking');
        $room = $this->input->post("room");

        $this->db->select('*');

        $this->db->from('upload');

        $this->db->where("address", $address);

//        $this->db->where($condition);
        $this->db->where('property_type', $property_type);

        $this->db->where('room', $room);
        $this->db->where('parking', $parking);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
            $query->free_result();
            return $data;
        }
    }

}
