
<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class formEmail extends CI_Controller {
    public $form1="usi_permission_verification_form";
    public $form2="enrollment_booklet";
    public $form3="skills_first_program_enrolment_agreement_for";
    public $form4="student_induction_form";



    public function __construct(){
        // Call the Model constructor
        parent::__construct();
        $this->load->library('encrypt');
    }
    
    public function index(){
        
        $config = array(
            'mailtype' => 'html',
            'useragent' => "saim",
        );
        $this->load->library('email', $config);
            $email_from = "no-reply@optimisticfuture.com.au";
            $email_to   =  'saim@synctechsol.com';
			$name_from  = "Optimistic Future";
            $name_to    = 'Saim Ahmed';
            $subject    = 'User Submitting form';
            $content = 'User has submitted his/her form..!';


        if(isset($_POST['form'])){
            $data = base64_decode($_POST['form']);
            file_put_contents("temp_send_email_form_students/USI_Form.pdf",$data);
            $attach = FCPATH.'temp_send_email_form_students/USI_Form.pdf';            
            $email_status = $this->general_model->shoot_email_full_dynamic($email_from, $email_to, $name_from, $name_to,$subject, $content, $attach);
        
        }else if(isset($_POST['form2'])){
            $data = base64_decode($_POST['form2']);
            file_put_contents("temp_send_email_form_students/Enrollment_Booklet.pdf",$data);
            $attach = FCPATH.'temp_send_email_form_students/Enrollment_Booklet.pdf';            
            $email_status = $this->general_model->shoot_email_full_dynamic($email_from, $email_to, $name_from, $name_to,$subject, $content, $attach);
        
        }else if(isset($_POST['form3'])){
            $data = base64_decode($_POST['form3']);
            file_put_contents("temp_send_email_form_students/SKILLS_FIRST_PROGRAM_ENROLMENT_AGREEMENT_FORM.pdf",$data);
            $attach = FCPATH.'temp_send_email_form_students/SKILLS_FIRST_PROGRAM_ENROLMENT_AGREEMENT_FORM.pdf';            
            $email_status = $this->general_model->shoot_email_full_dynamic($email_from, $email_to, $name_from, $name_to,$subject, $content, $attach);
        
        }else if(isset($_POST['form4'])){
            $data = base64_decode($_POST['form4']);
            file_put_contents("temp_send_email_form_students/STUDENT_INDUCTION_FORM.pdf",$data);
            $attach = FCPATH.'temp_send_email_form_students/STUDENT_INDUCTION_FORM.pdf';            
            $email_status = $this->general_model->shoot_email_full_dynamic($email_from, $email_to, $name_from, $name_to,$subject, $content, $attach);
    
        }else{
            $data = base64_decode($_POST['form']);
            echo "Nothing ..!!".$data;
        }
}
        public function forms_attestation(){
            $data_user=array();
            echo $_POST['form'];
            // Form 1================================
            if(isset($_POST['form']) && isset($_POST['user']) && isset($_POST['form1']) ){
                $data = base64_decode($_POST['form1']);
                file_put_contents("student_attested_forms/".$_POST['user']."_".$_POST['form'].".pdf",$data);
                $path = "student_attested_forms/".$_POST['user']."_".$_POST['form'].".pdf";
                $data_user=array(
                    'download_path'=> $path
                );
                 $q = $this->SqlModel->updateRecord($this->form1, $data_user, array(
                    'user_id'=>$_POST['user'],
                    'id'=>$_POST['form']
                ));
                if($q==true)
                {
                    echo "Form Approved!";
                }
                else{
                    echo "Form Approved Error!";
                }
            }
            // Form 2================================
            if(isset($_POST['form']) && isset($_POST['user']) && isset($_POST['form2']) ){
                $data = base64_decode($_POST['form2']);
                file_put_contents("student_attested_forms/".$_POST['user']."_".$_POST['form'].".pdf",$data);
                $path = "student_attested_forms/".$_POST['user']."_".$_POST['form'].".pdf";
                $data_user=array(
                    'download_path'=> $path
                );
                 $q = $this->SqlModel->updateRecord($this->form2, $data_user, array(
                    'user_id'=>$_POST['user'],
                    'Id'=>$_POST['form']
                ));
                if($q==true)
                {
                    echo "Form Approved!";
                }
                else{
                    echo "Form Approved Error!";
                }
            }
            // Form 3================================
            if(isset($_POST['form']) && isset($_POST['user']) && isset($_POST['form3']) ){
                $data = base64_decode($_POST['form3']);
                file_put_contents("student_attested_forms/3_".$_POST['user']."_".$_POST['form'].".pdf",$data);
                $path = "student_attested_forms/3_".$_POST['user']."_".$_POST['form'].".pdf";
                $data_user=array(
                    'download_path'=> $path
                );
                 $q = $this->SqlModel->updateRecord($this->form3, $data_user, array(
                    'user_id'=>$_POST['user'],
                    'id'=>$_POST['form']
                ));
                if($q==true)
                {
                    echo "Form Approved!";
                }
                else{
                    echo "Form Approved Error!";
                }
            }
            // Form 4================================
            if(isset($_POST['form']) && isset($_POST['user']) && isset($_POST['form4']) ){
                $data = base64_decode($_POST['form4']);
                file_put_contents("student_attested_forms/4_".$_POST['user']."_".$_POST['form'].".pdf",$data);
                file_put_contents("student_attested_forms/4_".$_POST['user']."_".$_POST['form'].".pdf",$data);
                $path = "student_attested_forms/4_".$_POST['user']."_".$_POST['form'].".pdf";
                $data_user=array(
                    'download_path'=> $path
                );
                 $q = $this->SqlModel->updateRecord($this->form4, $data_user, array(
                    'user_id'=>$_POST['user'],
                    'Id'=>$_POST['form']
                ));
                if($q==true)
                {
                    echo "Form Approved!";
                }
                else{
                    echo "Form Approved Error!";
                }
            }

        }



}


?>






