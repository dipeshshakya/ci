<?php

class search_model extends CI_Model{
    
   function get_search() {
       
  $data = $this->input->post("search_post");
  $this->db->like("address",$data);
  $this->db->or_like("price",$data);
  $this->db->or_like("room_id",$data);
 
  $query = $this->db->get("upload");
   if($query->num_rows()>0)
       {
       $data=$query->result_array();
       $query->free_result();
       return $data;
        }
} 
    
}
