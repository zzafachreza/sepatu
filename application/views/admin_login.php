<body style="background-color: #8cc454">
  <div class="container">
      <div class="card login-card" style="border-radius: 20px;overflow: hidden;margin-top: 10%">
        <div class="row no-gutters">
           <div class="col-md-3"></div>
          <div class="col-md-6">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="images/logo/icon.png" alt="logo" class="logo" width="100">
              </div>
              <p class="login-card-description label">Masuk ke halaman Admin</p>
                 <?php  if(!empty($_GET['err'])){ ?>
                  <p style="color: red;font-family:Poppins-Regular; "><?php echo $_GET['err'] ?></p>
              <?php } ?>
              <form action="admin/validasi" method="POST">
                  <div class="form-group">
                    <label for="email" class="label sr-only">Email</label>
                    <input type="email" required="required" name="email" id="email" class="label form-control" placeholder="Email address" autocomplete="off" autofocus="autofocus">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="label sr-only">Password</label>
                    <input type="password" required="required" name="password" id="password" class="label form-control" placeholder="***********">
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4 label" type="submit" value="LOGIN" style="background-color: #8cc454;color: #FFF">
                </form>
      
              
            </div>
          </div>
           <div class="col-md-3"></div>
        </div>
        <?php $USERS ?>
</div>  
</body>