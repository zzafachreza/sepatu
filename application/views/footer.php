    </div>    
        <!-- Footer start-->
        <?php
     if ($DEVICE) {
      # code...
       $urlWA = "https://api.whatsapp.com/send?phone=6289653763986&text=".urlencode('Hallo Zavalabs, Saya butuh bantuan');
    }else{
       $urlWA = "https://web.whatsapp.com/send?phone=6289653763986&text=".urlencode('Hallo Zavalabs, Saya butuh bantuan');
    }


?>


   <a href="<?php echo $urlWA ?>" class="float">
    <img src="images/logo/wa.png" width="150">
   </a>
   
    <footer id="contact" class="iq-footer fshap ">
      <div class="scrollme">
        <img src="images/bg/02.png" class="img-fluid footer-one animateme"
        data-when="span"
        data-from="1"
        data-to="0"
        data-translatey="-200" alt="image">
      </div>
      <div class="footer-top " id="footer">
        <div class="container">
       
          <div class="row">

            <div class="col-lg-4 col-md-6 col-sm-6 iq-rmb-30">
              <div class="logo iq-rmt-30">
                <a href="./"><img src="images/logo/utama.png" class="img-fluid" alt="img"></a>
                <p class="mt-3 text-white">Web and Mobile Development</p>
                <div class="mt-3 text-white link">copyrights <?php echo date('Y') ?> &copy;<a href="https://zavalabas.com/" class="font-weight-bold"> Zavalabs </a> </div>
              </div>
            </div>

        
           
            <div class="col-lg-3 col-md-6 col-sm-6 ">
              <div class="contact-bg">
                <h5 class= "text-white iq-rmt-50  mb-4">CONTACT US</h5>
                <ul class="iq-contact text-white">
                  <li>
                    <a href="tel:0123456789"><i class="fas fa-phone"></i> +62813 1945 6595</a>
                  </li>
                  <li>
                    <a href=""> <i class="fas fa-envelope"></i> <span class="__cf_email__" data-cfemail="f48c8d8eb49399959d98da979b99">admin@zavalabas.com</span></a>
                  </li>
                   <li>
                    <a href=""> <i class="fas fa-map"></i> <span class="__cf_email__" data-cfemail="f48c8d8eb49399959d98da979b99">Jl. Maleer 3 No.81B Gatot Subroto, Kota Bandung Jawa Barat</span></a>
                  </li>


                  <li>
                    <ul class="info-share ">
                      <li><a href="javascript:void(0)"><i class="fab fa-facebook-square"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="fab fa-twitter-square"></i></a></li>
                      <li><a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 iq-rmb-30">
             <div class="contact-bg">
          
                <ul class="iq-contact text-white">
                     <li>
                    <a href=""> <i class="fas fa-user"></i> <span class="__cf_email__" >Fachreza Maulana ( Founder ) </span></a>
                  </li>
                    <li>
                    <a href=""> <i class="fas fa-user"></i> <span class="__cf_email__" >Indra Permana ( Co - Founder ) </span></a>
                  </li>
                 
                 
                  
                </ul>
              </div>
            </div>


          </div>

        </div>
      </div>
      <!-- back-to-top -->
      <div id="back-to-top">
        <a class="top" id="top" href="#top"><span>Scroll Up</span> <i class="ion-ios-arrow-thin-up"></i></a>
      </div>
      <!-- back-to-top End -->
    </footer>
    <!--=================================
    footer -->

    <!--=================================
    MAIN CONTENT -->
    <!-- Optional JavaScript -->
    <!-- jQuery first -->
   <script src="js/jquery-3.3.1.min.js"></script>
    <!-- popper -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- daisy -->
     <script src="js/daisy.js"></script>
    <!-- main -->
 <script src="js/simple-lightbox.js"></script>
          
    <script src="js/main.js"></script>
    <!-- REVOLUTION JS FILES -->
    <script src="revslider/js/jquery.themepunch.tools.min.js"></script>
    <script src="revslider/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="revslider/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revslider/js/extensions/revolution.extension.video.min.js"></script>
    <!-- Retina JavaScript -->
    <!-- <script src="js/retina.min.js"></script> -->
    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
   
  </body>
</html>