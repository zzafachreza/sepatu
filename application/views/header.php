<!DOCTYPE html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="theme-color" content="#8cc454">

  <meta data-rh="true" property="og:title" content="<?php echo $TITLE ?>"/>
  <meta data-rh="true" property="og:site_name" content="Zavalabs"/>
  <meta data-rh="true" property="og:description" content="<?php echo $DESCRIPTION ?>"/>
  <meta data-rh="true" property="og:url" content="https://www.zavalabs.com"/>
  <meta data-rh="true" property="og:image" content="https://www.zavalabs.com/images/logo/utama.png"/>
  <meta data-rh="true" property="og:image:secure_url" content="https://www.zavalabs.com/images/logo/utama.png"/>
  <meta data-rh="true" property="og:image:type" content="image/jpg"/>
  <meta data-rh="true" property="og:image:width" content="1200"/>
  <meta data-rh="true" property="og:image:height" content="1200"/>
  
    <meta name="apple-mobile-web-app-capable" content="yes">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title><?php echo $TITLE ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo site_url() ?>images/logo/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo site_url() ?>css/bootstrap.min.css">
    <!-- Settings CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url() ?>revslider/css/settings.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="<?php echo site_url() ?>css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo site_url() ?>css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo site_url() ?>css/responsive.css">
      <link rel="stylesheet" href="<?php echo site_url() ?>css/animate.css">
      <link rel="stylesheet" href="<?php echo site_url() ?>css/simple-lightbox.css">


      <link rel="stylesheet" href="<?php echo site_url() ?>css/owl.carousel.min.css">
       <link rel="stylesheet" href="<?php echo site_url() ?>css/owl.theme.default.css">

    <style type="text/css">
      button:hover{
        cursor: pointer;
      }
    </style>

  </head>
  <body>
    <!-- loading -->
    <div id="loading" style="background-color: #ACF2BB">
      <div id="loading-center">
        <center> <img class="loadingya" src="<?php echo site_url() ?>images/logo/icon.png" style="text-shadow: 3px 6px 6px #00000052;"><br/>
        <!-- <img src="images/loading.gif" alt="loder"> -->
        </center>
      </div>
    </div>
    <!-- loading End -->


<?php
 $nav = explode("/", $_SERVER['REQUEST_URI']);
 $menu = $nav[2];


?>
        <!--=================================
    Header -->
    <header id="header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg navbar-light">
        
              <button class="navbar-toggler" type="button" style="background-color: transparent;border-width: 0px" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fa fa-bars fa-1x" style="color: #FFF"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown" style="font-family: Poppins-Regular;">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="./" ><i class="fa fa-home fa-1x"></i></a>
                  </li>
                              <?php 

              if (!empty($_SESSION['email'])) {
                # code...
            
              ?>

                <li class="nav-item">
                    <a class="nav-link" href="./profile" >PROFILE</a>
                  </li>
           

              <?php   

                }

              ?>  
                   <li class="nav-item">
                    <a class="nav-link" href="./jasa" >JASA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./panduan" >PANDUAN</a>
                  </li>
           <!--         <li class="nav-item">
                    <a class="nav-link" href="./aktifitas" >AKTIFITAS</a>
                  </li> -->
                     <li class="nav-item">
                    <a class="nav-link" href="./jurnal" >JURNAL</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="#" id="pencarian" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-search fa-1x"></i></a>
                  </li>

       


               <!--    <li class="nav-item dropdown <?php echo $menu=="web" ? "active":"" ?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      SERVICES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="web">Web Application</a>
                      <a class="dropdown-item" href="mobile">Mobile Aplication</a>
                      <a class="dropdown-item" href="ecommerce">E - Commerce</a>
                    
                    </div>
                  </li> -->
                  <!--     <li class="nav-item">
                    <a class="nav-link" href="#porto">PORTOFOLIO</a>
                  </li> -->
                  
              <!--     <li class="nav-item">
                    <a class="nav-link" href="#footer">HARGA</a>
                  </li> -->
            
                </ul>
              </div>
            </nav>
          </div>
          <div class="col-lg-4">
            <div class="row" style="justify-content: flex-end;">
              <?php 

              if (!empty($_SESSION['email'])) {
                # code...
            
              ?>

               <span style="font-family: Poppins-Regular;color:#FFF">Selamat datang,&nbsp;</span> <span style="font-family: Poppins-Bold;color:#FFF"><?php echo $_SESSION['nama_lengkap'] ?></span>&nbsp;<a href="<?php echo site_url() ?>login/logout" style="font-family: Poppins-Regular;color:#FFF">(&nbsp;LOGOUT&nbsp;)</a>


              <?php 

               } else{
              ?>

              <button onclick="window.location.href='login'" style="box-shadow: 3px 6px 6px #00000052;width: 100px;margin-right: 5%;background-color: transparent;border:1px solid #FFF;color: #FFF;border-radius: 50px">Login</button>
               <button onclick="window.location.href='register'" style="box-shadow: 3px 6px 6px #00000052;width: 100px;margin-right: 0%background-color: #FFF;border:1px solid #FFF;color: #8cc454;border-radius: 50px">Sign Up</button>

               <?php 

                  }
               ?>
            </div>
          </div>
        
        </div>
      </div>
    </header>
    <!--=================================
    Header -->


<!-- modal -->

<!-- Modal -->
<div style="background-color: #8cc454;" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pencarian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input style="border-radius: 10px;border:1px solid #8cc454;" autofocus="autofocus" type="text" class="form-control" name="pencarian" placeholder="masukan kata kunci">
      </div>
    </div>
  </div>
</div>