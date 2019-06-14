<?php
if (!defined('BASEPATH')) {
 exit('No direct script access allowed');
}

class Trainer extends CI_Controller
{
 public function index()
 {

  $this->load->view('admin/update_trainer_books');
 }

}
