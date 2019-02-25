<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public $tblName 	= 	'admin_users';
	public $moduleName	= 	"Admin Users";
	public $controller	= 	"admins";
	public $pKey		= 	'id';
	public $per_page 	= 	'10';
	public $tStatus 	= 	"status";
	public $listView 	=	"admins";
	public $addEditView =	"addAdmin";
	
	
	 public function __construct(){

        // Call the Model constructor
	   parent::__construct();
	    $this->user_data = $this->SqlModel->authAdmin($this->session->userdata('admin_auth'),$this->session->userdata('admin_id'));
		if(empty($this->user_data))
		{
			redirect(base_url('manage/login'));
		}
		
    }
	
	
	public function index($sortby="full_name", $order="DESC", $status="-",$keywords="-", $pg_no="")
	{
		
		//PER_PAGE_START
		if($this->input->get('per_page')!="" && is_numeric($this->input->get('per_page')) && (int)$this->input->get('per_page')<=100)
		{
			$this->session->set_userdata('per_page', $this->input->get('per_page'));
		}
		if($this->session->userdata('per_page')!="")
		{
			$this->per_page = $this->session->userdata('per_page');	
		}
		
		//PER_PAGE_END
		$data['alert'] = $this->session->flashdata('alert');
		$where =  array(
			
		);
		$keywords = urldecode($keywords);
		if($status=="Enable" || $status=="Disable")
		{
			$where[$this->tStatus] = $status;	
		}
		
		$search 			= ($keywords!="-") ? array('cols'=>'user_name,full_name','value'=>urldecode($keywords)) : array();	
		$base_url 			= base_url().'manage/'.$this->controller.'/index/'.$sortby."/".$order."/".$status."/".$keywords;
		$total_rows 		= $data['total_rows'] =$this->SqlModel->countRecords($this->tblName,$where,$search);
		$per_page 			= $data['per_page'] = $this->per_page;
		$uri_segment 		= 8;
	
		$data['page_title'] = PROJECT_TITLE." | ".$this->moduleName;
		$data['userdata'] = $this->user_data;
		$data[$this->controller.'Active'] = 1;
		
		//Pagination START
			$pconfig['base_url'] = $base_url;
			$pconfig['total_rows'] = $data['total_rows'] =  $total_rows;
			$pconfig["uri_segment"] = $uri_segment ;
			$pconfig['per_page'] = $data['per_page'] = $this->per_page;
			$pconfig['num_links'] = 1;
			$pconfig['prev_link'] = '<i class="entypo-left-open-mini"></i>';
			$pconfig['next_link'] = '<i class="entypo-right-open-mini"></i>';
			$pconfig['cur_tag_open'] = '<li  class="active"><a href="javascript:void(0)">';
			$pconfig['cur_tag_close'] = '</a></li>';
			$pconfig['full_tag_open'] = '<ul class="pagination pull-right">';
   			$pconfig['full_tag_close'] = '</ul>';
			$pconfig['num_tag_open'] = "<li>";
			$pconfig['num_tag_close']= "</li>";
			$pconfig['next_tag_open'] = "<li>";
			$pconfig['next_tag_close']= "</li>";
			$pconfig['prev_tag_open'] = "<li>";
			$pconfig['prev_tag_close']= "</li>";
			$pconfig['last_tag_open'] = "<li>";
			$pconfig['last_tag_close']= "</li>";
			$pconfig['first_tag_open'] = "<li>";
			$pconfig['first_tag_close']= "</li>";
			$offset = ($this->uri->segment($uri_segment )) ? $this->uri->segment($uri_segment ) : 0;
			$this->pagination->initialize($pconfig);
			$data['records'] = $this->SqlModel->getRecords('*', $this->tblName, $sortby, $order,  $where, $search, $per_page, $offset,false);
			
			$data['paginate'] = $this->pagination->create_links();	
		//Pagination END
			$data['sortby'] 	= $sortby;
			$data['order'] 		= 	($order=="ASC") ? "DESC" : "ASC";
			$data['page_numb'] 	= 	$offset;
			$data['status']		=	$status;
			$data['keywords']	=	$keywords;
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/navigation');
		$this->load->view('admin/'.$this->listView);
		$this->load->view('admin/footer');
	}
	//For adding/edting colors
	public function control($alert="",$editID="",$editerror="")
	{
		$data[$this->controller.'Active'] = 1;
		$data['alert'] = $alert;
		$data['editerror'] = $editerror;
		$type = ($editID=="") ? "Add" : "Edit";
		$data['page_title'] = PROJECT_TITLE." | ".$type." Users";
		if($alert=="error")
		{
		$data['tbl_data'] = $this->session->userdata('admin_data');	
		}
		else if($alert=="edit")
		{
			if($editID=="")
			{
			redirect(base_url('manage/'.$this->controller.'/control'));	
			exit();	
			}
			$count = $this->SqlModel->countRecords($this->tblName, array('id'=>$editID));
			if($count==0)
			{
			redirect(base_url('manage/'.$this->controler));
			}
			$data['tbl_data'] = $this->SqlModel->getSingleRecord($this->tblName, array('id'=>$editID));
		}
	
		$data['userdata'] = $this->user_data;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/navigation');
		$this->load->view('admin/'.$this->addEditView);
		$this->load->view('admin/footer');
	}
	
	
	//For add record form post
	public function addRecord()
	{
		if($this->input->post('full_name')=="" || $this->input->post('email')=="" || $this->input->post('pwd')=="" || $this->input->post('user_name')=="")
		{
			$this->session->set_flashdata('alert','error');
			redirect(base_url().'manage/'.$this->controller);
			exit();
		}
		
		$data = array(
		'full_name' => htmlspecialchars($this->input->post('full_name')),
		'email' 	=> $this->input->post('email'),
		'user_name'	=> $this->input->post('user_name'),
		'pwd' => md5($this->input->post('pwd')),
		'user_role'	=> $this->input->post('user_role'),
		'status'	=> $this->input->post('status'),
		'date_created' => date('Y-m-d H:i:s'),
		'access_users' => ($this->input->post('access_users')=="Yes") ? "Yes" : "No",
		'access_agents' => ($this->input->post('access_agents')=="Yes") ? "Yes" : "No",
		'access_ptypes' => ($this->input->post('access_ptypes')=="Yes") ? "Yes" : "No",
		'access_projects' => ($this->input->post('access_projects')=="Yes") ? "Yes" : "No",
		'access_areas' => ($this->input->post('access_areas')=="Yes") ? "Yes" : "No",
		'access_properties' => ($this->input->post('access_properties')=="Yes") ? "Yes" : "No",
		'access_sliders' => ($this->input->post('access_sliders')=="Yes") ? "Yes" : "No",
		'access_clients' => ($this->input->post('access_clients')=="Yes") ? "Yes" : "No",
		'access_cstudy' => ($this->input->post('access_cstudy')=="Yes") ? "Yes" : "No",
		'access_portfolio' => ($this->input->post('access_portfolio')=="Yes") ? "Yes" : "No",
		'access_pages' => ($this->input->post('access_pages')=="Yes") ? "Yes" : "No",
		'access_menu' => ($this->input->post('access_menu')=="Yes") ? "Yes" : "No",
		'access_sections' => ($this->input->post('access_sections')=="Yes") ? "Yes" : "No",
		'access_blog' => ($this->input->post('access_blog')=="Yes") ? "Yes" : "No",
		'access_smedia' => ($this->input->post('access_smedia')=="Yes") ? "Yes" : "No",
		'access_contacts' => ($this->input->post('access_contacts')=="Yes") ? "Yes" : "No",
		'access_settings' => ($this->input->post('access_settings')=="Yes") ? "Yes" : "No",
		);
		
		$cquery = "SELECT count(*) as cnt from ".$this->tblName." WHERE user_name = '".$this->input->post('user_name')."' OR email = '".$this->input->post('email')."' ";
		$cData = $this->SqlModel->runQuery($cquery,1);
		$count = $cData['cnt'];
		
		if($count>0)
		{
			$this->session->set_flashdata('alert','adminerror');
			redirect(base_url().'manage/'.$this->controller);
			exit();	
		}
		
		$q = $this->SqlModel->insertRecord($this->tblName, $data);
		
		$this->session->unset_userdata('admin_data');
		if($q!="")
		{
			$this->session->set_flashdata('alert','success');
		}
		else{
			$this->session->set_flashdata('alert','error');
		}	
		redirect(base_url().'manage/'.$this->controller);
	}
	
	
	//For add record form post
	public function editRecord($editID="")
	{
		if($editID=="")
		{
		redirect(base_url().'manage/users','location');	
		exit();	
		}
		
		if($this->input->post('full_name')=="" || $this->input->post('email')=="" || $this->input->post('pwd')=="" || $this->input->post('user_name')=="")
		{
		redirect(base_url().'manage/users/index/error','location');	
		exit();
		}
		
		$data = array(
		'full_name' => $this->input->post('full_name'),
		'email' 	=> $this->input->post('email'),
		'user_name'	=> htmlspecialchars($this->input->post('user_name')),
		'user_role'	=> $this->input->post('user_role'),
		'status'	=> $this->input->post('status'),
		'last_modified' => date('Y-m-d H:i:s'),
		'access_users' => ($this->input->post('access_users')=="Yes") ? "Yes" : "No",
		'access_sliders' => ($this->input->post('access_sliders')=="Yes") ? "Yes" : "No",
		'access_agents' => ($this->input->post('access_agents')=="Yes") ? "Yes" : "No",
		'access_ptypes' => ($this->input->post('access_ptypes')=="Yes") ? "Yes" : "No",
		'access_projects' => ($this->input->post('access_projects')=="Yes") ? "Yes" : "No",
		'access_areas' => ($this->input->post('access_areas')=="Yes") ? "Yes" : "No",
		'access_properties' => ($this->input->post('access_properties')=="Yes") ? "Yes" : "No",
		'access_clients' => ($this->input->post('access_clients')=="Yes") ? "Yes" : "No",
		'access_cstudy' => ($this->input->post('access_cstudy')=="Yes") ? "Yes" : "No",
		'access_portfolio' => ($this->input->post('access_portfolio')=="Yes") ? "Yes" : "No",
		'access_pages' => ($this->input->post('access_pages')=="Yes") ? "Yes" : "No",
		'access_menu' => ($this->input->post('access_menu')=="Yes") ? "Yes" : "No",
		'access_sections' => ($this->input->post('access_sections')=="Yes") ? "Yes" : "No",
		'access_blog' => ($this->input->post('access_blog')=="Yes") ? "Yes" : "No",
		'access_smedia' => ($this->input->post('access_smedia')=="Yes") ? "Yes" : "No",
		'access_contacts' => ($this->input->post('access_contacts')=="Yes") ? "Yes" : "No",
		'access_settings' => ($this->input->post('access_settings')=="Yes") ? "Yes" : "No",
		);
		
		$current_pwd = $this->SqlModel->getSingleField('pwd',$this->tblName,array($this->pKey=>$editID));
		if($current_pwd!=$this->input->post('pwd'))
		{
		$data['pwd'] = 	md5($this->input->post('pwd'));
		}
		$cquery = "SELECT count(*) as cnt from ".$this->tblName." WHERE (user_name = '".$this->input->post('user_name')."' OR email = '".$this->input->post('email')."' ) AND id !='".$editID."'";
		$cData = $this->SqlModel->runQuery($cquery,1);
		$count = $cData['cnt'];
		if($count>0)
		{
			$this->session->set_flashdata('alert','adminerror');
			redirect(base_url().'manage/'.$this->controller);	
			exit();	
		}
		
		$q = $this->SqlModel->updateRecord($this->tblName, $data, array($this->pKey=>$editID));
		if($q==true)
		{
			$this->session->set_flashdata('alert','editsuccess');
			
		}
		else{
			$this->session->set_flashdata('alert','error');
		}
		redirect(base_url().'manage/'.$this->controller);		
	}
	
	public function delete($deleteID="")
	{
		$q = $this->SqlModel->deleteRecord($this->tblName , array($this->pKey=>$deleteID));
		if($q==true)
		{
		$this->session->set_flashdata('alert','deletesuccess');
		}
		else{
		$this->session->set_flashdata('alert','deleteerror');
		}
		redirect(base_url().'manage/'.$this->controller,'location');		
	}
	
	public function deleteall()
	{
		$ids = $this->input->post('records');
		if(!empty($ids))
		{
			foreach($ids as $id)
			{
			$this->SqlModel->deleteRecord($this->tblName,  array($this->pKey=>$id));	
			}
		}
		$this->session->set_flashdata('alert','deletesuccess');
		redirect(base_url().'manage/'.$this->controller,'location');		
		
	}
	
	public function changestatus($id="0",$status="Enable")
	{
		if($status=="Enable" || $status=="Disable")
		{
			$this->SqlModel->updateRecord($this->tblName, array($this->tStatus=>$status), array($this->pKey=>$id));
			echo json_encode(array('status'=>'true','id'=>$id,'currentStatus'=>$this->SqlModel->getSingleField($this->tStatus,$this->tblName,array($this->pKey=>$id))));	
		}
		else{
			echo json_encode(array('status'=>'false'));	
		}
		
	}
	
	
	
	
	
	
}

