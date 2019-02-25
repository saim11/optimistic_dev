<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Option extends CI_Controller {


    public $ws;
    public $tblName 		= 	"option";
    public $pKey			=	"";
    public $colPrefix       =   "option_";
    public $moduleName 		=	"Option";
    public $controller 		=	"";
    public $per_page 		=	"10";
    public $tStatus 		=	"";
    public $listView 		=	"crud";
    public $addEditView 	=	"addcrud";
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

    public $model           =   array();                                 
    


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
        //$this->drop_table();
        //$this->create_table();
       $this->model  =   array(

                                            
                                            array('name' => 'option_text'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Option'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
											,array('name' => 'option_question'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Question ID'
                                            ,'type' => 'text'
                                            ,'required' => true
                                            , 'list'=>array()
                                            )
											 ,array('name' => 'option_question'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Question Details'
                                            ,'type' => 'detail'
                                            ,'required' => true
                                            , 'list'=>array()
                                            , 'detail_link'=>'manage/question/control/edit/'
                                            ,'icon' => 'entypo-doc-text-inv'
                                            )
											,array('name' => 'option_is_correct'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Is correct?'
                                            ,'type' => 'select'
                                            ,'required' => true
                                            , 'list'=>array(
                                                            array('value' => '2'
                                                                  ,'show' => 'No')
                                                            ,array('value' => '1'
                                                                  ,'show' => 'Yes')
                                                            
                                                            )
                                            )
                                            ,array('name' => 'option_status'
                                            ,'view_update' => true
                                            ,'view_list' => true
                                            ,'view_name' => 'Status'
                                            ,'type' => 'select'
                                            ,'required' => true
                                            , 'list'=>array(
                                                            array('value' => 'Published'
                                                                  ,'show' => 'Published')
                                                            ,array('value' => 'Un-Published'
                                                                  ,'show' => 'Un-Published')
                                                            ,array('value' => 'active'
                                                                  ,'show' => 'active')
                                                            
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


    public function index($sortby="", $order="DESC", $status="-",$keywords="-", $pg_no="")
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
        $pconfig['base_url'] = $base_url. '/?' . http_build_query($_GET);
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




    //For add record form post
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

        $data = array();
        $data[$this->colPrefix.'added']=date('Y-m-d H:i:s');
        $data[$this->colPrefix.'updated']=date('Y-m-d H:i:s');

        foreach ($this->model as $cols) {

            if($cols['view_update'])
            {

                if($cols['type'] != 'image' && $cols['type'] != 'file' && $cols['type'] != 'checkbox' && $cols['type'] != 'custom_query' && $cols['type'] != 'action' && $cols['type'] != 'detail' )
                {
                    if(isset($_POST[$cols['name']]))
                    {
                        $data[$cols['name']]=$this->input->post($cols['name']);
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

