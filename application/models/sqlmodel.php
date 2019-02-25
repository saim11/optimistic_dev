<?php

class SqlModel extends CI_Model {

	private $table;

    public function __construct(){
	     // Call the Model constructor
	   parent::__construct();
	    if (!defined('PROJECT_TITLE')) {
            $dataws=$this->getSingleRecord('site_settings',array('id'=>1));
            define('PROJECT_TITLE',$dataws['website_title']);
            define('EMAIL_SENDER_NAME', $dataws['sender_name']);
            define('EMAIL_ADDRESS', $dataws['sender_email']);
        }

    }

   
	
	
	/****************************** Start General Functions ***********************/
	
	//insert function 
	function insertRecord($table , $colums)
	{
		if($this->db->insert($table , $colums))
		return $this->db->insert_id();
		else
		return false;
	}
	
	//update function
	function updateRecord($table , $colums , $condition)
	{
		if($this->db->update($table , $colums , $condition))
		return true;
		else
		return false;
	}
	
	function batchInsert($table , $data)
	{
		if($this->db->insert_batch($table,$data))
		return true;
		else
		return false;
	}
	
	function batchUpdate($table , $data , $whereKey)
	{
		if($this->db->update_batch($table,$data,$whereKey))
		return true;
		else
		return false;
	}
	
	// delete function 
	function deleteRecord($table , $condition)
	{
		if($this->db->delete($table , $condition))
		{
		// echo $this->db->last_query();
		return true;
		}
		else
		{
		return false;
		}
	}
	
