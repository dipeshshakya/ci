<?php 
class Signup_model extends CI_model{
	
	function signup_model(){
		parent::__construct();
		
		}
                
                
                
                function add_user(){
		$data=array('firstname'=>$this->input->post('firstname'),
					'lastname'=>$this->input->post('lastname'),
					'address'=>$this->input->post('address'),
					'email'=>$this->input->post('email'),
					'password'=>$this->input->post('password'),
					'phone_no'=>$this->input->post('phone'),
					'status'=>'1'
					);
		$s=$this->db->insert('register_user',$data);
		if($s){return TRUE;}
		}
                
}               
                