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
 <style>
 .title_book{
	 text-align:center;
 }
 </style>

 <!-- End header Files -->
 <?php
$main_category = $this->session->userdata('main_category');
$sub_category  = $this->session->userdata('sub_category');
?>

 <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
 <link rel="stylesheet" href="/resources-Images/resources-page.css">


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


 <div class="osc">
 	<div class="ocs_sub">
 		<!--Carousel Wrapper-->
 		<img src="<?php echo FRONTEND_ASSETS; ?>images/slider_login.jpg" class="img-fluid" alt="Responsive image">
 		<!--/.Carousel Wrapper-->
 	</div>
 	<!-- ocs_sub-->
 </div>
 <!-- osc-->
 <?php

$book_category_id = 0;

if (isset($_GET["book_category"])) {
 $book_category_id = $_GET["book_category"];
}

$whereArray3 = array('content_id' => $_GET["book_category"], 'book_status' => 1, 'sub_cat_id' => $sub_category, 'book_category_id' => $main_category);

$book_category = $this->general_model->getRowDynamic('trainer_books', $whereArray3);
if ($book_category) {
 ?>
 <div class="container gallery-container">
 	<div class="d-flex p-3 bg-secondary text-white ">
 		<h1>Student Books </h1>
 	</div><br /><br />



 	<div class="row">

 		<?php

 $whereArray2 = array('book_status' => 1, 'content_id' => $book_category_id, 'sub_cat_id' => $sub_category, 'book_category_id' => $main_category);
 $books       = $this->general_model->getResultDynamic('trainer_books', $whereArray2);

 if ($books) {
  foreach ($books as $book) {
	$str = strlen($book["book_title"]) > 20 ? substr($book["book_title"], 0, 20) . "..." : $book["book_title"];
   ?>

		<div class="col-sm-6 col-md-3">
				  <div class="thumbnail">
					  <a  onClick="call('<?php echo base_url() . $book["book_file_path"] ?>')"
					  target="_blank"
					  href="http://dev.softkodes.com/optimisticfuture/newtab" id="df_manual_custom" >
						  <img src="<?php echo base_url() . $book["book_image"] ?>"  alt="<?php echo $book["book_title"] ?>" style="height:60%;width:60%" >
					  </a>
					  <div class="caption">
						  <h6 class="title_book"><?php echo $str //$book["book_title"]            ?></h6>
					  </div>
				  </div>
			  </div>
 		<?php }}?>

 	</div>
 	<br /><br />
 	<br /><br />

 </div>

 </div>
 <?php }

// Setting up main and sub data to session.
$autoload['libraries'] = array('session');
$the_session           = array("course_id" => $_GET["book_category"]);
$this->session->set_userdata($the_session);
?>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
 <script>
 	baguetteBox.run('.tz-gallery');

 	function call(val) {
 		localStorage.setItem("sourcePdf", JSON.stringify(val));
 	}
 </script>