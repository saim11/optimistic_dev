<footer>

	<div class="container">

		<div class="row">

			<?php echo $this->ws['footer_text']; ?>

			<div class="col-md-3 col-sm-3">

				<h2>JOIN OUR COMMUNITY</h2>

				<p>Sign Up for Great Offers and Values</p>

				<div class="input-group Newsletter">

				  <form method="post" action="<?php echo $this->config->base_url().'home/subscribed'; ?>" >

			      <input type="text" class="form-control" name="emailsubscribe" placeholder="Email" style="width:69%;">

			      <span class="input-group-btn">

			        <button class="btn btn-secondary Subscribe" type="submit">SIGN UP</button>

			      </span>

			      </form>

			    </div>

			    <div class="Social">

				    <a href="<?php echo $this->ws['facebook']; ?>"><img src="<?php echo FRONTEND_ASSETS;?>images/facebook.png" class="img-responsive" alt="" /></a>

				    <a href="<?php echo $this->ws['twitter']; ?>"><img src="<?php echo FRONTEND_ASSETS;?>images/twitter.png" class="img-responsive" alt="" /></a>

			    </div>

			    <!-- Social Closed -->

			</div>

		</div>

	</div>



	<div class="Copyright">

		<div class="container">

			<p><?php echo $this->ws['copywrite_text']; ?></p>

		</div>	

	</div>

	<!-- Copyright Closed -->



</footer>

<!-- FOOTER CLOSED -->











  



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="<?php echo FRONTEND_ASSETS;?>js/bootstrap.min.js"></script>



 

<!-- 4STEP FORM PLUGINS -->

<script type="text/javascript" src="<?php echo FRONTEND_ASSETS;?>steps/js/jquery.steps.js"></script>   

<script type="text/javascript" src="<?php echo FRONTEND_ASSETS;?>steps/js/jquery.validate.js"></script>





<!-- Attach Testimage to Header -->

<script>

    jQuery(function($) {

        $('.main-slider, .page-header').prepend('<img src="<?php echo FRONTEND_ASSETS;?>images/slider1.jpg" alt="" id="testimage" class="hidden">');

    });

</script>




<script src="<?php echo FRONTEND_ASSETS;?>js/jquery.fancybox.js"></script>
<!-- //-CUSTOM PLUGINS-// -->

<script src="<?php echo FRONTEND_ASSETS;?>js/custom.js"></script>

<script src="<?php echo FRONTEND_ASSETS;?>js/custom-enroll.js"></script>







        

</body>

</html>