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

	if(window.performance){
		console.info("window.performance works fine on this browser");
	}
	if (performance.navigation.type == 1) {
		console.info( "This page is reloaded==" );
		var studentUsiData = sessionStorage.getItem("studentUsiData");
		var studentUsiData = JSON.parse(studentUsiData);
		$.ajax({
			type: 'POST',
			data: {studentUsiData: studentUsiData},
			url: '<?php echo site_url('ApplicationForms/form_apply1_submit_data') ;?>',
			success: function(result){
				// $('#returnResult').html(result);
			},
		})
	}else {
		console.info( "This page is not reloaded");
	}

	
	var form1data = <?php echo json_encode($form_apply1['enrol']); ?>

	let x = form1data;
	let {Id,user_id,form_submitted,student_signature,form_submission_date, ...form1_data} = x;
	
	sessionStorage.setItem('studentUsiData', JSON.stringify(form1_data));
	studentUsiData = JSON.parse(sessionStorage.getItem('studentUsiData'));
	console.log("abc", studentUsiData.surname)
	
	console.log(form1_data);

	function submitForm() {
		var studentUsiData = sessionStorage.getItem("studentUsiData");
		studentUsiData = JSON.parse(studentUsiData);
		console.log("Submitted",studentUsiData);
		$.ajax({
			type: 'POST',
			data: {studentUsiData: studentUsiData},
			url: "<?php echo site_url('ApplicationForms/form_apply1_submit_data'); ?>",
			success: function(result){
				// ======================
				$.ajax({
					type: 'POST',
					data: {form_submitted: "Submitted", Id:"<?php echo $form_apply1['enrol']['Id']; ?>"},
					url: "<?php echo site_url('ApplicationForms/form_apply1_submitted');?>",
					success: function(result){
						alert("form submitted");
	    				window.location.replace('<?php echo base_url("application-form.html"); ?>');
					},
					error: function(err){
						alert("Form not submit please try again");
					}
				});

			},
			error:function(err){
				console.log('There is no data inside local storrage please check.');
			}
		})
		sessionStorage.setItem("studentUsiData", "");
	}
</script>


<?php
	$submitData = $form_apply1['enrol'];
	// print_r($submitData);
	// print_r($form_apply1['enrol']['office_use_1']);

	

	// surname
	$splitSurname = str_split($form_apply1['enrol']['surname']);
	$splitSurnameCount = count($splitSurname);
	for($i=0; $i < 12; $i++){
		if(!(array_key_exists($i, $splitSurname))){
			$splitSurname[$i] = "";
		}
		// print_r("  ;--in loop==".$splitSurname[$i]);
	}

	// given name
	$splitGivenname = str_split($form_apply1['enrol']['given_name']);
	$splitGivennameCount = count($splitGivenname);
	for($i=0; $i < 12; $i++){
		if(!(array_key_exists($i, $splitGivenname))){
			$splitGivenname[$i] = "";
		}
		// print_r(";". $i ."--in loop==".$splitGivenname[$i]);
	}

	// middle name
	$splitMiddle_name = str_split($form_apply1['enrol']['middle_name']);
	$splitMiddle_nameCount = count($splitMiddle_name);
	for($i=0; $i < 12; $i++){
		if(!(array_key_exists($i, $splitMiddle_name))){
			$splitMiddle_name[$i] = "";
		}
		// print_r(";". $i ."--in loop==".$splitMiddle_name[$i]);
	}

	// date of birth
	$splitDate_of_birth = str_split($form_apply1['enrol']['date_of_birth']);
	$splitDate_of_birthCount = count($splitDate_of_birth);
	for($i=0; $i < 12; $i++){
		if(!(array_key_exists($i, $splitDate_of_birth))){
			$splitDate_of_birth[$i] = "";
		}
		// print_r(";". $i ."--in loop==".$splitDate_of_birth[$i]);
	}


	// country of birth
	$splitCountry_of_birth = str_split($form_apply1['enrol']['country_of_birth']);
	$splitCountry_of_birthCount = count($splitCountry_of_birth);
	for($i=0; $i < 12; $i++){
		if(!(array_key_exists($i, $splitCountry_of_birth))){
			$splitCountry_of_birth[$i] = "";
		}
		// print_r(";". $i ."--in loop==".$splitCountry_of_birth[$i]);
	}

	// town of birth
	$splitTown_of_birth = str_split($form_apply1['enrol']['town_of_birth']);

	for($i=0; $i < 12; $i++){
		if(!(array_key_exists($i, $splitTown_of_birth))){
			$splitTown_of_birth[$i] = "";
		}
		// print_r(";". $i ."--in loop==".$splitTown_of_birth[$i]);
	}

	// country
	$splitCountry = str_split($form_apply1['enrol']['country']);

	for($i=0; $i < 12; $i++){
		if(!(array_key_exists($i, $splitCountry))){
			$splitCountry[$i] = "";
		}
		// print_r(";". $i ."--in loop==".$splitCountry[$i]);
	}

	// mobile number
	$splitMobile_num = str_split($form_apply1['enrol']['contact']);

	for($i=0; $i < 12; $i++){
		if(!(array_key_exists($i, $splitMobile_num))){
			$splitMobile_num[$i] = "";
		}
		// print_r(";". $i ."--in loop==".$splitMobile_num[$i]);
	}

	// email address
	$splitEmail = str_split($form_apply1['enrol']['email']);

	for($i=0; $i < 24; $i++){
		if(!(array_key_exists($i, $splitEmail))){
			$splitEmail[$i] = "";
		}
		// print_r(";". $i ."--in loop==".$splitEmail[$i]);
	}

	// usi
	$splitUsi = str_split($form_apply1['enrol']['usi']);

	for($i=0; $i < 12; $i++){
		if(!(array_key_exists($i, $splitUsi))){
			$splitUsi[$i] = "";
		}
		// print_r(";". $i ."--in loop==".$splitUsi[$i]);
	}



