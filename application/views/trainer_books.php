
<?php 
$main_category = $this -> session -> userdata('main_category');
$sub_category = $this -> session -> userdata('sub_category');  
// $course_id = $this -> session -> userdata('course_id');  	
// echo " Main cat =".$main_category." Sub cat =".$sub_category.'content_id ='.$_GET["book_category"] ;
?>

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
		  <li><a href="<?php echo $this->config->base_url(); ?>">Training</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">Category Training</li>
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">Courses</li>
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">Content</li>
		</ol>
	</div>
</section>
    <?php

 $book_category_id = 0;

 if(isset($_GET["book_category"]))
 {
 	$book_category_id = $_GET["book_category"];
 }

 $whereArray3 =array( 'content_id' => $_GET["book_category"],'book_status' => 1, 'sub_cat_id' => $sub_category,'book_category_id' => $main_category);

 $book_category=$this->general_model->getRowDynamic('trainer_books',$whereArray3);
 if($book_category)
 {
  ?>
  <div class="container gallery-container">

	  <h1><?php echo $book_category["book_title"]; ?></h1>
	  
	  <div class="tz-gallery">
  
		  <div class="row">

		  	 <?php 
			  
        $whereArray2 =array('book_status' => 1,'content_id' => $book_category_id,'sub_cat_id' => $sub_category,'book_category_id' => $main_category);

        $books=$this->general_model->getResultDynamic('trainer_books',$whereArray2);
        if($books) {
        foreach($books as $book){

         ?>
  
			  <div class="col-sm-6 col-md-2" >
				  <div class="thumbnail">
					  <a  onClick="call('<?php echo base_url().$book["book_file_path"]  ?>')"  
					  target="_blank"
					  href="http://dev.softkodes.com/optimisticfuture/newtab"
    					id="df_manual_custom" >
						  <img src="<?php echo base_url().$book["book_image"] ?>"  alt="<?php echo $book["book_title"] ?>">
					  </a>
					  <div class="caption" style="height: 120px !important">
						  <h4><?php echo $book["book_title"] ?></h4>
					  </div>
				  </div>
			  </div>
			<?php } } ?>
  
		  </div>
  
	  </div>
  
  </div>
  <?php }
  
  // Setting up main and sub data to session.
  $autoload['libraries'] = array('session');
  $the_session = array("course_id" => $_GET["book_category"]);
  $this -> session -> set_userdata($the_session);
  ?>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
	  baguetteBox.run('.tz-gallery');
	  function call(val) {
		localStorage.setItem("sourcePdf", JSON.stringify(val));
	  }
  </script>