 <!-- Header files -->
        <!-- Animate.css -->
        <!-- <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>css/animate.css">
        <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>steps/css/normalize.css">
        <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>steps/css/jquery.steps.css"> -->
        <!-- All pages css -->
        <!-- <link href="<?php echo FRONTEND_ASSETS; ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/style-student-profile-form.css" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/styles.css?2" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/jquery.fancybox.css?1" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/media_queries.css" rel="stylesheet"> -->

		<!-- End header Files -->
		<!--our satisfied customer Start -->
<div class="osc">
  <div class="ocs_sub">
    <!--Carousel Wrapper-->
    	<img src="<?php echo base_url(); ?>uploads/pages/slider_login.jpg" class="img-fluid" alt="Responsive image">
    <!--/.Carousel Wrapper-->
  </div>
  <!-- ocs_sub-->
</div>
<!-- osc-->
<!--our satisfied customer End -->
<section class="body_content">
	<div class="body_content_sub">
		<div class="login_formpage">
					<form id="" method="post" action="<?php echo $this->config->base_url() . 'c_login/login' ?>" class="validate Add_details">
						<h1>CO-ORDINATOR LOGIN</h1>
			              <div class="form-group">
			                  	<label for="name">Email :</label>
			                    <input type="text" id="email" value="<?php echo set_value('user_email'); ?>" name="user_email" class="form-control Form_Setup required">
			              </div>
			              <div class="form-group">
			                  	<label for="name">Password :</label>
			                    <input type="password" id="password" value="<?php echo set_value('user_password'); ?>" name="user_password" class="form-control Form_Setup required">
			              </div>
		                <div class="col-md-12 col-sm-12">
                                  <div class="clearfix"></div>
		                  	  <button type="submit" id="submitBtn" class="btn btn-success login_psubmit">SUBMIT</button>
		                </div>
					</form>
		</div><!-- login_formpage-->

				<div class="login_formimg">
					<img src="<?php echo FRONTEND_ASSETS; ?>images/coordinater.jpg" class="img-thumbnail login_imgg" alt="" />
				</div>
				</div><!-- body_content_sub-->
	</div><!-- body_content-->

</section>
<!-- Welcome_Classic Closed -->