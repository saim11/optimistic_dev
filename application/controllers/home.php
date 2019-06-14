<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
use \setasign\Fpdi\Fpdi;


class Home extends CI_Controller {
    public $ws;
    public $data=array();

	public function __construct(){
			// Call the Model constructor
			parent::__construct();

			$this->ws = $this->SqlModel->getSingleRecord('site_settings',array('id'=>1));
			if(isset($this->ws['under_construction'])&&$this->ws['under_construction']=="Yes"&&$this->input->get('preview')!="1")
			{
				redirect(base_url('under-construction.html'));
			}
			$this->load->library('encrypt');
	}

	public function index()
	{
        $this->page($this->SqlModel->getSingleField('page_uri','pages',array('page_id'=>1)));
	}

	public function page($page_uri="")
	{   
		$preview = $this->input->get('preview');
        $page_uri = str_replace(".html","",$page_uri);
        
		if($preview=="1")
		{
			$where = array('page_uri'=>$page_uri);
		}
		else{

			$where = array('page_uri'=>$page_uri,'page_status'=>'Published');	
		}
		
        $pageData = $this->SqlModel->getSingleRecord('pages',$where);
        if(!isset($pageData['page_meta'])){
            $pageData['page_meta'] == "";
        }
        else if(!isset($pageData['page_title'])){
            $pageData['page_title'] == "";
        }
        if(empty($pageData))
		{
			redirect(base_url());
		}
		

		$data = array(
		'pageData' 		 => $pageData,
        'page_title'	 => $pageData['page_title'],
        'page_meta'      => $pageData['page_meta'],
		'menus' => $this->SqlModel->getRecords('*', 'menu', 'menu_id', 'ASC',  array('menu_status'=>'Published')),
		);
        $showView = "home";
        if($pageData["page_id"]!=1)
		{
			$showView = $pageData["page_uri"];
		}
		if($pageData["page_id"] > 17 || $pageData["page_id"] == 8 || $pageData["page_id"] == 9 || $pageData["page_id"] == 10 || $pageData["page_id"] == 11 || $pageData["page_id"] == 12 || $pageData["page_id"] == 13 || $pageData["page_id"] == 42 || $pageData["page_id"] == 58 || $pageData["page_id"] == 59 )
		{
			$showView = 'page';
		}

		if($pageData["page_id"]==20)
		{
			$showView = $pageData["page_uri"];
		}		  

        
        if (is_file(APPPATH.'views/' . $pageData["page_uri"]. '.php'))
            {
                $showView = $pageData["page_uri"];
            }

           

        if($pageData["page_id"]!=5 &&  $pageData["page_id"]!=39 && ($pageData["page_id"] != 45 && $pageData["page_id"] != 46 && $pageData["page_id"] != 47))
        {
            //   ==== form 1 view start (controller method) =========
                if($pageData["page_id"] == 33) {
                    
                    $this->load->model('applicationForms_model', '', TRUE);
                    $data['form_apply1']= $this->applicationForms_model->get_form_apply1();
                     if(sizeof($data['form_apply1']['enrol']) <= 0){
                        $loginUserId = $this->session->userdata('user_id');
                        // $query = $this->db->get_where('usi_permission_verification_form', array('user_id' => $loginUserId, 'form_submitted' => 'Submitted'));
                        // print_r($query->num_rows);
                        // if($query->num_rows <=0){
                            $data = array(
                                'user_id' => $loginUserId,
                                'form_submitted' => 'Pending'
                            );
                            $this->db->insert('usi_permission_verification_form', $data);
                            $data['form_apply1'] = $this->applicationForms_model->get_form_apply1();
                            $data['page_title'] = $pageData['page_title'];
                            $data['page_meta'] = $pageData['page_meta'];
                        // }
                    }
                    $this->load->view('form-apply1', $data, TRUE);
                }
            //   ==== form 1 view start (controller method) =========

            //   ==== form 2 view start for form 2 (controller method) =========
                if($pageData["page_id"]==34){
                    $this->load->model('applicationForms_model', '', TRUE);
                    $data['form_apply2']= $this->applicationForms_model->get_form_apply2();
                    // print_r($data['form_apply2']);
                    if(sizeof($data['form_apply2']['enrol']) <= 0){
                        $loginUserId = $this->session->userdata('user_id');
                        // $query = $this->db->get_where('enrollment_booklet', array('user_id' => $loginUserId, 'form_submitted' => 'Submitted'));
                        // print_r($query->num_rows);
                        // if($query->num_rows <=0){
                            $data = array(
                                'user_id' => $loginUserId,
                                'form_submitted' => 'Pending'
                            );
                            $this->db->insert('enrollment_booklet', $data);
                            $data['page_title'] = $pageData['page_title'];
                            $data['page_meta'] = $pageData['page_meta'];
                            $data['form_apply2']= $this->applicationForms_model->get_form_apply2();
                        // }
                    }
                    $this->load->view('form-apply2', $data, TRUE);
                }
            // ====== form 2 view end (controller method) =========

            // ====== form 3 view start (controller method)======
                if($pageData["page_id"]==37){
                    $this->load->model('applicationForms_model', '', TRUE);
                    
                    $data['form_apply3']= $this->applicationForms_model->get_form_apply3();
                    
                    if(sizeof($data['form_apply3']['enrol']) <=0){
                        $loginUserId = $this->session->userdata('user_id');
                        // $query = $this->db->get_where('skills_first_program_enrolment_agreement_for', array('user_id' => $loginUserId));
                        // if($query->num_rows <=0){
                            $data = array(
                                'user_id' => $loginUserId,
                                'form_submitted' => 'Pending'
                            );
                            $this->db->insert('skills_first_program_enrolment_agreement_for', $data);
                            $data['page_title'] = $pageData['page_title'];
                            $data['page_meta'] = $pageData['page_meta'];
                            $data['form_apply3']= $this->applicationForms_model->get_form_apply3();
                        // }
                    }

                    $this->load->view('form-apply3', $data, TRUE);
                }
            // ==== form 3 view end (controller method) ======

            // ====== form 4 view start (controller method)======
            if($pageData["page_id"]==35){
                $this->load->model('applicationForms_model', '', TRUE);
                $data['form_apply4']= $this->applicationForms_model->get_form_apply4();

                if(sizeof($data['form_apply4']['enrol']) <=0){
                        $loginUserId = $this->session->userdata('user_id');
                        // $query = $this->db->get_where('student_induction_form', array('user_id' => $loginUserId));
                        // if($query->num_rows <=0){
                            $data = array(
                                'user_id' => $loginUserId,
                                'form_submitted' => 'Pending'
                            );
                            $this->db->insert('student_induction_form', $data);
                            $data['page_title'] = $pageData['page_title'];
                            $data['page_meta'] = $pageData['page_meta'];
                            $data['form_apply4']= $this->applicationForms_model->get_form_apply4();
                        // }
                    }

                    $this->load->view('form-apply4', $data, TRUE);
            }
            // ==== form 4 view end (controller method) ======


            
                $this->load->view('header',$data);
                $this->load->view($showView);
                $this->load->view('footer');

            

        }   
        else{
            if($pageData["page_id"] == 5)
			{
                $this->applicationform($data);
                
            }
            else if ($pageData["page_id"] == 45 || $pageData["page_id"] == 46 || $pageData["page_id"] == 47 ){
                $this->user_validation_on_categories_of_books($pageData["page_id"]);
            }
			else if($pageData["page_id"] == 39) {
                // echo $pageData["page_id"];
				$this->resources_auth();
				}
        }    
					
	}