?>
	<section class="Section_Devs Head_Titles">
		<div class="container">
			<h1>USI Permission and Verification Form</h1>
			<ol class="breadcrumb">
				<li>
					<a href="#">Home</a>
				</li>
				<li>
					<i class="fa fa-angle-double-right" aria-hidden="true"></i>
				</li>
				<li class="active">USI Permission and Verification Form</li>
			</ol>
		</div>
	</section>
	<!-- Head_Titles Closed -->


	<section class="Section_Devs Welcome_Classic Optim-Form0s" style="background-color: white;">
		<div class="container" style="background-color: white;">
			<div id="divtoconvert" class="row Add_details" style="background-color: white; width: 850px; margin: 0 auto;padding-top: 20px;padding-bottom: 20px;">


				<div class="col-md-12 col-sm-12 Contact_Add Appy-formy">
					<center>
						<img src="/uploads/ckeditor/optimistic-futures/images/optimistic_logo.png" alt="" style="margin-top: 4px;" />
					</center>
					<h3 style="background: #4f6228; font-size: 21px;">USI Permission and Verification Form</h3>
					<div class="col-md-12">
						<h2 style="color: #529bdf; font-size: 16px;">Do you need a USI?</h2>
						<p>You will need a USI when you enrol or re-enrol in training from 1 January 2015 if you are a:
							<ul style="font-size: 14px;">
								<li>▪ student enrolling in nationally recognised training for the first time, for example if you are studying at TAFE
									or with a private training organisation, completing an apprenticeship or skill set, certificate or diploma course;</li>
								<li>▪ school student completing nationally recognised training; or student continuing with nationally recognised training.
									</li>
								<li>▪ You are a continuing student if you are a student who has already started your course in a previous year (and not
									yet completed it) and will continue studying after 1 January 2015.</li>
							</ul>
						</p>

						<h2 style="color: #529bdf; font-size: 16px;">How to get a USI?</h2>
						<p>It is free and easy for you to create your own USI online. While you may create your own USI, training organisations
							are also able to create a USI for you. We do this as part of the enrolment process when you begin studying.</p>

						<p style="font-style: italic;">For more information, please visit: usi.gov.au
							<br> Or contact Email: usi@industry.gov.au
							<br> Phone: Skilling Australia Information line – 13 38 73
						</p>
					</div>



					<br class="clearfix">
					
					<div id="returnResult"></div>

					<form id="contactForm" class="validate">
					<!-- <?php echo form_open('/ApplicationForms/formdatasubmitted'); ?> -->

						<h3 style="background: #d6e3bc; color: #000;">STUDENT INFORMATION FOR USI</h3>

						<fieldset>
							<div class="form-group highlight">
								<div class="row">
									<label class="pti1">SURNAME</label>
									<div class="pti2" id="divAllTextBox">
										<input type="text" name="firsttext" id="one" class="input-field-box form-control surname_field" maxlength="1" 
										value="<?php echo $splitSurname[0]; ?>">
										<input type="text" name="secondtext" id="two" class="input-field-box form-control surname_field" maxlength="1"
										value="<?php echo $splitSurname[1]; ?>">
										<input type="text" name="thirdtext" id="three" class="input-field-box form-control surname_field" maxlength="1" value="<?php echo $splitSurname[2]; ?>">
										<input type="text" name="forthtext" id="four" class="input-field-box form-control surname_field" maxlength="1" value="<?php echo $splitSurname[3]; ?>">
										<input type="text" name="fifthtext" id="five" class="input-field-box form-control surname_field" maxlength="1" value="<?php echo $splitSurname[4]; ?>">
										<input type="text" name="sixthtext" id="six" class="input-field-box form-control surname_field" maxlength="1" value="<?php echo $splitSurname[5]; ?>">
										<input type="text" name="seventhtext" id="seven" class="input-field-box form-control surname_field" maxlength="1" value="<?php echo $splitSurname[6]; ?>">
										<input type="text" name="eighttext" id="eight" class="input-field-box form-control surname_field" maxlength="1" value="<?php echo $splitSurname[7]; ?>">
										<input type="text" name="ninthtext" id="nine" class="input-field-box form-control surname_field" maxlength="1" value="<?php echo $splitSurname[8]; ?>">
										<input type="text" name="tenthtext" id="ten" class="input-field-box form-control surname_field" maxlength="1" value="<?php echo $splitSurname[9]; ?>">
										<input type="text" name="eleventext" id="eleven" class="input-field-box form-control surname_field" maxlength="1"
										value="<?php echo $splitSurname[10]; ?>">
										<input type="text" name="twelevetext" id="twelve" class="input-field-box form-control surname_field" maxlength="1" value="<?php echo $splitSurname[11]; ?>">
										<br class="clearfix">
									</div>
								</div>
							</div>
							
							<script>
								
							</script>


							<div class="form-group">
								<div class="row">
									<label class="pti1">
										<span style="margin-left: 19px;">(As on Identification)</span>
									</label>
									<div class="pti2"></div>
								</div>
							</div>

							<div class="form-group highlight">
								<div class="row">
									<label class="pti1">GIVEN NAME</label>
									<div class="pti2">
										<input type="text" name="thirteentext" id="thirteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[0]; ?>">
										<input type="text" name="fourteentext" id="fourteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[1]; ?>">
										<input type="text" name="fifteentext" id="fifteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[2]; ?>">
										<input type="text" name="sixteentext" id="sixteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[3]; ?>">
										<input type="text" name="seventeentext" id="seventeen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[4]; ?>">
										<input type="text" name="eighteentext" id="eighteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[5]; ?>">
										<input type="text" name="ninteentext" id="ninteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[6]; ?>">
										<input type="text" name="twentytext" id="twenty" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[7]; ?>">
										<input type="text" name="twentyOnetext" id="twentyOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[8]; ?>">
										<input type="text" name="twentyTwotext" id="twentyTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[9]; ?>">
										<input type="text" name="twentyThreetext" id="twentyThree" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[10]; ?>">
										<input type="text" name="twentyFourtext" id="twentyFour" class="input-field-box form-control" maxlength="1" value="<?php echo $splitGivenname[11]; ?>">
										<br class="clearfix">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label class="pti1">
										<span style="margin-left: 19px;">(As on Identification)</span>
									</label>
									<div class="pti2"></div>
								</div>
							</div>

							<div class="form-group highlight">
								<div class="row">
									<label class="pti1">MIDDLE NAME</label>
									<div class="pti2">
										<input type="text" name="twentyFivetext" id="twentyFive" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[0]; ?>">
										<input type="text" name="twentySixtext" id="twentySix" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[1]; ?>">
										<input type="text" name="twentySeventext" id="twentySeven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[2]; ?>">
										<input type="text" name="twentyEighttext" id="twentyEight" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[3]; ?>">
										<input type="text" name="twentyNinetext" id="twentyNine" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[4]; ?>">
										<input type="text" name="thirtytext" id="thirty" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[5]; ?>">
										<input type="text" name="thirtyOnetext" id="thirtyOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[6]; ?>">
										<input type="text" name="thiryTwotext" id="thiryTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[7]; ?>">
										<input type="text" name="thirtyThreetext" id="thirtyThree" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[8]; ?>">
										<input type="text" name="thirtyFourtext" id="thirtyFour" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[9]; ?>">
										<input type="text" name="thirtyFivetext" id="thirtyFive" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[10]; ?>">
										<input type="text" name="thirtySixtext" id="thirtySix" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMiddle_name[11]; ?>">
										<br class="clearfix">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label class="pti1">
										<span style="margin-left: 19px;">(As on Identification)</span>
									</label>
									<div class="pti2"></div>
								</div>
							</div>

							<div class="form-group highlight">
								<div class="row">
									<label class="pti1">DATE OF BIRTH</label>
									<div class="pti2">
										<input type="text" name="thirtySeventext" id="thirtySeven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[0] ?>" placeholder="Y">
										<input type="text" name="thirtyEighttext" id="thirtyEight" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[1] ?>" placeholder="Y">
										<input type="text" name="thirtyNinetext" id="thirtyNine" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[2] ?>" placeholder="Y">
										<input type="text" name="fortytext" id="fourty" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[3] ?>" placeholder="Y">
										<input type="text" name="fortyOnetext" id="fortyOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[4] ?>" placeholder="-" disabled>
										<input type="text" name="fortyTwotext" id="fortyTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[5] ?>" placeholder="M">
										<input type="text" name="fortyThreetext" id="fortyThree" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[6] ?>" placeholder="M">
										<input type="text" name="fortyFourtext" id="fortyFour" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[7] ?>" placeholder="-" disabled>
										<input type="text" name="fortyFivetext" id="fortyFive" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[8] ?>" placeholder="D">
										<input type="text" name="fortySixtext" id="fortySix" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[9] ?>" placeholder="D">
										<input type="text" name="fortySeventext" id="fortySeven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[10] ?>" placeholder="">
										<input type="text" name="fortyEighttext" id="fortyEight" class="input-field-box form-control" maxlength="1" value="<?php echo $splitDate_of_birth[11] ?>" placeholder="">
										<br class="clearfix">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label class="pti1">
										<span></span>
									</label>
									<div class="pti2"></div>
								</div>
							</div>

							<div class="form-group highlight">
								<div class="row">
									<label class="pti1">COUNTRY OF BIRTH</label>
									<div class="pti2">
										<input type="text" name="fortyNinetext" id="fortyNine" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[0] ?>">
										<input type="text" name="fiftytext" id="fifty" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[1] ?>">
										<input type="text" name="fiftyOnetext" id="fiftyOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[2] ?>">
										<input type="text" name="fiftyTwotext" id="fiftyTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[3] ?>">
										<input type="text" name="fiftyThreetext" id="fiftyThree" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[4] ?>">
										<input type="text" name="fiftyFourtext" id="fiftyFour" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[5] ?>">
										<input type="text" name="fiftyFivetext" id="fiftyFive" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[6] ?>">
										<input type="text" name="fiftySixtext" id="fiftySix" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[7] ?>">
										<input type="text" name="fiftySeventext" id="fiftySeven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[8] ?>">
										<input type="text" name="fiftyEighttext" id="fiftyEight" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[9] ?>">
										<input type="text" name="fiftyNinetext" id="fiftyNine" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[10] ?>">
										<input type="text" name="sixtytext" id="sixty" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry_of_birth[11] ?>">
										<br class="clearfix">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label class="pti1">
										<span></span>
									</label>
									<div class="pti2"></div>
								</div>
							</div>

							<div class="form-group highlight">
								<div class="row">
									<label class="pti1">TOWN OF BIRTH</label>
									<div class="pti2">
										<input type="text" id="sixtyOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[0] ?>">
										<input type="text" id="sixtyTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[1] ?>">
										<input type="text" id="sixtyThree" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[2] ?>">
										<input type="text" id="sixtyFour" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[3] ?>">
										<input type="text" id="sixtyFive" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[4] ?>">
										<input type="text" id="sixtySix" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[5] ?>">
										<input type="text" id="sixtySeven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[6] ?>">
										<input type="text" id="sixtyEight" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[7] ?>">
										<input type="text" id="sixtyNine" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[8] ?>">
										<input type="text" id="seventy" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[9] ?>">
										<input type="text" id="seventyOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[10] ?>">
										<input type="text" id="seventyTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitTown_of_birth[11] ?>">
										<br class="clearfix">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label class="pti1">
										<span style="margin-left: 19px;">(As on Identification)</span>
									</label>
									<div class="pti2"></div>
								</div>
							</div>

							<div class="form-group highlight">
								<div class="row">
									<label class="pti1">COUNTRY</label>
									<div class="pti2">
										<input type="text" id="seventyThree" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[0] ?>">
										<input type="text" id="seventyFour" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[1] ?>">
										<input type="text" id="seventyFive" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[2] ?>">
										<input type="text" id="seventySix" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[3] ?>">
										<input type="text" id="seventySeven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[4] ?>">
										<input type="text" id="seventyEight" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[5] ?>">
										<input type="text" id="seventyNine" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[6] ?>">
										<input type="text" id="eighty" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[7] ?>">
										<input type="text" id="eightyOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[8] ?>">
										<input type="text" id="eightyTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[9] ?>">
										<input type="text" id="eightyThree" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[10] ?>">
										<input type="text" id="eightyFour" class="input-field-box form-control" maxlength="1" value="<?php echo $splitCountry[11] ?>">
										<br class="clearfix">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label class="pti1">
										<span style="margin-left: 19px;">in which you are studying</span>
									</label>
									<div class="pti2"></div>
								</div>
							</div>

							<div class="form-group highlight">
								<div class="row">
									<label class="pti1">MOBILE NO</label>
									<div class="pti2">
										<input type="text" id="eightyFive" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[0] ?>">
										<input type="text" id="eightySix" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[1] ?>">
										<input type="text" id="eightySeven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[2] ?>">
										<input type="text" id="eightyEight" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[3] ?>">
										<input type="text" id="eightyNine" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[4] ?>">
										<input type="text" id="ninty" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[5] ?>">
										<input type="text" id="nintyOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[6] ?>">
										<input type="text" id="nintyTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[7] ?>">
										<input type="text" id="nintyThree" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[8] ?>">
										<input type="text" id="nintyFour" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[9] ?>">
										<input type="text" id="nintyFive" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[10] ?>">
										<input type="text" id="nintySix" class="input-field-box form-control" maxlength="1" value="<?php echo $splitMobile_num[11] ?>">
										<br class="clearfix">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label class="pti1">
										<span></span>
									</label>
									<div class="pti2"></div>
								</div>
							</div>

							<div class="form-group highlight">
								<div class="row">
									<label class="pti1">EMAIL ADDRESS</label>
									<div class="pti2">
										<input type="text" id="nintySeven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[0]; ?>">
										<input type="text" id="nintyEight" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[1]; ?>">
										<input type="text" id="nintyNine" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[2]; ?>">
										<input type="text" id="hundred" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[3]; ?>">
										<input type="text" id="hundredOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[4]; ?>">
										<input type="text" id="hundredTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[5]; ?>">
										<input type="text" id="hundredThree" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[6]; ?>">
										<input type="text" id="hundredFour" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[7]; ?>">
										<input type="text" id="hundredFive" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[8]; ?>">
										<input type="text" id="hundredSix" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[9]; ?>">
										<input type="text" id="hundredSeven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[10]; ?>">
										<input type="text" id="hundredEight" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[11]; ?>">
										<br class="clearfix">
										<input type="text" id="hundredNine" style="margin-left: 167px;" maxlength="1" value="<?php echo $splitEmail[12]; ?>" class="input-field-box form-control">
										<input type="text" id="hundredTen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[13]; ?>">
										<input type="text" id="hundredEleven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[14]; ?>">
										<input type="text" id="hundredTwelve" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[15]; ?>">
										<input type="text" id="hundredThirteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[16]; ?>">
										<input type="text" id="hundredForteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[17]; ?>">
										<input type="text" id="hundredFifteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[18]; ?>">
										<input type="text" id="hundredSixteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[19]; ?>">
										<input type="text" id="hundredSeventeen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[20]; ?>">
										<input type="text" id="hundredEighteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[21]; ?>">
										<input type="text" id="hundredNinteen" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[22]; ?>">
										<input type="text" id="hundredTwenty" class="input-field-box form-control" maxlength="1" value="<?php echo $splitEmail[23]; ?>">
										<br class="clearfix">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label class="pti1">
										<span></span>
									</label>
									<div class="pti2"></div>
								</div>
							</div>

							<div class="form-group highlight">
								<div class="row">
									<label class="pti1">USI
										<span></span>
									</label>
									<div class="pti2">
										<input type="text" id="hundredTwentyOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[0]; ?>">
										<input type="text" id="hundredTwentyTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[1]; ?>">
										<input type="text" id="hundredTwentyThree" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[2]; ?>">
										<input type="text" id="hundredTwentyFour" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[3]; ?>">
										<input type="text" id="hundredTwentyFive" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[4]; ?>">
										<input type="text" id="hundredTwentySix" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[5]; ?>">
										<input type="text" id="hundredTwentySeven" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[6]; ?>">
										<input type="text" id="hundredTwentyEight" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[7]; ?>">
										<input type="text" id="hundredTwentyNine" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[8]; ?>">
										<input type="text" id="hundredThirty" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[9]; ?>">
										<input type="text" id="hundredThirtyOne" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[10]; ?>">
										<input type="text" id="hundredThirtyTwo" class="input-field-box form-control" maxlength="1" value="<?php echo $splitUsi[11]; ?>">
										<br class="clearfix">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label class="pti1">
										<span style="margin-left: 19px;">in which you are studying</span>
									</label>
									<div class="pti2"></div>
								</div>
							</div>

						</fieldset>


						<h2 style="color: #529bdf; font-size: 16px;">Identification that can be used for USI Application (tick one that is being provided)</h2>


						<fieldset>
							<div class="form-group">

								<?php 
									$identification_usi_application_selected = explode(", ", $form_apply1['enrol']['identification_usi_application']);
									$identification_usi_application = $form_apply1['identification_usi_application'];
									// print_r($identification_usi_application);
									$usiInput=1;
									$usiLable=1;
									$num=0;
									foreach ($identification_usi_application as $usi) {
										// divide into column
										if($num == 0){ ?>
											<div class="col-sm-6">
										<?php }?>

										<?php if($num == 4){ ?>
											<div class="col-sm-6">
										<?php }?>

										<?php
										$checked="";
										if(in_array($usi, $identification_usi_application_selected)){
											$checked="checked";
										}
										?>
										<div class="checkbox">
											<input id="box<?php echo $usiInput++; ?>"  type="checkbox" class="identification_usi_application input-field-box" name="$identification_usi_application[]" class="identification_usi_application" value="<?php echo $usi; ?>" <?php echo $checked; ?>/>
											<label for="box<?php echo $usiLable++; ?>"><?php echo $usi; ?></label>
										</div>

										<?php if ($num == 3 || $num == 7 ){?> </div> <?php }
										$num++;
										?>
									<?php
									}
									?>
							</div>
						</fieldset>

						<h3 style="background: #d6e3bc; color: #000;">PRIVACY NOTICE</h3>
						<p>You have been advised, agree, understand and consent that the personal information you provide in connection with your
							USI application:

							<div class="Appy-formy" style="font-size: 14px;">
								<ul>

									<li>▪ Is collected by the Student Identifiers Registrar for the purposes of:
										<ul>
											<li>▪ Applying for, verifying and giving a USI; </li>
											<li>▪ Resolving problems with a USI; and </li>
											<li>▪ Creating authenticated vocation education and training (VET) transcripts;</li>
										</ul>
									</li>


									<li>▪ May be disclosed to:
										<ul>
											<li>▪ Commonwealth and State/Territory Government Departments and Agencies and Statutory Bodies performing functions
												relating to VET for: </li>
											<ul>
												<li>▪ The purposes of administering and auditing Vocational Education and Training (VET), VET providers and VET programs;
												</li>
												<li>▪ Education related policy and research purposes; and </li>
												<li>▪ To assist in determining eligibility for training subsidies; </li>
											</ul>
										</ul>
									</li>







									<li>▪ VET regulators to enable them to perform their VET regulatory functions;
									</li>

									<li>▪ VET Admission Bodies for the purposes of administering VET and VET programs;
									</li>

									<li>▪ Current and former Registered Training Organisations to enable them to deliver VET courses to the individual,
										meet their reporting obligations under the VET Standards and Government Contracts and assist in determining eligibility
										for training subsidies;
									</li>

									<li>▪ School for the purposes of delivering VET courses to the individual and reporting on these courses;
									</li>

									<li>▪ The National Centre for Vocational Education Research for the purposes of creating authenticated VET transcripts,
										resolving problems with USI’s and for the collection, preparation and auditing of national VET statistics;
									</li>

									<li>▪ Researchers for education and training related research purposes; Any other person or agency that may be authorised
										or required by law to access the information;
									</li>

									<li>▪ Any entity contractually engaged by the Student Identifiers Registrar to assist in the performance of his or her
										functions in the administration of the USI system; and

									</li>

									<li>▪ Will not otherwise be disclosed without their consent unless authorised or required by or under law. The full
										copy of the Privacy Policy can be seen on this website http://USI.gov.au/Pages/privacy-policy.aspx. This site will
										also contain information on how to access and seek correction of the personal information held and how such complaints
										will be dealt with. In accordance with Section 11 of the Student Identifiers Act 2014, Optimistic Futures information
										which we collect from individuals solely for the purpose of applying for the student has made the application or
										the information is no longer needed for law to retain it. I have read and understood the privacy notice and I give
										my permission to Optimistic provided, to apply USI on my behalf, validate/verify my USI, disclose and use my view
										transcripts or extracts by using my USI.
									</li>

								</ul>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label class="sign-pti">Student Name</label>
									<input type="text" id="studentName" class="input-field-box form-control formpti1 required" value="<?php echo $form_apply1['enrol']['student_name']; ?>">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label class="sign-pti">Signature</label>
									<input disabled="" type="text" id="" class="form-control formpti1 required">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label class="sign-pti" style="margin-left: 58px;">Date</label>
									<input type="text" id="date" class="form-control formpti1 required" value="<?php  ?>">
								</div>
							</div>

							<div class="clearfix"></div>

							<h3 style="background: #d6e3bc; color: #000;">For office use only:</h3>

							<div class="form-group">
								<label class="pti3">All required data received for application of USI</label>
								<div class="pti4">

									<?php 

										$office_use_1Selected = explode(",", $form_apply1['enrol']['office_use_1']);
										$office_use_1 = array('Yes', 'No');
										$office_1=9;
										$office_1L=9;
										foreach ($office_use_1 as $use_1) {
											$checked="";
											if(in_array($use_1, $office_use_1Selected)){
												$checked="checked";
											}
											?>
											<div class="Office-checks">
												<div class="checkbox">
													<input id="box<?php echo $office_1++ ?>" type="checkbox" class="input-field-box office_use_1" name="office_use_1" value="<?php echo $use_1; ?>" <?php echo $checked; ?> />
													<label for="box<?php echo $office_1L++ ?>"><?php  echo $use_1; ?></label>
												</div>
											</div>
									<?php
										}
									?>

								</div>
								<br class="clearfix">
							</div>

							<div class="form-group">
								<label class="pti3">USI applied on behalf of the Student?</label>
								<div class="pti4">

									<?php 

										$office_use_2Selected = explode(",", $form_apply1['enrol']['office_use_2']);
										$office_use_2 = array('Yes', 'No');
										$office_2=11;
										$office_2L=11;
										foreach ($office_use_2 as $use_2) {
											$checked="";
											if(in_array($use_2, $office_use_2Selected)){
												$checked="checked";
											}
											?>
											<div class="Office-checks">
												<div class="checkbox">
													<input id="box<?php echo $office_2++; ?>" type="checkbox" class="input-field-box office_use_2" name="office_use_2" value="<?php echo $use_2; ?>" <?php echo $checked; ?> />
													<label for="box<?php echo $office_2L++ ?>"><?php  echo $use_2; ?></label>
												</div>
											</div>
									<?php
										}
									?>
								</div>
								<br class="clearfix">
							</div>

							<div class="form-group">
								<label class="pti3">USI verified/validated</label>
								<div class="pti4">
									<?php 

										$office_use_3Selected = explode(",", $form_apply1['enrol']['office_use_3']);
										$office_use_3 = array('Yes', 'No');
										$office_3=13;
										$office_3L=13;
										foreach ($office_use_3 as $use_3) {
											$checked="";
											if(in_array($use_3, $office_use_3Selected)){
												$checked="checked";
											}
											?>
											<div class="Office-checks">
												<div class="checkbox">
													<input id="box<?php echo $office_3++; ?>" type="checkbox" class="input-field-box office_use_3" name="office_use_3" value="<?php echo $use_3; ?>" <?php echo $checked; ?> />
													<label for="box<?php echo $office_3L++ ?>"><?php  echo $use_3; ?></label>
												</div>
											</div>
									<?php
										}
									?>


								<!-- 	<div class="Office-checks">
										<div class="checkbox">
											<input id="box13" type="checkbox" />
											<label for="box13">Yes</label>
										</div>
									</div>
									<div class="Office-checks">
										<div class="checkbox">
											<input id="box14" type="checkbox" />
											<label for="box14">No</label>
										</div>
									</div> -->
								</div>
								<br class="clearfix">
							</div>


							<div class="col-sm-4">

								<label class="sign-pti" style="margin-left: -19px;">Optimistic Futures Representative Name</label>
								<input disabled="" type="text" id="" style="margin-left: 245px; z-index: 1111;" class="form-control formpti1 required">

							</div>

							<div class="col-sm-4">
								<div class="" style="position: relative;">
									<label class="sign-pti" style="position: absolute; left: 135px; top: 7px; z-index: 0;">Signature</label>
									<input disabled="" type="text" id="" style="position: absolute; right: -80px; width: 121px;" class="form-control formpti1 required">
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<label class="sign-pti" style="margin-left: 58px;">Date</label>
									<input disabled="" type="text" id="" class="form-control formpti1 required">
								</div>
							</div>

					</form>
				</div>


			</div>
		</div>
		<div class="col-md-12 col-sm-12 Add_details">
			<center>
				<button class="btn btn-default Submit_Button" onclick="hello(); submitForm();">SUBMIT</button>
			</center>
			 <!-- id="create_pdf" -->
		</div>
	</section>
	<!-- Welcome_Classic Closed -->


			






	<style type="text/css">
		.Welcome_Classic p {
			font-size: 14px;
			line-height: 14px;
			color: #000;
		}

		.Appy-formy {
			width: 850px;
		}

		.Appy-formy ul {
			margin: 0 0 0 20px;
			padding: 0;
			font-size: 14px;
			color: #000;
		}

		.Appy-formy ul li {
			padding-bottom: 5px;
			/*list-style: disc;*/
			line-height: 18px;
		}

		.Add_details label {
			color: #000;
		}

		.pti1 {
			width: 162px;
			float: left;
		}

		.pti2 {
			width: 681px;
		}

		.input-field-box {
			width: 33px;
			padding: 2px;
		}

		.Add_details label {
			/*text-transform: lowercase;*/
			font-size: 12px;
		}

		.pti3 {
			width: 374px;
			float: left;
		}

		.pti4 {
			width: 132px;
			float: right;
		}

		.formpti1 {
			border-top: none;
			border-left: none;
			border-right: none;
			border-bottom: 1px dotted;
			width: 148px;
			margin-left: 91px;
		}

		.sign-pti {
			position: absolute;
			bottom: 3px;
		}

		.form-group {
			margin-bottom: 0;
		}

		.Appy-formy .highlight {
			padding: 5px 20px;
		}

		#divtoconvert input[type=text] {
			color: black;
			font-weight: bold;
			text-transform: uppercase;
			font-size: 12px;
		}
	</style>


