<?php

class mshow_post extends CI_Model {

    function getallrecent() {

        $data = array();

        $this->db->order_by('post_id', 'desc');

        $query = $this->db->get('upload', 20);
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
            $query->free_result();
            return $data;
        }
    }

    function mypost($id) {



        $this->db->where('user_id', $id);
        $query = $this->db->get('upload', 20);
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
            $query->free_result();
            return $data;
        }
    }

}

?>
