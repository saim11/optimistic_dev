<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {


    public $ws;
    public $tblName 		= 	"test";
    public $pKey			=	"";
    public $colPrefix       =   "test_";
    public $moduleName 		=	"Test";
    public $controller 		=	"";
    public $per_page 		=	"10";
    public $tStatus 		=	"";
    public $listView 		=	"crud";
    public $addEditView 	=	"addcrud";
    public $form1			= "usi_permission_verification_form";
	public $form2			= "enrollment_booklet";
	public $form3			= "skills_first_program_enrolment_agreement_for";
	public $form4			= "student_induction_form";
    

    public function __construct(){
        // Call the Model constructor
        parent::__construct();
        $this->ws = $this->SqlModel->getSingleRecord('site_settings',array('id'=>1));
        $this->load->library('session');
    }

    public function index()
    {
        $this->login();
    }
    public function login()
    {
        if($this->session->userdata('user_id'))
        {
            redirect('/');
        }

        if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != current_url())
        {
            $this->session->set_userdata('redirect_url',$_SERVER['HTTP_REFERER']);
        }

        date_default_timezone_set("Greenwich");
        $now = NOW();
        $now = unix_to_human($now, FALSE, 'eu');

        $this->form_validation->set_rules('user_email', 'Email', 'trim|required|xss_clean|valid_email|strip_tags');
        $this->form_validation->set_rules('user_password', 'Password', 'trim|required|xss_clean|md5');


        $this->form_validation->set_message('valid_email','Please enter a valid  %s.');
        $this->form_validation->set_message('required','%s is required.');

        // /*Client side validation*/
        if ($this->form_validation->run() == FALSE)
        {
            if(validation_errors()){$this->session->set_userdata('error_from_php', validation_errors());}
            $dataheader['headertitle'] = 'Login | Registration ';
            $dataheader['page_meta'] = 'Coordinator Login ';
            $dataheader['page_title'] = 'Login | Coordinator';
             $this->load->view('header', $dataheader);
             $this->load->view('c_login');
             $this->load->view('footer');

        }
        else
        {
            $email = $this->input->post('user_email');
            $password = $this->input->post('user_password');
            /*Calling for server validation*/

            $user_details = $this->forms_model->c_login($email,$password);

            if($user_details != 0)
            {
                if($user_details['user_status'] == "Pending" || $user_details['user_status'] == "Un-Active")
                {
                    $this->session->set_userdata('error_from_php', 'Whoops! Your account is not Activated, please contact Administrator');
                    redirect("c_login");
                }
                else
                {
                    if($user_details['user_status'] == "Blocked")
                    {
                        $this->session->set_userdata('error_from_php', 'Your account has been blocked by the Admin.');
                        redirect("c_login");
                    }

                    $this->general_model->registerSession($user_details);
                    if($this->session->userdata('redirect_url'))
                    {
                        $this->session->unset_userdata('redirect_url');
                        redirect($this->session->userdata('redirect_to'));
                        $this->session->unset_userdata('redirect_to');
                    }
                    else
                    {
                        $this->session->set_userdata('user_id', $this->session->userdata('co_id'));
                        $this->session->set_userdata('user_name', $this->session->userdata('co_name'));
                        redirect('/');
                    }

                } // end else when verified

            }
            else
            {
                // Query just to show interactive status message
                $this->session->set_userdata('error_from_php', 'Wrong Id and/or Password.');
                redirect("c_login");
            }

        } // end else of validations
    }






}

