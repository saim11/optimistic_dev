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
                // echo ' Selected '.$selectedQulification;
                $this->applicationforms_model->form_apply2_attachments($attachmentSelected);
            }
            // form 3 start

            public function form_apply3_enrolmentCourse()
            {
                $this->load->model('applicationforms_model', '', TRUE);
                $enrolment_courseSelected = $this->input->post('enrolment_courseSelected');
                $mode_of_studySelected = $this->input->post('mode_of_studySelected');
                $titleSelected = $this->input->post('titleSelected');
                $genderSelected = $this->input->post('genderSelected');
                $RTOpermissionSelected = $this->input->post('RTOpermissionSelected');
                $newEducatorSelected = $this->input->post('newEducatorSelected');
                $employmentStatusSelected = $this->input->post('employmentStatusSelected');
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
                $areasOfDiabilitySelected = $this->input->post('areasOfDiabilitySelected');
                $haveDisabilitySelected  = $this->input->post('haveDisabilitySelected');
                // $form_apply3_data = array(
                //     'enrolment_courseSelected' => $enrolment_courseSelected,
                //     'mode_of_studySelected' => $mode_of_studySelected
                // );

                 // print_r(' Selected '.$prevQualificationCompletedSelected.' ');
                $this->applicationforms_model->form_apply3($enrolment_courseSelected, $mode_of_studySelected, $titleSelected, $genderSelected, $RTOpermissionSelected, $newEducatorSelected, $employmentStatusSelected,$highestCompletedSchoolSelected, $attendSecondarySchoolSelected,$prevQualificationCompletedSelected, $completedQulificationsSelected, $countryOfQualificationCompletedSelected, $levelOfSpeakSelected, $originSelected, $studyReasonSelected, $identificationsSelected,$haveFeesConessionSelected, $areaOfFeeConcessionSelected, $tuitionSelfIdentifiedSelected, $paymentMethodSelected,$consentTestimonialsSelected, $consentPhotoSelected, $country_Selected, $speakLanguageAtHomeSelected, $govtEnrolCoursesSelected, $govtFundedCoursesSelected, $sameLevelGovtFundedCoursesSelected, $haveDisabilitySelected, $areasOfDiabilitySelected);
            }

            public function form_apply3_enrolmentCourse2()
            {   

                $this->load->model('applicationforms_model', '', TRUE);
                $textBoxData = $this->input->post('textBoxData');
                $this->applicationforms_model->form_apply3_2($textBoxData);

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