	public function docontact() {

		$name = trim($this->input->post('name'));
		$email = trim($this->input->post('email'));
		$subject = trim($this->input->post('subject'));
		$message = nl2br(trim($this->input->post('message')));

		if ($name == "" || $message == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

			$this->session->set_userdata('error_from_php', 'Please fill out field correctly.');
            redirect('contact.html');
		}

		$webTitle = trim($this->ws['website_title']);
		$to = trim($this->ws['email']);

		$body = '<html>
	<head>
	<style>
	table{
	border: 1px solid #EAEAEA;
	margin-top:20px;
	border-collapse:collapse;
	}
	table tr{
	border-bottom: 1px solid #EAEAEA;
	}
	table_span{
	clear:both;
	display:block;
	font-family: Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#FF0000;
	margin-bottom:5px;
	}
	table td{
	padding:10px 5px;
	font-family: Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#737373;
	}
	table h3{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight:normal;
	color:#666;
	margin:8px 0px;
	}
	</style>
	</head>
	<body>
	<table  width="100%">
       <tr>
		<td colspan="2"><h3>Contact Request</h3></td>
        </tr>

        <tr>
        <td><strong>Name: </strong></td><td>' . $name . '</td>
		</tr>
		<tr>
        <td><strong>Email: </strong></td><td>' . $email . '</td>
		</tr>
		<tr>
		<td><strong>Message : </strong></td><td>' . $message . '</td>
		</tr>

		 <tr>
        <td><strong>Date/Time: </strong></td><td>' . date('M d, Y h:i a') . '</td>
        </tr>
		</table></body></html>';
		$config = array(
			'mailtype' => 'html',
			'useragent' => $webTitle,
		);

		$this->load->library('email', $config);

		$senderEmail = $email;
		$sender_name = $name;
		$this->email->from($senderEmail, $sender_name);
		$this->email->to($to);
        $this->email->cc('atif.consultant@gmail.com');
		$this->email->subject($subject);
		$this->email->message($body);
		$this->email->set_mailtype("html");
		if ($this->email->send()) {
			$this->session->set_userdata('success_from_php', 'Contact Details have been sent.');
            redirect('contact.html');
		} else {    
			$this->session->set_userdata('error_from_php', 'Something went wrong.');
              redirect('contact.html');
		}
	}

