
<style type="text/css">
    .mybutton{
        margin-top: 3%;
        border-radius: 10px;
        padding-left: 2%;
        border:1px solid #8cc454;
        color: red;
        height: 50px;
        padding-top: 2%;
        color: #8cc454;
    }

    .mybutton:hover{
        border:1px solid #8cc454;   
        background-color: #8cc454;
        color:#FFF;

    }
</style>
<div style="background-color:#8cc454;height: 80px"></div>
<div>
    <div class="col-sm-3" style="background-color: ;float: left;padding-top: 1%"> 
        <p style="font-family: Poppins-Regular;color: #000;">My Profile</p>
        <?php 

        // print_r($_SESSION);

        ?>
        <div>
             <p style="font-family: Poppins-Regular;color: #000;"><?php echo $_SESSION['nama_lengkap'] ?></p>
        </div>
         <div>
             <p style="font-family: Poppins-Regular;color: #000;"><?php echo $_SESSION['email'] ?></p>
        </div>
         <div>
             <p style="font-family: Poppins-Regular;color: #000;"><?php echo $_SESSION['telepon'] ?></p>
        </div>
         <div>
             <p style="font-family: Poppins-Regular;color: #000;"><?php echo $_SESSION['alamat'] ?></p>
        </div>
       
    </div>
    <div class="col-sm-9" style="background-color: ;float: left;padding-top: 1%"> 
        
            <div class="container-fluid">
                <div class="row">
                <div  style="height: 250px;margin:1%;width: 30%;box-shadow: 0px 3px 6px #707070;border-bottom-right-radius: 20px;border-bottom-left-radius:20px ">
                    <div class="container-fluid">
                        <div class="row">
                            <div style="width: 50%">
                                <img src="images/logo/before.png" style="width: 100%">
                            </div>
                            <div style="width: 50%">
                                <img src="images/logo/after.png" style="width: 100%">
                            </div>
                            <div class="col-sm-12">
                                <span style="font-family: Poppins-SemiBold;color: #29D89F;">NEW BALANCE SNEAKERS 00001</span>
                                <span style="float: right;">
                                    <div class="btn-group dropup">
                                    
                                    <i class="fa fa-ellipsis-v" data-toggle="dropdown"></i>
                            
                                  <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Favouritkan</a>
                                        <a class="dropdown-item" href="#">Referensikan</a>
                                        <a class="dropdown-item" href="#">Share</a>
                                  </div>
                                </div>
                                </span>

                                <p style="font-family: Poppins-Regular;color: #7F7F7F;">Sol | Midsole</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div  style="height: 250px;margin:1%;width: 30%;box-shadow: 0px 3px 6px #707070;border-bottom-right-radius: 20px;border-bottom-left-radius:20px ">
                    <div class="container-fluid">
                        <div class="row">
                            <div style="width: 50%">
                                <img src="images/logo/before2.png" style="width: 100%">
                            </div>
                            <div style="width: 50%">
                                <img src="images/logo/after2.png" style="width: 100%">
                            </div>
                            <div class="col-sm-12">
                                <span style="font-family: Poppins-SemiBold;color: #29D89F;">NIKE SNEAKERS 00001</span>
                                <span style="float: right;">
                                    <div class="btn-group dropup">
                                    
                                    <i class="fa fa-ellipsis-v" data-toggle="dropdown"></i>
                            
                                  <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Favouritkan</a>
                                        <a class="dropdown-item" href="#">Referensikan</a>
                                        <a class="dropdown-item" href="#">Share</a>
                                  </div>
                                </div>
                                </span>

                                <p style="font-family: Poppins-Regular;color: #7F7F7F;">Upper | Vamp | Heel Counter</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div  style="height: 250px;margin:1%;width: 30%;box-shadow: 0px 3px 6px #707070;border-bottom-right-radius: 20px;border-bottom-left-radius:20px ">
                    <div class="container-fluid">
                        <div class="row">
                            <div style="width: 50%">
                                <img src="images/logo/before3.png" style="width: 100%">
                            </div>
                            <div style="width: 50%">
                                <img src="images/logo/after3.png" style="width: 100%">
                            </div>
                            <div class="col-sm-12">
                                <span style="font-family: Poppins-SemiBold;color: #29D89F;">NIKE SNEAKERS 00002</span>
                                <span style="float: right;">
                                    <div class="btn-group dropup">
                                    
                                    <i class="fa fa-ellipsis-v" data-toggle="dropdown"></i>
                            
                                  <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Favouritkan</a>
                                        <a class="dropdown-item" href="#">Referensikan</a>
                                        <a class="dropdown-item" href="#">Share</a>
                                  </div>
                                </div>
                                </span>

                                <p style="font-family: Poppins-Regular;color: #7F7F7F;">Sol | Cupsole</p>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            </div>
            
    </div>
</div>