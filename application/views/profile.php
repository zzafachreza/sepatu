

    <div class="col-sm-9" style="background-color: ;float: left;padding-top: 1%"> 
        
            <div class="container-fluid">
                <div class="row">
                    <a href="#" class="btn btn-secondary" style="margin-right: 2%">Favourite</a>
                    <a href="profile/order" class="btn btn-success">My Orders</a>
                </div>
                <div class="row">
                

                        <?php
                            for ($i=0; $i < 10 ; $i++) { 
                                # code...
                            
                        ?>

                        <div  style="height: 250px;margin:1%;width: 30%;box-shadow: 0px 3px 6px #707070;border-bottom-right-radius: 20px;border-bottom-left-radius:20px ">
                    <div class="container-fluid">
                        <div class="row">
                            <div style="width: 50%">
                                <img src="<?php echo site_url() ?>images/logo/before.png" style="width: 100%">
                            </div>
                            <div style="width: 50%">
                                <img src="<?php echo site_url() ?>images/logo/after.png" style="width: 100%">
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



                        <?php 

                            }
                        ?>

                
            
                </div>
            </div>
            
    </div>
</div>