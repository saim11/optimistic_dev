<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH."controllers/home.php");

class Blogs extends home{
    public $blog_slug;
    public $showView;
    public function index(){
        $this->blog_slug = $this->SqlModel->getSingleField('blog_slug','blog',array('blog_id'=>1));
        $this->blog($this->blog_slug);
    }
    public function blog($blog_uri=""){
        $this->showView = $blog_uri;
        $blog['all_blogs'] =$this->SqlModel->getRecords('*', 'blog', '', '',  array('blog_status'=>'published'));        
        $this->load->view('header',$this->data);
        $this->load->view($this->showView, $blog);
        $this->load->view('footer');
    }
}

?>