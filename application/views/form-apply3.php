<!-- Header files -->
<!-- Animate.css -->
<!-- <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>css/animate.css">
<link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>steps/css/normalize.css">
<link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>steps/css/jquery.steps.css"> -->
<!-- All pages css -->
<!-- <link href="<?php echo FRONTEND_ASSETS; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo FRONTEND_ASSETS; ?>css/style-student-profile-form.css"
rel="stylesheet">
<link href="<?php echo FRONTEND_ASSETS; ?>css/styles.css?2" rel="stylesheet">
<link href="<?php echo FRONTEND_ASSETS; ?>css/jquery.fancybox.css?1" rel="stylesheet">
<link href="<?php echo FRONTEND_ASSETS; ?>css/media_queries.css" rel="stylesheet"> -->
<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/style.css" rel="stylesheet">

<!-- End header Files -->


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<!-- Bootstrap -->
<!-- <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/bootstrap.min.css" rel="stylesheet">
<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/style-student-profile-form.css" rel="stylesheet">
<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/styles.css?2" rel="stylesheet">
<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/jquery.fancybox.css?1" rel="stylesheet">
<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/media_queries.css" rel="stylesheet">         -->

<!-- Animate.css -->

<!-- <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/animate.css">    -->



<!-- 4step form.css -->

<!-- <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/steps/css/normalize.css">

<link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/steps/css/jquery.steps.css"> -->



<!-- WEB FONT -->

<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:500,600,800,400' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<style>
.border-bottom-only {
    border: 0;
    outline: 0;
    background: transparent;
    border-bottom: 1px solid black;
    border-radius: 0px;
}

.border-bottom-only:hover {
    border: 0;
    outline: 0;
    background: transparent;
    border-bottom: 1px solid black;
}

.top_social,
.top_social>a {
    padding: 0px !important;
    margin: 0px !important;

}

.top_social>a {
    margin: 2% 1% 2% 1% !important;
    display: inline-block;
}

.nav {
    padding: 0px;
    margin: -5px;
}
.font26 {
    font-size:26px !important;
    font-weight: 1200 !important;
}
.btncircleMange {
    padding: 2px !important;

}
.saveButton{
    z-index:0 !important;
    padding-top:300px !important;
    padding-bottom:400px !important;
}
</style>

<!-- <script>
function submitForm() {
    console.log("submitted");
    $.ajax({
        type: 'POST',
        data: {
            form_submitted: "Submitted"
        },
        url: '<?php echo site_url('
            ApplicationForms / form_apply3_submitted ') ?>',
        success: function(result) {
            alert("form submitted");
            window.location.replace(
                '<?php echo base_url("application-form.html") ?>');
        },
        error: function(err) {
            alert("Form not submit please try again");
        }
    });
}
</script> -->

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

