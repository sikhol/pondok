<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('pondok_model');

    }

    function index(){
        $this->load->view('frontend/login');
    }

    public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('pondok_model'); // load pondok_model
		$hasil = $this->pondok_model->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='pengasuh') {
				redirect('pengasuh');
			}
			elseif ($this->session->userdata('level')=='pengurus') {
				redirect('admin');
			}
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}


  function logout(){
      $this->session->sess_destroy();
      redirect(base_url('login'));
  }

}
