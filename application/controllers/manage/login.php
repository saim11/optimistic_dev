<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	 public function __construct(){
	   parent::__construct();
	   $this->SqlModel->setTitle();
	   
    }
	
	public function Index()
	{
		$this->user_data = $this->SqlModel->authAdmin($this->session->userdata('admin_auth'),$this->session->userdata('admin_id'));
		
		if(!empty($this->user_data))
		{
			redirect(base_url('manage'));
		}
		
		else{
		$this->login();
		}
	}
	
	public function login($msg="")
	{
		$data['loginSection'] = 1;
		$data['msg'] = $msg;
		$data['page_title'] = PROJECT_TITLE." | Login";
		$data['logo'] = $this->config->base_url().$this->SqlModel->getSingleField('logo','site_settings',array('id'=>1));
		$this->load->view('admin/header',$data);
		$this->load->view('admin/loginScreen');
		$this->load->view('admin/footer');
	}
	
	public function forgot($msg="")
	{
		$data['loginSection'] = 1;
		$data['msg'] = $msg;
		$data['page_title'] = PROJECT_TITLE." | Forgot Your Password";
		$data['logo'] = $this->config->base_url().$this->SqlModel->getSingleField('logo','site_settings',array('id'=>1));

		$this->load->view('admin/header',$data);
		$this->load->view('admin/forgotScreen');
		$this->load->view('admin/footer');
	}
	
	public function forgotpwd(){
		
		if($this->input->post('email')=="")
		{
		$this->forgot($msg="Dear user, Email address is required to reset the password.");
		exit();	
		}
		
		$forgot = $this->SqlModel->getSingleRecord('admin_users',array('email'=>htmlspecialchars($this->input->post('email'))));
		if(!empty($forgot))
		{
			if($forgot['email']==htmlspecialchars($this->input->post('email')))
			{
				$pwd = substr(uniqid(),1,6);
				$this->SqlModel->updateRecord('admin_users', array('pwd'=>md5($pwd)), array('id'=>$forgot['id']));
				$body = "Hello ".$forgot['full_name'].":<br/><br/>As requested, we're sending you a new password. Use the information below to sign in to your administration account:<br/><br/>Username: ".$forgot['user_name']."<br/>New Password: ".$pwd."<br/><br/>Admin Team,</br>".PROJECT_TITLE;
				
				$ws = $this->SqlModel->getSingleRecord('site_settings',array('id'=>1));
				 
				$config = array(
				'mailtype'=>'html',
				'useragent'=>trim($ws['website_title']),
				);
				$this->load->library('email',$config);
				$this->email->from(trim($ws['sender_email']),trim($ws['sender_name']) );
				$this->email->to(trim($forgot['email']));
				$this->email->subject("Your new ".$ws['website_title']." CMS password.");
				$this->email->message($body);
				if(@$this->email->send())
				{
					$this->login($msg="Dear user, your new password has been sent to your email address, please check your email and login with your new password.");
				}
				else{
					$this->login($msg="Unable to reset your password, please try again.");
				}
			}
			else
			{
				$this->forgot($msg="Dear user, Your email address not found, please try again.");
			}		
		}
		else{
				$this->forgot($msg="Dear user, Your email address not found, please try again.");
		}
		
	}
	

	public function auth()
	{
		$un = ($this->input->post('username') ? htmlspecialchars($this->input->post('username')) : '');
		$pwd = ($this->input->post('password') ? htmlspecialchars($this->input->post('password')) : '');
		if($un=="" || $pwd=="")
		{
			$this->login($mgs="Username/Password can't be empty");
			return;
		}
		
		
		$data = $this->SqlModel->getSingleRecord('admin_users', array('user_name'=>$un,'status'=>'Enable'));
		if(empty($data))
		{
		$this->login("Invalid Username/Password, please try again.");
		return;
		}
		if(md5($pwd) == $data['pwd'])
		{
		
		$ip = $_SERVER['REMOTE_ADDR'];  
		$this->session->set_userdata('admin_auth','allow');
		$this->session->set_userdata('admin_role',$data['user_role']);
		$this->session->set_userdata('admin_user_name',$data['user_name']);	
		$this->session->set_userdata('admin_full_name',$data['full_name']);	
		$this->session->set_userdata('admin_id',$data['id']);
		$this->session->set_userdata('last_login',$data['last_login']);	
		$this->session->set_userdata('last_ip',$data['ip']);			
		$this->SqlModel->updateRecord('admin_users', array('last_login'=>date('Y-m-d H:i:s'),'ip'=>$ip,'user_agent'=>$this->session->userdata('user_agent')), array('id'=>$data['id']));
		redirect(base_url().'manage','location');
		
		}
		else{
		$this->login("Invalid Username/Password, please try again.");
		}
		
		
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */