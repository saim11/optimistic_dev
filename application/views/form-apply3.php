<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!-- Bootstrap -->

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/bootstrap.min.css" rel="stylesheet">

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/style-student-profile-form.css" rel="stylesheet">

<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/styles.css?2" rel="stylesheet">

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

<script>
	
	function submitForm(){
		console.log("submitted");
		$.ajax({
	    	type: 'POST',
	    	data: {form_submitted: "Submitted"},
	    	url: '<?php echo site_url('ApplicationForms/form_apply3_submitted')?>',
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


<section class="Section_Devs Head_Titles">
	<div class="container">
		<h1>SKILLS FIRST PROGRAM ENROLMENT AGREEMENT FORM</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">SKILLS FIRST PROGRAM ENROLMENT AGREEMENT FORM</li>
		</ol>
	</div>
</section>
<!-- Head_Titles Closed -->

<section class="Section_Devs Welcome_Classic Optim-Form0s">
		<div id="divtoconvert" class="container" style="background-color: white; ">
			<div class="row Add_details">
				<div class="col-md-12">
					<h2>STUDENT INFORMATION SHEET</h2>
					<p>Please read this Information Sheet before completing the Application Form. An Application Form is required to be completed
						as part of the Enrolment Process into any qualification. All sections MUST be answered. Your application cannot proceed
						without its completion.</p>

					<p>A Language, Literacy and Numeracy Test & Pre-Training Review will be conducted as part of the Application Process.</p>

					<p>Optimistic Futures Pty Ltd encourages Recognition of Prior Learning, and recognizes qualifications and statement of
						Attainment issued by other RTOs for credit transfer purposes.
					</p>
				</div>

				<div class="col-md-12 col-sm-12 Contact_Add Appy-formy">
					<form id="contactForm" method="post" action="" class="validate">

						<h3>Detail of Fees (Subject to change without notification)</h3>

						<p>Note:</p>
						<p>
							the above fees include student amenities and services
							<br> all fees are paid upon enrolments
							<br> the above fees are inclusive of GST
							<br> The student tuition fees are indicative only and subject to change given individual circumstances at enrolment</p>

						<p>If you are going through a financial hardship and you wish to waive the tuition fees please fill in the hardship form
							for consideration.</p>

						<p>Note: For detailed information regarding fees please refer to our statement of fees.</p>

						<p>This form is to be completed by an Authorised Delegate at Optimistic Futures to establish whether students who enquire
							about completing a qualification - meet the eligibility requirements for government subsidised training under the
							Skills First Program.</p>

						<p>As part of the enrolment process all Optimistic Futures - Authorised Delegates will ensure that applicants are aware
							of the consequences arising from a false, misleading or an incomplete declaration, including the possible withdrawal
							of any government subsidised training offer and/or the cancellation of enrolment.</p>

						<h2>1. Qualification Information</h2>
						<p>General information and individual brochures on Optimistic Futures qualifications are available on our website http://www.optimisticfutures.com.au
							or from reception at any of the Optimistic Futures Office.</p>
						<p>After you have selected a qualification for application, attempted LLN test and the Pre-Training Review: Complete all
							Parts of this application form:</p>

						<p>
							A - Personal and statistical details;
							<br> B - Self declaration
							<br> C – Optimistic Futures - Authorised Delegate Declaration
						</p>

						<p>
							<strong>Note: The ‘Optimistic Futures Student Information Handbook’ should be read and understood prior to completing the
								Application Form</strong>
						</p>

						<h2>2. Supporting Documentation</h2>
						<p>Supporting documentation will be required in determining qualification entry requirements, funding eligibility, fees
							and fee concessions and to support a Credit transfer/RPL request.</p>

						<p>Original documents will be returned but a copy of all documentation will be retained.</p>

						<p>Once completed, this form and the associated declarations are to be placed in the students file.</p>

						<h2>3. Funding Eligibility - Skills First Program</h2>
						<p>The Skills First Program provides subsidised training for people who do not hold a post-school qualification or who
							want to gain a higher-level qualification than they already hold.</p>
						<p>Eligibility for government funded subsidised training will be assessed according to specific eligibility requirements.</p>

						<h2>4. Fee Types</h2>
						<p>Fees for both Government Funded qualifications and Fee for Service qualifications will be assessed and levied on the
							basis of information supplied by the Applicant.</p>

						<h2>5. Victorian Student Number (VSN)</h2>
						<p>The VSN is a student identification number that is assigned by the Department of Education and Early Childhood Development
							to all students in government and non-government schools, and students in Vocational Education and Training institutions.
							The number, which is unique to each student, is a key identifier on a student’s school records, and will remain with
							the student throughout his or her education, until reaching the age of 25. The VSN is nine digits long, randomly assigned,
							and tied to identifying information about the student (name, gender and date of birth). The Education and Training
							Reform Act 2006 requires Optimistic Futures to collect and disclose your personal information for a number of purposes
							including the allocation to you of a Victorian Student Number and updating your personal information on the Victorian
							Student Register.</p>

						<h2>6.A Unique Student Identifier (USI)</h2>
						<p>Is a reference number made up of numbers and letters that gives students access to their USI account. A USI will allow
							an individual's USI account to be linked to the National Vocational Education and Training (VET) Data Collection allowing
							an individual to see all of their training results from all providers including all completed training units and qualifications.
							The Student Identifiers Act 2014, Standards for NVR Registered Training Organisations (RTO) 2014 and Student Identifiers
							Regulation 2014 require that the training Organisation: Collect a USI from each student, verify a USI supplied by
							a student and ensure a student has a valid USI before conferring a qualification or statement of attainment on that
							student. As of 1 January 2015, students will need to give their USI to each new training Organisation they enroll
							with. This will normally happen at enrolment</p>

						<h2>7. NCVER Survey:</h2>
						<p>National Centre of Vocational Education Research may in the duration of your studies contact you to participate in
							a survey which may include the following:</p>

						<p>An invitation to participate in a Department endorsed project:</p>

						<p>An invitation to participate in the Department’s annual student outcome survey:</p>

						<p>Contacted by the Department (or persons authorised by the Department) for audit, review or investigation purposes.</p>


						<h3>COURSE OF ENROLMENT</h3>

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
									$enrolCoursesChecked = explode(",", $form_apply3['enrol']['enrollment_course']);
									$courses = $form_apply3['courses'];

									$enrolInputNum=1;
									$enrolLabelNum=1;
									foreach ($courses as $cour) {
										$checked="";
										if(in_array($cour['code'], $enrolCoursesChecked)){
										  $checked = "checked";
										}
									?>
										<tr>
											<td>
												<div class="checkbox">
													<input id="box<?php echo $enrolInputNum++ ?>" class="changeOption enrolment_course" name="enrolment_course[]" value="<?php echo $cour['code'] ?>" <?php echo $checked ?> type="checkbox" />
													<label for="box<?php echo $enrolLabelNum++ ?>"></label>
												</div>
											</td>
											<td><?php echo $cour['code'] ?></td>
											<td><?php echo $cour['title'] ?></td>
										</tr>
									<?php
										}
									?>
							</tbody>
						</table>

						<div class="form-group">
							<label class="col-sm-3">Mode of Study:</label>
							<div class="col-sm-9">

								<?php 
									$modeOfStudyChecked = explode(",", $form_apply3['enrol']['mode_of_study']);
									$modeOfStudy = $form_apply3['modeOfStudy'];
									// print_r($modeOfStudyChecked);
									$modeInputNum=6;
									$modeLabelNum=6;
									foreach ($modeOfStudy as $mode) {
										$checked="";
										if(in_array($mode, $modeOfStudyChecked)){
											$checked="checked";
										}
									?>

									<div class="Office-checks">
										<div class="checkbox">
											<input id="box<?php echo $modeInputNum++ ?>" class="changeOption mode_of_study" name="mode_of_study[]" value="<?php echo $mode; ?>" type="checkbox" <?php echo $checked ?>/>
											<label for="box<?php echo $modeLabelNum++ ?>"><?php echo $mode; ?></label>
										</div>
									</div>

								<?php
									}
								?>
							</div>
						</div>

						<br class="clearfix">
						<h3>PERSONAL DETAILS (Legal name as per photo ID, which will need to be sighted to verify legal name)</h3>

						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-2">Title:</label>
								<div class="col-sm-10">
									<?php 
										$titleChecked = explode(",", $form_apply3['enrol']['title']);
										$titles = $form_apply3['title'];

										$titleInputNum = 11;
										$titleLabelNum = 11;

										foreach ($titles as $title) {
											$checked="";

											if(in_array($title, $titleChecked)){
												$checked="checked";
											}
										?>
										<div class="Office-checks">
											<div class="checkbox">
												<input id="box<?php echo $titleInputNum++ ?>" class="changeOption title" name="title[]" value="<?php echo $title; ?>" type="checkbox" <?php echo $checked ?>/>
												<label for="box<?php echo $titleLabelNum++ ?>"><?php echo $title; ?></label>
											</div>
										</div>
									<?php
										}
									?>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label class="col-sm-2">Gender:</label>
								<div class="col-sm-10">
									<?php
										$genderChecked = explode(",", $form_apply3['enrol']['gender']);
										$genders = $form_apply3['gender'];

										$genderInputNum = 15;
										$genderLabelNum = 15;
										foreach ($genders as $gender) {
											$checked="";
											if(in_array($gender, $genderChecked)){
												$checked="checked";
											}
											?>
											<div class="Office-checks">
												<div class="checkbox">
													<input id="box<?php echo $genderInputNum++; ?>" class="changeOption gender" type="checkbox" name="gender[]" value="<?php echo $gender; ?>" <?php echo $checked; ?> />
													<label for="box<?php echo $genderLabelNum++; ?>"><?php echo $gender; ?></label>
												</div>
											</div>

									<?php		
										}
									?>
								</div>
							</div>
						</div>


						<div class="col-sm-6">
							<div class="form-group">
								<label>First Name:</label>
								<input type="text" id="one" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['first_name'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Middle Name:</label>
								<input type="text" id="two" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['middle_name'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Last Name:</label>
								<input type="text" id="three" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['last_name'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Date of Birth:</label>
								<input placeholde="1999-11-24" type="text" id="four" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['date_of_birth'] ?>">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label>Residential Address:</label>
								<input type="text" id="five" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['residential_address'] ?>">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Suburb/Town:</label>
								<input type="text" id="six" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['subrub_town'] ?>">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>State:</label>
								<input type="text" id="seven" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['state'] ?>">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Postcode:</label>
								<input type="text" id="eight" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['post_code'] ?>">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label>Postal Address:</label>
								<input type="text" id="nine" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['postal_address'] ?>">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Home phone:</label>
								<input type="text" id="ten" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['home_phone'] ?>">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Mobile:</label>
								<input type="text" id="eleven" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['mobile'] ?>">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Fax:</label>
								<input type="text" id="twelve" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['fax'] ?>">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label>Email:</label>
								<input type="text" id="thirteen" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['email'] ?>">
							</div>
						</div>

						<br class="clearfix">
						<h3>EMERGENCY CONTACT DETAILS</h3>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Name:</label>
								<input type="text" id="forteen" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['emerg_name'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Relationship:</label>
								<input type="text" id="fifteen" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['emerg_relationship'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Home Number:</label>
								<input type="text" id="sixteen" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['emerg_home_number'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Mobile:</label>
								<input type="text" id="seventeen" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['emerg_mobile'] ?>">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<div class="col-sm-9">
									<label>In the event of an emergency, do you give the RTO permission to organise emergency transport and treatment and agree
										to pay all costs related to the emergency? (please tick one)</label>
								</div>
								<div class="col-sm-3">
									<?php 
										$RTOpermissionSelected = explode(",", $form_apply3['enrol']['emerg_rto_permission']);
										$RTOpermissions = array("Yes", "No");

										$RTOInputNum = 17;
										$RTOLabelNum = 17;
										foreach ($RTOpermissions as $RTOpermission) {
											$checked="";
											if(in_array($RTOpermission, $RTOpermissionSelected)){
												$checked="checked";
											}
											?>
											<div class="checkbox">
												<input id="box<?php echo $RTOInputNum++?>" type="checkbox" class="RTOpermission changeOption" name="RTOpermission[]" value="<?php echo $RTOpermission; ?>" <?php echo $checked; ?>/>
												<label for="box<?php echo $RTOLabelNum++?>"><?php echo $RTOpermission; ?></label>
											</div>

									<?php		
										}
									?>
								</div>
							</div>
						</div>

						<br class="clearfix">
						<h3>CONCESSION DETAILS</h3>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Medicare No:</label>
								<input type="text" id="eighteen" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['con_medicare_no'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Expiry date:</label>
								<input type="text" id="ninteen" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['con_mdicare_expiry_date'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Concession card No:</label>
								<input type="text" id="twenty" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['con_card_no'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Expiry date:</label>
								<input type="text" id="twentyOne" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['con_card_expiry_date'] ?>">
							</div>
						</div>

						<br class="clearfix">
						<h3>UNIQUE STUDENT IDENTIFIER (USI)</h3>

						<div class="col-sm-12">
							<div class="form-group">
								<div class="col-sm-7">
									<label>I give permission for Optimistic Futures Pty Ltd to access my Unique Student Identifier (USI) for the purpose of
										recording my results.</label>
								</div>
								<div class="col-sm-5">
									<input type="text" id="twentyTwo" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['usi1'] ?>">
									<br />
								</div>
							</div>
						</div>


						<div class="col-sm-12">
							<div class="form-group">
								<div class="col-sm-7">
									<label>If I do not have a USI in place, I am willing for Optimistic Futures Pty Ltd to set up my USI on my behalf. *Please
										complete the USI form attached</label>
								</div>
								<div class="col-sm-5">
									<input type="text" id="twentyThree" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['usi2'] ?>">
									<br />
								</div>
							</div>
						</div>

						<br class="clearfix">
						<h3>VICTORIAN STUDENT NUMBER (VSN)</h3>

						<div class="col-sm-12">
							<div class="form-group">
								<div class="col-sm-7">
									<p>If you are under 25 years of age – you may have a VSN from pervious enrolment</p>
								</div>
								<div class="col-sm-5">
									<label>VSN:</label>
									<input type="text" id="twentyFour" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['vsn'] ?>">
									<br />
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<div class="col-sm-7">
									<p>If you do not know your VSN number, then please state your</p>
								</div>
								<div class="col-sm-5">
									<label>your Previous School:</label>
									<input type="text" id="twentyFive" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['vsn_previous_school'] ?>">
									<br />
								</div>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<div class="col-sm-10">
									<p>If new to the education sector – tick the ‘new’ box This means you have never attended a Victorian School, TAFE
										or other Training Provider and are over the age of 25 at the time of enrolment.</p>
								</div>
								<div class="col-sm-2">
									<?php 
										$newEducatorSelected = $form_apply3['enrol']['new_Educator'];
										$checked="";
										if($newEducatorSelected == 'New'){
											$checked="checked";
										}
									?>

									<div class="checkbox">
										<input id="box19" class="changeOption newEducator" type="checkbox" name="newEducator" value="New" <?php echo $checked; ?>/>
										<label for="box19">New</label>
									</div>

								</div>
							</div>
						</div>

						<br class="clearfix">
						<h3>EMPLOYMENT</h3>
						<p>Of the following categories, which BEST describes your current employment status?</p>
							<?php
								$employmentStatusSelected = explode(',', $form_apply3['enrol']['employment_status']);
								$employmentStatus = $form_apply3['employmentStatus'];
								$num=0;
								$empInput=20;
								$empLable=20;
								foreach ($employmentStatus as $status) { 
									if ($num == 0 || $num == 4){?>
									<div class="col-sm-6">
									<?php } ?>
									<!-- check selected value in array -->
									<?php
										$checked="";
										if(in_array($status, $employmentStatusSelected)){
											$checked="checked";
										}
									?>
								 	<div class="checkbox">
										<input id="box<?php echo $empInput++; ?>" type="checkbox" class="changeOption employmentStatus" name="employmentStatus[]" value="<?php echo $status; ?>" <?php echo $checked; ?>/>
										<label for="box<?php echo $empLable++; ?>"><?php echo $status; ?></label>
									</div>

									<?php if ($num == 3 || $num == 7){?> </div> <?php } ?>
								 	<?php
								 	$num++;
								 } 
							?>
							
						<br class="clearfix">
						<h3>EMPLOYMENT DETAILS (if applicable)</h3>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Organisation:</label>
								<input type="text" id="twentySix" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['emp_organization'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Position:</label>
								<input type="text" id="twentySeven" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['emp_position'] ?>">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label>Address:</label>
								<input type="text" id="twentyEight" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['emp_address'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>Telephone:</label>
								<input type="text" id="twentyNine" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['emp_telephone'] ?>">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>ABN:</label>
								<input type="text" id="thirty" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['emp_abn'] ?>">
							</div>
						</div>

						<br class="clearfix">
						<h3>SCHOOLING</h3>
						<p>What is your highest COMPLETED school Level:</p>

						<?php
							$highestCompletedSchoolSelected = explode(',', $form_apply3['enrol']['highest_completed_school']);
							$highestCompletedSchool = $form_apply3['highestCompletedSchool'];
							// print_r($highestCompletedSchool);
							$num=0;
							$comInput=28;
							$comLable=28;
							foreach ($highestCompletedSchool as $completedSchool) {
								if ($num == 0 || $num == 2 || $num == 4){?>
									<div class="col-sm-4">
									<?php } ?>
									<!-- check selected value in array -->
									<?php 
										$checked="";
										if(in_array($completedSchool, $highestCompletedSchoolSelected)){
											$checked="checked";
										}
									?>

									<div class="checkbox">
										<input id="box<?php echo $comInput++ ?>" type="checkbox" class="changeOption highestCompletedSchool" name="highestCompletedSchool[]" value="<?php echo $completedSchool; ?>" <?php echo $checked; ?>/>
										<label for="box<?php echo $comLable++ ?>"><?php echo $completedSchool; ?></label>
									</div>

									<?php if ($num == 1 || $num == 3 || $num ==  5){?> </div> <?php } ?>
								 	<?php
								 	$num++;
							}
						?>

						<div class="col-sm-12">
							<div class="form-group">
								<label>In which YEAR did you complete that Schooling Level:(e.g. 2008, 2005 etc)</label>
								<input type="text" id="thirtyOne" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['year_school_completed'] ?>">
							</div>
						</div>

						<div class="col-sm-4">
							<p>Are you still attending secondary school?</p>
						</div>

						<div class="col-sm-8">
							<?php 
								$attendSecondarySchoolSelected = explode(',', $form_apply3['enrol']['attend_secondary_school']);
								$attendSecondarySchool = $form_apply3['attendSecondarySchool'];
								$attInput=34;
								$attLable=34;
								foreach ($attendSecondarySchool as $attendSchool) {
									$checked=""; 
									if(in_array($attendSchool, $attendSecondarySchoolSelected)){
										$checked="checked";
									}
									?>
									<div class="checkbox">
										<input id="box<?php echo $attInput++; ?>" type="checkbox" class="changeOption attendSecondarySchool" name="attendSecondarySchool[]" value="<?php echo $attendSchool; ?>" <?php echo $checked; ?>/>
										<label for="box<?php echo $attLable++; ?>"><?php echo $attendSchool; ?></label>
									</div>
							<?php
								}
							?>
						</div>

						<br class="clearfix">
						<h3>PREVIOUS QUALIFICATIONS ACHIEVED</h3>

						<div class="col-sm-8">
							<p>Have you SUCCESSFULLY completed any of the following qualifications?</p>
						</div>

						<div class="col-sm-4">
							<?php 
								$prevQualificationCompletedSelected = explode(',', $form_apply3['enrol']['prev_qualification_completed']);
								$prevQualificationCompleted = array('Yes', 'No');
								$preInput=36;
								$preLable=36;
								foreach ($prevQualificationCompleted as $prevCompleted) {
									$checked="";
									if(in_array($prevCompleted, $prevQualificationCompletedSelected)){
										$checked="checked";
									} 
									?>
									<div class="Office-checks">
										<div class="checkbox">
											<input id="box<?php echo $preInput++; ?>" type="checkbox" class="changeOption prevQualificationCompleted" name="prevQualificationCompleted[]" value="<?php echo $prevCompleted; ?>" <?php echo $checked; ?> />
											<label for="box<?php echo $preLable++; ?>"><?php echo $prevCompleted; ?></label>
										</div>
									</div>

							<?php

								}
							?>
						</div>

						<br class="clearfix">

						<?php 
							$completedQulificationsSelected = explode(',', $form_apply3['enrol']['completed_qualifications']);
							$completedQulifications = $form_apply3['completedQulifications'];
							$comQualInput=38;
							$comQualLabel=38;
							$num=0;

							foreach ($completedQulifications as $comQual) {
								// divide into column
								if($num == 0){ ?>
									<div class="col-sm-3">
								<?php }?>

								<?php if($num == 3){ ?>
									<div class="col-sm-5">
								<?php }?>

								<?php if($num == 6){ ?>
									<div class="col-sm-4">
								<?php }?>


								<?php 
								$checked="";
								if(in_array($comQual, $completedQulificationsSelected)){
									$checked="checked";
								} 
								?>
								<div class="checkbox">
									<input id="box<?php echo $comQualInput++; ?>" class="changeOption completedQulifications" name="completedQulifications[]" type="checkbox" value="<?php echo $comQual; ?>" <?php echo $checked; ?>/>
									<label for="box<?php echo $comQualLabel++; ?>"><?php echo $comQual; ?></label>
								</div>

								<?php if ($num == 2 || $num == 5 || $num == 8){?> </div> <?php }
									$num++;
								?>
							<?php	
							}
							?>

						<div class="col-sm-12">
							<div class="form-group">
								<label>Details of another Certificate:</label>
								<input type="text" id="thirtyTwo" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['another_certificate']?>">
							</div>
						</div>

						<div class="col-sm-7">
							<p>Please tick where the qualification was completed:</p>
						</div>

						<div class="col-sm-5">

							<?php 
								$countryOfQualificationCompletedSelected = explode(',', $form_apply3['enrol']['country_of_qualification_completed']);
								$countryOfQualificationCompleted = $form_apply3['countryOfQualificationCompleted'];
								$counQualInput=47;
								$counQualLabel=47;

								foreach ($countryOfQualificationCompleted as $country) {
									$checked="";
									if(in_array($country, $countryOfQualificationCompletedSelected)){
										$checked="checked";
									}
									?>
									<div class="Office-checks">
										<div class="checkbox">
											<input id="box<?php echo $counQualInput++ ?>"class="changeOption countryOfQualificationCompleted" name="countryOfQualificationCompleted[]" type="checkbox" value="<?php echo $country; ?>" <?php echo $checked; ?>/>
											<label for="box<?php echo $counQualLabel++ ?>"><?php echo $country; ?></label>
										</div>
									</div>
							<?php
								}
							?>
						</div>

						<br class="clearfix">
						<h3>LANGUAGE & CULTURAL DIVERSITY</h3>

						<div class="col-sm-6">
							<?php
								$countryOfBirthSelected = explode(',', $form_apply3['enrol']['country_of_birth']);
								$checked="";
								if($countryOfBirthSelected[0] == 'Australian'){
									$checked="checked";
								}
							?>
							Country of Birth:
							<div class="checkbox">
								<input id="box50" type="checkbox" name="country_australia" class="changeOption country_australia" value="Australian" <?php echo $checked; ?>/>
								<label for="box50">Australian</label>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="form-group">
								<label>other:</label>
								<input type="text" id="thirtyThree" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['country_of_birth'] ?>">
							</div>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label>City of birth:</label>
								<input type="text" id="thirtyFour" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['city_of_birth']?>">
							</div>
						</div>


						<div class="col-sm-4">
							<p>Do you speak a Language other than English at home:</p>
							<?php
								$speakLanguageAtHomeSelected = explode(',  ', $form_apply3['enrol']['speak_language_at_home']);
								$speakLanguageAtHome = $form_apply3['speakLanguageAtHome'];
								$langInput=51;
								$langLabel=51;
								foreach ($speakLanguageAtHome as $lang) {
									$checked="";
									if(in_array($lang, $speakLanguageAtHomeSelected)){
										$checked="checked";
									}
									?>
									<div class="checkbox">
										<input id="box<?php echo $langInput++?>" class="changeOption speakLanguageAtHome" name="speakLanguageAtHome[]" type="checkbox" value="<?php echo $lang; ?>" <?php echo $checked; ?> />
										<label for="box<?php echo $langLabel++?>"><?php echo $lang; ?></label>
									</div>
							<?php
								}
							?>
							<div class="checkbox">
								<input type="text" id="thirtyFive" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['speak_language_at_home'] ?>">
							</div>
						</div>

						<div class="col-sm-4">
							<p>How well do you speak english:</p>

							<?php 
								$levelOfSpeakSelected = explode(',', $form_apply3['enrol']['level_of_speak']);
								$levelOfSpeak = $form_apply3['levelOfSpeak'];
								$levInput = 53;
								$levLabel = 53;
								foreach ($levelOfSpeak as $level) {
									$checked="";
									if(in_array($level, $levelOfSpeakSelected)){
										$checked="checked";
									}
									?>
									<div class="checkbox">
										<input id="box<?php echo $levInput++ ?>" class="changeOption levelOfSpeak" type="checkbox" name="levelOfSpeak[]" value="<?php echo $level; ?>" <?php echo $checked; ?>/>
										<label for="box<?php echo $levLabel++ ?>"><?php echo $level; ?></label>
									</div>

							<?php
								}
							?>
						</div>

						<div class="col-sm-4">
							<p>Are you of Aboriganl or Torres Strait Islander origin?</p>

							<?php 
								$originSelected = explode(', ', $form_apply3['enrol']['origin']);
								$origins = $form_apply3['origin'];
								$originInput = 57;
								$originLabel = 57;
								foreach ($origins as $origin) {
									$checked="";
									if(in_array($origin, $originSelected)){
										$checked="checked";
									}
									?>
									<div class="checkbox">
										<input id="box<?php echo $originInput++ ?>" class="changeOption origin" type="checkbox" name="origin[]" value="<?php echo $origin; ?>" <?php echo $checked; ?>/>
										<label for="box<?php echo $originLabel++ ?>"><?php echo $origin; ?></label>
									</div>

							<?php
								}
							?>
						</div>

						<br class="clearfix">
						<h3>DISABILITY</h3>

						<div class="col-sm-8">
							<p>Do you consider yourself to have a disability, impairment or long-term condition?</p>
						</div>

						<div class="col-sm-4">

							<?php 
								$haveDisabilitySelected = $form_apply3['enrol']['have_disability'];
								$haveDisability = array('Yes', 'No');
								$haveDisInput=61;
								$haveDisLabel=61;
								foreach ($haveDisability as $haveDis) {
									$checked="";
									if($haveDis == $haveDisabilitySelected){
										$checked="checked";
									}

								?>
								<div class="Office-checks">
									<div class="checkbox">
										<input id="box<?php echo $haveDisInput++; ?>" class="changeOption haveDisability" value="<?php echo $haveDis; ?>"  type="checkbox" <?php echo $checked; ?> />
										<label for="box<?php echo $haveDisLabel++; ?>"><?php echo $haveDis;  ?></label>
									</div>
								</div>

							<?php
								}
							?>
						</div>

						<div class="col-sm-12">
							<p>If yes, then please indicate the areas of a disability, impairment or long-term condition:</p>
							<?php
								$areasOfDiabilitySelected = explode(',', $form_apply3['enrol']['areas_of_disability']);
								$areasOfDiability = $form_apply3['areasOfDiability'];
								$num=0;
								$disInput=63;
								$disLabel=63;
								foreach ($areasOfDiability as $disability) {
									$checked="";
									if($num==0 || $num==3 || $num==6) {?>
										<div class="col-sm-4">
									<?php } 

									if(in_array($disability, $areasOfDiabilitySelected)){
										$checked="checked";
									}
									?>
									<div class="checkbox">
										<input id="box<?php echo $disInput++ ?>" class="changeOption areasOfDiability" type="checkbox" name="areasOfDiability[]" value="<?php echo $disability; ?>" <?php echo $checked; ?> />
										<label for="box<?php echo $disLabel++ ?>"><?php echo $disability; ?></label>
									</div>


									<?php if ($num == 2 || $num == 5 || $num==7){?> </div> <?php } ?>
								 	<?php
								 	$num++;
								}
							 ?>
						</div>

						<div class="col-sm-12">
							<div class="form-group">
								<label>Other:</label>
								<input type="text" id="thirtySix" class="form-control Form_Setup textChange areasOfDiability required" value="<?php echo $form_apply3['enrol']['other_areas_of_disability'] ?>">
							</div>
						</div>

						<br class="clearfix">
						<h3>STUDY REASON</h3>
						<p>Of the following categories, which BEST describes your main Reason for undertaking this course/traineeship/ apprenticeship?
							Tick only ONE</p>


						<div class="col-sm-12">
							<?php
								$studyReasonSelected = explode(',', $form_apply3['enrol']['study_reason']);
								$studyReason = $form_apply3['studyReason'];
								$num=0;
								$studyInput=71;
								$studyLable=71;
								foreach ($studyReason as $reason) { 
									if ($num == 0){?>
									<div class="col-sm-4">
									<?php } ?>

									<?php if ($num == 4){?>
									<div class="col-sm-4">
									<?php } ?>

									<?php if ($num == 7){?>
									<div class="col-sm-4">
									<?php } ?>


									<!-- check selected value in array -->
									<?php
										$checked="";
										if(in_array($reason, $studyReasonSelected)){
											$checked="checked";
										}
									?>
								 	<div class="checkbox">
										<input id="box<?php echo $studyInput++; ?>" type="checkbox" class="changeOption studyReason" name="studyReason[]" value="<?php echo $reason; ?>" <?php echo $checked; ?>/>
										<label for="box<?php echo $studyLable++; ?>"><?php echo $reason; ?></label>
									</div>

									<?php if ($num == 3 || $num == 6 || $num == 9){?> </div> <?php } ?>
								 	<?php
								 	$num++;
								 } 
							?>

						</div>


						<br class="clearfix">
						<h3>IDENTIFICATION</h3>

						<div class="col-sm-12">

							<?php 
								$identificationsSelected = explode(',', $form_apply3['enrol']['identification']);
								$identifications = $form_apply3['identifications'];
								$num=0;
								$idenInput=82;
								$idenLable=82;
								foreach ($identifications as $identification) { 
									if ($num == 0 || $num == 4){?>
									<div class="col-sm-6">
									<?php } ?>
									<!-- check selected value in array -->
									<?php
										$checked="";
										if(in_array($identification, $identificationsSelected)){
											$checked="checked";
										}
									?>
								 	<div class="checkbox">
										<input id="box<?php echo $idenInput++; ?>" type="checkbox" class="changeOption identifications" name="identifications[]" value="<?php echo $identification; ?>" <?php echo $checked; ?>/>
										<label for="box<?php echo $idenLable++; ?>"><?php echo $identification; ?></label>
									</div>

									<?php if ($num == 3 || $num == 7){?> </div> <?php } ?>
								 	<?php
								 	$num++;
								 } 
							?>
						</div>


						<br class="clearfix">
						<h3>TUITION FEES</h3>
						<strong>Fee Concession or Fee Waivers</strong>

						<div class="col-sm-6">
							<p>Do you have a current concession cards? (Please Tick One)</p>
						</div>
						<div class="col-sm-6">
							<?php 
								$haveFeesConessionSelected = explode(',', $form_apply3['enrol']['have_fees_concession']);
								$haveFeesConession = array('Yes', 'No');
								$haveInput=90;
								$haveLabel=90;
								foreach ($haveFeesConession as $feeCon) {
									$checked="";
									if(in_array($feeCon, $haveFeesConessionSelected)){
										$checked="checked";
									} 
									?>
									<div class="Office-checks">
										<div class="checkbox">
											<input id="box<?php echo $haveInput++ ?>" type="checkbox" class="changeOption haveFeesConession" name=haveFeesConession[] value="<?php echo $feeCon; ?>" <?php echo $checked; ?>/>
											<label for="box<?php echo $haveLabel++ ?>"><?php echo $feeCon; ?></label>
										</div>
									</div>
							<?php
								}

							?>
							<!-- <div class="Office-checks">
								<div class="checkbox">
									<input id="box90" type="checkbox" class="changeOption have_fees_conession" name=have_fees_conession[] value="Yes" <?php echo $checked; ?>/>
									<label for="box90">Yes</label>
								</div>
							</div>
							<div class="Office-checks">
								<div class="checkbox">
									<input id="box91" type="checkbox" class="changeOption have_fees_conession" name="have_fees_conession[]" value="No" <?php echo $checked; ?> />
									<label for="box91">No</label>
								</div>
							</div> -->
						</div>

						<br>
						<p>If yes which of the following has been sighted?</p>
						<div class="col-sm-12">

							<?php 
								// $areaOfFeeConcessionSelected = explode(',', $form_apply3['enrol']['area_of_fee_concession']);
								$areaOfFeeConcession = $form_apply3['areaOfFeeConcession'];
								$feeInput=92;
								$feeLabel=92;
								foreach ($areaOfFeeConcession as $areaFee) {
									$selected="";
									?>
									<div class="checkbox">
										<input id="box<?php echo $feeInput++ ?>" type="checkbox" class="areaOfFeeConcession" name="changeOption areaOfFeeConcession[]" value="<?php echo $areaFee; ?>" />
										<label for="box<?php echo $feeLabel++ ?>"><?php echo $areaFee; ?></label>
									</div>
							<?php
								}
							?>
							<!-- <div class="checkbox">
								<input id="box92" type="checkbox" />
								<label for="box92">Health Care Card issued by the commonwealth</label>
							</div>
							<div class="checkbox">
								<input id="box93" type="checkbox" />
								<label for="box93">Pensioner Concession Card; or</label>
							</div>
							<div class="checkbox">
								<input id="box94" type="checkbox" />
								<label for="box94">Veteran’s Gold Card; or</label>
							</div>
							<div class="checkbox">
								<input id="box95" type="checkbox" />
								<label for="box95">An alternative card or concession eligibility criterion approved by the Minister for the Purpose of these Guidelines</label>
							</div> -->
						</div>

						<p>NB: Optimistic Futures must retain a copy of the relevant concession card specified clauses 3.7 of these Guidelines
							Where the concession card is present via digital wallet through Centrelink Express Plus mobile application, optimistic
							futures must make a written declaration and attach it to the student file stating, the following;</p>

						<ul>
							<li>It’s a digital concession card with clause 3.7; </li>
							<li>Name of the authorised delegate who sighted the digital concession card; </li>
							<li>Date the digital concession was sighted; </li>
							<li>Document number of the concession card; and </li>
							<li>Name of the concession holder. </li>
						</ul>

						<p>Have you been referred by Job Seekers with a standard Job Seeker Referral Form? (Please Tick One)?</p>
						<div class="col-sm-12">
							<div class="b">
								<div class="checkbox">
									<input id="box96" type="checkbox" />
									<label for="box96">Yes</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="checkbox">
									<input id="box97" type="checkbox" />
									<label for="box97">No</label>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label>Other:</label>
									<input type="text" id="thirtySeven" class="form-control Form_Setup required">
								</div>
							</div>
						</div>

						<p>NB: Optimistic Futures must invoice the referring agency directly for the portion of the tuition fee not covered by
							the referred job seeker.</p>

						<p>Are you self-identified as being of Aboriginal or Torres Strait Islander descent under the Indigenous Completion initiative?
							(Please Tick One)</p>

						<div class="col-sm-12">
							<?php 
								$tuitionSelfIdentifiedSelected = explode(',', $form_apply3['enrol']['tuition_self_identified']);
								$tuitionSelfIdentified = array('Yes', 'No');
								$selfInput=98;
								$selfLabel=98;
								foreach ($tuitionSelfIdentified as $self) {
									$checked="";
									if(in_array($self, $tuitionSelfIdentifiedSelected)){
										$checked="checked";
									} 
									?>
										<div class="checkbox">
											<input id="box<?php echo $selfInput++ ?>" type="checkbox" class="changeOption tuitionSelfIdentified" name=tuitionSelfIdentified[] value="<?php echo $self; ?>" <?php echo $checked; ?>/>
											<label for="box<?php echo $selfLabel++ ?>"><?php echo $self; ?></label>
										</div>
							<?php
								}

							?>
						</div>


						<br class="clearfix">
						<h3>PAYMENT METHOD</h3>
						<p>Please make payable to: Optimistic Futures Pty Ltd</p>

						<div class="col-sm-12">
							<?php
								$paymentMethodSelected = explode(',', $form_apply3['enrol']['payment_method']);
								$paymentMethod = $form_apply3['paymentMethod'];

								$payInput=100;
								$payLabel=100;

								foreach ($paymentMethod as $method) {
									$checked="";
									if(in_array($method, $paymentMethodSelected)){
										$checked="checked";
									}
									?>
									<div class="checkbox">
										<input id="box<?php echo $payInput++; ?>" class="changeOption paymentMethod" type="checkbox" name="paymentMethod[]" value="<?php echo $method; ?>" <?php echo $checked; ?> />
										<label for="box<?php echo $payLabel++; ?>"><?php echo $method; ?></label>
									</div>

							<?php		
								}

							?>
							<!-- <div class="checkbox">
								<input id="box100" type="checkbox" />
								<label for="box100">Cheque</label>
							</div>
							<div class="checkbox">
								<input id="box101" type="checkbox" />
								<label for="box101">Cash – Do not send cash, to make a cash payment please pay at the front desk</label>
							</div>
							<div class="checkbox">
								<input id="box102" type="checkbox" />
								<label for="box102">Bank cheque</label>
							</div>
							<div class="checkbox">
								<input id="box103" type="checkbox" />
								<label for="box103"> Money order</label>
							</div>
							<div class="checkbox">
								<input id="box104" type="checkbox" />
								<label for="box104">EFTPOS</label>
							</div>
							<div class="checkbox">
								<input id="box105" type="checkbox" />
								<label for="box105">Funded from Skills First Program</label>
							</div> -->
						</div>


						<br class="clearfix">
						<h3>REFUNDS</h3>
						<p>Deposits are non-refundable (deposits are outlined on each course flyer) but can be transferred to another course or
							student. An administration fee of $150 will be charged to any student who withdraws from a course in excess of 3 working
							days prior to course commencement. No refunds will be issued once the course has commenced</p>

						<p>Refunds may be made in the following circumstances:
							<br> • Participants have overpaid the administration charge
							<br> • Participants enrolled in training that has been cancelled by the RTO
							<br> • Participant advises the RTO prior to course commencement that they are withdrawing from the course
							<br> • If the participant withdraws from a course or program due to illness or extreme hardship as determined by the RTO
							<br>
						</p>

						<br class="clearfix">
						<h3>CONSENT</h3>

						<div class="form-group">
							<label class="col-sm-10">Do you give consent to OPTIMISTIC FUTURES to display your testimonials on their website?</label>
							<div class="col-sm-2">
								<?php 
									$consentTestimonialsSelected = explode(',', $form_apply3['enrol']['consent_testimonials']);
									$consentTestimonials = array('Yes', 'No');
									$testimonialInput=106;
									$testimonialLabel=106;
									foreach ($consentTestimonials as $testimonial) {
										$checked="";
										if(in_array($testimonial, $consentTestimonialsSelected)){
											$checked="checked";
										} 
										?>
										<div class="Office-checks">
											<div class="checkbox">
												<input id="box<?php echo $testimonialInput++ ?>" type="checkbox" class="changeOption consentTestimonials" name=consentTestimonials[] value="<?php echo $testimonial; ?>" <?php echo $checked; ?>/>
												<label for="box<?php echo $testimonialLabel++ ?>"><?php echo $testimonial; ?></label>
											</div>
										</div>
								<?php
									}

								?>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-10">Do you give consent to OPTIMISTIC FUTURES to use your photo on their website or/and on their marketing material?</label>
							<div class="col-sm-2">
								<?php 
									$consentPhoteSelected = explode(',', $form_apply3['enrol']['consent_photo']);
									$consentPhoto = array('Yes', 'No');
									$photoInput=108;
									$photoLabel=108;
									foreach ($consentPhoto as $photo) {
										$checked="";
										if(in_array($photo, $consentPhoteSelected)){
											$checked="checked";
										} 
										?>
										<div class="Office-checks">
											<div class="checkbox">
												<input id="box<?php echo $photoInput++ ?>" type="checkbox" class="changeOption consentphoto" name=consentphoto[] value="<?php echo $photo; ?>" <?php echo $checked; ?>/>
												<label for="box<?php echo $photoLabel++ ?>"><?php echo $photo; ?></label>
											</div>
										</div>
								<?php
									}

								?>
								<!-- <div class="Office-checks">
									<div class="checkbox">
										<input id="box108" type="checkbox" />
										<label for="box108">Yes</label>
									</div>
								</div>
								<div class="Office-checks">
									<div class="checkbox">
										<input id="box109" type="checkbox" />
										<label for="box109">No</label>
									</div>
								</div> -->
							</div>
						</div>

						<br class="clearfix">
						<h3>TERMS & CONDITIONS OF ENROLMENT</h3>

						<div class="iframe-local">
							<div class="col-sm-6">
								<h4>Enrolment & Selection (5.3) </h4>
								<p>1. Courses are open to all adults 18 years and over. 2. The student is responsible for notifying the RTO if they
									have a medical condition or disability or require assistance in their training. 3. A deposit must accompany enrolment
									to secure a placement within a course; this fee is also the Administration Fee. 4. It is the student’s responsibility
									to note the date, time and location of the course as advertised. 5. Courses with low enrolments may be cancelled,
									every effort will be made to contact students, please ensure your contact details are correct. 6. Requests from
									the student to transfer or credit their course placement due to changed personal circumstances will be considered
									and every effort will be made to ensure a placement into an alternative course. 7. If you are unable to complete
									your course, due to changed personal circumstances, the RTO will make every effort to ensure you are placed into
									an alternative pre-scheduled course. 8. Students can only join after course commencement date if they meet all prerequisites.
									Full course fees are still payable for late enrolments. 9. The RTO reserves the right to decline admission to a
									course, terminate a student's enrolment in a class or change a course or tutor at any time without notice. 10. Students
									participate in courses involving physical activity; field trips, practical demonstrations etc. and do so at their
									own risk. The RTO’s students are covered by public liability insurance whilst working within the RTO’s premises.</p>


								<h4>Training Guarantee (5.3)</h4>
								<p>The RTO will guarantee to complete all training and/ or assessment once the student has commenced study in their
									chosen qualification or course of study, unless the student submits a formal Letter of Withdrawal notifying the
									RTO that they wish to withdraw. If a student voluntarily drops out, this guarantee is valid for a maximum of six
									months from initial course commencement date.</p>

								<h4>Course Fees, Payments and Refunds (5.3)</h4>
								<p>
									1. Please refer to the course flyer for information on course fees, including any required deposit; administration fees;
									materials fees and any other charges (if applicable). 2. An administration fee of $150 is required to be paid prior
									to course commencement to secure a place within the course, if the student withdraws from the course at any time,
									they will forfeit this fee. If the total course fee is less than $150, then the total of the course is to be paid
									prior to course commencement to secure a place within the course. 3. The Administration Fee is non-refundable, but
									can be transferred to another course or student. 4. Certificates and Statements of Attainment are issued to students
									who are assessed as competent in the units completed. The cost of the certificates is included in the course fees.
									5. Refunds may be made in the following circumstances: a. Participants have overpaid the administration charge b.
									Participants enrolled in training that has been cancelled by the RTO c. Participant advises the RTO prior to course
									commencement that they are withdrawing from the course d. If the participant withdraws from a course or program
									due to illness or extreme hardship as determined by the RTO 6. No refunds will be issued once the course has commenced
									7. Students are responsible for the safe storage of their Certificates and Statements of Attainment. If a student
									requires a reissue of their Certificate or Statement of Attainment, a certificate re-issue fee of $80 will be charged.
									8. If a student is deemed not yet competent on completion of training, they will be offered an opportunity to be
									reassessed. If a student is deemed not yet competent a second time, they will be given another opportunity for reassessment.
									9. If a student is required to be reassessed, they will be provided with further guidance from their trainer prior
									to reassessment. 10. In most cases there will be no reassessment fee. If a reassessment fee is applicable, this
									fee will be included on the course flyer. 11. If a student is deemed competent in some but not all the units of
									competencies required, a Statement of Attainment will be issued and the student will be given a six-month period
									to undertake reassessment if required.
								</p>

								<h4>Fee Protection (7.3)</h4>
								<p>The RTO requires a minimum deposit, which will not exceed $1,500 per individual student, prior to course commencement.
									If the full course fees are below $1,500, the full fees may be required to be paid prior to course commencement.
									Please refer to the course flyers for deposits and course fees. Following course commencement, full fees will be
									required to be paid by either a payment plan (if remaining fees are over $1500), or in full (if the remaining fees
									are below $1500) for tuition and other services yet to be delivered.</p>
							</div>

							<div class="col-sm-6">
								<h4>Consumer Guarantee (5.3)</h4>
								<p>The RTO guarantees that the services provided by the RTO will be: • provided with due care and skill • fit for any
									specified purpose (express or implied) • Provided within a reasonable time (when no timeframe is set for the training).</p>

								<h4>Cooling Off Period (5.3)</h4>
								<p>Students are eligible to cancel their enrolment by placing a formal notice of cancellation in writing to the RTO
									Manager (a letter or email is acceptable) within 10 business days of enrolment, without attracting a cancellation
									fee, unless the student has already commenced the training.</p>

								<h4>Complaints and Appeals (6.1)</h4>
								<p>If a student, trainer or staff member is experiencing any difficulties, they are encouraged to discuss their concerns
									with Senior Management. The RTO administrative staff will make themselves available at a mutually convenient time
									if a student wishes to seek assistance. If a Staff member or Student wishes to make a formal complaint they are
									required to complete a Complaints and Appeals Form, which is included in the Student Handbook. Once the form has
									been completed, the form should be submitted to the RTO for actioning. Please refer to the Student Handbook for
									more details on the complaints and appeals process.</p>

								<h4>Credit Transfer (3.5)</h4>
								<p>The RTO recognises the Australian Qualifications Framework and Vocational Education and Training (VET) qualifications
									and VET statements of attainment issued by any other Registered Training Organisation. Credit Transfer will be awarded
									for all units of competencies that directly align with units from the qualification the student has enrolled. Evidence
									of competences achieved must be supplied for recognition to be processed (i.e. presentation of original certificate
									or transcript). Please refer to the Student Handbook or contact the office for the procedure on how to apply for
									a Credit Transfer.</p>

								<h4>Language, Literacy and Numeracy (LLN) (1.7)</h4>
								<p>LLN support is available to provide students with advice and support services in the provision of language, literacy
									and numeracy assessment services. Students needing assistance with their learning should be identified upon enrolment.
									Trainers and staff within the RTO can provide students with support to assist the student throughout the learning
									process. Language, Literacy and Numeracy skills are generally included and identified in Training Packages and accredited
									course programs. In identifying language, literacy and numeracy requirements, students are required to have basic
									skills in:</p>

								<p>Count, check and record accurately Read and interpret Estimate, calculate and measure</p>

								<p>All students undertaking a Certificate III qualification or below are required to undertake an LLN Assessment.</p>

								<h4>Support Services (1.7)</h4>
								<p>The RTO caters to diverse client learning needs and aims to identify and respond to the learning needs of all clients.
									Clients are encouraged to express their views about their learning needs at all stages of their learning experience
									from the initial enrolment and induction stage. The RTO will analyse who the target candidates are and whether an
									individual, a specific group or a broad target group and will determine the key characteristics and needs of candidates,
									including disabilities.</p>
								<p>The RTO is committed to providing clients requiring additional support, advice or assistance while training. To achieve
									this and to ensure the quality delivery of training and education, the RTO provides client vocational counselling
									to improve and extend training outcomes. Students are advised to make an appointment with their trainer in the first
									instance, if required the student can then schedule an appointment with the RTO for further counselling.</p>

								<h4>Legislative and Regulatory Requirements (8.5)</h4>
								<p>All students will undergo an induction with the RTO, which will include the student’s rights and responsibilities
									against the relevant Commonwealth, State or Territory legislation and regulatory requirements. Students are issued
									with a Student Handbook, which also includes the Student’s rights and responsibilities that will affect their participation
									in vocational education and training. The student acknowledges that they must observe The RTO’s policies and procedures,
									according to State and Federal Government legislative and regulatory requirements, as set out in the Student Handbook.</p>

								<h4>NCVER Survey:</h4>
								<p>National Centre of Vocational Education Research may in the duration of your studies contact you to participate in
									a survey which may include the following: An invitation to participate in a Department endorsed project: An invitation
									to participate in the Department’s annual student outcome survey: Contacted by the Department (or persons authorised
									by the Department) for audit, review or investigation purposes.</p>
							</div>

							<div class="col-sm-12">
								<h4>IMPORTANT INFORMATION</h4>
								<p>I have read and understand the terms and conditions of my enrolment, as stated above. I acknowledge and agree with
									the terms and conditions of enrolment with specific reference to the RTO’s enrolment and selection, USI, course
									fees, payments and refunds, course requirements, Language Literacy and Numeracy requirements, complaints and appeals,
									Workplace Health and Safety, support services that will be provided for me, legislative and regulatory policies
									and procedures, which are also provided to me in the Student Handbook. By signing this document, I also give permission
									for the RTO to access my Unique Student Identifier for the purpose of my training.</p>
							</div>
						</div>
						<!-- iframe-local Closed -->


						<br class="clearfix">
						<div class="col-sm-8">
							<div class="form-group">
								<label>Student Signature</label>
								<input type="text" id="thirtyEight" class="form-control Form_Setup required">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Date</label>
								<input type="text" id="thirtyNine" class="form-control Form_Setup required">
							</div>
						</div>
						<br class="clearfix">
						<div class="col-sm-8">
							<div class="form-group">
								<label>RTO REPRESENTATIVE</label>
								<input type="text" id="forty" class="form-control Form_Setup required">
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Date</label>
								<input type="text" id="fortyOne" class="form-control Form_Setup required">
							</div>
						</div>

						<div class="clearfix"></div>

						<h3>For office use only:</h3>

						<div class="form-group">
							<label class="col-sm-10">All required data received for application of USI</label>
							<div class="col-sm-2">
								<div class="Office-checks">
									<div class="checkbox">
										<input id="box103" type="checkbox" />
										<label for="box103">Yes</label>
									</div>
								</div>
								<div class="Office-checks">
									<div class="checkbox">
										<input id="box104" type="checkbox" />
										<label for="box104">No</label>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-10">USI applied on behalf of the Student?</label>
							<div class="col-sm-2">
								<div class="Office-checks">
									<div class="checkbox">
										<input id="box105" type="checkbox" />
										<label for="105">Yes</label>
									</div>
								</div>
								<div class="Office-checks">
									<div class="checkbox">
										<input id="box106" type="checkbox" />
										<label for="box106">No</label>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-10">USI verified/validated</label>
							<div class="col-sm-2">
								<div class="Office-checks">
									<div class="checkbox">
										<input id="box107" type="checkbox" />
										<label for="box107">Yes</label>
									</div>
								</div>
								<div class="Office-checks">
									<div class="checkbox">
										<input id="box108" type="checkbox" />
										<label for="box108">No</label>
									</div>
								</div>
							</div>
						</div>


						<div class="col-sm-4">
							<div class="form-group">
								<label>Optimistic Futures Representative Name</label>
								<input type="text" id="" class="form-control Form_Setup required" disabled>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Signature</label>
								<input type="text" id="" class="form-control Form_Setup required" disabled>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="form-group">
								<label>Date</label>
								<input type="text" id="" class="form-control Form_Setup required" disabled>
							</div>
						</div>


						<div class="clearfix"></div>

						<h3>Section A - To be completed by an authorised delegate of the Optimistic Futures</h3>

						<h4>Evidence of citizenship/residency and age</h4>

						<div class="col-sm-8">
							<div class="form-group">
								<label>I confirm that in relation to</label>
								<input type="text" id="fortyTwo" class="form-control Form_Setup required">
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<div class="Office-checks">
									<div class="checkbox">
										<input id="box109" type="checkbox" />
										<label for="box109">formal documentation issued by the Australian Department of Immigration and Border Protection confirming permanent
											residence </label>
									</div>
									<div class="checkbox">
										<input id="box110" type="checkbox" />
										<label for="box110">a copy of the original or certified copy, or
										</label>
									</div>
									<div class="checkbox">
										<input id="box111" type="checkbox" />
										<label for="box111">the certified copy, or </label>
									</div>
								</div>
								<div class="Office-checks">
									<div class="checkbox">
										<input id="box112" type="checkbox" />
										<label for="box112"> the uncertified copy and a receipt from a document verification service;</label>
									</div>
								</div>

								<div class="col-sm-12">
									<p>and if the student’s age is relevant to their eligibility and the document produced from the list above does not
										include a date of birth: </p>
									<div class="Office-checks">
										<div class="checkbox">
											<input id="box113" type="checkbox" />
											<label for="box113">a current drivers licence, or</label>
										</div>
										<div class="checkbox">
											<input id="box114" type="checkbox" />
											<label for="box114">a current learner permit, or</label>
										</div>
										<div class="checkbox">
											<input id="box115" type="checkbox" />
											<label for="box115">a Proof of Age card, or</label>
										</div>
										<div class="checkbox">
											<input id="box116" type="checkbox" />
											<label for="box116">a ‘Keypass’ card</label>
										</div>
									</div>

									<p>Or if the individual is undertaking training under the Asylum Seeker VET Program and meets the requirements set
										out in Clause 2.1 of these Guidelines, I have sighted and retained: </p>
									<div class="Office-checks">
										<div class="checkbox">
											<input id="box117" type="checkbox" />
											<label for="box117">a Referral Letter from the Asylum Seeker Resource Centre or the Australian Red Cross, or</label>
										</div>
										<div class="checkbox">
											<input id="box118" type="checkbox" />
											<label for="box118">for TAFE Institutes and Learn Locals organisations only, an electronic or printed record demonstrating that the
												student holds a current valid Bridging Visa Class E (BVE), Safe Haven Enterprise Visa (SHEV) or Temporary Protection
												Visa (TPV) as verified via the Commonwealth’s Visa Entitlement Verification Online (VEVO). </label>
										</div>
										<p>NB: The Training Provider must retain a copy of all documentation used in Section A, as per clauses 3.3-4 of these
											Guidelines</p>
									</div>
								</div>


								<div class="clearfix"></div>

								<h3>Section B - To be completed by the student</h3>

								<h4>Education history</h4>

								<div class="col-sm-8">
									<div class="form-group">
										<label>Q1. The highest qualification I have completed is: </label>
										<input type="text" id="eduHistoryHighestQualifications" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['edu_history_highest_qualifications']; ?>">
									</div>
								</div>


								<div class="col-sm-12">
									<div class="form-group">
										<label>Q2. Not including the course/s you are seeking to enrol in now, how many other government funded courses have you
											enrolled to undertake this year? Include training you have enrolled in to undertake at this and other training
											providers but not yet started. </label>
										<input type="text" id="govtEnrolCoursesName" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['govt_enrol_courses_name']; ?>">
										<select id="govtEnrolCourses" class="changeOption">
											<?php
												$govtEnrolCoursesSelected = $form_apply3['enrol']['govt_enrol_courses'];
												$govtEnrolCourses = array('0','1','2','3','4+');
												$numValue=0;

												foreach ($govtEnrolCourses as $enrolCourse) {
													$selected="";
													if($enrolCourse == $govtEnrolCoursesSelected){
														$selected = "selected";
													}
													?>
													<option value="<?php echo $enrolCourse; ?>" <?php echo $selected; ?>><?php echo $enrolCourse; ?></option>
										<?php 			
											}
										?>

										</select>
										
									</div>
								</div>


								<div class="col-sm-12">
									<div class="form-group">
										<label>Q3. Not including the course/s you are seeking to enrol in now, how many other government funded courses are you
											undertaking training in at the moment?</label>
										<input type="text" id="govtFundedCoursesName" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['govt_funded_courses_name']; ?>">
										
										<select id="govtFundedCourses" class="changeOption">
											<?php
												$govtFundedCoursesSelected = $form_apply3['enrol']['govt_funded_courses'];
												$govtFundedCourses = array('0','1','2','3','4+');
												$numValue=0;

												foreach ($govtFundedCourses as $fundCourse) {
													$selected="";
													if($fundCourse == $govtFundedCoursesSelected){
														$selected = "selected";
													}
													?>
													<option value="<?php echo $fundCourse; ?>" <?php echo $selected; ?>><?php echo $fundCourse; ?></option>
										<?php 			
											}
										?>
										</select>
									</div>
								</div>


								<div class="col-sm-12">
									<div class="form-group">
										<label>Q4. In your lifetime, how many government funded courses have you started (commenced) that are at the same level
											as the one you are applying for now? Don’t answer this question if you are seeking to enrol in a course on the
											Foundation Skills List. </label>
										<input type="text" id="sameLevelGovtFundedCoursesName" class="form-control Form_Setup textChange required" value="<?php echo $form_apply3['enrol']['same_level_govt_funded_courses_name']; ?>">
										<select id="sameLevelGovtFundedCourses" class="changeOption">

											<?php 
												$sameLevelGovtFundedCoursesSelected = $form_apply3['enrol']['same_level_govt_funded_courses'];
												$sameLevelGovtFundedCourses = array('0','1','2','3','4+');

												foreach ($sameLevelGovtFundedCourses as $samelevelCourse) {
													$selected="";
													if($samelevelCourse == $sameLevelGovtFundedCoursesSelected){
														$selected = "selected";
													}
													?>
													<option value="<?php echo $samelevelCourse; ?>" <?php echo $selected; ?>><?php echo $samelevelCourse; ?></option>
										<?php 			
											}
										?>
											?>

											<!-- <option>0 </option>
											<option>1 </option>
											<option>2 </option>
											<option>3 </option>
											<option>4+ </option> -->
										</select>
									</div>
								</div>

								<h4>Student declaration</h4>

								<div class="col-sm-6">
									<div class="form-group">
										<label>I</label>
										<input type="text" id="" class="form-control Form_Setup required" disabled>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label> in seeking to enrol in</label>
										<input type="text" id="" class="form-control Form_Setup required" disabled>
									</div>
								</div>

								<h4>declare the following to be true and accurate statements: </h4>


								<ul>
									<li>a. I AM / AM NOT enrolled in a school, including government, non-government, independent, Catholic or home school.
										(circle appropriate response)</li>
									<li>b. I AM / AM NOT enrolled in the Commonwealth Government’s Skills for Education and Employment program. (circle
										appropriate response):</li>
									<li>c. I understand that my enrolment in the above qualification/s may be subsidised by the Victorian and Commonwealth
										Governments under the Skills First Program. I understand how enrolling in the above qualification/s will affect
										my future training options and eligibility for further government subsidised training under the Skills First Program.</li>
									<li>d. I acknowledge and understand that I may be contacted by the Department or an agent to participate in a student
										survey, interview or other questionnaire.</li>

								</ul>

								<div class="col-sm-6">
									<div class="form-group">
										<label>Signed</label>
										<input type="text" id="" class="form-control Form_Setup required" disabled>
									</div>
								</div>


								<div class="col-sm-6">
									<div class="form-group">
										<label>Date</label>
										<input type="text" id="" class="form-control Form_Setup required" disabled>
									</div>
								</div>

								<div class="clearfix"></div>

								<h3>Section C - To be completed by an authorised delegate from Optimistic Futures</h3>

								<h4>Number of courses student is currently eligible for:</h4>

								<h4>Optimistic Futures declaration Based on discussion with the student, the above evidence I have sighted (and retained
									a copy of) in Section A, and the information provided to me by the student in Section B of this form I believe that
									the above individual satisfies the Entitlement to Funded Training eligibility criteria as set out in the VET Funding
									Contract and is eligible for funding under the Skill First Program for the following qualification/s: </h4>

								<div class="col-sm-6">
									<div class="form-group">
										<label>(Include full title of qualification/s in which the student is seeking to enrol)</label>
										<input type="text" id="" class="form-control Form_Setup required" disabled>
									</div>
								</div>

								<h4>Authorised Training Provider delegate:</h4>

								<div class="col-sm-12">
									<div class="form-group">
										<label>Name</label>
										<input type="text" id="" class="form-control Form_Setup required" disabled>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label>Position</label>
										<input type="text" id="" class="form-control Form_Setup required" disabled>
									</div>
								</div>

								<div class="col-sm-12">
									<div class="form-group">
										<label>Signed</label>
										<input type="text" id="" class="form-control Form_Setup required" disabled>
									</div>
								</div>

								<p>Notes Use this section to record additional, relevant eligibility information, including information used by the
									Training Provider to verify the individual’s eligibility that is not captured in Sections A, B or C.</p>


								<!--  <div class="col-md-12 col-sm-12">
                  	  <button type="submit" id="submitBtn" class="btn btn-default Submit_Button">SUBMIT</button>
                  </div>	-->
					</form>
					</div>
					</div>
				</div>
				<div class="container">
					<div class="row Add_details">
						<div class="col-md-12 col-sm-12">
							<a class="btn btn-default Submit_Button" type="button" onClick="hello(); submitForm();">SUBMIT</a>
						</div>
					</div>
				</div>
	</section>
	<!-- Welcome_Classic Closed -->

	<script>
		$(document).ready(function(){
			if ($('.country_australia').is(":checked")){
				$('#thirtyThree').val("");
				$('#thirtyThree').attr("disabled", "disabled");
			}else {
				$('#thirtyThree').removeAttr("disabled");
			}

			if($('#box90').is(":checked") && $('#box91').is(":checked")){
				$('.haveFeesConession').attr('checked', false);
			}

			if($('#box51').is(":checked")){
				$('#thirtyFive').attr("disabled", "disabled");
				$('#thirtyFive').val("");
			}else if($('#box51').is(":checked") && $('#box52').is(":checked")){
				$('#thirtyFive').attr("checked", false);
				$('#thirtyFive').removeAttr("disabled");
			}else if($('#box52').is(":checked")){
				$('#thirtyFive').val("");
			}
			else {				
				$('#thirtyFive').removeAttr("disabled");
			}

			$('.haveDisability').click(function(){
				if($(this).val()=='No'){
					$('#box61').attr('checked', false);
					$('.areasOfDiability').attr('checked', false);
					$('#thirtySix').val("");
					$('.areasOfDiability').attr('disabled', 'disabled');
				}else if($(this).val()=='Yes'){
					$('#box62').attr('checked', false);
					$('.areasOfDiability').removeAttr("disabled");
				}
				console.log($(this).val()=='Yes');
			})

			if($('#box62').is(":checked")){
				$('#box61').attr('checked', false);
				$('.areasOfDiability').attr('checked', false);
				$('#thirtySix').val("");
				$('.areasOfDiability').attr('disabled', 'disabled');
			}	



			// checkboxes data send to controller enrollment
			// start================
	$('.changeOption').change(function(){
		console.log("change");

		var chkEnrolment_courseArray = [];
		var chkModeOfStudyArray = [];
		var chktitleArray = [];
		var chkGenderArray = [];
		var chkRTOpermissionArray = [];
		// var chkNewEducatorArray = [];
		var chkEmploymentStatusArray = [];
		var chkhighestCompletedSchoolArray = [];
		var chkattendSecondarySchoolArray = [];
		var chkprevQualificationCompletedArray = [];
		var chkcompletedQulificationsArray = [];
		var chkcountryOfQualificationCompletedArray = [];
		var chklevelOfSpeakArray = [];
		var chkoriginArray = [];
		var chkareasOfDiabilityArray = [];
		var chkstudyReasonArray = [];
		var chkidentificationsArray = [];
		var chkhaveFeesConessionArray = [];
		var chkareaOfFeeConcessionArray = [];
		var chktuitionSelfIdentifiedArray = [];
		var chkpaymentMethodArray = [];
		var chkconsentTestimonialsArray = [];
		var chkconsentPhotoArray = [];
		var chkcountryOfBirth = [];
		var chkspeakLanguageAtHomeArray = [];



		$(".enrolment_course:checked").each(function() {
			chkEnrolment_courseArray.push($(this).val());
		});

		$(".mode_of_study:checked").each(function() {
			chkModeOfStudyArray.push($(this).val());
		});

		$(".title:checked").each(function() {
			chktitleArray.push($(this).val());
		});

		$(".gender:checked").each(function(){
			chkGenderArray.push($(this).val());
		});

		$(".RTOpermission:checked").each(function(){
			chkRTOpermissionArray.push($(this).val());
		});

		// $(".newEducator:checked").each(function(){
		// 	chkNewEducatorArray.push($(this).val());
		// });

		$(".employmentStatus:checked").each(function(){
			chkEmploymentStatusArray.push($(this).val());
		});

		$(".highestCompletedSchool:checked").each(function(){
			chkhighestCompletedSchoolArray.push($(this).val());
		});

		$(".attendSecondarySchool:checked").each(function(){
			chkattendSecondarySchoolArray.push($(this).val());
		});

		$(".prevQualificationCompleted:checked").each(function(){
			chkprevQualificationCompletedArray.push($(this).val());
		});

		$(".completedQulifications:checked").each(function(){
			chkcompletedQulificationsArray.push($(this).val());
		});

		$(".countryOfQualificationCompleted:checked").each(function(){
			chkcountryOfQualificationCompletedArray.push($(this).val());
		});

		$(".levelOfSpeak:checked").each(function(){
			chklevelOfSpeakArray.push($(this).val());
		});

		$(".origin:checked").each(function(){
			chkoriginArray.push($(this).val());
		});

		$(".areasOfDiability:checked").each(function(){
			chkareasOfDiabilityArray.push($(this).val());
		});

		$(".studyReason:checked").each(function(){
			chkstudyReasonArray.push($(this).val());
		});

		$(".identifications:checked").each(function(){
			chkidentificationsArray.push($(this).val());
		});

		$(".haveFeesConession:checked").each(function(){
			chkhaveFeesConessionArray.push($(this).val());
		});

		$(".areaOfFeeConcession:checked").each(function(){
			chkareaOfFeeConcessionArray.push($(this).val());
		});

		$(".tuitionSelfIdentified:checked").each(function(){
			chktuitionSelfIdentifiedArray.push($(this).val());
		});

		$(".paymentMethod:checked").each(function(){
			chkpaymentMethodArray.push($(this).val());
		});

		$(".consentTestimonials:checked").each(function(){
			chkconsentTestimonialsArray.push($(this).val());
		});

		$(".consentPhoto:checked").each(function(){
			chkconsentPhotoArray.push($(this).val());
		});

		$(".speakLanguageAtHome:checked").each(function(){
			chkspeakLanguageAtHomeArray.push($(this).val());
		});
		
		// console.log(chkspeakLanguageAtHomeArray);

		var enrolment_courseSelected;
		var mode_of_studySelected;
		var titleSelected;
		var genderSelected;
		var RTOpermissionSelected;
		var newEducatorSelected;
		var employmentStatusSelected;
		var highestCompletedSchoolSelected;
		var attendSecondarySchoolSelected;
		var prevQualificationCompletedSelected;
		var completedQulificationsSelected;
		var countryOfQualificationCompletedSelected;
		var levelOfSpeakSelected;
		var originSelected;
		var areasOfDiabilitySelected;
		var studyReasonSelected;
		var identificationsSelected;
		var haveFeesConessionSelected;
		var areaOfFeeConcessionSelected;
		var tuitionSelfIdentifiedSelected;
		var paymentMethodSelected;
		var consentTestimonialsSelected;
		var consentPhotoSelected;
		var country_Selected;
		var speakLanguageAtHomeSelected;


		enrolment_courseSelected = chkEnrolment_courseArray.join(',');
		mode_of_studySelected = chkModeOfStudyArray.join(',');
		titleSelected = chktitleArray.join(',');
		genderSelected = chkGenderArray.join(',');
		RTOpermissionSelected = chkRTOpermissionArray.join(',');
		// newEducatorSelected = chkNewEducatorArray.join(',');
			if ($('.newEducator').is(":checked")){
				newEducatorSelected = $('.newEducator').val();
			}else {
				newEducatorSelected = '';
			}
		employmentStatusSelected = chkEmploymentStatusArray.join(',');
		highestCompletedSchoolSelected = chkhighestCompletedSchoolArray.join(',');
		attendSecondarySchoolSelected = chkattendSecondarySchoolArray.join(',');
		prevQualificationCompletedSelected = chkprevQualificationCompletedArray.join(',');
		completedQulificationsSelected = chkcompletedQulificationsArray.join(',');
		countryOfQualificationCompletedSelected = chkcountryOfQualificationCompletedArray.join(',');
		levelOfSpeakSelected = chklevelOfSpeakArray.join(',');
		originSelected = chkoriginArray.join(', ');

		if($('#box62').is(':checked')){
			// areasOfDiabilitySelected = "";
			// $('#thirtySix').val();
			// console.log("==",$('#box62').val());
			// console.log("ds",$('#thirtySix').val());
			haveDisabilitySelected = $('#box62').val();
		}else {
			areasOfDiabilitySelected = chkareasOfDiabilityArray.join(',');
			haveDisabilitySelected = $('#box61').val();
		}

		studyReasonSelected = chkstudyReasonArray.join(',');
		identificationsSelected = chkidentificationsArray.join(',');
		haveFeesConessionSelected = chkhaveFeesConessionArray.join(',');
		// areaOfFeeConcessionSelected = chkareaOfFeeConcessionArray.join(',');

		if(haveFeesConessionSelected == 'No'){
			// console.log("no");
			areaOfFeeConcessionSelected = " ";


		}else if(haveFeesConessionSelected == 'Yes,No'){
			alert('Please select only one option in fees concession');
			$('.haveFeesConession').attr('checked', false);
			areaOfFeeConcession = " ";

		}else if(haveFeesConessionSelected == ""){
			areaOfFeeConcession = " ";
		}else if(haveFeesConessionSelected == 'Yes'){
			// console.log('yes');
			areaOfFeeConcessionSelected = chkareaOfFeeConcessionArray.join(',')
		}
		// console.log("----",haveFeesConessionSelected);
		// console.log("===",areaOfFeeConcessionSelected);
		tuitionSelfIdentifiedSelected = chktuitionSelfIdentifiedArray.join(',');
		paymentMethodSelected = chkpaymentMethodArray.join(',');
		consentTestimonialsSelected = chkconsentTestimonialsArray.join(',');
		consentPhotoSelected = chkconsentPhotoArray.join(',');

		if ($('.country_australia').is(":checked")){
			country_Selected = $('.country_australia').val();
			$('#thirtyThree').val("");
			$('#thirtyThree').attr("disabled", "disabled");
		}else {
			$('#thirtyThree').removeAttr("disabled");
		}
		// console.log("country", country_Selected);

		speakLanguageAtHomeSelected = chkspeakLanguageAtHomeArray.join(',  '); //comma with 2 spaces


		if(speakLanguageAtHomeSelected == "No, only English"){
			$('#thirtyFive').attr("disabled", "disabled");
			$('#thirtyFive').val("");
		} else if(speakLanguageAtHomeSelected == "No, only English,  Yes, (Please speicfy)"){
			alert('Please select only one option');
			$('.speakLanguageAtHome').attr('checked', false);
			$('#thirtyFive').removeAttr("disabled");
		}
		else {
			$('#thirtyFive').removeAttr("disabled");
			$('#thirtyFive').val("");
		}
		

		var govtEnrolCoursesSelected = $('#govtEnrolCourses option:selected').text();
		// console.log(govtEnrolCoursesSelected);

		var govtFundedCoursesSelected = $('#govtFundedCourses option:selected').text();
		// console.log(govtFundedCoursesSelected);

		var sameLevelGovtFundedCoursesSelected = $('#sameLevelGovtFundedCourses option:selected').text();
		// console.log(sameLevelGovtFundedCoursesSelected);

		$.ajax({
			type: 'POST',
			data: {
				enrolment_courseSelected: enrolment_courseSelected,
				mode_of_studySelected: mode_of_studySelected,
				titleSelected: titleSelected,
				genderSelected: genderSelected,
				RTOpermissionSelected: RTOpermissionSelected,
				newEducatorSelected: newEducatorSelected,
				employmentStatusSelected: employmentStatusSelected,
				highestCompletedSchoolSelected: highestCompletedSchoolSelected,
				attendSecondarySchoolSelected: attendSecondarySchoolSelected,
				prevQualificationCompletedSelected: prevQualificationCompletedSelected,
				completedQulificationsSelected: completedQulificationsSelected,
				countryOfQualificationCompletedSelected: countryOfQualificationCompletedSelected,
				levelOfSpeakSelected: levelOfSpeakSelected,
				originSelected: originSelected,
				studyReasonSelected: studyReasonSelected,
				identificationsSelected: identificationsSelected,
				haveFeesConessionSelected: haveFeesConessionSelected,
				areaOfFeeConcessionSelected: areaOfFeeConcessionSelected,
				tuitionSelfIdentifiedSelected: tuitionSelfIdentifiedSelected,
				paymentMethodSelected: paymentMethodSelected,
				consentTestimonialsSelected: consentTestimonialsSelected,
				consentPhotoSelected: consentPhotoSelected,
				country_Selected: country_Selected,
				speakLanguageAtHomeSelected: speakLanguageAtHomeSelected,
				govtEnrolCoursesSelected: govtEnrolCoursesSelected,
				govtFundedCoursesSelected: govtFundedCoursesSelected,
				sameLevelGovtFundedCoursesSelected: sameLevelGovtFundedCoursesSelected,
				haveDisabilitySelected:haveDisabilitySelected,
				areasOfDiabilitySelected: areasOfDiabilitySelected,

			},
			url: '<?php echo site_url('ApplicationForms/form_apply3_enrolmentCourse') ?>',
			success: function(result){
		   		// console.log(result);
		   	},
		})
	});

	// checkbox end

	// textboxes data start
		$('.textChange').keyup(function(){

			var firstName = $('#one').val();
			var middleName = $('#two').val();
			var lastName = $('#three').val();
			var dateOfBirth = $('#four').val();
			var residentialAddress = $('#five').val();
			var subrubTown = $('#six').val();
			var state = $('#seven').val();
			var postCode = $('#eight').val();
			var postalAddress = $('#nine').val();
			var homePhone = $('#ten').val();
			var mobile = $('#eleven').val();
			var fax = $('#twelve').val();
			var email = $('#thirteen').val();
			var emergencyName = $('#forteen').val();
			var emergencyRelationship = $('#fifteen').val();
			var emergencyHomeNumber = $('#sixteen').val();
			var emergencyMobile = $('#seventeen').val();
			//RTO permission in checkbox section (above)
			var concessionMedicareNumber = $('#eighteen').val();
			var concessionMedicareExpiryDate = $('#ninteen').val();
			var concessionCardNumber = $('#twenty').val();
			var concessionCardExpiryDate = $('#twentyOne').val();
			var usi1 = $('#twentyTwo').val();
			var usi2 = $('#twentyThree').val();
			var vsn = $('#twentyFour').val();
			var vsnPreviousSchool = $('#twentyFive').val();
			// newEducator in checkbox section
			// employment status in checkbox section
			var employmentOrganization = $('#twentySix').val();
			var employmentPosition = $('#twentySeven').val();
			var employmentAddress = $('#twentyEight').val();
			var employmentTelephone = $('#twentyNine').val();
			var employmentAbn = $('#thirty').val();
			// highest completed school
			var yearSchoolCompleted = $('#thirtyOne').val();
			//attend secondary school
			// completed qualification yes or no
			// if yes then completed qualification
			var anotherCertificate = $('#thirtyTwo').val();
			// where the qualification completed country
			var countryOfBirth = $('#thirtyThree').val();
			var cityOfBirth = $('#thirtyFour').val();
			var speakLanguageAtHome = $('#thirtyFive').val();

			if($('#box62').is(':checked')){
				var otherAreasOfDisability = "";
			}else {
				var otherAreasOfDisability = $('#thirtySix').val();
			}
			var eduHistoryHighestQualifications = $('#eduHistoryHighestQualifications').val();
			var govtEnrolCoursesName = $('#govtEnrolCoursesName').val();
			var govtFundedCoursesName = $('#govtFundedCoursesName').val();
			var sameLevelGovtFundedCoursesName = $('#sameLevelGovtFundedCoursesName').val();


			// console.log(concessionMedicareNumber);
			
			//set values into the object
			var textBoxData = new Object();
			textBoxData.firstName = firstName;
			textBoxData.middleName = middleName;
			textBoxData.lastName = lastName;
			textBoxData.dateOfBirth = dateOfBirth;
			textBoxData.residentialAddress = residentialAddress;
			textBoxData.subrubTown = subrubTown;
			textBoxData.state = state;
			textBoxData.postCode = postCode;
			textBoxData.postalAddress = postalAddress;
			textBoxData.homePhone = homePhone;
			textBoxData.mobile = mobile;
			textBoxData.fax = fax;
			textBoxData.email = email;
			textBoxData.emergencyName = emergencyName;
			textBoxData.emergencyRelationship = emergencyRelationship;
			textBoxData.emergencyHomeNumber = emergencyHomeNumber;
			textBoxData.emergencyMobile = emergencyMobile;
			textBoxData.concessionMedicareNumber = concessionMedicareNumber;
			textBoxData.concessionMedicareExpiryDate = concessionMedicareExpiryDate;
			textBoxData.concessionCardNumber = concessionCardNumber;
			textBoxData.concessionCardExpiryDate = concessionCardExpiryDate;
			textBoxData.usi1 = usi1;
			textBoxData.usi2 = usi2;
			textBoxData.vsn = vsn;
			textBoxData.vsnPreviousSchool = vsnPreviousSchool;
			textBoxData.employmentOrganization = employmentOrganization;
			textBoxData.employmentPosition = employmentPosition;
			textBoxData.employmentAddress = employmentAddress;
			textBoxData.employmentTelephone = employmentTelephone;
			textBoxData.employmentAbn = employmentAbn;
			textBoxData.yearSchoolCompleted = yearSchoolCompleted;
			textBoxData.anotherCertificate = anotherCertificate;
			textBoxData.cityOfBirth = cityOfBirth;
			textBoxData.countryOfBirth = countryOfBirth;
			textBoxData.speakLanguageAtHome = speakLanguageAtHome;
			textBoxData.otherAreasOfDisability = otherAreasOfDisability;
			textBoxData.eduHistoryHighestQualifications = eduHistoryHighestQualifications;
			textBoxData.govtEnrolCoursesName = govtEnrolCoursesName;
			textBoxData.govtFundedCoursesName = govtFundedCoursesName;
			textBoxData.sameLevelGovtFundedCoursesName = sameLevelGovtFundedCoursesName;


			$.ajax({
				type: 'POST',
				data: {
					textBoxData: textBoxData
				},
				url: '<?php echo site_url('ApplicationForms/form_apply3_enrolmentCourse2') ?>',
				success: function(result){
		    		console.log(result);
		    	},
			})
		});
	// textboxes data end

		});
	</script>

<script src='<?php echo base_url(); ?>ofpdfs/f3/js/pdfmake.min.js'></script>
	<script src='<?php echo base_url(); ?>ofpdfs/f3/js/vfs_fonts.js'></script>

<script src='<?php echo base_url(); ?>ofpdfs/f3/js/form.js'></script>

