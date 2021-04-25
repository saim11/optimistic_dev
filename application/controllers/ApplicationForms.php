<?php
    class ApplicationForms extends CI_Controller {
        public function index(){
                parent::__Controller();
                $data['title'] = 'Application Form';  
                $this->load->database();          
            }

            public function form_apply1()
            {
                // $this->load->model('applicationForms_model', '', TRUE);
                // $data['form_apply1']= $this->applicationForms_model->get_form_apply1();
                //  if(sizeof($data['form_apply1']['enrol']) <= 0){
                //     $loginUserId = $this->session->userdata('user_id');
                //     // $query = $this->db->get_where('usi_permission_verification_form', array('user_id' => $loginUserId, 'form_submitted' => 'Submitted'));
                //     // print_r($query->num_rows);
                //     // if($query->num_rows <=0){
                //         $data = array(
                //             'user_id' => $loginUserId,
                //             'form_submitted' => 'Pending'
                //         );
                //         $this->db->insert('usi_permission_verification_form', $data);
                //         $data['form_apply1']= $this->applicationForms_model->get_form_apply1();
                //     // }
                // }
                // $this->load->view('form-apply1', $data);
            }
            
            // form 1 submitted
            public function form_apply1_submitted()
            {
                $form_submitted = $this->input->post("form_submitted");
                $Id = $this->input->post("Id");
                $this->load->model('applicationForms_model', '', TRUE);
                $this->applicationForms_model->form_apply1_submitted($form_submitted,$Id);

            }
            // ===============================================

            // form 1 end

            // form 2 start

            public function form_apply2()
            {
                // $this->load->model('applicationforms_model', '', TRUE);
                // $data['form_apply2']= $this->applicationforms_model->get_form_apply2();
                // if(sizeof($data['form_apply2']['enrol']) <=0){
                //     $loginUserId = $this->session->userdata('user_id');
                //     $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId));
                //     if($query->num_rows <=0){
                //         $data = array(
                //             'user_id' => $loginUserId
                //         );
                //         $this->db->insert('enrollment_booklet', $data);
                //         $data['form_apply2']= $this->applicationforms_model->get_form_apply2();
                //     }
                // }
                //     $this->load->view('form-apply2', $data);
            }

            // submit form 2
            public function form_apply2_submitted()
            {
                $form_submitted = $this->input->post("form_submitted");
                $Id = $this->input->post("Id");
                $this->load->model('applicationForms_model', '', TRUE);
                $this->applicationForms_model->form_apply2_submitted($form_submitted,$Id);

            }

            // form 2 end

            // get data controller form 3
            public function form_apply3()
            {

                // $this->load->model('applicationforms_model', '', TRUE);
                // $data['form_apply3']= $this->applicationforms_model->get_form_apply3();
                
                // if(sizeof($data['form_apply3']['enrol']) <=0){
                //     $loginUserId = $this->session->userdata('user_id');
                //     $query = $this->db->get_where('skills_first_program_enrolment_agreement_for', array('user_id' => $loginUserId));
                //     if($query->num_rows <=0){
                //         $data = array(
                //             'user_id' => $loginUserId
                //         );
                //         $this->db->insert('skills_first_program_enrolment_agreement_for', $data);
                //         $data['form_apply3']= $this->applicationforms_model->get_form_apply3();
                //     }
                // }

                // $this->load->view('form-apply3', $data);
            }

            // submit form 3
            public function form_apply3_submitted()
            {
                $form_submitted = $this->input->post("form_submitted");
                $this->load->model('applicationForms_model', '', TRUE);
                $this->applicationForms_model->form_apply3_submitted($form_submitted);

            }

            // =====================================

            // get data controller from 4
            public function form_apply4(){
                // $this->load->model('applicationforms_model', '', TRUE);
                // $data['form_apply4']= $this->applicationforms_model->get_form_apply4();

                // if(sizeof($data['form_apply4']['enrol']) <=0){
                //     $loginUserId = $this->session->userdata('user_id');
                //     $query = $this->db->get_where('student_induction_form', array('user_id' => $loginUserId));
                //     if($query->num_rows <=0){
                //         $data = array(
                //             'user_id' => $loginUserId
                //         );
                //         $this->db->insert('student_induction_form', $data);
                //         $data['form_apply4']= $this->applicationforms_model->get_form_apply4();
                //     }
                // }

                // $this->load->view('form-apply4', $data);
            }

            // submit form 4
            public function form_apply4_submitted()
            {
                $form_submitted = $this->input->post("form_submitted");
                $this->load->model('applicationForms_model', '', TRUE);
                $this->applicationForms_model->form_apply4_submitted($form_submitted);

            }

            // =====================================================

            // =======================================
            // store data into database
            // form 1 start
            public function form_apply1_submit_data() {
                $this->load->model('applicationForms_model', '', TRUE);
                $studentUsiData = $this->input->post('studentUsiData');
                $this->applicationForms_model->form_apply1($studentUsiData);

                // print_r($studentUsiData);
            }
            // form 1 end


            //form 2 start

            public function form_apply2_studentName()
            {
                $this->load->model('applicationforms_model', '', TRUE);
                // $this->applicationforms_model->form_apply2();
                // echo '1';
                // $studentName = trim($_POST['studentName']);
                $studentName = $this->input->post('studentName');
                $this->applicationforms_model->form_apply2_studentName($studentName);
                // $this->load->view('form-apply2');
            }
            public function form_apply2_qualification()
            {
                $this->load->model('applicationforms_model', '', TRUE);
                $qualificationSelected = $this->input->post('qualificationSelected');
                // echo ' Selected '.$qualificationSelected;
                $this->applicationforms_model->form_apply2_qualification($qualificationSelected);
            }

            public function form_apply2_attachments()
            {
                $this->load->model('applicationforms_model', '', TRUE);
                $attachmentSelected = $this->input->post('attachmentSelected');
                $attachmentReasonSelected = $this->input->post('attachmentReasonSelected');
                // echo ' Selected '.$selectedQulification;
                $this->applicationforms_model->form_apply2_attachments($attachmentSelected, $attachmentReasonSelected);
            }
            // form 3 start

            public function form_apply3_enrolmentCourse()
            {
                $this->load->model('applicationforms_model', '', TRUE);
                $enrolment_courseSelected = $this->input->post('enrolment_courseSelected');
                $mode_of_studySelected = $this->input->post('mode_of_studySelected');
                $titleSelected = $this->input->post('titleSelected');
                $genderSelected = $this->input->post('genderSelected');
                $methodOfContactSelected = $this->input->post('methodOfContactSelected');
                $RTOpermissionSelected = $this->input->post('RTOpermissionSelected');
                $newEducatorSelected = $this->input->post('newEducatorSelected');
                $employmentStatusSelected = $this->input->post('employmentStatusSelected');
                $employmentStatus_BSelected = $this->input->post('employmentStatus_BSelected');
                $employmentStatus_CSelected = $this->input->post('employmentStatus_CSelected');
                $ausPerResidentSelected = $this->input->post('ausPerResidentSelected');
                $highestCompletedSchoolSelected = $this->input->post('highestCompletedSchoolSelected');
                $attendSecondarySchoolSelected = $this->input->post('attendSecondarySchoolSelected');
                $prevQualificationCompletedSelected = $this->input->post('prevQualificationCompletedSelected');
                $completedQulificationsSelected = $this->input->post('completedQulificationsSelected');
                $countryOfQualificationCompletedSelected = $this->input->post('countryOfQualificationCompletedSelected');
                $levelOfSpeakSelected = $this->input->post('levelOfSpeakSelected');
                $originSelected = $this->input->post('originSelected');
                $studyReasonSelected = $this->input->post('studyReasonSelected');
                $identificationsSelected = $this->input->post('identificationsSelected');
                $haveFeesConessionSelected = $this->input->post('haveFeesConessionSelected');
                $referredJobSeekersSelected = $this->input->post('referredJobSeekersSelected');
                $areaOfFeeConcessionSelected = $this->input->post('areaOfFeeConcessionSelected');
                $tuitionSelfIdentifiedSelected = $this->input->post('tuitionSelfIdentifiedSelected');
                $paymentMethodSelected = $this->input->post('paymentMethodSelected');
                $consentTestimonialsSelected = $this->input->post('consentTestimonialsSelected');
                $consentPhotoSelected = $this->input->post('consentPhotoSelected');
                $country_Selected = $this->input->post('country_Selected');
                $speakLanguageAtHomeSelected = $this->input->post('speakLanguageAtHomeSelected');
                $govtEnrolCoursesSelected = $this->input->post('govtEnrolCoursesSelected');
                $govtFundedCoursesSelected = $this->input->post('govtFundedCoursesSelected');
                $sameLevelGovtFundedCoursesSelected = $this->input->post('sameLevelGovtFundedCoursesSelected');
                $feesExamptionSelected = $this->input->post('feesExamptionSelected');
                $seekingRecommenceSelected = $this->input->post('seekingRecommenceSelected');
                $areasOfDiabilitySelected = $this->input->post('areasOfDiabilitySelected');
                $haveDisabilitySelected  = $this->input->post('haveDisabilitySelected');
                // $form_apply3_data = array(
                //     'enrolment_courseSelected' => $enrolment_courseSelected,
                //     'mode_of_studySelected' => $mode_of_studySelected
                // );

                //  print_r(' Selected '.$methodOfContactSelected.' ');
                $this->applicationforms_model->form_apply3(
                    $enrolment_courseSelected, 
                    $mode_of_studySelected, 
                    $titleSelected, 
                    $genderSelected, 
                    $methodOfContactSelected,
                    $RTOpermissionSelected, 
                    $newEducatorSelected, 
                    $employmentStatusSelected,
                    $employmentStatus_BSelected,
                    $employmentStatus_CSelected,
                    $ausPerResidentSelected,
                    $highestCompletedSchoolSelected, 
                    $attendSecondarySchoolSelected,
                    $prevQualificationCompletedSelected, 
                    $completedQulificationsSelected, 
                    $countryOfQualificationCompletedSelected, 
                    $levelOfSpeakSelected, $originSelected, 
                    $studyReasonSelected, 
                    $identificationsSelected,
                    $haveFeesConessionSelected, 
                    $referredJobSeekersSelected,
                    $areaOfFeeConcessionSelected, 
                    $tuitionSelfIdentifiedSelected, 
                    $paymentMethodSelected,
                    $consentTestimonialsSelected, 
                    $consentPhotoSelected, 
                    $country_Selected, 
                    $speakLanguageAtHomeSelected, 
                    $govtEnrolCoursesSelected, 
                    $govtFundedCoursesSelected, 
                    $sameLevelGovtFundedCoursesSelected, 
                    $feesExamptionSelected,
                    $seekingRecommenceSelected,
                    $haveDisabilitySelected, 
                    $areasOfDiabilitySelected);
            }


            public function form3SubmissionArray($data)
            {
                $result = [
                    'user_id'               =>  $this->session->userdata('user_id'),              
                    'qualification'         => json_encode($data['qualification']),        
                    'short_courses'         => json_encode($data['short_courses']),
                    'mode_of_study'         => $data['mode_of_study'],
                    'gender_title'          => $data['gender_title'],       
                    'gender'                => $data['gender'],
                    'first_name'            => $data['first_name'],
                    'middle_name'           => $data['middle_name'],
                    'last_name'             => $data['last_name'],
                    'data_of_birth'         => $data['data_of_birth'],
                    'residential_address'   => $data['residential_address'],
                    'town'                  => $data['town'],
                    'state'                 => $data['state'],
                    'postal_code'           => $data['postal_code'],
                    'postal_address'        => $data['postal_address'],
                    'phone_number'          => $data['phone_number'],
                    'mobile_number'         => $data['mobile_number'],
                    'fax'                   => $data['fax'],
                    'email'                 => $data['email'],
                    'preferred_contact_method' => $data['preferred_contact_method'],
                    'ec_name'               => $data['ec_name'],
                    'ec_relation'           => $data['ec_relation'],
                    'ec_home_number'        => $data['ec_home_number'],
                    'ec_mobile_number'      => $data['ec_mobile_number'],
                    'ec_emergency_preferred' => $data['ec_emergency_preferred'],
                    'c_medicare_no'         => $data['c_medicare_no'],
                    'c_medi_expire_date'    => $data['c_medi_expire_date'],
                    'c_concession_card'     => $data['c_concession_card'],
                    'c_concess_expire_date' => $data['c_concess_expire_date'],
                    'usi_name'              => $data['usi_name'],
                    'usi_signature'         => $data['usi_signature'],
                    'vsn_number'            => $data['vsn_number'],
                    'vsn_pervious_school'   => $data['vsn_pervious_school'],
                    'vsn_edu_sector'        => $data['vsn_edu_sector'],
                    'emp_ques_a'            => $data['emp_ques_a'],
                    'emp_ques_b'            => $data['emp_ques_b'],
                    'emp_ques_c'            => $data['emp_ques_c'],
                    'ed_organisation'       => $data['ed_organisation'],
                    'ed_expire_date'        => $data['ed_expire_date'],
                    'ed_address'            => $data['ed_address'],
                    'ed_telephone'          => $data['ed_telephone'],
                    'ed_abn'                => $data['ed_abn'],
                    'sch_grade_level'       => $data['sch_grade_level'],
                    'sch_complete_since'    => $data['sch_complete_since'],
                    'sch_stillattend'       => $data['sch_stillattend'],
                    'pea_qualification_completed' => $data['pea_qualification_completed'],
                    'pea_certification'     => json_encode($data['pea_certification']),
                    'lcd_country_of_birth'  => $data['lcd_country_of_birth'],
                    'lcd_city_of_birth'     => $data['lcd_city_of_birth'],
                    'lcd_citizenship_status'    => $data['lcd_citizenship_status'],
                    'lcd_visa_classification'   => $data['lcd_visa_classification'],
                    'lcd_speak_english'         => $data['lcd_speak_english'],
                    'lcd_speak_english_status'  => $data['lcd_speak_english_status'],
                    'lcd_islander_origin'       => $data['lcd_islander_origin'],
                    'disable_consider_yourself' => $data['disable_consider_yourself'],
                    'disability_area'           => $data['disability_area'],
                    'study_reason'              => $data['study_reason'],
                    'identification'            => $data['identification'],
                    'tf_consession_card'        => $data['tf_consession_card'],
                    'tf_consession_sighted'     => $data['tf_consession_sighted'],
                    'tf_job_seeker_referral'    => $data['tf_job_seeker_referral'],
                    'payable_method'            => $data['payable_method'],
                    'sdc_display_testimonial_of_web' => $data['sdc_display_testimonial_of_web'],
                    'sdc_photo_on_their_web'    => $data['sdc_photo_on_their_web'],
                    'sdc_student_sign'          => $data['sdc_student_sign'],
                    'sdc_student_sign_date'     => $data['sdc_student_sign_date'],
                    'sdc_parent_sign'           => $data['sdc_parent_sign'],
                    'sdc_parent_sign_date'      => $data['sdc_parent_sign_date'],
                    'sa_full_name'              => $data['sa_full_name'],
                    'sa_sighted_one'            => $data['sa_sighted_one'],
                    'sa_either'                 => $data['sa_either'],
                    'sa_retained_one'           => $data['sa_retained_one'],
                    'sa_eligibility_document'   => $data['sa_eligibility_document'],
                    'sb_q1'                     => $data['sb_q1'],
                    'sb_q2'                     => $data['sb_q2'],
                    'sb_q3'                     => $data['sb_q3'],
                    'sb_q4'                     => $data['sb_q4'],
                    'sb_q5'                     => $data['sb_q5'],
                    'sb_q6'                     => $data['sb_q6'],
                    'sb_q7'                     => $data['sb_q7'],
                    'sb_q8'                     => $data['sb_q8'],
                    'sb_q9'                     => $data['sb_q9'],
                    'sb_q10'                    => $data['sb_q10'],
                    'sb_q11'                    => $data['sb_q11'],
                    'sb_q12'                    => $data['sb_q12'],
                    'sb_q13'                    => $data['sb_q13'],
                    'sb_q14'                    => $data['sb_q14'],
                    'sb_q15'                    => $data['sb_q15'],
                    'sb3_print_full_name'       => $data['sb3_print_full_name'],
                    'sb3_in_seeking_to_enrol'   => $data['sb3_in_seeking_to_enrol'],
                    'sb3_signed'                => $data['sb3_signed'],
                    'sb3_date'                  => $data['sb3_date'],
                    ];

                return $result;
            }
            public function form_apply3_enrolmentCourse2()
            {   
                $this->load->model('applicationforms_model', '', TRUE);
                $sectionC = $this->input->post('sectionc');
                $FormArray = $this->form3SubmissionArray($this->input->post());
                $loginUserId = $this->session->userdata('user_id');

                $query = $this->db->get_where('form_apply3', array('user_id' => $loginUserId));
                if ($query->num_rows() <= 0 )
                {   
                    $query1 =  $this->db->insert('form_apply3', $FormArray);
                    $insert_id = $this->db->insert_id();
                    $sectionC['form_apply3_id'] = $insert_id;
                    $query2 =  $this->db->insert('form_apply3_sectionc', $sectionC);
                }else{
                    // update current data

                    $this->db->where('user_id', $loginUserId);
                    $this->db->where('status', 'Pending');
                    $result =  $this->db->update('form_apply3', $FormArray);
                    $updated_id = $this->input->post('formid');
                    $sectionC['form_apply3_id'] = $updated_id;
                    $DATA = $this->db->update('form_apply3_sectionc', $sectionC);
                }
                echo json_encode(['success' =>'success fully submitted']);
            }

            //form 4
            public function form_apply4_submitData()
            {
                $this->load->model('applicationforms_model', '', TRUE);
                $form_apply4_data = $this->input->post('form_apply4_data');
                $this->applicationforms_model->form_apply4($form_apply4_data);
            }

            public function form_apply4_submitData2()
            {
                $this->load->model('applicationforms_model', '', TRUE);
                $form_apply4_data_2 = $this->input->post('form_apply4_data_2');
                $this->applicationforms_model->form_apply4_2($form_apply4_data_2);
            }


            ///test function
            public function formdatasubmitted()
            {
                $this->applicationforms_model->form_apply1_t();
                // echo "Hello";
                
            }

        }
?>