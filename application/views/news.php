 <style type="text/css">
 	.card-kecil{
 		  background-size: cover;
 		  transition-property: background;
		  transition-duration: 2s;
		  transition-timing-function: linear;
		  transition-delay: 1s;
 	}
 	.card-kecil:hover{
 		cursor: pointer;
 		opacity: 0.7;
 		background-size: 110% 110%;

 	}

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
    .owl-prev { left: -5%; }
    .owl-next { right: -3%; }
    .owl-prev i, .owl-next i {transform : scale(1,1);}


    .card-top{
    	width: 100%;border-radius: 20px;background-color: #FFF;
    	overflow: hidden;	
    }



    .card-recent .recent-title{
    	color:#000;font-family: Poppins-Bold;font-size: 12pt;
    }
    .card-recent .recent-img{
    	width: 100%;height:auto;border-radius: 10px;
    }
    .card-recent .recent-desc{
    	color:#000;font-family: Poppins-Regular;font-size: 12pt;
    }

     .card-recent:hover {
     	cursor: pointer;
     }

    .card-recent:hover .recent-title{
    	color:#8cc454;font-family: Poppins-Bold;font-size: 12pt;
    }
        .card-recent:hover .recent-desc{
    	color:#8cc454;font-family: Poppins-Regular;font-size: 12pt;
    }




 </style>
 <div style="background: linear-gradient(0deg, rgba(255,251,251,1) 0%, #8cc454 100%);height: 100px"></div>
