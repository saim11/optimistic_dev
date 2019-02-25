
<section class="Section_Devs Welcome_Classic">
	<div class="container">
		
		<div class="row">
			<div class="About_Tag">
				<div class="col-md-12"><h1>CO-ORDINATOR LOGIN</h1></div>				
				<div class="col-md-7 col-sm-7">
					<form id="" method="post" action="<?php echo $this->config->base_url().'c_login/login' ?>" class="validate Add_details">
					  <div class="row">
						  <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="name">Email :</label>
			                    <input type="text" id="email" value="<?php echo set_value('user_email'); ?>" name="user_email" class="form-control Form_Setup required">                  
			                  </div>   
		                  </div>		                  
		                  <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="name">Password :</label>
			                    <input type="password" id="password" value="<?php echo set_value('user_password'); ?>" name="user_password" class="form-control Form_Setup required">
			                    
			                  </div>   
		                  </div>
		                  <div class="col-md-12 col-sm-12">
                                  <div class="clearfix"></div>
		                  	  <button type="submit" id="submitBtn" class="btn btn-default Submit_Button">SUBMIT</button>
		                  </div>
	                  </div>	                                       
	                </form>
					
				</div>
				<div class="col-md-5 col-sm-5">
					<img src="<?php echo FRONTEND_ASSETS;?>images/coordinater.jpg" class="img-responsive" alt="" />
				</div>
			</div>			
		</div>




	</div>
</section>
<!-- Welcome_Classic Closed -->