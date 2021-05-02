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
            <img src="https://images.unsplash.com/photo-1571741590149-a29f00898167?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80" alt="login" class="login-card-img" style="height:700px">
          
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="images/logo/icon.png" alt="logo" class="logo" width="100">
              </div>
              <p class="login-card-description" style="font-family:Poppins-Regular;">Sign up your account</p>
              <?php  if(!empty($_GET['err'])){ ?>
                  <p style="color: red;font-family:Poppins-Regular; "><?php echo $_GET['err'] ?></p>
              <?php } ?>

               <?php  if(!empty($_GET['msg'])){ ?>
                  <p style="color: #8cc454;font-family:Poppins-Regular; "><?php echo $_GET['msg'] ?></p>
              <?php } ?>

              <form action="register/insert" method="POST">
                  <div class="form-group">
                    <label for="nama_lengkap" class="label sr-only">Nama Lengkap</label>
                    <input autofocus="autofocus" required="required" type="text" name="nama_lengkap" id="nama_lengkap" class="myInput form-control" placeholder="Nama lengkap">
                  </div>
                  <div class="form-group">
                    <label for="email" class=" label sr-only">Email</label>
                    <input type="email" required="required"  name="email" id="email" class="myInput form-control" placeholder="Email address">
                  </div>
                  <div class="form-group">
                    <label for="telepon" class=" label sr-only">Telepon</label>
                    <input type="text" required="required"  name="telepon" id="telepon" class="myInput form-control" placeholder="Telepon">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class=" label sr-only">Password</label>
                    <input type="password" required="required"  name="password" id="password" class="myInput form-control" placeholder="***********">
                  </div>
                   <div class="form-group mb-4">
                    <label for="alamat" class=" label sr-only">Alamat</label>
                    <input type="text" required="required"  name="alamat" id="alamat" class="myInput form-control" placeholder="Alamat"/>
                  </div>
                  <input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit" value="REGISTER" style="background-color: #8cc454;color: #FFF;font-family:Poppins-Regular;">
                </form>
                
            </div>
          </div>
        </div>
      </div>	