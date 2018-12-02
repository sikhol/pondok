<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengasuh extends CI_Controller {
  function __construct(){
      parent::__construct();
      $this->load->model('pondok_model');
      $this->load->helper('url');
      if ($this->session->userdata('username') !="pengasuh") {
     redirect(base_url('login'));
   }

  }


  public function index($halaman='pengasuh'){
     $data['syahriah']=$this->pondok_model->get_santri('syahriah');


    $this->load->view('templates/pengasuh');
    $this->load->view('pengasuh/'.$halaman,$data);
    $this->load->view('templates/footer');
  }
}
