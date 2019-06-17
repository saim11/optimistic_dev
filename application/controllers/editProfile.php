<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use \setasign\Fpdi\Fpdi;


class editProfile extends CI_Controller {
    public $tblName="user";
    public $updatedId="user_id";
    public $controller = "editProfile";
    public $tblNameProfile = "account_upload_files";
    public $data=array();

    public function index()
	{
		echo "Heloo Saim Ahmed. ";
    }
    public function units()
	{
        if(isset($_POST['course'])){
            $data['user_details'] = $this->SqlModel->getRecords('*', 'students' ,'','ASC',array('student_id'=>$_POST['st_id'],'sub_courses_id'=>$_POST['course'],'unit_status'=>'Completed'));
                echo '<div class="pending_units">';
                echo '<h2>Completed</h2>';
                echo '<div class="units"></div>';
                echo '<ol class="completed_units_ol">';
                foreach($data['user_details'] as $cols){
                    echo '<li class="completed_units_ol1">'.$this->SqlModel->getSingleField('unit_name', 'course_units',array('id'=>$cols['unit_id'])).'</li>';
                }
                echo '</ol>'; 
                echo '</div><!-- units_left -->';
                $data['user_details'] = $this->SqlModel->getRecords('*', 'students' ,'','ASC',array('student_id'=>$_POST['st_id'],'sub_courses_id'=>$_POST['course'],'unit_status'=>'Incomplete'));
                echo '<div class="pending_units">';
                echo ' <h2 >Incompleted</h2>';
                echo '<div class="units"></div>';
                echo '<ol class="completed_units_ol">';
                foreach($data['user_details'] as $cols){
                    echo '<li class="completed_units_ol1">'.$this->SqlModel->getSingleField('unit_name', 'course_units',array('id'=>$cols['unit_id'])).'</li>';
                }
                echo '</ol>'; 
                echo '</div><!-- units_left -->';
                $data['user_details'] = $this->SqlModel->getRecords('*', 'students' ,'','ASC',array('student_id'=>$_POST['st_id'],'sub_courses_id'=>$_POST['course'],'unit_status'=>'Pending'));
                echo '<div class="pending_units">';
                echo ' <h2 >Pending</h2>';
                echo '<div class="units"></div>';
                echo '<ol class="completed_units_ol">';
                foreach($data['user_details'] as $cols){
                    echo '<li class="completed_units_ol1">'.$this->SqlModel->getSingleField('unit_name', 'course_units',array('id'=>$cols['unit_id'])).'</li>';
                }
                echo '</ol>'; 
                echo '</div><!-- units_left -->';               
        }
    }

    // Reset Password Function
    public function resetPassword(){
        if(isset($_POST['saveBtn'])){
            $oldPassword = trim($this->input->post('old_password'));
            $newPassword = trim($this->input->post('new_password'));
            $confirmPassword = trim($this->input->post('confirm_password'));
            $this->changepassword($oldPassword,$newPassword,$confirmPassword);
        }
        else if(isset($_POST['accountBtn'])){
            $studentDetails=array();
            $contact = $this->input->post('student_contact');
            array_push($studentDetails,$contact,$this->session->userdata('user_id'));
            $this->studentDetails($studentDetails);
        }
    }

    public function changepassword($O_P="",$N_P="",$C_P=""){
        $user_password = $this->SqlModel->getSingleField('user_password', 'user',array('user_id'=>$this->session->userdata('user_id')));
        if($user_password != md5($O_P)){
            $this->session->set_userdata('error_from_php', 'Old Passwrord is wrong! Please enter correct password to reset.');
            redirect("/home/myAccount/".$this->session->userdata('user_id') );
        }
        else if($N_P != $C_P){
            $this->session->set_userdata('error_from_php', 'New password and confirm password is not matched!Please Try again with care');
            redirect("/home/myAccount/".$this->session->userdata('user_id'));
        }else{
            $updateData  = array('user_password' => md5($N_P));
            $updateWhere = array('user_id' => $this->session->userdata('user_id'));
            $status =  $this->general_model->updateDynamic('user' , $updateData, $updateWhere);
            $this->session->set_userdata('success_from_php', 'New password successfully updated!');
            redirect("/home/myAccount/".$this->session->userdata('user_id'));
        }
    }
    // ===================================================================


    // Update student details
    public function studentDetails($details=array()){
        
        $data = array('user_contact'=>$details[0]);
        
        $q = $this->SqlModel->updateRecord($this->tblName, $data, array($this->updatedId=>$details[1]));
		if($q==true)
		{
			$this->session->set_userdata('success_from_php', 'Record Updated Successfully');
            redirect("/home/myAccount/".$details[1]);
		}
		else{
			$this->session->set_userdata('error_from_php', 'Error in Updating Record');
			redirect("/home/myAccount/".$details[1]);
		}
    }

    // ===================================================================



