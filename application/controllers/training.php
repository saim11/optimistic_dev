
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
            $abc = array($value["book_category_id"],$value["book_category_title"],$value["book_category_image"], $value["book_category_status"]);
            array_push($listing, $abc);
        }
        $data = array(
            'book_category_title' 	=> htmlspecialchars($_POST['action'])
            );

            $q = $this->SqlModel->insertRecord($this->tblName, $data); 

            if($q!="")
            {
                $data['listing']=$this->SqlModel->getRecords('*', $this->tblName);
                $listing = array();
                foreach ($data['listing'] as $value) {
                    $abc = array($value["book_category_id"],$value["book_category_title"],$value["book_category_image"], $value["book_category_status"]);
                    array_push($listing, $abc);
                }

                for ($x = 0; $x < count($listing); $x++) {
                    
                        echo "<tr>
                                <td>".$listing[$x][0]."</td>
                                <td>".$listing[$x][1]."</td>
                                <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirm' id=".$listing[$x][0]." onClick='myCat(this.id)'>Update</button></td>
                                <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete' id=".$listing[$x][0]." onClick='myId(this.id)'>Delete</button></td>                                
					        </tr>";
                } 
                // echo json_encode($listing);
                $data['alert'] = $this->session->flashdata('alert');
                $this->session->set_flashdata('alert','success');
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
            foreach ($data['listing'] as $value) {
                $abc = array($value["sub_cat_id"],$value["book_subCategory_title"], $value["book_category_title"]);
                array_push($listing, $abc);
            }

            for ($x = 0; $x <= count($listing)-1; $x++) {
                
                    echo "<tr>
                            <td>".$listing[$x][0]."</td>
                            <td>".$listing[$x][1]."</td>
                            <td>".$listing[$x][2]."</td>
                            <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirmTwo' id=".$listing[$x][0]." onClick='myCatTwo(this.id)'>Update</button></td>
                            <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteTwo' id=".$listing[$x][0]." onClick='myIdTwo(this.id)'>Delete</button></td>                                
                        </tr>";
            } 
            $data['alert'] = $this->session->flashdata('alert');
            $this->session->set_flashdata('alert','success');
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
        $this->session->set_userdata($newdata);
        $title = $this->session->userdata("cat1Title");
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
            foreach ($data['listing'] as $value) {
                $abc = array($value["book_category_id"],$value["book_category_title"],$value["book_category_image"], $value["book_category_status"]);
                array_push($listing, $abc);
            }

            for ($x = 0; $x < count($listing); $x++) {
                
                    echo "<tr>
                            <td>".$listing[$x][0]."</td>
                            <td>".$listing[$x][1]."</td>
                            <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirm' id=".$listing[$x][0]." onClick='myCat(this.id)'>Update</button></td>
                            <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete' id=".$listing[$x][0]." onClick='myId(this.id)'>Delete</button></td>                                
                        </tr>";
            } 
            // echo json_encode($listing);
            $data['alert'] = $this->session->flashdata('alert');
            $this->session->set_flashdata('alert','success');
        }
        else
        {
            $this->session->set_flashdata('alert','error');
        }                
    }

    

















}


?>






