



<section class="Section_Devs Welcome_Classic">
	<div class="container">
		
		<div class="row">
			<div class="About_Tag">
				<div class="col-md-12"><h1>Reset Password</h1></div>				
				<div class="col-md-7 col-sm-7">
					<form id="" method="post" action="<?php echo $this->config->base_url().'home/resetpassword' ?>" class="validate Add_details">
					  <div class="row">
						  <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="name">Password :</label>
			                    <input type="password" pattern="(?=^.{6,}$)((?=.*\d))(?![.\n])(?=.*[a-z]).*$" title="Minimum 6 characters required and a Number atleast" class="form-control" name="password" placeholder="Password">                  
			                  </div>   
		                  </div>		                  
		                  <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="name">Re-Type Password :</label>
			                    <input id="login-password" type="password" class="form-control" name="repassword" placeholder="Re-Type Password">
			                    
			                  </div>   
		                  </div>
		                  <div class="col-md-12 col-sm-12">
		                  	  <button type="submit" id="submitBtn" class="btn btn-default Submit_Button">SUBMIT</button>
		                  </div>
	                  </div>	                                       
	                </form>
					





				</div>
				<div class="col-md-5 col-sm-5">
					<img src="<?php echo FRONTEND_ASSETS;?>images/about_optimistic.jpg" class="img-responsive" alt="" />
				</div>
			</div>			
		</div>




	</div>
</section>
<!-- Welcome_Classic Closed -->
