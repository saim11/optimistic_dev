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
	  <link rel="stylesheet" href="/resources-Images/resource-main.css">


<script src="<?php echo FRONTEND_ASSETS;?>js/pdfobject.js"></script>




<div class="clearfix"></div>

<!--our satisfied customer Start -->
<div class="osc">
  <div class="ocs_sub"> 
    <!--Carousel Wrapper-->
    	<img src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/slider_resources.jpg" class="img-fluid" alt="Responsive image">
    <!--/.Carousel Wrapper--> 
  </div>
  <!-- ocs_sub--> 
</div>
<br/><br />

<!--our satisfied customer End --> 

<!--CONTENT AREA START--> 

	<div class="body_content">
		<div class="body_content_sub">

<div class="row resources_pagec">
        
    <?php 
            $user_type = $user_type = $this->SqlModel->getSingleField('user_type', 'user',array('user_id'=>$this->session->userdata('user_id')));
            if($this->session->userdata('user_id') && $user_type == 'student')
            {
                $pageData['data'] = $this->SqlModel->getSingleRecord('user', array('user_id'=>$this->session->userdata('user_id')));
                $book_categories= $this->SqlModel->getRecords('*', 'book_category', '', 'ASC');
                foreach($book_categories as $index=>$c_item){
                    if(isset($pageData['data'][$c_item['book_category_title']]) && $pageData['data'][$c_item['book_category_title']] == 'Yes'){
                        $book_category = $c_item;
                        ?>
                         <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                    <a href="<?php echo  base_url().'student_books_units.html?book_category='.$book_category["book_category_id"]; ?>">
                        <img src="<?php echo base_url().$book_category["book_category_image"] ?>" alt="">
                    </a>
                    <div class="caption">
                        <h1><?php //echo $book_category["book_category_title"]; ?></h1>
                    </div>
                </div>
            </div>
        <?php
                    }
                } 
            }elseif($this->session->userdata('user_id') && $user_type == 'trainer'){
                $pageData['data'] = $this->SqlModel->getSingleRecord('user', array('user_id'=>$this->session->userdata('user_id')));
                $book_categories= $this->SqlModel->getRecords('*', 'book_category', '', 'ASC');
                foreach($book_categories as $index=>$c_item){
                        ?>
                         <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                    <a href="<?php echo  base_url().'student_books_units.html?book_category='.$c_item["book_category_id"]; ?>">
                        <img src="<?php echo base_url().$c_item["book_category_image"] ?>" alt="">
                    </a>
                    <div class="caption">
                        <h1><?php //echo $book_category["book_category_title"]; ?></h1>
                    </div>
                </div>
            </div>
            <?
            }}?>  
        </div><!-- body_content_sub--> 
	</div><!-- body_content--> 

<!--CONTENT AREA END--> 

<!-- Modal -->



  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>baguetteBox.run('.tz-gallery');</script>