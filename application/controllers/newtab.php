<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
   class Newtab extends CI_Controller { 

    public function __construct(){
        // Call the Model constructor
        parent::__construct();
    }

      public function index()
    {    
        $this->load->view('newtab');
    }
   } 
?>