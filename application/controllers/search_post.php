<?php
class search_post  extends CI_Controller{
    
    function search_post(){
        parent:: __construct() ;
        $this->load->model('search_model');
    }
  function  search_result(){
    $data['s'] = $this->search_model->get_search();
            if(!isset($this->session->userdata['logged_in']))
            {
                $this->load->view('header');
                $this->load->view('navbar1');

                 $this->load->view('getsearch',$data);
                  $this->load->view('footer');

            }
       else {
                $this->load->view('header');
                $this->load->view('navbar2');

                 $this->load->view('getsearch',$data);
                  $this->load->view('footer');

            }

  }
    
    
    
}

