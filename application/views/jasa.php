<!-- Partner-->
 <style type="text/css">
   .owl-prev, .owl-next {
        width: 15px;
        height: 0px;
        position: absolute;
        top: 45%;
        transform: translateY(-50%);
        display: block !important;
        border:0px solid black;
        transition-duration: 1s;
        transition-property: left,right;
    }
    .owl-prev { left: 10%; }
    .owl-next { right: 10%; }
    .owl-prev i, .owl-next i {transform : scale(1.5,1.5);}

</style>

<div style="background: linear-gradient(0deg, rgba(255,251,251,1) 0%, rgba(14,14,14,0.34) 100%);height: 100px"></div>
<div>
	<div class="col-sm-3" style="background-color: ;padding: 2%;float: left;">
		<p style="font-family: Poppins-Regular;color: #238975">FILTER JASA</p>
		<select class="form-control" style="font-family: Poppins-Regular;color: #8D8D8D;margin-bottom: 5%">
			<option>REPARASI SOL</option>
		</select>
		<select class="form-control" style="font-family: Poppins-Regular;color: #8D8D8D;margin-bottom: 5%">
			<option>RREPARASI UPPER</option>
		</select>
		<select class="form-control" style="font-family: Poppins-Regular;color: #8D8D8D;margin-bottom: 5%">
			<option>REPAINT</option>
		</select>
		<select class="form-control" style="font-family: Poppins-Regular;color: #8D8D8D;margin-bottom: 5%">
			<option>REGLUE & TREATMENT</option>
		</select>
		<select class="form-control" style="font-family: Poppins-Regular;color: #8D8D8D;margin-bottom: 5%">
			<option>PAKET</option>
		</select>
		<select class="form-control" style="font-family: Poppins-Regular;color: #8D8D8D;margin-bottom: 5%">
			<option>TAMBAHAN</option>
		</select>

		<div style="width: 100%;">
			<div style="float: left;width: 40px;height:40px;background-color: #000000;border-radius: 20px;margin-right: 5%;border:1px solid black">&nbsp;</div>
			<div style="float: left;width: 40px;height:40px;background-color: #FFFFFF;border-radius: 20px;margin-right: 5%;border:1px solid black">&nbsp;</div>
			<div style="float: left;width: 40px;height:40px;background-color: #F6FAE1;border-radius: 20px;margin-right: 5%;border:1px solid black">&nbsp;</div>
			<div style="float: left;width: 40px;height:40px;background-color: #F1ECC5;border-radius: 20px;margin-right: 5%;border:1px solid black">&nbsp;</div>
			<div style="float: left;width: 40px;height:40px;background-color: #BCB8B8;border-radius: 20px;margin-right: 5%;border:1px solid black">&nbsp;</div>
		</div>
		<div style="clear: both;"></div>
		<div style="width: 100%;margin-top: 5%">
			<div style="float: left;width: 40px;height:40px;background-color: #D5C192;border-radius: 20px;margin-right: 5%;border:1px solid black">&nbsp;</div>
			<div style="float: left;width: 40px;height:40px;background-color: #F31146;border-radius: 20px;margin-right: 5%;border:1px solid black">&nbsp;</div>
			<div style="float: left;width: 40px;height:40px;background-color: #FFAA38;border-radius: 20px;margin-right: 5%;border:1px solid black">&nbsp;</div>
			<div style="float: left;width: 40px;height:40px;background-color: #C08C75;border-radius: 20px;margin-right: 5%;border:1px solid black">&nbsp;</div>
		</div>
	


		<div style="clear: both;"></div>
		<p style="font-family: Poppins-Regular;color: #238975;margin-top: 5%">FILTER SEPATU</p>
		<select class="form-control" style="font-family: Poppins-Regular;color: #8D8D8D;margin-bottom: 5%">
			<option>BRAND</option>
		</select>
		<select class="form-control" style="font-family: Poppins-Regular;color: #8D8D8D;margin-bottom: 5%">
			<option>JENIS SEPATU</option>
		</select>

	</div>
	<div class="col-sm-9" style="background-color: ;padding-top:3%;float: left;">
		
		<div style="padding-left: 2%;padding-right: 2%">
			<form>
				<input type="text" placeholder='Contoh: "New Balance" atau "Ganti Sol"' name="pencarian" class="" style="background-color: #E8F3EB;width: 100%;color: #000">
			<i class="fa fa-search" style="position: absolute;right: 50px;top: 65px"></i>
			</form>
		</div>

		<?php if (!empty($_GET['pencarian'])): ?>

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
			</dir>
			
		<?php endif ?>

		<?php if (empty($_GET['pencarian'])): ?>

			<div style="margin:2%;background-color: #707070;padding:2%">
			 <div class="owl-carousel owl-theme" data-autoplay="true" data-loop="true" data-nav="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30" data-dots="false" >
			 	<center><img src="images/logo/sepatu1.png" style="width: 500px"></center>
			 	<center><img src="images/logo/sepatu2.png" style="width: 500px"></center>
			 	<center><img src="images/logo/sepatu3.png" style="width: 500px"></center>
			 </div>


			  <div style="margin-left: 5%;margin-right: 5%">
			  	<div class="owl-carousel owl-theme" data-autoplay="true" data-loop="true" data-nav="true" data-items="5" data-items-laptop="5" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30" data-dots="false" >
				 	<div style="width: 150px;height: 150px;border-radius: 20px;background-color: #FFF;padding: 0%;display: flex;justify-content: center;align-items: flex-end;">
				 		<p>Flat</p>
				 	</div>
				 	<div style="width: 150px;height: 150px;border-radius: 20px;background-color: #FFF;padding: 0%;display: flex;justify-content: center;align-items: flex-end;">
				 		<p>Non - Flat</p>
				 	</div>
				 	<div style="width: 150px;height: 150px;border-radius: 20px;background-color: #FFF">
				 		
				 	</div>
				 	<div style="width: 150px;height: 150px;border-radius: 20px;background-color: #FFF">
				 		
				 	</div>
				 	<div style="width: 150px;height: 150px;border-radius: 20px;background-color: #FFF">
				 		
				 	</div>
				 </div>
			  </div>
		</div>
			
		<?php endif ?>
		


	</div>
</div>