<div class="container" >
	 <div class="row">
	  <div class="card-kecil col-lg-6" style="height: 500px;background-image: url('https://images.unsplash.com/photo-1613390406835-0fab031198dc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
	 	<div style="position: absolute;bottom: 0">
	 		<p style="color:#FFF;font-family: Poppins-Bold;font-size: 20pt;text-shadow: 3px 6px 6px #00000052">The world’s first floating farm making waves in Rotterdam</p>
	 		<p style="color:#FFF;font-family: Poppins-Regular;">by Reza 01 Mei 2021</p>
	 	</div>
	  </div>
	  <div class="col-lg-3" style="height: 500px;">
	  	 <div class="row">
	  	 	<div class="card-kecil col-lg-12" style="height: 250px;background-image: url('https://images.unsplash.com/photo-1617636018954-f830c5900a0e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80');">
	  			<div style="position: absolute;bottom: 0">
		
			 		<p style="color:#FFF;font-family: Poppins-Regular;text-shadow: 3px 6px 6px #00000052">How Aerobic Classes Can Make You a Better Problem Solver</p>
			 	</div>
	  	 	</div>
	  	 	<div class="card-kecil col-lg-12 bg-secondary" style="height: 250px;background-image: url('https://images.unsplash.com/photo-1546367564-ade1880f8921?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80');">
	  			<div style="position: absolute;bottom: 0">
		
			 		<p style="color:#FFF;font-family: Poppins-Regular;text-shadow: 3px 6px 6px #00000052">How Aerobic Classes Can Make You a Better Problem Solver</p>
			 	</div>
	  	 	</div>
	  	 </div>
	  </div>
	   <div class="col-lg-3" style="height: 500px;">
	  	 <div class="row">
	  	 	<div class="card-kecil col-lg-12" style="height: 250px;background-image: url('https://images.unsplash.com/photo-1440615496174-ee7ecbe8e733?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fG5hdHVyZXxlbnwwfDJ8MHxncmVlbnw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60');">
	  		<div style="position: absolute;bottom: 0">
		
			 		<p style="color:#FFF;font-family: Poppins-Regular;text-shadow: 3px 6px 6px #00000052">How Aerobic Classes Can Make You a Better Problem Solver</p>
			 	</div>
	  	 	</div>
	  	 	<div class="card-kecil col-lg-12" style="height: 250px;background-image: url('https://images.unsplash.com/photo-1549298916-b41d501d3772?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80');">
	  		<div style="position: absolute;bottom: 0">
		
			 		<p style="color:#FFF;font-family: Poppins-Regular;text-shadow: 3px 6px 6px #00000052">How Aerobic Classes Can Make You a Better Problem Solver</p>
			 	</div>
	  	 	</div>
	  	 </div>
	  </div>
	</div>

	<!-- slider -->
	<div style="padding-top: 5%;padding-bottom: 5%">
			  	<div class="owl-carousel owl-theme" data-autoplay="true" data-loop="true" data-nav="false" data-items="4" data-items-laptop="4" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="30" data-dots="true" >
				
				 		<div class="card-top">
							<img src="https://images.unsplash.com/photo-1515955656352-a1fa3ffcd111?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" style="width: 100%">
						</div>
						<div class="card-top">
							<img src="https://images.unsplash.com/photo-1511556532299-8f662fc26c06?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" style="width: 100%">
						</div>
						<div class="card-top">
							<img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" style="width: 100%">
						</div>
						<div class="card-top">
							<img src="https://images.unsplash.com/photo-1548801133-da353ebb1d97?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1050&q=80" style="width: 100%">
						</div>

				 
				 	
				 	
				 	
				 </div>
	</div>
	<div class="row">
		<div class="col-lg-8">
			<p style="border-bottom: 2px solid #8cc454;color: #000;font-family: Poppins-Bold;font-size: 14pt">Kabar Utama</p>
			<div class="row">
					<div class="col-lg-12">
						<img src="https://images.unsplash.com/photo-1589314559908-3cc758e0c073?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" style="width: 100%;height:auto;border-radius: 10px">
						<div style="position: absolute;bottom: 0;padding: 1%">
					 		<p style="color:#FFF;font-family: Poppins-Bold;font-size: 20pt">The world’s first floating farm making waves in Rotterdam</p>
					 		<p style="color:#FFF;font-family: Poppins-Regular;">by Reza 01 Mei 2021</p>
					 	</div>
					</div>
			</div>
			<div class="row" style="margin-top: 5%">
					<div class="col-lg-6">
						<img src="https://images.unsplash.com/photo-1551107696-a4b0c5a0d9a2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" style="width: 100%;height:auto;border-radius: 10px">
						<div style="padding: 1%">
					 		<p style="color:#000;font-family: Poppins-Bold;font-size: 12pt">The world’s first floating</p>
					 		<p style="color:#000;font-family: Poppins-Regular;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					 	</div>
					</div>
					<div class="col-lg-6">
						<img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" style="width: 100%;height:auto;border-radius: 10px">
						<div style="padding: 1%">
					 		<p style="color:#000;font-family: Poppins-Bold;font-size: 12pt">The world’s first floating</p>
					 		<p style="color:#000;font-family: Poppins-Regular;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					 	</div>
					</div>
			</div>


			

		</div>
		<div class="col-lg-4">
			<p style="border-bottom: 2px solid #8cc454;color: #000;font-family: Poppins-Bold;font-size: 14pt">Recent Post</p>
				<div class="card-recent row">
					<div class="col-lg-12">
						<p class="recent-title">Lorem ipsum dolor</p>
					</div>
						<div class="col-lg-4">
							<img class="recent-img" src="https://images.unsplash.com/photo-1501580979865-c37d96d28bba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
							
						</div>
						<div class="col-lg-8">
							<div style="padding: 0%">
						 		<p class="recent-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
						 		
						 	</div>
						</div>
		        </div>

		        <div class="card-recent row">
					<div class="col-lg-12">
						<p class="recent-title">Lorem ipsum dolor</p>
					</div>
						<div class="col-lg-4">
							<img class="recent-img" src="https://images.unsplash.com/photo-1452615975650-a030f3016596?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=926&q=80">
							
						</div>
						<div class="col-lg-8">
							<div style="padding: 0%">
						 		<p class="recent-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
						 		
						 	</div>
						</div>
		        </div>


		        <div class="card-recent row">
					<div class="col-lg-12">
						<p class="recent-title">Lorem ipsum dolor</p>
					</div>
						<div class="col-lg-4">
							<img class="recent-img" src="https://images.unsplash.com/photo-1542665889681-5fd1eb5c9f5b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80">
							
						</div>
						<div class="col-lg-8">
							<div style="padding: 0%">
						 		<p class="recent-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
						 		
						 	</div>
						</div>
		        </div>

		        <div class="card-recent row">
					<div class="col-lg-12">
						<p class="recent-title">Lorem ipsum dolor</p>
					</div>
						<div class="col-lg-4">
							<img class="recent-img" src="https://images.unsplash.com/photo-1528111610157-f0553810b46f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1051&q=80">
							
						</div>
						<div class="col-lg-8">
							<div style="padding: 0%">
						 		<p class="recent-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
						 		
						 	</div>
						</div>
		        </div>

		</div>
	</div>
</div>