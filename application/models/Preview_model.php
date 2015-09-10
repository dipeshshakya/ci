<?php

class Preview_model extends CI_model {

    function preview_model() {
        parent::__construct();
    }

    function getpreview($post_id) {
        $this->db->select('*');
        $this->db->from('upload u');
      
    $this->db->join('register_user r', 'r.user_id=u.user_id');
//       $this->db->join('comment c','c.post_id=u.post_id');
      $this->db->where('u.post_id', $post_id);
        $query = $this->db->get();
        return $query->result_array();
//        SELECT * 
//FROM  `upload` u
//JOIN  `comment` c ON c.post_id = u.post_id
//JOIN  `register_user` r ON r.user_id = u.user_id
        
    }
    function getcomment($post_id) {
         $this->db->select('*');
        $this->db->from('comment c');
      
    
//       $this->db->join('comment c','c.post_id=u.post_id');
      $this->db->where('c.post_id', $post_id);
        $query = $this->db->get();
        return $query->result_array();
    }

    function mcomment($post_id) {
        $data = array('name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'comment' => $this->input->post('comment'),
            'post_id' => $post_id
        );
        $this->db->insert('comment', $data);
    }

}
