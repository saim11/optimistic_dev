<?php
    class applicationforms_model extends CI_Model {
        public function __construct()
        {
            // $this->load->database();
        }

        public function form_apply1__()
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


        public function get_form_apply1()
        {
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('usi_permission_verification_form', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));

            $identification_usi_application = array('Medical Card','Driver Licence', 'Passport', 'Birth Certificate(Full Certificate,Not Extract)', 'Citizenship Certificate', 'Certificate of Registration By Descent', 'IMMI Card', 'Visa');

             $row1 = $query->row_array();
             $row2 = array(
                'enrol' => $row1,
                'identification_usi_application' => $identification_usi_application
            );

             return $row2;

        }

        public function form_apply1($studentUsiData)
        {
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('usi_permission_verification_form', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));
            if ($query->num_rows() <= 0 ){

                $data = array(
                    'surname' => $studentUsiData['surname'],
                    'given_name' => $studentUsiData['given_name'],
                    'middle_name' => $studentUsiData['middle_name'],
                    'date_of_birth' => $studentUsiData['date_of_birth'],
                    'country_of_birth' => $studentUsiData['country_of_birth'],
                    'town_of_birth' => $studentUsiData['town_of_birth'],
                    'country' => $studentUsiData['country'],
                    'contact' => $studentUsiData['contact'],
                    'email' => $studentUsiData['email'],
                    'usi' => $studentUsiData['usi'],
                    'identification_usi_application' => $studentUsiData['identification_usi_application'],
                    'student_name' => $studentUsiData['student_name'],
                    'office_use_1' => $studentUsiData['office_use_1'],
                    'office_use_2' => $studentUsiData['office_use_2'],
                    'office_use_3' => $studentUsiData['office_use_3'],
                );
                // print_r("in if ".$data);
                // insert database
                 $this->db->insert('usi_permission_verification_form', $data);
            }else {
                $updateData = array(
                    'surname' => $studentUsiData['surname'],
                    'given_name' => $studentUsiData['given_name'],
                    'middle_name' => $studentUsiData['middle_name'],
                    'date_of_birth' => $studentUsiData['date_of_birth'],
                    'country_of_birth' => $studentUsiData['country_of_birth'],
                    'town_of_birth' => $studentUsiData['town_of_birth'],
                    'country' => $studentUsiData['country'],
                    'contact' => $studentUsiData['contact'],
                    'email' => $studentUsiData['email'],
                    'usi' => $studentUsiData['usi'],
                    'identification_usi_application' => $studentUsiData['identification_usi_application'],
                    'student_name' => $studentUsiData['student_name'],
                    'office_use_1' => $studentUsiData['office_use_1'],
                    'office_use_2' => $studentUsiData['office_use_2'],
                    'office_use_3' => $studentUsiData['office_use_3'],
                );
                // print_r(" -in else ".$updateData);
                // update current data
                $this->db->where('user_id', $loginUserId);
                $this->db->where('form_submitted', 'Pending');
                $this->db->update('usi_permission_verification_form', $updateData);
                // print_r(" -update data ". $loginUserId);            
                }
            } 

             //  form 1 submit
            public function form_apply1_submitted($form_submitted,$Id="")
            {
                $loginUserId = $this->session->userdata('user_id');
                $query = $this->db->get_where('usi_permission_verification_form', array('user_id' => $loginUserId));

                if($query->num_rows() > 0){
                    $data = array(
                        'form_submitted' => $form_submitted,
                        'submission_date'=>$this->date_time()
                    );
                    $this->db->where(array('user_id' => $loginUserId));
                    $this->db->update('usi_permission_verification_form', $data);
                }else {
            
                    
                }
                
            }

        // form 1 end

            // ======================================








        public function get_form_apply2()
        {

            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));
            // $row1 = $query->row_array();

            $qualifications = array(
                        array(
                            'code'=>'CHC30113',
                            'title'=> 'Certificate III in Early Childhood Education and Care',
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
                            'code'=>'CPP20212 ',
                            'title'=> 'Certificate II in Security Operations (Control Room Operator)'
                        ),
                        array(
                            'code'=>'CPP30411',
                            'title'=> 'Certificate III in Security Operations'
                        ),
                        array(
                            'code'=>'CPP30411 ',
                            'title'=> 'Certificate III in Security Operations (Batons & Handcuffs)'
                        ),
                        array(
                            'code'=>'CHC33015',
                            'title'=> 'Certificate III in Individual Support'
                        ),
                        array(
                            'code'=>'CHCSS00098',
                            'title'=> 'Individual Support-Disability Skill set'
                        ),
                        array(
                            'code'=>'CPC40110',
                            'title'=> 'Certificate IV in Building and Construction'
                        ),
                        array(
                            'code'=>'CPC50113',
                            'title'=> 'Diploma of Building and Construction'
                        ),
                    );

            $attachments = array(
                'Student Induction Form', 
                'Pre-Assessment interview completed', 
                'Language Literacy and Numeracy Completed', 
                'Skills First Program Enrolment Form Completed',
                'Student ID’s Checked and Completed', 
                'USI Permission and Verification Form', 
                'Recognition Prior Learning', 
                'Credit Transfer Form', 
                'Statement of Fees'
            );

            $attachments_reason = array(
                array(
                    'attachment'=> 'Student Induction Form',
                    'availability' => null
                ),
                array(
                    'attachment'=> 'Pre-Assessment interview completed',
                    'availability' => null
                ),
                array(
                    'attachment'=> 'Language Literacy and Numeracy Completed',
                    'availability' => null
                ),
                array(
                    'attachment'=> 'Skills First Program Enrolment Form Completed',
                    'availability' => 'N/A'
                ),
                array(
                    'attachment'=> 'Enrolment Agreement Form',
                    'availability' => 'N/A'
                ),
                array(
                    'attachment'=> 'Student ID’s Checked and Completed',
                    'availability' => null
                ),
                array(
                    'attachment'=> 'USI Permission and Verification Form',
                    'availability' => null
                ),
                array(
                    'attachment'=> 'Recognition Prior Learning',
                    'availability' => 'N/A'
                ),
                array(
                    'attachment'=> 'Credit Transfer Form',
                    'availability' => 'N/A'
                ),
                array(
                    'attachment'=> 'Statement of Fees',
                    'availability' => 'Discussed'
                ),
            );

            $row1 = $query->row_array();
             $row2 = array(
                'enrol' => $row1,
                'qualifications' => $qualifications,
                'attachments' => $attachments,
                'attachments_reason' => $attachments_reason,
            );

             return $row2;
        }

        public function form_apply2_studentName($studentName)
        {   
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));
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
                    // 'submission_date'=>$this->date_time() 
                );
                // print_r(" -in else ".$studentName);
                // update current data
                $this->db->where('user_id', $loginUserId);
                $this->db->where('form_submitted', 'Pending');
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
            $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));
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
                $this->db->where('form_submitted', 'Pending');
                $this->db->update('enrollment_booklet', $updateData);
                // print_r(" -update data ". $loginUserId);

            }
        }
        
        public function form_apply2_attachments($selectedAttachments, $attachmentReasonSelected)
        {
            // print_r("selected att ".$selectedAttachments);
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));
            // print_r($query->row_array());
            // $row = $query->row_array();
            
            // print_r("number of rows   ".$query->num_rows());
            if ($query->num_rows() <= 0 )
            {   
                $data = array(
                    'attachments' => $selectedAttachments,
                    'attachment_reason' => $attachmentReasonSelected,
                 );
                //insert database
                 $this->db->insert('enrollment_booklet', $data);
            }else {
                $updateData = array(
                    'attachments' =>  $selectedAttachments, 
                    'attachment_reason' => $attachmentReasonSelected
                );
                // print_r(" -in else ".$studentName);
                // update current data
                $this->db->where('user_id', $loginUserId);
                $this->db->where('form_submitted', 'Pending');
                $this->db->update('enrollment_booklet', $updateData);
                // print_r(" -update data ". $loginUserId);

            }
        }

        //  form 2 submit
        public function form_apply2_submitted($form_submitted,$Id="")
        {
            $loginUserId = $this->session->userdata('user_id');
            // $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));
            $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId, 'Id' => $Id));

            if($query->num_rows() > 0){
                $data = array(
                    'form_submitted' => $form_submitted,
                    'submission_date'=>$this->date_time()
                );
                $this->db->where(array('user_id' => $loginUserId, 'Id' => $Id));
                $this->db->update('enrollment_booklet', $data);
            }else {
          
                
            }
            
        }

        // form 2 end

        // form 3 start ============================================
        // get data =================
        public function get_form_apply3()
        {
            $loginUserId = $this->session->userdata('user_id');
            $query1 = $this->db->get_where('form_apply3', array('user_id' => $loginUserId));
            $form3 = $query1->row_array();
            $query2 = $this->db->get_where('form_apply3_sectionc', array('form_apply3_id' => $form3['id']));
            $sectionc = $query2->row_array();

            $rowData = [];
            $rowData['quatification_courses']       = $this->coursesQualificationFull();
            $rowData['coursesShortAndSkillSet']     = $this->coursesShortAndSkillSet();
            $rowData['mode_of_study']               = $this->arrayDataForForm3('mode_of_study');
            $rowData['gender_type']                 = $this->arrayDataForForm3('gender_type');
            $rowData['gender']                      = $this->arrayDataForForm3('gender');
            $rowData['employment_question']         = $this->employmentQuestion();
            $rowData['school_equivalent']           = $this->arrayDataForForm3('school_equivalent');
            $rowData['citizen_status']              = $this->arrayDataForForm3('citizen_status');
            $rowData['disablity']                   = $this->arrayDataForForm3('disablity');
            $rowData['study_reasons']               = $this->arrayDataForForm3('study_reasons');
            $rowData['identitfication']             = $this->arrayDataForForm3('identitfication');
            $rowData['tution_sighted']              = $this->arrayDataForForm3('tution_sighted');
            $rowData['payment_method']              = $this->arrayDataForForm3('payment_method');     
            $rowData['form3']                       = $form3;
            $rowData['form3']['sectionc']           = $sectionc;
            
            return $rowData;
        }
        // get data end
        // form 3 end

        //============================
        public function form_apply3($enrolment_courseSelected, $mode_of_studySelected, 
                                    $titleSelected, $genderSelected, $methodOfContactSelected, $RTOpermissionSelected, 
                                    $newEducatorSelected, $employmentStatusSelected, $employmentStatus_BSelected, $employmentStatus_CSelected,
                                    $ausPerResidentSelected,$highestCompletedSchoolSelected,$attendSecondarySchoolSelected, 
                                    $prevQualificationCompletedSelected, $completedQulificationsSelected, 
                                    $countryOfQualificationCompletedSelected, $levelOfSpeakSelected, 
                                    $originSelected, $studyReasonSelected, $identificationsSelected, 
                                    $haveFeesConessionSelected, $referredJobSeekersSelected, $areaOfFeeConcessionSelected,
                                    $tuitionSelfIdentifiedSelected, $paymentMethodSelected, 
                                    $consentTestimonialsSelected, $consentPhotoSelected, 
                                    $country_Selected, $speakLanguageAtHomeSelected, 
                                    $govtEnrolCoursesSelected, $govtFundedCoursesSelected, 
                                    $sameLevelGovtFundedCoursesSelected, $feesExamptionSelected, $seekingRecommenceSelected, $haveDisabilitySelected,
                                    $areasOfDiabilitySelected) {

            print_r($mode_of_studySelected.' - '.$enrolment_courseSelected.' - '.$genderSelected.' - '.$RTOpermissionSelected);
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('skills_first_program_enrolment_agreement_for', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));
            // print_r($query->row_array());
            // $row = $query->row_array();
            
            // print_r("number of rows   ".$query->num_rows());
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
                    'method_of_contact' => $methodOfContactSelected,
                    'employment_status_B' => $employmentStatus_BSelected,
                    'employment_status_C' => $employmentStatus_CSelected,
                    'aus_per_resident' => $ausPerResidentSelected,
                    'referred-job-seekers' => $referredJobSeekersSelected,
                    'fees-examption' => $feesExamptionSelected,
                    'seeking-recommence' => $seekingRecommenceSelected,
                    
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
                    'areas_of_disability' => $areasOfDiabilitySelected,
                    'method_of_contact' => $methodOfContactSelected,
                    'employment_status_B' => $employmentStatus_BSelected,
                    'employment_status_C' => $employmentStatus_CSelected,
                    'aus_per_resident' => $ausPerResidentSelected,
                    'referred-job-seekers' => $referredJobSeekersSelected,
                    'fees-examption' => $feesExamptionSelected,
                    'seeking-recommence' => $seekingRecommenceSelected,
                );
                // print_r(" -in else ".$studentName);
                // update current data
                $this->db->where('user_id', $loginUserId);
                $this->db->where('form_submitted', 'Pending');
                $this->db->update('skills_first_program_enrolment_agreement_for', $updateData);
                // print_r(" -update data ". $loginUserId);

            }
        }
        //=======================

        public function createForm3($data)
        {
            var_dump($data); die;
        }

        public function form_apply3_2($textBoxData)
        {
            // print_r("hello ".$textBoxData['firstName']);
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('skills_first_program_enrolment_agreement_for', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));

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
                    'visa_evidence' => $textBoxData['visaEvidence'],
                    'referred-job-seekers-reason' => $textBoxData['referredJobSeekersreason'],
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
                    'visa_evidence' => $textBoxData['visaEvidence'],
                    'referred-job-seekers-reason' => $textBoxData['referredJobSeekersreason'],
                );
                 // print_r("world ".$updateData['first_name']);
                $this->db->where('user_id', $loginUserId);
                $this->db->where('form_submitted', 'Pending');
                $this->db->update('skills_first_program_enrolment_agreement_for', $updateData);
             }
        }
        // ========
        // store data in form 3 end
        //  form 3 submit
        public function form_apply3_submitted($form_submitted)
        {
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('skills_first_program_enrolment_agreement_for', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));

            if($query->num_rows() > 0){
                $data = array(
                    'form_submitted' => $form_submitted
                );
                $this->db->where('user_id', $loginUserId);
                $this->db->update('skills_first_program_enrolment_agreement_for', $data);
            }else {
          
                
            }
            
        }
        // ==================================
        // form 3 end

        // =========================
        //get form 4 data
        public function get_form_apply4()
        {
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('student_induction_form', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));
            $row1 = $query->row_array();

            // qualifications name
            $qualificationsName = array(
                    'CHC30113 Certificate III in Childhood Education and Care',
                    'CHC50113 Diploma of Early Childhood Education and Care', 
                    'CPP20212 Certificate II in Security Operations', 
                    'CPP20212 Certificate II in Security Operations(Control Romm Operator)', 
                    'CPP30411 Certificate III in Security Operations', 
                    'CPP30411 Certificate III in Security Operations(Batton and Handcuffs)', 
                    'CHC33015 Certificate III in Individual Support',
                    'CHCSS00098 Individual Support - Disability Skill set',
                    'CPC40110 Certificate IV in Building and Construction',
                    'CPC50113 Diploma of Building and Construction'
                );

             $row2 = array(
                'enrol' => $row1,
                'qualificationsName' => $qualificationsName,
            );
             return $row2;
        }

        public function form_apply4($form_apply4_data)
        {
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('student_induction_form', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));

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
                $this->db->where('form_submitted', 'Pending');
                $this->db->update('student_induction_form', $updateData);
            }
        }

        public function form_apply4_2($form_apply4_data_2)
        {
            $loginUserId = $this->session->userdata('user_id');
            $query = $this->db->get_where('student_induction_form', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));
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
                $this->db->where('form_submitted', 'Pending');
                $this->db->update('student_induction_form', $updateData);
            }
        }

         //  form 4 submit
         public function form_apply4_submitted($form_submitted)
         {
             $loginUserId = $this->session->userdata('user_id');
             $query = $this->db->get_where('student_induction_form', array('user_id' => $loginUserId, 'form_submitted' => 'Pending'));
 
             if($query->num_rows() > 0){
                 $data = array(
                     'form_submitted' => $form_submitted
                 );
                 $this->db->where('user_id', $loginUserId);
                 $this->db->update('student_induction_form', $data);
             }else {
           
                 
             }
             
         }
 
         // ====================
         // form 4 end 
 


        //test funtion
        public function form_apply1_t()
        {
            
            $name = $this->input->post("surname");
            print_r("=__==========",$name);

            // print_r("Hello World, Talal");
        }
        public function date_time(){
            date_default_timezone_set("Australia/Sydney");
            $now = date( 'd-m-Y h:i:s' );
            $hr = date("H")/12;
            if($hr <= 1){
                $now = $now." AM";

            } elseif(($hr >= 1)){
                $now = $now." PM";
            }
            // $now = unix_to_human($now, FALSE, 'eu');
            return $now;
        }













             
        ///NEW WORK

        public function coursesQualificationFull($html_v = false)
        {
            return $table_Data = [
                [
                    'fee_for_service'  => true,
                    'govt_subsidised'  => true,
                    'code' => 'CHC30113',
                    'title' => 'Certificate III in Early Childhood Education and Care',
                ],
                [
                    'fee_for_service'  => true,
                    'govt_subsidised'  => true,
                    'code' => 'CHC33015',
                    'title' => 'Certificate III in Individual Support',
                ],[
                    'fee_for_service'  => true,
                    'govt_subsidised'  => true,
                    'code' => 'CHC40213',
                    'title' => 'Certificate IV in Education Support',
                ],[
                    'fee_for_service'  => true,
                    'govt_subsidised'  => true,
                    'code' => 'CHC43015',
                    'title' => 'Certificate IV in Ageing Support',
                ],[
                    'fee_for_service'  => true,
                    'govt_subsidised'  => true,
                    'code' => 'CHC43115',
                    'title' => 'Certificate IV in Disability',
                ],[
                    'fee_for_service'  => true,
                    'govt_subsidised'  => true,
                    'code' => 'CHC50113',
                    'title' => 'Diploma of Early Childhood Education and Care',
                ],[
                    'fee_for_service'  => true,
                    'govt_subsidised'  => true,
                    'code' => 'CPP20218',
                    'title' => 'Certificate II in Security Operations',
                ],[
                    'fee_for_service'  => true,
                    'govt_subsidised'  => true,
                    'code' => 'CPP31318',
                    'title' => 'Certificate III in Security Operations',
                ],[
                    'fee_for_service'  => true,
                    'govt_subsidised'  => false,
                    'code' => 'CPC40110',
                    'title' => 'Certificate IV in Building and Construction (Building)',
                ],[
                    'fee_for_service'  => true,
                    'govt_subsidised'  => false,
                    'code' => 'CPC50210',
                    'title' => 'Diploma of Building and Construction (Building)',
                ],               
            ];
        }


        public function coursesShortAndSkillSet()
        {
            return $dataTable = [
                [
                        'fee_for_service' => true,
                        'govt_subsidised' => false, 
                        'code' => 'HLTAID001',      
                        'title' => 'Provide cardiopulmonary resuscitation',
                    ],
                [
                        'fee_for_service' => true,
                        'govt_subsidised' => false, 
                        'code' => 'HLTAID002',      
                        'title' => 'Provide basic emergency life support',
                    ],
                [
                        'fee_for_service' => true,
                        'govt_subsidised' => false, 
                        'code' => 'HLTAID003',      
                        'title' => 'Provide first aid',
                    ],
                [
                        'fee_for_service' => true,
                        'govt_subsidised' => false, 
                        'code' => 'HLTAID004',      
                        'title' => 'Provide an emergency first aid response in an education and care setting',
                    ],
                [
                        'fee_for_service' => true,
                        'govt_subsidised' => false, 
                        'code' => 'HLTINFCOV001',   
                        'title' => 'Comply with infection prevention and control policies and procedures',
                    ],
                [
                        'fee_for_service' => true,
                        'govt_subsidised' => false, 
                        'code' => 'CCSS00098',     
                        'title' => 'Individual Support- Disability Skill set',
                    ],
                [
                        'fee_for_service' => true,
                        'govt_subsidised' => false, 
                        'code' => 'CPCCWHS1001',    
                        'title' => 'Prepare to work safely in the construction industry (White card)',
                    ]
            ];
        }

        public function arrayDataForForm3($status)
        {
            $array = '';
            switch ($status) {
                case 'mode_of_study':
                        $array = ['Classroom', 'Distance', 'Learning', 'Online', 'RPL', 'CT'];
                    break;
                case 'gender_type':
                        $array = ['Mr', 'Mrs', 'Miss', 'Ms'];
                    break;
                case 'gender':
                        $array = ['Male', 'Female'];
                    break;
                case 'school_equivalent':
                        $array = [ 
                            12  =>  'Year 12 OR Equivalent', 
                            9   =>  'Year 9 OR Equivalent', 
                            11  =>  'Year 11 OR Equivalent', 
                            8   =>  'Year 8 OR Equivalent', 
                            10  =>  'Year 10 OR Equivalent', 
                            0   =>  'Never Attended'];
                    break;
                case 'citizen_status':
                        $array = [
                            'Australian Citizen',
                            'Permanent Resident',
                            'New Zealand Citizen',
                            'Permanent Humanitarian Visa holder',
                            'Other Visa',
                        ];
                    break;
                case 'disablity':
                        $array = [
                            'Hearing/Deaf',
                            'Physical',
                            'Intellectual',
                            'Learning',
                            'Mental Illness',
                            'Vision',
                            'Medical Condition',
                            'Acquired brain impairment',
                            'Other'
                        ];
                case 'study_reasons':
                        $array = [
                            'To get a job',
                            'To develop my existing business',
                            'To start my own business',
                            'To try for a different career',
                            'To get a better job or promotion',
                            'It was a requirement of my job',
                            'I wanted extra skills for my job',
                            'To get into another course or study',
                            'For personal interest or self-development',
                            'Other reason',
                        ];
                    break;
                case 'identitfication':
                        $array = [
                            'Drivers license',
                            'Birth certification',
                            'Passport',
                            'Medicare card',
                            'Proof of age card',
                            'Health Care card',
                            'Learners Permit',
                            'Citizenship Certificate',
                        ];
                    break;
                case 'tution_sighted':
                        $array = [
                            'Health Care Card issued by the commonwealth',
                            'Pensioner Concession Card; or',
                            'Veteran͛s Gold Card; or',
                            'An alternative card or concession eligibility criterion approved by the Minister for the Purpose of these Guidelines',
                        ];
                    break;
                case 'payment_method':
                        $array = [
                            'Cheque', 'Bank cheque', 'Money order', 'EFTPOS',
                            'Cash ʹ Do not send cash, to make a cash payment please pay at the front desk',
                            'Funded from Skills First Program',
                        ];
                
                    break;
                default:
                    return false;
                    break;
            }
                    
            return $array;
        }

        public function employmentQuestion()
        {
            return [
                'Of the following categories,
                which BEST describes your current employment status?' => [
                    'Full-Time',
                    'Employer',
                    'Part-Time',
                    'Self-employed - not employing others',
                    'Unemployed - Seeking full-time work',
                    'Employed - Unpaid worker in a family business',
                    'Unemployed - Seeking part-time work', 
                    'Not employed - Not seeking employment'
                ],
                'Which of the following classifications BEST describes your current or recent occupation?' => [
                    'Manager',
                    'Professionals',
                    'Technical and Trade Workers',
                    'Community and Personal Service Worker',
                    'Clerical and Administrative Workers',
                    'Sales Worker',
                    'Machinery Operators and Drivers', 
                    'Labourers',
                    'Other'
                ],
                'Which of the following classifications BEST describesthe Industry of your current or previous Employer?' => [
                    'Agriculture, Forestry and Fishing',
                    'Mining',
                    'Manufacturing',
                    'Electricity, Gas, Water and Waste Services',
                    'Construction',
                    'Wholesale Trade',
                    'Retail Trade',
                    'Accommodation and Food Services',
                    'Transport, Postal and Warehousing',
                    'Information Media and Telecommunications',
                    'Financial and Insurance Service',
                    'Rental, Hiring and Real Estate Services',
                    'Professional, Scientific and Technical Services',
                    'Administrative and Support Services',
                    'Public Administration and Safety',
                    'Education and Training',
                    'Health Care and Social Assistance',
                    'Arts and Recreation Services',
                    'Other Services',
                ]
            ];
        }
    }

   