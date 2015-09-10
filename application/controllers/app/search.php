<?php

class search extends CI_Controller {

    function search_post() {
        parent:: __construct();
        $this->load->model('app/msearch');
    }

    function search_result() {
        $data['s'] = $this->msearch->get_search();
        echo json_encode($data);
      
    }

    function advance_search() {

        $data['s'] = $this->search_model->advance_search();
       echo json_encode($data);
      
    }

}
