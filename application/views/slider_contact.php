
<?php
				if ($DEVICE) {
					# code..
					$lebarKom = '300px';
					$tinggiDai = '200px';
					$tinggi2 = '100px';
				
				}else{
					$lebarKom = '800px';
					$tinggiDai = '900px';
					$tinggi2 = '0px';
					
				}
			?>


<style type="text/css">
	body{
		background-color: #FFF;
	}
</style>


<?php if ($DEVICE): ?>

	<div style="background-color: black">
	<div style="background-image: url('images/back.jpg');background-repeat:no-repeat;background-size:100% 100%;width: 100%;height: <?php echo $tinggiDai; ?>;opacity: 0.3">
	</div>
</div>
<div>

		<center>
			<h1>ABOUT US</h1>
		</center>
		<p class="mt-3 text-justify" style="font-size: 14pt;color: #000">ZAVALABS adalah perancang web dan mobile aplikasi berpengalaman yang berbasis di Kota Bandung. Layanan pembuatan aplikasi kami meliputi web aplikasi, mobile aplikasi dan e-commerce. Kami adalah kumpulan tim kreatif yang selalu bersemangat untuk membangun dan mengembangkan bisnis digital anda menjadi nyata.</p>

</div>
	
<?php endif ?>

<?php if (!$DEVICE): ?>
	<div style="background-color: black">
	<div style="background-image: url('images/back.jpg');background-repeat:no-repeat;background-size:100% 100%;width: 100%;height: <?php echo $tinggiDai; ?>;opacity: 0.3">
	</div>
</div>
<div style="position: absolute;left: 50%;top: 50%;
  transform: translate(-50%, -50%)">

		<h1 style="color: white;">ABOUT US</h1>
		<p class="mt-3 text-justify" style="font-size: 18pt;color: white">ZAVALABS adalah perancang web dan mobile aplikasi berpengalaman yang berbasis di Kota Bandung. Layanan pembuatan aplikasi kami meliputi web aplikasi, mobile aplikasi dan e-commerce. Kami adalah kumpulan tim kreatif yang selalu bersemangat untuk membangun dan mengembangkan bisnis digital anda menjadi nyata.</p>

</div>
<?php endif ?>

<style type="text/css">
	@keyframes phone {
		  from { transform: translateX(0px); }
		  to { transform: translateX(100px); }
		}
		@-webkit-keyframes phone {
		  from { transform: translateX(0px); }
		  to { transform: translateX(100px); }
		}
</style>



<script type="text/javascript">
	    // daisy effect
        document.addEventListener('DOMContentLoaded', function () {
          daisyjs(document.getElementById('daisyjs'), {
            dotColor: '#fff',
            lineColor: '#ddd'
          });
        }, false);
</script>

    <div class="main-content">

<div style="height: <?php echo $tinggi2 ?>"></div>
	