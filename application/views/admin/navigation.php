<body class="page-body">
<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="<?php echo ADMIN_URL;?>">
               
               		<?php 
					$logo = $this->config->base_url().$this->SqlModel->getSingleField('logo','site_settings',array('id'=>1));

					?>
					<img src="<?php echo $logo; ?>" width="150" alt="Admin Logo" />


				</a>
			</div>
						<!-- logo collapse icon -->
						
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
									
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
				
		
				
		<ul id="main-menu" class="">
			
			<li <?php echo (isset($dashBoard))? 'class="active"' : '';?>>
				<a href="<?php echo ADMIN_URL;?>">
					<i class="entypo-gauge"></i>
					<span>Dashboard</span>
				</a>
				
			</li>
            
            
            <?php
			if($this->SqlModel->checkAccess('access_users',$this->user_data)==true)
			{?>
			<li <?php echo (isset($adminsActive))? 'class="active"' : '';?>>
				<a href="<?php echo ADMIN_URL;?>admins">
					<i class="entypo-users"></i>
					<span>Admin Users</span>
				</a>
				
			</li>
            <?php } 
			
			if($this->SqlModel->checkAccess('access_pages',$this->user_data)==true)
			{?> 
            
            <li <?php echo (isset($pagesActive))? 'class="active"' : '';?>>
				<a href="<?php echo ADMIN_URL;?>pages">
					<i class="entypo-doc-text-inv"></i>
					<span>Web Pages</span>
				</a>
				
			</li>
           <?php } 
			

			if($this->SqlModel->checkAccess('access_settings',$this->user_data)==true)
			{?>
            
            <li <?php echo (isset($wsettingActive))? 'class="active"' : '';?>>
				<a href="<?php echo ADMIN_URL;?>site_settings/control/edit/1">
					<i class="entypo-cog"></i>
					<span>Website Settings</span>
				</a>
				
			</li>
            <?php } ?>

            <li <?php echo (isset($pagesActive))? 'class="active"' : '';?>>
				<a href="<?php echo ADMIN_URL;?>menu">
					<i class="entypo-doc-text-inv"></i>
					<span>Menu</span>
				</a>				
			</li>

			
			<li <?php echo (isset($adminsActive))? 'class="active"' : '';?>>
				<a href="<?php echo ADMIN_URL;?>user">
					<i class="entypo-users"></i>
					<span>Users</span>
				</a>
			</li>
			
			<li <?php echo (isset($pagesActive))? 'class="active"' : '';?>>
				<a href="<?php echo ADMIN_URL;?>book_category">
					<i class="entypo-book-open"></i>
					<span>Book Category</span>
				</a>				
			</li>
			<li <?php echo (isset($pagesActive))? 'class="active"' : '';?>>
				<a href="<?php echo ADMIN_URL;?>studentForms">
					<i class="entypo-book-open"></i>
					<span>Student Forms</span>
				</a>				
			</li>
            
            
            <li>
				<a href="<?php echo ADMIN_URL;?>home/logout">
					<i class="entypo-logout"></i>
					<span>Logout</span>
				</a>
				
			</li>
  		
			
			
			
			
		</ul>
				
	</div>
<?php ################# END of Navigation ##################### ?>
<div class="main-content">
<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		
		<ul class="user-info pull-left pull-none-xsm">
		
			<!-- Profile Info -->
			<li class="profile-info"><!-- add class "pull-right" if you want to place this from right -->
				
				
					
					<strong>Welcome!</strong> <?php echo $userdata['full_name'];?> <br/><strong>Last login:</strong> <?php echo date('M d, Y h:ia',strtotime($this->session->userdata('last_login')));?> | <strong>IP Address:</strong> <?php echo $this->session->userdata('last_ip');?>
				
				
				
			</li>
		
		</ul>
		
		
	
	</div>
	
	
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
		<ul class="list-inline links-list pull-right">
			<li>
				<a href="<?php echo ADMIN_URL.'home/settings';?>">
					Account Settings <i class="entypo-tools right"></i>
				</a>
			</li>
			
			
			<li class="sep"></li>
			
			<li>
				<a href="<?php echo ADMIN_URL.'home/logout';?>">
					Log Out <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
		
	</div>
	
</div>
<hr />
<script type="text/javascript">
function getRandomInt(min, max) 
{
	return Math.floor(Math.random() * (max - min + 1)) + min;
}
</script>
