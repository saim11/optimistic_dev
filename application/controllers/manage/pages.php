
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller {

	public $tblName = 'pages';
	public $MainCat = "book_category";
	public $pKey = 'page_id';
	public $moduleName = "Web Pages";
	public $controller = "pages";
	public $per_page = '10';
	public $tStatus = "page_status";
	public $colPrefix	= 	"page_";
	public $trainer_books=[];
	public $trainerTbl = "trainer_books";
	public $updatedId = "book_id";
	


	 public function __construct(){
		

        // Call the Model constructor
	   parent::__construct();
	    $this->user_data = $this->SqlModel->authAdmin($this->session->userdata('admin_auth'),$this->session->userdata('admin_id'));
		if(empty($this->user_data))
		{
			redirect(base_url('manage/login'));
		}

		$this->load->helper('url');

    }


	public function index($parent_id=0,$sortby="page_id", $order="ASC", $status="-",$keywords="-", $pg_no="")
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
        $where=array();
		$keywords = urldecode($keywords);
		if($status=="Published" || $status=="Un-Published")
		{
			$where[$this->tStatus] = $status;
		}

		$search 			= ($keywords!="-") ? array('cols'=>'page_name','value'=>urldecode($keywords)) : array();
		$base_url 			= base_url().'manage/'.$this->controller.'/index/'.$parent_id.'/'.$sortby."/".$order."/".$status."/".$keywords;
		$total_rows 		= $data['total_rows'] =$this->SqlModel->countRecords($this->tblName,$where,$search);
		$per_page 			= $data['per_page'] = $this->per_page;
		$uri_segment 		= 9;

		$data['page_title'] = PROJECT_TITLE." | ".$this->moduleName;
		$data['userdata'] = $this->user_data;
		$data['pagesActive'] = 1;

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
			$data['listing'] = $this->SqlModel->getRecords('*', $this->tblName, $sortby, $order,  $where, $search, $per_page, $offset,false);
			$data['parent_id'] = $parent_id;
			if($parent_id!="0")
			{
				$data['parent_name'] = $this->SqlModel->getSingleField('page_name','pages',array('page_id'=>$parent_id));
			}
			$data['paginate'] = $this->pagination->create_links();
		//Pagination END
			$data['sortby'] 	= 	$sortby;
			$data['order'] 		= 	($order=="ASC") ? "DESC" : "ASC";
			$data['page_numb'] 	= 	$offset;
			$data['status']		=	$status;
			$data['keywords']	=	$keywords;

		$this->load->view('admin/header',$data);
		$this->load->view('admin/navigation');
		$this->load->view('admin/webPages');
		$this->load->view('admin/footer');
	}

	//For adding/edting colors
	public function control($parent_id="",$editID="", $updateId="")
	{

		if($editID==50){
			$data['trainer_books'] = $this->SqlModel->getSingleRecord("trainer_books",array('book_id'=>$updateId));
		}
		
		if($parent_id!="0")
		{
			$data['parent_name'] = $this->SqlModel->getSingleField('page_name','pages',array('page_id'=>$parent_id));
		}
		$data['fetch_rec'] = $this->SqlModel->getRecords('*', "book_category");
		$data['fetch_sub_cat'] = $this->SqlModel->getRecords('*', "books_sub_categories");
		$data['fetch_grand_child'] = $this->SqlModel->getRecords('*', "course_list");
		$data['fetch_training_content'] = $this->SqlModel->getRecords('*', "training_content");
		$data['parent_id'] = $parent_id;
		$alert = $this->session->flashdata('alert');
		$data['datePicker'] = 1;
		$data['pagesActive'] = 1;
		$data['alert'] = $alert;
		$type = ($editID=="") ? "Add" : "Edit";
		$data['page_title'] = PROJECT_TITLE." | ".$type." ".$this->moduleName;
		//CKEditor
		$this->load->library('ckeditor');
		$this->load->library('ckfinder');
		$this->ckeditor->basePath = base_url().'assets/ckeditor/';
		$this->ckeditor->config['removePlugins'] ='save, preview, newpage, forms';
		$this->ckeditor->config['height'] = '340px';

		//Add Ckfinder to Ckeditor
		$this->ckfinder->SetupCKEditor($this->ckeditor,'../../../../assets/ckfinder/');

		//CKEdtior
		if($editID=="")
		{
		$data['tbl_data'] = $this->session->userdata($this->controller.'_data');
		}
		else
		{
			$data['tbl_data'] = $this->SqlModel->getSingleRecord($this->tblName, array($this->pKey=>$editID));
			if(empty($data['tbl_data']))
			{
				redirect(base_url().'manage/'.$this->controller,'location');
			}
		}
		$data['userdata'] = $this->user_data;
		$this->load->view('admin/header',$data);
		$this->load->view('admin/navigation');
		$this->load->view('admin/addPage',$data);
		$this->load->view('admin/footer');
	}


	


	//For add record form post
	public function addRecord($parent_id="0")
	{
		if($this->input->post('page_name')=="")
		{
		$this->session->set_flashdata('alert','error');
		redirect(base_url().'manage/'.$this->controller.'/index/'.$parent_id,'location');
		exit();
		}

		$data = array(
		'page_name' 	=> htmlspecialchars($this->input->post('page_name')),
		'page_title' 	=> htmlspecialchars($this->input->post('page_title')),
		'page_uri'	=> $this->input->post('page_uri'),
		'page_text' 	=> $_REQUEST['page_text'],
		'page_feature_text' 	=> $_REQUEST['page_feature_text'],
		'page_status' 	=> $this->input->post('page_status'),
		'page_added' 	=> date('Y-m-d H:i:s'),
		'page_updated' 	=> date('Y-m-d H:i:s'),
		);


		if($this->SqlModel->countRecords('pages',array('page_uri'=>$data['page_uri']))>0)
		{
			$data['page_uri'] = $this->input->post('page_uri').'-1';
		}

		if($this->SqlModel->countRecords('pages',array('page_uri'=>$data['page_uri']))>0)
		{
			$data['page_uri'] = uniqid().'-'.$this->input->post('page_uri');
		}

		if(isset($_FILES['page_background'])&&$_FILES['page_background']['tmp_name']!="")
		{
			$upload_path='./uploads/'.$this->controller.'/';
			if (!file_exists($upload_path))
			{
				$create = mkdir($upload_path, 0777, TRUE);
				if (!$create ){return;}
			}
			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '102400';
			$config['max_width']  = '4000';
			$config['max_height']  = '4000';
			$config['remove_spaces'] = true;
			$this->load->library('upload', $config);
			$this->load->library('image_lib');
			if ($this->upload->do_upload('page_background'))
			{
				$filename_ephoto = $this->upload->data('page_background');
				$data['page_background'] = 'uploads/'.$this->controller.'/'.$filename_ephoto['file_name'];
			}
		}


// -----------------Uploading course manual------------------------------
		if(isset($_FILES['upload_manual'])&&$_FILES['upload_manual']['tmp_name']!="")
		{
			$upload_path='./ofdocs/brochure/';
			if (!file_exists($upload_path))
			{
				$create = mkdir($upload_path, 0777, TRUE);
				if (!$create ){return;}
			}
			$config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'pdf';
			$config['max_size']	= '102400';
			$config['max_width']  = '4000';
			$config['max_height']  = '4000';
			$config['remove_spaces'] = true;
            $this->load->library('upload', $config);
			$this->load->library('pdf');
           if ($this->upload->do_upload('upload_manual'))
			{
				$filename_ephoto = $this->upload->data('upload_manual',"saim11111");
				$data['upload_manual'] = 'uploads/'.$this->controller.'/'.$filename_ephoto['file_name'];
				
			}
		}
//----------------- End of Uploading course manual---------------------------

		$q = $this->SqlModel->insertRecord($this->tblName, $data);
		$this->session->unset_userdata($this->controller.'_data');
		if($q!="")
		{
			$this->session->set_flashdata('alert','success');
			redirect(base_url().'manage/'.$this->controller.'/index/'.$parent_id,'location');
		}
		else{
			$this->session->set_flashdata('alert','error');
			redirect(base_url().'manage/'.$this->controller.'/index/'.$parent_id,'location');
		}
	}



	//For add record form post
	public function editRecord($parent_id="0",$editID="", $updateId="")
	{
		
		// Edit Trainer Books
		if($editID == 50 && $updateId !="" ){

		// $this->form_validation->set_rules('bookTitle', 'Enter Book Title', 'required');
		// $this->load->helper(array('form', 'url'));
		// $this->load->library('form_validation');
		// $this->form_validation->run();
		// exit();



			$filechecker =  $_FILES['userfile']['size'];			
			if(isset($_FILES['userfile'])&&$_FILES['userfile']['tmp_name']!="")
		{
			$filename = $_FILES['userfile'];
			$path="";
			$QA = $this->input->post('radio');
			if($QA == 1){
				$upload_path='./trainingBooks/Questions/';
				$path = 'trainingBooks/Questions';
			}
			else if($QA == 2){
				$upload_path='./trainingBooks/Answers/';
				$path = 'trainingBooks/Answers';
			}
			if (!file_exists($upload_path))
			{
				$create = mkdir($upload_path, 0777, TRUE);
				if (!$create ){return;}
			}
			// inserting Record

			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = 'jpg|png|jpeg|txt|doc|docx|pdf';
			$config['max_size']	= '1024000';
			$config['max_width']  = '4000';
			$config['max_height']  = '4000';
			$config['remove_spaces'] = true;
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->load->library('pdf');
           if ($this->upload->do_upload('userfile'))
			{
				$file_info = $this->upload->data();
				$file = $file_info['file_path']; 
				$trainerData = array(
					'book_category_id' => $this->input->post('catLevelOneSelector'),
					'sub_cat_id' => $this->input->post('catLevelTwoSelector'),
					'content_id' => $this->input->post('radio'),
					'book_title' =>$this->input->post('bookTitle'),
					'book_file_path' => $_FILES['userfile']
				);
				$filename_ephoto = $this->upload->data('userfile');
				$trainerData['book_file_path'] = $path.'/'.$filename_ephoto['file_name'];	
			}
			else{
				echo "File Uploading failed";
			}
		}
		else{
			if($filechecker == 0){
				$trainer_data= $this->SqlModel->getSingleRecord($this->trainerTbl,array($this->updatedId=>$updateId));
				$trainerData = array(
						'book_category_id' => $this->input->post('catLevelOneSelector'),
						'sub_cat_id' => $this->input->post('catLevelTwoSelector'),
						'content_id' => $this->input->post('radio'),
						'book_title' =>$this->input->post('bookTitle'),
						'book_file_path' => $trainer_data['book_file_path']
					);
			}
		}



		$q = $this->SqlModel->updateRecord($this->trainerTbl, $trainerData, array($this->updatedId=>$updateId));
		if($q==true)
		{
			$this->session->set_flashdata('alert','editsuccess');
			redirect(base_url().'manage/'.$this->controller.'/control/'.$parent_id.'/49','location');
		}
		else{
			$this->session->set_flashdata('alert','error');
			redirect(base_url().'manage/'.$this->controller.'/index/'.$parent_id,'location');
		}

	}

// *****Edit Trainer Books End******



		if($this->input->post('page_name')=="" || $editID=="")
		{
			$this->session->set_flashdata('alert','error');
			redirect(base_url().'manage/'.$this->controller.'/index/'.$parent_id,'location');
			exit();
		}
		$val="";
		if(!isset($_REQUEST['page_text'])){
			$val = ' ';
		}
		else{
			$val = $_REQUEST['page_text'];
		}
		$val1="";
		if(!isset($_REQUEST['page_feature_text'])){
			$val1 = ' ';
		}
		else{
			$val1 = $_REQUEST['page_feature_text'];
		}

		$data = array(
			'page_name' 	=> htmlspecialchars($this->input->post('page_name')),
			'page_title' 	=> htmlspecialchars($this->input->post('page_title')),
			'page_uri'	=> $this->input->post('page_uri'),
			'page_text' 	=> $val,
			'page_feature_text' 	=> $val1,
			'page_status' 	=> $this->input->post('page_status'),
			'page_updated' 	=> date('Y-m-d H:i:s')
		);


		if($this->SqlModel->countRecords('pages',array('page_uri'=>$data['page_uri'],'page_id !='=>$editID))>0)
		{
			$data['page_uri'] = $this->input->post('page_uri').'-1';
		}

		if($this->SqlModel->countRecords('pages',array('page_uri'=>$data['page_uri'],'page_id !='=>$editID))>0)
		{
			$data['page_uri'] = uniqid().'-'.$this->input->post('page_uri');
		}

		if(isset($_FILES['page_background'])&&$_FILES['page_background']['tmp_name']!="")
		{
			$upload_path='./uploads/'.$this->controller.'/';
			if (!file_exists($upload_path))
			{
				$create = mkdir($upload_path, 0777, TRUE);
				if (!$create ){return;}
			}
			$config['upload_path'] = $upload_path;
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']	= '102400';
			$config['max_width']  = '4000';
			$config['max_height']  = '4000';
			$config['remove_spaces'] = true;
			$this->load->library('upload', $config);
			$this->load->library('image_lib');
			if ($this->upload->do_upload('page_background'))
			{
				$filename_ephoto = $this->upload->data('page_background');
				$data['page_background'] = 'uploads/'.$this->controller.'/'.$filename_ephoto['file_name'];
			}
		}

		// -----------------Uploading course manual------------------------------
		if(isset($_FILES['upload_manual'])&&$_FILES['upload_manual']['tmp_name']!="")
		{
			$filename = $_FILES['upload_manual'];
			//$page_id_arr = explode ('-', $filename,2);
			$page_idd = $_FILES['upload_manual'];
			$upload_path='./ofdocs/brochure/';
			if (!file_exists($upload_path))
			{
				$create = mkdir($upload_path, 0777, TRUE);
				if (!$create ){return;}
			}

			$config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'pdf';
			$config['max_size']	= '102400';
			$config['max_width']  = '4000';
			$config['max_height']  = '4000';
			$config['remove_spaces'] = true;
			$config['overwrite'] = TRUE;
			$pg_number = array($this->pKey=>$editID);
			// print_r($x['page_id']);
				if ($pg_number['page_id'] == 38)
				{ 
				 $config['file_name'] = "CHC30113.pdf";
				}
				else if($pg_number['page_id'] == 25) 
				{ 
					$config['file_name'] = "CPP20212.pdf";
				}
				else if($pg_number['page_id'] == 26) 
				{ 
					$config['file_name'] = "CPP30411.pdf";
				}
				else if($pg_number['page_id'] == 23) 
				{ 
					$config['file_name'] = "CHC30113.pdf";
				}
				else if($pg_number['page_id'] == 24) 
				{ 
					$config['file_name'] = "CHC50113.pdf";
				}
				else if($pg_number['page_id'] == 27) 
				{ 
					$config['file_name'] = "HLTAID001.pdf";
				}
				else if($pg_number['page_id'] == 28) 
				{ 
					$config['file_name'] = "HLTAID002.pdf";
				}
				else if($pg_number['page_id'] == 29) 
				{ 
					$config['file_name'] = "HLTAID003.pdf";
				}
				else if($pg_number['page_id'] == 30) 
				{ 
					$config['file_name'] = "HLTAID004.pdf";
				}
			
			
            $this->load->library('upload', $config);
			$this->load->library('pdf');
           if ($this->upload->do_upload('upload_manual'))
			{
				unset($data['upload_manual']);
				
			}
		}
		
//----------------- End of Uploading course manual---------------------------
// ---------


if($editID == 49){
	
	$catLevelOneSelector = $this->input->post('catLevelOneSelector');
	$catLevelTwoSelector = $this->input->post('catLevelTwoSelector');
	$radio = $this->input->post('radio');
	$bookTitle = $this->input->post('bookTitle');
	// echo "1".$catLevelOneSelector."2".$catLevelTwoSelector."3".$radio."4".$bookTitle;
	// exit();
	if($catLevelOneSelector == "select" && $catLevelTwoSelector == "select"  && $radio == "" && $bookTitle == "")
	{
		$this->session->set_flashdata('alert','errorField');
		redirect(base_url().'manage/'.$this->controller.'/control/'.$parent_id.'/'.$editID,'location');
	}
	else{

	if(isset($_FILES['userfile'])&&$_FILES['userfile']['tmp_name']!="")
	{
				$filename = $_FILES['userfile'];
				$path="";
				$QA = $this->input->post('radio');
				if($QA == 1){
					$upload_path='./trainingBooks/Questions/';
					$path = 'trainingBooks/Questions';
				}
				else if($QA == 2){
					$upload_path='./trainingBooks/Answers/';
					$path = 'trainingBooks/Answers';
				}
				if (!file_exists($upload_path))
				{
					$create = mkdir($upload_path, 0777, TRUE);
					if (!$create ){return;}
				}
				// inserting Record

				$config['upload_path'] = $upload_path;
				$config['allowed_types'] = 'jpg|png|jpeg|txt|doc|docx|pdf';
				$config['max_size']	= '1024000';
				$config['max_width']  = '4000';
				$config['max_height']  = '4000';
				$config['remove_spaces'] = true;
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);
				$this->load->library('pdf');
			if ($this->upload->do_upload('userfile'))
				{
					$file_info = $this->upload->data();
					$file = $file_info['file_path']; 
					$trainerData = array(
						'book_category_id' => $this->input->post('catLevelOneSelector'),
						'sub_cat_id' => $this->input->post('catLevelTwoSelector'),
						'content_id' => $this->input->post('radio'),
						'book_title' =>$this->input->post('bookTitle')
					);
					$filename_ephoto = $this->upload->data('userfile');
					$trainerData['book_file_path'] = $path.'/'.$filename_ephoto['file_name'];	
				}
				else{
					echo "File Uploading failed";
				}
				$q = $this->SqlModel->insertRecord('trainer_books', $trainerData);
	 }
	}

}

		$q = $this->SqlModel->updateRecord($this->tblName, $data, array($this->pKey=>$editID));
		if($q==true)
		{
			$this->session->set_flashdata('alert','editsuccess');
			$editID == 49 ? redirect(base_url().'manage/'.$this->controller.'/control/'.$parent_id.'/'.$editID,'location'):redirect(base_url().'manage/'.$this->controller.'/index/'.$parent_id,'location'); 
			redirect(base_url().'manage/'.$this->controller.'/index/'.$parent_id,'location');
		}
		else{
			$this->session->set_flashdata('alert','error');
			redirect(base_url().'manage/'.$this->controller.'/index/'.$parent_id,'location');
		}
}


	public function delete($deleteID="")
	{
		$q = $this->SqlModel->deleteRecord($this->tblName , array($this->pKey=>$deleteID));
	
		if($q==true)
		{
			$this->session->set_flashdata('alert','deletesuccess');
			redirect(base_url().'manage/'.$this->controller);
		}
		else{
			$this->session->set_flashdata('alert','deleteerror');
			redirect(base_url().'manage/'.$this->controller);
		}


	}

	//For delete selected colors
	public function deleteall()
	{
		$ids = $this->input->post('records');
		$parent_id = $this->SqlModel->getSingleField('page_parent_id','pages',array('page_id'=>$ids[0]));
		if(!empty($ids))
		{
			foreach($ids as $id)
			{

			$this->SqlModel->deleteRecord($this->tblName,  array($this->pKey=>$id));
			$this->SqlModel->deleteRecord($this->tblName , array('page_parent_id'=>$id));
			}
		}
		$this->session->set_flashdata('alert','deletesuccess');
		redirect(base_url().'manage/'.$this->controller.'/index/'.$parent_id,'location');

	}


	public function removeimage($id="")
	{
		$q = $this->SqlModel->updateRecord($this->tblName , array('page_image'=>'','page_thumb_image'=>''), array($this->pKey=>$id));
	}

	public function pageorder()
	{

		$pData = $this->input->post('table-page');
		if(!empty($pData))
		{
			$o = (int)1;
			$data = array();
			foreach($pData as $p)
			{
				array_push($data,array($this->pKey=>$p,$this->colPrefix.'order'=>$o));
				$o++;
			}
			if(!empty($data))
			{
				$this->SqlModel->batchUpdate($this->tblName,$data,$this->pKey);
			}
		}

	}

	public function changestatus($id="0",$status="Published")
	{
		if($status=="Published" || $status=="Un-Published")
		{
			$this->SqlModel->updateRecord($this->tblName, array($this->tStatus=>$status), array($this->pKey=>$id));
			echo json_encode(array('status'=>'true','id'=>$id,'currentStatus'=>$this->SqlModel->getSingleField($this->tStatus,$this->tblName,array($this->pKey=>$id))));
		}
		else{
			echo json_encode(array('status'=>'false'));
		}

	}

	public function duplicate($id="")
	{
		$data = $this->SqlModel->getSingleRecord($this->tblName,array($this->pKey=>$id));
		if(empty($data))
		{
			$this->session->set_flashdata('alert','error');
		}
		else{
			unset($data[$this->pKey]);
			$data[$this->colPrefix.'added'] = date('Y-m-d H:i:s');
			$data[$this->colPrefix.'updated'] = date('Y-m-d H:i:s');
			$data[$this->colPrefix.'name'] = $data[$this->colPrefix.'name']. " Duplicate";
			$data[$this->colPrefix.'uri'] = $data[$this->colPrefix.'uri']. "-".uniqid();
			$q = $this->SqlModel->insertRecord($this->tblName , $data);
			if($q>0)
			{
				redirect(base_url('manage/'.$this->controller.'/control/'.$data['page_parent_id'].'/'.$q));
			}
			else{
				$this->session->set_flashdata('alert','error');
			}
		}
		redirect(base_url('manage/'.$this->controller));
	}

}






