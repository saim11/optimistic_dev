
  
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

 if(isset($_GET["book_category"]))
 {
 	$book_category_id = $_GET["book_category"];
 }

 $whereArray3 =array('book_category_status' => 1,'book_category_id' => $book_category_id);

 $book_category=$this->general_model->getRowDynamic('book_category',$whereArray3);
 if($book_category)
 {
  ?>
  <div class="container gallery-container">

	  <h1><?php echo $book_category["book_category_title"]; ?></h1>
	  
	  <div class="tz-gallery">
  
		  <div class="row">

		  	 <?php 
		  	
        $whereArray2 =array('book_status' => 1,'book_category' => $book_category_id);

        $books=$this->general_model->getResultDynamic('book',$whereArray2);
        if($books) {
        foreach($books as $book){

         ?>
  
			  <div class="col-sm-6 col-md-3">
				  <div class="thumbnail">
					  <a class="lightbox _df_custom" target="_blank" href="<?php echo base_url().$book["book_file_path"]  ?>"
    id="df_manual_custom" >
						  <img src="<?php echo base_url().$book["book_image"] ?>" alt="<?php echo $book["book_title"] ?>">
					  </a>
					  <div class="caption">
						  <h3><?php echo $book["book_title"] ?></h3>
						 <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>-->
					  </div>
				  </div>
			  </div>
			<?php } } ?>
  
		  </div>
  
	  </div>
  
  </div>
  <?php } ?>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
	  baguetteBox.run('.tz-gallery');
  </script>