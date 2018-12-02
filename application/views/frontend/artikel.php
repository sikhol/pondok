
<script>
  AOS.init();
</script>
  <div class="container"style="margin-bottom:50px;" >
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="blogs">
          <div class="text-center">

            <h1 style="font-size:50px;">Berita</h1>


          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div data-aos="zoom-in">
    <div class="row">
      <div class="col-md-12" >

          <div class="col-sm-8" style="background-color:#f6f8f8 !important;" >




            <?php foreach ($artikel as $u) :?>
              <a href=""><h3><?php echo $u['judul']; ?></h3></a>
            <div class="img-responsive">
            <img src="<?php echo base_url().'assets/img/uploads/';?><?php echo $u['gambar'] ?>" alt="" width="500px;">

            </div>
            <?php $string= $u['deskripsi'];
            $string= word_limiter($string,10);?>

            <p><?php echo $string; ?><a style="color : blue;" href="<?php echo base_url('detail/'.$u['id'] )?>"> selengkapnya>></a></p>
            <?php endforeach; ?>

          </div>
         <div class="col-sm-1">

          </div>
          <div class="col-sm-3 " style="background-color:#f6f8f9 !important;">
            <div class="text-center">
              <h4>Berita Lain</h4>

            </div>

            <ul>
              <?php foreach ($artikel as $u) :?>
                <?php $judul=$u['judul'];?>
              <li><a href="<?php echo base_url('detail/'.$u['slug'] )?>"><?php echo $judul ?></a></li>

                <?php endforeach; ?>
            </ul>

          </div>


      </div>
    </div>
  </div>
  </div>
