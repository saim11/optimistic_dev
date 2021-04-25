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
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- End header Files -->
<?php
$autoload['libraries'] = array('session');
$the_session           = array("main_category" => $_GET["book_category"]);
$this->session->set_userdata($the_session);

// session_start();
// $_SESSION['main_category']= $_GET["book_category"];
// $this->session->unset_userdata('main_category');
// echo $this -> session -> userdata('main_category');
?>
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	  <link rel="stylesheet" href="/resources-Images/resource-main.css">


<style>
.card{
    border:none;
}
.card-body-title{
    text-align:center;
}
</style>      


<script src="<?php echo FRONTEND_ASSETS; ?>js/pdfobject.js"></script>
<div class="clearfix"></div>

<!--our satisfied customer Start -->
<div class="osc">
  <div class="ocs_sub">
    <!--Carousel Wrapper-->
    	<img src="<?php echo FRONTEND_ASSETS; ?>images/slider_login.jpg" class="img-fluid" alt="Responsive image">
    <!--/.Carousel Wrapper-->
  </div>
  <!-- ocs_sub-->
</div>
<!-- osc-->

<section class=" Welcome_Classic">
	<div class="container">

<div class="container gallery-container">
<?php
if(!$this->session->userdata('user_id'))
{
    $this->session->set_userdata('error_from_php', 'Login required !');           // checking is activation code available or not
    redirect('login.html');
}else{
$whereArray     = array('book_category_id' => $_GET["book_category"], 'book_category_status' => 1);
$book_categorys = $this->general_model->getResultDynamic('books_sub_categories', $whereArray);
$cat_id         = $book_categorys[0]['book_category_id'];
$course_main    = $this->general_model->getResultDynamic('book_category', array('book_category_id' => $cat_id));
if (!empty($course_main) || isset($course_main)) {
 ?>
    <div class="d-flex p-3 bg-secondary text-white ">
       <h2 class="text-white"> <?php echo $course_main[0]['book_category_title']; ?></h2>
    </div>
    <?php
}?>

    <div class="tz-gallery">
        <div class="row">
<?php
if ($book_categorys) {
 foreach ($book_categorys as $book_category) {
  ?>

    <div class="col-sm-6 col-md-3">
            <br/><br/><br/>
        <div class="card" >
            <a href="<?php echo base_url() . 'course_list.html?book_sub_category=' . $book_category["sub_cat_id"]; ?>">
                <img src="<?php echo base_url() . $book_category["book_category_image"] ?>" class="card-img-top" src="img_avatar1.png" alt="Card image" width="170" height="170">
            </a>
            <div class="card-body">
            <h6 class="card-body-title">
                    <?php
echo $book_category["book_subCategory_title"];
  $_GET["book_category"];
  ?>
        </h6>
            <h1>
                <?php $_GET["book_category"]?>
            </h1>
        </div>
  </div>
  <br>


            </div>

            <?php }}
}
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