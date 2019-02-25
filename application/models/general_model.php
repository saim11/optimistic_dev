<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class General_model extends CI_Model
{

    public function __construct()
    {
      //  $this->load->database();
       
    }

    //####################### ---- DYNAMIC CRUD --- #################################//

    // Inserting Data
    public function insertDynamic($tableName,$insertArray)
    {
        $this->db->insert($tableName, $insertArray);
        return $this->db->insert_id();
    }

    // Updating Data
    public function updateDynamic($tableName,$updateData,$whereArray)
    {
        return $this->db->update($tableName,$updateData,$whereArray);
    }

    // Deleting Data
    public function deleteDynamic($tableName,$whereArray)
    {
        return $this->db->delete($tableName, $whereArray);
    }

    // Selecting Data on Multiple Basis
    public function getRowDynamic($tableName,$whereArray)
    {
        $query = $this->db->get_where($tableName, $whereArray);
        if($query->num_rows() < 1){return 0;}else{ return $result = $query->row_array();}
    }
	
	// Returning Row
	public function getResultDynamic($tableName,$whereArray)
    {
        $query = $this->db->get_where($tableName, $whereArray);
        if($query->num_rows() < 1){return 0;}else{ return $result = $query->result_array();}
    }

    // Returning Row With OR Query
	public function getOrResults($tableName,$where, $orWhere)
    {
        $query = $this->db->where($tableName, $where);
        $query = $this->db->or_where($orWhere); 
        if($query->num_rows() < 1){return 0;}else{ return $result = $query->result_array();}
    }
	
	// Returning row with Order/Sorted
	public function getResultDynamicWithOrder($tableName,$whereArray,$orderColumn,$orderBy)
    {
        $query = $this->db->order_by($orderColumn, $orderBy)->get_where($tableName, $whereArray);
        if($query->num_rows() < 1){return 0;}else{ return $result = $query->result_array();}
    }
	
	// Get full Table No where clause
	public function getTable($tableName)
    {
        $query = $this->db->get($tableName);
        if($query->num_rows() < 1){return 0;}else{ return $result = $query->result_array();}
    }
	
	
	
	/*Pagination Work*/
	
	//get count rows
    public function get_count($table,$where)
    {

        if($where != "")
        {
            $this->db->where($where);
        }

        $this->db->from($table);
        return $this->db->count_all_results();

    }
	
	
	public function pagination_fetch($table,$limit,$id,$where,$order_by,$order)
    {
    	if($where != "")
        {
            $this->db->where($where);
        }
        if($order_by != "")
        {
            $this->db->order_by($order_by, $order);
        }

        $query = $this->db->get($table,$limit,$limit*($id-1));

        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
			
            return $data;
        }
        return false;
    }
	
	
	
	/*RSC Spcific queries*/
	
	
	
	function getRequestedAgents($teamId)
	{
		$sql = "SELECT * FROM requests
				inner join
				freeagent
				ON requests.requests_agent_id = freeagent.freeagent_id
				where 
				requests.requests_status != 'Deleted'
				AND requests.requests_team_id = '$teamId'";
				
	    $results=$this->db->query($sql);
		$data = $results->result_array();
		
		if($data)
		{
			return $data;	
		}
		else
		{
			return 0;
		}
	}

    function getRequestedTeams($agentId)
    {
        $sql = "SELECT t.team_id, t.team_name, team_logo_image, t.team_logo, l.leagues_name, l.leagues_max_players, l.leagues_charges, r.requests_id FROM requests r
                inner join
                team t
                ON r.requests_team_id = t.team_id inner join leagues l on l.leagues_id = t.team_leagues_id
                where 
                r.requests_status != 'Deleted' AND r.requests_status != 'Rejected'  
                AND r.requests_agent_id = '$agentId'
                ";
                

         $results = $this->db->query($sql);
         $data =  $results->result_array();
        if($data)
        {
            return $data;   
        }
        else
        {
            return 0;
        }      
    }
	
	
	function getSearched_players($query)
    {
        $sql = "SELECT * from player where (player_first_name like '%$query%' OR player_email like '%$query%') AND player_status != 'Un-Published' LIMIT 20";
		    $results=$this->db->query($sql); 
			$data = $results->result_array();
			
        if($data)
        {
            return $data;   
        }
        else
        {
            return 0;
        }      
    }

    function getSearched_freeagents($query)
    {
        $sql = "SELECT * from freeagent where (freeagent_fname like '%$query%' OR freeagent_email like '%$query%') AND freeagent_status != 'Un-Published' LIMIT 20";
            $results=$this->db->query($sql); 
            $data = $results->result_array();
            
        if($data)
        {
            return $data;   
        }
        else
        {
            return 0;
        }      
    }
    
	
    //####################### ----END DYNAMIC CRUD --- #################################//
    
    
    public function encrypt($param)
    {
    	return $param;
    }

	public function decrypt($param)
    {
    	return $param;
    }    
    
    
    //########################### ENd excryption Decrypition ###########################//

    // Registering Session
    public function registerSession($sessionArray)
    {
        $this->session->set_userdata($sessionArray);
        return TRUE;
    }

    // Unsetting Session
    public function unset_session($unset_items)
    {
        $this->session->unset_userdata($unset_items);
    }

    public function shoot_email_full_dynamic($email_from, $email_to, $name_from, $name_to,$subject,$content, $attach = " ")
    {
        // 465 iso-8859-1
        // $config = Array(
        //     'protocol' => 'smtp',
        //     'smtp_host' => 'smtp.gmail.com',
        //     'smtp_port' => 465,
        //     'smtp_user' => 'sohaib@synctechsol.com',
        //     'smtp_pass' => 'pakistan1@#',
        //     'mailtype'  => 'html',
        //     'charset'   => 'utf-8'
        // );
        $config = Array(
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        );
        $this->email->initialize($config);

        $this->email->from($email_from,$name_from);
        $this->email->to($email_to,$name_to);
        $this->email->subject($subject);
        $this->email->message($content);
        if($attach !=" " ) {
            $this->email->attach($attach);
        }


        if (!$this->email->send()){
            echo $this->email->print_debugger();
            return 0;//echo $this->email->print_debugger();
        }
        else
        {
            echo "done";
        }

    }
	
	public function uploadfiles($databasePath,$files)
    {
        $user_upload_path = './'.$databasePath;
		//$databasePath = 'uploads/files/modulefiles'.$module_id.'/';

        if (!file_exists($user_upload_path))
        {
            $create = mkdir($user_upload_path, 0777, TRUE);
            if (!$create ){return;}
        }

        $target_dir = $user_upload_path;
        $target_file = $target_dir . basename($files["file_data"]["name"]);
		
		$databasePath = $databasePath . basename($files["file_data"]["name"]);
		
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		
		if (file_exists($target_file))
        {
        	$this->session->set_userdata('error_from_php', 'You have already uploaded the file with the same name. Please check it twice or upload by some other name.');
			return 0;
        }
	
	    if (move_uploaded_file($files["file_data"]["tmp_name"], $target_file)) 
	    {
	    	return $databasePath;
        } 
        else 
        {
        	$this->session->set_userdata('error_from_php', 'There is a problem in uploading your file. Please try again later.');	
            return 0;
        } // end func
     }



     public function playerallowed($team_id)
     {

        $sql="SELECT COUNT( * ) < leagues.leagues_max_players as 'status' FROM player inner join leagues on leagues.leagues_id=player.player_league_id where player_team_id=$team_id";
        
        $results=$this->db->query($sql);
        $result = $results->row_array();
        if($result)
        {
          return $result["status"];
        }
        else
        {
            return 0;
        }
        
     }



} // end model