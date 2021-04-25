
<?php
				if ($DEVICE) {
					# code..
					$lebarKom = '300px';
					$tinggiDai = '150px';
					$tinggi2 = '90px';
				
				}else{
					$lebarKom = '800px';
					$tinggiDai = '350px';
					$tinggi2 = '220px';
					
				}
			?>


<div id="daisyjs" style="background-color:  #1A3A59;width: 100%;height: <?php echo $tinggiDai; ?>;">
	<div style="position: absolute;left: 50%;
  transform: translate(-50%, -50%)">
					<img src="images/web.png" style="width:<?php echo $lebarKom; ?>;" />

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
	