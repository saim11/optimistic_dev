<?php

class FootModel extends SqlModel {

	private $table = "foot";

    public function __construct(){
	     // Call the Model constructor
	   parent::__construct();

    }

   
	public function getAdminFootMenu($type="")
	{
		$type = "_".strtolower($type);
	 //Getting the active menu data
	 $query = $this->runQuery("SELECT * FROM pages WHERE menu_parent_id".$type." = '0' AND menu_active".$type." = 1 ORDER BY menu_order".$type." ASC");
     $rows1 = count($query);
	
	$html = "";
	 //Geting the inactive menu data
	 $queryTwo = $this->runQuery("SELECT * FROM pages menu WHERE menu_parent_id".$type." = '0' AND menu_active".$type." = 0 ORDER BY menu_order".$type." ASC");
	 $rows2 = count($queryTwo);
	 
	 
	 $html.='<div class="cf nestable-lists">
	 <div class="dd" id="nestable">';
	 
		if($rows1>0)
		{
      $html.='<ol class="dd-list">';
	
	foreach($query as $row) {  
	
                $html.= '<li class="dd-item" data-id="'.$row['page_id'].'">
                    <div class="dd-handle">'.$row['menu_name'].'</div>
				
					 <ol class="dd-list">';
						
						$id = $row['page_id']; 
						$query1 = $this->runQuery("SELECT * FROM pages WHERE menu_parent_id".$type." = '$id'  AND menu_active".$type." = 1 ORDER BY menu_order".$type." ASC");
						foreach($query1 as $row1) {
                        $html.='<li class="dd-item" data-id="'.$row1['page_id'].'">
                            <div class="dd-handle">'.$row1['menu_name'].'</div>
							
					<ol class="dd-list">';
						
						$id2 = $row1['page_id']; 
						$query2 = $this->runQuery("SELECT * FROM pages WHERE menu_parent_id".$type." = '$id2'  AND menu_active".$type." = 1 ORDER BY menu_order".$type." ASC");
						foreach($query2 as $row2) { 
                        $html.='<li class="dd-item" data-id="'.$row2['page_id'].'">
                            <div class="dd-handle">'.$row2['menu_name'].'</div>
							
							<ol class="dd-list">';
						
						$id3 = $row2['page_id']; 
						$query3 = $this->runQuery("SELECT * FROM pages WHERE menu_parent_id".$type." = '$id3'  AND menu_active".$type." = 1 ORDER BY menu_order".$type." ASC");
						foreach($query3 as $row3) { 
                        $html.= '<li class="dd-item" data-id="'.$row3['page_id'].'">
                            <div class="dd-handle">'.$row3['menu_name'].'</div>
							
							<ol class="dd-list">';
						
						$id4 = $row3['page_id']; 
						$query4 = $this->runQuery("SELECT * FROM pages WHERE menu_parent_id".$type." = '$id4'  AND menu_active".$type." = 1 ORDER BY menu_order".$type." ASC");
						foreach($query4 as $row4) { 
                        $html.='<li class="dd-item" data-id="'.$row4['page_id'].'">
                            <div class="dd-handle">'.$row4['menu_name'].'</div>
                        </li>'; 
						 }
                     $html.='</ol>
                        </li>'; 
						}
                    $html.='</ol>
					
                        </li>';
						} 
                     $html.='</ol>
					
                        </li>'; 
						} 
                     $html.='</ol>
                </li>';
		 } 
	$html.='</ol>';
   		}
		else {
           $html.='<div class="dd-empty"></div>';
		}
		
	$html.='</div>
    
    <div class="dd" id="nestable2">';
    	
		if($rows2>0)
		{
        
		   $html.='<ol class="dd-list">';
	
	unset($row);
	foreach($queryTwo as $row) {  
	
	
		
                $html.='<li class="dd-item" data-id="'.$row['page_id'].'">
                    <div class="dd-handle">'.$row['menu_name'].'</div>
				
					 <ol class="dd-list">';
						
							$id = $row['page_id']; 
						$query1 = $this->runQuery("SELECT * FROM pages WHERE menu_parent_id".$type." = '$id'  AND menu_active".$type." = 0 ORDER BY menu_order".$type." ASC");
						foreach($query1 as $row1) {   
                        $html.='<li class="dd-item" data-id="'.$row1['page_id'].'">
                            <div class="dd-handle">'.$row1['menu_name'].'</div>
							
					<ol class="dd-list">';
						
							$id2 = $row1['page_id']; 
						$query2 = $this->runQuery("SELECT * FROM pages WHERE menu_parent_id".$type." = '$id2'  AND menu_active".$type." = 0 ORDER BY menu_order".$type." ASC");
						foreach($query2 as $row2) {   
                        $html.='<li class="dd-item" data-id="'.$row2['page_id'].'">
                            <div class="dd-handle">'.$row2['menu_name'].'</div>
							
							<ol class="dd-list">';
						
							$id3 = $row2['page_id']; 
						$query3 = $this->runQuery("SELECT * FROM pages WHERE menu_parent_id".$type." = '$id3'  AND menu_active".$type." = 0 ORDER BY menu_order".$type." ASC");
						foreach($query3 as $row3) {   
                        $html.='<li class="dd-item" data-id="'.$row3['page_id'].' ">
                            <div class="dd-handle">'.$row3['menu_name'].' </div>
							
							<ol class="dd-list">';
						
						$id4 = $row3['page_id']; 
						$query4 = $this->runQuery("SELECT * FROM pages WHERE menu_parent_id".$type." = '$id4'  AND menu_active".$type." = 0 ORDER BY menu_order".$type." ASC");
						foreach($query4 as $row4) {   
                        $html.='<li class="dd-item" data-id="'.$row4['page_id'].'">
                            <div class="dd-handle">'.$row4['menu_name'].'</div>
                        </li> ';
						} 
                    $html.='</ol>
                        </li> ';
						} 
                    $html.='</ol>
					
                        </li>'; 
						} 
                    $html.='</ol>
					
                        </li>'; 
						} 
                    $html.='</ol>
                </li>';
	} 
	$html.='</ol>'; 
             
		}
		else {
            $html.='<div class="dd-empty"></div>';
		}
		
           
           
           
       $html.=' </div>
		
	</div>';
		
	return $html;	
	}
	

}

