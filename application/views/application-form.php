

<?php

$backgroundimage = "";

if ($pageData["page_background"] != "") {
 $backgroundimage = "style='background:url(" . base_url() . $pageData["page_background"] . ") no-repeat top center;background-size: cover;'";
}

?>

<section class="Section_Devs Head_Titles" <?php echo $backgroundimage; ?> >
	<div class="container">
		<h1>Application form</h1>
		<ol class="breadcrumb">
		  <li><a href="index.php">Homeooo</a></li>
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
		  <li class="active">Application form</li>
		</ol>
	</div>
</section>
<!-- Head_Titles Closed -->



<section class="Section_Devs Welcome_Classic">
	<div class="container">

		<div class="alert alert-success" style="display: none;">
            <?php echo '<strong>Success!</strong> '; //$this->ws['reg_thank_msg'];          ?>
        </div>


		<div class="Contatc_Form row">
		  <form id="enrollForm" method="post" action="<?php echo $this->config->base_url() . 'home/applicationform'; ?>" class="validate">
		    <div>
		        <h3>Step 1</h3>
		        <section>
		        <h5>Candidate Information</h5>
		            <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>First Name *</label>
		                        <input type="text" id="first_name" name="first_name" class="form-control Form_Setup required">
		                      </div>
		                  </div>

		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Surname *</label>
		                        <input type="text" id="surname" name="sur_name" class="form-control Form_Setup required">
		                      </div>
		                  </div>

		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>DOB dd/mm/yyyy *</label>
		                        <input type="text" id="dateofbirth" name="date_of_birth" class="form-control Form_Setup required">
		                      </div>
		                       <div class="form-group">
		                        <label>Gender *</label>
		                        <div class="radio">
		                          <label>
		                            <input type="radio" name="gender" id="gender" value="Male" class="required" >
		                            Male
		                          </label>
		                        </div>
		                        <div class="radio">
		                          <label>
		                            <input type="radio" name="gender" id="gender" value="Female" class="required">
		                            Female
		                          </label>
		                        </div>
		                      </div>
		                  </div>


		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>USI *</label>
		                        <input type="text" id="usi" name="usi" class="form-control Form_Setup required">
		                        <p>WHAT IS USI? <a href="https://www.usi.gov.au/" target="_blank"> More info </a> (opens new window)</p>
		                      </div>
		                  </div>

		                  <div class="col-md-6 col-sm-12" >

		                  </div>

		      <br clear="all">
		                   <br />
		        <h5>Contact Information</h5>
		              <div class="col-md-4 col-sm-12" >
		                      <div class="form-group">
		                        <label>Phone</label>
		                        <input type="text" id="con_phone" name="phone" class="form-control Form_Setup ">
		                      </div>
		                  </div>
		                  <div class="col-md-4 col-sm-12" >
		                      <div class="form-group">
		                        <label>Mobile *</label>
		                        <input type="text" id="con_mobile" name="mobile" class="form-control Form_Setup required">
		                      </div>
		                  </div>
		                  <div class="col-md-4 col-sm-12" >
		                      <div class="form-group">
		                        <label>Email *</label>
		                        <input type="email" id="con_email" name="email" class="form-control Form_Setup required">
		                      </div>
		                  </div>
		                  <div class="col-md-12 col-sm-12" >
		                      <div class="form-group">
		                        <label>Do you give us permission to email you as needed for the purposes of the course's conduct? *</label>
		                        <div class="radio">
		                          <label>
		                            <input type="radio" name="permission_email" id="permission_email" value="Yes" class="required" >
		                            Yes
		                          </label>
		                        </div>
		                        <div class="radio">
		                          <label>
		                            <input type="radio" name="permission_email" id="permission_email" value="No" class="required">
		                            No
		                          </label>
		                        </div>
		                      </div>
		                  </div>
		        </section>
		        <h3>Step 2</h3>
		        <section>
		           <h5>Residential Address</h5>
		            <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Building name </label>
		                        <input type="text" id="res_building" name="residential_building" class="form-control Form_Setup ">
		                      </div>
		                  </div>
		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Flat/unit number </label>
		                        <input type="text" id="res_flat" name="residential_flat" class="form-control Form_Setup ">
		                      </div>
		                  </div>
		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Street number *</label>
		                        <input type="text" id="res_street_no" name="residential_street_no" class="form-control Form_Setup required">
		                      </div>
		                  </div>
		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Street *</label>
		                        <input type="text" id="res_street" name="residential_street" class="form-control Form_Setup required">
		                      </div>
		                  </div>
		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Suburb *</label>
		                        <input type="text" id="res_suburb" name="residential_suburb" class="form-control Form_Setup required">
		                      </div>
		                  </div>
		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Post code *</label>
		                        <input type="text" id="res_post_code" name="residential_post_code" class="form-control Form_Setup required">
		                      </div>
		                  </div>
		                   <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>State *</label>
		                        <input type="text" id="res_state" name="residential_state" class="form-control Form_Setup required">
		                      </div>
		                  </div>
		                  <br clear="all">
		                   <br />



		                  <h5>Postal Address</h5>
		                  <div class="col-md-12 col-sm-12" >
		                      <div class="form-group">
		                        <div class="checkbox">
		                          <label>
		                            <input type="checkbox" onclick="checkSameAress(this)" name="same_residential_address" id="same_res_address" value="Yes" checked>
		                            Same as residential
		                          </label>
		                        </div>
		                      </div>
		                  </div>
		                  <div class="postal_address" id="postal_address">
		                    <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Building name</label>
		                        <input type="text" id="pos_building" name="postal_building" class="form-control Form_Setup ">
		                      </div>
		                  </div>
		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Flat/unit number</label>
		                        <input type="text" id="pos_flat" name="postal_flat" class="form-control Form_Setup ">
		                      </div>
		                  </div>
		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Street number</label>
		                        <input type="text" id="pos_street_no" name="postal_street_no" class="form-control Form_Setup ">
		                      </div>
		                  </div>
		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Street</label>
		                        <input type="text" id="pos_street" name="postal_street" class="form-control Form_Setup ">
		                      </div>
		                  </div>
		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Suburb</label>
		                        <input type="text" id="pos_suburb" name="postal_suburb" class="form-control Form_Setup ">
		                      </div>
		                  </div>
		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Post code</label>
		                        <input type="text" id="pos_post_code" name="postal_post_code" class="form-control Form_Setup ">
		                      </div>
		                  </div>
		                   <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>State</label>
		                        <input type="text" id="pos_state" name="postal_state" class="form-control Form_Setup ">
		                      </div>
		                  </div>

		                </div>
		                <br clear="all">
		                   <br />


		           <h5>Comments and questions</h5>
		           <div class="col-md-12 col-sm-12" >
		                      <div class="form-group">
		                        <p>Do you have any questions or any relevant personal details relevant to your course enrolment (i.e. qualifications to be considered for RPL) *</p>
		                        <textarea style="resize:none" id="comments" name="comments" class="form-control Form_Setup_TextArea " rows="3" placeholder="Message*"></textarea>
		                      </div>
		           </div>
		        </section>
		         <h3>Step 3</h3>
		        <section>
		         <h5>Language and Cultural Diversity</h5>
		            <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>In which country were you born?</label>
		                        <div class="checkbox">
		                          <label class="cast">
		                            <input type="checkbox" id="australia_country" name="australia_country" onclick="checkCountry(this)" value="checked"  >
		                            Australia
		                          </label>
		                        </div>
		                        <input   type="text" id="other_country" name="other_country" class="form-control Form_Setup " placeholder="If Other, Please Specify">
		                      </div>
		                  </div>

		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>Do you speak a language other than English at home?</label>
		                        <div class="checkbox">
		                          <label class="cast">
		                          <input type="checkbox" id="english_language" name="english_language" onclick="checkLanguage(this)" value="checked" >
		                            No, English only
		                          </label>
		                        </div>
		                        <input type="text" id="other_laguages" name="other_laguages" class="form-control Form_Setup " placeholder="If Other, Please Specify *">
		                      </div>
		                     <div class="eng_speaks" id="eng_speaks">
		                      <div class="form-group" id="">
		                        <label>How well do you speak English? </label>
		                        <div class="radio">
		                          <label>
		                            <input type="radio" id="eng_speaks_level" name="english_speaks_level" value="Very well" class="">
		                            Very well
		                          </label>
		                          <label>
		                            <input type="radio" id="eng_speaks_level" name="english_speaks_level" value="Well" class="">
		                            Well
		                          </label>
		                          <label>
		                             <input type="radio" id="eng_speaks_level" name="english_speaks_level" value="Not well" class="">
		                            Not well
		                          </label>
		                          <label>
		                          <input type="radio" id="eng_speaks_level" name="english_speaks_level" value="Not at all" class="">
		                            Not at all
		                          </label>
		                        </div>
		                      </div>
		                  </div>
		                </div>
		          <br clear="all">
		                   <br />
		          <h5>Are you of Aboriginal or Torres Strait Islander origin?</h5>
		            <div class="col-md-12 col-sm-12" >
		                      <div class="form-group">
		                        <label>(For persons of either Aboriginal and Torres Strait Islander origin, please tick both ‘Yes’ boxes) </label>
		                        <div class="radio">
		                          <label>
		                            <input type="radio" id="aboriginal_torres" name="aboriginal_torres" value="No" class="">
		                            No
		                          </label>
		                          <label>
		                              <input type="radio" id="aboriginal_torres" name="aboriginal_torres" value="Aboriginal" class="">
		                            Yes, Aboriginal
		                          </label>
		                          <label>
		                             <input type="radio" id="aboriginal_torres" name="aboriginal_torres" value="Torres Strait Islander" class="">
		                            Yes, Torres Strait Islander
		                          </label>
		                        </div>
		                      </div>
		                  </div>
		        <br clear="all">
		                   <br />
		            <h5>Disability</h5>
		           <div class="col-md-12 col-sm-12" >
		                      <div class="form-group">
		                        <label>Do you consider yourself to have disability, impairment or long term condition which may affect your learning? </label>
		                        <div class="redio" onclick="checkdisability(this)">
		                          <label>
		                            <input type="radio" id="check_disability" name="check_disability" class="" value="Yes">
		                            Yes
		                          </label>
		                          <label>
		                           <input type="radio" id="check_disability" name="check_disability" class="" value="No">
		                            No (go to next question)
		                          </label>
		                        </div>
		                      </div>
		                      <div class="form-group" id="disability_area" class="disability_area">
		                        <label>If you indicated the presence of a disability, impairment or long-term condition, please select the area(s) in the following list:(You may indicate more than one area) </label>
		                        <div class="checkbox">
		                          <label class="cast">
		                            <input type="checkbox" id="disability_type" name="disability_type[]" value="Hearing/deaf"  />
		                            Hearing/deaf
		                          </label>
		                          <label class="cast">
		                             <input type="checkbox" id="disability_type" name="disability_type[]" value="Physical" />
		                            Physical
		                          </label>
		                          <label class="cast">
		                           <input type="checkbox" id="disability_type" name="disability_type[]" value="Intellectual" />
		                            Intellectual
		                          </label>
		                          <label class="cast">
		                               <input type="checkbox" id="disability_type" name="disability_type[]" value="Learning" />
		                            Learning
		                          </label>
		                          <label class="cast">
		                                 <input type="checkbox" id="disability_type" name="disability_type[]" value="Mental illness" />
		                            Mental illness
		                          </label>
		                          <label class="cast">
		                           <input type="checkbox" id="disability_type" name="disability_type[]" value="Acquired brain impairment" />
		                            Acquired brain impairment
		                          </label>
		                          <label class="cast">
		                              <input type="checkbox" id="disability_type" name="disability_type[]" value="Vision" />
		                            Vision
		                          </label>
		                          <label class="cast">
		                            <input type="checkbox" id="disability_type" name="disability_type[]" value="Medical condition" />
		                            Medical condition
		                          </label>
		                          <label class="cast">
		                            <input type="checkbox" id="disability_type" name="disability_type[]" value="Other" />
		                            Other
		                          </label>
		                        </div>
		                      </div>
		                  </div>

		        </section>
		        <h3>Step 4</h3>
		        <section>
		          <h5>Schooling</h5>
		            <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <label>What is your highest COMPLETED school level? </label>
		                        <div class="radio">
		                          <label class="cast">
		                                <input type="radio" id="check_schooling" name="check_schooling" value="Never attended school" class="" />
		                            Never attended school
		                          </label>
		                          <label class="cast">
		                             <input type="radio" id="check_schooling" name="check_schooling" value="Year 8 or equivalent" class="" />
		                            Year 8 or equivalent
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="check_schooling" name="check_schooling" value="Year 9 or equivalent" class="" />
		                            Year 9 or equivalent
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="check_schooling" name="check_schooling" value="Year 10 or equivalent" class="" />
		                            Year 10 or equivalent
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="check_schooling" name="check_schooling" value="Year 11 or equivalent" class="" />
		                            Year 11 or equivalent
		                          </label>
		                          <label class="cast">
		                         <input type="radio" id="check_schooling" name="check_schooling" value="Year 12 or equivalent" class="" />
		                            Year 12 or equivalent
		                          </label>
		                        </div>
		                      </div>
		                        <div class="form-group">
		                          <label>In what year did you complete that schooling? </label>
		                          <input type="text" id="completed_year" name="completed_year" class="form-control Form_Setup " />
		                        </div>
		                        <div class="form-group">
		                        <label>Are you still attending secondary school?</label>
		                        <div class="radio">
		                          <label class="cast">
		                             <input type="radio" id="check_schooling" name="check_schooling" value="Yes" class="" />
		                            Yes
		                          </label>
		                          <label class="cast">
		                             <input type="radio" id="check_schooling" name="check_schooling" value="No" class="" />
		                            No
		                          </label>
		                        </div>
		                      </div>
		                  </div>
		        <br clear="all">
		                   <br />
		        <h5>Previous Qualification Attained</h5>

		             <div class="col-md-6 col-sm-12">
		                      <div class="form-group">
		                        <label>Have you SUCCESSFULLY completed any of the following qualifications? </label>
		                        <div class="radio" onclick="preQuilificaion(this)">
		                          <label class="cast">
		                            <input type="radio" id="pre_quilification" name="pre_quilification" value="Yes" class="" />
		                            Yes
		                          </label>
		                          <label class="cast">
		                           <input type="radio" id="pre_quilification" name="pre_quilification" value="No" class="" />
		                            No
		                          </label>
		                        </div>
		                      </div>

		                      <div class="form-group"   id="pre_quilification_box"  >
		                          <label>If YES, then tick ANY applicable boxes </label>
		                          <div class="checkbox">
		                            <label class="cast">
		                             <input type="checkbox" id="completed_qulification" name="completed_qulification[]" value="Bachelor degree or higher degree"   />
		                               Bachelor degree or higher degree
		                            </label>
		                            <label class="cast">
		                             <input type="checkbox" id="completed_qulification" name="completed_qulification[]" value="Advanced diploma or associate degree"  />
		                              Advanced diploma or associate degree
		                            </label>
		                            <label class="cast">
		                             <input type="checkbox" id="completed_qulification" name="completed_qulification[]" value="Diploma (or associate diploma) "  />
		                              Diploma (or associate diploma)
		                            </label>
		                            <label class="cast">
		                                <input type="checkbox" id="completed_qulification" name="completed_qulification[]" value="Certificate IV (or advanced certificate/technician)" />
		                              Certificate IV (or advanced certificate/technician)
		                            </label>
		                            <label class="cast">
		                               <input type="checkbox" id="completed_qulification" name="completed_qulification[]" value="Certificate III (or trade certificate)" />
		                              Certificate III (or trade certificate)
		                            </label>
		                            <label class="cast">
		                            <input type="checkbox" id="completed_qulification" name="completed_qulification[]" value="Certificate II" />
		                              Certificate II
		                            </label>
		                            <label class="cast">
		                              <input type="checkbox" id="completed_qulification" name="completed_qulification[]" value="Certificate I" />
		                              Certificate I
		                            </label>
		                            <label class="cast">
		                              <input type="checkbox" id="completed_qulification" name="completed_qulification[]" value=" Certificates other than the above" />
		                              Certificates other than the above
		                            </label>
		                          </div>
		                        </div>
		                  </div>
		         <br clear="all">
		                   <br />
		          <h5>Employment</h5>

		            <div class="col-md-12 col-sm-12" >
		                      <div class="form-group">
		                        <label>Of the following categories, which BEST describes your current employment status? (Tick ONE box only) </label>
		                        <div class="radio">
		                          <label class="cast">

		                              <input type="radio" id="last_employment_type" name="last_employment_type" value="Full-time employee" class="">

		                            Full-time employee
		                          </label>
		                          <label class="cast">
		                          <input type="radio" id="last_employment_type" name="last_employment_type" value="Part-time employee" class="">
		                            Part-time employee
		                          </label>
		                          <label class="cast">
		                           <input type="radio" id="last_employment_type" name="last_employment_type" value="Self employed – not employing others" class="">
		                            Self employed – not employing others
		                          </label>
		                          <label class="cast">
		                              <input type="radio" id="last_employment_type" name="last_employment_type" value="Employer" class="">
		                            Employer
		                          </label>
		                          <label class="cast">
		                              <input type="radio" id="last_employment_type" name="last_employment_type" value="Employed – unpaid worker in a family business" class="">
		                            Employed – unpaid worker in a family business
		                          </label>
		                          <label class="cast">
		                             <input type="radio" id="last_employment_type" name="last_employment_type" value="Unemployed – seeking full-time work" class="">
		                            Unemployed – seeking full-time work
		                          </label>
		                          <label class="cast">
		                             <input type="radio" id="last_employment_type" name="last_employment_type" value="Unemployed – seeking part-time work" class="">
		                            Unemployed – seeking part-time work
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="last_employment_type" name="last_employment_type" value="Not employed – not seeking employment" class="">
		                            Not employed – not seeking employment
		                          </label>
		                        </div>
		                      </div>
		                  </div>
		          <br clear="all">
		                   <br />
		          <h5>Study reason</h5>

		           <div class="col-md-12 col-sm-12" >
		                      <div class="form-group">
		                        <label>Of the following categories, which BEST describes your main reason for undertaking this course? (Tick ONE box only) </label>
		                        <div class="checkbox" onclick="studyReason(this)">
		                          <label class="cast">
		                           <input type="radio" id="study_reason" name="study_reason" value="To get a job" class=""/>
		                            To get a job
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="study_reason" name="study_reason" value="To develop my existing business" class=""/>
		                            To develop my existing business
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="study_reason" name="study_reason" value="To start my own business" class=""/>
		                            To start my own business
		                          </label>
		                          <label class="cast">
		                             <input type="radio" id="study_reason" name="study_reason" value="To try a different career" class=""/>
		                            To try a different career
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="study_reason" name="study_reason" value="To get a better job or promotion" class=""/>
		                            To get a better job or promotion
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="study_reason" name="study_reason" value="It was a requirement of my job" class="" />
		                            It was a requirement of my job
		                          </label>
		                          <label class="cast">
		                             <input type="radio" id="study_reason" name="study_reason" value="I wanted extra skills for my job" class="" />
		                            I wanted extra skills for my job
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="study_reason" name="study_reason" value="To get into another course of study" class="" />
		                            To get into another course of study
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="study_reason" name="study_reason" value="For personal interest or self-development" class="" />
		                            For personal interest or self-development
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="study_reason" name="study_reason" value="Other" class="">
		                            Other reasons
		                            <input type="text" id="study_reason_text" name="study_reason_text" value="" >
		                          </label>
		                        </div>
		                      </div>
		                  </div>
		          <br clear="all">
		                   <br />
		        <h5>Additional Information</h5>

		             <div class="col-md-12 col-sm-12" >
		                      <div class="form-group">
		                        <label>How did you find Optimistic Futures? </label>
		                        <div class="checkbox" onclick="find5star(this)">
		                          <label class="cast">
		                            <input type="radio" id="find_5sti" checked="" name="how_find_us" value="Word of mouth" class="" />
		                            Word of mouth
		                          </label>
		                          <label class="cast">
		                             <input type="radio" id="find_5sti" name="how_find_us" value="Search engine" class="" />
		                            Search engine
		                          </label>
		                          <label class="cast">
		                             <input type="radio" id="find_5sti" name="how_find_us" value="Forum" class=""/>
		                            Forum
		                          </label>
		                          <label class="cast">
		                             <input type="radio" id="find_5sti" name="how_find_us" value="Website link" class=""/>
		                            Website link
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="find_5sti" name="how_find_us" value="Print ad" class="" >
		                            Print ad
		                          </label>
		                          <label class="cast">
		                            <input type="radio" id="find_5sti" name="how_find_us" value="Employer" class="" />
		                            Employer
		                          </label>
		                          <label class="cast">
		                             <input type="radio" id="find_5sti" name="how_find_us" value="Other" class="">
		                            Other
		                             <input type="text" id="find_5sti_text" name="how_find_us" value="" >
		                          </label>
		                        </div>
		                      </div>
		                  </div>
		        <br clear="all">
		                   <br />
		            <div class="col-md-12 col-sm-12" >
		                   <p>Please make a single selection from the drop-down menu below and then click REVIEW. You will then be given the option to ADD FURTHER selections if you wish. *</p>
		                  </div>


		                  <div class="col-md-6 col-sm-12" >
		                      <div class="form-group">
		                        <select class="form-control Form_Setup required" id="course_name" name="course_name">
		                          <option value="">I want To Enroll In...</option>
		                          <option>CHC30113 Certificate III of early Childhood Education and Care</option>
		                          <option>CHC50113 Diploma of Early Childhood Education and Care</option>
		                          <option>HLTAID001 Provide cardiopulmonary resuscitation</option>
		                          <option>HLTAID002 Provide basic emergency life support</option>
		                          <option>HLTAID003 Provide first aid</option>
		                          <option>HLTAID004 Provide an emergency first aid response in an education and care setting</option>
		                          <option>CPP20212 Certificate II in Security Operations</option>
		                          <option>CPP30411 Certificate III in Security Operations</option>
		                        </select>



		                        <div id="demo3" class="collapse Roll_pads">
		                            <h3>Information about this unit</h3>
		                            <p>This unit of competency describes the skills and knowledge required to provide a first aid response to a casualty. The unit applies to all workers who may be required to provide a first aid response in a range of situations, include community and workplace settings.</p>
		                        </div>
		                        <!--CONNECT COL-->

		                        <div id="demo4" class="collapse Roll_pads">
		                            <h3>Information about this unit</h3>
		                            <p>This unit of competency describes the skills and knowledge required to provide a first aid response to a casualty. The unit applies to all workers who may be required to provide a first aid response in a range of situations, include community and workplace settings.</p>
		                        </div>
		                        <!--CONNECT COL-->

		                      </div>






		                      <div class="form-group">
		                        <input type="submit" style="display:none;" value="" id="submitBtnappform"  class="btn btn-default "></button>

		                      </div>
		                  </div>
		        </section>
		    </div>
		  </form>
		</div>
		<!-- 4STEP FORM CLOSED -->

	</div>
</section>
<!-- Welcome_Classic Closed -->

