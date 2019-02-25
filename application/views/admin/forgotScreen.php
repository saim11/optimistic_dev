<body class="page-body login-page login-form-fall">
<style>
.validate-has-error{
	color:#FFF !important;
}
</style>
<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="<?php echo ADMIN_URL;?>" class="logo">
				<?php 
					if(file_exists($logo))
					{
					?>
					<img src="<?php echo $this->imagethumb->image($logo,250,0);?>" alt="Admin Logo" />
					
                    <?php } ?>
			</a>
			
			<p class="description"><?php echo ($msg!="") ? $msg : "Dear user, please enter your email address to reset your password!";?></p>
			
			<!-- progress bar indicator -->
			
		</div>
		
	</div>
	
	
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form role="form" id="forgotPass" name="forgotPass" action="<?php echo ADMIN_URL;?>login/forgotpwd" method="post" class="validate">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-mail"></i>
						</div>
						
						<input type="text" data-validate="email,required" class="form-control" name="email" id="email" placeholder="Your email address" autocomplete="off" />
					</div>
					
				</div>
				
				
				
				<div class="form-group">
					<button type="submit" name="forgot_submit" id="forgot_submit" class="btn btn-primary btn-block btn-login">
						Submit
						<i class="entypo-right"></i>
					</button>
                    <button type="button" onClick="window.location='<?php echo ADMIN_URL;?>'" class="btn btn-primary btn-block btn-login">
						Back to Login
						
					</button>
				</div>
				
			</form>
			
			
			
			
		</div>
		
	</div>
	
</div>