<!-- Head_Titles Closed -->
<section  class="Section_Devs Welcome_Classic Optim-Form0s">
    <div  class="container" style="background-color: white; ">
        <form method="post" action="<?php echo site_url('ApplicationForms/form_apply3_enrolmentCourse2 '); ?>" id="formSubmit">
        <div class="row">
        <div class='col-md-11' id="pdfdownload">
            <!-- first row start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                        <h1 class="display-4"><strong>ENROLMENT AGREEMENT FORM</strong></h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h5 style="margin-top:-14px;" class="ml-2"><strong>OPTIMISTIC FUTURES PTY LTD TOID: 41053</strong></h5>
                    </div>
                    <h3  class="text-dark bg-white p-0 font26">STUDENT INFORMATION SHEET</h3>
                    <strong>Please read this Information Sheet before completing the Application Form.</strong>
                    <p>An Application Form is required to be completed as part of the Enrolment Process into any
                        qualifcation. All sections
                        <strong> MUST </strong> be answered.
                        <strong> Your application cannot proceed without its completion. </strong></p>
                    <p>A Language, Literacy and Numeracy Test & Pre-Training Review will be conducted as part of the
                        Application Process. Student
                        who are enrolling in government subsidised training are required to complete eligibility form
                        and other relevant paper
                        work as required by relevant funding contract.</p>
                    <p>Optimistic Futures Pty Ltd encourages Recognition of Prior Learning and recognizes
                        qualifications and statement of Attainment
                        issued by other RTOs for credit transfer purposes.</p>

                    <p>This form is to be completed by
                        <strong>the student</strong>. Student may ask questions from the concerned staff if need any
                        help in completing this form.</p>

                    <p>As part of the enrolment process all Optimistic Futures - Authorised Delegates will ensure that
                        applicants are aware of the
                        consequences arising from a false, misleading or an incomplete declaration, including the
                        possible withdrawal of any
                        government subsidised training offer and/or the cancellation of enrolment.</p>
                </div>
            </div>

            <!-- question 1 -->
            <div class="row">
                <div class="col-md-12">
                    <p class="h2">1.<strong class="pl-3">Qualification and Short Courses Information</strong></p>
                    <div style="margin-left:43px;">
                        <p>Currently, Optimistic Futures Pty Ltd is delivery following Government qualifications under Skills first program. </p>
                        <strong> Qualification: </strong>
                        <p>Please tick the relevant qualification you intend to enrol in.</p>
                        <figure>
                            <table class="table table-bordered opt-centered">
                                <tbody>
                                    <tr>
                                        <th>Fee for Service</th>
                                        <th>Government Subsidised</th>
                                        <th>Code</th>
                                        <th>Title</th>
                                    </tr>
                                    <?php 
                                    if (isset($form_apply3['quatification_courses'])) {
                                        $IsCheckQualification = json_decode($form_apply3['form3']['qualification'], true);
                                        $isCheckedfos = '';
                                        $isCheckedgs  = '';


                                        foreach($form_apply3['quatification_courses'] as $qCourse) {
                                            // $isCheckedCode = (array_key_exists($qCourse['code'],$IsCheckQualification))? 'checked' : NULL;
                                            // var_dump($isCheckedcode, array_key_exists($qCourse['code'],$IsCheckQualification)); die;
                                            // var_dump($isCheckedcode);
                                            //  foreach(json_decode($form_apply3['form3']['qualification'])  as $key => $qua_value){
                                            //     $isCheckedfos = ($key == $qCourse['code'] && $qua_value->fee_for_service == true)? 'checked': null;
                                            //     $isCheckedgs  = ($key == $qCourse['code'] && $qua_value->govt_subsidised == true)? 'checked': null;
                                            // }
                                        
                                            $isCheckedfos = ($IsCheckQualification[$qCourse['code']]['fee_for_service'] == true)? 'checked': NULL;
                                            $isCheckedgs  = ($IsCheckQualification[$qCourse['code']]['gov_subsidised'] == true)? 'checked': NULL;
                                           

                                                    echo '<tr> 
                                                            <td>';
                                                                if ($qCourse['fee_for_service'] == true) {
                                                                echo    '<div class="checkbox">
                                                                            <input '.$isCheckedfos.' class="form-check-input  qualificationlimit anyTwo checkOne '.$qCourse['code'].'" name="qualification['.$qCourse['code'].'][fee_for_service]" data-checklimit=".qualificationlimit" data-target=".'.$qCourse['code'].'"  type="checkbox"  value="ture">
                                                                        </div>';
                                                                } else {    echo 'X';  }
                                                    echo    '</td>
                                                            <td>';
                                                                if ($qCourse['govt_subsidised'] == true) {
                                                                    echo    '<div class="checkbox">
                                                                                <input '.$isCheckedgs.' class="form-check-input qualificationlimit anyTwo checkOne '.$qCourse['code'].'" name="qualification['.$qCourse['code'].'][gov_subsidised]" data-checklimit=".qualificationlimit" data-target=".'.$qCourse['code'].'"   type="checkbox"  value="false">
                                                                            </div>';
                                                                } else {    echo 'X';   }
                                                            echo '</td>
                                                            <td> ' . $qCourse['code'] . '</td>
                                                            <td> ' . $qCourse['title'] . '</td>
                                                        </tr>';
                                            }
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <figcaption class="text-center ">
                                <small>
                                    <strong> X Not being offered as a Government subsidised course.</strong>
                                </small>
                            </figcaption>
                        </figure>

                        <strong> Short Courses and Skills Set: </strong>
                        <p>Please tick the relevant Short course you intend to enrol in.</p>
                        <figure>
                            <table class="table table-bordered opt-centered">
                                <tbody>
                                    <tr>
                                        <th>Fee for Service</th>
                                        <th>Government Subsidised</th>
                                        <th>Code</th>
                                        <th>Title</th>
                                    </tr>
                                    <?php
                                    $shortCourseSkill = json_decode($form_apply3['form3']['short_courses'], true);
                                    if (isset($form_apply3['coursesShortAndSkillSet'])) {
                                        foreach ($form_apply3['coursesShortAndSkillSet'] as $qCourse) {

                                           
                                        $isCheckedShortCoursefos = ($shortCourseSkill[$qCourse['code']]['fee_for_service'] == true)? 'checked': NULL;
                                        $isCheckedShortCoursegs  = ($shortCourseSkill[$qCourse['code']]['gov_subsidised'] == true)? 'checked': NULL;
                                         

                                        echo    '<tr>
                                                    <td>';
                                                        if ($qCourse['fee_for_service'] == true) {
                                                            echo '<input '.$isCheckedShortCoursefos.' class="form-check-input" name="short_courses['.$qCourse['code'].'][fee_for_service]"  type="checkbox"  value="ture">';
                                                        } else {    echo 'X'; }
                                        echo        '</td>
                                                    <td>';
                                                        if ($qCourse['govt_subsidised'] == true) {
                                                            echo '<input '.$isCheckedShortCoursegs.' class="form-check-input"  type="checkbox"  value="false">';
                                                        } else {echo 'X';}
                                            echo    '</td>
                                                    <td> ' . $qCourse['code'] . '</td>
                                                    <td> ' . $qCourse['title'] . '</td>
                                                </tr>';
                                        }
                                    } ?>
                                </tbody>
                            </table>
                            <figcaption class="text-center ">
                                <small>
                                    <strong> X Not being offered as a Government subsidised course.</strong>
                                </small>
                            </figcaption>
                        </figure>


                        <p>General information and individual brochures including statements of fees on Optimistic Futures
                            qualifications are available
                            on our website http://www.optimisticfutures.com.au or can be obtained from reception at any of
                            the Optimistic Futures
                            Office</p>
                        <p>All Parts of this application form shall be completed after you have selected a qualification
                            for application, attempted
                            LLN test and completed Pre-Training Review.</p>
                        <p><i><strong>Note: The ‘Optimistic Futures Student Information Handbook’should be read and understood
                                prior to completing the Application
                                Form</strong></i></p>
                    </div>
                </div>
            </div>
            <!-- question 1 end -->

            <!-- question 2 -->
            <div class="row">
                <div class="col-md-12">
                    <p class="h2">2.<strong class="pl-3">Supporting Documentation</strong></p>
                    <div style="margin-left:43px;">
                        <p>Supporting documentation will be required in determining qualification entry requirements,
                            funding eligibility, fees and fee concessions and to support a Credit transfer/RPL request.</p>
                        <p>Original documents will be returned but a copy of all documentation will be retained.</p>
                        <p>Once completed, this form and the associated declarations are to be placed in the students file.</p>
                    </div>
                </div>
            </div>
            <!-- question 2 end -->

             <!-- question 3 -->
             <div class="row">
                <div class="col-md-12">
                    <p class="h2">3.<strong class="pl-3">Fee Types</strong></p>
                    <div style="margin-left:43px;">
                        <p>We offer both Fee for service and Government subsidised courses. Student enrolling in government
                            subsidised courses are required to complete Skills First eligibility form along with these documents.</p>
                        <p>Student Fees for both Government Funded qualifications and Fee for Service qualifications will
                            be assessed and levied on the basis of information supplied by the Applicant.</p>
                    </div>
                </div>
            </div>
            <!-- question 3 end -->

            <!-- question 4 -->
            <div class="row">
                <div class="col-md-12">
                    <p class="h2">4.<strong class="pl-3">Funding Eligibility - Skills First Program</strong></p>
                    <div style="margin-left:43px;">
                        <p>The Skills First Program provides subsidised training for people who do not hold a post-school
                            qualification or who want to gain a higher-level qualification than they already hold.</p>
                        <p>Eligibility for government funded subsidised training will be assessed according to specific
                            eligibility requirements.</p>
                    </div>
                </div>
            </div>
            <!-- question 4 end -->

             <!-- question 5 -->
             <div class="row">
                <div class="col-md-12">
                    <p class="h2">5.<strong class="pl-3">Victorian Student Number (VSN)</strong></p>
                    <div style="margin-left:43px;">
                        <p>
                            The VSN is a student identification number that is assigned by the Department of Education and
                            Early Childhood Development to all students in government and non-government schools, and students in Vocational Education
                            and Training institutions. The number, which is unique to each student, is a key identifier on a studenƚ͛s school records,
                            and will remain with the student throughout his or her education, until reaching the age of 25. The VSN is nine
                            digits long, randomly assigned, and tied to identifying information about the student (name, gender and date of birth). The
                            Education and Training Reform Act 2006 requires Optimistic Futures to collect and disclose your personal information
                            for a number of purposes including the allocation to you of a Victorian Student Number and updating your personal
                            information on the Victorian Student Register.</p>
                    </div>
                </div>
            </div>
            <!-- question 5 end -->

            <!-- question 6 -->
            <div class="row">
                <div class="col-md-12">
                    <p class="h2">6.<strong class="pl-3">A Unique Student Identifier (USI)</strong></p>
                    <div style="margin-left:43px;">
                        <p> Is a reference number made up of numbers and letters that gives students access to their USI account. A USI will
                            allow an individual's USI account to be linked to the National Vocational Education and Training (VET) Data Collection
                            allowing an individual to see all of their training results from all providers including all completed training units and
                            qualifications. The Student Identifiers Act 2014, Standards for NVR Registered Training Organisations (RTO) 2014
                            and Student Identifiers Regulation 2014 require that the training Organisation: Collect a USI from each student,
                            verify a USI supplied by a student and ensure a student has a valid USI before conferring a qualification or statement
                            of attainment on that student. As of 1 January 2015, students will need to give their USI to each new training
                            Organisation they enroll with. This will normally happen at enrolment</p>
                    </div>
                </div>
            </div>
            <!-- question 6 end -->

            <!-- question 7 -->
            <div class="row">
                <div class="col-md-12">
                    <p class="h2">7.<strong class="pl-3">Surveys</strong></p>
                    <div style="margin-left:43px;">
                    <p>You may be contacted to participate in a survey conducted by NCVER or a Department-endorsed
                        project, audit or review relating to your training. This provides valuable feedback on the delivery of VET programs in Victoria.</p>
                    <p>Please note you may opt out of the NCVER survey at the time of being contacted.</p>
                    </div>
                </div>
            </div>
            <!-- question 7 end -->

             <!-- question 8 -->
             <div class="row">
                <div class="col-md-12">
                    <p class="h2">8.<strong class="pl-3">Consequence of not provide complete information:</strong></p>
                    <div style="margin-left:43px;">
                    <p>Failure to provide your personal information may mean that it is not possible for you to enrol
                        in VET and/or to obtain a Victorian Government VET subsidy.</p>
                    </div>
                </div>
            </div>
            <!-- question 8 end -->



            <!-- second row start -->
            <div class="row">
                <div class="col-md-12">
                    <h3 class="bg-dark text-white my-2">PART A : PERSONAL AND STATISTICAL DETAILS</h3>

                    <!-- row mode of study -->
                    <div class="pl-5">
                        <div class="row">
                            <div class="col-md-2">
                                <strong>Mode of Study:</strong>
                            </div>
                            <div class="col-md-10">
                                <?php
                                    $isCheckedStudyMode = $form_apply3['form3']['mode_of_study'];
                                    $mode_of_study        = $form_apply3['mode_of_study'];
                                    foreach ($mode_of_study as $studymode) {
                                        $checkedModeOfStudy = ($isCheckedStudyMode == $studymode)? 'checked': null;
                                    echo '<div class="form-check form-check-inline">
                                             <input data-target=".studyMode" name="mode_of_study" ' . $checkedModeOfStudy . ' class="form-check-input pr-3 checkOne studyMode" type="checkbox"  value="' . $studymode . '">
                                             <label data-target=".studyMode" class="form-check-label checkOne studyMode" >' . $studymode . '</label>
                                         </div>';    }?>
                            </div>
                        </div>
                    </div>
                    <!-- row mode of study end -->

                    <!-- personal details -->
                    <h3 class="text-white bg-dark">PERSONAL DETAILS (Legal name as per photo ID, which will need to be sighted to verify legal
                        name)</h3>

                    <!-- row title and gender -->
                    <div class="pl-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="col-6">
                                        <strong class="pr-3">Title:</strong>
                                        <span class="text-secondary"> (please tick one) </span>
                                    </div>
                                    <?php
                                    $isCheckedGenderTitle = $form_apply3['form3']['gender_title'];
                                    $gendertitle          = $form_apply3['gender_type'];
                                    foreach ($gendertitle as $g_title) {
                                        $IsCheckedGender = ($g_title == $isCheckedGenderTitle) ? 'checked' : '';
                                    echo'<div class="form-check form-check-inline">
                                            <input data-target=".genderTitle" name="gender_title" ' . $IsCheckedGender . ' class="form-check-input checkOne genderTitle" type="checkbox"  value="' . $g_title . '">
                                            <label data-target=".genderTitle" class="form-check-label checkOne genderTitle" >' . $g_title . '</label>
                                        </div>';    }?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex">
                                    <div class="col-6">
                                        <strong class="pr-3">Gender:</strong>
                                        <span class="text-secondary"> (please tick one) </span>

                                    </div>
                                    <?php
                                    $isCheckedGender = $form_apply3['form3']['gender'];
                                    $gendertitle     = $form_apply3['gender'];
                                    foreach ($gendertitle as $g_title) {
                                        $checked = ($g_title == $isCheckedGender) ? 'checked' : '';
                                    echo'<div class="form-check form-check-inline">
                                            <input data-target=".gender" name="gender" ' . $checked . ' class="form-check-input checkOne gender" type="checkbox"  value="' . $g_title . '">
                                            <label data-target=".gender" class="form-check-label checkOne gender" >' . $g_title . '</label>
                                         </div>';   } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row title and gender end -->

                    <!-- row first and middle name -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">First Name:</strong>
                                    <input type="text" name="first_name"
                                        value="<?php echo $form_apply3['form3']['first_name'] ?>"
                                        class="form-control border-bottom-only col-9" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">Middle Name:</strong>
                                    <input type="text" name="middle_name"
                                        value="<?php echo $form_apply3['form3']['middle_name'] ?>"
                                        class="form-control border-bottom-only col-9" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row first and middle name end -->

                    <!-- row last name and dateOfbirth -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">Last Name:</strong>
                                    <input type="text" name="last_name"
                                        value="<?php echo $form_apply3['form3']['last_name'] ?>"
                                        class="form-control border-bottom-only col-9" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">Date of Birth:</strong>
                                    <input type="date" name="data_of_birth"
                                        value="<?php echo $form_apply3['form3']['data_of_birth'] ?>"
                                        class="form-control border-bottom-only col-9" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row last name and dateOfbirth -->

                    <!--  row residential start -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-2">Residential Address:</strong>
                                    <input type="text" name="residential_address"
                                        value="<?php echo $form_apply3['form3']['residential_address'] ?>"
                                        class="form-control border-bottom-only col-10"
                                       >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row residential end -->


                    <!-- row town state postcode -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-4">
                                <div class="d-flex">
                                    <strong class="pl-3 pt-2 col-5">Suburb/Town:</strong>
                                    <input type="text" name="town"
                                        value="<?php echo $form_apply3['form3']['town'] ?>"
                                        class="form-control border-bottom-only col-8" >
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">State:</strong>
                                    <input type="text" name="state" value="<?php echo $form_apply3['form3']['state'] ?>"
                                        class="form-control border-bottom-only col-9" >
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-4">Postcode:</strong>
                                    <input type="text" name="postal_code"
                                        value="<?php echo $form_apply3['form3']['postal_code'] ?>"
                                        class="form-control border-bottom-only col-8" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row last name and dateOfbirth -->

                    <!--  row emergency details -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-2">Postal Address:</strong>
                                    <input type="text" name="postal_address"
                                        value="<?php echo $form_apply3['form3']['postal_address'] ?>"
                                        class="form-control border-bottom-only col-10">
                                </div>
                                    <span style="margin-left:300px;" class='text-muted'>only if different from Residential Address</span>
                            </div>
                        </div>
                    </div>
                    <!--  row Postal end -->

                    <!-- row town state postcode -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-4">
                                <div class="d-flex">
                                    <strong class="pl-3 pt-2 col-5">Home phone:</strong>
                                    <input type="text" name="phone_number"
                                        value="<?php echo $form_apply3['form3']['phone_number'] ?>"
                                        class="form-control border-bottom-only col-8" >
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">Mobile:</strong>
                                    <input type="text" name="mobile_number"
                                        value="<?php echo $form_apply3['form3']['mobile_number'] ?>"
                                        class="form-control border-bottom-only col-9">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">Fax:</strong>
                                    <input type="text" name="fax" value="<?php echo $form_apply3['form3']['fax'] ?>"
                                        class="form-control border-bottom-only col-9" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row last name and dateOfbirth -->


                    <!--  row email method start -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-1">Email:</strong>
                                    <input type="text" name="email" value="<?php echo $form_apply3['form3']['email'] ?>"
                                        class="form-control border-bottom-only col-11" >
                                </div>
                                <div class="d-flex">
                                    <strong class="pl-3 pt-2 col-4">Preferred method of contact:</strong>
                                    <?php   $isCheckedPreferredMethod = $form_apply3['form3']['preferred_contact_method'];?>
                                    <div class="form-check form-check-inline col-3">
                                        <input name="preferred_contact_method" <?php echo ($isCheckedPreferredMethod == 'mobile_phone') ? 'checked' : ''; ?> data-target=".preferredContact" class="preferredContact checkOne  form-check-input"
                                            type="checkbox" value="mobile_phone">
                                        <label class="form-check-label" >Mobile/Home phone</label>
                                    </div>
                                    <div class="form-check form-check-inline col-3">
                                        <input name="preferred_contact_method" <?php echo ($isCheckedPreferredMethod == 'email') ? 'checked' : ''; ?> data-target=".preferredContact" class="preferredContact checkOne form-check-input"
                                            type="checkbox" value="email">
                                        <label class="form-check-label" >Email</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row email method  end -->

                    <br class="clearfix">
                    <h3 class="text-white bg-dark">EMERGENCY CONTACT DETAILS</h3>

                    <!-- row name and relation -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-2">Name:</strong>
                                    <input type="text" name="ec_name"
                                        value="<?php echo $form_apply3['form3']['ec_name'] ?>"
                                        class="form-control border-bottom-only col-10" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">Relationship:</strong>
                                    <input type="text" name="ec_relation"
                                        value="<?php echo $form_apply3['form3']['ec_relation'] ?>"
                                        class="form-control border-bottom-only col-9" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row name and relation -->

                    <!-- row name and relation -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-4">Home Number:</strong>
                                    <input type="text" name="ec_home_number"
                                        value="<?php echo $form_apply3['form3']['ec_home_number'] ?>"
                                        class="form-control border-bottom-only col-8">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">Mobile:</strong>
                                    <input type="text" name="ec_mobile_number"
                                        value="<?php echo $form_apply3['form3']['ec_mobile_number'] ?>"
                                        class="form-control border-bottom-only col-9">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row name and relation -->

                    <!--  row emergency details -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex justify-content-between">
                                    <p class=" pl-3 pt-2 col-9">
                                        <strong class="pr-4">In the event of an emergency, do you give the RTO permission to organise
                                            emergency transport and treatment and agree to pay all costs related to the emergency?</strong>
                                        <span class="text-secondary">(please tick one)</span>
                                        <?php $isCheckedEmergencyPermision = $form_apply3['form3']['ec_emergency_preferred']; ?>
                                    <div class="form-check form-check-inline ">
                                        <input name="ec_emergency_preferred" <?php echo ($isCheckedEmergencyPermision == 'yes') ? 'checked' : ''; ?>class="form-check-input checkOne emregencyPermision" data-target=".emregencyPermision"
                                            type="checkbox" value="no">
                                        <label class="form-check-label" >Mobile/Home phone</label>
                                    </div>
                                    <div class="form-check form-check-inline ">
                                        <input name="ec_emergency_preferred" <?php echo ($isCheckedEmergencyPermision == 'no')? 'checked' : ''; ?> class="form-check-input checkOne emregencyPermision" data-target=".emregencyPermision"
                                            type="checkbox" value="no">
                                        <label class="form-check-label" for="inlineCheckbox2">Email</label>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  row emergency details -->

                    <br class="clearfix">
                    <h3 class="text-white bg-dark">CONCESSION DETAILS</h3>

                    <!-- row medicare -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-4">Medicare No:</strong>
                                    <input type="text" name="c_medicare_no"
                                        value="<?php echo $form_apply3['form3']['c_medicare_no'] ?>"
                                        class="form-control border-bottom-only col-8">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">Expiry date:</strong>
                                    <input type="date" name="c_medi_expire_date"
                                        value="<?php echo $form_apply3['form3']['c_medi_expire_date'] ?>"
                                        class="form-control border-bottom-only col-9" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row medicare -->

                    <!-- row name and relation -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-4">Concession card No:</strong>
                                    <input type="text" name="c_concession_card"
                                        value="<?php echo $form_apply3['form3']['c_concession_card'] ?>"
                                        class="form-control border-bottom-only col-8">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex ">
                                    <strong class="pl-3 pt-2 col-3">Expiry date:</strong>
                                    <input type="date" name="c_concess_expire_date"
                                        value="<?php echo $form_apply3['form3']['c_concess_expire_date'] ?>"
                                        class="form-control border-bottom-only col-9" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row name and relation -->

                    <br class="clearfix">
                    <h3 class="text-white bg-dark">UNIQUE STUDENT IDENTIFIER (USI)</h3>
                    <div class="pl-4">
                        <div class="row pl-3 ">
                            <div class="col-md-7 col-7 col-sm-4">
                                <p>I give permission for Optimistic Futures Pty Ltd to access my Unique Student
                                    Identifier (USI) for the purpose of
                                    recording my results.
                                <p>
                            </div>
                            <div class="col-5 col-sm-4 col-md-5">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">USI:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="usi_name"
                                            class="form-control border-left-0 border-top-0 border-right-0 border-bottom textChange required"
                                             value="<?php echo $form_apply3['form3']['usi_name'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row pl-3 ">
                            <div class="col-md-7 col-7 col-sm-4">
                                <p>If I do not have a USI in place, I am willing for Optimistic Futures Pty Ltd to set
                                    up my USI on my behalf.
                                    <br />
                                    <strong>*Please complete the USI form attached</strong>
                                <p>
                            </div>
                            <div class="col-5 col-sm-4 col-md-5">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Signature:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="usi_signature"
                                            class="form-control border-left-0 border-top-0 border-right-0 border-bottom textChange required"
                                             value="<?php echo $form_apply3['form3']['usi_signature'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br class="clearfix">
                    <h3 class="text-white bg-dark">VICTORIAN STUDENT NUMBER (VSN)</h3>

                    <div class="pl-4">
                        <div class="row pl-3 ">
                            <div class="col-md-6 col-6 col-sm-4">
                                <p>If you are under 25 years of age ʹ you may have a VSN from pervious enrolment
                                <p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">VSN:</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="vsn_number"
                                            class="form-control border-left-0 border-top-0 border-right-0 border-bottom textChange required"
                                             value="<?php echo $form_apply3['form3']['vsn_number'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row pl-3 ">
                            <div class="col-md-6 col-6 col-sm-4">
                                <p>If you do not know your VSN number, then please state your.
                                <p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-6">
                                <div class="form-group row">
                                    <label for="twentyFive" class="col-sm-4 col-form-label">Previous School:</label>
                                    <div class="col-8">
                                        <input type="text" name="vsn_pervious_school"
                                            class="form-control border-left-0 border-top-0 border-right-0 border-bottom textChange required"
                                             value="<?php echo $form_apply3['form3']['vsn_pervious_school'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row pl-3 ">
                            <div class="col-md-6 col-6 col-sm-4">
                                <p>If new to the education sector ʹ tick the ‘new’ box
                                <p>
                            </div>
                            <div class="col-6 col-sm-4 col-md-6">
                                <div class="form-check form-check-inline">
                                    <input name="vsn_edu_sector" class="form-check-input changeOption newEducator" <?php echo ($form_apply3['form3']['vsn_edu_sector'] == 'new') ? 'checked' : ''; ?> type="checkbox" id="box21" value="new">
                                    <label class="form-check-label" for="box21">New</label>
                                </div>
                            </div>
                        </div>
                        <div class="row pl-3">
                            <div class="col-md-12">
                                <strong>This means you have never attended a Victorian School, TAFE or other Training
                                    Provider and are over the age of 25
                                    at the time of enrolment.</strong>
                            </div>
                        </div>
                    </div>

                    <br class="clearfix">
                    <h3 class="text-white bg-dark">EMPLOYMENT</h3>

                    <!-- row name and relation -->
                    <div class="pl-4 pt-2">
                        <div class="row">
                            <div class="col-12">
                                <ol type="A">
                                    <?php
                                        $employment_question = $form_apply3['employment_question'];
                                        $questionNo = 'emp_ques_a';
                                        $kecount = 1;

                                        foreach ($employment_question as $em_key => $em_value) {
                                        $em_count = 1;
                                        ?>
                                    <li class="pt-4">
                                        <?php echo $em_key; ?>
                                        <ol style="list-style-type: none;" class="pt-3">
                                            <div class="row">
                                                <?php
                                                    $total_ans = count($em_value);
                                                    $total     = ceil(12 / $total_ans);
                                                    $totals    = ceil(12 / $total);
                                                    $quest = 1;
                                                    foreach ($em_value as $answere) {
                                                    if ($em_count == 1 || $em_count == 4 || $em_count == 8 || $em_count == 12) {
                                                       
                                                        
                                                    echo "<div class='col-md-" . $totals . "'>";}
                                                    if($questionNo == 'emp_ques_a'){
                                                        $checked = ($form_apply3['form3']['emp_ques_a'] == $answere)? 'checked': NULL;
                                                     }else if($questionNo == 'emp_ques_b'){
                                                         $checked = ($form_apply3['form3']['emp_ques_b'] == $answere)? 'checked': NULL;
                                                     }else{
                                                         $checked = ($form_apply3['form3']['emp_ques_c'] == $answere)? 'checked': NULL;
                                                     }
                                                    echo '   <li>
                                                    <div class="form-check">
                                                    <input name="'.$questionNo.'" '.$checked.' class="form-check-input checkOne '.url_title($em_key, 'dash', true).'" data-target=".'.url_title($em_key, 'dash', true).'"  type="checkbox" value="' . $answere . '">
                                                    <label class="form-check-label">
                                                    ' . $answere . '
                                                    </label>
                                                    </div>
                                                    </li>';
                                                    $em_count++;
                                                    if ($em_count == 4 || $em_count == 8 || $em_count == 12) {echo "</div>"; }
                                                    }?>
                                            </div>
                                        </ol>
                                    </li>
                                    <?php $kecount++; $questionNo = ($kecount == 2)? 'emp_ques_b' : 'emp_ques_c'; }?>
                                </ol>
                            </div>
                        </div>
                    </div>





<br class="clearfix">
<h3 class="text-white bg-dark">EMPLOYMENT DETAILS (if applicable)</h3>

<!-- row name and relation -->
<div class="pl-4 pt-2">
    <div class="row">
        <div class="col-6">
            <div class="d-flex ">
                <strong class="pl-3 pt-2 col-3">Organisation:</strong>
                <input type="text" name="ed_organisation"
                    value="<?php echo $form_apply3['form3']['ed_organisation'] ?>"
                    class="form-control border-bottom-only col-9">
            </div>
        </div>
        <div class="col-6">
            <div class="d-flex ">
                <strong class="pl-3 pt-2 col-2">Expiry date:</strong>
                <input type="date" name="ed_expire_date"
                    value="<?php echo $form_apply3['form3']['ed_expire_date'] ?>"
                    class="form-control border-bottom-only col-10">
            </div>
        </div>
    </div>
</div>
<!-- row name and relation -->


<!-- row name and relation -->
<div class="pl-4 pt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex ">
                <strong class="pl-3 pt-2 col-1">Address:</strong>
                <input type="text" name="ed_address"
                    value="<?php echo $form_apply3['form3']['ed_address'] ?>"
                    class="form-control border-bottom-only col-11">
            </div>
        </div>
    </div>
</div>
<!-- row name and relation -->


<!-- row name and relation -->
<div class="pl-4 pt-2">
    <div class="row">
        <div class="col-6">
            <div class="d-flex ">
                <strong class="pl-3 pt-2 col-3">Telephone:</strong>
                <input type="text" name="ed_telephone"
                    value="<?php echo $form_apply3['form3']['ed_telephone'] ?>"
                    class="form-control border-bottom-only col-9">
            </div>
        </div>
        <div class="col-6">
            <div class="d-flex ">
                <strong class="pl-3 pt-2 col-2">ABN:</strong>
                <input type="text" name="ed_abn"
                    value="<?php echo $form_apply3['form3']['ed_abn'] ?>"
                    class="form-control border-bottom-only col-10">
            </div>
        </div>
    </div>
</div>
<!-- row name and relation -->

<br class="clearfix">
<h3 class="text-white bg-dark">SCHOOLING</h3>

<!-- row name and relation -->
<div class="pl-4 pt-2">
    <div class="row">
        <div class="col-12">
            <div class="d-flex ">
                <p class="pl-3 pt-2 ">What is your highest COMPLETED school Level:
                    <span class="pl-3 text-secondary"> Tick ONE box only</span>
                </p>
            </div>
            <div class="pl-3 pt-2">
                <div class="row">
                    <?php
    $school_equ = $form_apply3['school_equivalent'];
    $count      = 0;
    foreach ($school_equ as $key => $eq) {
    if ($count == 0 || $count == 2 || $count == 4) {
        echo '<div class="col-md-4">';
    }
    //  '   <div class="col-md-4">'
        $checkeSchl =  ($key == $form_apply3['form3']['sch_grade_level'])? 'checked' : NULL;
        echo '
        <div class="form-check">
        <input class="form-check-input checkOne Schoolequva " '.$checkeSchl.' data-target=".Schoolequva" name="sch_grade_level"  type="checkbox" value="' . $key . '">
        <label class="form-check-label">
        ' . $eq . '
        </label>
        </div>
        ';
    if ($count == 1 || $count == 3 || $count == 5) {echo '</div>';}
        $count++;
    }
?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row name and relation -->

<div class="pl-3 pt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex">
                <p class="pl-3 pt-2 ">In which YEAR did you complete that Schooling
                    Level:
                    <input type="text" name="sch_complete_since"
                        value="<?php echo $form_apply3['form3']['sch_complete_since'] ?>"
                        class="border-bottom-only text-center  "
                        placeholder="School year"> e.g. 2005, 2008 etc
                </p>
            </div>
        </div>
    </div>
</div>

<div class="pl-3">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex ">
                <p class="col-4 pt-3">Are you still attending secondary school?</p>
                <div class="form-check form-check-inline col-2">
                    <input
                        <?php echo ($form_apply3['form3']['sch_stillattend'] == 'yes') ? 'checked' : ''; ?> class="form-check-input checkOne stillattendSchool"
                     name="sch_stillattend"   data-target=".stillattendSchool" type="checkbox" value="yes">
                    <label class="form-check-label" >Yes</label>
                </div>
                <div class="form-check form-check-inline col-2">
                    <input
                        <?php echo ($form_apply3['form3']['sch_stillattend'] == 'not') ? 'checked' : ''; ?>
                        name="sch_stillattend"   class="form-check-input checkOne stillattendSchool"
                        data-target=".stillattendSchool" type="checkbox" value="not">
                    <label class="form-check-label" >No</label>
                </div>
            </div>
        </div>
    </div>
</div>

    <br class="clearfix">
    <h3 class="text-white bg-dark">PREVIOUS QUALIFICATIONS ACHIEVED</h3>

    <div class="pl-4">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex ">
                    <p class="pr-2 pt-3">Have you SUCCESSFULLY completed any of the
                        following qualifications?</p>
                 
                    <div class="form-check form-check-inline col-1">
                        <input
                            <?php echo ($form_apply3['form3']['pea_qualification_completed'] == 'yes') ? 'checked' : ''; ?>class="form-check-input checkOne attendSchool"
                            name="pea_qualification_completed" data-target=".attendSchool" type="checkbox" value="yes">
                        <label class="form-check-label" >Yes</label>
                    </div>
                    <div class="form-check form-check-inline col-1">
                        <input
                            <?php echo ($form_apply3['form3']['pea_qualification_completed'] == 'not') ? 'checked' : ''; ?>
                            class="form-check-input checkOne attendSchool"
                           name="pea_qualification_completed"  data-target=".attendSchool" type="checkbox" value="not">
                        <label class="form-check-label" >No</label>
                    </div>
                    <span class="pt-3 text-secondary">if Yes, please tick ANY applicable
                        boxes</span>
                </div>
            </div>
        </div>
    </div>
    <div class="pl-4">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-borderless p-0">
                            <thead>
                                <tr>
                                    <th class="p-0" width="5%" scope="col">A</th>
                                    <th class="p-0" width="5%" scope="col">E</th>
                                    <th class="p-0" width="5%" scope="col">I</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $checkedPreviousAcheived = json_decode($form_apply3['form3']['pea_certification'], true); ?>
                                <tr>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_i]" <?php echo ($checkedPreviousAcheived['certificate_i'] == 'a')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate1" data-target=".certificate1" value="a" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_i]" <?php echo ($checkedPreviousAcheived['certificate_i'] == 'e')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate1" data-target=".certificate1" value="e" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_i]" <?php echo ($checkedPreviousAcheived['certificate_i'] == 'i')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate1" data-target=".certificate1" value="i" >
                                    </td>
                                    <td class="p-0">Certificate I</td>
                                </tr>
                                <tr>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_ii]" <?php echo ($checkedPreviousAcheived['certificate_ii'] == 'a')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate2" data-target=".certificate2" value="a" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_ii]" <?php echo ($checkedPreviousAcheived['certificate_ii'] == 'e')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate2" data-target=".certificate2" value="e" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_ii]" <?php echo ($checkedPreviousAcheived['certificate_ii'] == 'i')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate2" data-target=".certificate2" value="i" >
                                    </td>
                                    <td class="p-0">Certificate II</td>
                                </tr>
                                <tr>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_iii]" <?php echo ($checkedPreviousAcheived['certificate_iii'] == 'a')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate3" data-target=".certificate3 " value="a" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_iii]" <?php echo ($checkedPreviousAcheived['certificate_iii'] == 'e')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate3" data-target=".certificate3 " value="e" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_iii]" <?php echo ($checkedPreviousAcheived['certificate_iii'] == 'i')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate3" data-target=".certificate3 " value="i" >
                                    </td>
                                    <td class="p-0">Certificate III</td>
                                </tr>

                                <tr>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[trade_certificate]" <?php echo ($checkedPreviousAcheived['trade_certificate'] == 'a')? 'checked': NULL; ?> type="checkbox" class="checkOne trade-certificate" data-target=".trade-certificate" value="a" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[trade_certificate]" <?php echo ($checkedPreviousAcheived['trade_certificate'] == 'e')? 'checked': NULL; ?> type="checkbox" class="checkOne trade-certificate" data-target=".trade-certificate" value="e" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[trade_certificate]" <?php echo ($checkedPreviousAcheived['trade_certificate'] == 'i')? 'checked': NULL; ?> type="checkbox" class="checkOne trade-certificate" data-target=".trade-certificate" value="i" >
                                    </td>
                                    <td class="p-0">Certificate III (Or Trade Certificate)</td>
                                </tr>

                                <tr>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[advance_certificate]" <?php echo ($checkedPreviousAcheived['advance_certificate'] == 'a')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate4" data-target=".certificate4" value="a" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[advance_certificate]" <?php echo ($checkedPreviousAcheived['advance_certificate'] == 'e')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate4" data-target=".certificate4" value="e" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[advance_certificate]" <?php echo ($checkedPreviousAcheived['advance_certificate'] == 'i')? 'checked': NULL; ?> type="checkbox" class="checkOne certificate4" data-target=".certificate4" value="i" >
                                    </td>
                                    <td class="p-0">Certificate IV (Or Advance Certificate/Technician)</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-borderless p-0">
                            <thead>
                                <tr>
                                    <th class="p-0" width="5%" scope="col">A</th>
                                    <th class="p-0" width="5%" scope="col">E</th>
                                    <th class="p-0" width="5%" scope="col">I</th>
                                </tr>
                            </thead>
                            <tbody>
                                                    
                                <tr>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[diploma_associate]" <?php echo ($checkedPreviousAcheived['diploma_associate'] == 'a')? 'checked': NULL; ?> type="checkbox" class="checkOne assosiatecertificate" data-target=".assosiatecertificate" value="a" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[diploma_associate]" <?php echo ($checkedPreviousAcheived['diploma_associate'] == 'e')? 'checked': NULL; ?> type="checkbox" class="checkOne assosiatecertificate" data-target=".assosiatecertificate" value="e" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[diploma_associate]" <?php echo ($checkedPreviousAcheived['diploma_associate'] == 'i')? 'checked': NULL; ?> type="checkbox" class="checkOne assosiatecertificate" data-target=".assosiatecertificate" value="i" >
                                    </td>
                                    <td class="p-0">Diploma (Or Associate Diploma)</td>
                                </tr>
                                <tr>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[advance_diploma]" <?php echo ($checkedPreviousAcheived['advance_diploma'] == 'a')? 'checked': NULL; ?> type="checkbox" class="checkOne advancediploma" data-target=".advancediploma" value="a" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[advance_diploma]" <?php echo ($checkedPreviousAcheived['advance_diploma'] == 'e')? 'checked': NULL; ?> type="checkbox" class="checkOne advancediploma" data-target=".advancediploma" value="e" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[advance_diploma]" <?php echo ($checkedPreviousAcheived['advance_diploma'] == 'i')? 'checked': NULL; ?> type="checkbox" class="checkOne advancediploma" data-target=".advancediploma" value="i" >
                                    </td>
                                    <td class="p-0">Advance Diploma Or Associate Degree</td>
                                </tr>
                                <tr>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[bachelor_degree]" <?php echo ($checkedPreviousAcheived['bachelor_degree'] == 'a')? 'checked': NULL; ?> type="checkbox" class="checkOne bachelordegree" data-target=".bachelordegree" value="a" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[bachelor_degree]" <?php echo ($checkedPreviousAcheived['bachelor_degree'] == 'e')? 'checked': NULL; ?> type="checkbox" class="checkOne bachelordegree" data-target=".bachelordegree" value="e" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[bachelor_degree]" <?php echo ($checkedPreviousAcheived['bachelor_degree'] == 'i')? 'checked': NULL; ?> type="checkbox" class="checkOne bachelordegree" data-target=".bachelordegree" value="i" >
                                    </td>
                                    <td class="p-0">Bachelor Degree Or Higher Degree</td>
                                </tr>

                                <tr>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_other]" <?php echo ($checkedPreviousAcheived['certificate_other'] == 'a')? 'checked': NULL; ?> type="checkbox" class="checkOne certificateOtherthantheabove" data-target=".certificateOtherthantheabove" value="a" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_other]" <?php echo ($checkedPreviousAcheived['certificate_other'] == 'e')? 'checked': NULL; ?> type="checkbox" class="checkOne certificateOtherthantheabove" data-target=".certificateOtherthantheabove" value="e" >
                                    </td>
                                    <td class="p-0" width="5%">
                                        <input name="pea_certification[certificate_other]" <?php echo ($checkedPreviousAcheived['certificate_other'] == 'i')? 'checked': NULL; ?> type="checkbox" class="checkOne certificateOtherthantheabove" data-target=".certificateOtherthantheabove" value="i" >
                                    </td>
                                    <td class="p-0">Certificate Other Than The Above</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex">
                        <p> <strong class="pr-4"> Legends: </strong> <strong class="px-2">A:</strong> Australia <strong class="px-2">E:</strong> Australian equivalent
                            <strong class="px-2">I:</strong> International (Overseas)</p>
                </div>
            </div>
        </div>
    </div>

                                
                                
    <br class="clearfix">
    <h3 class="text-white bg-dark">LANGUAGE & CULTURAL DIVERSITY</h3>

        <!-- row title and gender -->
        <div class="pl-4">
            <div class="row">
                <div class="col-4">
                    <div class="d-flex">
                        <strong class="pr-3  ">Country of Birth:</strong>
                        <div class="form-check">
                            <input class="form-check-inputy disableInput" <?php echo ($form_apply3['form3']['lcd_country_of_birth'] == 'Australia')? 'checked': NULL; ?> data-disable="#countryOfbirth" name="lcd_country_of_birth" type="checkbox" value="Australia">
                            <label class="form-check-label">
                                Australia
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="d-flex ">
                        <strong class="pl-3 col-md-2">Others:</strong>
                        <input id="countryOfbirth" type="text" name="lcd_country_of_birth"  value="<?php echo ($form_apply3['form3']['lcd_country_of_birth'] != 'Australia')? $form_apply3['form3']['lcd_country_of_birth']: NULL; ?>" class="form-control border-bottom-only col-md-10" placeholder="Others">
                    </div>
                </div>
            </div>
        </div>
        <!-- row title and gender end -->

        <!-- row title and gender -->
        <div class="pl-4 mt-2">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex ">
                        <strong class="pt-2 pr-2">City of birth:</strong>
                        <input type="text" name="lcd_city_of_birth" value="<?php echo $form_apply3['form3']['lcd_city_of_birth']; ?>" class="form-control border bottom-only col-md-10">
                    </div>
                </div>
            </div>
        </div>
        <!-- row title and gender end --> 

        <!-- row title and gender -->
        <div class="pl-4 pt-3">
            <div class="row">
                <div class="col-12">
                    <strong><u>Citizenship Status:</u></strong>
                </div>
                <div class="col-12">
                    <?php foreach($form_apply3['citizen_status'] as $citzenStatus){
                        $checkedCititzenStatus = ($form_apply3['form3']['lcd_citizenship_status'] == $citzenStatus)? 'checked': NULL; 
                        echo'
                        <div class="form-check form-check-inline pr-2">
                            <input name="lcd_citizenship_status" '.$checkedCititzenStatus.' class="form-check-input checkOne citizenstatus" data-target=".citizenstatus" type="checkbox" value="'.$citzenStatus.'">
                            <label class="form-check-label" >'.$citzenStatus.'</label>
                        </div>
                    ';}?>
                </div>
            </div>
        </div>
    <!-- row title and gender end -->

        <!-- row title and gender -->
        <div class="pl-4 pt-4">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex">
                        <p >Please State your Visa Classification (if applicable) e.g. Visa Subclass 457:
                            <div class="form-group">
                                <input type="text" name="lcd_visa_classification" value="<?php echo $form_apply3['form3']['lcd_visa_classification']; ?>" style="width:465px;" class="form-contro text-center border-bottom-only" >
                                <small  class="form-text text-center text-muted">Attach evidence with the form</small>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>  
        <!-- row title and gender end -->

        <!-- row title and gender -->
        <div class="pl-4 pt-3">
            <div class="row">
                <div class="col-md-6">
                    Do you speak a Language other than English at home:
                </div>
                <div class="col-md-6">
                    <div class="form-check form-check-inline px-4">
                        <input name="lcd_speak_english" <?php echo ($form_apply3['form3']['lcd_speak_english'] == 'yes')? 'checked':NULL; ?> class="form-check-input speakLanguageAtHomees checkOne" data-target=".speakLanguageAtHomees" type="checkbox" value="yes">
                        <label class="form-check-label">No, only English</label>
                    </div>
                    <div class="form-check form-check-inline px-4">
                        <input <?php echo ($form_apply3['form3']['lcd_speak_english'] != 'yes' && $form_apply3['form3']['lcd_speak_english']  != NULL)? 'checked':NULL; ?> class="form-check-input speakLanguageAtHomees checkOne" data-target=".speakLanguageAtHomees" type="checkbox" value="yes">
                        <label class="form-check-label">Yes 
                            <input type="text" name="lcd_speak_english" placeholder="please specify" class="text-center border-bottom-only" value="<?php echo ($form_apply3['form3']['lcd_speak_english'] != 'yes')? $form_apply3['form3']['lcd_speak_english']:NULL; ?>" >
                        </label>
                    </div>
                </div>
            </div>
        </div>
    <!-- row title and gender end -->

        <!-- row title and gender -->
        <div class="pl-4 pt-3">
            <div class="row">
                <div class="col-md-4">
                    How well do you speak English:
                </div>
                <div class="col-md-8">
                    <div class="form-check form-check-inline px-4">
                        <input name="lcd_speak_english_status" class="form-check-input speakLanguageWell checkOne" <?php echo ($form_apply3['form3']['lcd_speak_english_status'] == 'very_well')? 'checked': NULL; ?>  data-target=".speakLanguageWell" type="checkbox"  value="very_well">
                        <label class="form-check-label">Very Well</label>
                    </div>
                    <div class="form-check form-check-inline px-4">
                        <input name="lcd_speak_english_status" class="form-check-input speakLanguageWell checkOne" <?php echo ($form_apply3['form3']['lcd_speak_english_status'] == 'well')? 'checked': NULL; ?>  data-target=".speakLanguageWell" type="checkbox"  value="well">
                        <label class="form-check-label">Well</label>
                    </div>
                    <div class="form-check form-check-inline px-4">
                        <input name="lcd_speak_english_status" class="form-check-input speakLanguageWell checkOne" <?php echo ($form_apply3['form3']['lcd_speak_english_status'] == 'not_well')? 'checked': NULL; ?>  data-target=".speakLanguageWell" type="checkbox"  value="not_well">
                        <label class="form-check-label">Not Well</label>
                    </div>
                    <div class="form-check form-check-inline px-4">
                        <input name="lcd_speak_english_status" class="form-check-input speakLanguageWell checkOne" <?php echo ($form_apply3['form3']['lcd_speak_english_status'] == 'not_at_all')? 'checked': NULL; ?>  data-target=".speakLanguageWell" type="checkbox"  value="not_at_all">
                        <label class="form-check-label">Not at all</label>
                    </div>
                </div>
            </div>
        </div>
    <!-- row title and gender end -->
        

        <!-- row title and gender -->
        <div class="pl-4 pt-3">
            <div class="row">
                <div class="col-md-5">
                Are you of Aboriginal or Torres Strait Islander origin?
                </div>
                <div class="col-md-7">
                    <div class="form-check form-check-inline px-4">
                        <input name="lcd_islander_origin" class="form-check-input islanderOrigin checkOne" <?php echo ($form_apply3['form3']['lcd_islander_origin'] == 'no')? 'checked': NULL; ?> data-target=".islanderOrigin" type="checkbox" value="no">
                        <label class="form-check-label">No</label>
                    </div>
                    <div class="form-check form-check-inline px-4">
                        <input name="lcd_islander_origin" class="form-check-input islanderOrigin checkOne" <?php echo ($form_apply3['form3']['lcd_islander_origin'] == 'yes_aboriginal')? 'checked': NULL; ?> data-target=".islanderOrigin" type="checkbox" value="yes_aboriginal">
                        <label class="form-check-label">Yes, Aboriginal</label>
                    </div>
                    <div class="form-check form-check-inline px-4">
                        <input name="lcd_islander_origin" class="form-check-input islanderOrigin checkOne" <?php echo ($form_apply3['form3']['lcd_islander_origin'] == 'yes_torres')? 'checked': NULL; ?> data-target=".islanderOrigin" type="checkbox" id="inlineCheckbox3" value="yes_torres">
                        <label class="form-check-label">Yes, Torres Strait Islander</label>
                    </div>
                    <div class="form-check form-check-inline px-4">
                        <input name="lcd_islander_origin" class="form-check-input islanderOrigin checkOne" <?php echo ($form_apply3['form3']['lcd_islander_origin'] == 'yes_both')? 'checked': NULL; ?> data-target=".islanderOrigin" type="checkbox" value="yes_both">
                        <label class="form-check-label">Yes, Both</label>
                    </div>
                </div>
            </div>
        </div>
    <!-- row title and gender end -->

        
        <br class="clearfix">
        <h3 class="text-white bg-dark">DISABILITY</h3>

        <!-- row title and gender -->
        <div class="pl-4 pt-3">
            <div class="row">
                <div class="col-md-7">
                    Do you consider yourself to have a disability, impairment or long-term condition?
                </div>
                <div class="col-md-5">
                    <div class="form-check form-check-inline px-4">
                        <input name="disable_consider_yourself" <?php echo ($form_apply3['form3']['disable_consider_yourself'] == 'yes')? 'checked': NULL; ?> class="form-check-input speakLanguageAtHome checkOne" data-target=".speakLanguageAtHome" type="checkbox" value="yes">
                        <label class="form-check-label">Yes</label>
                    </div>
                    <div class="form-check form-check-inline px-4">
                        <input name="disable_consider_yourself" <?php echo ($form_apply3['form3']['disable_consider_yourself'] == 'no')? 'checked': NULL; ?> class="form-check-input speakLanguageAtHome checkOne" data-target=".speakLanguageAtHome" type="checkbox" value="no">
                        <label class="form-check-label">No 
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- row title and gender end -->

    <!-- row title and gender -->
    <div class="pl-4 pt-3">
        <div class="row">
            <div class="col-md-12">
                If yes, then please indicate the areas of a disability, impairment or long-term condition:
            </div>
        </div>
        <div class="row">
                    <?php 
                    $count = 0;
                    $other_specific = '';
                    foreach($form_apply3['disablity'] as $disable){
                        if($count == 0 || $count == 3 || $count == 6){ 
                            echo   '<div class="col-md-3">';
                        }
                        $disablityChecked = ($form_apply3['form3']['disability_area'] == $disable)? 'checked':NULL;
                        if($disable == 'Other'){
                            $other_specific = '<input name="disability_area" '.$disablityChecked.' type="text" placeholder="please specify" class="text-center border-bottom-only"   >';
                        }
                        echo '
                            <div class="form-check pt-1">
                                <input type="checkbox" '.$disablityChecked.' class="form-check-input checkOne indicate_the_areas_of_a_disability" name="disability_area"   data-target=".indicate_the_areas_of_a_disability" value="'.$disable.'">
                                <label class="form-check-label">
                                    '.$disable.' '.$other_specific.'
                                </label>
                            </div>
                        ';

                        $count++;
                        if($count == 3 || $count == 6 || $count == 9){ 
                            echo   '</div>';
                        }
                    } ?>
        </div>
    </div>
    <!-- row title and gender end -->


                            

    <br class="clearfix">
    <h3 class="text-white bg-dark">STUDY REASON</h3>
    <!-- row title and gender -->
    <div class="pl-4 pt-3">
        <div class="row">
            <div class="col-md-12">
                Of the following categories, which BEST describes your main Reason for undertaking this course/traineeship/apprenticeship? 
                <span class='pl-4 text-secondary'> Tick only ONE</span>
            </div>
        </div>
        <div class="row pt-2">
                    <?php 
                    $count = 0;
                    $other_specific = '';
                    foreach($form_apply3['study_reasons'] as $study_reason){
                        if($count == 0 || $count == 5 || $count == 12){ 
                            echo   '<div class="col-md-6">';
                        }
                        $studyReasonChecked = ($form_apply3['form3']['study_reason'] == $study_reason)? 'checked': NULL;

                        if($study_reason == 'Other'){
                            $other_specific = '<input name="study_reason" '.$studyReasonChecked.' type="text" placeholder="please specify" class="text-center border-bottom-only" >';
                        }
                        echo '
                            <div class="form-check pt-1">
                                <input name="study_reason" '.$studyReasonChecked.' class="form-check-input checkOne study_reason" data-target=".study_reason" type="checkbox" value="'.$study_reason.'">
                                <label class="form-check-label">
                                    '.$study_reason.' '.$other_specific.'
                                </label>
                            </div>
                        ';

                        $count++;
                        if($count == 5 || $count == 12 || $count == 18){ 
                            echo   '</div>';
                        }
                    } ?>
        </div>
    </div>
    </div>
    <!-- row title and gender end -->

                            
        <br class="clearfix">
        <h3 class="text-white bg-dark">IDENTIFICATION</h3>
        <!-- row title and gender -->
        <div class="pl-4 pt-2">
                <div class="row">
                    <?php 
                    $count = 0;
                    $other_specific = '';
                    foreach($form_apply3['identitfication'] as $identitfication){
                        if($count == 0 || $count == 4 || $count == 12){ 
                            echo   '<div class="col-md-6 pl-4">';
                        }
                        $checkedIdentification = ($form_apply3['form3']['identification'] == $identitfication)? 'checked': NULL;
                        echo '
                            <div class="form-check p-1 ">
                                <input name="identification" '.$checkedIdentification.'  class="form-check-input checkOne identitfication" data-target=".identitfication" type="checkbox" value="'.$identitfication.'">
                                <label class="form-check-label">
                                    '.$identitfication.'
                                </label>
                            </div>
                        ';

                        $count++;
                        if($count == 4 || $count == 12 || $count == 18){ 
                            echo   '</div>';
                        }
                    } ?>
                </div>
            </div>
        </div>
    <!-- row title and gender end -->


        <br class="clearfix">
        <h3 class="text-white bg-dark">TUITION FEES</h3>
        <div class="pl-4 pt-2">
            <div class="row">
                <div class="col-md-12">
                    <strong> Fee Concession or Fee Waivers </strong>
                    <p class="m-0 pb-2"> Do you have a current concession card? <span class='pl-3 text-secondary'> (Please Tick One) </span> </p>
                    <?php   $array_fee_consession = ['yes', 'no', 'n/a'];
                            foreach($array_fee_consession as $consess){
                                $checkedtf_consession_card = ($form_apply3['form3']['tf_consession_card'] == $consess)? 'checked': NULL;
                                echo '
                                <div class="form-check form-check-inline pr-5">
                                    <input class="form-check-input checkOne feeConcessionAndWaiver" '.$checkedtf_consession_card.' name="tf_consession_card" data-target=".feeConcessionAndWaiver" type="checkbox"  value="'.$consess.'">
                                    <label class="form-check-label">'.$consess.'</label>
                                </div>
                                ';
                            }
                    ?>
                    
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-md-12">
                    <strong>If yes which of the following has been sighted?</strong>
                    <div class="pt-2">
                        <?php foreach($form_apply3['tution_sighted'] as $tu_sighted){
                            $checkedtf_consession_sighted = ($form_apply3['form3']['tf_consession_sighted'] == $tu_sighted)? 'checked':NULL;
                            echo'
                            <div class="form-check">
                                <input class="form-check-input checkOne tutionsighted" '.$checkedtf_consession_sighted.' name="tf_consession_sighted" data-target=".tutionsighted" type="checkbox" value="'.$tu_sighted.'" >
                                <label class="form-check-label">
                                    '.$tu_sighted.'
                                </label>
                            </div>';

                        } ?>
                    </div>
                </div>
            </div>


            <div class="row pt-3">
                <div class="col-md-12">
                    <p>NB: Optimistic Futures must retain a copy of the relevant concession card . Where the concession card is present via digital wallet through Centrelink Express Plus mobile application, optimistic futures must make a written declaration and attach it to the student file stating, the following;</p>
                    <div class="pt-2">
                        <ul>
                            <li>Name of the authorised delegate who sighted the card;</li>
                            <li>Date the card was sighted;</li>
                            <li>Concession holder͛s name͖</li>
                            <li>Card number;</li>
                            <li>Valid from or card start date; and</li>
                            <li>Expiry date of the concession entitlement</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-md-12">
                   <p>Have you been referred by Job Seekers with a standard Job Seeker Referral Form? <span class="pl-3 text-secondary"> (Please Tick One) </span> </p>
                    <div class="form-check form-check-inline pr-3">
                        <input class="form-check-input checkOne jobSeekerReferralForm" <?php echo ($form_apply3['form3']['tf_job_seeker_referral'] != 'no' && $form_apply3['form3']['tf_job_seeker_referral'] != NULL)? 'checked':NULL; ?> name="tf_job_seeker_referral" data-target=".jobSeekerReferralForm" type="checkbox">
                        <label class="form-check-label" >Yes, Plesae Specify:
                            <input type="text" name="tf_job_seeker_referral"   value="<?php echo ($form_apply3['form3']['tf_job_seeker_referral'] != 'no' && $form_apply3['form3']['tf_job_seeker_referral'] != NULL)? $form_apply3['form3']['tf_job_seeker_referral']:NULL; ?>" class="border-bottom-only">
                        </label>
                    </div>
                    <div class="form-check form-check-inline pl-3">
                        <input class="form-check-input checkOne jobSeekerReferralForm" <?php echo ($form_apply3['form3']['tf_job_seeker_referral'] == 'no')? 'checked':NULL; ?>  name="tf_job_seeker_referral" data-target=".jobSeekerReferralForm" type="checkbox"  value="no">
                        <label class="form-check-label" >No</label>
                    </div>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-md-12">
                   <p>NB: Optimistic Futures must invoice the referring agency directly for the portion of the tuition fee not covered by the referred job seeker.</p>
                </div>
            </div>

        </div>
    
        <br class="clearfix">
        <h3 class="text-white bg-dark">PAYMENT METHOD</h3>
        <div class="pl-4 pt-2">
            <div class="row pt-3">
                <div class="col-md-12">
                    <p>Please make payable to: Optimistic Futures Pty Ltd</p>
                    <?php 
                        $count = 0;
                        foreach($form_apply3['payment_method'] as $paymethod){
                            $checkedpayable_method = ($form_apply3['form3']['payable_method'] == $paymethod)? 'checked': NULL;
                        if($count <= 4){
                            echo'
                                <div class="form-check form-check-inline pr-3 pt-2">
                                    <input name="payable_method" '.$checkedpayable_method.' class="form-check-input  checkOne paymentMethod" data-target=".paymentMethod" type="checkbox"  value="'.$paymethod.'">
                                    <label class="form-check-label" >'.$paymethod.'</label>
                                </div>
                            ';
                        }else{
                            echo'
                                <div class="form-check pt-2">
                                    <input name="payable_method" '.$checkedpayable_method.' class="form-check-input checkOne paymentMethod" data-target=".paymentMethod" type="checkbox" value="'.$paymethod.'">
                                    <label class="form-check-label" >
                                        '.$paymethod.'
                                    </label>
                                </div> 
                            ';
                        }
                        $count++;
                        
                    }?>
                </div>
            </div>                        
        </div>
    

        <br class="clearfix">
        <h3 class="text-white bg-dark">REFUNDS</h3>
        <div class="pl-4 pt-2">
            <div class="row pt-3">
                <div class="col-md-12">
                    <p class="m-0"><strong> Deposits are non-refundable(deposits are outlined on each course flyer) but can be transferred to another course orstudent.</strong></p>
                    <p class="m-0">An administration fee (if applicable) will be charged to any student who withdrawsfrom a course in excess of 3 working days prior
                         to course commencement.</p>
                    <p class="m-0">No refunds will be issued once the course has commenced</p>
                </div>
            </div>        
            <div class="row pt-3">
                <div class="col-md-12">
                    <p class="m-0">Refunds may be made in the following circumstances:</p>
                    <ul>
                        <li>Participants have overpaid the administration charge</li>
                        <li>Participants enrolled in training that has been cancelled by the RTO</li>
                        <li>Participant advises the RTO prior to course commencementthat they are withdrawing from the course</li>
                        <li>If the participant withdrawsfrom a course or program due to illness or extreme hardship as determined by the RTO</li>
                    </ul>
                </div>
            </div>                        
        </div>
      


        <br class="clearfix">
        <h3 class="text-white bg-dark">TERMS & CONDITIONS OF ENROLMENT</h3>
        <div class="pl-4 pt-2">
            <div class="row pt-3">
                <div class="col-md-12">
                    <p ><strong>Language, Literacy and Numeracy (LLN) (1.7)</strong></p>
                    <p class="m-0"> LLN support is available to provide students with advice and support services in the provision of language, literacy and numeracy assessment services. Students
                                    needing assistance with their learning should be identified upon enrolment. Trainers and staff within the RTO can provide students with support to assist the student
                                    throughout the learning process.</p>
                    <p >Language, Literacy and Numeracy skills are generally included and identified in Training Packages and accredited course programs. In identifying language, literacy
                    and numeracy requirements, students are required to have basic skills in:</p>
                    <ul class="mb-0">
                        <li>Count, check and record accurately</li>
                        <li>Read and interpret</li>
                        <li>Estimate, calculate and measure.</li>
                    </ul>
                    <p class="m-0">All students undertaking a Certificate III qualification or below are required to undertake an LLN Assessment.</p>
                    
                    <p ><strong>Support Services (1.7)</strong></p>
                    <p>The RTO caters to diverse client learning needs and aims to identify and respond to the learning needs of all clients. Clients are encouraged to express their views
                        about their learning needs at all stages of their learning experience from the initial enrolment and induction stage.</p>
                    <p>The RTO will analyse who the target candidates are and whether an individual, a specific group or a broad target group and will determine the key characteristics and
                        needs of candidates, including disabilities.</p>
                    
                    <p ><strong>Credit Transfer (3.5)</strong></p>
                    <p>The RTO recognises the Australian Qualifications Framework and Vocational Education and Training (VET) qualifications and VET statements of attainment issued by
                        any other Registered Training Organisation.</p>
                    <p>Credit Transfer will be awarded for all units of competencies that directly align with units from the qualification the student has enrolled. Evidence of competences
                        achieved must be supplied for recognition to be processed (i.e. presentation of original certificate or transcript).</p>
                    <p>Please refer to the Student Handbook or contact the office for the procedure on how to apply for a Credit Transfer.</p>

                    <p ><strong>Enrolment & Selection (5.3)</strong></p>
                    <ol>
                        <li>The student is responsible for notifying the RTO if they have a medical condition or disability or require assistance in their training.</li>
                        <li>A deposit must accompany enrolment to secure a placement within a course; this fee is also the Administration Fee.</li>
                        <li>It is the student͛s responsibility to note the date, time and location of the course as advertised.</li>
                        <li>Courses with low enrolments may be cancelled, every effort will be made to contact students, please ensure your contact details are correct.</li>
                        <li>Requests from the student to transfer or credit their course placement due to changed personal circumstances will be considered and every effort will be made to</li>
                        <li>ensure a placement into an alternative course.</li>
                        <li>If you are unable to complete your course, due to changed personal circumstances, the RTO will make every effort to ensure you are placed into an alternative</li>
                        <li>pre-scheduled course.</li>
                        <li>Students can only join after course commencement date if they meet all prerequisites. Full course fees are still payable for late enrolments.</li>
                        <li>The RTO reserves the right to decline admission to a course, terminate a student's enrolment in a class or change a course or tutor at any time without notice.</li>
                        <li>Students participate in courses involving physical activity; field trips, practical demonstrations etc. and do so at their own risk. The RTO͛s students are covered by public liability insurance whilst working within the RTO͛s premises.</li>
                    </ol>

                    <p ><strong>Training Guarantee (5.3)</strong></p>
                    <p>The RTO will guarantee to complete all training and/ or assessment once the student has commenced study in their chosen qualification or course of study, unless
                        the student submits a formal Letter of Withdrawal notifying the RTO that they wish to withdraw. If a student voluntarily drops out, this guarantee is valid for a
                        maximum of six months from initial course commencement date.</p>

                    <p ><strong>Course Fees, Payments and Refunds (5.3)</strong></p>
                    <ol>
                        <li>Please refer to the course flyer for information on course fees, including any required deposit; administration fees; materials fees and any other charges (if applicable).</li>
                        <li>The Administration Fee (if applicable, for details please refer fee schedule) is non-refundable but can be transferred to another course or student.</li>
                        <li>Certificates and Statements of Attainment are issued to students who are assessed as competent in the units completed. The cost of the certificates is included in the course fees.</li>
                        <li>Refunds may be made in the following circumstances:</li>
                        <ol type="a">
                            <li>Participants have overpaid the administration charge</li>
                            <li>Participants enrolled in training that has been cancelled by the RTO</li>
                            <li>Participant advises the RTO prior to course commencement that they are withdrawing from the course</li>
                            <li>If the participant withdraws from a course or program due to illness or extreme hardship as determined by the RTO</li>
                        </ol>
                        <li>No refunds will be issued once the course has commenced</li>
                        <li>Students are responsible for the safe storage of their Certificates and Statements of Attainment. If a student requires a reissue of their Certificate or Statement of Attainment, a certificate re-issue fee of $80 will be charged.</li>
                        <li>If a student is deemed not yet competent on completion of training, they will be offered an opportunity to be reassessed. If a student is deemed not yet competent a second time, they will be given another opportunity for reassessment.</li>
                        <li>If a student is required to be reassessed, they will be provided with further guidance from their trainer prior to reassessment.</li>
                        <li>In most cases there will be no reassessment fee. If a reassessment fee is applicable, this fee will be included on the course flyer.</li>
                        <li>If a student is deemed competent in some but not all the units of competencies required, a Statement of Attainment will be issued and the student will be given a six-month period to undertake reassessment if required.</li>
                    </ol>

                    <p ><strong>Consumer Guarantee (5.3)</strong></p>
                    <p>The RTO guarantees that the services provided by the RTO will be:</p>
                    <ul>
                        <li>provided with due care and skill</li>
                        <li>fit for any specified purpose (express or implied)</li>
                        <li>Provided within a reasonable time (when no timeframe is set for the training).</li>
                    </ul>

                    <p ><strong>Cooling Off Period (5.3)</strong></p>
                    <p>Students are eligible to cancel their enrolment by placing a formal notice of cancellation in writing to the RTO Manager (a letter or email is acceptable) within
                        10 business days of enrolment, without attracting a cancellation fee, unless the student has already commenced the training.</p>

                    <p ><strong>Complaints and Appeals (6.1)</strong></p>
                    <p>If a student, trainer or staff member is experiencing any difficulties, they are encouraged to discuss their concerns with Senior Management. The RTO
                        administrative staff will make themselves available at a mutually convenient time if a student wishes to seek assistance.</p>
                    <p>If a Staff member or Student wishes to make a formal complaint they are required to complete a Complaints and Appeals Form, which is included in the Student
                        Handbook. Once the form has been completed, the form should be submitted to the RTO for actioning.</p>
                    <p>Please refer to the Student Handbook for more details on the complaints and appeals process.</p>

                    <p ><strong>Fee Protection (7.3)</strong></p>
                    <p>The RTO requires a minimum deposit, which will not exceed $1,500 per individual student, prior to course commencement. If the full course fees are below
                        $1,500, the full fees may be required to be paid prior to course commencement. Please refer to the course flyers for deposits and course fees.</p>
                    <p>Following course commencement, full fees will be required to be paid by either a payment plan (if remaining fees are over $1500), or in full (if the remaining fees
                        are below $1500) for tuition and other services yet to be delivered.</p>
                    <p>The RTO is committed to providing clients requiring additional support, advice or assistance while training. To achieve this and to ensure the quality delivery of
                        training and education, the RTO provides client vocational counselling to improve and extend training outcomes. Students are advised to make an appointment
                        with their trainer in the first instance, if required the student can then schedule an appointment with the RTO for further counselling.</p>

                    <p><strong>Legislative and Regulatory Requirements (8.5)</strong></p>
                    <p>All students will undergo an induction with the RTO, which will include the student͛s rights and responsibilities against the relevant Commonwealth, State or
                        Territory legislation and regulatory requirements. Students are issued with a Student Handbook, which also includes the Student͛s rights and responsibilities that
                        will affect their participation in vocational education and training.</p>
                    <p>The student acknowledges that they must observe The RTO͛s policies and procedures, according to State and Federal Government legislative and
                        regulatory requirements, as set out in the Student Handbook.</p>

                    <h4>Victorian Government VET Student Enrolment Privacy Notice</h4>
                    <p>The Victorian Government, through the Department of Education and Training (the Department), develops, monitors and funds vocational education and training
                        (VET) in Victoria. The Victorian Government is committed to ensuring that Victorians have access to appropriate and relevant VET services. Any personal
                        information collected by the Department for VET purposes is protected in accordance with the Privacy and Data Protection Act 2014 (Vic) and the Health Records
                        Act 2001 (Vic).</p>

                    <p><strong>Collection of your data</strong></p>
                    <p>Optimistic Futures is required to provide the Department with student and training activity data. This includes personal information collected by us in enrolment
                        form and unique identifiers sƵch as ƚhe Vicƚorian SƚƵdenƚ NƵmber ;VSNͿ and ƚhe Commonǁealƚh͛s UniqƵe SƚƵdenƚ Idenƚifier ;USIͿ͘</p>
                    <p>We provides data to the Department in accordance with the Victorian VET Student Statistical Collection Guidelines, available at DET website.</p>
                        
                    <p><strong>Use of your data</strong></p>
                    <p>The Department uses student and training data, including personal information, for a range of VET purposes including administration, monitoring and planning,
                        including interaction between the Department and Student where appropriate.</p>
                    <p>The data may also be subjected to data analytics, which seek to determine the likelihood of certain events occurring (such as program or subject completion),
                        which may be relevant to the services provided to the student.</p>

                    <p><strong>Disclosure of your data</strong></p>
                    <p>As necessary and where lawful, the Department may disclose VET data, including personal information, to its contractors, other government agencies, professional
                        bodies and/or other organisations for VET-related purposes. In particular, this includes disclosure of VET student and training data to the Commonwealth and the
                        National Centre for Vocational Education Research (NCVER).</p>

                    <p><strong>Legal and Regulatory</strong></p>
                    <p>The Deparƚmenƚ͛s collecƚion and handling of enrolmenƚ daƚa and VSNs is aƵƚhorised Ƶnder ƚhe EdƵcaƚion and Training Reform Acƚ 2006 (Vic). The Department is
                        also authorised to collect and handle USIs in accordance with the Student Identifiers Act 2014 (Cth) and the Student Identifiers Regulation 2014 (Cth).</p>

                    <p><strong>Survey participation</strong></p>
                    <p>You may be contacted to participate in a survey conducted by NCVER or a Department-endorsed project, audit or review relating to your training. This provides
                        valuable feedback on the delivery of VET programs in Victoria.</p>
                    <p>Please note you may opt out of the NCVER survey at the time of being contacted.</p>

                    <p><strong>Consequences of not providing your information</strong></p>
                    <p>Failure to provide your personal information may mean that it is not possible for you to enrol in VET and/or to obtain a Victorian Government VET subsidy.</p>

                    <p><strong>Access, correction and complaints</strong></p>
                    <p>You have the right to seek access to or correction of your own personal information. You may also complain if you believe your privacy has been breached.
                        For further information, please contact training manager in the first instance by phone or e-mail as provided in these enrolment documents.</p>
                    
                    <p><strong>Further information</strong></p>
                    <p>For further information about the way the Department collects and handles personal information, including access, correction and complaints, go to Victorian State
                        Government Education and Training website by following this link <a href="https://www.education.vic.gov.au/Pages/privacypolicy.aspx">https://www.education.vic.gov.au/Pages/privacypolicy.aspx</a>.</p>
                    <p>For further information about Unique Student Identifiers, including access, correction and complaints, go to Australian Government USI website by following this
                        link <a href="https://www.usi.gov.au/documents/privacy-notice" >https://www.usi.gov.au/documents/privacy-notice</a>.</p>
                    
                    <h3 class="text-center bg-dark mb-1">STUDENT DECLARATION and CONSENT</h3>
                    <p class="m-0 mb-1">I have read and understand the terms and conditions of my enrolment, as stated above. I acknowledge and agree with the terms and conditions
                        of enrolment with specific reference to the RTO͛s enrolment and selection, USI, course fees, payments and refunds, course requirements,
                        Language Literacy and Numeracy requirements, complaints and appeals, Workplace Health and Safety,support servicesthat will be provided for
                        me, legislative and regulatory policies and procedures, which are also provided to me in the Student Handbook. By signing this document, I also
                        give permission for the RTO to access my Unique Student Identifier for the purpose of my training.</p>
                    <p>I acknowledge ƚhaƚ I have read ƚhe Vicƚorian Governments VET Student Enrolment Privacy Notice</p>
                    <p>I declare that the information I have provided to the best of my knowledge is true and correct. I consent to the collection, use and disclosure of
                        my personal information in accordance with the Privacy Notice above.</p>

                    <div class="row">
                        <div class="col-8">
                            Do you give consent to OPTIMISTIC FUTURES to display your testimonials on their website?
                        </div>
                        <div class="col-md-4 float-right">
                            <div class="form-check form-check-inline col-2 ">
                                <input class="form-check-input checkOne testimonialsWebsite" <?php echo ($form_apply3['form3']['sdc_display_testimonial_of_web'] == 'yes')? 'checked': NULL;  ?> name="sdc_display_testimonial_of_web"  data-target=".testimonialsWebsite" type="checkbox"  value="yes">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check form-check-inline col-2 ">
                                <input class="form-check-input checkOne testimonialsWebsite" name="sdc_display_testimonial_of_web" <?php echo ($form_apply3['form3']['sdc_display_testimonial_of_web'] == 'no')? 'checked': NULL; ?> data-target=".testimonialsWebsite" type="checkbox"  value="no">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                        Do you give consent to OPTIMISTIC FUTURES to use your photo on their website or/and on their marketing material?
                        </div>
                        <div class="col-md-4">
                            <div class="form-check form-check-inline col-2 ">
                                <input class="form-check-input checkOne websiteMarketingMaterial" name="sdc_photo_on_their_web" <?php  echo ($form_apply3['form3']['sdc_photo_on_their_web'] == 'yes')? 'checked': NULL; ?> data-target=".websiteMarketingMaterial" type="checkbox"  value="yes">
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check form-check-inline col-2 ">
                                <input class="form-check-input checkOne websiteMarketingMaterial" name="sdc_photo_on_their_web" <?php  echo ($form_apply3['form3']['sdc_photo_on_their_web'] == 'no')? 'checked': NULL; ?> data-target=".websiteMarketingMaterial" type="checkbox"  value="no">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="d-flex mt-3">
                               <p><strong>STUDENT SIGNATURE:
                                    <input style="width:600px" type="text" name="sdc_student_sign" class="text-center border-bottom-only " value="<?php echo $form_apply3['form3']['sdc_student_sign'] ; ?>" >
                                    DATE:<input name="sdc_student_sign_date" type="date" style="width:168px"  class="text-center border-bottom-only " value="<?php echo $form_apply3['form3']['sdc_student_sign_date'] ; ?>" >
                               </strong></p>
                            </div>

                            <div class="d-flex mt-3">
                               <p><strong>PARENT/GUARDIAN SIGNATURE*:
                                    <input style="width:519px" name="sdc_parent_sign" type="text" class="text-center border-bottom-only " value="<?php echo $form_apply3['form3']['sdc_parent_sign'] ; ?>" >
                                    DATE:<input name="sdc_parent_sign_date" type="date" style="width:168px"  class="text-center border-bottom-only " value="<?php echo $form_apply3['form3']['sdc_parent_sign_date'] ; ?>" >
                               </strong></p>
                            </div>
                            <p><strong>*Parental/guardian consent is required for allstudents under the age of 18.</strong></p>
                        </div>
                    </div>

                    <h3 class="text-dark" style="background-color:#add8e6; ">SECTION A – EVIDENCE OF CITIZENSHIP/RESIDENCY AND AGE</h3>
                    <p><strong>TO BE COMPLETED BY AN AUTHORISED DELEGATE OF THE TRAINING PROVIDER – <span class="text-danger"> DON’T LEAVE ANY SECTIONS BLANK</span></strong></p>
              
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="d-flex mt-3">
                                <p><strong>I confirm that in relation to:</strong>
                                (student’s full name):
                                </p>
                                <input name="sa_full_name" type="text" class="text-center form-control" value="<?php echo $form_apply3['form3']['sa_full_name'] ; ?>" >
                            </div>                           
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                                <p>I have sighted <strong>ONE</strong> of the following:</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-check mb-1">
                                        <input class="form-check-input checkOne sightedOftheFollowing" <?php echo ($form_apply3['form3']['sa_sighted_one'] == 'Australian Birth Certificate (not Birth Extract)')? 'checked': NULL ?> data-target=".sightedOftheFollowing" name="sa_sighted_one" type="checkbox" value="Australian Birth Certificate (not Birth Extract)" >
                                        <label class="form-check-label">
                                            Australian Birth Certificate (not Birth Extract) 
                                        </label>
                                    </div>
                                    <div class="form-check mb-1">
                                        <input class="form-check-input checkOne sightedOftheFollowing" <?php echo ($form_apply3['form3']['sa_sighted_one'] == 'Current New Zealand Passport')? 'checked': NULL ?> data-target=".sightedOftheFollowing" name="sa_sighted_one" type="checkbox" value="Current New Zealand Passport" >
                                        <label class="form-check-label">
                                            Current New Zealand Passport 
                                        </label>
                                    </div>
                                    <div class="form-check mb-1">
                                        <input class="form-check-input checkOne sightedOftheFollowing" <?php echo ($form_apply3['form3']['sa_sighted_one'] == 'Current green Medicare card')? 'checked': NULL ?> data-target=".sightedOftheFollowing" name="sa_sighted_one" type="checkbox" value="Current green Medicare card" >
                                        <label class="form-check-label">
                                            Current green Medicare card 
                                        </label>
                                    </div> 
                                    <div class="form-check mb-1">
                                        <input class="form-check-input checkOne sightedOftheFollowing" <?php echo ($form_apply3['form3']['sa_sighted_one'] == 'A proxy declaration for individuals in exceptional circumstances as per Clauses 2.12 – 2.16 of the Guidelines About Eligibility (the Eligibility Guidelines)')? 'checked': NULL ?> data-target=".sightedOftheFollowing" name="sa_sighted_one" type="checkbox" value="A proxy declaration for individuals in exceptional circumstances as per Clauses 2.12 – 2.16 of the Guidelines About Eligibility (the Eligibility Guidelines)" >
                                        <label class="form-check-label">
                                            A proxy declaration for individuals in exceptional circumstances as per Clauses 2.12 – 2.16 of the Guidelines About Eligibility (the Eligibility Guidelines)
                                        </label>
                                    </div> 
                                    <div class="form-check mb-1">
                                        <input class="form-check-input checkOne sightedOftheFollowing" <?php echo ($form_apply3['form3']['sa_sighted_one'] == 'a Referral to Government Subsidised Training - AsylumSeekers’ form from the Asylum Seeker Resource Centreor the Australian Red Cross')? 'checked': NULL ?> data-target=".sightedOftheFollowing" name="sa_sighted_one" type="checkbox" value="a Referral to Government Subsidised Training - AsylumSeekers’ form from the Asylum Seeker Resource Centreor the Australian Red Cross" >
                                        <label class="form-check-label">
                                            a Referral to Government Subsidised Training - AsylumSeekers’ form from the Asylum Seeker Resource Centreor the Australian Red Cross
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-check mb-1">
                                        <input class="form-check-input checkOne sightedOftheFollowing" <?php echo ($form_apply3['form3']['sa_sighted_one'] == 'Current Australian Passport')? 'checked': NULL ?> name="sa_sighted_one" data-target=".sightedOftheFollowing" type="checkbox" value="Current Australian Passport" >
                                        <label class="form-check-label">
                                            Current Australian Passport
                                        </label>
                                    </div>
                                    <div class="form-check mb-1">
                                        <input class="form-check-input checkOne sightedOftheFollowing" <?php echo ($form_apply3['form3']['sa_sighted_one'] == 'Australian Citizenship Certificate')? 'checked': NULL ?> name="sa_sighted_one" data-target=".sightedOftheFollowing" type="checkbox" value="Australian Citizenship Certificate" >
                                        <label class="form-check-label">
                                            Australian Citizenship Certificate
                                        </label>
                                    </div>
                                    <div class="form-check mb-1">
                                        <input class="form-check-input checkOne sightedOftheFollowing" <?php echo ($form_apply3['form3']['sa_sighted_one'] == 'Australian Certificate of Registration by Descent')? 'checked': NULL ?> name="sa_sighted_one" data-target=".sightedOftheFollowing" type="checkbox" value="Australian Certificate of Registration by Descent" >
                                        <label class="form-check-label">
                                            Australian Certificate of Registration by Descent
                                        </label>
                                    </div> <div class="form-check mb-1">
                                        <input class="form-check-input checkOne sightedOftheFollowing" <?php echo ($form_apply3['form3']['sa_sighted_one'] == 'Formal confirmation of permanent residence granted by the Department of Home Affairs (or its successor) AND the student’s foreign passport or ImmiCard.')? 'checked': NULL ?> name="sa_sighted_one" data-target=".sightedOftheFollowing" type="checkbox" value="Formal confirmation of permanent residence granted by the Department of Home Affairs (or its successor) AND the student’s foreign passport or ImmiCard." >
                                        <label class="form-check-label">
                                            Formal confirmation of permanent residence granted by the Department of Home Affairs (or its successor) AND the student’s foreign passport or ImmiCard.
                                        </label>
                                    </div>
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <hr />
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <p>By Either:</p>
                            <div class="form-check mb-1">
                                <input class="form-check-input checkOne byeither" <?php echo ($form_apply3['form3']['sa_either'] == 'viewing an original; OR')?'checked':NULL; ?> name="sa_either" data-target=".byeither" type="checkbox" value="viewing an original; OR" >
                                <label class="form-check-label">
                                    viewing an original; OR
                                </label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input checkOne byeither" <?php echo ($form_apply3['form3']['sa_either'] == 'viewing a certified copy; OR')?'checked':NULL; ?> name="sa_either" data-target=".byeither" type="checkbox" value="viewing a certified copy; OR" >
                                <label class="form-check-label">
                                    viewing a certified copy; OR
                                </label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input checkOne byeither" <?php echo ($form_apply3['form3']['sa_either'] == 'verifying through the Document Verification Service (DVS) [where it is possible to do so, and in accordance with Clause 2.5(c) of the Eligibility Guidelines]; OR')?'checked':NULL; ?> name="sa_either" data-target=".byeither" type="checkbox" value="verifying through the Document Verification Service (DVS) [where it is possible to do so, and in accordance with Clause 2.5(c) of the Eligibility Guidelines]; OR" >
                                <label class="form-check-label">
                                    verifying through the Document Verification Service (DVS) [where it is possible to do so, and in accordance with Clause 2.5(c) of the Eligibility Guidelines]; OR 
                                </label>
                            </div> 
                            <div class="form-check mb-1">
                                <input class="form-check-input checkOne byeither" <?php echo ($form_apply3['form3']['sa_either'] == 'viewing a digital green Medicare card on a Digital Wallet app on the card holder’s mobile device [in accordance with Clause 2.5(d) of the Eligibility Guidelines]; OR')?'checked':NULL; ?> name="sa_either" data-target=".byeither" type="checkbox" value="viewing a digital green Medicare card on a Digital Wallet app on the card holder’s mobile device [in accordance with Clause 2.5(d) of the Eligibility Guidelines]; OR" >
                                <label class="form-check-label">
                                    viewing a digital green Medicare card on a Digital Wallet app on the card holder’s mobile device [in accordance with Clause 2.5(d) of the Eligibility Guidelines]; OR
                                </label>
                            </div> 
                            <div class="form-check mb-1">
                                <input class="form-check-input checkOne byeither" <?php echo ($form_apply3['form3']['sa_either'] == 'relying on evidence sighted and retained as part of a previous enrolment [in accordance with Clause 2.8 of the Eligibility Guidelines] OR')?'checked':NULL; ?> name="sa_either" data-target=".byeither" type="checkbox" value="relying on evidence sighted and retained as part of a previous enrolment [in accordance with Clause 2.8 of the Eligibility Guidelines] OR" >
                                <label class="form-check-label">
                                    relying on evidence sighted and retained as part of a previous enrolment [in accordance with Clause 2.8 of the Eligibility Guidelines] OR
                                </label>
                            </div>
                        </div>
                    </div>
                    <hr />

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <p>And I have retained <strong>ONE</strong> of the following:</p>
                            <div class="form-check mb-1">
                                <input class="form-check-input checkOne retainedOfFollowing" <?php echo ($form_apply3['form3']['sa_retained_one'] == 'a copy of the original or certified copy; OR')? 'checked': NULL; ?> name="sa_retained_one" data-target=".retainedOfFollowing" type="checkbox" value="a copy of the original or certified copy; OR" >
                                <label class="form-check-label">
                                    a copy of the original or certified copy; OR
                                </label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input checkOne retainedOfFollowing" <?php echo ($form_apply3['form3']['sa_retained_one'] == 'the certified copy; OR')? 'checked': NULL; ?> name="sa_retained_one" data-target=".retainedOfFollowing" type="checkbox" value="the certified copy; OR" >
                                <label class="form-check-label">
                                    the certified copy; OR
                                </label>
                            </div>
                            <div class="form-check mb-1">
                                <input class="form-check-input checkOne retainedOfFollowing" <?php echo ($form_apply3['form3']['sa_retained_one'] == 'evidence as set out in Clause 2.5(c) of the Eligibility Guidelines [where verified through the DVS]; OR')? 'checked': NULL; ?> name="sa_retained_one" data-target=".retainedOfFollowing" type="checkbox" value="evidence as set out in Clause 2.5(c) of the Eligibility Guidelines [where verified through the DVS]; OR" >
                                <label class="form-check-label">
                                    evidence as set out in Clause 2.5(c) of the Eligibility Guidelines [where verified through the DVS]; OR
                                </label>
                            </div> 
                            <div class="form-check mb-1">
                                <input class="form-check-input checkOne retainedOfFollowing" <?php echo ($form_apply3['form3']['sa_retained_one'] == 'declaration of sighting a digital green Medicare card [as set out in Clause 2.5(d) of the Eligibility Guidelines]; OR')? 'checked': NULL; ?> name="sa_retained_one" data-target=".retainedOfFollowing" type="checkbox" value="declaration of sighting a digital green Medicare card [as set out in Clause 2.5(d) of the Eligibility Guidelines]; OR" >
                                <label class="form-check-label">
                                    declaration of sighting a digital green Medicare card [as set out in Clause 2.5(d) of the Eligibility Guidelines]; OR
                                </label>
                            </div> 
                        </div>                           
                    </div>
                    <hr />

                    <div class="row mt-2 mb-3">
                        <div class="col-md-12">
                            <p>And if the student’s age is relevant to their eligibility, and the document produced from the list above does not include a date of birth
                                (or if the date of birth has not been verified through use of the DVS), I have also sighted and retained a copy of one of the following:</p>
                            <div class="form-check form-check-inline col-md-3 mr-4">
                                <input class="form-check-input checkOne student_age_is_relevant_to_their_eligibility" <?php echo($form_apply3['form3']['sa_eligibility_document'] == 'current drivers licence')? 'checked': NULL; ?> name="sa_eligibility_document"  data-target=".student_age_is_relevant_to_their_eligibility" type="checkbox"  value="current drivers licence">
                                <label class="form-check-label">current drivers licence</label>
                            </div>
                            <div class="form-check form-check-inline col-md-3 mr-4">
                                <input class="form-check-input checkOne student_age_is_relevant_to_their_eligibility" <?php echo($form_apply3['form3']['sa_eligibility_document'] == 'Keypass’ card')? 'checked': NULL; ?> name="sa_eligibility_document"  data-target=".student_age_is_relevant_to_their_eligibility" type="checkbox"  value="‘Keypass’ card">
                                <label class="form-check-label">‘Keypass’ card</label>
                            </div>
                            <div class="form-check form-check-inline col-md-3 mr-4">
                                <input class="form-check-input checkOne student_age_is_relevant_to_their_eligibility" <?php echo($form_apply3['form3']['sa_eligibility_document'] == 'Not applicable')? 'checked': NULL; ?> name="sa_eligibility_document"  data-target=".student_age_is_relevant_to_their_eligibility" type="checkbox"  value="Not applicable">
                                <label class="form-check-label">Not applicable</label>
                            </div>
                            <div class="form-check form-check-inline col-md-3 mr-4">
                                <input class="form-check-input checkOne student_age_is_relevant_to_their_eligibility" <?php echo($form_apply3['form3']['sa_eligibility_document'] == 'current learner permit')? 'checked': NULL; ?> name="sa_eligibility_document"  data-target=".student_age_is_relevant_to_their_eligibility" type="checkbox"  value="current learner permit">
                                <label class="form-check-label">current learner permit </label>
                            </div>
                            <div class="form-check form-check-inline col-md-3 mr-4">
                                <input class="form-check-input checkOne student_age_is_relevant_to_their_eligibility" <?php echo($form_apply3['form3']['sa_eligibility_document'] == 'Proof of Age card')? 'checked': NULL; ?> name="sa_eligibility_document"  data-target=".student_age_is_relevant_to_their_eligibility" type="checkbox"  value="Proof of Age card">
                                <label class="form-check-label">Proof of Age card</label>
                            </div>
                        </div>                           
                    </div>

                    <h3 class="border" style="background-color:#c5b0ec; color:#800080;">SECTION B1 – EDUCATION HISTORY (ENROLMENT IN A QUALIFICATION)</h3>
                    <p><strong>TO BE COMPLETED BY THE STUDENT –  <span class="text-danger"> DON’T LEAVE ANY SECTION BLANK UNLESS YOU ARE ASKED TO SKIP A QUESTION OR GO TO THE DECLARATION – PLEASE ASK THE TRAINING PROVIDER FOR HELP IF YOU DON’T UNDERSTAND A QUESTION</span></strong></p>
                    <p>A <strong>‘skill set’</strong> means a course with the title ‘Course in...’ or a single subject, or small group of subjects (for example ‘Course in Family Violence’, ‘Infection
                    control Skill Set (Retail)’).</p>
                    <p> A <strong>‘qualification’</strong> means a course that has ‘Certificate’ or ‘Diploma’ in the title (for example, ‘Certificate III in Business’, ‘Diploma of Nursing’).</p>
                    
                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q1</strong>
                        </div>
                        <div class="col-md-11">
                            <p>What is the highest qualification (not including secondary or high school) that you have 
                            <strong>completed</strong>, or <strong>expect to complete</strong> at the time the training
                            you are applying for is scheduled to start?</p>
                            <p>(include code and full title of qualification if possible, for example, Certificate III in Aged Care. If you have not completed any qualification, write ‘none’)</p>
                            <input name="sb_q1" type="text" class="text-center form-control" value="<?php  echo $form_apply3['form3']['sb_q1']; ?> " >
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q2</strong>
                        </div>
                        <div class="col-md-11">
                            <p>How many other <strong>Skills First funded</strong> qualifications have you enrolled in that have started,
                            or will start in the <strong>same calendar year</strong> as the qualification/s you are applying for now? 
                            (<strong>Don’t</strong> include the qualification/s you are applying for now. <strong>Do</strong> include other qualification/s 
                            at this and other training
                            providers you’ve enrolled in, but haven’t started yet).</p>
                            <div class="d-flex">
                                <input id="sb_q2" name="sb_q2" type="hidden" value="<?php echo $form_apply3['form3']['sb_q2']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input type="button" <?php echo ($form_apply3['form3']['sb_q2'] == '1')?'style="border:2px solid #000000"' : NULL ; ?>  data-ans="#sb_q2"  value="1" data-target=".skillFirstFunded" class="skillFirstFunded btncircleMange circleOne btn rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input type="button" <?php echo ($form_apply3['form3']['sb_q2'] == '2')?'style="border:2px solid #000000"' : NULL ; ?>  data-ans="#sb_q2"  value="2" data-target=".skillFirstFunded" class="skillFirstFunded btncircleMange circleOne btn rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input type="button" <?php echo ($form_apply3['form3']['sb_q2'] == '3')?'style="border:2px solid #000000"' : NULL ; ?>  data-ans="#sb_q2"  value="3" data-target=".skillFirstFunded" class="skillFirstFunded btncircleMange circleOne btn rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input type="button" <?php echo ($form_apply3['form3']['sb_q2'] == '4+')?'style="border:2px solid #000000"' : NULL ; ?>  data-ans="#sb_q2"  value="4+" data-target=".skillFirstFunded" class="skillFirstFunded btncircleMange circleOne btn rounded-circle">
                                </div>
                                    <i>(circle number)</i>
                            </div>
                                <hr class="border-dark mt-0" />
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q3</strong>
                        </div>
                        <div class="col-md-11">
                            <p>Not including the qualification/s you are applying for now, how many other <strong>Skills First funded</strong> skill sets and/or
                            qualifications are you doing at the moment?</p>
                            <div class="d-flex">
                                <input id="sb_q3" name="sb_q3" type="hidden" value="<?php echo $form_apply3['form3']['sb_q3']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input type="button" data-ans="#sb_q3" <?php echo ($form_apply3['form3']['sb_q3'] == '1')?'style="border:2px solid #000000"' : NULL ; ?> value="1" data-target=".qualificationMoment" class="btn qualificationMoment btncircleMange circleOne  rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input type="button" data-ans="#sb_q3" <?php echo ($form_apply3['form3']['sb_q3'] == '2')?'style="border:2px solid #000000"' : NULL ; ?> value="2" data-target=".qualificationMoment" class="btn qualificationMoment btncircleMange circleOne  rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input type="button" data-ans="#sb_q3" <?php echo ($form_apply3['form3']['sb_q3'] == '3')?'style="border:2px solid #000000"' : NULL ; ?> value="3" data-target=".qualificationMoment" class="btn qualificationMoment btncircleMange circleOne  rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input type="button" data-ans="#sb_q3" <?php echo ($form_apply3['form3']['sb_q3'] == '4+')?'style="border:2px solid #000000"' : NULL ; ?> value="4+" data-target=".qualificationMoment" class="btn qualificationMoment btncircleMange circleOne  rounded-circle">
                                </div>
                                <i>(circle number)</i>
                            </div>
                                <hr class="border-dark mt-0" />
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q4</strong>
                        </div>
                        <div class="col-md-11">
                            <p>In your lifetime, how many <strong>government funded</strong> qualifications have you started that are at the same level as the one you are applying for now? If 
                            you are applying for a qualification on the Foundation Skills List, tick ‘not applicable’.</p>
                            <div class="d-flex">
                                <input id="sb_q4" name="sb_q4" type="hidden" value="<?php echo $form_apply3['form3']['sb_q4']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input type="button" data-ans="#sb_q4"  <?php echo ($form_apply3['form3']['sb_q4'] == '1')? 'style="border:2px solid #000000"' : NULL ; ?> data-target=".govFundedQualify" value="1" class="btn govFundedQualify btncircleMange circleOne  rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input type="button" data-ans="#sb_q4"  <?php echo ($form_apply3['form3']['sb_q4'] == '2')? 'style="border:2px solid #000000"' : NULL ; ?> data-target=".govFundedQualify" value="2" class="btn govFundedQualify btncircleMange circleOne  rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input type="button" data-ans="#sb_q4"  <?php echo ($form_apply3['form3']['sb_q4'] == '3')? 'style="border:2px solid #000000"' : NULL ; ?> data-target=".govFundedQualify" value="3" class="btn govFundedQualify btncircleMange circleOne  rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input type="button" data-ans="#sb_q4"  <?php echo ($form_apply3['form3']['sb_q4'] == '4+')? 'style="border:2px solid #000000"' : NULL ; ?> data-target=".govFundedQualify" value="4+" class="btn govFundedQualify btncircleMange circleOne  rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input type="button" data-ans="#sb_q4"  <?php echo ($form_apply3['form3']['sb_q4'] == 'not applicable')? 'style="border:2px solid #000000"' : NULL ; ?> data-target=".govFundedQualify" value="not applicable" class="btn govFundedQualify btncircleMange circleOne  rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <i>(circle number)</i>
                                </div>
                               
                            </div>
                        </div>
                    </div>

                    <hr class="border-dark mt-0"  />
                    <p><strong class="text-danger">[FOR TAFE/DUAL SECTOR ENROLMENT ONLY – delete Q5 - Q8 if not required]</strong></p>
                    
                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q5</strong>
                        </div>
                        <div class="col-md-11">
                            <p>If you are applying for a qualification on the ‘Free TAFE for Priority Courses List’, do you want to access your opportunity to receive a Fee Waiver for
                            this qualification? <strong>Note:</strong> You can only receive a Fee Waiver for <strong>one qualification</strong> on this list, unless you are eligible for a second Fee Waiver under
                            the JobTrainer initiative.</p>
                            <input id="sb_q5" name="sb_q5" type="hidden" value="<?php echo $form_apply3['form3']['sb_q5']; ?>" />
                            <div class="d-flex">
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q5" type="button" <?php echo ($form_apply3['form3']['sb_q5'] == 'Yes')? 'style="border:2px solid #000000"' : NULL ; ?> value="Yes"  data-target=".freeTAFE" class="btn freeTAFE btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q5" type="button" <?php echo ($form_apply3['form3']['sb_q5'] == 'No')? 'style="border:2px solid #000000"' : NULL ; ?> value="No"  data-target=".freeTAFE" class="btn freeTAFE btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q5" type="button" <?php echo ($form_apply3['form3']['sb_q5'] == 'Not applicable')? 'style="border:2px solid #000000"' : NULL ; ?> value="Not applicable"  data-target=".freeTAFE" class="btn freeTAFE btncircleMange circleOne rounded-circle">
                                </div>
                               
                                <i class="mr-5">(circle number)</i>
                                <i class="mr-5">(If ‘NO’, or ‘not applicable’ go to Student Declaration)</i>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q6</strong>
                        </div>
                        <div class="col-md-11">
                            <p>If you answered <strong>‘YES’</strong> to Q5, have you already received a Fee Waiver for <strong>this qualification</strong> or 
                            for <strong>any other qualification</strong> on the ‘Free TAFE for Priority Courses List?</p>
                            <div class="d-flex">
                                <input id="sb_q6" name="sb_q6" type="hidden" value="<?php echo $form_apply3['form3']['sb_q6']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q6" type="button" <?php echo ($form_apply3['form3']['sb_q6'] == 'Yes')? 'style="border:2px solid #000000"' : NULL ; ?> value="Yes"  data-target=".sectionB1q6" class="btn sectionB1q6 btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q6" type="button" <?php echo ($form_apply3['form3']['sb_q6'] == 'No')? 'style="border:2px solid #000000"' : NULL ; ?> value="No"  data-target=".sectionB1q6" class="btn sectionB1q6 btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q6" type="button" <?php echo ($form_apply3['form3']['sb_q6'] == 'Not applicable')? 'style="border:2px solid #000000"' : NULL ; ?> value="Not applicable"  data-target=".sectionB1q6" class="btn sectionB1q6 btncircleMange circleOne rounded-circle">
                                </div>
                                <i class="mr-5">(circle number)</i>
                                <i class="mr-5">(If ‘NO’, go to Student Declaration)</i>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q7</strong>
                        </div>
                        <div class="col-md-11">
                            <p>If you answered <strong>‘YES’</strong> to Q6, are you applying to recommence in the same qualification for which you previously received a Fee Waiver?</p>
                            <div class="d-flex">
                                <input id="sb_q7" name="sb_q7" type="hidden" value="<?php echo $form_apply3['form3']['sb_q7']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q7" type="button" <?php echo ($form_apply3['form3']['sb_q7'] == 'Yes')? 'style="border:2px solid #000000"' : NULL ; ?> value="Yes"  data-target=".sectionB1q7" class="btn sectionB1q7 btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q7" type="button" <?php echo ($form_apply3['form3']['sb_q7'] == 'No')? 'style="border:2px solid #000000"' : NULL ; ?> value="No"  data-target=".sectionB1q7" class="btn sectionB1q7 btncircleMange circleOne rounded-circle">
                                </div>
                              
                                <i class="mr-5">(circle number)</i>
                                <i class="mr-5">(If ‘YES’ go to Student Declaration)</i>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q8</strong>
                        </div>
                        <div class="col-md-11">
                            <p>If you answered <strong>‘NO’</strong> to Q7, did you receive the Fee Waiver for a qualification under the JobTrainer initiative?</p>
                            <div class="d-flex">
                                <input id="sb_q8" name="sb_q8" type="hidden" value="<?php echo $form_apply3['form3']['sb_q8']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q8" type="button" value="Yes" <?php echo ($form_apply3['form3']['sb_q8'] == 'Yes')? 'style="border:2px solid #000000"' : NULL ; ?>  data-target=".sectionB1q8" class="btn sectionB1q8 btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q8" type="button" value="No" <?php echo ($form_apply3['form3']['sb_q8'] == 'No')? 'style="border:2px solid #000000"' : NULL ; ?>  data-target=".sectionB1q8" class="btn sectionB1q8 btncircleMange circleOne rounded-circle">
                                </div>
                                <i class="mr-5">(circle number)</i>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-center bg-white text-danger"><u>FOR JOBTRAINER ENROLMENT ONLY</u></h3>
                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q9</strong>
                        </div>
                        <div class="col-md-11">
                            <p>Are you seeking to enrol in a qualification under the JobTrainer initiative? <strong>Note:</strong> You can only enrol in <strong>one qualification</strong> under the JobTrainer initiative.</p>
                            <div class="d-flex">
                                <input id="sb_q9" name="sb_q9" type="hidden" value="<?php echo $form_apply3['form3']['sb_q9']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q9" type="button" value="Yes" <?php echo ($form_apply3['form3']['sb_q9'] == 'Yes')? 'style="border:2px solid #000000"' : NULL ; ?>  data-target=".sectionB1q9" class="btn sectionB1q9 btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q9" type="button" value="No"  <?php echo ($form_apply3['form3']['sb_q9'] == 'No')? 'style="border:2px solid #000000"' : NULL ; ?> data-target=".sectionB1q9" class="btn sectionB1q9 btncircleMange circleOne rounded-circle">
                                </div>
                                <i class="mr-5">(circle number)</i>
                                <i class="mr-5">(If ‘YES’ go to Student Declaration)</i>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q10</strong>
                        </div>
                        <div class="col-md-11">
                            <p>If you answered <strong>‘YES’</strong> to Q9, have you previously started a qualification under the JobTrainer initiative?</p>
                            <div class="d-flex">
                                <input id="sb_q10" name="sb_q10" type="hidden" value="<?php echo $form_apply3['form3']['sb_q10']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input  data-ans="#sb_q10" type="button" value="Yes" <?php echo ($form_apply3['form3']['sb_q10'] == 'Yes')? 'style="border:2px solid #000000"' : NULL ; ?>  data-target=".sectionB1q10" class="btn sectionB1q10 btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input  data-ans="#sb_q10" type="button" value="No"  <?php echo ($form_apply3['form3']['sb_q10'] == 'No')? 'style="border:2px solid #000000"' : NULL ; ?>  data-target=".sectionB1q10" class="btn sectionB1q10 btncircleMange circleOne rounded-circle">
                                </div>
                                <i class="mr-5">(circle number)</i>
                                <i class="mr-5">(If ‘NO’, go to Q12)</i>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q11</strong>
                        </div>
                        <div class="col-md-11">
                            <p>If you answered <strong>‘YES’</strong> to Q10, are you applying to recommence in the same qualification that you already started under the JobTrainer initiative?</p>
                            <div class="d-flex">
                                <input id="sb_q11" name="sb_q11" type="hidden" value="<?php echo $form_apply3['form3']['sb_q11']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q11" type="button" value="Yes" <?php echo ($form_apply3['form3']['sb_q11'] == 'Yes')? 'style="border:2px solid #000000"' : NULL ; ?> data-target=".sectionB1q11" class="btn sectionB1q11 btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q11" type="button" value="No" <?php echo ($form_apply3['form3']['sb_q11'] == 'No')? 'style="border:2px solid #000000"' : NULL ; ?> data-target=".sectionB1q11" class="btn sectionB1q11 btncircleMange circleOne rounded-circle">
                                </div>
                                <i class="mr-5">(circle number)</i>
                                <i class="mr-5">(If ‘YES’ or ‘NO’, go to Student Declaration)</i>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q12</strong>
                        </div>
                        <div class="col-md-11">
                            <p>Are you 17 to 24 years old?</p>
                            <div class="d-flex">
                                <input id="sb_q12" name="sb_q12" type="hidden" value="<?php echo $form_apply3['form3']['sb_q12']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q12" type="button" value="Yes" <?php echo ($form_apply3['form3']['sb_q12'] == 'Yes')? 'style="border:2px solid #000000"' : NULL ; ?>  data-target=".sectionB1q12" class="btn sectionB1q12 btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q12" type="button" value="No"  <?php echo ($form_apply3['form3']['sb_q12'] == 'No')? 'style="border:2px solid #000000"' : NULL ; ?> data-target=".sectionB1q12" class="btn sectionB1q12 btncircleMange circleOne rounded-circle">
                                </div>
                                <i class="mr-5">(circle number)</i>
                                <i class="mr-5">(If ‘YES’ go to Student Declaration)</i>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q13</strong>
                        </div>
                        <div class="col-md-11">
                            <p>Are you a job seeker?</p>
                            <div class="d-flex">
                                <input id="sb_q13" name="sb_q13" type="hidden" value="<?php echo $form_apply3['form3']['sb_q13']; ?>" />
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q13" type="button"  <?php echo ($form_apply3['form3']['sb_q13'] == 'Yes')? 'style="border:2px solid #000000"' : NULL ; ?> value="Yes"  data-target=".sectionB1q13" class="btn sectionB1q13 btncircleMange circleOne rounded-circle">
                                </div>
                                <div class="mr-5 pr-5">
                                    <input data-ans="#sb_q13" type="button" <?php echo ($form_apply3['form3']['sb_q13'] == 'No')? 'style="border:2px solid #000000"' : NULL ; ?>  value="No"  data-target=".sectionB1q13" class="btn sectionB1q13 btncircleMange circleOne rounded-circle">
                                </div>
                                <i class="mr-5">(circle number)</i>
                                <i class="mr-5">(If ‘YES’ go to Student Declaration)</i>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q14</strong>
                        </div>
                        <div class="col-md-11">
                                <p>If you answered <strong>‘YES’</strong> to Q13, tick any of these boxes if they apply to you:</p>
                                    <div class="form-check form-check-inline">
                                        <input name="sb_q14" class="form-check-input checkOne sectionq14" <?php echo ($form_apply3['form3']['sb_q14'] == 'I have a current and valid Health Care Card, Pensioner Concession Card or Veteran’s Gold Card')? 'checked' : NULL ; ?> data-target=".sectionq14" type="checkbox" value="I have a current and valid Health Care Card, Pensioner Concession Card or Veteran’s Gold Card">
                                        <label class="form-check-label" >I have a current and valid Health Care Card, Pensioner Concession Card or Veteran’s Gold Card</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input name="sb_q14" class="form-check-input checkOne sectionq14" <?php echo ($form_apply3['form3']['sb_q14'] == 'I have a letter from my employer or a company receiver on company letterhead that says I have been, or will be, made redundant or retrenched')? 'checked' : NULL ; ?> data-target=".sectionq14" type="checkbox" value="I have a letter from my employer or a company receiver on company letterhead that says I have been, or will be, made redundant or retrenched">
                                        <label class="form-check-label" >I have a letter from my employer or a company receiver on company
                                        letterhead that says I have been, or will be, made redundant or retrenched</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input name="sb_q14" class="form-check-input checkOne sectionq14" <?php echo ($form_apply3['form3']['sb_q14'] == 'I have a separation certificate from my employer')? 'checked' : NULL ; ?> data-target=".sectionq14" type="checkbox" value="I have a separation certificate from my employer">
                                        <label class="form-check-label" >I have a separation certificate from my employer</label>
                                    </div>

                                <i class="mr-5">(If you ticked a box, go to Student Declaration)</i>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <strong>Q15</strong>
                        </div>
                        <div class="col-md-11">
                            <p>If you did not tick any of the boxes in Q14, you can make a declaration that you are a job seeker by ticking this box and signing this form.</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="sb_q15" type="checkbox" <?php echo ($form_apply3['form3']['sb_q15'] == 'I declare that I am currently unemployed')? 'checked' : NULL ; ?> value="I declare that I am currently unemployed">
                                <label class="form-check-label" >I declare that I am currently unemployed</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>         
        </div>

            <h3 class="border text-dark bg-white" >SECTION B3 – EDUCATION HISTORY (STUDENT DECLARATION)</h3>
            <div class="pl-4 pt-2">
                <div class="row">
                    <div class="col-md-12">
                        <p> <strong>STUDENT DECLARATION</strong></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p class="pt-2"><strong>I,</strong>(print your full name):</p>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $form_apply3['form3']['sb3_print_full_name']; ?>" name="sb3_print_full_name" class="text-center form-control" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <p class="pt-2"><strong>In seeking to enrol in</strong>(write the code and full title of the
                        qualification/s or skill set/s):</p>
                    </div>
                    <div class="col-md-8">
                        <input type="text" value="<?php echo $form_apply3['form3']['sb3_in_seeking_to_enrol']; ?>" name="sb3_in_seeking_to_enrol" style="height:120px" class="text-center form-control" >
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p class="pt-2"><strong>Declare the following to be true and accurate statements:</strong></p>
                        <ul>
                            <li><strong>I AM / AM NOT</strong> enrolled in a school, including government, non-government, independent, Catholic or home school. (circle the appropriate response)</li>
                            <li><strong>I AM / AM NOT</strong> enrolled in the Commonwealth Government’s Skills for Education and Employment program. (circle the appropriate response)</li>
                            <li>I understand that my enrolment in the above qualification/s and/or skill set/s may be subsidised by the Victorian and Commonwealth Government under the Skills First Program. I understand how my enrolment will affect my future training options and eligibility for further training under the Skills First program.</li>
                            <li>I acknowledge and understand that I may be contacted by the Department of Education and Training or an agent to participate in a survey, interview or other questionnaire.</li>
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex">
                            <p class="pt-2 pr-2"><strong>SIGNED:</strong>
                            </p>
                                <input name="sb3_signed"  value="<?php echo $form_apply3['form3']['sb3_signed']; ?>"  type="text" style="height:50px" class="text-center form-control" >
                            <p class="pt-2 px-2">
                                <strong>DATE: </strong>
                            </p>
                                <input name="sb3_date"   value="<?php echo $form_apply3['form3']['sb3_date']; ?>" type="date" style="height:50px" class="text-center form-control" >
                        </div>
                    </div>
                </div>

            </div>
                <input type="hidden" name="formid" value="<?php echo $form_apply3['form3']['id']; ?>" />
            <h3 class="text-dark border" style="background-color:#90ee90">SECTION C – TRAINING PROVIDER DECLARATION</h3>
            <div class="pl-4">
                <strong>TO BE COMPLETED BY THE TRAINING PROVIDER – <span class="text-danger">DON’T LEAVE ANY SECTIONS BLANK </span> </strong>
                <div class="row  pt-2">
                    <div class="col-md-6">
                        <strong>Number of qualifications student is currently eligible for:</strong>
                    </div>
                    <div class="col-md-6 ">
                        <div class="form-check form-check-inline px-4">
                            <input class="form-check-input checkOne sectioncQ1" <?php echo ($form_apply3['form3']['sectionc']['sc_num_quali_eligible'] == 0)? 'checked': NULL; ?> data-target=".sectioncQ1" name="sectionc[sc_num_quali_eligible]" type="checkbox" value="0">
                            <label class="form-check-label">0</label>
                        </div>
                        <div class="form-check form-check-inline px-4">
                            <input class="form-check-input checkOne sectioncQ1" <?php echo ($form_apply3['form3']['sectionc']['sc_num_quali_eligible'] == 1)? 'checked': NULL; ?> data-target=".sectioncQ1" name="sectionc[sc_num_quali_eligible]" type="checkbox" value="1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline px-4">
                            <input class="form-check-input checkOne sectioncQ1" <?php echo ($form_apply3['form3']['sectionc']['sc_num_quali_eligible'] == 2)? 'checked': NULL; ?> data-target=".sectioncQ1" name="sectionc[sc_num_quali_eligible]" type="checkbox" value="1">
                            <label class="form-check-label">2</label>
                        </div>
                    </div>
                </div>
                <div class="row pt-2">
                    <div class="col-md-6">
                        <strong>Eligibility exemption granted:</strong>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check form-check-inline px-4">
                            <input class="form-check-input checkOne sectioncQ2" <?php echo ($form_apply3['form3']['sectionc']['sc_eligibility_granted'] == 'yes')? 'checked': NULL; ?> data-target=".sectioncQ2" name="sectionc[sc_eligibility_granted]" type="checkbox" value="yes">
                            <label class="form-check-label" >Yes</label>
                        </div>
                        <div class="form-check form-check-inline px-4">
                            <input class="form-check-input checkOne sectioncQ2" <?php echo ($form_apply3['form3']['sectionc']['sc_eligibility_granted'] == 'no')? 'checked': NULL; ?> data-target=".sectioncQ2" name="sectionc[sc_eligibility_granted]" type="checkbox" value="no">
                            <label class="form-check-label" >No</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p>Based on:</p>
                        <ul>
                            <li>discussion with the student;</li>
                            <li>the evidence I have sighted (and retained a copy of) in Section A; and</li>
                            <li>the information provided to me by the student in Section B of this form;</li>
                        </ul>
                        <p>I believe that the above individual satisfies the Skills First Entitlement eligibility requirements as set out in the VET Funding Contract
                            (the Contract) and the Guidelines About Eligibility (the Eligibility Guidelines) and is eligible for funding under the Skills First Program for
                            the following program/s:</p>
                        <p class="m-0"><i>(write the code and full title of the program/s in which the student is seeking to enrol)</i></p>
                        <input type="text" value="<?php echo $form_apply3['form3']['sectionc']['sc_seeking_to_enroll']; ?>" name="sectionc[sc_seeking_to_enroll]" style="height:70px;" class="text-center form-control" >
                        <p>Where applicable I have also sighted and retained relevant evidence required
                        to grant an exemption from eligibility requirements or other limits under any initiatives in Part C 
                        of Schedule 1 of the Contract and as specified in Attachment 4 of the Eligibility Guidelines.</p>
                        <p>I acknowledge that as the Training Provider’s authorised delegate, I am responsible for ensuring that 
                        all parts of this form are complete. By signing this Declaration, 
                        I acknowledge that I have reviewed <strong>Sections A</strong> and <strong>B</strong> and have confirmed they have been completed in full.</p>


                        <strong>Authorised Training Provider Delegate:</strong>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="pt-1">Name:</p>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="sectionc[sc_name]" value="<?php echo $form_apply3['form3']['sectionc']['sc_name']; ?>"  class="text-center form-control" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="pt-1">Position:</p>
                            </div>
                            <div class="col-md-9">
                                <input type="text"  name="sectionc[sc_position]" value="<?php echo $form_apply3['form3']['sectionc']['sc_position']; ?>" class="text-center form-control" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="pt-1">Signed:</p>
                            </div>
                            <div class="col-md-9">
                                <input type="text" name="sectionc[sc_signed]" value="<?php echo $form_apply3['form3']['sectionc']['sc_signed']; ?>"  class="text-center form-control" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="pt-1">Date:</p>
                            </div>
                            <div class="col-md-9">
                                <input type="date" name="sectionc[sc_date]"  value="<?php echo $form_apply3['form3']['sectionc']['sc_date']; ?>" class="text-center form-control" >
                            </div>
                        </div>

                        <div class="border border-dark">
                            <div class="row p-3 mb-4">
                                <div class="col-md-12">
                                    <strong>Note:</strong>
                                    <p>Use this section to record additional detail, relevant eligibility information, including information used by the Training Provider to verify the student’s eligibility that is not captured in Sections A or B.</p>
                                    <p><strong>If there are no notes, write N/A</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="pl-4 mt-3">
                <div class="row">
                    <div class="col-md-12">
                    <p>This questionnaire shall be completed by Optimistic Futures Pty Ltd representative. This questionnaire is not a substitute of the Skills
                        First Evidence of Eligibility Declaration, however, enhance Optimistic Futures’ decision to enrol student in a Government subsidised
                        training. Optimistic Futures representative shall complete this questionnaire after interviewing students.</p>

                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td colspan="4">Optimistic Futures representative is required to ask the questions to student and record the responses as Yes, No or N/A (Not Applicable).</td>
                                    <td><strong>Not eligible if;</strong></td>
                                </tr>
                                <tr>
                                    <td>Are you an Australian Resident, holder of permanent visa or New Zealand Citizen?</td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne areYouResidentInAustralia" <?php echo ($form_apply3['form3']['sectionc']['sc_autralian_resident'] == 'yes')? 'checked': NULL; ?> name="sectionc[sc_autralian_resident]" data-target=".areYouResidentInAustralia"  type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne areYouResidentInAustralia" <?php echo ($form_apply3['form3']['sectionc']['sc_autralian_resident'] == 'no')? 'checked': NULL; ?> name="sectionc[sc_autralian_resident]" data-target=".areYouResidentInAustralia"  type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne areYouResidentInAustralia" <?php echo ($form_apply3['form3']['sectionc']['sc_autralian_resident'] == 'n/a')? 'checked': NULL; ?> name="sectionc[sc_autralian_resident]" data-target=".areYouResidentInAustralia"  type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                    </td>
                                    <td>Yes</td>
                                </tr>
                            
                                <tr>
                                    <td>Are you currently enrolled in school?</td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne enrolledInSchool"  <?php echo ($form_apply3['form3']['sectionc']['sc_current_enroll_schl'] == 'yes')? 'checked': NULL; ?> name="sectionc[sc_current_enroll_schl]" data-target=".enrolledInSchool" type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne enrolledInSchool"  <?php echo ($form_apply3['form3']['sectionc']['sc_current_enroll_schl'] == 'no')? 'checked': NULL; ?> name="sectionc[sc_current_enroll_schl]" data-target=".enrolledInSchool" type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne enrolledInSchool"  <?php echo ($form_apply3['form3']['sectionc']['sc_current_enroll_schl'] == 'n/a')? 'checked': NULL; ?> name="sectionc[sc_current_enroll_schl]" data-target=".enrolledInSchool" type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                    </td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td>Are you currently held at prison or undertake weekend detention?<br />
                                <strong class="pl-3" >If yes:</strong> Are you able to attend the classes at the designated location?
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input checkOne weekend_detention" <?php echo ($form_apply3['form3']['sectionc']['sc_weekend_detention'] == 'yes')? 'checked': NULL; ?> name="sectionc[sc_weekend_detention]" data-target=".weekend_detention"  type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkOne ifattendClassDentention" <?php echo ($form_apply3['form3']['sectionc']['sc_designated_location'] == 'yes')? 'checked': NULL; ?> name="sectionc[sc_designated_location]" data-target=".ifattendClassDentention" type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne weekend_detention" <?php echo ($form_apply3['form3']['sectionc']['sc_weekend_detention'] == 'no')? 'checked': NULL; ?> name="sectionc[sc_weekend_detention]" data-target=".weekend_detention"  type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkOne ifattendClassDentention" <?php echo ($form_apply3['form3']['sectionc']['sc_designated_location'] == 'n/a')? 'checked': NULL; ?> name="sectionc[sc_designated_location]" data-target=".ifattendClassDentention" type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne weekendDentention" <?php echo ($form_apply3['form3']['sectionc']['sc_weekend_detention'] == 'n/a')? 'checked': NULL; ?> name="sectionc[sc_weekend_detention]" data-target=".weekendDentention"  type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input checkOne ifattendClassDentention" <?php echo ($form_apply3['form3']['sectionc']['sc_designated_location'] == 'n/a')? 'checked': NULL; ?> name="sectionc[sc_designated_location]" data-target=".ifattendClassDentention" type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                    </td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td>Have you commenced or scheduled to commence two or more government subsidized courses during current year?</td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne scheduletocommence_cyear" <?php echo ($form_apply3['form3']['sectionc']['sc_gov_subsidies_current_year'] == 'yes')? 'checked': NULL; ?> name="sectionc[sc_gov_subsidies_current_year]" data-target=".scheduletocommence_cyear" name="scheduletocommence_cyear" type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne scheduletocommence_cyear" <?php echo ($form_apply3['form3']['sectionc']['sc_gov_subsidies_current_year'] == 'no')? 'checked': NULL; ?> name="sectionc[sc_gov_subsidies_current_year]" data-target=".scheduletocommence_cyear" name="scheduletocommence_cyear" type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne scheduletocommence_cyear" <?php echo ($form_apply3['form3']['sectionc']['sc_gov_subsidies_current_year'] == 'n/a')? 'checked': NULL; ?>  name="sectionc[sc_gov_subsidies_current_year]" data-target=".scheduletocommence_cyear" name="scheduletocommence_cyear" type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                    </td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td>Have you commenced or scheduled to commence two or more government subsidized courses at the same AQF level in lifetime?</td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne scheduled_to_commence" <?php echo ($form_apply3['form3']['sectionc']['sc_gov_subsidies_aqf_life_time'] == 'yes')? 'checked': NULL; ?>  name="sectionc[sc_gov_subsidies_aqf_life_time]" data-target=".scheduled_to_commence" name="scheduled_to_commence" type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne scheduled_to_commence" <?php echo ($form_apply3['form3']['sectionc']['sc_gov_subsidies_aqf_life_time'] == 'no')? 'checked': NULL; ?>  name="sectionc[sc_gov_subsidies_aqf_life_time]" data-target=".scheduled_to_commence" name="scheduled_to_commence" type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne scheduled_to_commence" <?php echo ($form_apply3['form3']['sectionc']['sc_gov_subsidies_aqf_life_time'] == 'n/a')? 'checked': NULL; ?>  name="sectionc[sc_gov_subsidies_aqf_life_time]" data-target=".scheduled_to_commence" name="scheduled_to_commence" type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                    </td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td>Have you commenced two or more government subsidized courses with the title “Course in......” in lifetime?</td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne govsubsidies-lifetime" name="sectionc[sc_gov_subsidies_course_life_time]" <?php echo ($form_apply3['form3']['sectionc']['sc_gov_subsidies_course_life_time'] == 'yes')? 'checked': NULL; ?> data-target=".govsubsidies-lifetime" type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne govsubsidies-lifetime" name="sectionc[sc_gov_subsidies_course_life_time]" <?php echo ($form_apply3['form3']['sectionc']['sc_gov_subsidies_course_life_time'] == 'no')? 'checked': NULL; ?> data-target=".govsubsidies-lifetime" type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne govsubsidies-lifetime" name="sectionc[sc_gov_subsidies_course_life_time]" <?php echo ($form_apply3['form3']['sectionc']['sc_gov_subsidies_course_life_time'] == 'n/a')? 'checked': NULL; ?> data-target=".govsubsidies-lifetime" type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                    </td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td >Can you provide referral form or letter, if your status comes under the following? </br>
                                    a) Asylum Seekers and Victims of Human Trafficking Initiative;</br>
                                    b) access to the VTG for retrenched employees</td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne referralform" <?php echo ($form_apply3['form3']['sectionc']['sc_referral_form_letter_status'] == 'yes')? 'checked': NULL; ?>  name="sectionc[sc_referral_form_letter_status]" data-target=".referralform" type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne referralform" <?php echo ($form_apply3['form3']['sectionc']['sc_referral_form_letter_status'] == 'no')? 'checked': NULL; ?>  name="sectionc[sc_referral_form_letter_status]" data-target=".referralform" type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne referralform" <?php echo ($form_apply3['form3']['sectionc']['sc_referral_form_letter_status'] == 'n/a')? 'checked': NULL; ?>  name="sectionc[sc_referral_form_letter_status]" data-target=".referralform" type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                    </td>
                                    <td>No</td>
                                </tr>

                                <tr>
                                    <td><strong><u>Applicable only if you are under the age of 17</u></strong></br>
                                    Will you be able to provide transition from School Form authorising an
                                    exemption from school enrolment that has been signed by the student’s school
                                    principal (only in instances where the student has completed year 10) or signed
                                    by a Department of Education and Training Regional Director?
                                    </td>
                                    <td><div class="form-check">
                                            <input name="sectionc[sc_applicable_under_the_age_17]" <?php echo ($form_apply3['form3']['sectionc']['sc_applicable_under_the_age_17'] == 'yes')? 'checked': NULL; ?>  class="form-check-input checkOne applicable_under17" data-target=".applicable_under17" type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input name="sectionc[sc_applicable_under_the_age_17]" <?php echo ($form_apply3['form3']['sectionc']['sc_applicable_under_the_age_17'] == 'no')? 'checked': NULL; ?>  class="form-check-input checkOne applicable_under17" data-target=".applicable_under17" type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input name="sectionc[sc_applicable_under_the_age_17]" <?php echo ($form_apply3['form3']['sectionc']['sc_applicable_under_the_age_17'] == 'n/a')? 'checked': NULL; ?>  class="form-check-input checkOne applicable_under17" data-target=".applicable_under17" type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                    </td>
                                    <td>No</td>
                                </tr>

                                <tr>
                                    <td>Are you currently enrolled in two or more courses?</td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne more_enroll_courses" <?php echo ($form_apply3['form3']['sectionc']['sc_enroll_two_or_more_course'] == 'yes')? 'checked': NULL; ?> name="sectionc[sc_enroll_two_or_more_course]" data-target=".more_enroll_courses" type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne more_enroll_courses" <?php echo ($form_apply3['form3']['sectionc']['sc_enroll_two_or_more_course'] == 'no')? 'checked': NULL; ?> name="sectionc[sc_enroll_two_or_more_course]" data-target=".more_enroll_courses" type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input class="form-check-input checkOne more_enroll_courses" <?php echo ($form_apply3['form3']['sectionc']['sc_enroll_two_or_more_course'] == 'n/a')? 'checked': NULL; ?> name="sectionc[sc_enroll_two_or_more_course]" data-target=".more_enroll_courses" type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                    </td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td>Have you started two or more courses during current period?</td>
                                    <td><div class="form-check">
                                            <input name="sectionc[sc_enroll_two_or_more_course_current_period]" <?php echo ($form_apply3['form3']['sectionc']['sc_enroll_two_or_more_course_current_period'] == 'yes')? 'checked': NULL; ?> data-target=".have_you_started_two_or_more_courses_current_periods" class="checkOne form-check-input have_you_started_two_or_more_courses_current_periods" type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input name="sectionc[sc_enroll_two_or_more_course_current_period]" <?php echo ($form_apply3['form3']['sectionc']['sc_enroll_two_or_more_course_current_period'] == 'no')? 'checked': NULL; ?> data-target=".have_you_started_two_or_more_courses_current_periods" class="checkOne form-check-input have_you_started_two_or_more_courses_current_periods" type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input name="sectionc[sc_enroll_two_or_more_course_current_period]" <?php echo ($form_apply3['form3']['sectionc']['sc_enroll_two_or_more_course_current_period'] == 'n/a')? 'checked': NULL; ?>  data-target=".have_you_started_two_or_more_courses_current_periods" class="checkOne form-check-input have_you_started_two_or_more_courses_current_periods" type="checkbox" value="n/a" >
                                            <label class="form-check-label" >
                                                N/A
                                            </label>
                                        </div>
                                    </td>
                                    <td>Yes</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                    <p class="m-1"><strong><u>Only for Job Trainer Initiative:</u></strong></p>
                    <p class="m-0">Students may be eligible for job trainer program funding. The representative is required to ask the following questions
                        that help in understanding about students eligibility of Job Trainer Program.</p>

                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Is Student aged 17 to 24 or a Job seeker?</td>
                                    <td><div class="form-check">
                                            <input name="sectionc[sc_jt_jobseeker_age_17_24]" <?php echo ($form_apply3['form3']['sectionc']['sc_jt_jobseeker_age_17_24'] == 'yes')? 'checked': NULL; ?> class="form-check-input checkOne sc_jt_jobseeker_age_17_24" data-target=".sc_jt_jobseeker_age_17_24"  type="checkbox" value="yes" >
                                            <label  class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input name="sectionc[sc_jt_jobseeker_age_17_24]" <?php echo ($form_apply3['form3']['sectionc']['sc_jt_jobseeker_age_17_24'] == 'no')? 'checked': NULL; ?> class="form-check-input checkOne sc_jt_jobseeker_age_17_24" data-target=".sc_jt_jobseeker_age_17_24"  type="checkbox" value="no" >
                                            <label  class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td>No</td>
                                </tr>
                            
                                <tr>
                                    <td>Have Student have previously received Job Trainer benefits for another program?</td>
                                    <td><div class="form-check">
                                            <input name="sectionc[sc_jt_job_trainer_another_program]" <?php echo ($form_apply3['form3']['sectionc']['sc_jt_job_trainer_another_program'] == 'yes')? 'checked': NULL; ?> class="form-check-input checkOne sc_jt_job_trainer_another_program" data-target=".sc_jt_job_trainer_another_program" type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    </td>
                                    <td><div class="form-check">
                                            <input name="sectionc[sc_jt_job_trainer_another_program]" <?php echo ($form_apply3['form3']['sectionc']['sc_jt_job_trainer_another_program'] == 'no')? 'checked': NULL; ?> class="form-check-input checkOne sc_jt_job_trainer_another_program" data-target=".sc_jt_job_trainer_another_program" type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td>Yes</td>
                                </tr>

                                <tr>
                                    <td>Is student able to provide any of the following (If they are a job seeker)? <br />
                                        • a current and valid Health Care Card, Pensioner Concession Card or Veteran’s Gold Card;<br />
                                        • a separation certificate from the individual’s employer;<br />
                                        • a letter from an employer or company receiver on company letterhead stating that they<br />
                                        have been made, or will be made, redundant or retrenched; or<br />
                                        If they do not have one of the above:<br />
                                        • their response to Part B1 Q15 on the Evidence of Eligibility and Student Declaration form;<br />
                                        • their response to Part B2 Q10 on the Evidence of Eligibility and Student Declaration form;<br />
                                        or<br />
                                        • a self-declaration that they are currently unemployed.<br />
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input name="sectionc[sc_jt_Is_student_able]" <?php echo ($form_apply3['form3']['sectionc']['sc_jt_job_trainer_another_program'] == 'yes')? 'checked': NULL; ?> class="form-check-input checkOne weekendDentention" data-target=".weekendDentention"  type="checkbox" value="yes" >
                                            <label class="form-check-label" >
                                                Yes
                                            </label>
                                        </div>
                                    
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input name="sectionc[sc_jt_Is_student_able]" <?php echo ($form_apply3['form3']['sectionc']['sc_jt_job_trainer_another_program'] == 'no')? 'checked': NULL; ?> class="form-check-input checkOne weekendDentention" data-target=".weekendDentention"  type="checkbox" value="no" >
                                            <label class="form-check-label" >
                                                No
                                            </label>
                                        </div>
                                    </td>
                                    <td>No</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex mt-3">
                            <p><strong>RTO REPRESENTATIVE SIGNATURE:
                                <input style="width:442px" name="sectionc[sc_rto_sign]" type="text" value="<?php echo $form_apply3['form3']['sectionc']['sc_rto_sign']; ?>" class="text-center border-bottom-only " >
                                DATE:<input type="date" style="width:235px" name="sectionc[sc_rto_sign_date]" value="<?php echo $form_apply3['form3']['sectionc']['sc_rto_sign_date']; ?>"  class="text-center border-bottom-only " >
                            </strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <button class="btn btn-success text-white btn-block" type="submit">SUBMIT</button>
            </div>
        </div>
    </div>
    <div class="col-md-1">
        <nav class="navbar-expand-sm sticky-top  saveButton">
            <button type="submit" class="btn btn-outline-success btn-block">SAVE</button>
        </nav>
    </div>
        </div>
    </form>
    </div>
