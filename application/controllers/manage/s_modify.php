<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class s_modify extends CI_Controller {


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
    }

    public function index()
    {
        $this->load->view('formDateChange');
     
    }
    public function date()
    {
        $tbl_name = $this->input->post('form_name');
        $form_id = $this->input->post('form_id');
        $form_date = $this->input->post('form_date');
        $form_date = date("Y-m-d h:i:sa",strtotime($form_date));
        $data = array(
            'submission_date'=>$form_date
        );
        if( $tbl_name == 'usi_permission_verification_form' || $tbl_name == 'enrollment_booklet'  ){
            $q = $this->SqlModel->updateRecord($tbl_name, $data, array('Id'=>$form_id));
        }
        else if( $tbl_name == 'skills_first_program_enrolment_agreement_for' || $tbl_name == 'student_induction_form'  ){
            $q = $this->SqlModel->updateRecord($tbl_name, $data, array('id'=>$form_id));
        }
        else{
            echo "Date cannot modify, table name or id is wrong";
        }
		if($q==true)
		{
			$this->session->set_flashdata('alert','editsuccess');
			redirect(base_url().'manage/','location');
		}
		else{
			$this->session->set_flashdata('alert','error');
			redirect(base_url().'manage/'.$this->controller.'/index/'.$parent_id,'location');
		}
     
    }






}

