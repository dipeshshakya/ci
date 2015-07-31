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
             

                  public function validate($email,$password)
                    {
                   
                    // Prep the query
                      
                     $this->db->select('*'); 
                    $this->db->where('email', $email);
                    $this->db->where('password', $password);

                    // Run the query
                    $query = $this->db->get('register_user');
                    // Let's check if there are any results
                           if($query->num_rows()>0)
                            {
				
				foreach($query->result() as $rows)
                                        {
					$newdata=array('id'=>$rows->user_id,
                                              'name'=>$rows->firstname . ' ' . $rows->lastname,
                                                        //'firstname'=>$rows->firstname,
                                                       // 'lastname'=>$rows->lastname,
                                                        'address'=>$rows->address,
                                                        'Phone'=>$rows->Phone,
                                                        'email'=>$rows->email,

                                                        'logged_in'=>TRUE,
                                                        );
					
					}
					$this->session->set_userdata($newdata);
					return TRUE;
                            }
					
					return FALSE;
			
			
            
                    }//validate
    
    
    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    
     }//user_model

                
             
                