</section>
<br />
<br />
<br />
<br />
<br />
<br />
<!-- Welcome_Classic Closed -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
<script>

   

$(function() {


    $(".checkOne").change(function() {
        if($(this).prop("checked") == true){
            var checkedit = true;
        }else{
            var checkedit = false;
        }
        var target = $(this).data("target");
        $(target).prop("checked", false);
        $(this).prop('checked', checkedit);
     
    });

    $('.disableInput').click(function(){
        var disableId = $(this).data("disable");
        $(disableId).prop('disabled', $(this).is(":checked"));
    });


    $('.circleOne').click(function(){
        var circleTarget = $(this).data("target");
        $(circleTarget).css("border", "0px");
        $(circleTarget).prop('checked', false);
        $(this).prop('checked', true);
        $(this).css("border", "2px solid #000000");
        var value  = $(this).val();
        var valueTargetId =  $(this).data('ans');
        $(valueTargetId).val(value);
        console.log(value, valueTargetId);
    })

    $(".anyTwo").change(function(){
        var target = $(this).data('checklimit');
        var checkboxlength = document.querySelectorAll(target+':checked').length;
        if(checkboxlength )
        console.log(checkboxlength);
    });


        $("#formSubmit").submit(function(e) {
        
            e.preventDefault(); 
            var form = $(this);
            var url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(), 
                success: function(data){
                    console.log(data);
                }
            });
        });
})
</script>
<div id="script">


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>

    <!-- End Scripts -->

    <!--End Bootstrap + all CSS -->
    <link title="hello" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/front-pages/css/bootstraps.min.css" rel="stylesheet">
    <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/front-pages/css/style.css" rel="stylesheet">
    <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/front-pages/css/responsive.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/front-pages/fontawesome/css/all.css">
    <!-- Glyphicons CSS -->
    <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/front-pages/css/glyphicons.css">
    <!-- carousell CSS -->
    <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/front-pages/css/carouseller.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.ico">
    <!-- Bootstrap Nav CSS -->
    <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/front-pages/css/bootnavbar.css">

    <!-- WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,500" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500,600,800,400" rel="stylesheet" type="text/css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- End WEB FONT -->

    <!-- End All pages css -->
    <!--End Bootstrap + all CSS -->

    <style>
    .alert {
        text-align: center;
    }
    
    </style>
    <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/front-pages/old_pages_css/style.css" rel="stylesheet">
<script src='<?php echo base_url(); ?>ofpdfs/f3/js/pdfmake.min.js'></script>
<script src='<?php echo base_url(); ?>ofpdfs/f3/js/vfs_fonts.js'></script>

<script src='<?php echo base_url(); ?>ofpdfs/f3/js/form.js'></script>

</div>