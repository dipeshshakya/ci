<?php
class list_model extends CI_Model {
 
function getlist()
    {

   $data=array();
    //$this->db->select("address,price,room.room_no,description");
  // $this->db->from('upload');
 // $this->db->join('property_type', 'property_type.property_type_id = upload.property_type_id');
 //  $this->db->join('room','room.room_id=upload.room_id');
// $this->db->join('parking','parking.parking_id=upload.parking_id');
        $this->db->order_by('post_id','desc');
        
   $query=$this->db->get('upload',20);
   if($query->num_rows()>0)
       {
       $data=$query->result_array();
       $query->free_result();
       return $data;
        }
  
  
    }
}
 

?>
