<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH."controllers/home.php");

class Join_us extends home{
    public $job_uri;
    public $showView="join-us";
    public function index(){
        $this->job_uri = $this->SqlModel->getSingleField('job_uri','jobs',array('job_id'=>1));
        $this->jobs($this->job_uri);
    }
    public function jobs($job_uri=""){
        $jobs['all_jobs'] =$this->SqlModel->getRecords('*', 'jobs', '', '',  array('job_status'=>'published'));
        $this->load->view('header',$this->data);
        $this->load->view($this->showView, $jobs);
        $this->load->view('footer');
        // if($job_id != 1){
            
        // }
    }
}

?>
