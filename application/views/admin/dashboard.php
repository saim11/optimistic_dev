<div class="row">
	<?php
	if($this->SqlModel->checkAccess('access_users',$this->user_data)==true)
	{?>
	<div class="col-sm-3" onclick="javascript:window.location='<?php echo base_url('manage/admins/');?>'">
	
		<div class="tile-stats tile-mag">
			<div class="icon"><i class="entypo-users"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $totalAdmins;?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
			
			<h3>Admin Users</h3>
			
		</div>
		
	</div>
    <?php } 
	
	if($this->SqlModel->checkAccess('access_pages',$this->user_data)==true)
	{?>
     <div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/pages/');?>'">
	
		<div class="tile-stats tile-mag ">
			<div class="icon"><i class="entypo-doc-text-inv"></i></div>
			<div class="num" data-start="0" data-end="<?php echo $totalPages;?>" data-postfix="" data-duration="1500" data-delay="2000">0</div>
			
			<h3>Web Pages</h3>
			
		</div>
		
	</div>
     <?php } ?>

	<?php
	if($this->SqlModel->checkAccess('access_settings',$this->user_data)==true)
	{?>
		<div class="col-sm-3"  onclick="javascript:window.location='<?php echo ADMIN_URL;?>site_settings/control/edit/1'">

			<div class="tile-stats tile-mag">
				<div class="icon"><i class="entypo-cog"></i></div>
				<div class="num" style="visibility:hidden" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="2800">0</div>

				<h3>Website Settings</h3>

			</div>

		</div>
	<?php } ?>
	<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/home/logout');?>'">

		<div class="tile-stats tile-plum">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>Logout</h3>

		</div>

	</div>
	<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/slider');?>'">

		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>slider</h3>

		</div>

	</div>

	<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/content');?>'">

		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>content</h3>

		</div>

	</div>

	<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/subscription');?>'">

		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>subscription</h3>

		</div>

	</div>


	<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/blog');?>'">

		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>Blog/Event/News</h3>

		</div>

	</div>
	<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/comments');?>'">

		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>comments</h3>

		</div>

	</div>

	<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/testimonials');?>'">

		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>testimonials</h3>

		</div>

	</div>
	<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/user');?>'">

		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>Users</h3>

		</div>

	</div>

		<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/book_category');?>'">

		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>Book category</h3>

		</div>

	</div>

	<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/courses');?>'">

		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>Courses</h3>

		</div>

	</div>

<div class="col-sm-3"  onclick="javascript:window.location='<?php echo base_url('manage/answer');?>'">

		<div class="tile-stats tile-purple">
			<div class="icon"><i class="entypo-logout"></i></div>
			<div style="visibility:hidden" class="num" data-start="0" data-end="0" data-postfix="" data-duration="1500" data-delay="2400">0</div>

			<h3>Answers</h3>

		</div>

	</div>
	
	
	






    
</div>
