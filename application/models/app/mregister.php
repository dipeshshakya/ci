<?php

class mregister extends CI_model {

    function user_model() {
        parent::__construct();
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////               
    public function add_user($firstname, $lastname, $phone, $email, $password, $address) {
        $data = array('firstname' => $firstname,
            'lastname' => $lastname,
            'address' => $address,
            'email' => $email,
            'password' => $password,
            'Phone' => $phone,
        );
        $this->db->insert('register_user', $data);
        return true;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////////                


    public function validate($email, $password) {

        // Prep the query

        $this->db->select('*');
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        $this->db->get('register_user');

        return TRUE;
    }

}
