<?php 
class User_model extends CI_model{
	
	function user_model(){
		parent::__construct();
		
		}
                
  ///////////////////////////////////////////////////////////////////////////////////////////////////////////////               
                function add_user(){
		$data=array('firstname'=>$this->input->post('firstname'),
					'lastname'=>$this->input->post('lastname'),
					'address'=>$this->input->post('address'),
					'email'=>$this->input->post('email'),
					'password'=>$this->input->post('password'),
					'Phone'=>$this->input->post('Phone'),
					
					);
                $this->db->insert('register_user',$data);
	
		}//end add_user
////////////////////////////////////////////////////////////////////////////////////////////////////////////////                
                //user login
                function login($email,$password)
                    {
                     $this->db->where("email",$email);
                     $this->db->where("password",$password);

                     $query=$this->db->get("register_user");
                     if($query->num_rows()>0)
                     {
                      foreach($query->result() as $rows)
                      {
                       //add all data to session
                       $newdata = array(
                         'user_id'  => $rows->id,
                         'firstname'  => $rows->firstname,
                         'email'    => $rows->email,
                         'logged_in'  => TRUE,
                       );
                      }//for loop
                      $this->session->set_userdata($newdata);
                      return true;
                     }
                     return false;
                    }//end user login

                
}               
                