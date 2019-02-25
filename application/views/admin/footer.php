<?php if(!isset($loginSection)) {?>
	<footer class="main"></footer>
<?php } ?>
</div>
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>js/jvectormap/jquery-jvectormap-1.2.2.css">
	<!--<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>js/rickshaw/rickshaw.min.css">-->
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>js/select2/select2.css">
	<script type="text/jscript">
	var admin_url = "<?php echo ADMIN_URL;?>";	
	var base_url = "<?php echo base_url();?>";
	var controller = "<?php echo base_url('manage/'.$this->controller).'/';?>";
	var contName = "<?php echo $this->controller;?>";
	</script>
	<script src="<?php echo ADMIN_ASSETS;?>js/gsap/main-gsap.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/bootstrap.min.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/joinable.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/resizeable.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/neon-api.js"></script>
    <script src="<?php echo ADMIN_ASSETS;?>js/select2/select2.min.js"></script>
  	<!-- <script src="<?php echo ADMIN_ASSETS;?>js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>-->
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.sparkline.min.js"></script>
	<!--<script src="<?php echo ADMIN_ASSETS;?>js/rickshaw/vendor/d3.v3.js"></script>-->
	<!--<script src="<?php echo ADMIN_ASSETS;?>js/rickshaw/rickshaw.min.js"></script>-->
	<script src="<?php echo ADMIN_ASSETS;?>js/raphael-min.js"></script>
	<?php if(isset($dashBoard)){?>
	<script src="<?php echo ADMIN_ASSETS;?>js/morris.min.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/toastr.js"></script>
	<?php } if(isset($propertyActive)){?>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	
	<?php } if(isset($datePicker)){?>
    <script src="<?php echo ADMIN_ASSETS;?>js/bootstrap-datepicker.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/bootstrap-timepicker.min.js"></script>
    <?php } if(isset($uploadscript))
	{?>
	<!-- JavaScript Includes -->
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.knob.js"></script>
	<!-- jQuery File Upload Dependencies -->
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.ui.widget.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.iframe-transport.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.fileupload.js"></script>
	<!-- Our main JS file -->
	<script src="<?php echo ADMIN_ASSETS;?>js/script.js"></script>
	<?php } if(isset($suploadscript))
	{?>
	<!-- JavaScript Includes -->
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.knob.js"></script>
	<!-- jQuery File Upload Dependencies -->
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.ui.widget.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.iframe-transport.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.sliderfileupload.js"></script>
	<!-- Our main JS file -->
	<script src="<?php echo ADMIN_ASSETS;?>js/script.js"></script>
    <?php } if(isset($photosScript))
	{?>
	<!-- JavaScript Includes -->
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.knob.js"></script>
	<!-- jQuery File Upload Dependencies -->
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.ui.widget.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.iframe-transport.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.photofileupload.js"></script>
	<!-- Our main JS file -->
	<script src="<?php echo ADMIN_ASSETS;?>js/script.js"></script>
	<?php }?>
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>js/jquery.datetimepicker.css">
    <script src="<?php echo ADMIN_ASSETS;?>js/jquery.datetimepicker.full.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){
    	$('.datetimepick').each(function(){
    		var obj=$(this);
    			$(obj).datetimepicker({
				formatTime:'H:i',
				formatDate:'d.m.Y',
				//defaultDate:'8.12.1986', // it's my birthday
				defaultDate:'+03.01.1970', // it's my birthday
				defaultTime:'10:00',
				timepickerScrollbar:false
			    });
    	});
    });
    </script>
    
    <script type="text/javascript" src="<?php echo ADMIN_ASSETS;?>js/fancy/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo ADMIN_ASSETS;?>js/fancy/jquery.fancybox.js?v=2.1.5"></script>
    <script src="<?php echo ADMIN_ASSETS;?>js/jquery.tablednd.js"></script>
   
    <script src="<?php echo ADMIN_ASSETS;?>js/bootstrap-colorpicker.min.js"></script>
    <!--<script src="<?php echo ADMIN_ASSETS;?>js/neon-chat.js"></script> -->
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery.validate.js"></script>
    <script src="<?php echo ADMIN_ASSETS;?>js/additional-methods.js"></script>
   
	<script src="<?php echo ADMIN_ASSETS;?>js/neon-login.js"></script>
	<script src="<?php echo ADMIN_ASSETS;?>js/neon-custom.js"></script>
    <script src="<?php echo ADMIN_ASSETS;?>js/custom.js"></script>
    
    
<div class="modal fade" id="addBlogCatModal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Blog Category</h4>
			</div>
			
			<div class="modal-body">
				<div class="form-group">
				<label class="control-label">Category Name :</label>
                
                  <input type="text" name="blog_cat_ajax" id="blog_cat_ajax" value="" class="form-control aplha" placeholder="Movies" />
			</div>
            <span id="catErrorMsg" class="validate-has-error"></span>
			</div>
			
			<div class="modal-footer">
            <img src="<?php echo ADMIN_ASSETS;?>images/ajax_loader.gif" alt="Loading..." style="margin-right:10px;display:none" id="ajax_loader_cat"/>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" id="bCatSubmit">Submit</button>
			</div>
		</div>
	</div>
</div>   

<div class="modal fade" id="addBlogTagModal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Add Blog Tag</h4>
			</div>
			
			<div class="modal-body">
				<div class="form-group">
				<label class="control-label">Tag Name :</label>
                
                  <input type="text" name="blog_tag_ajax" id="blog_tag_ajax" value="" class="form-control aplha" placeholder="MyTag" />
			</div>
            <span id="tagErrorMsg" class="validate-has-error"></span>
			</div>
			
			<div class="modal-footer">
            <img src="<?php echo ADMIN_ASSETS;?>images/ajax_loader.gif" alt="Loading..." style="margin-right:10px;display:none" id="ajax_loader_tag"/>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary" id="bTagSubmit">Submit</button>
			</div>
		</div>
	</div>
</div> 
 <!-- Modal -->
<div class="modal fade" id="dupModal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Duplicate Record</h4>
			</div>
			
			<div class="modal-body">
				Are you sure you want to duplicate the <strong id="recname"></strong> record.
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" id="duplicateLink" class="btn btn-primary">Confirm</button>
			</div>
		</div>
	</div>
</div>
<!-- Model -->   
<!-- Modal -->
<div class="modal fade" id="statusModal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Change Status</h4>
			</div>
			
			<div class="modal-body">
				Are you sure you want to change the status to <span id="modStatus"></span>?
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" id="statusLink" class="btn btn-success">Confirm</button>
			</div>
		</div>
	</div>
</div>
<!-- Model -->
<!-- Modal -->
<div class="modal fade" id="deleteModal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Delete Record</h4>
			</div>
			
			<div class="modal-body">
				Are you sure you want to delete the record?
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" id="deleteLink" class="btn btn-danger">Confirm</button>
			</div>
		</div>
	</div>
</div>
<!-- Model -->

<!-- Modal -->
<div class="modal fade" id="delAllModal">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Delete Selected Records</h4>
			</div>
			
			<div class="modal-body">
				Are you sure you want to delete the selected records?
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger" id="delAllSubmit">Confirm</button>
			</div>
		</div>
	</div>
</div>
<!-- Model -->
<!-- Blog Category Modal -->

<!-- Model -->
</body>
</html>