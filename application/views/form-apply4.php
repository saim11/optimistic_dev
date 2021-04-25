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

<script>

	function submitForm(){
		console.log("submitted");
		$.ajax({
	    	type: 'POST',
	    	data: {form_submitted: "Submitted"},
	    	url: '<?php echo site_url('ApplicationForms/form_apply4_submitted') ?>',
	    	success: function(result){
	    		alert("form submitted");
	    		window.location.replace('<?php echo base_url("application-form.html") ?>');
	    	},
	    	error: function(err){
	    		alert("Form not submit please try again");
	    	}
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
				<div class="container">
					<div class="row Add_details">
						<div class="col-md-12 col-sm-12 Contact_Add Appy-formy">
							<h1>Student Induction Form</h1>
					<form id="contactForm" method="POST" action="" class="validate">
						<table class="table table-bordered opt-centered">
							<tbody>
								<tr>
									<td>Qualifications Name</td>
									<td style="text-align: left;">

										<?php
											$qualificationsNameSelected = explode(',', $form_apply4['enrol']['qualifications_name']);
											$qualificationsName         = $form_apply4['qualificationsName'];
											// print_r($qualificationsNameSelected);
											$qualificationInput = 1;
											$qualificationLabel = 1;
											foreach ($qualificationsName as $qualification) {
												$checked = "";

												if (in_array($qualification, $qualificationsNameSelected)) {
													$checked = "checked";
												}
												?>

												<div class="checkbox">
													<input id="box<?php echo $qualificationInput++; ?>" name="qualificationsName[]" type="checkbox" class="changeOption qualificationsName" value="<?php echo $qualification; ?>" <?php echo $checked; ?> />
													<label for="box<?php echo $qualificationLabel++; ?>"><?php echo $qualification; ?></label>
												</div>
										<?php
											}
											?>
									</td>
								</tr>

								<tr>
									<td>Student Name</td>
									<td>
										<input type="text" id="studentName" class="textChange form-control Form_Setup required" value="<?php echo $form_apply4['enrol']['student_name'] ?>">
									</td>
								</tr>
							</tbody>
						</table>

						<p>I have attended an induction session, which included an outline of the relevant student information within the Student
							Handbook. I declare that I understand my rights and responsibilities as a student with the RTO and that I have been
							advised how to access the relevant handbooks, resources, policies and procedures within the organisation.</p>


						<div class="col-sm-6">
							<div class="form-group">
								<label>Signed</label>
								<input type="text" id="" class="form-control Form_Setup required">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Date</label>
								<input type="text" id="" class="form-control Form_Setup required">
							</div>
						</div>

						<div class="clearfix"></div>

						<p>I have attended a Student Induction presentation, which outlined the following:</p>

						<p>
							> Organisational Profile
							<br> > Mission Statement
							<br> > Organisational Structure
							<br> > Scope of Registration
							<br> > Course outline detailing information regarding my course of enrolment
							<br> > Information regarding the RTO’s responsibilities
							<br> > Information regarding National Recognition
							<br> > Recognition of Prior Learning
							<br> > Student Handbook
							<br> > Support Services
							<br> > Attendance Procedures
							<br> > Types of Assessments My Trainer’s responsibilities
							<br> > My rights and responsibilities
							<br> > How to provide feedback
							<br> > The facilities available
							<br> > Evacuation Procedure
							<br> > Smoking Policy
							<br> > Smoking Policy
							<br> > Housekeeping
							<br> > Continual Improvement
							<br> > When Certificates will be issued
						</p>



						<br class="clearfix">
						<h3>OFFICE USE ONLY</h3>

						<table class="table table-bordered opt-centered">
							<tbody>
								<tr>
									<td>
										<div class="form-group">
											<label>Induction delivered by:</label>
											<input type="text" id="" class="form-control Form_Setup required" disabled>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label>Signed:</label>
											<input type="text" id="" class="form-control Form_Setup required" disabled>
										</div>
									</td>
									<td>
										<div class="form-group">
											<label>Date:</label>
											<input type="text" id="" class="form-control Form_Setup required" disabled>
										</div>
									</td>
								</tr>
							</tbody>
						</table>


						<div class="col-md-12 col-sm-12" >

								<button type="button" class="btn btn-default Submit_Button"  onClick="hello(); submitForm();">SUBMIT</button>

						</div>
					</form>
					<br /><br /><br /><br /><br /><br />
				</div>
			</div>
		</div>
	</section>
</div>
</div>
	<!-- Welcome_Classic Closed -->


<script>
	$(document).ready(function(){

		$('.changeOption').change(function(){

			var chkqualificationsNameArray = [];

			$(".qualificationsName:checked").each(function() {
				chkqualificationsNameArray.push($(this).val());
			});

			var qualificationsNameSelected;
			qualificationsNameSelected = chkqualificationsNameArray.join(',');

			var form_apply4_data_2 = new Object();
			form_apply4_data_2.qualificationsNameSelected = qualificationsNameSelected;

			console.log(form_apply4_data_2);

			$.ajax({
				type: 'POST',
				data: {
					form_apply4_data_2: form_apply4_data_2
				},
				url: '<?php echo site_url('ApplicationForms/form_apply4_submitData2') ?>',
				success: function(result){
		    		console.log(result);
		    	},
			});

		});

		$('.textChange').keyup(function(){
			var studentName = $('#studentName').val();

			var form_apply4_data = new Object();
			form_apply4_data.studentName = studentName;

			$.ajax({
				type: 'POST',
				data: {
					form_apply4_data: form_apply4_data
				},
				url: '<?php echo site_url('ApplicationForms/form_apply4_submitData') ?>',
				success: function(result){
		    		console.log(result);
		    	},
			});
		});
	});
</script>


<script src='<?php echo base_url(); ?>ofpdfs/f4/js/pdfmake.min.js'></script>
	<script src='<?php echo base_url(); ?>ofpdfs/f4/js/vfs_fonts.js'></script>

<script src='<?php echo base_url(); ?>ofpdfs/f4/js/form.js'></script>


