<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Uc extends CI_Controller {
	public $ws;
	
	public function __construct(){
			// Call the Model constructor
			parent::__construct();
			$this->ws = $this->SqlModel->getSingleRecord('site_settings',array('id'=>1));
			if(isset($this->ws['under_construction'])&&$this->ws['under_construction']=="No")
			{
				redirect(base_url());
			}
	}
		
		
		
	public function index()
	{
		$this->load->view('uc');
		
	}

	

}



