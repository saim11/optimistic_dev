<ol class="breadcrumb bc-3">
<li><a href="<?php echo ADMIN_URL;?>"><i class="entypo-home"></i>Home</a></li>
<li class="active"><strong>Account Settings</strong></li>
</ol>
     
     
     
<?php if($alert=="success") { ?>
<div class="row alertrow">
	<div class="col-md-12">
    <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-success"><strong>Success!</strong> Settings saved sucessfully.</div>
	</div>
</div>
<?php } if($alert=="exist") { ?>
<div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> The email address you entered is already exist, please use different email address.</div>
	</div>
</div>
<?php } if($alert=="error") { ?>
<div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> Error occurred while saving the record, please try again.</div>
	</div>
</div>
<?php } if($alert=="perror") { ?>
<div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> Unable to change the password, please provide the correct current password.</div>
	</div>
</div>

<?php } ?>     
     
     

<h2>Account Settings</h2>
<br />


<div class="panel panel-primary">

	
	
	<div class="panel-body">
	
		<form role="form"  method="post"  id="adm_setting" name="adm_setting" method="post" action="<?php echo ADMIN_URL;?>home/savesettings">
			
			<div class="form-group">
				<label class="control-label">Name :</label>
				
				<input type="text" name="admin_name" id="admin_name" value="<?php echo $userdata['full_name'];?>"  placeholder="Enter your Full Name" class="form-control"  data-validate="required"  />
			</div>
            
            
			
			<div class="form-group">
				<label class="control-label">Email :</label>
				
				<input type="text" class="form-control" name="admin_email" id="admin_email" value="<?php echo $userdata['email'];?>" data-validate="required,email"  placeholder="Enter your email address"/>
			</div>
			
			<div class="form-group">
				<label class="control-label">Current Password :</label>
				
				<input class="form-control" type="password" name="admin_current_pwd" id="admin_current_pwd" />
			</div>
			
			<div class="form-group">
				<label class="control-label">New Password :</label>
				
				<input class="form-control" type="password" name="admin_new_pwd" id="admin_new_pwd" />
			</div>
			
			<div class="form-group">
				<label class="control-label">Confirm New Password :</label>
				
				<input class="form-control" type="password" name="admin_new_pwd2" id="admin_new_pwd2"/>
			</div>
			
			
			<div class="form-group">
				
				<button type="button" class="btn btn-danger" onclick="window.location='<?php echo ADMIN_URL;?>'">Cancel</button>
                <button type="submit" class="btn btn-success">Submit</button>
			</div>
		
		</form>
	
  </div>
  
  </div>



