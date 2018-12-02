<script>
  AOS.init();
</script>
    <div class="row" >
      <div class="col-sm-12" style="margin-top:-30px;">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="min-height:500px;">
      <div class="item active" >

        <img class="img-responsive" src="assets/images/2.jpg" alt="Los Angeles" style="width:1900px; min-height:900px;margin-top:-300px; ">


      </div>

      <div class="item" style="min-height:500px;">
        <img src="assets/images/3.jpg" alt="Chicago" style="width:100%; min-height:700px; margin-top:-500px;">
      </div>

      <div class="item" style="min-height:500px;">
        <img src="assets/images/profil.jpg" alt="New york" style="width:100%; min-height:700px; margin-top:-300px;">
      </div>
    </div>


          <!-- <img class="img-responsive" src="assets/images/2.jpg" alt="" style="width:1900px; height:750px; margin-top:10px;"> -->



      </div>
      <!-- <div class="col-md-6 col-md-offset-3" style="min-height:50px">
        <div class="text-center">
          <h2>About</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br> vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br> lorem sit amet scelerisque justo</p>
        </div>

      </div> -->
    </div>
  </div>



  <div class="container" style="margin-top:30px;background-color:" >
    <div class="row text-center">
      <h1> Sambutan Kepala Sekolah </h1>

      <p>ssalamualaikum Wr. Wb.

Puji syukur kita panjatkan kehadirat Allah SWT, disertai perasaan bangga saya menuliskan kata sambutan selaku Kepala sekolah SMA N 2 Banguntapan. Di era global dan pesatnya Teknologi Informasi (IT) ini, tidak dipungkiri bahwa keberadaan sebuah website untuk suatu lembaga sangatlah penting. Wahana website dapat digunakan sebagai media penyebarluasan informasi-informasi dari sekolah, yang memang harus diketahui oleh seluruh stake holder maupun masyarakat luas.

Disamping itu, website juga dapat menjadi sarana promosi sekolah yang cukup efektif. Berbagai kegiatan positif sekolah dapat diunggah, disertai gambar-gambar yang relevan, sehingga masyarakat dapat mengetahui prestasi-prestasi yang telah berhasil diraih oleh SMA N 2 Banguntapan.

Website juga dapat dijadikan sarana komunikasi antara sekolah dengan para alumni. Bahkan alumni dapat memanfaatkan website sekolah untuk konsolidasi, sehingga terbentuk ikatan alumni yang makin besar dan kuat. Sekolah menyadari bahwa alumni merupakan salah satu potensi yang apabila digali dan dikelola dengan baik dan benar akan mampu memberikan kontribusi yang sangat positip kepada sekolah. Oleh karena itu, saya sangat berharap, melalui website ini, akan semakin berkembang dan solid, sehingga pada waktunya nanti dapat memberikan kontribusi bagai kemajuan sekolah tercinta.

Akhirnya disadar bahwa masih banyak kekurangan yang terjadi pada website SMA N 2 Banguntapan, oleh Karena itu, kami akan terus belajar dan meng-up date diri, sehingga tampilan, isi dan mutu kami akan terus berkembang. Kepada tim pengelolan website sekolah, agar terus mengembangkan website dengan semangat, tanpa mengenal menyerah. Terimakasih atas kerjasamanya, maju terus untuk mencapai SMA N 2 Banguntapan yang “Berakhlaq Mulia dan Berprestasi”.

Wassalamualaikum Wr. Wb.</p>
<hr style="border:5px solid; margin-top:50px ">
      <!-- <div class="box">
        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
            <h4>Kajian Ilmu Agama</h4>
            <div class="icon">
              <i class="fa fa-heart-o fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
            <h4>Asrama</h4>
            <div class="icon">
              <i class="fa fa-desktop fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
            <h4>Madrasah Diniyah</h4>
            <div class="icon">
              <i class="fa fa-location-arrow fa-3x"></i>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
            <div class="ficon">
              <a href="#" class="btn btn-default" role="button">Read more</a>
            </div>
          </div>

        </div>

      </div> -->
    </div>
  </div>

  <div class="container" >
    <div class="row">

        <div class="text-center">
          <h2>Berita Terbaru</h2>
        </div>
        <div class="baru"  >
            <?php foreach ($artikel as $u):?>
         <div data-aos="zoom-in"style="margin-bottom:100px;">
          <div class="col-sm-4">
            <!-- <figure class="effect-zoe"> -->
              <img class="img-responsive" style="min-height:180px;" src="<?php echo base_url().'assets/img/uploads/';?><?php echo $u['gambar'] ?>" alt="" >
              <a href=""><h4><?php echo $u['judul']; ?></h4></a>
              <?php $string= $u['deskripsi'];
              $string= word_limiter($string,10);?>

              <p><?php echo $string; ?><a style="color : blue;" href="<?php echo base_url('detail/'.$u['id'] )?>"> selengkapnya>></a></p>


            <!-- </figure> -->

          </div>
         </div>
          <?php endforeach; ?>
        </div>


  </div>


</div>
