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
		<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/style.css" rel="stylesheet">

<!-- End header Files -->
<style>
/* .top_social , .top_social > a {
	padding: 0px !important;
	margin: 0px !important;

}
.top_social > a {
margin:2% 1% 2% 1% !important;
display: inline-block ;
}
.nav {
    padding: 0px;
    margin: -5px;
} */
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Bootstrap -->

<!-- <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/bootstrap.min.css" rel="stylesheet">

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/style-student-profile-form.css" rel="stylesheet">

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/styles.css?2" rel="stylesheet">

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/jquery.fancybox.css?1" rel="stylesheet">

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/media_queries.css" rel="stylesheet"> -->



<!-- Animate.css -->

<!-- <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/animate.css"> -->



<!-- 4step form.css -->

<!-- <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/steps/css/normalize.css">

<link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/steps/css/jquery.steps.css"> -->



<!-- WEB FONT -->

<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,500' rel='stylesheet' type='text/css'> -->

<!-- <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,800,400' rel='stylesheet' type='text/css'> -->

<!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->


<script>

	function submitForm(){
		console.log("Submitted");
		$.ajax({
	    	type: 'POST',
	    	data: {form_submitted: "Submitted",Id:<?php echo $form_apply2['enrol']['Id']; ?>},
	    	url: '<?php echo site_url('ApplicationForms/form_apply2_submitted') ?>',
	    	success: function(result){
	    		alert("form submitted");
				window.location.replace('<?php echo base_url("application-form.html") ?>');
	    	},
	    });
	}

</script>



<!--our satisfied customer Start -->
<div class="osc">
  <div class="ocs_sub">
    <!--Carousel Wrapper-->
    	<img src="<?php echo FRONTEND_ASSETS; ?>images/slider_login.jpg" class="img-fluid" alt="Responsive image">
    <!--/.Carousel Wrapper-->
  </div>
  <!-- ocs_sub-->
</div>
<!-- osc-->
<!--our satisfied customer End -->
<!-- Head_Titles Closed -->
<div class="body_content">
		<div class="body_content_sub">
	<section class="Section_Devs Welcome_Classic Optim-Form0s">
		<div id="divtoconvert" class="container" style="background-color: white; ">
			<div class="row Add_details">
				<div class="col-md-12 col-sm-12 Contact_Add Appy-formy">
				<br /><br /><br /><br /><br /><br />
					<form id="contactForm" method="post" action="" class="validate">
						<div class="col-sm-12">
							<div class="form-group">
								<label><h5>Student Name</h5></label>
								<input type="text" id="studentName" class="form-control Form_Setup required"
									value="<?php
echo $form_apply2['enrol']['student_name'];
?>">
								<!-- <span id="returnResult"></span> -->
							</div>
						</div>

						<br class="clearfix">
						<h3>QUALIFICATIONS (Please tick)</h3>

						<table class="table table-bordered opt-centered">

							<tbody>
									<tr>
										<th>Tick</th>
										<th>Code</th>
										<th>Title</th>
									</tr>

								<?php
$qualificationSelected = explode(',', $form_apply2['enrol']['qualification']);
$qualifications        = $form_apply2['qualifications'];
$qulInput              = 1;
$qulLable              = 1;
foreach ($qualifications as $qualification) {
    $checked = "";
    if (in_array($qualification['code'], $qualificationSelected)) {
        $checked = "checked";
    }
    ?>
										<tr>
											<td>
												<div class="checkbox">
													<input id="box<?php echo $qulInput++; ?>" class="qualification" name="qulifications[]" value="<?php echo $qualification['code'] ?>" type="checkbox" <?php echo $checked; ?> />
													<label for="box<?php echo $qulLable++; ?>"></label>
												</div>
											</td>
											<td><?php echo $qualification['code']; ?></td>
											<td><?php echo $qualification['title']; ?></td>
										</tr>
								<?php
}
?>
							</tbody>
						</table>



						<br class="clearfix">
						<h3>Attachments (Please tick)</h3>

						<table class="table table-bordered opt-centered">
							<tbody>

								<?php
