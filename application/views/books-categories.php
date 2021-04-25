	  
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
            $user_type = $user_type = $this->SqlModel->getSingleField('user_type', 'user',array('user_id'=>$this->session->userdata('user_id')));
            if($this->session->userdata('user_id') && $user_type == 'trainer')
            {
                $pageData['data'] = $this->SqlModel->getSingleRecord('user', array('user_id'=>$this->session->userdata('user_id')));
                $book_categories= $this->SqlModel->getRecords('*', 'book_category', '', 'ASC');
                foreach($book_categories as $index=>$c_item){
                    if(isset($pageData['data'][$c_item['book_category_title']]) && $pageData['data'][$c_item['book_category_title']] == 'Yes'){
                        $book_category = $c_item;
                        ?>
                         <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                    <a href="<?php echo  base_url().'trainer-sub-categories.html?book_category='.$book_category["book_category_id"]; ?>">
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
            }
        ?>
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