<script type="text/javascript">
				// let av[];
				
	$(document).ready(function () {
		console.log('hello world....!!');
		var surname, givenname, studentUsiData;
		var chkOffice_use_1Selected = "";
		var chkOffice_use_2Selected = ""; 
		var chkOffice_use_3Selected ="";
		// make an object and store value in an object
		studentUsiData = new Object();

					$('.input-field-box').keyup(function () {
						//focus changes
						if ($(this).val().length == $(this).attr("maxlength")) {
							$(this).next().focus();
						}
					});

					$('.office_use_1').change(function(){
						if($(this).val()=='Yes'){
							$('#box10').attr('checked', false);
							chkOffice_use_1Selected = $("#box9").val();
						}else if($(this).val()=='No'){
							$('#box9').attr('checked', false);
							chkOffice_use_1Selected = $("#box10").val();
						}else if($(this).val() !='Yes' && $(this).val() !='No') {
							chkOffice_use_1Selected = "";
						}
					});

					$('.office_use_2').change(function(){
						if($(this).val()=='Yes'){
							$('#box12').attr('checked', false);
							chkOffice_use_2Selected = $("#box11").val();
						}else if($(this).val()=='No'){
							$('#box11').attr('checked', false);
							chkOffice_use_2Selected = $("#box12").val();
						}else if($(this).val() !='Yes' && $(this).val() !='No') {
							chkOffice_use_2Selected = "";
						}
					});

					$('.office_use_3').change(function(){
						if($(this).val()=='Yes'){
							$('#box14').attr('checked', false);
							chkOffice_use_3Selected = $("#box13").val();
						}else if($(this).val()=='No'){
							$('#box13').attr('checked', false);
							chkOffice_use_3Selected = $("#box14").val();
						}else if($(this).val() !='Yes' && $(this).val() !='No') {
							chkOffice_use_3Selected = "";
						}
					});

					

					$('.input-field-box').on('change', function(){
						//get values
						// get surname
						var one = $('#one').val();
						var two = $('#two').val();
						var three = $('#three').val();
						var four = $('#four').val();
						var five = $('#five').val();
						var six = $('#six').val();
						var seven = $('#seven').val();
						var eight = $('#eight').val();
						var nine = $('#nine').val();
						var ten = $('#ten').val();
						var eleven = $('#eleven').val();
						var twelve = $('#twelve').val();

						// get givenname
						var thirteen = $('#thirteen').val();
						var fourteen = $('#fourteen').val();
						var fifteen = $('#fifteen').val();
						var sixteen = $('#sixteen').val();
						var seventeen = $('#seventeen').val();
						var eighteen = $('#eighteen').val();
						var ninteen = $('#ninteen').val();
						var twenty = $('#twenty').val();
						var twentyOne = $('#twentyOne').val();
						var twentyTwo = $('#twentyTwo').val();
						var twentyThree = $('#twentyThree').val();
						var twentyFour = $('#twentyFour').val();

						// get middle name 
						var twentyFive = $('#twentyFive').val();
						var twentySix = $('#twentySix').val();
						var twentySeven = $('#twentySeven').val();
						var twentyEight = $('#twentyEight').val();
						var twentyNine = $('#twentyNine').val();
						var thirty = $('#thirty').val();
						var thirtyOne = $('#thirtyOne').val();
						var thirtyTwo = $('#thiryTwo').val();
						var thirtyThree = $('#thirtyThree').val();
						var thirtyFour = $('#thirtyFour').val();
						var thirtyFive = $('#thirtyFive').val();
						var thirtySix = $('#thirtySix').val();

						// get date of birth
						var thirtySeven = $('#thirtySeven').val();
						var thirtyEight = $('#thirtyEight').val();
						var thirtyNine = $('#thirtyNine').val();
						var fourty = $('#fourty').val();
						var fortyOne = $('#fortyOne').val();
						var fortyTwo = $('#fortyTwo').val();
						var fortyThree = $('#fortyThree').val();
						var fortyFour = $('#fortyFour').val();
						var fortyFive = $('#fortyFive').val();
						var fortySix = $('#fortySix').val();
						var fortySeven = $('#fortySeven').val();
						var fortyEight = $('#fortyEight').val();

						// get country of birth
						var fortyNine = $('#fortyNine').val();
						var fifty = $('#fifty').val();
						var fiftyOne = $('#fiftyOne').val();
						var fiftyTwo = $('#fiftyTwo').val();
						var fiftyThree = $('#fiftyThree').val();
						var fiftyFour = $('#fiftyFour').val();
						var fiftyFive = $('#fiftyFive').val();
						var fiftySix = $('#fiftySix').val();
						var fiftySeven = $('#fiftySeven').val();
						var fiftyEight = $('#fiftyEight').val();
						var fiftyNine = $('#fiftyNine').val();
						var sixty = $('#sixty').val();

						// get town of birth
						var sixtyOne = $('#sixtyOne').val();
						var sixtyTwo = $('#sixtyTwo').val();
						var sixtyThree = $('#sixtyThree').val();
						var sixtyFour = $('#sixtyFour').val();
						var sixtyFive = $('#sixtyFive').val();
						var sixtySix = $('#sixtySix').val();
						var sixtySeven = $('#sixtySeven').val();
						var sixtyEight = $('#sixtyEight').val();
						var sixtyNine = $('#sixtyNine').val();
						var seventy = $('#seventy').val();
						var seventyOne = $('#seventyOne').val();
						var seventyTwo = $('#seventyTwo').val();

						// get country
						var seventyThree = $('#seventyThree').val();
						var seventyFour = $('#seventyFour').val();
						var seventyFive = $('#seventyFive').val();
						var seventySix = $('#seventySix').val();
						var seventySeven = $('#seventySeven').val();
						var seventyEight = $('#seventyEight').val();
						var seventyNine = $('#seventyNine').val();
						var eighty = $('#eighty').val();
						var eightyOne = $('#eightyOne').val();
						var eightyTwo = $('#eightyTwo').val();
						var eightyThree = $('#eightyThree').val();
						var eightyFour = $('#eightyFour').val();

						// get mobile number
						var eightyFive = $('#eightyFive').val();
						var eightySix = $('#eightySix').val();
						var eightySeven = $('#eightySeven').val();
						var eightyEight = $('#eightyEight').val();
						var eightyNine = $('#eightyNine').val();
						var ninty = $('#ninty').val();
						var nintyOne = $('#nintyOne').val();
						var nintyTwo = $('#nintyTwo').val();
						var nintyThree = $('#nintyThree').val();
						var nintyFour = $('#nintyFour').val();
						var nintyFive = $('#nintyFive').val();
						var nintySix = $('#nintySix').val();

						// get email address
						var nintySeven = $('#nintySeven').val();
						var nintyEight = $('#nintyEight').val();
						var nintyNine = $('#nintyNine').val();
						var hundred = $('#hundred').val();
						var hundredOne = $('#hundredOne').val();
						var hundredTwo = $('#hundredTwo').val();
						var hundredThree = $('#hundredThree').val();
						var hundredFour = $('#hundredFour').val();
						var hundredFive = $('#hundredFive').val();
						var hundredSix = $('#hundredSix').val();
						var hundredSeven = $('#hundredSeven').val();
						var hundredEight = $('#hundredEight').val();
						var hundredNine = $('#hundredNine').val();
						var hundredTen = $('#hundredTen').val();
						var hundredEleven = $('#hundredEleven').val();
						var hundredTwelve = $('#hundredTwelve').val();
						var hundredThirteen = $('#hundredThirteen').val();
						var hundredForteen = $('#hundredForteen').val();
						var hundredFifteen = $('#hundredFifteen').val();
						var hundredSixteen = $('#hundredSixteen').val();
						var hundredSeventeen = $('#hundredSeventeen').val();
						var hundredEighteen = $('#hundredEighteen').val();
						var hundredNinteen = $('#hundredNinteen').val();
						var hundredTwenty = $('#hundredTwenty').val();

						// get usi
						var hundredTwentyOne = $('#hundredTwentyOne').val();
						var hundredTwentyTwo = $('#hundredTwentyTwo').val();
						var hundredTwentyThree = $('#hundredTwentyThree').val();
						var hundredTwentyFour = $('#hundredTwentyFour').val();
						var hundredTwentyFive = $('#hundredTwentyFive').val();
						var hundredTwentySix = $('#hundredTwentySix').val();
						var hundredTwentySeven = $('#hundredTwentySeven').val();
						var hundredTwentyEight = $('#hundredTwentyEight').val();
						var hundredTwentyNine = $('#hundredTwentyNine').val();
						var hundredThirty = $('#hundredThirty').val();
						var hundredThirtyOne = $('#hundredThirtyOne').val();
						var hundredThirtyTwo = $('#hundredThirtyTwo').val();



						// surname
						surname = one+two+three+four+five+six+seven+eight+nine+ten+eleven+twelve;
						// givername
						givenname = thirteen+fourteen+fifteen+sixteen+seventeen+eighteen+ninteen+twenty+twentyOne+twentyTwo+twentyThree+twentyFour;
						// middile name
						middle_name = twentyFive+twentySix+twentySeven+twentyEight+twentyNine+thirty+thirtyOne+thirtyTwo+thirtyThree+thirtyFour+thirtyFive+thirtySix;
						// date_of_birth
						date_of_birth = thirtySeven+thirtyEight+thirtyNine+fourty+fortyOne+fortyTwo+fortyThree+fortyFour+fortyFive+fortySix+fortySeven+fortyEight;
						// country of birth
						country_of_birth = fortyNine+fifty+fiftyOne+fiftyTwo+fiftyThree+fiftyFour+fiftyFive+fiftySix+fiftySeven+fiftyEight+fiftyNine+sixty;
						// town of birth
						town_of_birth = sixtyOne+sixtyTwo+sixtyThree+sixtyFour+sixtyFive+sixtySix+sixtySeven+sixtyEight+sixtyNine+seventy+seventyOne+seventyTwo;
						// country
						country = seventyThree+seventyFour+seventyFive+seventySix+seventySeven+seventyEight+seventyNine+eighty+eightyOne+eightyTwo+eightyThree+eightyFour;
						// mobile number
						mobile_no = eightyFive+eightySix+eightySeven+eightyEight+eightyNine+ninty+nintyOne+nintyTwo+nintyThree+nintyFour+nintyFive+nintySix;
						// email address
						email_address = nintySeven+nintyEight+nintyNine+hundred+hundredOne+hundredTwo+hundredThree+hundredFour+hundredFive+hundredSix+hundredSeven+hundredEight+hundredNine+hundredTen+hundredEleven+hundredTwelve+hundredThirteen+hundredForteen+hundredFifteen+hundredSixteen+hundredSeventeen+hundredEighteen+hundredNinteen+hundredTwenty;
						// usi
						usi = hundredTwentyOne+hundredTwentyTwo+hundredTwentyThree+hundredTwentyFour+hundredTwentyFive+hundredTwentySix+hundredTwentySeven+hundredTwentyEight+hundredTwentyNine+hundredThirty+hundredThirtyOne+hundredThirtyTwo;

						// console.log("surname",surname, "givenname", givenname);

						// usi application
						var chkIdentification_usi_applicationArray = [];
						$(".identification_usi_application:checked").each(function() {
							chkIdentification_usi_applicationArray.push($(this).val());
						});
						var identification_usi_applicationSelected;
							identification_usi_applicationSelected = chkIdentification_usi_applicationArray.join(', ');

						// var chkOffice_use_1Array = [];
						// $(".office_use_1:checked").each(function(){
						// 	chkOffice_use_1Array.push($(this).val());
						// });

						// var chkOffice_use_1Selected;
						// chkOffice_use_1Selected = chkOffice_use_1Array.join(',');

						// console.log(chkOffice_use_1Selected);

						// get student name
						var studentName = $('#studentName').val();

						// store in object
						studentUsiData.surname = surname;
						studentUsiData.given_name = givenname;
						studentUsiData.middle_name = middle_name;
						studentUsiData.date_of_birth = date_of_birth;
						studentUsiData.country_of_birth = country_of_birth;
						studentUsiData.town_of_birth = town_of_birth;
						studentUsiData.country = country;
						studentUsiData.contact = mobile_no;
						studentUsiData.email = email_address;
						studentUsiData.usi = usi;
						studentUsiData.identification_usi_application = identification_usi_applicationSelected;
						studentUsiData.student_name = studentName;
						studentUsiData.office_use_1 = chkOffice_use_1Selected;
						// console.log(chkOffice_use_2Selected);
						studentUsiData.office_use_2 = chkOffice_use_2Selected;
						studentUsiData.office_use_3 = chkOffice_use_3Selected;

						// save into session
						sessionStorage.setItem("studentUsiData", JSON.stringify(studentUsiData));
					});


					// check the user action if focus lose trigger this
					var hidden, visibilityChange; 
					if (typeof document.hidden !== "undefined") { // Opera 12.10 and Firefox 18 and later 	support 

						  hidden = "hidden";
						  visibilityChange = "visibilitychange";
						} else if (typeof document.msHidden !== "undefined") {
						  hidden = "msHidden";
						  visibilityChange = "msvisibilitychange";
						} else if (typeof document.webkitHidden !== "undefined") {
						  hidden = "webkitHidden";
						  visibilityChange = "webkitvisibilitychange";
						}

						// If the page is hidden, send data to database;
						// if the page is shown, save the data into variables

					function handleVisibilityChange() {
						if (document[hidden]) {
						    // send data to database
						    var studentUsiData = sessionStorage.getItem("studentUsiData");
							// if(!studentUsiData){
							// 		sessionStorage.setItem('studentUsiData', JSON.stringify({}))
							// 	}
						    var studentUsiData = JSON.parse(studentUsiData);
						     console.log("===",studentUsiData);
						     console.log("hello");
						    $.ajax({
							type: 'POST',
							data: {studentUsiData: studentUsiData},
							url: '<?php echo site_url('ApplicationForms/form_apply1_submit_data') ?>',
							success: function(result){
					    		$('#returnResult').html(result);
					    	},
						})
						  } else {
						    // videoElement.play();
						    // console.log("Hello");
						  }
					}

					if (typeof document.addEventListener === "undefined" || hidden === undefined) {
						console.log("This demo requires a browser, such as Google Chrome or Firefox, that supports the Page Visibility API.");
					} else {
						// Handle page visibility change   
  						document.addEventListener(visibilityChange, handleVisibilityChange, false);
					} 

					// also send data to database when page refreshes

				
					
					
				
				});

</script>
			

	<script src='<?php echo base_url(); ?>ofpdfs/f1/form.js'></script>
	<script src='<?php echo base_url(); ?>ofpdfs/f1/pdfmake.min.js'></script>
    <script src='<?php echo base_url(); ?>ofpdfs/f1/vfs_fonts.js'></script>