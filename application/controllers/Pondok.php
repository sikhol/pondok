<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pondok extends CI_Controller {
  function __construct(){
      parent::__construct();
      $this->load->model('pondok_model');
      $this->load->helper('url_helper');

  }


	public function index() {
    $this->pondok_model->counter('data');
    $data['artikel']=$this->pondok_model->get_detail();


    $this->load->view('depan/header');
    $this->load->view('frontend/pondok',$data);
      $this->load->view('depan/footer',$data);
	}

  public function visi(){

      $data['visi']=$this->pondok_model->get_santri('visi');
      $data['artikel']=$this->pondok_model->get_detail();
      $this->load->view('depan/header');
      $this->load->view('frontend/visi',$data);
      $this->load->view('depan/footer',$data);

  }
  public function artikel(){

      $data['artikel']=$this->pondok_model->get_detail();
      $this->load->view('depan/header');
      $this->load->view('frontend/artikel',$data);
      $this->load->view('depan/footer',$data);

  }
  public function detail($id = NULL){

  $this->load->model('pondok_model');

  $data['artikel_news'] = $this->pondok_model->get_detail($id);
  $data['artikel']=$this->pondok_model->get_detail();
    $this->load->view('depan/header');

  $this->load->view('frontend/detail',$data);
      $this->load->view('depan/footer',$data);


}
public function informasi(){

    $data['informasi']=$this->pondok_model->get_santri('informasi');
    $data['artikel']=$this->pondok_model->get_detail();
    $this->load->view('depan/header');
    $this->load->view('frontend/informasi',$data);
    $this->load->view('depan/footer',$data);

}
public function kontak(){
$data['artikel']=$this->pondok_model->get_detail();
    $this->load->view('depan/header');
    $this->load->view('frontend/contact',$data);
    $this->load->view('depan/footer',$data);

}
// public function create(){
// die('berhasil');
//   $this->load->helper('form');
//   $this->load->library('form_validation');
//
//
//   $this->form_validation->set_rules('nama','nama','required');
//   $this->form_validation->set_rules('email','email','required');
//   $this->form_validation->set_rules('text','text','required');
//
//
//   if ($this->form_validation->run()=== FALSE) {
//     $this->load->view('frontend/kontak');
//   }else {
//       $site_key = '6LfbrFsUAAAAAGPzDoAIvGtHocBli24SUm1dvgXG'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
//   $secret_key = '6LfbrFsUAAAAAEmLNghLKERdXLr2dGhgxtkhTQl7'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki
// if(isset($_POST['g-recaptcha-response']))
//       {
//           $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
//           $response = @file_get_contents($api_url);
//           $data = json_decode($response, true);
//
//           if($data['success'])
//           {
//              $this->pondok_model->set_kirim();
//     redirect('kontak');
//           }
//           else
//           {
//               $success = false;
//           }
//       }
//       else
//       {
//           $success = false;
//       }
//
//     // $dat = array('upload_data' => $this->upload->data());
//
//
//   }
// }

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
