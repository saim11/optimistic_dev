<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Trainingfive extends CI_Controller {
    public $tblName = 'book_category';
    public $course_list = 'course_list';
    public $trainer_books = 'trainer_books';
    public $books_sub_categories = 'books_sub_categories';
    public $pKey = "book_id";
    public $file = "";



    public function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
    
    public function index(){
       
    }
    
    

    public function sub_cat_fetcher(){
        // echo $_POST['main_cat_id'];
        if(isset($_POST['main_cat_id'])){
            $id = 'your id';
            $this->db->select("*");
            $this->db->from($this->books_sub_categories);
            $this->db->where('book_category_id',$_POST['main_cat_id']);
            $query = $this->db->get();
            if($query){
                echo "success" ;
            }
            else{
                echo "failed!!";
            }
            // echo $_POST['main_cat_id'];
            $myData =$query->result_array();
            $listing = array();
            foreach ($myData as $value) {
                $abc = array($value["sub_cat_id"],$value["book_subCategory_title"]);
                array_push($listing, $abc);
                }
            
                    echo "<option value='select'>------Select Child Category------</option>";
                    for ($x = 0; $x <= count($listing)-1; $x++) {
                        if(count($listing) == 0){
                            echo "<option value='empty'>No Record Found!</option>";
                        }
                        else{
                            echo "<option value='".$listing[$x][0]."'>".$listing[$x][1]."</option>";
                        }
                    } 

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
            $this->fetchingRecordFive($q);
        }
    }




    public function fetchingRecordFive($q=true){

        if($q!=""){
            $data['listing']=$this->SqlModel->getDoubleJoinRecords('trainer_books.book_id, books_sub_categories.book_subCategory_title,trainer_books.book_title, book_category.book_category_title ',$this->trainer_books, $this->books_sub_categories, "books_sub_categories.sub_cat_id=trainer_books.sub_cat_id",$this->tblName,"book_category.book_category_id=trainer_books.book_category_id");
            print_r(json_encode(['data'=>$data['listing']]));
            // $listing = array();
            // foreach ($data['listing'] as $value) {
            //     $abc = array($value["book_id"],$value["book_title"],$value["book_subCategory_title"], $value["book_category_title"]);
            //     array_push($listing, $abc);
            //     }
            //         for ($x = 0; $x <= count($listing)-1; $x++) {
            //                     echo "<tr>
            //                             <td>".$listing[$x][0]."</td>
            //                             <td>".$listing[$x][1]."</td>
            //                             <td>".$listing[$x][2]."</td>
            //                             <td>".$listing[$x][3]."</td>
            //                             <td><button type='button' class='btn btn-success' id=".$listing[$x][0]." onClick='myIdFive(this.id)'><a href=".base_url()."manage/pages/control/0/50/".$listing[$x][0].">Update</a></button></td>                                
            //                             <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteFive' id= ".$listing[$x][0]." onClick='myIdFive(this.id)'>Delete</button></td>
            //                         </tr>";
            //             }
            //             $this->session->set_flashdata('alert','deletesuccess');
            //             redirect(base_url().'manage/'.$this->controller.'/control/'.$parent_id.'/49','location'); 
            }
            else
                {
                    $this->session->set_flashdata('alert','error');
                }               
        
    }


    public function Delete(){
        if(isset($_POST['deleteId'])){
            $filePathToUnlink = $this->SqlModel->getSingleField('book_file_path',$this->trainer_books,array($this->pKey=>$_POST['deleteId']));
            $result = unlink(FCPATH.'/'.$filePathToUnlink);
            if($result){
                $q = $this->SqlModel->deleteRecord($this->trainer_books , array($this->pKey=>$_POST['deleteId']));
                $this->fetchingRecordFive($q);
            }
    }
    }
    
}

?>
