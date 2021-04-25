 <!-- Header files -->
        <link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/style.css" rel="stylesheet">

<!-- End header Files -->

<?php
$main_category = $this->session->userdata('main_category');
$sub_category  = $this->session->userdata('sub_category');
// echo "Main cat".$main_category, "Sub cat".$sub_category."Course_id".$_GET["book_category"];
?>

<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="/resources-Images/resource-main.css">
<style>
.card {
    border:none;
}
</style>


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
            <div class="tz-gallery">
                <div class="tz-gallery">
                    <div class="d-flex p-3 bg-secondary text-white ">
                        <h2 class="text-white"> Unit Segments</h2>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <?php
                        $book_categorys = $this->SqlModel->getRecords('*', 'training_content','','ASC',array('type'=>'trainer'));

                        if ($book_categorys) {
                        foreach ($book_categorys as $book_category) {
                            if( $book_category['content_id']==1 || $book_category['content_id']==3 ){
                        ?>
                        <div class="col-sm-6 col-md-3">
                            <div class="card" >
                                <a
                                    href="<?php echo base_url() . 'student_books.html?book_category=' . $book_category["content_id"]; ?>">
                                    <img src="<?php echo base_url() . $book_category["content_image"] ?>"
                                        class="card-img-top" width="170" height="170" alt="">
                                </a>
                                <div class="card-body">
                                    <h6 class="card-body-title"><?php echo $book_category["content_title"]; ?></h6>
                                </div>
                            </div>
                            <br /><br /><br />
                        </div>

                        <?php }}}
// Setting up main and sub data to session.

// $autoload['libraries'] = array('session');
// $the_session = array("course_id" => $_GET["book_category"]);
// $this -> session -> set_userdata($the_session);
$autoload['libraries'] = array('session');
$the_session           = array("sub_category" => $_GET["book_sub_category"]);
$this->session->set_userdata($the_session);

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