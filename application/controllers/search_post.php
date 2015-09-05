<?php

class search_post extends CI_Controller {

    function search_post() {
        parent:: __construct();
        $this->load->model('search_model');
    }

    function search_result() {
        $data['s'] = $this->search_model->get_search();

        $this->searchview($data);
    }

    function advance_search() {

        $data['s'] = $this->search_model->advance_search();
        if($data){
        $this->searchview($data);
    }
    else{
        $this->session->set_flashdata('no_search', 'NO result found!!!');
    }
    }
    function searchview($data) {
        if (!isset($this->session->userdata['logged_in'])) {
            $this->load->view('header');
            $this->load->view('navbar1');

            $this->load->view('getsearch', $data);
            $this->load->view('footer');
        } else {
            $this->load->view('header');
            $this->load->view('navbar2');

            $this->load->view('getsearch', $data);
            $this->load->view('footer');
        }
    }

}
