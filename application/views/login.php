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

<div class="clearfix"></div>

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
	<div class="body_content_sub" id="loginUser">


		<!-- Login Updated UI -->
		<div class="login_formpage" >
			<form  method="post" action="<?php echo $this->config->base_url() . 'home/login' ?>">
					<h1>LOG IN</h1>
                        <div class="form-group">
                                <label for="exampleInputEmail1 ">Email address</label>
                                <input type="email" id="email" value="<?php echo set_value('user_email'); ?>" name="user_email" class="form-control  login_fstyle" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" value="<?php echo set_value('user_password'); ?>" name="user_password" class="form-control  login_fstyle" id="exampleInputPassword1" placeholder="Password">
                                    <small id="emailHelp" class="form-text text-muted reg_login"><a href="register.html">Register</a></small>
                                    <small id="emailHelp" class="form-text text-muted forget_login"><a href="register.html" data-toggle="modal" data-target="#exampleModal">Forgot Password?</a></small>
                                </div>

                                <div class="clearfix"></div>
                    <button type="submit" id="submitBtn" class="btn btn-success login_psubmit">Submit</button>
                </form>

            </div><!-- login_formpage-->

            <div class="login_formimg">
           		 <img src="<?php echo base_url(); ?>uploads/pages/op_login.jpg" alt="..." class="img-thumbnail login_imgg">
            </div><!-- login_formpage-->


        </div><!-- body_content_sub-->
	</div><!-- body_content-->

		<!-- End Login Updated UI  -->
		</div>
</section>
<br/><br/>
<!-- Welcome_Classic Closed -->
<script>
jQuery("#error").detach().prependTo('#loginUser');
</script>