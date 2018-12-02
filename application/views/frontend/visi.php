

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="blogs">
          <div class="text-center">

            <h2>Visi / Misi</h2>


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




            <?php foreach ($visi as $u) :?>
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
