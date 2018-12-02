<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
  function __construct(){
      parent::__construct();
      $this->load->model('pondok_model');
      $this->load->helper('url_helper');
    }


    public function index(){
    $data['artikel']=$this->pondok_model->get_detail();
        $this->load->view('depan/header');
        $this->load->view('frontend/contact',$data);
        $this->load->view('depan/footer',$data);

    }
     public function create(){

       $this->load->helper('form');
       $this->load->library('form_validation');


       $this->form_validation->set_rules('nama','nama','required');
       $this->form_validation->set_rules('email','email','required');
       $this->form_validation->set_rules('text','text','required');


       if ($this->form_validation->run()=== FALSE) {
         $this->load->view('frontend/contact');
       }else {
           $site_key = '6LfbrFsUAAAAAGPzDoAIvGtHocBli24SUm1dvgXG'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
       $secret_key = '6LfbrFsUAAAAAEmLNghLKERdXLr2dGhgxtkhTQl7';  //Diisi dengan secret_key API Google reCapthca yang sobat miliki
     if(isset($_POST['g-recaptcha-response']))
           {
               $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
               $response = @file_get_contents($api_url);
               $data = json_decode($response, true);

               if($data['success'])
               {
                  $this->pondok_model->set_kirim();
         redirect('kontak');
               }
               else
               {
                   $success = false;
               }
           }
           else
           {
               $success = false;
           }

          //$dat = array('upload_data' => $this->upload->data());


       }
     }

    // public function create()
    // {
    //       $this->load->helper('form');
    //       $this->load->library('form_validation');
    //
    //       $this->form_validation->set_rules('nama','nama','required');
    //       $this->form_validation->set_rules('email','email','required');
    //       $this->form_validation->set_rules('text','text','required');
    //
    //       if ($this->form_validation->run()=== FALSE) {
    //           $this->load->view('frontend/contact');
    //
    //       }
    //
    //
    //
    // }


}
