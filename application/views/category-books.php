 <!-- Header files -->
        <!-- Animate.css -->
        <!-- <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>css/animate.css">
        <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>steps/css/normalize.css">
        <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>steps/css/jquery.steps.css"> -->
        <!-- All pages css -->
        <!-- <link href="<?php echo FRONTEND_ASSETS; ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/style-student-profile-form.css" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/styles.css?2" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/jquery.fancybox.css?1" rel="stylesheet">
		<link href="<?php echo FRONTEND_ASSETS; ?>css/media_queries.css" rel="stylesheet"> -->

		<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/style.css" rel="stylesheet">
		<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/bootnavbar.css" rel="stylesheet">
		<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/carouseller.css" rel="stylesheet">
		<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/glyphicons.css" rel="stylesheet">
		<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/responsive.css" rel="stylesheet">
		<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/style.css" rel="stylesheet">


    <!-- End header Files -->
	  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	  <!-- <link rel="stylesheet" href="/resources-Images/resources-page.css"> -->


    <script type="text/javascript">

	var dFlipLocation = "<?php echo FRONTEND_ASSETS; ?>DFLIP";
</script>
<script src="<?php echo FRONTEND_ASSETS; ?>DFLIP/js/dflip.js"></script>
<script type="text/javascript">

	DFLIP.defaults.hideControls = "download,share";
</script>
    <!-- Flipbook StyleSheet -->
    <link href="<?php echo FRONTEND_ASSETS; ?>DFLIP/css/dflip.css" rel="stylesheet" type="text/css">

    <!-- Icons Stylesheet -->
    <link href="<?php echo FRONTEND_ASSETS; ?>DFLIP/css/themify-icons.css" rel="stylesheet" type="text/css">



<div class="clearfix"></div>

<!--our satisfied customer Start -->
<div class="osc">
  <div class="ocs_sub">
    <!--Carousel Wrapper-->
    	<img src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/slider_books.jpg" class="img-fluid" alt="Responsive image">
    <!--/.Carousel Wrapper-->
  </div>
  <!-- ocs_sub-->
</div>
<!-- osc-->
<!--our satisfied customer End -->

<!--CONTENT AREA START-->

	<div class="body_content">
		<div class="body_content_sub">
<br>
<?php

$book_category_id = 0;

if (isset($_GET["book_category"])) {
 $book_category_id = $_GET["book_category"];
}

$whereArray3 = array('book_category_status' => 1, 'book_category_id' => $book_category_id);

$book_category = $this->general_model->getRowDynamic('book_category', $whereArray3);
if ($book_category && $this->session->userdata('user_id')) {
 ?>
  <div class="container gallery-container">
  <br /><br /><br />

	  <h1 style="font-size:22px;font-weight:bolder"><?php echo $book_category["book_category_title"]; ?></h1>

	  <div class="tz-gallery">

		  <div class="row">

		  	 <?php
$whereArray2 = array('book_status' => 1, 'book_category_id' => $book_category_id);

 $books = $this->general_model->getResultDynamic('book', $whereArray2);
 if ($books) {
  foreach ($books as $book) {
   $str = strlen($book["book_title"]) > 50 ? substr($book["book_title"], 0, 50) . "..." : $book["book_title"];

   ?>

			  <div class="col-sm-6 col-md-3">
				  <div class="thumbnail">
					  <a  onClick="call('<?php echo base_url() . $book["book_file_path"] ?>')"
					  target="_blank"
					  href="http://of.edu.au/newtab" id="df_manual_custom" >
						  <img src="<?php echo base_url() . $book["book_image"] ?>"  alt="<?php echo $book["book_title"] ?>" style="height:100%;width:100%" >
					  </a>
					  <div class="caption">
						  <h6><?php echo $str //$book["book_title"]            ?></h6>
					  </div>
				  </div>
			  </div>
			<?php }
 }?>

		  </div>

	  </div>

  </div>
  <?php } else {
 redirect('login.html');
}
?>



        </div><!-- body_content_sub-->
	</div><!-- body_content-->

<!--CONTENT AREA END-->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
	  baguetteBox.run('.tz-gallery');
	  function call(val) {
		localStorage.setItem("sourcePdf", JSON.stringify(val));
	  }
  </script>