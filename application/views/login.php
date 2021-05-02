 <div style="background: linear-gradient(0deg, rgba(255,251,251,1) 0%, #8cc454 100%);height: 100px"></div>
<div>
  <style type="text/css">
  .label{
    font-family:Poppins-Regular;
    color: #000;
  }
  .myInput{
    font-family:Poppins-Regular;
    color: #000;
  }
</style>
 <div class="container">
      <div class="card login-card" style="border-radius: 20px;overflow: hidden;">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="https://images.unsplash.com/photo-1496516348160-24b35a31856f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80" alt="login" class="login-card-img" style="height: 600px">
          
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="images/logo/icon.png" alt="logo" class="logo" width="100">
              </div>
              <p class="login-card-description label">Sign into your account</p>
                 <?php  if(!empty($_GET['err'])){ ?>
                  <p style="color: red;font-family:Poppins-Regular; "><?php echo $_GET['err'] ?></p>
              <?php } ?>
              <form action="login/validasi" method="POST">
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
                <!-- <a href="#!" class="forgot-password-link">Forgot password?</a> -->
                <p class="login-card-footer-text label">Don't have an account? <a href="./register" class="text-reset" style="font-family:Poppins-Regular;">Register here</a></p>
              
            </div>
          </div>
        </div>
      </div>	