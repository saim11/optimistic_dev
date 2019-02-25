<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foot extends CI_Controller {

	public $tblName = 'foot';
	public $pKey = 'foot_id';
	public $moduleName = "Footer Navigation";
	public $controller = "foot";
	 public function __construct(){

        // Call the Model constructor
	   parent::__construct();
	    $this->user_data = $this->SqlModel->authAdmin($this->session->userdata('admin_auth'),$this->session->userdata('admin_id'));
		if(empty($this->user_data))
		{
			redirect(base_url('manage/login'));
		}
		$this->load->model('FootModel');
		
    }
	
	//For listing the brands
	public function index($foot="one")
	{
		if($foot!="one"&&$foot!="two")
		{
			redirect(base_url('manage'));
		}
		$data['page_title'] = PROJECT_TITLE." | ".$this->moduleName;
		$data['alert'] = $this->session->flashdata('alert');
		$data['userdata'] = $this->user_data;
		$data['menuActive'] = 1;
		$data['menuFootActive'] = $foot;
		$data['foot_type'] = $foot;
		$data['menuhtml'] = $this->FootModel->getAdminFootMenu($foot);
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/navigation');
		$this->load->view('admin/footManager');
		$this->load->view('admin/footer');
	}
	
	public function save($type="")
	{
		if($type=="")
		{
			redirect(base_url('manage/foot'));	
			exit;
		}
		$type = "_".strtoupper($type);
		if(!empty($_POST['save_data'])) {
			
		$d_array = $_POST['output_data'];
		$result = json_decode($d_array);
		$iOrder = 1;
		foreach($result as $var => $value) {
			
			
		$update_id = $value->id;
		$this->db->query("UPDATE pages SET menu_parent_id".$type." = 0, menu_order".$type." = ".$iOrder.", menu_active".$type."=1 WHERE page_id =  '$update_id'");
		 
		// var_dump($value);
		$iOrderOne = 1;
		if(!empty($value->children))
		foreach ($value->children as $vchild)
		{
			 $update_id = $vchild->id;
			 $menu_parent_id = $value->id;
		 $this->db->query("UPDATE pages SET menu_parent_id".$type." ='$menu_parent_id', menu_order".$type." = ".$iOrderOne.", menu_active".$type."=1 WHERE page_id =  '$update_id'");
			 
			$iOrderTwo = 1;
		   if(!empty($vchild->children))
		  foreach ($vchild->children as $vchild1)
			{
			$update_id = $vchild1->id;
			 $menu_parent_id = $vchild->id;
		 $this->db->query("UPDATE pages SET menu_parent_id".$type." ='$menu_parent_id', menu_order".$type." = ".$iOrderTwo.", menu_active".$type."=1 WHERE page_id =  '$update_id'");
		
			 $iOrderThree = 1; 
			 if(!empty($vchild1->children))
			foreach ($vchild1->children as $vchild2)
			{
			$update_id = $vchild2->id;
			 $menu_parent_id = $vchild1->id;
		 $this->db->query("UPDATE pages SET menu_parent_id".$type." ='$menu_parent_id', menu_order".$type." = ".$iOrderThree.", menu_active".$type."=1 WHERE page_id =  '$update_id'");
		
			 $iOrderFour = 1; 
			  if(!empty($vchild2->children))
			foreach ($vchild2->children as $vchild3)
			{
			$update_id = $vchild3->id;
			 $menu_parent_id = $vchild2->id;
		 $this->db->query("UPDATE pages SET menu_parent_id".$type." ='$menu_parent_id', menu_order".$type." = ".$iOrderFour.", menu_active".$type."=1 WHERE page_id =  '$update_id'");
			$iOrderFour++;
			}
			$iOrderThree++;
			}
			$iOrderTwo++;
			}
			$iOrderOne++;
		}
		$iOrder ++;
		
		}
		}
		
		if(!empty($_POST['save_data'])) {
		$d_array = $_POST['output_data2'];
		$result = json_decode($d_array);
		$iOrder = 1;
		foreach($result as $var => $value) {
			
			
		$update_id = $value->id;
		 $this->db->query("UPDATE pages SET menu_parent_id".$type." = 0, menu_order".$type." = ".$iOrder.", menu_active".$type."=0 WHERE page_id =  '$update_id'");
		 
		// var_dump($value);
		$iOrderOne = 1;
		if(!empty($value->children))
		foreach ($value->children as $vchild)
		{
			 $update_id = $vchild->id;
			 $menu_parent_id = $value->id;
		 $this->db->query("UPDATE pages SET menu_parent_id".$type." ='$menu_parent_id', menu_order".$type." = ".$iOrderOne.", menu_active".$type."=0 WHERE page_id =  '$update_id'");
			 
			$iOrderTwo = 1;
		   if(!empty($vchild->children))
		  foreach ($vchild->children as $vchild1)
			{
			$update_id = $vchild1->id;
			 $menu_parent_id = $vchild->id;
		 $this->db->query("UPDATE pages SET menu_parent_id".$type." ='$menu_parent_id', menu_order".$type." = ".$iOrderTwo.", menu_active".$type."=0 WHERE page_id =  '$update_id'");
		
			 $iOrderThree = 1; 
			 if(!empty($vchild1->children))
			foreach ($vchild1->children as $vchild2)
			{
			$update_id = $vchild2->id;
			 $menu_parent_id = $vchild1->id;
		 $this->db->query("UPDATE pages SET menu_parent_id".$type." ='$menu_parent_id', menu_order".$type." = ".$iOrderThree.", menu_active".$type."=0 WHERE page_id =  '$update_id'");
		
			 $iOrderFour = 1; 
			  if(!empty($vchild2->children))
			foreach ($vchild2->children as $vchild3)
			{
			$update_id = $vchild3->id;
			 $menu_parent_id = $vchild2->id;
		 $this->db->query("UPDATE pages SET menu_parent_id".$type." ='$menu_parent_id', menu_order".$type." = ".$iOrderFour.", menu_active".$type."=0 WHERE page_id =  '$update_id'");
			$iOrderFour++;
			}
			$iOrderThree++;
			}
			$iOrderTwo++;
			}
			$iOrderOne++;
		}
		$iOrder ++;
		
		}
		}	
		
		$this->session->set_flashdata('alert','success');
		redirect(base_url('manage/foot/index/'.strtolower(str_replace("_","",$type))));	
	}
	
	
	
	
	


	
	
	

	


	
}

