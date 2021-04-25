
<?php
				if ($DEVICE) {
					# code..
					$lebarKom = '350px';
					$tinggiDai = '200px';
					$tinggi2 = '220px';
				
				}else{
					$lebarKom = '1000px';
					$tinggiDai = '350px';
					$tinggi2 = '500px';
					
				}
			?>


<div id="daisyjs" style="background-color:  #1A3A59;width: 100%;height: <?php echo $tinggiDai; ?>;padding-top: 5%">
	<div style="position: absolute;left: 50%;
  transform: translate(-50%, -50%)">
					<img src="images/mobile2.png" style="width:<?php echo $lebarKom; ?>" />

	</div>
</div>

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
	