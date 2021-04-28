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


   <a href="<?php echo $urlWA ?>" class="float" style="box-shadow: 3px 6px 6px #00000052;">
    <img src="images/logo/wa.png" width="150">
   </a>
  


<div style="background-color: #5BA798;margin-top: 10%;border-top-left-radius: 100%;border-top-right-radius: 100%">&nbsp;</div>
<footer class=" text-white text-center text-lg-start" style="background-color: #5BA798;">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->


      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="text-align: left">
    <p style="color:#FFFFFF;font-family:Poppins-Bold;font-size: 12pt;display: block;">Perusahaan</p>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white" style="font-family:Poppins-Regular;font-size: 12pt;">Tentang Kami</a>
          </li>
           <li>
            <a href="#!" class="text-white" style="font-family:Poppins-Regular;font-size: 12pt;">Lini Produk</a>
          </li>
           <li>
            <a href="#!" class="text-white" style="font-family:Poppins-Regular;font-size: 12pt;">Pengajuan Kerjasama</a>
          </li>
           <li>
            <a href="#!" class="text-white" style="font-family:Poppins-Regular;font-size: 12pt;">Karir</a>
          </li>
           <li>
            <a href="#!" class="text-white" style="font-family:Poppins-Regular;font-size: 12pt;">Kampanye dan Gerakan</a>
          </li>
         
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0" style="text-align: left">
       <p style="color:#FFFFFF;font-family:Poppins-Bold;font-size: 12pt;display: block;">Fitur</p>

        <ul class="list-unstyled">
        <li>
            <a href="#!" class="text-white" style="font-family:Poppins-Regular;font-size: 12pt;">Konsultasi dan Reparasi</a>
          </li>
          <li>
            <a href="#!" class="text-white" style="font-family:Poppins-Regular;font-size: 12pt;">Lacak Order</a>
          </li>
          <li>
            <a href="#!" class="text-white" style="font-family:Poppins-Regular;font-size: 12pt;">Pengajuan Garansi</a>
          </li>
        </ul>
      </div>

            <div class="col-lg-6 col-md-12 mb-4 mb-md-0" style="text-align: left">
          <p style="color:#FFFFFF;font-family:Poppins-Bold;font-size: 12pt;display: block;">Ikuti</p>

        <div>
          <a href=""><img src="images/logo/ig.svg" style="margin-right: 1%"></a>
          <a href=""><img src="images/logo/fb.svg" style="margin:1%"></a>
           <a href=""><img src="images/logo/yt.svg" style="margin:1%"></a>
            <a href=""><img src="images/logo/wa.svg" style="margin:1%"></a>
        </div>
      </div>
      <!--Grid column-->
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #5BA798;">
  Copyright 2021 
    <a class="text-white" href="#" style="font-family:Poppins-Bold;font-size: 12pt;color: #FFF">Shoe Workshop</a>
  </div>
  <!-- Copyright -->
</footer>