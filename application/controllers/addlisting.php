<?php
class addlisting extends CI_Controller{
    
    
    public function addlisting() {
        parent::__construct();
        // $this->load->library('upload');
       // $this->load->model('Addlisting_model');
        
          $this->load->database();
      
          
       
        
    }
     
    public function uploadpost()
            {
      $this->load->model('Addlisting_model','Addlisting_model');
        //fetch data from  and parking tables
        $data['property_type'] = $this->Addlisting_model->get_property_type();
        $data['room'] = $this->Addlisting_model->get_room();
        $data['parking'] = $this->Addlisting_model->get_parking();
        //set validation rules
        $this->form_validation->set_rules('address', 'Address', 'required|callback_alpha_only_space');
        $this->form_validation->set_rules('price', 'Price', 'trim|required|numeric');
        $this->form_validation->set_rules('property_type', 'Property Type');
        $this->form_validation->set_rules('room', 'Room');
        $this->form_validation->set_rules('parking', 'Parking');
        $this->form_validation->set_rules('description', 'Description', 'trim|required|callback_alpha_only_space');
       
       
        if ($this->form_validation->run() == TRUE)
        { 
      
          //  $this->do_upload();
           if(isset($this->session->userdata['logged_in'])){
                        $id=$this->session->userdata['id'];
                          $this->Addlisting_model->add_post($id);
                          redirect('User_controller/login');
                        }else{
                        redirect('Welcome/index');
                        }
                  
        }
        else
        { 
             if(isset($this->session->userdata['logged_in'])){
                       $this->session->set_flashdata('validation_error','Enter the correct input');
                          redirect('User_controller/login');
                        }else{
                        redirect('Welcome/index');
                        }
             
        }
    }
 /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////   
    

    //custom validation function to accept only alpha and space input
    function alpha_only_space($str)
    {
        if (!preg_match("/^([-a-z ])+$/i", $str))
        {
            $this->form_validation->set_message('alpha_only_space', 'The %s field must contain only alphabets or spaces');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
    
    /////////////////////////////////////////////////////////////////////

//    
//    function do_upload()
//{
//        if($this->input->post('img_upload'))
//        {
//       $config['upload_path'] = './uploads/';
//        $config['allowed_types'] = 'gif|jpg|png';
//        $config['max_size']    = '1024';
//        $config['max_width']  = '1024';
//        $config['max_height']  = '768';
//        $this->load->library('upload', $config);
//        if ( ! $this->upload->do_upload())
//            {
//            $error = array('error' => $this->upload->display_errors());
//            //$this->load->view('profile.php', $error);
//            }
//        else
//            {
//           // $data=$this->upload->data();
//           // $this->thumb($data);
//          $file=array(
//            'img_name'=>$data['raw_name'],
//            'thumb_name'=>$data['raw_name'].'_thumb',
//            'ext'=>$data['file_ext'],
//            
//            );
//           $this->Addlisting_model->img_upload($file);
//           $data = array('upload_data' => $this->upload->data());
//           $data['msg']="Enter the correct input";
//           redirect('User_controller/login',$data);
//            }
//        }
//
//}
//        function thumb($data)
//            {
//            $config['image_library'] = 'gd2';
//            $config['source_image'] =$data['full_path'];
//            $config['create_thumb'] = TRUE;
//            $config['maintain_ratio'] = TRUE;
//            $config['width'] = 275;
//            $config['height'] = 250;
//            $this->load->library('image_lib', $config);
//            $this->image_lib->resize();
//            }

    
    
    
    
}
