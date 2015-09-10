<?php

class User_model extends CI_model {

    function user_model() {
        parent::__construct();
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////               
    function add_user() {
        $data = array('firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'Phone' => $this->input->post('Phone')
        );
        $this->db->insert('register_user', $data);
    }

//end add_user
////////////////////////////////////////////////////////////////////////////////////////////////////////////////                

    public function validate($email, $password) {

        // Prep the query

        $this->db->select('*');
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        // Run the query
        $query = $this->db->get('register_user');
        // Let's check if there are any results
        if ($query->num_rows() > 0) {

            foreach ($query->result() as $rows) {
                $newdata = array('id' => $rows->user_id,
                    'name' => $rows->firstname . ' ' . $rows->lastname,
                    //'firstname'=>$rows->firstname,
                    // 'lastname'=>$rows->lastname,
                    'address' => $rows->address,
                    'Phone' => $rows->Phone,
                    'email' => $rows->email,
                    'logged_in' => TRUE,
                );
            }
            $this->session->set_userdata($newdata);
            return TRUE;
        }

        return FALSE;
    }

//validate
    //////////////////////////////////////////////////////////////////////////////////////////////////////////

    function mypost() {
        $data = array();

        $id = $this->session->userdata['id'];
        $this->db->where('user_id', $id);
        $this->db->order_by('post_id', 'desc');
        $query = $this->db->get('upload',20);
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
            $query->free_result();
            return $data;
        }
    }

//       public function postcomment() {
//        $post_id = $this->uri->segment(3);
//        $this->load->library('form_validation');
//
//        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
//        if ($this->form_validation->run() == TRUE) {
//            $this->Preview_model->postcomment($post_id);
//        }
    }



//user_model

                
             
                