
<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Training extends CI_Controller {
    public $tblName = 'book_category';
    public $books_sub_categories = 'books_sub_categories';
    public $pKey = "book_category_id";





    public function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
    
    public function index(){
        if(isset($_POST['action'])){
        $listing = array();
        $elementId = $_POST['elementId'];
        isset($_POST['catSelected']) ? ($catSelected = $_POST['catSelected']):($catSelected="");
        
    // For Category Level One
        if($elementId == 'addCatLvl1'){
        $data['listing']=$this->SqlModel->getRecords('*', $this->tblName);
        foreach ($data['listing'] as $value) {
            $abc = array($value["book_category_id"],str_replace(' ','_',$value["book_category_title"]),$value["book_category_image"], $value["book_category_status"]);
            array_push($listing, $abc);
        }

        if(isset($_FILES['image']))
		{
        $courseImage = $_FILES['image']['tmp_name'];
        $upload_path='./uploads/book_category';
		if (!file_exists($upload_path))
        {
            $create = mkdir($upload_path, 0777, TRUE);
            if (!$create ){return;}
        }
			$config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'jpg|gif|png|jpeg|JPG|PNG';
			$config['max_size']	= '10240';
			$config['max_width']  = '4000';
			$config['max_height']  = '4000';
			$config['remove_spaces'] = true;
            $this->load->library('upload', $config);
            $this->load->library('image_lib');
            if ($this->upload->do_upload('image'))
			{
                $filename_ephoto = $this->upload->data('image');
                $upload_path = "/uploads/book_category/".$filename_ephoto['file_name'];
            }
        }
        
            $data = array(
            'book_category_title' 	=> str_replace(' ','_',trim(htmlspecialchars($_POST['action']))),
            'book_category_image'   => $upload_path
            );
            $columnName = str_replace(' ','_',trim(htmlspecialchars($_POST['action'])));
            $q = $this->SqlModel->insertRecord($this->tblName, $data); 

            // Add Column
            $c =$this->db->query("ALTER TABLE user ADD COLUMN ".$columnName." ENUM('Yes', 'No') default 'No' AFTER user_type");

            if($q!="" && $c!="")
            {
                $data['listing']=$this->SqlModel->getRecords('*', $this->tblName);
                $listing = array();
                print_r(json_encode(['data'=>$data['listing']]));
                // $data['alert'] = $this->session->flashdata('alert');
                // $this->session->set_flashdata('alert','success');
            }
            else
            {
                $this->session->set_flashdata('alert','error');
            }                
      }

      // ******** End Category Level One ********

      // For Category Level Two

      if($elementId == 'addCatLvl2'){    

    $myData = array(
        'book_category_id' => $catSelected,
        'book_subCategory_title' 	=> htmlspecialchars($_POST['action'])
        );
        
        
        $q = $this->SqlModel->insertRecord($this->books_sub_categories, $myData); 

        if($q!="")
        {
            $data['listing']=$this->SqlModel->getJoinRecords('books_sub_categories.sub_cat_id,books_sub_categories.book_subCategory_title,book_category.book_category_title',$this->tblName, $this->books_sub_categories, "book_category.book_category_id=books_sub_categories.book_category_id");
            $listing = array();
            print_r(json_encode(['data'=>$data['listing']]));
            // print_r(json_encode(['data'=>$data['listing']]));
            // foreach ($data['listing'] as $value) {
            //     $abc = array($value["sub_cat_id"],$value["book_subCategory_title"], $value["book_category_title"]);
            //     array_push($listing, $abc);
            // }

            // for ($x = 0; $x <= count($listing)-1; $x++) {
                
            //         echo "<tr>
            //                 <td>".$listing[$x][0]."</td>
            //                 <td>".$listing[$x][1]."</td>
            //                 <td>".$listing[$x][2]."</td>
            //                 <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirmTwo' id=".$listing[$x][0]." onClick='myCatTwo(this.id)'>Update</button></td>
            //                 <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteTwo' id=".$listing[$x][0]." onClick='myIdTwo(this.id)'>Delete</button></td>                                
            //             </tr>";
            // } 
            // $data['alert'] = $this->session->flashdata('alert');
            // $this->session->set_flashdata('alert','success');
        }
        else
        {
            $this->session->set_flashdata('alert','error');
        }                   
  }

      // ********End Category Level Two***************
    }
}

    public function Update(){
        if(isset($_POST['updateId'])){
                $data['tbl_data'] = $this->SqlModel->getSingleRecord($this->tblName, array($this->pKey=>$_POST['updateId']));
                   $newdata = array(
                        'cat1Id'  => $data['tbl_data']["book_category_id"],
                        'cat1Title'     => $data['tbl_data']["book_category_title"]
                    );
        // $this->session->set_userdata($newdata);
        // $title = $this->session->userdata("cat1Title");
        $title = $newdata['cat1Title'];
        echo json_encode($title);
        }
    }


    public function updatedVal(){
        if(isset($_POST['updateId'])){
            echo $_POST['updateId'], $_POST['updatedValue'];
            // data is updated value last array is where to change..
            $updatedData =  array(
                'book_category_id'  => $_POST['updateId'] ,
                'book_category_title'     => $_POST['updatedValue']
            );
            $q = $this->SqlModel->updateRecord($this->tblName, $updatedData, array($this->pKey=>$_POST['updateId']));
            $this->fetchingRecord($q);
        }
    }

    public function Delete(){
        if(isset($_POST['deleteId'])){
            echo $_POST['deleteId'];
            $q = $this->SqlModel->deleteRecord($this->tblName , array($this->pKey=>$_POST['deleteId']));	
            $this->fetchingRecord($q);
     }
    }

    

    public function fetchingRecord($q=true){
        if($q!="")
        {
            $data['listing']=$this->SqlModel->getRecords('*', $this->tblName);
            $listing = array();
            print_r(json_encode(['data'=>$data['listing']]));
        }
        else
        {
            $this->session->set_flashdata('alert','error');
        }                
    }

    

















}


?>






