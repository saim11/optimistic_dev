<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Trainingtwo extends CI_Controller {
    public $tblName = 'book_category';
    public $books_sub_categories = 'books_sub_categories';
    public $pKey = "sub_cat_id";





    public function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
    
    public function index(){
    

    }

    public function Update(){
        // echo $_POST['subCatUpdateId'];
        if(isset($_POST['subCatUpdateId'])){
            $data['tbl_data'] = $this->SqlModel->getSingleRecord($this->books_sub_categories, array($this->pKey=>$_POST['subCatUpdateId']));
            $newdata = array(
                'cat2Id' => $data['tbl_data']["sub_cat_id"],
                'cat2Title' => $data['tbl_data']["book_subCategory_title"]
            );
        $this->session->set_userdata($newdata);
        $title = $this->session->userdata("cat2Title");
        echo json_encode($title);
        }
    }


    public function updatedVal(){
        if(isset($_POST['updateId'])){
            echo $_POST['updateId'], $_POST['updatedValue'];
            // data is updated value last array is where to change..
            $updatedData =  array(
                'sub_cat_id'  => $_POST['updateId'] ,
                'book_subCategory_title'     => $_POST['updatedValue']
            );
            $q = $this->SqlModel->updateRecord($this->books_sub_categories, $updatedData, array($this->pKey=>$_POST['updateId']));
            $this->fetchingRecordTwo($q);
        }
    }

    

    

    
    public function fetchingRecordTwo($q=true){
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
                            <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirmTwo' id= ".$listing[$x][0]." onClick='myCatTwo(this.id)'>Update</button></td>
                            <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteTwo' id= ".$listing[$x][0]." onClick='myIdTwo(this.id)'>Delete</button></td>                                
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
            $q = $this->SqlModel->deleteRecord($this->books_sub_categories , array($this->pKey=>$_POST['deleteId']));
            $this->fetchingRecordTwo($q);
    }
    }










    
}


?>






