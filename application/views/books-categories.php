	  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	  <link rel="stylesheet" href="/resources-Images/resource-main.css">


<script src="<?php echo FRONTEND_ASSETS; ?>js/pdfobject.js"></script>
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
<section class="">
	<div class="">


<div class="">

    <div class="">

        <div class="body-content">
        <div class="body_content_sub">
            <div class="row resources_pagec">

              <?php
// $this->session->unset_userdata('main_category');
// $this->session->sess_destroy(userdata('main_category'));
$match = "";
if ($this->session->userdata('user_id')) {
 $pageData['data'] = $this->SqlModel->getSingleRecord('user', array('user_id' => $this->session->userdata('user_id')));
 if ($pageData['data']['Individual_Support'] == 'Yes') {
  $match = 'Individual Support';

  $whereArray     = array('book_category_status' => 1, 'book_category_title' => $match);
  $book_categorys = $this->general_model->getResultDynamic('book_category', $whereArray);

  if ($book_categorys) {
   foreach ($book_categorys as $book_category) {
    ?>


            <div class="col-sm-6 col-md-3">
            <br/><br/>
            <div class="thumbnail">
                    <a href="<?php echo base_url() . 'trainer-sub-categories.html?book_category=' . $book_category["book_category_id"]; ?>">
                        <img src="<?php echo base_url() . $book_category["book_category_image"] ?>" alt="">
                    </a>
                    <div class="caption">
                        <!-- <h3><?php echo $book_category["book_category_title"]; ?></h3> -->
                    </div>
                </div>
                <br/><br/>
            </div>


            <?php }}

 }
 if ($pageData['data']['Security_Operations'] == 'Yes') {
  $match = 'Security Operations';
// Fetching each book
  $whereArray     = array('book_category_status' => 1, 'book_category_title' => $match);
  $book_categorys = $this->general_model->getResultDynamic('book_category', $whereArray);

  if ($book_categorys) {
   foreach ($book_categorys as $book_category) {
    ?>
            <div class="col-sm-6 col-md-3">
            <br/><br/>
            <div class="thumbnail">
                    <a href="<?php echo base_url() . 'trainer-sub-categories.html?book_category=' . $book_category["book_category_id"]; ?>">
                        <img src="<?php echo base_url() . $book_category["book_category_image"] ?>" alt="">
                    </a>
                    <div class="caption">
                        <!-- <h3><?php echo $book_category["book_category_title"]; ?></h3> -->
                    </div>
                </div>
                <br/><br/>
            </div>


            <?php }}
 }
 if ($pageData['data']['Emergency_First_Aid'] == 'Yes') {
  $match = 'Emergency First Aid';
// Fetching each book
  $whereArray     = array('book_category_status' => 1, 'book_category_title' => $match);
  $book_categorys = $this->general_model->getResultDynamic('book_category', $whereArray);

  if ($book_categorys) {
   foreach ($book_categorys as $book_category) {
    ?>


            <div class="col-sm-6 col-md-3">
            <br/><br/>
            <div class="thumbnail">
                    <a href="<?php echo base_url() . 'trainer-sub-categories.html?book_category=' . $book_category["book_category_id"]; ?>">
                        <img src="<?php echo base_url() . $book_category["book_category_image"] ?>" alt="">
                    </a>
                    <div class="caption">
                        <!-- <h3><?php echo $book_category["book_category_title"]; ?></h3> -->
                    </div>
                </div>
                <br/><br/>
            </div>

            <?php }}
 }
 if ($pageData['data']['Early_Childhood_and_Education'] == 'Yes') {
  $match = 'Early Childhood';
// Fetching each book
  $whereArray     = array('book_category_status' => 1, 'book_category_title' => $match);
  $book_categorys = $this->general_model->getResultDynamic('book_category', $whereArray);

  if ($book_categorys) {
   foreach ($book_categorys as $book_category) {
    ?>

            <div class="col-sm-6 col-md-3">
            <br/><br/>
            <div class="thumbnail">
                    <a href="<?php echo base_url() . 'trainer-sub-categories.html?book_category=' . $book_category["book_category_id"]; ?>">
                        <img src="<?php echo base_url() . $book_category["book_category_image"] ?>" alt="">
                    </a>
                    <div class="caption">
                        <!-- <h3><?php echo $book_category["book_category_title"]; ?></h3> -->
                    </div>
                </div>
                <br/><br/>
            </div>

            <?php }}
 }
}

// $whereArray=array('book_category_status' => 1, 'book_category_title' => $match);
// $book_categorys=$this->general_model->getResultDynamic('book_category',$whereArray);

// if($book_categorys) {
//     foreach($book_categorys as $book_category){
//  ?>

        <!-- //     <div class="col-sm-6 col-md-3">
        //     <div class="thumbnail">
        //             <a href="<?php echo base_url() . 'trainer-sub-categories.html?book_category=' . $book_category["book_category_id"]; ?>">
        //                 <img src="<?php echo base_url() . $book_category["book_category_image"] ?>" alt="">
        //             </a>
        //             <div class="caption">
        //                 <h3><?php echo $book_category["book_category_title"]; ?></h3>
        //             </div>
        //         </div>
        //     </div> -->

        <!-- //     <?php //} } ?> -->


        </div>

    </div>

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