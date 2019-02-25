<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public $moduleName = "Home";
	public $controller = "home";
	public $user_data = array();
	 public function __construct(){

        // Call the Model constructor
	   parent::__construct();
	 
		$this->user_data = $this->SqlModel->authAdmin($this->session->userdata('admin_auth'),$this->session->userdata('admin_id'));
		
		if(empty($this->user_data))
		{
			redirect(base_url('manage/login'));
		}
		
		
    }
	
	public function index()
	{
		$data['dashBoard'] = 1;
		$data['page_title'] = PROJECT_TITLE." | Dashboard";
		
		$data['totalAdmins'] = $this->SqlModel->countRecords('admin_users');
		$data['totalPages'] = $this->SqlModel->countRecords('pages');
		

		$data['userdata'] = $this->user_data;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/navigation');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'manage','location');
	}
	

	
	
	
}

