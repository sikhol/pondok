<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>eNno Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url('assets/frontend/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/animate.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/jquery.bxslider.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/normalize.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/demo.css') ?>" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/css/set1.css') ?>" />
  <link href="<?php echo base_url('assets/frontend/css/overwrite.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/css/style.css') ?>" rel="stylesheet">
  <!-- =======================================================
    Theme Name: eNno
    Theme URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>



  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="blogs">
          <div class="text-center">

            <h2>Artikel</h2>


          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <div class="blog">





            <h3><?php echo $artikel_news['judul']; ?></h3>
            <div class="img-responsive">
              <img class="img-responsive" src="<?php echo base_url().'assets/img/uploads/';?><?php echo $artikel_news['gambar'] ?>" alt="">

            </div>


            <p><?php echo $artikel_news['deskripsi'] ?></p>

          
          </div>
        </div>

      </div>
    </div>
  </div>
