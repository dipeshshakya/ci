<?php

class msearch extends CI_Model {

    function get_search() {

        $data = $_POST['address'];

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

        $address = $_POST["address"];
        $data['minprice'] = $_POST["minprice"];
        $data['maxprice'] = $_POST["maxprice"];
        $condition = "price BETWEEN " . "'" . $data['minprice'] . "'" . " AND " . "'" . $data['maxprice'] . "'";
        $property_type = $_POST['property_type'];
        $parking = $_POST['parking'];
        $room = $_POST["room"];

        $this->db->select('*');

        $this->db->from('upload');

        $this->db->where("address", $address);

        $this->db->where($condition);
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
