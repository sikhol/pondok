

  <div class="container" style="margin-top:50px;">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="blogs">
          <div class="text-center">

            <h2 >Informasi</h2>


          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="container" style="margin-top:-100px;">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <div class="blog">




            <?php foreach ($informasi as $u) :?>
            <h3><?php echo $u['judul']; ?></h3>


            <p><?php echo $u['deskripsi'] ?></p>
            <?php endforeach; ?>
            <div class="ficon">
              <a href="#" alt="">Learn more</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
