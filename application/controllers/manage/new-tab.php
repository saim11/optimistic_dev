<?php 
   class new-tab extends CI_Controller { 
	public $ws;

    public function __construct(){
        // Call the Model constructor
        parent::__construct();
    }

      public function index()
    {    
        $this->load->view('new-tab');
    }
   } 
?>