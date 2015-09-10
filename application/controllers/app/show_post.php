<?php

class show_post extends CI_Controller {

    function show_post() {
        parent::__Construct();
        //$this->load->database(); // load database
        $this->load->model('app/mshow_post'); // load model
    }

    public function recent_post() {
        $data['recent'] = $this->mshow_post->getallpost();
        echo json_encode($data);
       
    }
    public function mypost($id) {
        $data['mypost']=  $this->mshow_post->mypost($id);
        echo json_encode($data);
        
    }
}

?>