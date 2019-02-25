
	  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	  <link rel="stylesheet" href="/resources-Images/resources-page.css">
  

    <script type="text/javascript">

	var dFlipLocation = "<?php echo FRONTEND_ASSETS;?>DFLIP";
</script>
<script src="<?php echo FRONTEND_ASSETS;?>DFLIP/js/dflip.js"></script>
<script type="text/javascript">
	
	DFLIP.defaults.hideControls = "download,share";
</script>
    <!-- Flipbook StyleSheet -->
    <link href="<?php echo FRONTEND_ASSETS;?>DFLIP/css/dflip.css" rel="stylesheet" type="text/css">

    <!-- Icons Stylesheet -->
    <link href="<?php echo FRONTEND_ASSETS;?>DFLIP/css/themify-icons.css" rel="stylesheet" type="text/css">
  
  
<section class=" Head_Titles">
	<div class="container">
		<h1>Books</h1>
		<ol class="breadcrumb">
		  <li><a href="<?php echo $this->config->base_url(); ?>">Home</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">Books</li>
		</ol>
	</div>
</section>
    <?php

 $book_category_id = 0;

 if(isset($_GET["book_sub_category"]))
 {
 	$book_category_id = $_GET["book_sub_category"];
 }

 $whereArray3 =array('course_status' => 1);

 $book_category=$this->general_model->getRowDynamic('course_list',$whereArray3);
 if($book_category)
 {
  ?>
  <div class="container gallery-container">
  <h1> List of Courses</h1>

	  <!-- <h1><?php echo $book_category["course_title"]; ?></h1> -->
	  
	  <div class="tz-gallery">
  
		  <div class="row">

               <?php 
		$main_category = $this -> session -> userdata('main_category');
        $whereArray2 = array('course_status' => 1, 'sub_cat_id' => $book_category_id,'book_category_id' => $main_category);

        $course = $this->general_model->getResultDynamic('course_list',$whereArray2);
        if($course) {
        foreach($course as $book){

         ?>
			   <div class="col-sm-6 col-md-1">
                <div class="thumbnail">
                    <a href="<?php echo  base_url().'course_list.html?book_category='.$book["course_id"] ?>">
                        <img src="<?php echo base_url().$book["course_image"] ?>" alt="" >
                    </a>
                </div>
                <div class="caption">
                        <h4><?php echo $book["course_title"]; ?></h4>
                </div>
				
            </div>
            <?php } } 
            // Setting up main and sub data to session.
            $autoload['libraries'] = array('session');
            $the_session = array("sub_category" => $book_category_id);
            $this -> session -> set_userdata($the_session);
            ?>
  
		  </div>
  
	  </div>
  
  </div>
  <?php } ?>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
	  baguetteBox.run('.tz-gallery');
	  function call(val) {
		localStorage.setItem("sourcePdf", JSON.stringify(val));
	  }
  </script>