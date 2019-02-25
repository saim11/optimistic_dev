<body class="page-body login-page login-form-fall">

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="<?php echo ADMIN_URL;?>" class="logo">

					<img src="<?php echo $logo;?>" alt="Admin Logo" />
					

			</a>
			
			<p class="description"><?php echo ($msg!="") ? $msg : "Dear user, log in to access the admin area!";?></p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form method="post" role="form" id="form_login" action="<?php echo ADMIN_URL;?>login/auth">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						Login In
						<i class="entypo-login logbt"></i>
					</button>
                    <button type="button" class="btn btn-primary btn-block btn-login" onClick="window.location='<?php echo ADMIN_URL;?>login/forgot'">
						Forgot your password?
					</button>
				</div>
				
			</form>
			
			
			
			
		</div>
		
	</div>
	
</div>
