
<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Trainingthree extends CI_Controller {
    public $tblName = 'book_category';
    public $course_list = 'course_list';
    public $books_sub_categories = 'books_sub_categories';
    public $pKey = "course_id";





    public function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
    
    public function index(){
        echo "hello world";

    }
    
    public function add(){
        if(isset($_POST['action'])){
            $listing = array();
            $elementId = $_POST['elementId'];
            isset($_POST['catSelectedA']) ? ($catSelectedA = $_POST['catSelectedA']):($catSelected="");
            isset($_POST['catSelectedB']) ? ($catSelectedB = $_POST['catSelectedB']):($catSelected="");
    
        // For Category Level One
            if($elementId == 'addCatLvl3'){
               
                $myData = array(
                    'book_category_id' => $catSelectedA,
                    'sub_cat_id' => $catSelectedB,
                    'course_title' => htmlspecialchars($_POST['action'])
                    );
                    
                    
                    $q = $this->SqlModel->insertRecord($this->course_list, $myData); 
                    $this->fetchingRecordThree($q);             
                                       
              }
            
                  // ********End Category Level Two***************
                }
                else{
                    echo "Nothing added!";
                }
    }






    public function Update(){
        // echo $_POST['subCatUpdateId'];
        if(isset($_POST['subCatUpdateId'])){
            $data['tbl_data'] = $this->SqlModel->getSingleRecord($this->course_list, array($this->pKey=>$_POST['subCatUpdateId']));
            $newdata = array(
                'cat3Id' => $data['tbl_data']["course_id"],
                'cat3Title' => $data['tbl_data']["course_title"]
            );
        $this->session->set_userdata($newdata);
        $title = $this->session->userdata("cat3Title");
        echo json_encode($title);
        }
    }


    public function updatedVal(){
        if(isset($_POST['updateId'])){
            echo $_POST['updateId'], $_POST['updatedValue'];
            // data is updated value last array is where to change..
            $updatedData =  array(
                'course_id'  => $_POST['updateId'] ,
                'course_title'     => $_POST['updatedValue']
            );
            $q = $this->SqlModel->updateRecord($this->course_list, $updatedData, array($this->pKey=>$_POST['updateId']));
            $this->fetchingRecordThree($q);
        }
    }

    

    

    
    public function fetchingRecordThree($q=true){

        if($q!=""){
            $data['listing']=$this->SqlModel->getDoubleJoinRecords('course_list.course_id, books_sub_categories.book_subCategory_title,course_list.course_title, book_category.book_category_title ',$this->course_list, $this->books_sub_categories, "books_sub_categories.sub_cat_id=course_list.sub_cat_id",$this->tblName,"book_category.book_category_id=course_list.book_category_id");
            $listing = array();
            foreach ($data['listing'] as $value) {
                $abc = array($value["course_id"],$value["course_title"],$value["book_subCategory_title"], $value["book_category_title"]);
                array_push($listing, $abc);
                }
            
                    for ($x = 0; $x <= count($listing)-1; $x++) {
                                echo "<tr>
                                        <td>".$listing[$x][0]."</td>
                                        <td>".$listing[$x][1]."</td>
                                        <td>".$listing[$x][2]."</td>
                                        <td>".$listing[$x][3]."</td>
                                        <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirmThree' id=".$listing[$x][0]." onClick='myCatThree(this.id)'>Update</button></td>
                                        <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteThree' id=".$listing[$x][0]." onClick='myIdThree(this.id)'>Delete</button></td>                                
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


    public function Delete(){
        if(isset($_POST['deleteId'])){
            $q = $this->SqlModel->deleteRecord($this->course_list , array($this->pKey=>$_POST['deleteId']));
            $this->fetchingRecordThree($q);
    }
    }
    
}


?>






