<?php 
$autoload['libraries'] = array('session');
$the_session = array("main_category" => $_GET["book_category"]);
$this -> session -> set_userdata($the_session);

// session_start(); 
// $_SESSION['main_category']= $_GET["book_category"];
// $this->session->unset_userdata('main_category');
// echo $this -> session -> userdata('main_category'); 
?>
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	  <link rel="stylesheet" href="/resources-Images/resource-main.css">


<script src="<?php echo FRONTEND_ASSETS;?>js/pdfobject.js"></script>
<section class=" Head_Titles">
	<div class="container">
		<h1>Resources</h1>
		<ol class="breadcrumb">
		  <li><a href="<?php echo $this->config->base_url(); ?>">Trainer</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">Trainer Category</li>
		</ol>
	</div>
</section>
<section class=" Welcome_Classic">
	<div class="container">
		
<div class="container gallery-container">

    <div class="tz-gallery">

        <div class="row">
              <?php
              $whereArray=array('book_category_id' => $_GET["book_category"],'book_category_status' => 1); 
              $book_categorys=$this->general_model->getResultDynamic('books_sub_categories',$whereArray);
        if($book_categorys) {
            foreach($book_categorys as $book_category){
         ?>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                               
                    <!-- <a href="<?php echo  base_url().'nested-category-books.html?book_sub_category='.$book_category["sub_cat_id"]; ?>">
                        <img src="<?php echo base_url().$book_category["book_category_image"] ?>" alt="" >
                    </a> -->
                    <a href="<?php echo  base_url().'course_list.html?book_sub_category='.$book_category["sub_cat_id"]; ?>">
                        <img src="<?php echo base_url().$book_category["book_category_image"] ?>" alt="" >
                    </a>
                </div>
                <div class="caption">
                        <h4><?php echo $book_category["book_subCategory_title"];  $_GET["book_category"]?></h4>
                        <h1><?php $_GET["book_category"] ?></h1>
                </div>
            </div>

            <?php } }
            ?>            
        </div>

    </div>

</div>



	</div>
</section>
<!-- Welcome_Classic Closed -->
<!-- Modal -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
	  baguetteBox.run('.tz-gallery');
  </script>