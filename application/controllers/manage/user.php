<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {


    public $ws;
    public $tblName 		= 	"user";
    public $tbl_coordinator = 	"co_ordinator";
    public $pKey			=	"";
    public $colPrefix       =   "user_";
    public $moduleName 		=	"User";
    public $controller 		=	"";
    public $per_page 		=	"10";
    public $tStatus 		=	"";
    public $listView 		=	"listUsers";
    public $addEditView 	=	"editUser";
    public $tblNameProfile = "account_upload_files";
    /*public $model           =   array(
                                       array('name' => 'col'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => ''
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                      ,array('name' => 'col'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => ''
                                            ,'type' => 'image'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                      ,array('name' => 'col'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => ''
                                            ,'type' => 'rte'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                      ,array('name' => 'col'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => ''
                                            ,'type' => 'textarea'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                      ,array('name' => 'col'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => ''
                                            ,'type' => 'radio'
                                            ,'required' => true
                                            , 'list'=>array(
                                                            array('value' => 'col'
                                                                  ,'show' => 'ss')
                                                            ,array('value' => 'col'
                                                                  ,'show' => 'ss')
                                                            )
                                            )
                                      ,array('name' => 'col'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => ''
                                            ,'type' => 'checkbox'
                                            ,'required' => true
                                            , 'list'=>array(
                                                            array('value' => 'col'
                                                                  ,'show' => 'ss')
                                                            ,array('value' => 'col'
                                                                  ,'show' => 'ss')
                                                            )
                                            )
                                      ,array('name' => 'col'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => ''
                                            ,'type' => 'file'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                      ,array('name' => 'col'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => ''
                                            ,'type' => 'select'
                                            ,'required' => true
                                            , 'list'=>array(
                                                            array('value' => 'col'
                                                                  ,'show' => 'ss')
                                                            ,array('value' => 'col'
                                                                  ,'show' => 'ss')
                                                            )
                                            )
                                            ,array('name' => 'application_job_id'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Job Detail Link'
                                            ,'type' => 'detail'
                                            ,'required' => true
                                            , 'list'=>array()
                                            , 'detail_link'=>'manage/job/control/edit/'
                                            ,'icon' => 'entypo-doc-text-inv'
                                            )
                                             ,array('type' => 'custom_query'
                                              ,'name' => 'User'
                                              ,'view_name' => 'User'
                                              ,'map_field' => 'application_user_id'
                                              ,'query' => "SELECT user_fname as name,user_email as email from user WHERE user_id='@value@'"
                                              ,'view_update' => false
                                              ,'view_list' => true
                                             )
                                     );
                                     $type_Array=$this->SqlModel->runQuery("select type_type as 'value',type_type as 'show' from type");

    */

    public $model =   array();                                 

    public function __construct(){

        // Call the Model constructor
        parent::__construct();
        $this->ws = $this->SqlModel->getSingleRecord('site_settings',array('id'=>1));

        $this->user_data = $this->SqlModel->authAdmin($this->session->userdata('admin_auth'),$this->session->userdata('admin_id'));
        if(empty($this->user_data))
        {
            redirect(base_url('manage/login'));
        }
        $this->controller = $this->router->fetch_class();
        $this->pKey			=	$this->colPrefix."id";
        $this->tStatus 		=	$this->colPrefix."status";

        // getting coordinator names.
        $coordinator =  $this->SqlModel->getRecords('co_name,co_suburb,co_id', $this->tbl_coordinator);
        $data_cordinator = array();
        $suburb_cordinator = array();
        $sub_courses = array();
        foreach($coordinator as $field){
            array_push($data_cordinator,array(
                'value' => $field['co_name'],
                'show'=> $field['co_name']
            ));
        }

        $suburbs =  $this->SqlModel->getRecords('id,suburb', 'suburbs');
        foreach($suburbs as $field){
            array_push($suburb_cordinator,array(
                'value' => $field['id'],
                'show'=> $field['suburb']
            ));
        }
        $sub_courses =  $this->SqlModel->getRecords('id,course_title', 'sub_courses');
        $sub_courses_val = array();
        foreach($sub_courses as $field){
            array_push($sub_courses_val,array(
                'value' => $field['id'],
                'show'=> $field['course_title']
            ));
        }
        // print_r($sub_courses_val);

        



        //$this->drop_table();
        //$this->create_table();
            $this->model  =   array(
                                            array('name' => 'user_name'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Name'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                            ,array('name' => 'user_email'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Email'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                            ,array('name' => 'user_contact'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Contact'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                            ,array('name' => 'user_password'
                                            ,'view_update' => true
                                            ,'view_list' => false
                                            ,'view_name' => 'Password'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )                                            
                                            ,array('name' => 'user_activation_code'
                                            ,'view_update' => true
                                            ,'view_list' => false
                                            ,'view_name' => 'activation code'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                            ,array('name' => 'count'
                                               ,'view_update' => true
                                               ,'view_list' => false
                                               ,'view_name' => 'answer'
                                               ,'type' => 'action'
                                               ,'required' => true
                                               ,'icon' => 'entypo-docs'
                                               , 'query'=>"SELECT COUNT(`answer_id`) AS 'count' FROM `answer` WHERE `answer_user`='@value@'"
                                               , 'detail_link'=>'manage/answer?answer_user=@value@'
                                               )
                                            ,array('name' => 'Individual_Support'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Individual Support'
                                            ,'type' => 'radio'
                                            ,'required' => true
                                            ,'list'=>array(
                                                array('value' => 'Yes'
                                                      ,'show' => 'Yes')
                                                ,array('value' => 'No'
                                                      ,'show' => 'No')                                                 
                                            )
                                            )
                                            ,array('name' => 'Security_Operations'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Security Operations'
                                            ,'type' => 'radio'
                                            ,'required' => true
                                            ,'list'=>array(
                                                array('value' => 'Yes'
                                                      ,'show' => 'Yes') 
                                                ,array('value' => 'No'
                                                      ,'show' => 'No')                                              
                                                                                                   
                                            )
                                            )
                                            ,array('name' => 'Early_Childhood_and_Education'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Early Childhood and Education'
                                            ,'type' => 'radio'
                                            ,'required' => true
                                            ,'list'=>array(
                                                array('value' => 'Yes'
                                                      ,'show' => 'Yes') 
                                                ,array('value' => 'No'
                                                      ,'show' => 'No')                                              
                                                                                                   
                                            )
                                            )
                                            ,array('name' => 'Emergency_First_Aid'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Emergency First Aid'
                                            ,'type' => 'radio'
                                            ,'required' => true
                                            ,'list'=>array(
                                                array('value' => 'Yes'
                                                      ,'show' => 'Yes') 
                                                ,array('value' => 'No'
                                                      ,'show' => 'No')                                              
                                                                                                   
                                            )
                                            )
                                            ,array('name' => 'user_type'
                                            ,'view_update' => true
                                            ,'view_list' => false
                                            ,'view_name' => 'User Type'
                                            ,'type' => 'select'
                                            ,'required' => true
                                            , 'list'=>array(
                                                            array('value' => 'student'
                                                                  ,'show' => 'Student')
                                                            ,array('value' => 'trainer'
                                                                  ,'show' => 'Trainer')                
                                                            )
                                            )
                                            ,array('name' => 'sub_courses_id'
                                            ,'view_update' => true
                                            ,'view_list' => false
                                            ,'view_name' => 'Course'
                                            ,'type' => 'select'
                                            ,'required' => true
                                            ,'list'=>$sub_courses_val
                                            )
                                            
                                            ,array('name' => 'st_text'
                                            ,'view_update' => true
                                            ,'view_list' => false
                                            ,'view_name' => 'Entered Coordinater'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            ,'list'=>array()
                                            )
                                            ,array('name' => 'co_code'
                                            ,'view_update' => true
                                            ,'view_list' => false
                                            ,'view_name' => 'Coordinator'
                                            ,'type' => 'select'
                                            ,'required' => true
                                            , 'list'=>$data_cordinator
                                            )
                                            ,array('name' => 'suburb'
                                            ,'view_update' => true
                                            ,'view_list' => false
                                            ,'view_name' => 'Suburb'
                                            ,'type' => 'select'
                                            ,'required' => true
                                            , 'list'=>$suburb_cordinator
                                            )
                                            
                                            ,array('name' => 'user_status'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Status'
                                            ,'type' => 'select'
                                            ,'required' => true
                                            , 'list'=>array(
                                                            array('value' => 'Active'
                                                                  ,'show' => 'Active')
                                                            ,array('value' => 'Un-Active'
                                                                  ,'show' => 'In-Active')
                                                            ,array('value' => 'Pending'
                                                                  ,'show' => 'Pending')      
                                                            
                                                            )
                                            )
                                            
                                        
		
                                  );  

    }
    private function drop_table()
    {
        $query="DROP TABLE ".$this->tblName."";
        //$this->SqlModel->runQuery($query);
    }
    private function create_table()
    {

        $query="CREATE TABLE IF NOT EXISTS ".$this->tblName." (
                          ".$this->pKey." int(11) AUTO_INCREMENT,";

        foreach ($this->model as $cols) {
            if($cols["type"] != "rte" && $cols["type"] != "textarea")
            {
                $query.="".$cols["name"]." varchar(255) NULL,";
            }
            else
            {
                $query.="".$cols["name"]." text NULL,";
            }
        }

        $query.="".$this->colPrefix."added DATETIME ,
                          ".$this->colPrefix."updated DATETIME ,
                          PRIMARY KEY  (".$this->pKey.")
                          )";

        //$this->SqlModel->runQuery($query);
    }


    public function index($sortby="", $order="DESC", $status="-",$keywords="-", $q="" ,$pg_no="")
    {
        

        if($sortby == "")
        {
            $sortby=$this->pKey;
        }
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
        $keywords = urldecode($keywords);
        $where=array();
        $search_col=$this->pKey;
        if(isset($_GET["search_col"]))
        {
            $search_col=$_GET["search_col"];
        }
        else
        {
            $where =  $_GET;
            unset($where['per_page']);
        }
        if($status=="Published" || $status=="Un-Published")
        {
            $where[$this->tStatus] = $status;
        }


        $search 			= ($keywords!="-") ? array('cols'=>$search_col,'value'=>urldecode($keywords)) : array();
        $base_url 			= base_url().'manage/'.$this->controller.'/index/'.$sortby."/".$order."/".$status."/".$keywords;
        $total_rows 		= $data['total_rows'] =$this->SqlModel->countRecords($this->tblName,$where,$search);
        $per_page 			= $data['per_page'] = $this->per_page;
        $uri_segment 		= 8;

        $data['page_title'] = $this->moduleName;
        $data['userdata'] = $this->user_data;
        $data[$this->controller.'Active'] = 1;

        //Pagination START
        $pconfig['base_url'] = $base_url. '/' . http_build_query($_GET);
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
        if (count($_GET) > 0) $pconfig['suffix'] = '&' . http_build_query($_GET);
        $this->load->library('pagination');
        $offset = ($this->uri->segment($uri_segment )) ? $this->uri->segment($uri_segment ) : 0;

        $this->pagination->initialize($pconfig);

        $data['listing'] = $this->SqlModel->getRecords('*', $this->tblName, $sortby, $order,  $where, $search, $per_page, $offset,false);

        $data['paginate'] = $this->pagination->create_links();
        //Pagination END
        $data['sortby'] 	= 	$sortby;
        $data['order'] 		= 	($order=="ASC") ? "DESC" : "ASC";
        $data['page_numb'] 	= 	$offset;
        $data['status']		=	$status;
        $data['keywords']	=	$keywords;
        $data['search_col']	=	$search_col;


        $this->load->view('admin/header',$data);
        $this->load->view('admin/navigation');
        $this->load->view('admin/'.$this->listView);
        $this->load->view('admin/footer');
    }

    //For adding/edting colors
    public function control($type="",$editID="")
    {
        $data['type'] = (($type=="") ? "Add" : ucfirst($type));
        $data['alert'] = $this->session->flashdata('alert');
        $data['datePicker'] = 1;
        $data[$this->controller.'ActiveNew'] = 1;
        $data['tbl_data'] = $this->SqlModel->getSingleRecord($this->tblName, array($this->pKey=>$editID));
        $data['coordinator_data'] = $this->SqlModel->getSingleRecord("referred_students", array('st_id'=>$editID));

        $data['page_title'] = (($type=="") ? "Add" : ucfirst($type))." ".rtrim($this->moduleName,'s');
        //CKEditor
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        $this->ckeditor->basePath = base_url().'assets/ckeditor/';
        $this->ckeditor->config['removePlugins'] ='save, preview, newpage, forms';
        $this->ckeditor->config['height'] = '340px';

        //Add Ckfinder to Ckeditor
        $this->ckfinder->SetupCKEditor($this->ckeditor,'../../../../assets/ckfinder/');

        //CKEdtior
        if($type=="edit"&&$editID!="")
        {
            $data['tbl_data'] = $this->SqlModel->getSingleRecord($this->tblName, array($this->pKey=>$editID));
            $data['coordinator_data'] = $this->SqlModel->getSingleRecord("referred_students", array('st_id'=>$editID));
            if(empty($data['tbl_data']))
            {
                redirect(base_url('manage/'.$this->controller));
            }
        }




        $data['userdata'] = $this->user_data;
        $this->load->view('admin/header',$data);
        $this->load->view('admin/navigation');
        $this->load->view('admin/'.$this->addEditView);
        $this->load->view('admin/footer');
    }


    // For user documents.
    public function docs($userId="",$type="")
    {
        $data['students_docs'] = $this->SqlModel->getRecords("*", 'account_upload_files' ,'Id','ASC',array('user_id'=>$userId));
        if(isset($_POST['uploadBtn'])){

            // -----------------Uploading student documents------------------------------
            if(isset($_FILES['passport'])&&$_FILES['passport']['tmp_name']!="")
            {
                $this->upload_file('passport',$_FILES['passport']['name'],$userId);        
            }
            if(isset($_FILES['driverLicense'])&&$_FILES['driverLicense']['tmp_name']!="")
            {
                $this->upload_file('driverLicense',$_FILES['driverLicense']['name'],$userId); 
            }
            if(isset($_FILES['medicare'])&&$_FILES['medicare']['tmp_name']!="")
            {
                $this->upload_file('medicare',$_FILES['medicare']['name'],$userId); 
            }
            if(isset($_FILES['b_cert'])&&$_FILES['b_cert']['tmp_name']!="")
            {
                $this->upload_file('b_cert',$_FILES['b_cert']['name'],$userId); 
            }
            if(isset($_FILES['citizenCert'])&&$_FILES['citizenCert']['tmp_name']!="")
            {
                $this->upload_file('citizenCert',$_FILES['citizenCert']['name'],$userId); 
            }
            if(isset($_FILES['regCert'])&&$_FILES['regCert']['tmp_name']!="")
            {
                $this->upload_file('regCert',$_FILES['regCert']['name'],$userId); 
            }
            if(isset($_FILES['IMMI'])&&$_FILES['IMMI']['tmp_name']!="")
            {
                $this->upload_file('IMMI',$_FILES['IMMI']['name'],$userId); 
            }
            if(isset($_FILES['VISA'])&&$_FILES['VISA']['tmp_name']!="")
            {
                $this->upload_file('VISA',$_FILES['VISA']['name'],$userId); 
            }
            if($_FILES['passport']['tmp_name']!="" || $_FILES['driverLicense']['tmp_name']!="" || $_FILES['medicare']['tmp_name']!="" || $_FILES['b_cert']['tmp_name']!="" || $_FILES['citizenCert']['tmp_name']!="" || $_FILES['regCert']['tmp_name']!="" || $_FILES['IMMI']['tmp_name']!="" || $_FILES['VISA']['tmp_name']!="")
            {
                $this->session->set_userdata('success_from_php', 'Documents Have Been Sent Successfully');
                // redirect(base_url('manage/'.$this->controller.'?'.$_SERVER['QUERY_STRING']));
                redirect(base_url().'manage/'.$this->controller.'/docs/'.$userId);
            }
            else{
                $this->session->set_userdata('error_from_php', 'Error! While Sending Documents.');
                redirect(base_url('manage/'.$this->controller.'?'.$_SERVER['QUERY_STRING']));
            }
        }
        
        
        
        $data['userdata'] = $this->user_data;
        $data['user_id']= $userId;
        $this->load->view('admin/header',$data);
        $this->load->view('admin/navigation');
        $this->load->view('admin/userDocs');
    }
    
    // Upload file function
    public function upload_file($tagName="",$file_name="",$userId=""){
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
                    'user_id'=>$userId
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
                $q = $this->general_model->updateDynamic($this->tblNameProfile,$update,array('user_id' =>$userId, 'doc_type'=> $tagName));
                }        
            }
            else{
                var_dump( $this->upload->display_errors());
                echo " failed !";
            }
    }



    //For adding record from post
    public function addRecord()
    {
        $data = array();
        $data[$this->colPrefix.'added']=date('Y-m-d H:i:s');
        $data[$this->colPrefix.'updated']=date('Y-m-d H:i:s');
        foreach ($this->model as $cols) {
            if($cols['view_update'])
            {

                if($cols['type'] != 'image' && $cols['type'] != 'file' && $cols['type'] != 'checkbox' && $cols['type'] != 'custom_query' && $cols['type'] != 'action' && $cols['type'] != 'detail' )
                {
                    $data[$cols['name']]=$this->input->post($cols['name']);
                }
                else if($cols['type'] == 'image')
                {
                    if(isset($_FILES[$cols['name']])&&$_FILES[$cols['name']]['tmp_name']!="")
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
                        if ($this->upload->do_upload($cols['name']))
                        {
                            $filename_ephoto = $this->upload->data($cols['name']);
                            $data[$cols['name']] = 'uploads/'.$this->controller.'/'.$filename_ephoto['file_name'];
                        }
                    }

                }
                else if($cols['type'] == 'file')
                {
                    if(isset($_FILES[$cols['name']])&&$_FILES[$cols['name']]['tmp_name']!="")
                    {
                        $upload_path='./uploads/'.$this->controller.'/';
                        if (!file_exists($upload_path))
                        {
                            $create = mkdir($upload_path, 0777, TRUE);
                            if (!$create ){return;}
                        }
                        $config['upload_path'] = $upload_path;
                        $config['max_size']	= '102400';
                        $config['max_width']  = '4000';
                        $config['max_height']  = '4000';
                        $config['allowed_types'] = 'jpg|png|jpeg|txt|doc|docx|pdf';
                        $config['remove_spaces'] = true;
                        $this->load->library('upload', $config);
                        $this->load->library('image_lib');
                        if ($this->upload->do_upload($cols['name']))
                        {
                            $filename_ephoto = $this->upload->data($cols['name']);
                            $data[$cols['name']] = 'uploads/'.$this->controller.'/'.$filename_ephoto['file_name'];
                        }
                    }
                }
                else if($cols['type'] == 'checkbox')
                {
                    if(isset($_POST[$cols['name']]))
                    {
                        $post_value=implode(",",$_POST[$cols['name']]);
                        $data[$cols['name']]=$post_value;
                    }
                }
            }
        }


        $q = $this->SqlModel->insertRecord($this->tblName, $data);
        $this->session->unset_userdata($this->controller.'_data');
        if($q!="")
        {
            $this->session->set_flashdata('alert','success');
        }
        else{
            $this->session->set_flashdata('alert','error');
        }
        redirect(base_url('manage/'.$this->controller.'?'.$_SERVER['QUERY_STRING']));
    }

    //For add record form post
    public function editRecord($parent_id="0",$editID="")
    {
        $co_id = $this->SqlModel->getSingleField('co_id', 'referred_students',array('st_id'=>$editID));
        $student_id = $editID;
        $course_id = $this->SqlModel->getSingleField('course_id', 'sub_courses',array('id'=>$this->input->post('sub_courses_id')));
        $sub_course_id = $this->input->post('sub_courses_id');
        $Assesment = 'No';
        $Workplace = "No";
        $Observation = "No";
        $unit_status = "Incomplete";
        $co_code = $this->SqlModel->getSingleField('co_id', 'co_ordinator',array('co_name'=>$this->input->post('co_code')));
        $getAllUnits = $this->SqlModel->getRecords('*','course_units','','',array('course_id'=>$course_id, 'sub_courses_id'=>$sub_course_id));
        $students = $this->SqlModel->getRecords('*','students','','',array('course_id'=>$course_id, 'sub_courses_id'=>$sub_course_id,'student_id'=>$student_id));
        if(count($students) == 0){
            foreach($getAllUnits as $cols){
                $insertIntoStudent = array(
                    'student_id'            => $student_id,
                    'course_id'             => $course_id,
                    'sub_courses_id'        => $sub_course_id,
                    'unit_id'               => $cols['id'],
                    'Assesment'             => 'No',
                    'Workplace'             => 'No',
                    'Observation'           => 'No',
                    'coordinator_id'        => $co_code,
                    'unit_status'           => $unit_status
                );
                $cond = $this->general_model->insertDynamic('students',$insertIntoStudent);   
            }
            var_dump("Hello 0");
        }
        else if(count($students) > 0){
            $insertIntoStudent = array(
                'coordinator_id'  => $co_code,
            );
            $this->SqlModel->updateRecord("students", $insertIntoStudent, array('course_id'=>$course_id, 'sub_courses_id'=>$sub_course_id,'student_id'=>$student_id));
            var_dump("Hello > 0");

        }  
        $data = array();
        $cor_data = array();
        $data[$this->colPrefix.'added']=date('Y-m-d H:i:s');
        $data[$this->colPrefix.'updated']=date('Y-m-d H:i:s');
        $old_password = $this->SqlModel->getSingleRecord($this->tblName, array($this->pKey=>$editID));
        $coordinator_id = $this->SqlModel->getSingleField('co_id','co_ordinator',array('co_name'=>$this->input->post('co_code')));
        // 
        foreach ($this->model as $cols) {
            if($cols['view_update'])
            {
                
                if($cols['type'] != 'image' && $cols['type'] != 'file' && $cols['type'] != 'checkbox' && $cols['type'] != 'custom_query' && $cols['type'] != 'action' && $cols['type'] != 'detail' )
                {
                    if(isset($_POST[$cols['name']]))
                    {
                        
                        if($cols['name'] == "user_password" && $old_password['user_password'] != $this->input->post($cols['name']))
                        {
                            $data[$cols['name']]= md5($this->input->post($cols['name']));
                        }
                        else if($cols['name'] == "co_code" || $cols['name'] == "suburb"){
                            $q = $this->SqlModel->getSingleField('co_id','referred_students',array('st_id'=>$editID));

                            if($q == NULL){
                            // Student with co ordinator code.
                            if($cols['name'] == "co_code"){
                                $co_code = $this->input->post($cols['name']);
                            }
                            else{
                                $suburb = $this->input->post($cols['name']);
                                }
                                
                                if(isset($suburb) & isset($co_code) ){
                                    $student_data = array(
                                        'st_id'         		=> $editID,
                                        'co_code'               => $co_code,
                                        'suburb'                => $suburb,
                                        'co_id'                 => $coordinator_id
                                    );

                                    $cond = $this->general_model->insertDynamic('referred_students',$student_data);
                                }
                             }
                            else{

                            $cor_data['co_id'] = $coordinator_id;
                            $cor_data[$cols['name']] = $this->input->post($cols['name']);
                            $q = $this->SqlModel->updateRecord("referred_students", $cor_data, array("st_id"=>$editID));                            
                            }

                        }
                        else{
                            if($cols['name'] != 'sub_courses_id'){
                                $data[$cols['name']]=$this->input->post($cols['name']);
                            }
                        }
                    }
                }
                else if($cols['type'] == 'image')
                {

                    if(isset($_FILES[$cols['name']])&&$_FILES[$cols['name']]['tmp_name']!="")
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
                        if ($this->upload->do_upload($cols['name']))
                        {
                            $filename_ephoto = $this->upload->data($cols['name']);
                            $data[$cols['name']] = 'uploads/'.$this->controller.'/'.$filename_ephoto['file_name'];
                        }
                    }

                }
                else if($cols['type'] == 'file')
                {
                    if(isset($_FILES[$cols['name']])&&$_FILES[$cols['name']]['tmp_name']!="")
                    {
                        $upload_path='./uploads/'.$this->controller.'/';
                        if (!file_exists($upload_path))
                        {
                            $create = mkdir($upload_path, 0777, TRUE);
                            if (!$create ){return;}
                        }
                        $config['upload_path'] = $upload_path;
                        $config['max_size']	= '102400';
                        $config['max_width']  = '4000';
                        $config['max_height']  = '4000';
                        $config['allowed_types'] = 'jpg|png|jpeg|txt|doc|docx|pdf';
                        $config['remove_spaces'] = true;
                        $this->load->library('upload', $config);
                        $this->load->library('image_lib');
                        if ($this->upload->do_upload($cols['name']))
                        {
                            $filename_ephoto = $this->upload->data($cols['name']);
                            $data[$cols['name']] = 'uploads/'.$this->controller.'/'.$filename_ephoto['file_name'];
                        }

                    }
                }
                else if($cols['type'] == 'checkbox')
                {

                    if(isset($_POST[$cols['name']]))
                    {
                        $post_value=implode(",",$_POST[$cols['name']]);
                        $data[$cols['name']]=$post_value;
                    }
                }
            }
        }

        $q = $this->SqlModel->updateRecord($this->tblName, $data, array($this->pKey=>$editID));
        if($q==true)
        {
            $this->session->set_flashdata('alert','editsuccess');
        }
        else{
            $this->session->set_flashdata('alert','error');
        }
        redirect(base_url('manage/'.$this->controller.'?'.$_SERVER['QUERY_STRING']));
    }
    

   public function viewcart($id)
   {
	   echo $id;
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
        redirect(base_url('manage/'.$this->controller));


    }

    //For delete selected colors
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
        redirect(base_url('manage/'.$this->controller));

    }


    public function removeimage($id="")
    {
        $q = $this->SqlModel->updateRecord($this->tblName , array('page_image'=>''), array($this->pKey=>$id));
    }

    public function sortrecords()
    {
        $pData = $this->input->post('table-'.$this->controller);
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
                redirect(base_url('manage/'.$this->controller.'/control/edit/'.$data['page_parent_id'].'/'.$q));
            }
            else{
                $this->session->set_flashdata('alert','error');
            }
        }
        redirect(base_url('manage/'.$this->controller));
    }


}

