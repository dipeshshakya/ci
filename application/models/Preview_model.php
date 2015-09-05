<?php

class Preview_model extends CI_model{
	
	function preview_model(){
		parent::__construct();
		
		}
        function getpreview($post_id){
            $this->db->select('*');
            $this->db->from('upload u');
            $this->db->join('register_user r','r.user_id=u.user_id','right outer');
            $this->db->where('post_id',$post_id);
            $query=$this->db->get();
            return $query->result_array();
        }
}