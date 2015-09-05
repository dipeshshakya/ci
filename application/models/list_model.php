<?php

class list_model extends CI_Model {

    function getlist() {

        $data = array();
       
        $this->db->order_by('post_id', 'desc');

        $query = $this->db->get('upload', 20);
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
            $query->free_result();
            return $data;
        }
    }

}

?>
