<?php

class addpost extends CI_Controller {

    public function addpost() {
        parent::__construct();


        $this->load->model('app/maddpost');
    }

    function Add_post() {
        $address = $_POST['address'];
        $price = $_POST['price'];
        $property_type = $_POST['property_type'];
        $room = $_POST['room'];
        $parking = $_POST['parking'];
        $image = $_POST['image'];
        $description = $_POST['description'];
        $lat=$_POST['lat'];
        $lng=$_POST['lng'];
        $user_id=$_POST['user_id'];
        $result = $this->maddpost->add_post($address, $price, $property_type, $room, $parking, $image, $discription,$lng,$lat,$user_id);
        if($result)
            echo 1;
        else {
            echo 0;
       }
    }

}
