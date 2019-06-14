<?php
// ini_set('display_errors', '1');
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Imap_test extends CI_Controller {    

    public function __construct(){
        // Call the Model constructor
        parent::__construct();
        
    }

    public function index()
    {
        // {imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX

        $this->load->library('imap');
        $hostname	= '{imap.gmail.com:995/imap/tls/novalidate-cert}INBOX';
        $username	= 'sohaib@synctechsol.com';
        $password	= 'pakistan1@#';
        $subject	= 'Fwd: Fw: Your domain name certificate for alia.net.au';
        $maximum = "";
        $response = $this->imap->get_emails($hostname,$username,$password,$subject,$maximum);
        // print_r($response);
    }

}

