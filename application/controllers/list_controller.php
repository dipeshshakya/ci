<?php
class list_controller extends CI_Controller {
 
function list_controller(){
  parent::__Construct ();
   //$this->load->database(); // load database
  $this->load->model('list_model'); // load model
}
 
public function list_property() {
  $data['info']=$this->list_model->getlist(); 
  
  //print_r($data);
   
   
}


 
 
}
?>
