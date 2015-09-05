<?php

class preview_controller extends CI_Controller {

    function preview_controller() {
        parent::__Construct();
        $this->load->model('Preview_model');
    }

    public function preview() {
        $post_id = $this->uri->segment(3);
        $data['preview'] = $this->Preview_model->getpreview($post_id);
        if (isset($this->session->userdata['logged_in'])) {


            $this->load->view('header');
            $this->load->view('navbar2');

            $this->load->view('preview', $data);
            $this->load->view('footer');
        } else {

            $this->load->view('header');
            $this->load->view('navbar1');

            $this->load->view('preview', $data);
            $this->load->view('footer');
        }
    }

}