	public function subscribed()
	{
		$email = trim($this->input->post('emailsubscribe'));
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

			$this->session->set_userdata('error_from_php', 'Some thing went wrong.');
            redirect('/');
		}
		$data['subscription_email']=$email;
		$this->SqlModel->insertRecord('subscription', $data);
		$this->session->set_userdata('success_from_php', 'You have Subscribed.');
            redirect('/');


	}

	public function applicationformbk()
	{
		$name = trim($this->input->post('first_name'));
		$email = trim($this->input->post('email'));
		$subject="Application Form Optimistic futures";

		if ($name == "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

			$this->session->set_userdata('error_from_php', 'Some thing went wrong.');
            redirect('/');
		}

		$webTitle = trim($this->ws['website_title']);
		$to = trim($this->ws['email']);

		$html='<html>
	<head>
	<style>
	table{
	border: 1px solid #EAEAEA;
	margin-top:20px;
	border-collapse:collapse;
	}
	table tr{
	border-bottom: 1px solid #EAEAEA;
	}
	table_span{
	clear:both;
	display:block;
	font-family: Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#FF0000;
	margin-bottom:5px;
	}
	table td{
	padding:10px 5px;
	font-family: Arial, Helvetica, sans-serif;
	font-size:12px;
	color:#737373;
	}
	table h3{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight:normal;
	color:#666;
	margin:8px 0px;
	}
	</style>
	</head>
	<body><table  width="100%"><tr>
		<td colspan="2"><h3>Application form</h3></td>
        </tr>';
       
		
        foreach ($_POST as $key => $value) {
            $html=$html.'<tr><td><strong>'.str_replace("_"," ",$key).': </strong></td>';
            $value_main="";
        	if( is_array($value))
        	{
                foreach ($value as $key2 => $value2) {
                	$value_main=$value_main.','.$value2;
                }

        	}
        	else
        	{
             $value_main=$value;
        	}
        $html=$html.'<td>'.$value_main.'</td></tr>';

        }
        $html=$html.'</table></body></html>';

        $body=$html;

        $config = array(
			'mailtype' => 'html',
			'useragent' => $webTitle,
		);

		$this->load->library('email', $config);

		$senderEmail = $email;
		$sender_name = $name;
		$this->email->from($senderEmail, $sender_name);
		$this->email->set_mailtype("html");
		$this->email->to($to);
        $this->email->cc('atif.consultant@gmail.com');
		$this->email->subject($subject);
		$this->email->message($body);
		if (@$this->email->send()) {
			$this->session->set_userdata('success_from_php', 'Application Form have been sent.');
            redirect('/');
		} else {
			$this->session->set_userdata('error_from_php', 'Some thing went wrong.');
            redirect('/');
		}

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

             $this->load->view('header', $dataheader);
             $this->load->view('login');
             $this->load->view('footer');

        }
        else
        {
            $email = $this->input->post('user_email');
            $password = $this->input->post('user_password');
            /*Calling for server validation*/

            $user_details = $this->forms_model->login($email,$password);

            if($user_details != 0)
            {
                if($user_details['user_status'] == "Pending" || $user_details['user_status'] == "Un-Active")
                {
                    $this->session->set_userdata('error_from_php', 'Whoops! Your account is not Activated, please contact Administrator');
                    redirect("login.html");
                }
                else
                {
                    if($user_details['user_status'] == "Blocked")
                    {
                        $this->session->set_userdata('error_from_php', 'Your account has been blocked by the Admin.');
                        redirect("login.html");
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
                        redirect('/');
                    }

                } // end else when verified

            }
            else
            {
                // Query just to show interactive status message
                $this->session->set_userdata('error_from_php', 'Wrong Id and/or Password.');
                redirect("login.html");
            }

        } // end else of validations
    }



	public function signup()
    {
        if($this->session->userdata('user_id'))
        {
            redirect('/');
        }
        $redirect=true;

        date_default_timezone_set("Greenwich");
        $now = NOW();
        $now = unix_to_human($now, TRUE, 'eu');
        
        $this->form_validation->set_rules('user_type','User Type','required');
        $this->form_validation->set_rules('user_name','Name','trim|required|xss_clean|strip_tags|alpha_dash_space');
        $this->form_validation->set_rules('user_email','Email','trim|required|xss_clean|strip_tags|valid_email|is_unique[user.user_email]');
        $this->form_validation->set_rules('user_password','Password','trim|required|xss_clean|strip_tags|min_length[6]|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('user_contact', 'Contact Number', 'required');
       

        $this->form_validation->set_message('alpha_dash','Special characters are not allowed in %s.');
        $this->form_validation->set_message('alpha_dash_space','Special characters are not allowed in %s.');
        $this->form_validation->set_message('is_unique','%s is already in use.');

        if($this->form_validation->run()===false)
        {
            if (validation_errors() != "") {$this->session->set_userdata('error_from_php', validation_errors());}
            $dataheader['headertitle'] = 'Sign | Registration';

            $this->load->view('header', $dataheader);
            $this->load->view('register',$data);
            $this->load->view('footer');

        }
        else {

            $course="";
            $value="";
            $email = $this->input->post('user_email');
            $activation_code = hash("sha256", $email) . md5($now);
            if($this->input->post('courses') == 'none'){
                $course = 'Individual_Support';
                $value="No";
            }
            else{
                $course = $this->input->post('courses');
                $value = 'Yes';
            }
            $user_verified="";
            if($this->input->post('user_type') =='trainer'){
                $user_verified = 'Yes';
            }
            else{
                $user_verified = 'Yes';
            }

            $signup_data = array(
                'user_name'         		=> $this->input->post('user_name'),
                'user_contact'         		=> $this->input->post('user_contact'),
                'user_email' 			    => $email,
                'user_password' 		    => md5($this->input->post('user_password')),
                'user_activation_code'  	=> $activation_code,
                'user_is_verified'		    => $user_verified,
                'user_status'	    	    => 'Pending',
                'user_added' 		        => $now,
                'user_type'                 => $this->input->post('user_type'),
                $course => $value 
            );
            $user_id = $this->general_model->insertDynamic('user',$signup_data);
            
            
            
            // Student with co ordinator code.
            $suburb = $this->input->post('co_ordinator_suburb');
            $co_code = $this->input->post('co_ordinator_code');
            $student_name = $this->input->post('user_name');
            $student_email = $email;
            var_dump($suburb,$co_code);
            if((isset($suburb) & isset($co_code)) & (!empty($suburb) & !empty($co_code)) ){
                $student_id = $this->SqlModel->getSingleField('user_id', 'user',array('user_name'=>$student_name, 'user_email'=>$student_email));
                $student_data = array(
                    'st_id'         		=> $student_id,
                    'st_text'               => $co_code,
                    'suburb'                => $suburb
                );
                $cond = $this->general_model->insertDynamic('referred_students',$student_data);
            }
            else if((isset($suburb) & isset($co_code)) & (!empty($suburb) & empty($co_code)) ){
                $student_id = $this->SqlModel->getSingleField('user_id', 'user',array('user_name'=>$student_name, 'user_email'=>$student_email));
                $HO ="HO";
                $defSuburb = 1;
                $HO_id = 1;

                $student_data = array(
                    'st_id'         		=> $student_id,
                    'st_text'               => $HO,
                    'suburb'                => $defSuburb,
                    'co_id'                 => $HO_id
                );
                $cond = $this->general_model->insertDynamic('referred_students',$student_data);
            }

          
            if($this->input->post('user_type') =='studen'){

            // Shoot Email...
            //$email_from = EMAIL_ADDRESS;
			$email_from = "no-reply@optimisticfuture.com.au";
            $email_to   =  $email;
            //$name_from  = EMAIL_SENDER_NAME;
			$name_from  = "Optimistic Future";
            $name_to    = $this->input->post('user_name');
            $subject    = 'Activation Code';
            $data["activation_url"]=$this->config->base_url().'home/emailactivation/'.$activation_code;
            $data["ws"]=$this->ws;
            $content    = $this->load->view('email/emailactivation',$data,true);

            $email_status = $this->general_model->shoot_email_full_dynamic($email_from, $email_to, $name_from, $name_to,$subject,$content);
            }
            // if($this->input->post('user_type') =='student'){
            //     $this->session->set_userdata('success_from_php', 'Congratulations! Your form has been submitted. An activation code has been sent to your Email Address. Please follow the procedure to activate your account.');
            // }
            // else{

                $this->session->set_userdata('success_from_php', 'Congratulations! Your form has been submitted. Administrator will contact you soon..');
            
                // }

            redirect("/");
            
        }
    }


    public function emailactivation($activation_code)
    {
        date_default_timezone_set("Greenwich");
        $now = NOW();
        $now = unix_to_human($now, FALSE, 'eu');

        $where_code = array(
            'user_activation_code' => $activation_code,
        );
        $user_data = $this->general_model->getRowDynamic('user',$where_code);


        if(($user_data==0) || ($activation_code == ''))
        {
            $this->session->set_userdata('error_from_php', 'A confirmation link is either expired or invalid. Please Try Again.');           // checking is activation code available or not
            redirect("/");
        }
        else
        {
            $email = $user_data['user_email'];
            $activation_code_new = hash("sha256", $email).md5($now);

            // Updating The Status

            $profile_array = array(
                'user_status'			=> 'Active',//enum('Active','Pending') NULL
                'user_activation_code' 	=> $activation_code_new,//varchar(255) NULL
                'user_is_verified' 		=> 'Yes',//enum('Yes','No') NULL
            );

            $where_update = array(
                'user_id' => $user_data['user_id'],
            );

            $this->general_model->updateDynamic('user',$profile_array,$where_update);


            // $email_from = EMAIL_ADDRESS;
            $email_from = "sohaib@synctechsol.com";
            $email_to   = $user_data['user_email'];
            // $name_from  = EMAIL_SENDER_NAME;
            $name_from = "Optimistic Futuree";
            $name_to    = $user_data['user_name'];
            $subject    = 'Thanks for Registration';
            $consultation_data['ws']=$this->ws;
            $content    = $this->load->view('email/thankyou/registration',array(),true);




            $this->general_model->registerSession($user_data);

            $this->session->set_userdata('success_from_php', 'Congratulations! Your signup process has been completed now. ');

            redirect("/");
        }

    }  // end parent activation



    public function forgotpassword()
    {
        date_default_timezone_set("Greenwich");
        $now = NOW();
        $now = unix_to_human($now, FALSE, 'eu');

        $this->form_validation->set_rules('user_email', 'Email', 'trim|required|xss_clean|valid_email|strip_tags');

        $this->form_validation->set_message('valid_email','Please enter a valid  %s.');
        $this->form_validation->set_message('required','%s is required.');

        // /*Client side validation*/
        if($this->form_validation->run() == FALSE)
        {
            $this->session->set_userdata('error_from_php', validation_errors());
            redirect('/');

        }
        else
        {

            $email = $this->input->post('user_email');

            $getWhere = array(
                'user_email' => $email
            );

            $registryData = $this->general_model->getRowDynamic('user' , $getWhere);

            if($registryData)
            {
                $name=$registryData['user_name'];
                $activation_code = $registryData['user_activation_code'];

                if($activation_code)
                {
                    $this->shootEmail_passwordRecovery($email, $name , $activation_code);
                    $this->session->set_userdata('success_from_php', 'The password reset information for your account has been sent to the email account you entered. You should receive this email shortly.');
                    redirect("/");

                }
                else
                {
                    $activation_code = hash("sha256", $email) . md5($now);

                    /*Updating new Activation code*/

                    $updateData  = array('user_activation_code' => $activation_code);
                    $updareWhere = array('user_id' => $registryData['user_id']);

                    $this->general_model->updateDynamic('user' , $updateData, $updareWhere);

                    $this->shootEmail_passwordRecovery($email, $name, $activation_code);
                    $this->session->set_userdata('success_from_php', 'The password reset information for your account has been sent to the email account you entered. You should receive this email shortly.');
                    redirect("/");
                }
            }
            else
            {
                $this->session->set_userdata('error_from_php', 'No such Email exists. Please enter a correct Email to proceed.');
                redirect("/");
            }


        } // end else PHP validations

    } // end forgot password

	
 private function shootEmail_passwordRecovery($email, $firstname, $activation_code)
    {
        // Shoot Email...
        $email_from = EMAIL_ADDRESS;
        $email_to   =  $email;
        $name_from  = EMAIL_SENDER_NAME;
        $name_to    =  $firstname;
        $subject    = 'Password Recovery';
        $data["activation_url"]=$this->config->base_url().'home/passwordrecovery/'.$activation_code;
        $data["ws"]=$this->ws;
        $content    = $this->load->view('email/passwordactivation',$data,true);

        $email_status = $this->general_model->shoot_email_full_dynamic($email_from, $email_to, $name_from, $name_to,$subject,$content);
        if(!$email_status)
        {
            $this->session->set_userdata('error_from_php', 'Whoops! There is a problem in sending the Email right now. Please try again later.');
            redirect("/");
        }

    }

        public function passwordrecovery($activation_code)
    {
        date_default_timezone_set("Greenwich");
        $now = NOW();
        $now = unix_to_human($now, FALSE, 'eu');

        $where_code = array(
            'user_activation_code' => $activation_code,
        );
        $registry_data = $this->general_model->getRowDynamic('user',$where_code);

        if(($registry_data==0) || ($activation_code == ''))
        {
            $this->session->set_userdata('error_from_php', 'The link is either expired or invalid. Please Try Again.');           // checking is activation code available or not
            redirect("/");
        }
        else
        {
              $this->session->set_userdata('user_id_resetpass_temp',$registry_data["user_id"] );
           // $this->general_model->registerSession($user_data);

            $dataheader['headertitle'] = 'Password Recovery ';
            $this->load->view('header', $dataheader);
            $this->load->view('resetpassword');
            $this->load->view('footer');
        }
    }

    public function logout()
    {
        // Exception of language. again selecting the same after destroying all
        $this->session->sess_destroy();
        redirect("/");
    }
    
    //Student Editing Details 
    public function myAccount($userId="")
    {
        
        
        // View student profile account for modification in account details.
        if(!$this->session->userdata('user_id'))
        {
            $this->session->set_userdata('error_from_php', 'Login required !');           
            $path_parts = pathinfo($_SERVER['REQUEST_URI']);
            $this->session->set_userdata(array('redirect_to'=>$path_parts['basename']));
            redirect('login.html');   
        }
        if($this->session->userdata('user_id')==$userId){
            $dataheader['user_details'] = $this->SqlModel->getRecords(array('user_name','user_email','user_contact','user_password'), 'user' ,'user_id','ASC',array('user_id'=>$userId));
            $this->load->model('application_forms_update_model', '', TRUE);
            $dataheader['form_apply1'] = $this->application_forms_update_model->get_form_apply1_for_student($userId);
            $dataheader['form_apply2'] = $this->application_forms_update_model->get_form_apply2_for_student($userId);
            $dataheader['form_apply3'] = $this->application_forms_update_model->get_form_apply3_for_student($userId);
            $dataheader['form_apply4'] = $this->application_forms_update_model->get_form_apply4_for_student($userId);
            $dataheader['courses'] = $this->SqlModel->getRecords("*", 'courses');
            // $dataheader['user_details'] = $this->SqlModel->getRecords(array('co_name','co_email','co_contact','co_password','co_code'), 'co_ordinator' ,'co_id','ASC',array('co_id'=>$userId));
            $dataheader['unit_id'] = $this->SqlModel->getRecords('unit_id', 'students','','',array('student_id'=>$userId));
            $dataheader['courses_id'] = array();
            $dataheader['sub_courses_title'] = array();
            foreach($dataheader['unit_id'] as $cols){
                array_push($dataheader['courses_id'], $this->SqlModel->getRecords(array('sub_courses_id', 'course_id'),'course_units' ,'','',array('id'=>$cols['unit_id'])));
            }
            foreach($dataheader['courses_id'] as $cols){
                array_push($dataheader['sub_courses_title'], $this->SqlModel->getRecords('*','sub_courses' ,'','',array('id'=>$cols[0]['sub_courses_id'])));
            }
            $dataheader['student'] = $this->SqlModel->getRecords('*', 'students','','',array('student_id'=>$userId));
            $dataheader['user_name'] = $this->SqlModel->getSingleField('user_name', 'user',array('user_id'=>$userId));
            $dataheader['page_meta'] = 'Student Profile';
            $dataheader['page_title'] = 'Student Profile';
            $dataheader['students_docs'] = $this->SqlModel->getRecords("*", 'account_upload_files' ,'Id','ASC',array('user_id'=>$userId));
            $this->load->view('header', $dataheader);
            $this->load->view('student-profile');
            $this->load->view('footer');
        }
        else{
            redirect($this->config->base_url().'home/myAccount/'.$this->session->userdata('user_id'), 'location');
        }
            
    }
    



    //coordinator Editing Details 
    public function coAccount($userId="")
    {
        
        // View student profile account for modification in account details.
        if(!$this->session->userdata('co_id'))
        {
            $this->session->set_userdata('error_from_php', 'Login required !');           
            $path_parts = pathinfo($_SERVER['REQUEST_URI']);
            $this->session->set_userdata(array('redirect_to'=>$path_parts['basename']));
            redirect('login.html');   
        }
        if($this->session->userdata('co_id')==$userId){
            $dataheader['user_details'] = $this->SqlModel->getRecords(array('co_id','co_name','co_email','co_contact','co_password','co_code'), 'co_ordinator' ,'co_id','ASC',array('co_id'=>$userId));
            $this->load->model('application_forms_update_model', '', TRUE);
            $dataheader['referred_students'] = $this->SqlModel->getRecords('*', 'referred_students' ,'','',array('co_id'=>$userId));
            $dataheader['student_detail']  = array();

            
            foreach($dataheader['referred_students'] as $cols){
                 array_push($dataheader['student_detail'],$this->SqlModel->getRecords('*', 'user' ,'','',array('user_id'=>$cols['st_id'])));
                }
            $dataheader['page_meta'] = 'Coordinator Account ';
            $dataheader['page_title'] = 'Account | Coordinator';
            $dataheader['co_student'] = $this->SqlModel->getRecords('*', 'students','','',array('student_id'=>$userId));                 
            $this->load->view('header', $dataheader);
            $this->load->view('coordinator-profile');
            $this->load->view('footer');
        }
        else{
            redirect($this->config->base_url().'home/myAccount/'.$this->session->userdata('user_id'), 'location');
        }
            
    }

    public function resetpassword()
    {
        date_default_timezone_set("Greenwich");
        $now = NOW();
        $now = unix_to_human($now, FALSE, 'eu');

        if($this->session->userdata('user_id_resetpass_temp'))
        {
            $this->form_validation->set_rules('password','Password','trim|required|xss_clean|strip_tags|min_length[6]');
            $this->form_validation->set_rules('repassword','Re-Type Password','trim|required|xss_clean|strip_tags|min_length[6]|matches[password]');

            $this->form_validation->set_message('required','%s is required.');

            // /*Client side validation*/
            if($this->form_validation->run() == FALSE)
            {
                $this->session->set_userdata('error_from_php', validation_errors());
                $dataheader['headertitle'] = 'Login | Reset Password ';

                $this->load->view('header', $dataheader);
                $this->load->view('resetpassword');
                $this->load->view('footer');

            }
            else
            {

                $activation_code = hash("sha256", $this->input->post('password')) . md5($now);
                $updateData  = array('user_password' => md5($this->input->post('password')), 'user_activation_code' => $activation_code );
                $updateWhere = array('user_id' => $this->session->userdata('user_id_resetpass_temp'));

                $this->general_model->updateDynamic('user' , $updateData, $updateWhere);

                $this->session->unset_userdata('user_id_resetpass_temp');

                $this->session->set_userdata('success_from_php', 'Your password has been reset. Now you can login with your new Password.');           // checking is activation code available or not
                redirect("/");


            } // end else PHP validaitons
        } // end if session
        else
        {
            $this->session->set_userdata('error_from_php', 'The link is either expired or invalid. Please follow the procedure to reset your passowrd.');           // checking is activation code available or not
            redirect("/");
        }
    }

    public function tests()
    {
    	if(!$this->session->userdata('user_id'))
    	{
    		$this->session->set_userdata('error_from_php', 'Login required!');           // checking is activation code available or not
           
    		redirect('/');
    	}
                $dataheader['headertitle'] = 'Tests';
                $this->load->view('header', $dataheader);
                $this->load->view('test-list');
                $this->load->view('footer');
    }

    public function test($test_id)
    {
    	date_default_timezone_set("Greenwich");
        $now = NOW();
        $now = unix_to_human($now, FALSE, 'eu');


    	if(!$this->session->userdata('user_id'))
    	{
    		$this->session->set_userdata('error_from_php', 'Login required!');           // checking is activation code available or not
           
    		redirect('/');
    	}
    	$where_code = array(
            'test_id' => $test_id,
        );
        $test_data = $this->general_model->getRowDynamic('test',$where_code);
        if($test_data)
        { 
        	if($_POST)
        	{
        		
        		$answer='';
        		$whereArray=array('question_status' => 'Published','question_test' => $test_data['test_id']);
		        $questions=$this->general_model->getResultDynamic('question',$whereArray);
		        if($questions) {
                foreach($questions as $question)
                {
                 $answer=$answer.'<div class="col-md-12">
	                              <div class="form-group">
	                  	          <label >'.$question['question_string'].' :</label>
                                  <ul>';
                     
                     if(isset($_POST['q_'.$question['question_id']]))
                     {
                     	if(is_array($_POST['q_'.$question['question_id']]))
                     	{
                            foreach ($_POST['q_'.$question['question_id']] as $ansss) {
                            	$answer=$answer.'<li>'.$ansss.'</li>';
                            }
                     	}
                     	else
                     	{
                     		$answer=$answer.'<li>'.$_POST['q_'.$question['question_id']].'</li>';
                     	}
                     }
           
                      $answer=$answer.'</ul></div></div>';
                }
                }
                $dataanswer=array('answer_text' => $answer,'answer_user'=>$this->session->userdata('user_id'),'answer_test'=> $test_data['test_id'],'answer_added'=>$now);

                $this->SqlModel->insertRecord('answer', $dataanswer);
                $this->session->set_userdata('success_from_php', 'Your Test have been Submitted.');           // checking is activation code available or not
                redirect("/");

        	}
        	else
        	{
	    	$dataheader['headertitle'] = $test_data['test_title'];
	    	$dataheader['test']=$test_data;
	        $this->load->view('header', $dataheader);
	        $this->load->view('test');
	        $this->load->view('footer');
	        }
        }
        else
        {
        	redirect('/');
        }
    }



    public function applicationform($data="")
    {
        if(!$this->session->userdata('user_id'))
        {
            $this->session->set_userdata('error_from_php', 'Login required!');           // checking is activation code available or not
            $path_parts = pathinfo($_SERVER['REQUEST_URI']);
            $this->session->set_userdata(array('redirect_to'=>$path_parts['basename']));
            redirect('login.html');
        }
                $dataheader['headertitle'] = 'Tests';
                $this->load->view('header', $data);
                $this->load->view('applicationform-list',$data);
                $this->load->view('footer');
    }
	// function for login validation on resources page == sohaib resources_auth
	    public function resources_auth()
    {
        if(!$this->session->userdata('user_id'))
        {
            $this->session->set_userdata('error_from_php', 'Login required !');           // checking is activation code available or not
            $path_parts = pathinfo($_SERVER['REQUEST_URI']);
               $this->session->set_userdata(array('redirect_to'=>$path_parts['basename']));
                redirect('login.html');   
        }
                $dataheader['headertitle'] = 'Tests';
                $this->load->view('header', $dataheader);
                $this->load->view('resources');
                $this->load->view('footer');
    }
// end sohaib function

// function for login validation on Category books page
public function user_validation_on_categories_of_books($val)
{
    if(!$this->session->userdata('user_id'))
    {
        $this->session->set_userdata('error_from_php', 'Login required !');           // checking is activation code available or not
        redirect('login.html');
    }
    else
    {
        
        $pageData['pageData'] = $this->SqlModel->getSingleRecord('pages', array('page_id'=>54));
        $user_type = $this->SqlModel->getSingleField('user_type', 'user',array('user_id'=>$this->session->userdata('user_id')));
        if($val ==45 && $user_type=='trainer'){
                $dataheader['headertitle'] = 'Tests';
                $this->load->view('header', $dataheader);
                $this->load->view('books-categories');
                $this->load->view('footer');
        }
        else if($val == 46 && $user_type=='trainer'){
                $dataheader['headertitle'] = 'Tests';
                $this->load->view('header', $dataheader);
                $this->load->view('books-sub-categories');
                $this->load->view('footer');
        }
        else if($val == 47 && $user_type=='trainer'){
                $dataheader['headertitle'] = 'Tests';
                $this->load->view('header', $dataheader);
                $this->load->view('nested-category-books');
                $this->load->view('footer');
        }
        else{
            $showView='page';
            
            // $this->load->view('header');
            $this->load->view($showView, $pageData);
            // echo "saidsds dsd  bdb ds yuds";
            // redirect("/");
        }
    }       
}
// end of function for login validation on Category books page

    public function pdfsubmit()
    {
    //     if(!empty($_POST['data'])){
    // $data = $_POST['data'];
    // $fname = "test.pdf"; // name the file
    // $file = fopen($fname, 'w'); // open the file path
    // fwrite($file, $data); //save data
    // fclose($file);
    // } else {
    //     echo "No Data Sent";
    // }
    //   $this->load->library('email');

//SMTP & mail configuration
        


        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'hasan.aalogics@gmail.com',
            'smtp_pass' => 'hasan+1992',
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );
        $this->email->initialize($config);

        $this->email->from("hasan.aalogics@gmail.com","hasan");
        $this->email->to("hasan.aalogics@gmail.com","hasan");
        $this->email->subject("subject");
        $this->email->message("content");


        if (!$this->email->send()){
            echo $this->email->print_debugger();
            return 0;//echo $this->email->print_debugger();
        }
        else{
            echo "here";
            return 1;}
    }



    public function pdfwithdata()
    {

        require_once(APPPATH.'libraries/fpdf/fpdf.php');
        require_once(APPPATH.'libraries/fpdi/src/autoload.php');
        

		$pdf = new FPDI();
		$pdf->AddPage();


		//Set the source PDF file
		$pagecount = $pdf->setSourceFile("ofpdfs/test.pdf");

		//Import the first page of the file
		$tpl = $pdf->importPage(1);
		//Use this page as template
		$pdf->useTemplate($tpl);

		#Print Hello World at the bottom of the page

		//Go to 1.5 cm from bottom
		//$pdf->SetY(-15);
		//Select Arial italic 8
		$pdf->SetFont('Arial','B',12);
		//Print centered cell with a text in it
		$pdf->Cell(0, 10, "Hello World", 0, 0, 'L');

        $pdf->Output();
        //$pdf->Output("my_modified_pdf.pdf", "F");

    }

    public function pdfmakewithdata($stringg,$stringg2)
    {

    	require_once(APPPATH.'libraries/fpdf/fpdf.php');
        require_once(APPPATH.'libraries/fpdi/src/autoload.php');


        

		$pdf = new FPDI();
		$pdf->AddPage();


		//Set the source PDF file
		$pagecount = $pdf->setSourceFile("ofpdfs/test.pdf");



		$tpl = $pdf->importPage(0);
			  //Use this page as template
		 $pdf->useTemplate($tpl);

        
		//Import the first page of the file
		$this->checkdataconvertable($stringg,$pdf);
		//$this->checkdataconvertable($stringg2,$pdf);

        $pdf->Output();
    }

    public function checkdataconvertable($stringg,&$pdf)
    {
    
       $page = $this->get_string_between($stringg,'_P_','_e_');
       if($page == "")
       {
         $page = -1;
       }

       $X = $this->get_string_between($stringg,'_X_','_e_');
       if($X == "")
       {
         $X = -1;
       }

       $Y = $this->get_string_between($stringg,'_Y_','_e_');
       if($Y == "")
       {
       	$Y = -1;
       }
       $V = $this->get_string_between($stringg,'_V_','_e_');
       if($V == "")
       {
       	$V = -1;
       }
       $F = $this->get_string_between($stringg,'_F_','_e_');
       if($F == "")
       {
       	$F = 12;
       }

       if($V != -1 && $X != -1 && $Y != -1)
       {

	       	if($page != -1)
	        {
	        	echo "<br>";
	        	echo $page;
	        	echo "<br>";
	        	echo $F;
	        	echo "<br>";
	        	echo $X;
	        	echo "<br>";
	        	echo $Y;
	        	echo "<br>";
	        	echo $V;
	        	echo "<br>";
	        	die;

			  $pdf->SetFont('Arial','B',$F);
			  $pdf->Cell($X, $Y, $V , 0, 0, 'L');
			}

       }
    }

    private function get_string_between($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
     }



}



