<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class courses extends CI_Controller {


    public $ws;
    public $tblName 		= 	"students";
    public $tbl_coordinator = 	"co_ordinator";
    public $pKey			=	"";
    public $colPrefix       =   "user_";
    public $moduleName 		=	"Courses";
    public $moduleNameForStudent ="Student Detail";
    public $controller 		=	"courses";
    public $per_page 		=	"10";
    public $tStatus 		=	"";
    public $listCourses 	=   "listCourses";
    public $listStudentDetail 	=	"listStudentDetail";
    public $model =   array();                                 
    public function __construct(){

        // Call the Model constructor
        parent::__construct();
        $this->ws = $this->SqlModel->getSingleRecord('site_settings',array('id'=>1));
        $this->session->set_flashdata('alert','');

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
        foreach($coordinator as $field){
            array_push($data_cordinator,array(
                'value' => $field['co_name'],
                'show'=> $field['co_name']
            ));
        }
        $suburb_cordinator = array();
        foreach($coordinator as $field){
            array_push($suburb_cordinator,array(
                'value' => $field['co_suburb'],
                'show'=> $field['co_suburb']
            ));
        }



        //$this->drop_table();
        //$this->create_table();
            $this->model  =   array(
                                            array('name' => 'user_name'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Course'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                            ,array('name' => 'user_email'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Subject'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                            ,array('name' => 'user_contact'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Students'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
                                            ,array('name' => 'user_password'
                                            ,'view_update' => true
                                            ,'view_list' => false
                                            ,'view_name' => 'Coordinators'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )                                            
                                            ,array('name' => 'user_activation_code'
                                            ,'view_update' => true
                                            ,'view_list' => false
                                            ,'view_name' => 'Status'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
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

        $data['listing'] = $this->SqlModel->getJoinsCourse(
            'sub_courses.id,sub_courses.course_title,courses.course_id,courses.course_name'
            ,'sub_courses'
            ,'courses'
            ,'sub_courses.course_id=courses.course_id'
            ,'inner'    
            );

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
        $this->load->view('admin/'.$this->listCourses);
        $this->load->view('admin/footer');
    }

    public function viewCourses(){
        $data['userdata'] = $this->user_data;
        $data['alert'] =$this->session->set_flashdata('alert','');
        $data['listing'] = $this->SqlModel->getJoinsCourse(
            'sub_courses.id,sub_courses.course_title,courses.course_id,courses.course_name'
            ,'sub_courses'
            ,'courses'
            ,'sub_courses.course_id=courses.course_id'
            ,'inner'    
            );
            // print_r($data['listing']);

        $this->load->view('admin/header',$data);
        $this->load->view('admin/navigation');
        $this->load->view('admin/viewCourses');
        $this->load->view('admin/footer');
        
    }
    public function viewUnits($sub_course_id=""){
        $data['userdata'] = $this->user_data;
        $data['alert'] =$this->session->set_flashdata('alert','');
        $data['listing'] = $this->SqlModel->getRecords('*', 'course_units',"","",array('sub_courses_id'=>$sub_course_id));
        $data['sub_course'] = $this->SqlModel->getSingleField('course_title','sub_courses',array('id'=>$sub_course_id));
        $data['sub_course_id'] = $sub_course_id;
            // print_r($data['listing']);

        $this->load->view('admin/header',$data);
        $this->load->view('admin/navigation');
        $this->load->view('admin/viewUnits');
        $this->load->view('admin/footer');
        
    }

    //For adding/edting colors
    public function control($type="",$editID="")
    {
        // $data['type'] = (($type=="") ? "Add" : ucfirst($type));
        // $data['alert'] = $this->session->flashdata('alert');
        // $data['datePicker'] = 1;
        // $data[$this->controller.'ActiveNew'] = 1;
        // $data['tbl_data'] = $this->SqlModel->getSingleRecord($this->tblName, array($this->pKey=>$editID));
        // $data['coordinator_data'] = $this->SqlModel->getSingleRecord("referred_students", array('st_id'=>$editID));

        // $data['page_title'] = (($type=="") ? "Add" : ucfirst($type))." ".rtrim($this->moduleName,'s');
        // //CKEditor
        // $this->load->library('ckeditor');
        // $this->load->library('ckfinder');
        // $this->ckeditor->basePath = base_url().'assets/ckeditor/';
        // $this->ckeditor->config['removePlugins'] ='save, preview, newpage, forms';
        // $this->ckeditor->config['height'] = '340px';

        // //Add Ckfinder to Ckeditor
        // $this->ckfinder->SetupCKEditor($this->ckeditor,'../../../../assets/ckfinder/');

        //CKEdtior
        if($type=="students" && $editID!="")
        {

            $data['tbl_data'] = $this->SqlModel->getJoinsWhereGeneral(
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
                ,array(
                        'students.sub_courses_id'=>$editID
                        )    
                );
            
            $data['coordinator_data'] = $this->SqlModel->getSingleRecord("referred_students", array('st_id'=>$editID));
            if(empty($data['tbl_data']))
            {
                redirect(base_url('manage/'.$this->controller));
            }
        }
        // echo "<pre>";
        // $ids = array_column($data['tbl_data'], 'student_id');
        // $ids = array_unique($ids);
        // $data['tbl_data'] = array_filter($data['tbl_data'], function ($key, $value) use ($ids) {
        //     return in_array($value, array_keys($ids));
        // }, ARRAY_FILTER_USE_BOTH);
        // print_r($data['tbl_data']);
        // echo "</pre>";
        $data['userdata'] = $this->user_data;
        $this->load->view('admin/header',$data);
        $this->load->view('admin/navigation');
        $this->load->view('admin/'.$this->listStudentDetail);
        $this->load->view('admin/footer');
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
    public function editRecord($student_id="",$course_id="",$unitId="")
    {
        $student = array();
        $student['unit_ids'] =  $this->SqlModel->getRecords('unit_id', 'students','','',array(
            'student_id'=>$student_id
            ,'course_id'=>$course_id
            ,'sub_courses_id'=>$unitId                                                                                        
        ));
        $count=0;
        foreach($student['unit_ids'] as $cols){
            if($this->input->post($cols['unit_id']) == $this->SqlModel->getSingleField('unit_name','course_units',array('id'=>$cols['unit_id']))){
                $Assesment = $this->input->post('Assesment'.($count=$count+1));
                $Workplace=$this->input->post('Workplace'.($count=$count+1));
                $Observation=$this->input->post('Observation'.($count=$count+1));
                if(($Assesment == "Yes" && $Workplace=="No" && $Observation=="No") || ($Assesment == "No" && $Workplace=="Yes" && $Observation=="No") || ($Assesment == "No" && $Workplace=="No" && $Observation=="Yes")){
                    $student['data'] = array(
                        'Assesment'=>$Assesment
                        ,'Workplace'=>$Workplace
                        ,'Observation'=>$Observation,
                        'unit_status'=>"Incomplete"
                        ,'completion_date'=> NULL
                    );
                }
                else if(($Assesment == "Yes" && $Workplace=="Yes" && $Observation=="No") || ($Assesment == "Yes" && $Observation=="Yes" && $Workplace=="No") || ($Workplace == "Yes" && $Observation=="Yes" && $Assesment == "No")){
                    $student['data'] = array(
                        'Assesment'=>$Assesment
                        ,'Workplace'=>$Workplace
                        ,'Observation'=>$Observation
                        ,'unit_status'=>"Pending"
                        ,'completion_date'=> NULL
                    );
                }
                else if(($Assesment == "Yes" && $Workplace=="Yes" && $Observation=="Yes") || ($Assesment == "yes" && $Workplace=="yes" && $Observation=="yes")){
                    $student['data'] = array(
                        'Assesment'=>$Assesment
                        ,'Workplace'=>$Workplace
                        ,'Observation'=>$Observation
                        ,'unit_status'=>"Completed"
                        ,'completion_date'=> date("Y-m-d")
                    );
                }
                else if(($Assesment == "No" && $Workplace=="No" && $Observation=="No")){
                    $student['data'] = array(
                        'Assesment'=>$Assesment
                        ,'Workplace'=>$Workplace
                        ,'Observation'=>$Observation
                        ,'unit_status'=>"Incomplete"
                        ,'completion_date'=> NULL
                    );
                }

                // print_r($Assesment);
                // print_r($Workplace);
                // print_r($student['data']);
                // print_r($student['data']);
                // print_r($student['data']);
                // print_r($cols['unit_id']);

                $q = $this->SqlModel->updateRecord("students", $student['data'],array(
                                                                                'student_id'=>$student_id
                                                                                ,'course_id'=>$course_id
                                                                                ,'sub_courses_id'=>$unitId
                                                                                ,'unit_id'=>$cols['unit_id']                                                                                        
                                                                                ));
                                                                              
            }else{
                echo "Owwwww!";
            }

        }
        if($q){
            $myMessage = "<div class='row alertrow'><div class='col-md-12'><a class='close alertBox' data-dismiss='alert'>x</a><div class='alert alert-success'><strong>Success!</strong> Course Units Updated Successfully.</div></div></div>";
            redirect(base_url().'manage/'.$this->controller."/control/students/".$unitId."?m_=".$myMessage);
        }else{
            var_dump($q);
        }  

        // $this->input->post('co_code');
        // $data = array();
        // $cor_data = array();
        // $data[$this->colPrefix.'added']=date('Y-m-d H:i:s');
        // $data[$this->colPrefix.'updated']=date('Y-m-d H:i:s');
        // $old_password = $this->SqlModel->getSingleRecord($this->tblName, array($this->pKey=>$editID));
        // $coordinator_id = $this->SqlModel->getSingleField('co_id','co_ordinator',array('co_name'=>$this->input->post('co_code')));
        // // 
        // foreach ($this->model as $cols) {
        //     if($cols['view_update'])
        //     {
                
        //         if($cols['type'] != 'image' && $cols['type'] != 'file' && $cols['type'] != 'checkbox' && $cols['type'] != 'custom_query' && $cols['type'] != 'action' && $cols['type'] != 'detail' )
        //         {
        //             if(isset($_POST[$cols['name']]))
        //             {
                        
        //                 if($cols['name'] == "user_password" && $old_password['user_password'] != $this->input->post($cols['name']))
        //                 {
        //                     $data[$cols['name']]= md5($this->input->post($cols['name']));
        //                 }
        //                 else if($cols['name'] == "co_code" || $cols['name'] == "suburb"){
        //                     $q = $this->SqlModel->getSingleField('co_id','referred_students',array('st_id'=>$editID));

        //                     if($q == NULL){
        //                     // Student with co ordinator code.
        //                     if($cols['name'] == "co_code"){
        //                         $co_code = $this->input->post($cols['name']);
        //                     }
        //                     else{
        //                         $suburb = $this->input->post($cols['name']);
        //                         }
                                
        //                         if(isset($suburb) & isset($co_code) ){
        //                             $student_data = array(
        //                                 'st_id'         		=> $editID,
        //                                 'co_code'               => $co_code,
        //                                 'suburb'                => $suburb,
        //                                 'co_id'                 => $coordinator_id
        //                             );

        //                             $cond = $this->general_model->insertDynamic('referred_students',$student_data);
        //                         }
        //                      }
        //                     else{

        //                     $cor_data['co_id'] = $coordinator_id;
        //                     $cor_data[$cols['name']] = $this->input->post($cols['name']);
        //                     $q = $this->SqlModel->updateRecord("referred_students", $cor_data, array("st_id"=>$editID));                            
        //                     }

        //                 }
        //                 else{
        //                     $data[$cols['name']]=$this->input->post($cols['name']);
        //                 }
        //             }
        //         }
        //         else if($cols['type'] == 'image')
        //         {

        //             if(isset($_FILES[$cols['name']])&&$_FILES[$cols['name']]['tmp_name']!="")
        //             {
        //                 $upload_path='./uploads/'.$this->controller.'/';
        //                 if (!file_exists($upload_path))
        //                 {
        //                     $create = mkdir($upload_path, 0777, TRUE);
        //                     if (!$create ){return;}
        //                 }
        //                 $config['upload_path'] = $upload_path;
        //                 $config['allowed_types'] = 'jpg|png|jpeg';
        //                 $config['max_size']	= '102400';
        //                 $config['max_width']  = '4000';
        //                 $config['max_height']  = '4000';
        //                 $config['remove_spaces'] = true;
        //                 $this->load->library('upload', $config);
        //                 $this->load->library('image_lib');
        //                 if ($this->upload->do_upload($cols['name']))
        //                 {
        //                     $filename_ephoto = $this->upload->data($cols['name']);
        //                     $data[$cols['name']] = 'uploads/'.$this->controller.'/'.$filename_ephoto['file_name'];
        //                 }
        //             }

        //         }
        //         else if($cols['type'] == 'file')
        //         {
        //             if(isset($_FILES[$cols['name']])&&$_FILES[$cols['name']]['tmp_name']!="")
        //             {
        //                 $upload_path='./uploads/'.$this->controller.'/';
        //                 if (!file_exists($upload_path))
        //                 {
        //                     $create = mkdir($upload_path, 0777, TRUE);
        //                     if (!$create ){return;}
        //                 }
        //                 $config['upload_path'] = $upload_path;
        //                 $config['max_size']	= '102400';
        //                 $config['max_width']  = '4000';
        //                 $config['max_height']  = '4000';
        //                 $config['allowed_types'] = 'jpg|png|jpeg|txt|doc|docx|pdf';
        //                 $config['remove_spaces'] = true;
        //                 $this->load->library('upload', $config);
        //                 $this->load->library('image_lib');
        //                 if ($this->upload->do_upload($cols['name']))
        //                 {
        //                     $filename_ephoto = $this->upload->data($cols['name']);
        //                     $data[$cols['name']] = 'uploads/'.$this->controller.'/'.$filename_ephoto['file_name'];
        //                 }

        //             }
        //         }
        //         else if($cols['type'] == 'checkbox')
        //         {

        //             if(isset($_POST[$cols['name']]))
        //             {
        //                 $post_value=implode(",",$_POST[$cols['name']]);
        //                 $data[$cols['name']]=$post_value;
        //             }
        //         }
        //     }
        // }

        // $q = $this->SqlModel->updateRecord($this->tblName, $data, array($this->pKey=>$editID));
        // if($q==true)
        // {
        //     $this->session->set_flashdata('alert','editsuccess');
        // }
        // else{
        //     $this->session->set_flashdata('alert','error');
        // }
        // redirect(base_url('manage/'.$this->controller.'?'.$_SERVER['QUERY_STRING']));
    }

   public function viewcart($id)
   {
	   echo $id;
   }


    public function delete($student_id="",$course_id="",$sub_courses_id="")
    {
        echo $student_id,$course_id,$unitId;
        $q = $this->SqlModel->deleteRecord("students" , array('student_id'=>$student_id,'course_id'=>$course_id,'sub_courses_id'=>$sub_courses_id));
        if($q==true)
        {
            $this->session->set_flashdata('alert','deletesuccess');
        }
        else{
            $this->session->set_flashdata('alert','deleteerror');
        }
        redirect(base_url().'manage/'.$this->controller."/control/students/".$sub_courses_id."?m_=".$myMessage);


    }

    public function addCourse()
    {
        $enterCourse = $this->input->post("enterCourse");
        $course_id = $this->input->post("addCourse");
        $data = array(
            'course_id'=> $course_id,
            'course_title'=> $enterCourse
        );
        // var_dump($data);
        // $this->general_model->insertDynamic('referred_students',$student_data);
        $q = $this->SqlModel->insertRecord('sub_courses',$data);
          
        if($q==true)
        {
            $data['alert'] =$this->session->set_flashdata('alert','editsuccess');
            // $this->session->set_flashdata('alert','editsuccess');
        }
        else{
            $this->session->set_flashdata('alert','editerror');
        }
        redirect(base_url().'manage/'.$this->controller."/viewCourses");


    }


    public function editCourse($sub_courses_id="")
    {
        $val = array('course_title'=>$this->input->post($sub_courses_id));
        $q = $this->SqlModel->updateRecord("sub_courses", $val,array(
            'id'=>$sub_courses_id                                                                                        
            ));
          
        if($q==true)
        {
            $data['alert'] =$this->session->set_flashdata('alert','editsuccess');
            // $this->session->set_flashdata('alert','editsuccess');
        }
        else{
            $this->session->set_flashdata('alert','editerror');
        }
        redirect(base_url().'manage/'.$this->controller."/viewCourses");


    }
    public function deleteCourse($sub_courses_id="")
    {
        $val = array('course_title'=>$this->input->post($sub_courses_id));
        $q = $this->SqlModel->deleteRecord("sub_courses", array('id'=>$sub_courses_id));
          
        if($q==true)
        {
            $data['alert'] =$this->session->set_flashdata('alert','editsuccess');
            // $this->session->set_flashdata('alert','editsuccess');
        }
        else{
            $this->session->set_flashdata('alert','editerror');
        }
        redirect(base_url().'manage/'.$this->controller."/viewCourses");


    }
    
    public function addUnits($sub_id="")
    {
        $stream_id =$this->SqlModel->getSingleField('course_id','sub_courses',array('id'=>$sub_id));
        $unitName = $this->input->post("unitName");
        $unitDescription = $this->input->post("unitDescription");
        $unitHours = $this->input->post("unitHours");
        
        $data = array(
            'course_id'=> $stream_id,
            'sub_courses_id'=> $sub_id,
            'unit_name' => $unitName,
            'unit_description' => $unitDescription,
            'unit_hours' => $unitHours,
        );
        print_r($data);

        $q = $this->SqlModel->insertRecord('course_units',$data);
          
        if($q==true)
        {
            $data['alert'] =$this->session->set_flashdata('alert','editsuccess');
            // $this->session->set_flashdata('alert','editsuccess');
        }
        else{
            $this->session->set_flashdata('alert','editerror');
        }
        redirect(base_url().'manage/'.$this->controller."/viewUnits/".$sub_id);


    }
    public function editUnits($sub_courses_id="",$unit_id="")
    {
        
        $stream_id =$this->SqlModel->getSingleField('course_id','sub_courses',array('id'=>$sub_courses_id));
        $unitName = $this->input->post($unit_id."_name");
        $unitDescription = $this->input->post($unit_id."_description");
        $unitHours = $this->input->post($unit_id."_hours");
        $data = array(
            'unit_name' => $unitName,
            'unit_description' => $unitDescription,
            'unit_hours' => $unitHours,
        );
        // var_dump($data);
        $q = $this->SqlModel->updateRecord("course_units", $data,array(
            'course_id'=> $stream_id,
            'sub_courses_id'=> $sub_courses_id,
            'id'=> $unit_id                                                                                      
            ));
          
        if($q==true)
        {
            $data['alert'] =$this->session->set_flashdata('alert','editsuccess');
            // $this->session->set_flashdata('alert','editsuccess');
        }
        else{
            $this->session->set_flashdata('alert','editerror');
        }
        redirect(base_url().'manage/'.$this->controller."/viewUnits/".$sub_courses_id);
    }
    public function deleteUnits($sub_courses_id="",$unit_id="")
    {

        $q = $this->SqlModel->deleteRecord("course_units", array(
            'sub_courses_id'=> $sub_courses_id,
            'id'=> $unit_id                                                                                      
            ));
          
        if($q==true)
        {
            $data['alert'] =$this->session->set_flashdata('alert','editsuccess');
            // $this->session->set_flashdata('alert','editsuccess');
            redirect(base_url().'manage/'.$this->controller."/viewUnits/".$sub_courses_id);
        }
        else{
            $this->session->set_flashdata('alert','editerror');
        }
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

