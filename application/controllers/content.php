<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {
    public $ws;

    public function __construct(){
        // Call the Model constructor
        parent::__construct();

        $this->ws = $this->SqlModel->getSingleRecord('site_settings',array('id'=>1));
        if(isset($this->ws['under_construction'])&&$this->ws['under_construction']=="Yes"&&$this->input->get('preview')!="1")
        {
            redirect(base_url('under-construction.html'));
        }
        $this->load->library('encrypt');
    }

    public function index()
    {
        $whereArray=array('blog_status' => 'Published');
        $blog_array=$this->general_model->getResultDynamic('blog',$whereArray);
        $data["blogs"]=$blog_array;
        $dataheader['headertitle'] = 'list ';
        $this->load->view('header',$dataheader);
        $this->load->view('content/list',$data);
        $this->load->view('footer');
    }

    public function slug($slug)
    {
        $whereArray=array('blog_status' => 'Published','blog_slug' => $slug);
        $blog_array=$this->general_model->getRowDynamic('blog',$whereArray);
        if($blog_array) {

            date_default_timezone_set("Greenwich");
            $now = NOW();
            $now = unix_to_human($now, FALSE, 'eu');
            $this->form_validation->set_rules('g-recaptcha-response','Captcha','required');
            $this->form_validation->set_rules('comments_by_name','Name','trim|required|xss_clean|strip_tags|alpha_dash_space');
            $this->form_validation->set_rules('comments_message','Comment','trim|required|xss_clean|strip_tags|alpha_dash_space');
            $this->form_validation->set_rules('comments_by_email','Email','trim|required|xss_clean|strip_tags|valid_email');
            $this->form_validation->set_rules('g-recaptcha-response','Captcha','required');


            $this->form_validation->set_message('alpha_dash','Special characters are not allowed in %s.');
            $this->form_validation->set_message('alpha_dash_space','Special characters are not allowed in %s.');
            if($this->form_validation->run()===false) {
                if (validation_errors() != "") {
                    $this->session->set_userdata('error_from_php', validation_errors());
                }
            }
            else
            {
                if(isset($_POST['action']))
                {
                    $comment_data = array(
                        'comments_blog_id'         		=> $this->input->post('comments_blog_id'),
                        'comments_by_name'     		    => $this->input->post('comments_by_name'),
                        'comments_by_email'             => $this->input->post('comments_by_email'),
                        'comments_message'	    	    => $this->input->post('comments_message'),
                        'comments_added' 		        => $now
                    );
                    $comment_id = $this->general_model->insertDynamic('comments',$comment_data);
                }
            }

            $data["blog"] = $blog_array;
            $dataheader['headertitle'] = 'Details ';
            $this->load->view('header', $dataheader);
            $this->load->view('content/blog', $data);
            $this->load->view('footer');

        }
        else
        {
            redirect('blogs');
        }
    }




}



