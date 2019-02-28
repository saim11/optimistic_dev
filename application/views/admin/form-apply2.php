
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/bootstrap.min.css" rel="stylesheet">

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/style-student-profile-form.css" rel="stylesheet">

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/styles_admin_student_forms.css?2" rel="stylesheet">

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/jquery.fancybox.css?1" rel="stylesheet">

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/media_queries.css" rel="stylesheet">        



<!-- Animate.css -->

<link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/animate.css">   



<!-- 4step form.css -->

<link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/steps/css/normalize.css">

<link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/steps/css/jquery.steps.css">



<!-- WEB FONT -->

<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,500' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Raleway:500,600,800,400' rel='stylesheet' type='text/css'>    

<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<style>
.form-heading{
	color: white;
	text-shadow: 1px 1px 10px black;
	font-size: 20px;
	text-indent: 3em;
	
}
.panel-success{
	background-color:#1c995d;
	max-height:60px;
}
.Approve_Button{
	font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 500;
    /* background-color: #2bb673; */
    color: #fff !important;
    border: none;
    padding: 1% 28% ;
    margin-top: 20px;
	background-image: linear-gradient(to right, #2bb673, yellow);
    transition: all 0.3s ease 0s; 
}
.Cancel_Button{
	font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 500;
    background-color: yellow;
    color: #fff !important;
    border: none;
    padding: 1% 2% ;
    margin-top: 20px;
    transition: all 0.3s ease 0s; 
}
.panel-done{
	background-image: linear-gradient(to top, white, violet);
	color:#2bb673;
	border: none;
	padding: 1% 2% ;
}


</style>



<div class="panel panel-success row Add_details">
			<h3 class="form-heading">Enrollment Booklet</h3>
</div>
<div id="Approved">
</div>
<!-- <section class="Section_Devs Head_Titles">
	<div class="container">
		<h1>Enrollment Booklet</h1>
	</div>
</section> -->
<!-- Head_Titles Closed -->
	<section class="Welcome_Classic Optim-Form0s" >
		<div id="divtoconvert" class="container" style="background-color: white; ">
			<div class="row Add_details">
			<div class="col-md-2 col-sm-2"></div>
				<div class="col-md-9 col-sm-9 Contact_Add Appy-formy">
					<form id="contactForm" method="post" action="" class="validate">

						<div class="col-sm-12">
							<div class="form-group">
								<label>Student Name</label>
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
							<thead>
								<tr>
									<th>Tick</th>
									<th>Code</th>
									<th>Title</th>
								</tr>
							</thead>
							<tbody>

								<?php 
									$qualificationSelected = explode(',', $form_apply2['enrol']['qualification']);
									$qualifications = $form_apply2['qualifications'];
									$qulInput=1;
									$qulLable=1;
									foreach ($qualifications as $qualification) {
										$checked="";
										if (in_array($qualification['code'], $qualificationSelected)) {
											$checked="checked";
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
									$attachments = $form_apply2['attachments'];

									$attInput=6;
									$attLable=6;
									foreach ($attachments as $attachment) {
										$checked="";
										if (in_array($attachment, $attachmentsSelected)) {
											$checked="checked";
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
				<?php $date = $form_apply2['enrol']['submission_date']; ?>
					<a class="btn btn-default Submit_Button" id="download"  type="button" onclick="form_attestation(<?php echo $form_apply2['enrol']['Id']; ?>,<?php echo $form_apply2['enrol']['user_id'];?>,this.id,'<?php echo  $date ?>'); ello();">SUBMIT</a>
					<a class="btn btn-default Approve_Button" href="#Approved" onclick="form_attestation(<?php echo $form_apply2['enrol']['Id']; ?>,<?php echo $form_apply2['enrol']['user_id']; ?>,this.id,'<?php echo  $date ?>');" id="approve" type="button">APPROVE</a>
					<a class="btn btn-default Cancel_Button" id="cancel" type="button">CANCEL</a>
				</div>
			</div>
		</div>
	</section>
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

			$.ajax({
				type: 'POST',
				data: {attachmentSelected: attachmentSelected, user_id: <?php echo $form_apply2['enrol']['user_id']?>,form_id: <?php echo $form_apply2['enrol']['Id']?>},
				url: '<?php echo site_url('application_forms_update/form_apply2_attachments') ?>',
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

		$.ajax({
			type: 'POST',
			data: {qualificationSelected: qualificationSelected, user_id: <?php echo $form_apply2['enrol']['user_id']?>,form_id: <?php echo $form_apply2['enrol']['Id']?>},
			url: '<?php echo site_url('application_forms_update/form_apply2_qualification'); ?>',
			success: function(result){
	    		$('#returnResult').html(result);
	    	},
		})
	});

	// checkbox end

 
  
	  $('#studentName').keyup(function() {
	 
	    // get the value from the username field                              
	    var studentName = $('#studentName').val();
	    // Ajax request sent to the CodeIgniter controller "ajax" method "studentname_changes"
	    // post the studentname field's value
	    $.ajax({
	    	type: 'POST',
			data: {
				studentName: studentName, 
				user_id: <?php echo $form_apply2['enrol']['user_id']?>,
				form_id: <?php echo $form_apply2['enrol']['Id']?>
			},
	    	url: '<?php echo site_url('application_forms_update/form_apply2_studentName') ?>',
	    	success: function(result){
	    		console.log(result);
			},
			error: function (xhr, ajaxOptions, thrownError) {
				// console.log(xhr.status);
				// console.log(thrownError);
			}
	    });

	  });
	  $('#approve').click(function() {
	 
	 $.ajax({
		 type: 'POST',
		 data: {form_id: <?php echo $form_apply2['enrol']['Id']?>},
		 url: "<?php echo base_url().'application_forms_update/form_approval' ?>",
		 success: function(result){
			//  window.location.reload();
			 $("#Approved").html('<div class="container alert panel-done" ><div class="panel-body">Student Form has been Approved..!</div></div>');
			 window.location.href = '<?php echo base_url()."manage/studentForms/control/forms/".$form_apply2['enrol']['user_id']?>';
		 },
		 error: function (xhr, ajaxOptions, thrownError) {
			 // console.log(xhr.status);
			 // console.log(thrownError);
		 }
	 });

   });  
	 
	});

	</script>

	<script src='<?php echo base_url(); ?>ofpdfs/f2/js/pdfmake.min.js'></script>
	<script src='<?php echo base_url(); ?>ofpdfs/f2/js/vfs_fonts.js'></script>
	<script src='<?php echo base_url(); ?>ofpdfs/f2/js/form.js'></script>
	<script src='<?php echo base_url(); ?>ofpdfs/f2/js/form_attested.js'></script>