$attachmentsSelected = explode(',', $form_apply2['enrol']['attachments']);
$attachments         = $form_apply2['attachments'];

$attInput = 6;
$attLable = 6;
foreach ($attachments as $attachment) {
    $checked = "";
    if (in_array($attachment, $attachmentsSelected)) {
        $checked = "checked";
    }
    ?>
										<tr>
											<td>
												<div class="checkbox">
													<input id="box<?php echo $attInput++; ?>" class="attachments" name="attachments[]" value="<?php echo $attachment ?>" type="checkbox" <?php echo $checked; ?> />
													<label for="box<?php echo $attLable++; ?>"></label>
												</div>
											</td>
											<td><?php echo $attachment; ?></td>
										</tr>
								<?php
}
?>
							</tbody>
						</table>


						<!--<div class="col-md-12 col-sm-12">
                  	  <button type="submit" id="submitBtn" class="btn btn-default Submit_Button">SUBMIT</button>
                  </div>-->
					</form>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row Add_details">
				<div class="col-md-12 col-sm-12">
					<a class="btn btn-default Submit_Button" onclick="hello(); submitForm();">SUBMIT</a>
				</div>
			</div>
		</div>
	</section>
</div>
</div>
	<!-- Welcome_Classic Closed -->

	<script>


$(document).ready(function() {

	//checkbox data send to controller attachments
		$('.attachments').change(function(){
			console.log('attachments change');
			var chkAttachmentArray = [];
			$(".attachments:checked").each(function() {
				chkAttachmentArray.push($(this).val());
			});
			var attachmentSelected;
			attachmentSelected = chkAttachmentArray.join(',');

			if(attachmentSelected.length > 0){
				// alert("You have selected " + attachmentSelected);
			}else{
				// alert("Please at least check one of the checkbox");
			}
			// console.log("seleted", attachmentSelected);

			$.ajax({
				type: 'POST',
				data: {attachmentSelected: attachmentSelected},
				url: '<?php echo site_url('ApplicationForms/form_apply2_attachments') ?>',
				success: function(result){
		    		$('#returnResult').html(result);
		    	},
			})
		});
	// attachments end


	// checkboxes data send to controller qualification
	$('.qualification').change(function(){
		console.log("change");
		var chkQualificationArray = [];
		$(".qualification:checked").each(function() {
			chkQualificationArray.push($(this).val());
		});
		var qualificationSelected;
		qualificationSelected = chkQualificationArray.join(',');

		if(qualificationSelected.length > 0){
			// alert("You have selected " + qualificationSelected);
		}else{
			// alert("Please at least check one of the checkbox");
		}
		// console.log("seleted", qualificationSelected);

		$.ajax({
			type: 'POST',
			data: {qualificationSelected: qualificationSelected},
			url: '<?php echo site_url('ApplicationForms/form_apply2_qualification') ?>',
			success: function(result){
	    		$('#returnResult').html(result);
	    	},
		})
	});

	// checkbox end



	  $('#studentName').on('input', function() {

	    // get the value from the username field
	    var studentName = $('#studentName').val();
	    // Ajax request sent to the CodeIgniter controller "ajax" method "studentname_changes"
	    // post the studentname field's value
	    $.ajax({
	    	type: 'POST',
	    	data: {studentName: studentName},
	    	url: '<?php echo site_url('ApplicationForms/form_apply2_studentName') ?>',
	    	success: function(result){
	    		console.log(result);
			},
			error: function (xhr, ajaxOptions, thrownError) {
				// console.log(xhr.status);
				// console.log(thrownError);
			}
	    });

	    // $.post('<?=base_url()?>ApplicationForms/form_apply2_studentName',
	    //   { student_Name: studentName },

	    //   // when the Web server responds to the request
	    //   function(result) {
	    //     	$('#returnResult').html(result);
	    //   }
	    // );
	  });

	});

	</script>

	<script src='<?php echo base_url(); ?>ofpdfs/f2/js/pdfmake.min.js'></script>
	<script src='<?php echo base_url(); ?>ofpdfs/f2/js/vfs_fonts.js'></script>

<script src='<?php echo base_url(); ?>ofpdfs/f2/js/form.js'></script>

