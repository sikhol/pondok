<footer>
    <div class="last-div">
  <div class="inner-footer" >
    <div class="container" >
      <div class="row">
        <div class="col-md-4 f-about">
          <a href="index.html"><h1 ><span style="color:white">MA Al-mahalli</span></h1></a>
          <p style="color:white">Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam consectetur adipiscing elit Cras suscipit arcu libero
          </p>
        </div>
        <div class="col-md-4 l-posts">
          <h3 style="color:white" class="widgetheading">Latest Posts</h3>
          <?php foreach ($artikel as $u): ?>
          <ul>

            <li>  <a href="" style="color:white"><?php echo $u['judul']; ?></a></li>

          </ul>
              <?php endforeach; ?>
        </div>
        <div class="col-md-4 f-contact">
          <h3 style="color:white" class="widgetheading">Alamat</h3>
          <a href="#">
            <p style="color:white"><i style="color:white" class="fa fa-envelope"></i> Ma.Al-mahalli@gmail.com</p>
          </a>
          <p style="color:white"><i style="color:white" class="fa fa-phone"></i> +345 578 59 45 416</p>
          <p style="color:white"><i style="color:white" class="fa fa-home"></i> Yogyakarta |Brajan Wonokromo Pleret Bantul<br> Kode pos : 55697</p>
        </div>
      </div>
    </div>
  </div>



    <div class="container">
      <div class="row">
        <div class="copyright">
          &copy; Kholiq Amrulloh. All Rights Reserved
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eNno
            -->
            <a href="https://bootstrapmade.com/">Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">Kholiq Amrulloh</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <ul class="social-network">
          <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
          <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
          <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
          <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
          <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
        </ul>
      </div>
    </div>

    <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>


  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/frontend/js/jquery-2.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/frontend/js/bootstrap.min.js"></script>
<script src="assets/frontend/js/wow.min.js"></script>
<script src="assets/frontend/js/jquery.easing.1.3.js"></script>
<script src="assets/frontend/js/jquery.isotope.min.js"></script>
<script src="assets/frontend/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="assets/frontend/js/fliplightbox.min.js"></script>
<script src="assets/frontend/js/functions.js"></script>
<script type="text/javascript">
  $('.portfolio').flipLightBox()
</script>

</body>

</html>
