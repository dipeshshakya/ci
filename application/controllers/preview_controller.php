<?php

class preview_controller extends CI_Controller {

    function preview_controller() {
        parent::__Construct();
        $this->load->model('Preview_model');
    }

    public function preview() {
        $post_id = $this->uri->segment(3);
       $data['post_id']=$post_id;
        $data['preview'] = $this->Preview_model->getpreview($post_id);
         $data['comment'] = $this->Preview_model->getcomment($post_id);
        $this->show($data);
    }    


    public function postcomment($post_id) {
       
        $this->load->library('form_validation');

       $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == TRUE) {
            $this->Preview_model->mcomment($post_id);
            }
   
            redirect('preview_controller/preview/'.$post_id);
       
    }

    function show($data) {
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