    // Uploading student profiles Documents . . . .  
    public function profileUpload(){
        
        if(isset($_POST['uploadBtn'])){

        // -----------------Uploading student documents------------------------------
		if(isset($_FILES['passport'])&&$_FILES['passport']['tmp_name']!="")
		{
            $this->upload_file('passport',$_FILES['passport']['name']);        
        }
        if(isset($_FILES['driverLicense'])&&$_FILES['driverLicense']['tmp_name']!="")
		{
            $this->upload_file('driverLicense',$_FILES['driverLicense']['name']); 
        }
        if(isset($_FILES['medicare'])&&$_FILES['medicare']['tmp_name']!="")
		{
            $this->upload_file('medicare',$_FILES['medicare']['name']); 
        }
        if(isset($_FILES['b_cert'])&&$_FILES['b_cert']['tmp_name']!="")
		{
            $this->upload_file('b_cert',$_FILES['b_cert']['name']); 
        }
        if(isset($_FILES['citizenCert'])&&$_FILES['citizenCert']['tmp_name']!="")
		{
            $this->upload_file('citizenCert',$_FILES['citizenCert']['name']); 
        }
        if(isset($_FILES['regCert'])&&$_FILES['regCert']['tmp_name']!="")
		{
            $this->upload_file('regCert',$_FILES['regCert']['name']); 
        }
        if(isset($_FILES['IMMI'])&&$_FILES['IMMI']['tmp_name']!="")
		{
            $this->upload_file('IMMI',$_FILES['IMMI']['name']); 
        }
        if(isset($_FILES['VISA'])&&$_FILES['VISA']['tmp_name']!="")
		{
            $this->upload_file('VISA',$_FILES['VISA']['name']); 
        }
        if($_FILES['passport']['tmp_name']!="" || $_FILES['driverLicense']['tmp_name']!="" || $_FILES['medicare']['tmp_name']!="" || $_FILES['b_cert']['tmp_name']!="" || $_FILES['citizenCert']['tmp_name']!="" || $_FILES['regCert']['tmp_name']!="" || $_FILES['IMMI']['tmp_name']!="" || $_FILES['VISA']['tmp_name']!="")
		{
            $this->session->set_userdata('success_from_php', 'Files Uploaded Successfully!');
            redirect("/home/myAccount/");
        }
        else{
            $this->session->set_userdata('error_from_php', 'Error! While Updating Files.');
            redirect("/home/myAccount/");
        }
    }        
}

    public function upload_file($tagName="",$file_name=""){
        $status = $this->SqlModel->getSingleField('status','account_upload_files',array('user_id' =>$this->session->userdata('user_id'), 'doc_type'=> $tagName)); 
        $update = array();

        $upload_path='./resources-Images/student_docs';
		if (!file_exists($upload_path))
        {
            $create = mkdir($upload_path, 0777, TRUE);
            if (!$create ){return;}
        }
            $config['encrypt_name'] = TRUE;
			$config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'jpg|gif|png|jpeg|JPG|PNG|doc|docx|pdf|PDF';
			$config['max_size']	= '102400';
			$config['max_width']  = '4000';
			$config['max_height']  = '4000';
			$config['remove_spaces'] = true;
            $this->load->library('upload', $config);
            $this->load->library('image_lib');
            if ($this->upload->do_upload($tagName, $file_name))
			{
                $filename_ephoto = $this->upload->data($tagName , $file_name);
                $this->data[$tagName] = './resources-Images/student_docs/'.$filename_ephoto['file_name'];
                $this->data = array(
                    'user_id'=>$this->session->userdata('user_id')
                    ,'upload_file_name'=>$filename_ephoto['file_name']
                    ,'upload_file_path'=>$this->data[$tagName]
                    ,'file_image' => $this->data[$tagName]
                    ,'doc_type'   => $tagName
                    ,'status' => 'Uploaded'
                );
            if($status != "Uploaded"){
                $q = $this->SqlModel->insertRecord($this->tblNameProfile, $this->data);
            }
            else{
                $update[$tagName] = './resources-Images/student_docs/'.$filename_ephoto['file_name'];
                $update = array(
                    'upload_file_name'=>$filename_ephoto['file_name']
                    ,'upload_file_path'=>$update[$tagName]
                    ,'file_image' => $update[$tagName]
                    ,'doc_type'   => $tagName
                    ,'status' => 'Uploaded'
                );
                $q = $this->general_model->updateDynamic($this->tblNameProfile,$update,array('user_id' =>$this->session->userdata('user_id'), 'doc_type'=> $tagName));
                }        
            }
            else{
                var_dump( $this->upload->display_errors());
                echo " failed !";
            }
    }

     // ===================================================================
     public function coDetails($co_id=""){
        $data = array('co_contact'=>$this->input->post('co_contact'));
        
        $q = $this->SqlModel->updateRecord("co_ordinator", $data, array('co_id'=>$co_id));
		if($q==true)
		{
			$this->session->set_userdata('success_from_php', 'Record Updated Successfully');
            redirect("/home/coAccount/".$details[1]."/".$co_id);
		}
		else{
			$this->session->set_userdata('error_from_php', 'Error in Updating Record');
			redirect("/home/coAccount/".$details[1]."/".$co_id);
		}
    }

    // ===================================================================
    public function printCoDetails(){
        $data = array('submission_date'=>$_POST['printDate'],'coordinator_id'=>$_POST['co_id']);
        $date = date('m-Y',strtotime($_POST['printDate']));
        // $co_id =$this->SqlModel->getSingleField('id', 'referred_students',array('co_id'=>$_POST['co_id']));
        // echo $date;
        $dataVal = $this->SqlModel->getJoinWhereRecords(
                                                        '*'
                                                        ,'students'
                                                        ,'course_units'
                                                        ,'students.unit_id=course_units.id'
                                                        ,'courses'
                                                        ,'students.course_id=courses.course_id'
                                                        ,'sub_courses'
                                                        ,'students.sub_courses_id=sub_courses.id'
                                                        ,'user'
                                                        ,'students.student_id=user.user_id'
                                                        ,'co_ordinator'
                                                        ,'students.coordinator_id=co_ordinator.co_id'
                                                        ,'inner'
                                                        ,'students.coordinator_id'
                                                        ,array(
                                                                'coordinator_id'=>$_POST['co_id']
                                                                )
                                                        ,$date        
                                                        );
         if(empty($dataVal)){
            $dataVal =  $this->SqlModel->getRecords('*', 'co_ordinator' ,'','ASC',array('co_id'=>$_POST['co_id']));
            array_push($dataVal,$_POST['printDate']);
         }                                               
        echo json_encode($dataVal);                                            
    }



    
	
}



