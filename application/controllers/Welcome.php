<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
                $this->load->view('navbar1');
                $this->load->view('tabs');
                $this->load->view('footer');
	}
        
       
}
?>