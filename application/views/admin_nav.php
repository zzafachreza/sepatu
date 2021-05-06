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
                   <li class="nav-item">
                    <a class="nav-link" href="./admin/member" >MASTER MEMBER</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./admin/jurnal" >MASTER JURNAL</a>
                  </li>
                   <li class="nav-item">
                    <a class="nav-link" href="./aktifitas" >MASTER GAMBAR</a>
                  </li>
                     <li class="nav-item">
                    <a class="nav-link" href="./jurnal" >JURNAL</a>
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

               <span style="font-family: Poppins-Regular;color:#FFF">Selamat datang,&nbsp;</span> <span style="font-family: Poppins-Bold;color:#FFF"><?php echo $_SESSION['nama_lengkap'] ?></span>&nbsp;<a href="login/logout" style="font-family: Poppins-Regular;color:#FFF">(&nbsp;LOGOUT&nbsp;)</a>

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