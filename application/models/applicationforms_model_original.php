<?php
    class applicationforms_model extends CI_Model {
        public function __construct()
        {
            // $this->load->database();
        }

        public function form_apply1()
        {
            // surname
            $first = $this->input->post('firsttext');
            $second = $this->input->post('secondtext');
            $third = $this->input->post('thirdtext');
            $forth = $this->input->post('forthtext');
            $fifth = $this->input->post('fifthtext');
            $sixth = $this->input->post('sixthtext');
            $seventh = $this->input->post('seventhtext');
            $eight = $this->input->post('eighttext');
            $ninth = $this->input->post('ninthtext');
            $tenth = $this->input->post('tenthtext');
            $eleven = $this->input->post('eleventext');
            $twelve = $this->input->post('twelevetext');

            // given name
            $thirteen = $this->input->post("thirteentext");
            $fourteen = $this->input->post("fourteentext");
            $fifteen = $this->input->post("fifteentext");
            $sixteen = $this->input->post("sixteentext");
            $seventeen = $this->input->post("seventeentext");
            $eighteen = $this->input->post("eighteentext");
            $ninteen = $this->input->post("ninteentext");
            $twenty = $this->input->post("twentytext"); 
            $twentyOne = $this->input->post("twentyOnetext");
            $twentyTwo = $this->input->post("twentyTwotext");
            $twentyThree = $this->input->post("twentyThreetext");
            $twentyFour = $this->input->post("twentyFourtext");
            
            // middle name
            $twentyFive = $this->input->post("twentyFivetext");
            $twentySix = $this->input->post("twentySixtext");
            $twentySeven = $this->input->post("twentySeventext");
            $twentyEight = $this->input->post("twentyEighttext");
            $twentyNine = $this->input->post("twentyNinetext");
            $thirty = $this->input->post("thirtytext");
            $thirtyOne = $this->input->post("thirtyOnetext");
            $thirtyTwo = $this->input->post("thiryTwotext"); 
            $thirtyThree = $this->input->post("thirtyThreetext");
            $thirtyFour = $this->input->post("thirtyFourtext");
            $thirtyFive = $this->input->post("thirtyFivetext");
            $thirtySix = $this->input->post("thirtySixtext");
            
            //date 0f birth
                //year
            $thirtySeven = $this->input->post("thirtySeventext");
            $thirtyEight = $this->input->post("thirtyEighttext");
            $thirtyNine = $this->input->post("thirtyNinetext");
            $forty = $this->input->post("fortytext");

                //-
            $fortyOne = $this->input->post("fortyOnetext");

                //month
            $fortyTwo = $this->input->post("fortyTwotext");
            $fortyThree = $this->input->post("fortyThreetext");

                //-
            $fortyFour = $this->input->post("fortyFourtext");

                //day
            $fortyFive = $this->input->post("fortyFivetext");
            $fortySix = $this->input->post("fortySixtext");

            $fortySeven = $this->input->post("fortySeventext");
            $fortyEight = $this->input->post("fortyEighttext");
            
            // country of birth
            $fortyNine = $this->input->post("fortyNinetext");
            $fifty = $this->input->post("fiftytext");
            $fiftyOne = $this->input->post("fiftyOnetext");
            $fiftyTwo = $this->input->post("fiftyTwotext");
            $fiftyThree = $this->input->post("fiftyThreetext");
            $fiftyFour = $this->input->post("fiftyFourtext");
            $fiftyFive = $this->input->post("fiftyFivetext");
            $fiftySix = $this->input->post("fiftySixtext");
            $fiftySeven = $this->input->post("fiftySeventext");
            $fiftyEight = $this->input->post("fiftyEighttext");
            $fiftyNine = $this->input->post("fiftyNinetext");
            $sixty = $this->input->post("sixtytext");

            // town of birth
            $sixtyOne = $this->input->post("text");
            $sixtyTwo = $this->input->post("text");
            $sixtyThree = $this->input->post("text");
            $sixtyFour = $this->input->post("text");
            $sixtyFive = $this->input->post("text");
            $sixtySix = $this->input->post("text");
            $sixtySeven = $this->input->post("text");
            $sixtyEight = $this->input->post("text");
            $sixtyNine = $this->input->post("text");
            $seventy = $this->input->post("text");
            $seventyOne = $this->input->post("text");
            $seventyTwo = $this->input->post("text");

            // country
            // $seventyThree = $this->input->post("text");
            // $seventyFour = $this->input->post("text");
            // $seventyFive = $this->input->post("text");
            // $seventySix = $this->input->post("text");
            // $seventySeven = $this->input->post("text");
            // $seventyEight = $this->input->post("text");
            // $seventyNine = $this->input->post("text");
            // $eighty = $this->input->post("text");
            // $eightyOne = $this->input->post("text");
            // $eightyTwo = $this->input->post("text");
            // $eightThree = $this->input->post("text");
            // $eightyFour = $this->input->post("text");

            // // mobile number
            // $eightyFive = $this->input->post("text");
            // $eightySix = $this->input->post("text");
            // $eightySeven = $this->input->post("text");
            // $eightyEight = $this->input->post("text");
            // $eightyNine = $this->input->post("text");
            // $ninty = $this->input->post("text");

            // concat all the values
            $surname = $first.$second.$third.$forth.$fifth.$sixth.$seventh.$eight.$ninth.$tenth.$eleven.$twelve;
            $givename = $thirteen.$fourteen.$fifteen.$sixteen.$seventeen.$eighteen.$ninteen.$twenty.$twentyOne.$twentyTwo.$twentyThree.$twentyFour;
            $middlename = $twentyFive.$twentySix.$twentySeven.$twentyEight.$twentyNine.$thirty.$thirtyOne.$thirtyTwo.$thirtyThree.$thirtyFour.$thirtyFive.$thirtySix;
            $date_of_birth = $thirtySeven.$thirtyEight.$thirtyNine.$forty.'-'.$fortyTwo.$fortyThree.'-'.$fortyFive.$fortySix.$fortySeven.$fortyEight;
            $country_of_birth = $fortyNine.$fifty.$fiftyOne.$fiftyTwo.$fiftyThree.$fiftyFour.$fiftyFive.$fiftySix.$fiftySeven.$fiftyEight.$fiftyNine.$sixty;
            
            // print_r($surname." ");```
            // print_r($givename." ");
            // print_r($middlename." ");
            // print_r($date_of_birth." ");
            // print_r($country_of_birth." ");

            $data = array(
                    'surname' => $surname,
                    'given_name' => $givename,
                    'middle_name' => $middlename,
                    'date_of_birth' => $date_of_birth,
                    'country_of_birth' => $country_of_birth,
            );

            // return $this->db->insert('USI_Form', $data);
            // print_r($data);        
            
        }
        public function get_form_apply2_admin($user="")
        {
            $user_login="";
            $loginUserId = $this->session->userdata('user_id');
            if($user != ""){$user_login=$user;}else{$user_login=$loginUserId;}
            $query = $this->db->get_where('enrollment_booklet', array('Id' => $user_login));

            $qualifications = array(
                        array(
                            'code'=>'CHC30113',
                            'title'=> 'Certificate III in Early Childhood Education and Care'
                        ),
                        array(
                            'code'=>'CHC50113',
                            'title'=> 'Diploma of Early Childhood Education and Care'
                        ),
                        array(
                            'code'=>'CPP20212',
                            'title'=> 'Certificate II in Security Operations'
                        ),
                        array(
                            'code'=>'CPP30411',
                            'title'=> 'Certificate III in Security Operations'
                        ),
                        array(
                            'code'=>'CHC33015',
                            'title'=> 'Certificate III in Individual Support'
                        ),
                    );

            $attachments = array('Student Induction Form', 'Pre-Assessment interview completed', 'Language Literacy and Numeracy Completed', 'Skills First Program Enrolment Form Completed','Student ID’s Checked and Completed', 'USI Permission and Verification Form', 'Recognition Prior Learning', 'Credit Transfer Form', 'Statement of Fees');

            $row1 = $query->row_array();
             $row2 = array(
                'enrol' => $row1,
                'qualifications' => $qualifications,
                'attachments' => $attachments,
            );

             return $row2;
        }









        public function get_form_apply2()
        {

            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId));
            // $row1 = $query->row_array();

            $qualifications = array(
                        array(
                            'code'=>'CHC30113',
                            'title'=> 'Certificate III in Early Childhood Education and Care'
                        ),
                        array(
                            'code'=>'CHC50113',
                            'title'=> 'Diploma of Early Childhood Education and Care'
                        ),
                        array(
                            'code'=>'CPP20212',
                            'title'=> 'Certificate II in Security Operations'
                        ),
                        array(
                            'code'=>'CPP30411',
                            'title'=> 'Certificate III in Security Operations'
                        ),
                        array(
                            'code'=>'CHC33015',
                            'title'=> 'Certificate III in Individual Support'
                        ),
                    );

            $attachments = array('Student Induction Form', 'Pre-Assessment interview completed', 'Language Literacy and Numeracy Completed', 'Skills First Program Enrolment Form Completed','Student ID’s Checked and Completed', 'USI Permission and Verification Form', 'Recognition Prior Learning', 'Credit Transfer Form', 'Statement of Fees');

            $row1 = $query->row_array();
             $row2 = array(
                'enrol' => $row1,
                'qualifications' => $qualifications,
                'attachments' => $attachments,
            );

             return $row2;
        }

        public function form_apply2_studentName($studentName)
        {   
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId));
            // print_r($query->row_array());
            // $row = $query->row_array();
            
            // print_r("number of rows   ".$query->num_rows());
            if ($query->num_rows() <= 0 )
            {   
                $data = array('student_name' => $studentName, );
                //insert database
                 $this->db->insert('enrollment_booklet', $data);
            }else {
                $updateData = array(
                    'student_name' =>  $studentName, 
                );
                // print_r(" -in else ".$studentName);
                // update current data
                $this->db->where('user_id', $loginUserId);
                $this->db->update('enrollment_booklet', $updateData);
                // print_r(" -update data ". $loginUserId);

            }

            // print_r($this->session->userdata('user_id'));
            
            // $data = array('student_name' => $studentName, );

           

        }

        public function form_apply2_qualification($selectedQualification)
        {
            // print_r("selected qual".$selectedQualification);
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId));
            // print_r($query->row_array());
            // $row = $query->row_array();
            
            // print_r("number of rows   ".$query->num_rows());
            if ($query->num_rows() <= 0 )
            {   
                $data = array('qualification' => $selectedQualification, );
                //insert database
                 $this->db->insert('enrollment_booklet', $data);
            }else {
                $updateData = array(
                    'qualification' =>  $selectedQualification, 
                );
                // print_r(" -in else ".$studentName);
                // update current data
                $this->db->where('user_id', $loginUserId);
                $this->db->update('enrollment_booklet', $updateData);
                // print_r(" -update data ". $loginUserId);

            }
        }
        
        public function form_apply2_attachments($selectedAttachments)
        {
            // print_r("selected att ".$selectedAttachments);
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId));
            // print_r($query->row_array());
            // $row = $query->row_array();
            
            // print_r("number of rows   ".$query->num_rows());
            if ($query->num_rows() <= 0 )
            {   
                $data = array('attachments' => $selectedAttachments, );
                //insert database
                 $this->db->insert('enrollment_booklet', $data);
            }else {
                $updateData = array(
                    'attachments' =>  $selectedAttachments, 
                );
                // print_r(" -in else ".$studentName);
                // update current data
                $this->db->where('user_id', $loginUserId);
                $this->db->update('enrollment_booklet', $updateData);
                // print_r(" -update data ". $loginUserId);

            }
        }

        // form 3 start ============================================
        // get data =================
        public function get_form_apply3()
        {
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('skills_first_program_enrolment_agreement_for', array('user_id' => $loginUserId));
            $row1 = $query->row_array();

            // courses start
            $courses = array(
                        array(
                            'code'=>'CHC30113',
                            'title'=> 'Certificate III in Early Childhood Education and Care'
                        ),
                        array(
                            'code'=>'CHC50113',
                            'title'=> 'Diploma of Early Childhood Education and Care'
                        ),
                        array(
                            'code'=>'CPP20212',
                            'title'=> 'Certificate II in Security Operations'
                        ),
                        array(
                            'code'=>'CPP30411',
                            'title'=> 'Certificate III in Security Operations'
                        ),
                        array(
                            'code'=>'CHC33015',
                            'title'=> 'Certificate III in Individual Support'
                        ),
                    );
            // courses end

            // mode of study start
            $modeOfStudy = array('Classroom', 'Distance Learning', 'Online', 'RPL', 'CT');
            // mode of study end

            // title start
            $title = array('Mr.', 'Mrs.', 'Miss', 'Ms');
            //title end

            // gender
            $gender = array('Male', 'Female');

            // employment status
            $employment_status = array('Full-Time', 'Employer', 'Part-Time', 'Self-employed - not employing others', 'Unemployed - Seeking full-time work', 'Employed - Unpaid worker in a family business', 'Unemployed - Seeking part-time work', 'Not employed - Not seeking employment');

            // highest completed school
            $highestCompletedSchool = array('Year 12 OR Equivalent', 'Year 9 OR Equivalent', 'Year 11 OR Equivalent', 'Year 8 OR Equivalent', 'Year 10 OR Equivalent', 'Never Attended');

            // attend secondary school
            $attendSecondarySchool = array('Year 10 OR Equivalent', 'Never Attended');

            // completed qualifications
            $completedQulifications = array('Certificate I', 'Certificate II', 'Certificate III', 'Certificate III (Or Trade Certificate)', 'Certificate IV (Or Advance Certificate/Technician)', 'Diploma (Or Associate Diploma)', 'Advance Diploma Or Associate Degree', 'Bachelor Degree Or Higher Degree', 'Certificate Other Than The Above');

            // country of completed qualifications
            $countryOfQualificationCompleted = array('Australia', 'Overseas', 'Australian Equivalent');

            // level of speak
            $levelOfSpeak = array('Very Well', 'Well', 'Not Well', 'Not At All');

            // orogin
            $origin = array('No', 'Yes,Aboriginal', 'Yes,Torres Strait Islander', 'Yes,Both');

            // study reason
            $studyReason = array('To get a job', 'To start my own business', 'It was a requirement of my job', 'For personal interest or self-development', 'To develop my existing business','To try for a different career','I wanted extra skills for my job', 'Other reason', 'To get a better job or promotion', 'To get into another course or study');

            // identification
            $identifications = array('Drivers Licence', 'Passport', 'Proof Of Age Card', 'Learners Permit', 'Birth Certification', 'Medicare Card', 'Health Care Card', 'Credit Card');

            // area of fee concession
            $areaOfFeeConcession = array('Health Care Card issued by the commonwealth','Pensioner Concession Card; or', 'Veteran’s Gold Card; or', 'An alternative card or concession eligibility criterion approved by the Minister for the Purpose of these Guidelines');

            // paymentMethod
            $paymentMethod = array('Cheque', 'Cash – Do not send cash, to make a cash payment please pay at the front desk', 'Bank cheque', ' Money order', 'EFTPOS', 'Funded from Skills First Program');

            //speak language at home
            $speakLanguageAtHome = array('No, only English', 'Yes, (Please speicfy)');

            //areas of disability
            $areasOfDiability = array('Hearing/Deaf', 'Physical', 'Intellectual', 'Learning', 'Mental Illness', 'Vision', 'Medical Condition', 'Acquired brain impairment');

            $row2 = array(
                'enrol' => $row1, // data form database 
                'courses'=> $courses,
                'modeOfStudy' => $modeOfStudy,
                'title' => $title,
                'gender' => $gender,
                'employmentStatus' => $employment_status,
                'highestCompletedSchool' => $highestCompletedSchool,
                'attendSecondarySchool' => $attendSecondarySchool,
                'completedQulifications' => $completedQulifications,
                'countryOfQualificationCompleted' => $countryOfQualificationCompleted,
                'levelOfSpeak' => $levelOfSpeak,
                'origin' => $origin,
                'studyReason' => $studyReason,
                'identifications' => $identifications,
                'areaOfFeeConcession' => $areaOfFeeConcession,
                'paymentMethod' => $paymentMethod,
                'speakLanguageAtHome' => $speakLanguageAtHome,
                'areasOfDiability' => $areasOfDiability
            );
            // print_r($row2['enrol']);
            // print_r($row2);
            return $row2;
        }
        // get data end
        // form 3 end

        //============================
        public function form_apply3($enrolment_courseSelected, $mode_of_studySelected, 
                                    $titleSelected, $genderSelected,$RTOpermissionSelected, 
                                    $newEducatorSelected, $employmentStatusSelected, 
                                    $highestCompletedSchoolSelected,$attendSecondarySchoolSelected, 
                                    $prevQualificationCompletedSelected, $completedQulificationsSelected, 
                                    $countryOfQualificationCompletedSelected, $levelOfSpeakSelected, 
                                    $originSelected, $studyReasonSelected, $identificationsSelected, 
                                    $haveFeesConessionSelected, $areaOfFeeConcessionSelected,
                                    $tuitionSelfIdentifiedSelected, $paymentMethodSelected, 
                                    $consentTestimonialsSelected, $consentPhotoSelected, 
                                    $country_Selected, $speakLanguageAtHomeSelected, 
                                    $govtEnrolCoursesSelected, $govtFundedCoursesSelected, 
                                    $sameLevelGovtFundedCoursesSelected, $haveDisabilitySelected,
                                    $areasOfDiabilitySelected) {

            print_r($mode_of_studySelected.' - '.$enrolment_courseSelected.' - '.$genderSelected.' - '.$RTOpermissionSelected);
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('skills_first_program_enrolment_agreement_for', array('user_id' => $loginUserId));
            // print_r($query->row_array());
            // $row = $query->row_array();
            
            print_r("number of rows   ".$query->num_rows());
            if ($query->num_rows() <= 0 )
            {   
                $data = array(
                    'enrollment_course' => $enrolment_courseSelected, 
                    'mode_of_study' => $mode_of_studySelected,
                    'title' => $titleSelected,
                    'gender' => $genderSelected,
                    'emerg_rto_permission' => $RTOpermissionSelected,
                    'new_Educator' => $newEducatorSelected,
                    'employment_status' => $employmentStatusSelected,
                    'highest_completed_school' => $highestCompletedSchoolSelected,
                    'attend_secondary_school' => $attendSecondarySchoolSelected,
                    'prev_qualification_completed' => $prevQualificationCompletedSelected,
                    'completed_qualifications' => $completedQulificationsSelected,
                    'country_of_qualification_completed' => $countryOfQualificationCompletedSelected,
                    'level_of_speak' => $levelOfSpeakSelected,
                    'origin' => $originSelected,
                    'study_reason' => $studyReasonSelected,
                    'identification' => $identificationsSelected,
                    'have_fees_concession' => $haveFeesConessionSelected,
                    'area_of_fee_concession' => $areaOfFeeConcessionSelected,
                    'tuition_self_identified' => $tuitionSelfIdentifiedSelected,
                    'payment_method' => $paymentMethodSelected,
                    'consent_testimonials' => $consentTestimonialsSelected,
                    'consent_photo' => $consentPhotoSelected,
                    'country_of_birth' => $country_Selected,
                    'speak_language_at_home' => $speakLanguageAtHomeSelected,
                    'govt_enrol_courses' => $govtEnrolCoursesSelected,
                    'govt_funded_courses' => $govtFundedCoursesSelected,
                    'same_level_govt_funded_courses' => $sameLevelGovtFundedCoursesSelected,
                    'have_disability' => $haveDisabilitySelected,
                    'areas_of_disability' => $areasOfDiabilitySelected,

                );
                //insert database
                 $this->db->insert('skills_first_program_enrolment_agreement_for', $data);
            }else {
                $updateData = array(
                    'enrollment_course' => $enrolment_courseSelected, 
                    'mode_of_study' => $mode_of_studySelected,
                    'title' => $titleSelected,
                    'gender' => $genderSelected,
                    'emerg_rto_permission' => $RTOpermissionSelected,
                    'new_Educator' => $newEducatorSelected,
                    'employment_status' => $employmentStatusSelected,
                    'highest_completed_school' => $highestCompletedSchoolSelected,
                    'attend_secondary_school' => $attendSecondarySchoolSelected,
                    'prev_qualification_completed' => $prevQualificationCompletedSelected,
                    'completed_qualifications' => $completedQulificationsSelected,
                    'country_of_qualification_completed' => $countryOfQualificationCompletedSelected,
                    'level_of_speak' => $levelOfSpeakSelected,
                    'origin' => $originSelected,
                    'study_reason' => $studyReasonSelected,
                    'identification' => $identificationsSelected,
                    'have_fees_concession' => $haveFeesConessionSelected,
                    'area_of_fee_concession' => $areaOfFeeConcessionSelected,
                    'tuition_self_identified' => $tuitionSelfIdentifiedSelected,
                    'payment_method' => $paymentMethodSelected,
                    'consent_testimonials' => $consentTestimonialsSelected,
                    'consent_photo' => $consentPhotoSelected,
                    'country_of_birth' => $country_Selected,
                    'speak_language_at_home' => $speakLanguageAtHomeSelected,
                    'govt_enrol_courses' => $govtEnrolCoursesSelected,
                    'govt_funded_courses' => $govtFundedCoursesSelected,
                    'same_level_govt_funded_courses' => $sameLevelGovtFundedCoursesSelected,
                    'have_disability' => $haveDisabilitySelected,
                    'areas_of_disability' => $areasOfDiabilitySelected
                );
                // print_r(" -in else ".$studentName);
                // update current data
                $this->db->where('user_id', $loginUserId);
                $this->db->update('skills_first_program_enrolment_agreement_for', $updateData);
                // print_r(" -update data ". $loginUserId);

            }
        }
        //=======================

        public function form_apply3_2($textBoxData)
        {
            // print_r("hello ".$textBoxData['firstName']);
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('skills_first_program_enrolment_agreement_for', array('user_id' => $loginUserId));

             if ($query->num_rows() <= 0 ) {

                $data = array(
                    'first_name' => $textBoxData['firstName'], 
                    'middle_name' => $textBoxData['middleName'],
                    'last_name' => $textBoxData['lastName'],
                    'date_of_birth' => $textBoxData['dateOfBirth'],
                    'residential_address' => $textBoxData['residentialAddress'],
                    'subrub_town' => $textBoxData['subrubTown'],
                    'state' => $textBoxData['state'],
                    'post_code' => $textBoxData['postCode'],
                    'postal_address' => $textBoxData['postalAddress'],
                    'home_phone' => $textBoxData['homePhone'],
                    'mobile' => $textBoxData['mobile'],
                    'fax' => $textBoxData['fax'],
                    'email' => $textBoxData['email'],
                    'emerg_name' => $textBoxData['emergencyName'],
                    'emerg_relationship' => $textBoxData['emergencyRelationship'] ,
                    'emerg_home_number' => $textBoxData['emergencyHomeNumber'],
                    'emerg_mobile' => $textBoxData['emergencyMobile'],
                    // 'emerg_rto_permission' => ,
                    'con_medicare_no' => $textBoxData['concessionMedicareNumber'],
                    'con_mdicare_expiry_date' => $textBoxData['concessionMedicareExpiryDate'],
                    'con_card_no' => $textBoxData['concessionCardNumber'],
                    'con_card_expiry_date' => $textBoxData['concessionCardExpiryDate'],
                    'usi1' => $textBoxData['usi1'],
                    'usi2' => $textBoxData['usi2'],
                    'vsn' => $textBoxData['vsn'],
                    'vsn_previous_school' => $textBoxData['vsnPreviousSchool'],
                    // 'new_Educator' => ,
                    // 'employment_status' => ,
                    'emp_organization' => $textBoxData['employmentOrganization'],
                    'emp_position' => $textBoxData['employmentPosition'],
                    'emp_address' => $textBoxData['employmentAddress'],
                    'emp_telephone' => $textBoxData['employmentTelephone'],
                    'emp_abn' => $textBoxData['employmentAbn'],
                    // 'highest_completed_school' => ,
                    'year_school_completed' => $textBoxData['yearSchoolCompleted'],
                    // 'attend_secondary_school' => ,
                    'another_certificate' => $textBoxData['anotherCertificate'],
                    'city_of_birth' => $textBoxData['cityOfBirth'],
                    'country_of_birth' => $textBoxData['countryOfBirth'],
                    'edu_history_highest_qualifications' => $textBoxData['eduHistoryHighestQualifications'],
                    'govt_enrol_courses_name' => $textBoxData['govtEnrolCoursesName'],
                    'govt_funded_courses_name' => $textBoxData['govtFundedCoursesName'],
                    'same_level_govt_funded_courses_name' => $textBoxData['sameLevelGovtFundedCoursesName'],
                    'speak_language_at_home' => $textBoxData['speakLanguageAtHome'],
                    'other_areas_of_disability' => $textBoxData['otherAreasOfDisability'],
                );
                //insert into database
                $this->db->insert('skills_first_program_enrolment_agreement_for', $data);
                // print_r("hello ". $data['firstName']);
             }else {
                $updateData = array(
                    'first_name' => $textBoxData['firstName'],
                    'middle_name' => $textBoxData['middleName'],
                    'last_name' => $textBoxData['lastName'],
                    'date_of_birth' => $textBoxData['dateOfBirth'],
                    'residential_address' => $textBoxData['residentialAddress'],
                    'subrub_town' => $textBoxData['subrubTown'],
                    'state' => $textBoxData['state'],
                    'post_code' => $textBoxData['postCode'],
                    'postal_address' => $textBoxData['postalAddress'],
                    'home_phone' => $textBoxData['homePhone'],
                    'mobile' => $textBoxData['mobile'],
                    'fax' => $textBoxData['fax'],
                    'email' => $textBoxData['email'],
                    'emerg_name' => $textBoxData['emergencyName'],
                    'emerg_relationship' => $textBoxData['emergencyRelationship'] ,
                    'emerg_home_number' => $textBoxData['emergencyHomeNumber'],
                    'emerg_mobile' => $textBoxData['emergencyMobile'],
                    // 'emerg_rto_permission' => ,
                    'con_medicare_no' => $textBoxData['concessionMedicareNumber'],
                    'con_mdicare_expiry_date' => $textBoxData['concessionMedicareExpiryDate'],
                    'con_card_no' => $textBoxData['concessionCardNumber'],
                    'con_card_expiry_date' => $textBoxData['concessionCardExpiryDate'],
                    'usi1' => $textBoxData['usi1'],
                    'usi2' => $textBoxData['usi2'],
                    'vsn' => $textBoxData['vsn'],
                    'vsn_previous_school' => $textBoxData['vsnPreviousSchool'],
                    // 'new_Educator' => ,
                    // 'employment_status' => ,
                    'emp_organization' => $textBoxData['employmentOrganization'],
                    'emp_position' => $textBoxData['employmentPosition'],
                    'emp_address' => $textBoxData['employmentAddress'],
                    'emp_telephone' => $textBoxData['employmentTelephone'],
                    'emp_abn' => $textBoxData['employmentAbn'],
                    // 'highest_completed_school' => ,
                    'year_school_completed' => $textBoxData['yearSchoolCompleted'],
                    // 'attend_secondary_school' => ,
                    'another_certificate' => $textBoxData['anotherCertificate'],
                    'city_of_birth' => $textBoxData['cityOfBirth'],
                    'country_of_birth' => $textBoxData['countryOfBirth'],
                    'edu_history_highest_qualifications' => $textBoxData['eduHistoryHighestQualifications'],
                    'govt_enrol_courses_name' => $textBoxData['govtEnrolCoursesName'],
                    'govt_funded_courses_name' => $textBoxData['govtFundedCoursesName'],
                    'same_level_govt_funded_courses_name' => $textBoxData['sameLevelGovtFundedCoursesName'],
                    'speak_language_at_home' => $textBoxData['speakLanguageAtHome'],
                    'other_areas_of_disability' => $textBoxData['otherAreasOfDisability'],
                );
                 // print_r("world ".$updateData['first_name']);
                $this->db->where('user_id', $loginUserId);
                $this->db->update('skills_first_program_enrolment_agreement_for', $updateData);
             }
        }

        //get form 4 data
        public function get_form_apply4()
        {
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('student_induction_form', array('user_id' => $loginUserId));
            $row1 = $query->row_array();

            // qualifications name
            $qualificationsName = array('CHC30113 Certificate III in Childhood Education and Care', 'CHC50113 Diploma of Early Childhood Education and Care', 'CPP20212 Certificate II in Security Operations', 'CPP30411 Certificate III in Security Operations', 'CHC33015 Certificate III in Individual Support');

             $row2 = array(
                'enrol' => $row1,
                'qualificationsName' => $qualificationsName,
            );
             return $row2;
        }

        public function form_apply4($form_apply4_data)
        {
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('student_induction_form', array('user_id' => $loginUserId));

            if ($query->num_rows() <= 0 ) {

                $data = array(
                    'student_name' => $form_apply4_data['studentName']
                );
                $this->db->insert('student_induction_form', $data);

            }else {

                $updateData = array(
                    'student_name' => $form_apply4_data['studentName']
                );

                $this->db->where('user_id', $loginUserId);
                $this->db->update('student_induction_form', $updateData);
            }
        }

        public function form_apply4_2($form_apply4_data_2)
        {
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('student_induction_form', array('user_id' => $loginUserId));
            if ($query->num_rows() <= 0 ) {

                $data = array(
                    'qualifications_name' => $form_apply4_data_2['qualificationsNameSelected']
                );
                $this->db->insert('student_induction_form', $data);

            }else {

                $updateData = array(
                    'qualifications_name' => $form_apply4_data_2['qualificationsNameSelected']
                );

                $this->db->where('user_id', $loginUserId);
                $this->db->update('student_induction_form', $updateData);
            }
        }


        //test funtion
        public function form_apply1_t()
        {
            
            $name = $this->input->post("surname");
            print_r("=__==========",$name);

            // print_r("Hello World, Talal");
        }
    }

   