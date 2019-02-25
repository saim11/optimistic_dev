<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Forms_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM user WHERE user_email = '$email' AND user_password = '$password' AND user_status != 'Deleted'";
        $results = $this->db->query($sql);
        if ($results->num_rows() == 1) {
            return $results->row_array();
        } else {
            return 0;
        }
    }
    public function c_login($email, $password)
    {
        $sql = "SELECT * FROM co_ordinator WHERE co_email = '$email' AND co_password = '$password' AND co_status != 'Deleted'";
        $results = $this->db->query($sql);
        if ($results->num_rows() == 1) {
            return $results->row_array();
        } else {
            return 0;
        }
    }


} // End Model