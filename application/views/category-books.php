  
	  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	  <!-- <link rel="stylesheet" href="/resources-Images/resources-page.css"> -->
  

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
		  <li class="active"> Books </li>
		</ol>
	</div>
</section>
    <?php

 $book_category_id = 0;

 if(isset($_GET["book_category"]) )
 {
 	$book_category_id = $_GET["book_category"];
 }

 $whereArray3 =array('book_category_status' => 1,'book_category_id' => $book_category_id);

 $book_category=$this->general_model->getRowDynamic('book_category',$whereArray3);
 if($book_category && $this->session->userdata('user_id'))
 {
  ?>
  <div class="container gallery-container">

	  <h1><?php echo $book_category["book_category_title"]; ?></h1>
	  
	  <div class="tz-gallery">
  
		  <div class="row">

		  	 <?php 
        $whereArray2 =array('book_status' => 1,'book_category_id' => $book_category_id);

        $books=$this->general_model->getResultDynamic('book',$whereArray2);
        if($books) {
			foreach($books as $book){
				$str = strlen($book["book_title"]) > 50 ? substr($book["book_title"],0,50)."..." : $book["book_title"] ;

         ?>
  
			  <div class="col-sm-6 col-md-3">
				  <div class="thumbnail">
					  <a  onClick="call('<?php echo base_url().$book["book_file_path"]  ?>')"  
					  target="_blank"
					  href="http://of.edu.au/newtab" id="df_manual_custom" >
						  <img src="<?php echo base_url().$book["book_image"] ?>"  alt="<?php echo $book["book_title"] ?>" style="height:100%;width:100%" >
					  </a>
					  <div class="caption">
						  <h4><?php echo $str//$book["book_title"] ?></h4>
					  </div>
				  </div>
			  </div>
			<?php } 
		} ?>
  
		  </div>
  
	  </div>
  
  </div>
  <?php }
  else{
	redirect('login.html'); 
  } 
  
  ?>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
	  baguetteBox.run('.tz-gallery');
	  function call(val) {
		localStorage.setItem("sourcePdf", JSON.stringify(val));
	  }
  </script>