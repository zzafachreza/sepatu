
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="theme-color" content="#ACF2BB">

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
    <link rel="shortcut icon" href="images/logo/icon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Settings CSS -->
    <link rel="stylesheet" type="text/css" href="revslider/css/settings.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/simple-lightbox.css">


      <link rel="stylesheet" href="css/owl.carousel.min.css">
       <link rel="stylesheet" href="css/owl.theme.default.css">

    

  </head>
  <body>
    <!-- loading -->
    <div id="loading" style="background-color: #ACF2BB">
      <div id="loading-center">
        <center> <img class="loadingya" src="images/logo/icon.png"><br/>
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
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="./" ><i class="fa fa-home fa-1x"></i></a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="./" >JASA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./" >PANDUAN</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="./" >AKTIFITAS</a>
                  </li>
                     <li class="nav-item">
                    <a class="nav-link" href="./" >JURNAL</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="./" ><i class="fa fa-search fa-1x"></i></a>
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
        
        </div>
      </div>
    </header>
    <!--=================================
    Header -->