	function runQuery($sql, $flag='')
	{
		$this->result = $this->db->query($sql);
		if($flag) {
			return $this->result->row_array();
	    } else {
			return $this->result->result_array();
	    }
	}
	
	
	public function getSingleRecord($table, $where)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($where);	
		$count = $this->db->count_all_results();
		if($count=="1")
		{
		$query = $this->db->get_where($table, $where);
		$data=$query->row_array();
		return $data;
		}
		else{
		return null;	
		}
	}
	
	public function getSingleField($col, $table, $where)
	{
		$this->db->select($col);
		$this->db->from($table);
		$this->db->where($where);	
		$query = $this->db->get();
		$data = $query->row_array();
		if(isset($data[$col]))
		{
		return $data[$col];
		}
		else{
		return null;	
		}
	}
	/*
	public function getRecords($fields, $table, $sortby="", $order="", $where="", $limit="0", $start="")
	{
		$this->db->select($fields);
		$this->db->from($table);
		if(!empty($where))
		{
		$this->db->where($where);	
		}
		if($sortby!="" && $order!="")
		{
		$this->db->order_by($sortby,$order);
		}
		
		if($limit!=0)
		{
			$this->db->limit($limit, $start);
			
		}
		$query = $this->db->get();
		$data=$query->result_array();
		return $data;
		
	}
	
	
	
	public function countRecords($table, $where=array())
	{
	$this->db->select('*');
	$this->db->from($table);
	if(!empty($where))
	{
	$this->db->where($where);	
	}
	$records = $this->db->count_all_results();
	return $records;	
	}
	*/
	public function getJoinRecords($fields,$table,$joins,$joinfields,$addqoutes=TRUE)
	{
		$this->db->select($fields,$addqoutes);
		$this->db->from($table);
		$this->db->join($joins, $joinfields);
		$query = $this->db->get();
		$data=$query->result_array();
		return $data;
	}
	public function getJoinWhereRecords($fields,$table,$joins,$joinfields,$joinTable,$joinfields2,$joinTable3="",$joinfields3="",$joinTable4="",$joinfields4="",$joinTable5="",$joinfields5="",$addqoutes=TRUE,$joinType="",$cond="",$date="")
	{
		$this->db->select($fields,$addqoutes);
		$this->db->from($table);
		$this->db->join($joins,$joinfields,$joinType);
		$this->db->join($joinTable,$joinfields2,$joinType);
		$this->db->join($joinTable3,$joinfields3,$joinType);
		$this->db->join($joinTable4,$joinfields4,$joinType);
		$this->db->join($joinTable5,$joinfields5,$joinType);
		$this->db->where($cond);
		$this->db->where("DATE_FORMAT(completion_date,'%m-%Y')", $date);
		$query = $this->db->get();
		$data=$query->result_array();
		return $data;
	}
	public function getJoinsGeneral($fields,$table,$joins,$joinfields,$joinTable,$joinfields2,$joinTable3="",$joinfields3="",$joinTable4="",$joinfields4="",$joinTable5="",$joinfields5="",$addqoutes=TRUE,$joinType="",$cond="",$date="")
	{
		$this->db->select($fields,$addqoutes);
		$this->db->from($table);
		$this->db->join($joins,$joinfields,$joinType);
		$this->db->join($joinTable,$joinfields2,$joinType);
		$this->db->join($joinTable3,$joinfields3,$joinType);
		$this->db->join($joinTable4,$joinfields4,$joinType);
		$this->db->join($joinTable5,$joinfields5,$joinType);
		$query = $this->db->get();
		$data=$query->result_array();
		return $data;
	}
	public function getJoinsWhereGeneral($fields,$table,$joins,$joinfields,$joinTable,$joinfields2,$joinTable3="",$joinfields3="",$joinTable4="",$joinfields4="",$joinTable5="",$joinfields5="",$joinType="",$cond="",$date="",$addqoutes=TRUE)
	{
		$this->db->select($fields,$addqoutes);
		$this->db->from($table);
		$this->db->join($joins,$joinfields,$joinType);
		$this->db->join($joinTable,$joinfields2,$joinType);
		$this->db->join($joinTable3,$joinfields3,$joinType);
		$this->db->join($joinTable4,$joinfields4,$joinType);
		$this->db->join($joinTable5,$joinfields5,$joinType);
		$this->db->where($cond);
		$query = $this->db->get();
		$data=$query->result_array();
		return $data;
	}
	public function getJoinsCourse($fields,$table,$joins,$joinfields,$joinType="",$addqoutes=TRUE)
	{
		$this->db->select($fields,$addqoutes);
		$this->db->from($table);
		$this->db->join($joins,$joinfields,$joinType);
		$query = $this->db->get();
		$data=$query->result_array();
		return $data;
	}
	public function getDoubleJoinRecords($fields,$table,$joins, $joinfields,$joinTable,$joinfields2,$addqoutes=TRUE)
	{
		$this->db->select($fields,$addqoutes);
		$this->db->from($table);
		$this->db->join($joins, $joinfields);
		$this->db->join($joinTable, $joinfields2);
		$query = $this->db->get();
		$data=$query->result_array();
		return $data;
	}
	
	public function getRecords($fields, $table, $sortby="", $order="", $where="",$search=array(), $limit="0", $start="0",$addqoutes=TRUE)
	{
		$this->db->select($fields,$addqoutes);
		$this->db->from($table);
		if(!empty($where))
		{
		$this->db->where($where);	
		}
		
		if(!empty($search)&&isset($search['cols'])&&isset($search['value'])&&$search['cols']!=""&&$search['value']!="")
		{
			$like = "(";
			$colArray = explode(",",$search['cols']);
			foreach($colArray as $c)
			{
				$like .= " ".trim($c)." LIKE '%".$this->db->escape_like_str($search['value'])."%' OR ";	
			}
			
			$vs = explode(" ",$search['value']);
			if(count($vs)>1)
			{
				foreach($vs as $v)
				{
					foreach($colArray as $c)
					{
						$like .= " ".trim($c)." LIKE '%".$this->db->escape_like_str($v)."%' OR ";	
					}	
				}
			}
			
			$like = rtrim($like,"OR ");
			$like .= ")";
			$this->db->where($like);		
		}
		
		if($sortby!="" && $order!="")
		{
		$this->db->order_by($sortby,$order);
		}
		
		if($limit!="0")
		{
			$this->db->limit($limit, $start);
			
		}
		$query = $this->db->get();
		$data=$query->result_array();
		return $data;
		
	}
	
	
	public function countRecords($table, $where=array(),$search=array())
	{
	$this->db->select('*');
	$this->db->from($table);
	if(!empty($where))
	{
	$this->db->where($where);	
	}
	if(!empty($search)&&isset($search['cols'])&&isset($search['value'])&&$search['cols']!=""&&$search['value']!="")
	{
		$like = "(";
		$colArray = explode(",",$search['cols']);
		foreach($colArray as $c)
		{
			$like .= " ".trim($c)." LIKE '%".$this->db->escape_like_str($search['value'])."%' OR ";	
		}
		
		$vs = explode(" ",$search['value']);
		if(count($vs)>1)
		{
			foreach($vs as $v)
			{
				foreach($colArray as $c)
				{
					$like .= " ".trim($c)." LIKE '%".$this->db->escape_like_str($v)."%' OR ";	
				}	
			}
		}
		
		$like = rtrim($like,"OR ");
		$like .= ")";
		$this->db->where($like);		
	}
	$records = $this->db->count_all_results();
	return $records;	
	}
	public function checkCookie()
	{
		if(isset($_COOKIE['dstacklog'])&&$_COOKIE['dstacklog']!="")
		{
			$id = $this->encrypt->decode($_COOKIE['dstacklog']);
			$user_data = $this->getUserDataById($id);
			if(!empty($user_data))
			{	
			$this->session->set_userdata('user_id',$user_data['id']);
			$this->session->set_userdata('fb_uid',$user_data['fb_uid']);
			$this->session->set_userdata('email',$user_data['email']);
			$this->session->set_userdata('full_name',$user_data['full_name']);
			$this->session->set_userdata('role', $user_data['user_role']);
			$this->session->set_userdata('auth', '1');
			redirect(base_url().'home','location');	
			}
			else{
			return;	
			}
		}
		else
		{
		return;	
		}
	}
	
	public function truncate($table="")
	{
		if($table=="")
		{
		return;
		}
		if($this->db->truncate($table))
		{
			return true;	
		}
		else{
			return false;
		}
	}
	
	public function seostring($rstring="")
	{
		$string = preg_replace('/\%/',' percentage',$rstring);
		$string = preg_replace('/\@/',' at ',$string);
		$string = preg_replace('/\&/',' and ',$string);
		$string = preg_replace('/\s[\s]+/','-',$string);    // Strip off multiple spaces
		$string = preg_replace('/[\s\W]+/','-',$string);    // Strip off spaces and non-alpha-numeric
		$string = preg_replace('/^[\-]+/','',$string); // Strip off the starting hyphens
		$string = preg_replace('/[\-]+$/','',$string); // // Strip off the ending hyphens
		$string = strtolower($string);
		$string = str_replace(" ","-",$string).'.html';
		return $string;
	}
	
	
	public function authAdmin($authKey="",$adminID="")
	{
		if($authKey == "allow" && $adminID != "")
		{
			$adminData = $this->getSingleRecord('admin_users' , array('id'=>$adminID,'status'=>'Enable'));
			if(empty($adminID))
			{
				return false;
			}
			else{
				$this->setTitle();
				return $adminData;
			}
		}
		else{
			return false;
		}
		
	}
	
	public function setTitle()
	{
		//$webTitle = $this->getSingleField('website_title', 'site_settings', array('id'=>1));
		//define('PROJECT_TITLE',$webTitle );

		
	}
	


	
	public function checkAccess($type="",$uD=array())
	{
		if($type=="" || empty($uD))
		{
			redirect(ADMIN_URL);
			exit;	
		}
		//echo $type.'<Br>'.$uD['user_role'].'<br/>'.$uD[$type];
		//exit;
		if($uD['user_role']=="Admin"&&$uD[$type]=="No")
		{
			return false;	
		}
		else {
			return true;	
		}
		
		
	}
	
	public function publish()
	{
		$page_pub = "UPDATE pages p SET page_status='Published', page_pdate='0000-00-00 00:00:00' WHERE p.`page_pdate`<='".date('Y-m-d H:i:s')."' AND p.`page_pdate`!='0000-00-00 00:00:00'";
		@$this->db->query($page_pub);
		
		$page_pub = "UPDATE pages p SET page_status='Un-Published', page_update='0000-00-00 00:00:00' WHERE p.`page_update`<='".date('Y-m-d H:i:s')."' AND p.`page_update`!='0000-00-00 00:00:00'";
		@$this->db->query($page_pub);
		
		$blog_pub = "UPDATE blogs p SET blog_status='Published', blog_pdate='0000-00-00 00:00:00' WHERE p.`blog_pdate`<='".date('Y-m-d H:i:s')."' AND p.`blog_pdate`!='0000-00-00 00:00:00'";
		@$this->db->query($page_pub);
		
		$blog_pub = "UPDATE blogs p SET blog_status='Un-Published', blog_update='0000-00-00 00:00:00' WHERE p.`blog_update`<='".date('Y-m-d H:i:s')."' AND p.`blog_update`!='0000-00-00 00:00:00'";
		@$this->db->query($page_pub);
		
	}
	
	//For Sub pages
	public function getSubPages($page_id,$html)
	{
		$subhtml = "";
		if(strpos($html,'{subpages}')!==FALSE)
		{
			$subPages = $this->runQuery("SELECT p.`page_uri`,p.`page_name` FROM pages p WHERE p.`page_status`='Published' AND p.`page_pdate`='0000-00-00 00:00:00' AND p.`page_parent_id`=".$page_id." ORDER BY p.`page_order` ASC");
			if(!empty($subPages))
			{
				$subhtml.= '<blockquote class="orange"><div class="button-wrapper">';
				$i = 1;
				foreach($subPages as $s)
				{
					$subhtml.= '<a href="'.base_url($s['page_uri']).'.html">'.$s['page_name'].'</a>';
					if($i<count($subPages))
					{
					$subhtml.= '<br><br>';	
					}
					$i++;
				}
				$subhtml.= '</div></blockquote>';
				$html = str_replace("{subpages}",$subhtml,$html);
				return $html;
				
			}
			
		}
		else{
			return $html;	
		}
		
		
	}
	
	public function getFoot($type="")
	{
		$html = "";
		if($type!="one"&&$type!="two")
		{
			return $html;
		}
		else{
			$type = "_".strtolower($type);
			$foot = $this->runQuery("SELECT menu_name,page_uri FROM pages WHERE menu_parent_id".$type." = '0' AND menu_active".$type." = 1 ORDER BY menu_order".$type." ASC");
			if(count($foot)>0)
			{
				foreach($foot as $f) {
					$html.= (($type=="_two") ? '<li>' :''); 
					$html.= '<li><a href="'.base_url($f['page_uri']).'.html">'.$f['menu_name'].'</a></li>';
					$html.= (($type=="_two") ? '</li>' :''); 
				}
			}
			
			return $html;
		}
	}
	
	public function getPageInfo($pageID=0)
	{
		return $this->SqlModel->runQuery("SELECT page_uri,page_text,page_image image FROM pages WHERE page_id=".$this->db->escape_str($pageID)." AND page_status='Published'",true);
	}


	public function testimonials($testimonials)
	{
		$data["testimonials"]=$testimonials;
		return $this->load->view('testimonials',$data);
	}


	public function latestoffers($latestoffers)
	{
		$data["latestoffers"]=$latestoffers;
		return $this->load->view('latestoffers',$data);
	}


	public function customblock($customblock)
	{
		$data["customblock"]=$customblock;
		return $this->load->view('customblock',$data);
	}


	public function gallery($gallery)
	{
		$data["gallery"]=$gallery;
		return $this->load->view('gallery',$data);
	}


	public function series($series)
	{
		$data["series"]=$series;
		return $this->load->view('series',$data);
	}


	public function about($about)
	{
		$data["about"]=$about;
		return $this->load->view('about',$data);
	}


	public function getAllSeries()
	{
		return $this->runQuery("SELECT * FROM series where page_status = 'Open' limit 1",true);
	}


	public function home_banner()
	{
		$data['settings'] = $this->getSingleField('home_banner', 'site_settings', array('id'=>1));
		return $this->load->view('home_banner',$data);
	}
}

?>