
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <div class="blogs">
          <div class="text-center">

            <h2>Kontak</h2>


          </div>
          <hr>
        </div>
      </div>
    </div>
  </div>

  <div class="container" >
    <div class="row">
      <div class="col-sm-12">

          <div class="blog">




            <div class="col-sm-12" >
              <div id="map" style="width:100%;height:400px;">My map will go here</div>
            </div>


          </div>



      </div>
    </div>
  </div>
  <div class="container text-center" style="background-color:#72f3d399 !important; padding-bottom: 30px;">
    <h3>Hubungi Kami</h3><br>
    <h5>Silahkan tinggalkan pesan, untuk respon yang lebih cepat hubungi no telepon yang tertera.</h5>
    <?php echo validation_errors(); ?>
 <!-- -->
    <?php echo form_open(base_url('kontak/create')); $site_key = '6LfbrFsUAAAAAGPzDoAIvGtHocBli24SUm1dvgXG'; ?>
        <div class="form-group" >
          <div class="col-sm-2">
             <label for="usr">Nama</label>
          </div>
          <div class="col-sm-10">
             <input type="text" name="nama" class="form-control"  >
          </div>
        </div><br>
        <div class="form-group" style="margin-top:10px;">
          <div class="col-sm-2">
             <label for="usr">Email</label>
          </div>
          <div class="col-sm-10">
             <input type="email" name="email" class="form-control"   >
          </div>
        </div><br>
        <div class="form-group">
          <div class="col-sm-2">
             <label for="usr">Pesan</label>
          </div>
          <div class="col-sm-10">
            <textarea name="text" class="form-control" rows="5" id="comment" ></textarea>
          </div>
        </div>
         <div class="col-sm-10" style="margin-bottom: 40px;padding-left: 30px">

        </div>
        <div class="col-sm-12" >
          <div class="col-sm-12" id="btn-wrap">
              <div class="g-recaptcha" data-sitekey="<?php echo $site_key; ?>" style="margin-right:30px;"></div>
            <button  type="submit" id="submit" name="submit" ><span style="margin-right: 5px;color: white" class="glyphicon glyphicon-envelope"></span>Send Message</button>
          </div>
        </div>
    	<?php echo form_close(); ?>
  </div>

      <script >
        function myMap() {
          var mapCanvas = document.getElementById("map");
          var mapOptions = {
              center: new google.maps.LatLng(51.5, -0.2),
              zoom: 10
          };
          var map = new google.maps.Map(mapCanvas, mapOptions);
      }
      </script>
      <script src="js/jquery-3.3.1.min.js"></script>
          <script src="js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
         <script type="text/javascript" src="js/script.js"></script>
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAWkcHRnA4fCFhdmpSW7pInBRXlMyWGNw&callback=myMap"></script>
