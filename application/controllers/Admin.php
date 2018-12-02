<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  function __construct(){
      parent::__construct();
      $this->load->model('pondok_model');
      $this->load->helper('url');
      if ($this->session->userdata('username') !="pengurus") {
     redirect(base_url('login'));
   }

  }


   public function index($halaman='index'){

     $data['informasi']=$this->pondok_model->get_santri('informasi');
     $data['tabungan']=$this->pondok_model->get_santri('tabungan');
     $data['visi']=$this->pondok_model->get_santri('visi');
     $data['artikel']=$this->pondok_model->get_santri('artikel');
     $data['syahriah']=$this->pondok_model->get_santri('syahriah');
     $data['galeri']=$this->pondok_model->get_santri('galeri');
     $data['graf'] = $this->pondok_model->get_counter('data');


     $this->load->view('templates/header');
     $this->load->view('admin/'.$halaman,$data);
     $this->load->view('templates/footer');
   }



     public function tambahartikel(){
         $this->load->helper('form');
       $this->load->library('form_validation');


        $this->form_validation->set_rules('judul','judul','required');
        $this->form_validation->set_rules('deskripsi','deskripsi','required');




          $nama = 'file_'.time();

         $config['upload_path']	 = './assets/img/uploads/';

         $config['allowed_types'] = 'gif|jpg|png';
         $config['max_size']		 = '5000';
         $config['max_width']	 = '5000';
         $config['max_height']	 = '5000';
         $config['file_name']	 = $nama;

       $this->load->library('upload', $config);


        if ($this->form_validation->run() == TRUE && $this->upload->do_upload('foto'))
         {

           $gambar = $this->upload->data();

           $data = array(
           'judul'=> $this->input->post('judul',TRUE),
           'deskripsi'=> $this->input->post('deskripsi',TRUE),
           'gambar'		=> $gambar['file_name']


         );

         $this->pondok_model->insert($data,'artikel');
         echo "
         <script>
           alert('data berhasil ditambahkan');
           window.location.href = '" . base_url() . "admin/artikel';
         </script>
         ";

         }  else   {
           $data['foto'] = '';
           if (! $this->upload->do_upload('foto'))
           {
              $error = array('error' => $this->upload->display_errors());
                            $this->load->view('templates/header');
                           $this->load->view('admin/tambahartikel', $error);
           }


     }
    }


         public function tambahsyahriah(){
             $this->load->helper('form');
           $this->load->library('form_validation');


            $this->form_validation->set_rules('nama','nama','required');
            $this->form_validation->set_rules('jumlah','jumlah','required');
            $this->form_validation->set_rules('tanggal','tanggal','required');


            if ($this->form_validation->run() == TRUE )
             {



               $data = array(
               'nama'=> $this->input->post('nama',TRUE),
               'jumlah_pembayaran'=> $this->input->post('jumlah',TRUE),
               'tanggal'=> $this->input->post('tanggal',TRUE),



             );

             $this->pondok_model->insert($data,'syahriah');
             echo "
             <script>
               alert('data berhasil ditambahkan');
               window.location.href = '" . base_url() . "admin/syahriah';
             </script>
             ";

             }  else   {
               $this->load->view('templates/header');
                $this->load->view('admin/tambahsyahriah');



         }
        }

        public function tambahtabungan(){
            $this->load->helper('form');
          $this->load->library('form_validation');


           $this->form_validation->set_rules('nama','nama','required');
           $this->form_validation->set_rules('jumlah','jumlah','required');
           $this->form_validation->set_rules('tanggal','tanggal','required');


           if ($this->form_validation->run() == TRUE )
            {



              $data = array(
              'nama'=> $this->input->post('nama',TRUE),
              'tabungan'=> $this->input->post('jumlah',TRUE),
              'tanggal'=> $this->input->post('tanggal',TRUE),



            );

            $this->pondok_model->insert($data,'tabungan');
            echo "
            <script>
              alert('data berhasil ditambahkan');
              window.location.href = '" . base_url() . "admin/tabungan';
            </script>
            ";

            }  else   {
              $this->load->view('templates/header');
               $this->load->view('admin/tambahsyahriah');



        }
       }

        public function tambahgambar(){
          $this->load->helper('form');


           $nama = 'file_'.time();

          $config['upload_path']	 = './assets/img/uploads/';

          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size']		 = '5000';
          $config['max_width']	 = '5000';
          $config['max_height']	 = '5000';
          $config['file_name']	 = $nama;

        $this->load->library('upload', $config);


         if ($this->upload->do_upload('foto'))
          {

            $gambar = $this->upload->data();

            $data = array(
            'gambar'		=> $gambar['file_name'],
          );

          $this->pondok_model->insert($data,'galeri');
          echo "
          <script>
            alert('data berhasil ditambahkan');
            window.location.href = '" . base_url() . "admin/album';
          </script>
          ";

          }  else   {
            $data['foto'] = '';
            if (! $this->upload->do_upload('foto'))
            {
               $error = array('error' => $this->upload->display_errors());
      $this->load->view('templates/header');
                            $this->load->view('admin/tambahgambar', $error);
            }


      }
     }


    public function editartikel($id){
      $this->load->helper('form');
      $this->load->library('form_validation');

      $this->form_validation->set_rules('judul','judul harus di isi','required');
      $this->form_validation->set_rules('deskripsi','deskripsi harus di isi','required');


      $nama = 'file_'.time();
      $config['upload_path']	 = './assets/img/uploads/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']		 = '5000';
      $config['max_width']	 = '5000';
      $config['max_height']	 = '5000';
      $config['file_name']	 = $nama;

      $this->load->library('upload', $config);

      if ($this->form_validation->run()=== FALSE) {
          $data['artikel'] = $this->pondok_model->get_pondok_id($id,'artikel');
          $this->load->view('templates/header');
          $this->load->view('admin/editartikel',$data);
          $this->load->view('templates/footer');
      } else {
          if ($this->upload->do_upload('foto')) {
              $gambar = $this->upload->data();
              $data = array(
                  'judul'=> $this->input->post('judul',TRUE),
                  'deskripsi'=> $this->input->post('deskripsi',TRUE),
                  'gambar'		=> $gambar['file_name']
                );

          } else {
              $data = array(
                'judul'=> $this->input->post('judul',TRUE),
                'deskripsi'=> $this->input->post('deskripsi',TRUE),


              );
         }
          if ($this->pondok_model->update($id, $data,'artikel') === TRUE ) {

               echo "
               <script>
                 alert('data berhasil diubah');
                 window.location.href = '" . base_url() . "admin/artikel';
               </script>
               ";

          }else {
              echo "salah";
          }
      }
   }

   public function editvisi($id){
     $this->load->helper('form');
     $this->load->library('form_validation');
     $this->form_validation->set_rules('judul','judul','required');
     $this->form_validation->set_rules('deskripsi','deskripsi','required');



     if ($this->form_validation->run()=== FALSE) {
         $data['visi'] = $this->pondok_model->get_pondok_id($id,'visi');
         $this->load->view('templates/header');
         $this->load->view('admin/editvisi',$data);
         $this->load->view('templates/footer');
     } else {
       $data = array(
           'judul'=> $this->input->post('judul',TRUE),
           'deskripsi'=> $this->input->post('deskripsi',TRUE)
            );

         if ($this->pondok_model->update($id, $data,'visi') === TRUE ) {

              echo "
              <script>
                alert('data berhasil diubah');
                window.location.href = '" . base_url() . "admin/visi';
              </script>
              ";

        }else {
            echo "salah";
        }

         }
     }

     public function editinformasi($id){
       $this->load->helper('form');
       $this->load->library('form_validation');
       $this->form_validation->set_rules('judul','judul','required');
       $this->form_validation->set_rules('deskripsi','deskripsi','required');



       if ($this->form_validation->run()=== FALSE) {
           $data['informasi'] = $this->pondok_model->get_pondok_id($id,'informasi');
           $this->load->view('templates/header');
           $this->load->view('admin/editinformasi',$data);
           $this->load->view('templates/footer');
       } else {
         $data = array(
             'judul'=> $this->input->post('judul',TRUE),
             'deskripsi'=> $this->input->post('deskripsi',TRUE)
              );

           if ($this->pondok_model->update($id, $data,'informasi') === TRUE ) {

                echo "
                <script>
                  alert('data berhasil diubah');
                  window.location.href = '" . base_url() . "admin/informasi';
                </script>
                ";

          }else {
              echo "salah";
          }

           }
       }


     public function edittabungan($id){
       $this->load->helper('form');
       $this->load->library('form_validation');
       $this->form_validation->set_rules('nama','nama','required');
       $this->form_validation->set_rules('tabungan','tabungan','required');
       $this->form_validation->set_rules('tanggal','tabungan','required');



       if ($this->form_validation->run()=== FALSE) {
           $data['tabungan'] = $this->pondok_model->get_pondok_id($id,'tabungan');
           $this->load->view('templates/header');
           $this->load->view('admin/edittabungan',$data);
           $this->load->view('templates/footer');
       } else {
         $data = array(
             'nama'=> $this->input->post('nama',TRUE),
             'tabungan'=> $this->input->post('tabungan',TRUE),
             'tanggal'=> $this->input->post('tanggal',TRUE)
              );

           if ($this->pondok_model->update($id, $data,'tabungan') === TRUE ) {

                echo "
                <script>
                  alert('data berhasil diubah');
                  window.location.href = '" . base_url() . "admin/tabungan';
                </script>
                ";

          }else {
              echo "salah";
          }

           }
       }

       public function editsyahriah($id){
         $this->load->helper('form');
         $this->load->library('form_validation');
         $this->form_validation->set_rules('nama','nama','required');
         $this->form_validation->set_rules('pembayaran','pembayaran','required');
         $this->form_validation->set_rules('tanggal','syahriah','required');



         if ($this->form_validation->run()=== FALSE) {
             $data['syahriah'] = $this->pondok_model->get_pondok_id($id,'syahriah');
             $this->load->view('templates/header');
             $this->load->view('admin/editsyahriah',$data);
             $this->load->view('templates/footer');
         } else {
           $data = array(
               'nama'=> $this->input->post('nama',TRUE),
               'jumlah_pembayaran'=> $this->input->post('pembayaran',TRUE),
               'tanggal'=> $this->input->post('tanggal',TRUE)
                );

             if ($this->pondok_model->update($id, $data,'syahriah') === TRUE ) {

                  echo "
                  <script>
                    alert('data berhasil diubah');
                    window.location.href = '" . base_url() . "admin/syahriah';
                  </script>
                  ";

            }else {
                echo "salah";
            }

             }
         }





   // public function delete($id){
 //    $this->pondok_model->delete_data($id,'santri');
 //    redirect('admin/santri');
 //  }
 //  public function delete1($id){
 //    $this->pondok_model->delete_data($id);
 //    redirect('admin/kontak');
 //  }
 //  public function delete2($id){
 //    $this->pondok_model->delete_data($id);
 //    redirect('admin/datatest');
 //  }
 //





}
