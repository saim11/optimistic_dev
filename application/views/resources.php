	  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	  <link rel="stylesheet" href="/resources-Images/resource-main.css">


<script src="<?php echo FRONTEND_ASSETS;?>js/pdfobject.js"></script>
<section class=" Head_Titles">
	<div class="container">
		<h1>Resources</h1>
		<ol class="breadcrumb">
		  <li><a href="<?php echo $this->config->base_url(); ?>">Home</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">Resources</li>
		</ol>
	</div>
</section>
<section class=" Welcome_Classic">
	<div class="container">
		
<div class="container gallery-container">

    <div class="tz-gallery">

        <div class="row">
        
              <?php 
            

            $match ="";
            $whereArray="";
            $user_type = $user_type = $this->SqlModel->getSingleField('user_type', 'user',array('user_id'=>$this->session->userdata('user_id')));
            if($this->session->userdata('user_id') && $user_type == 'student')
            {
                $pageData['data'] = $this->SqlModel->getSingleRecord('user', array('user_id'=>$this->session->userdata('user_id')));
                if($pageData['data']['Individual_Support'] == 'Yes'){
                    $match = 'Individual Support';
                    $whereArray=array('book_category_status' => 1, 'book_category_title' => $match);
                    $book_categorys=$this->general_model->getResultDynamic('book_category',$whereArray);

            if($book_categorys) {
                foreach($book_categorys as $book_category){
         ?>
            
            <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                    <a href="<?php echo  base_url().'category-books.html?book_category='.$book_category["book_category_id"]; ?>">
                        <img src="<?php echo base_url().$book_category["book_category_image"] ?>" alt="">
                    </a>
                    <div class="caption">
                        <h3><?php echo $book_category["book_category_title"]; ?></h3>
                    </div>
                </div>
            </div>

            <?php } } 
                }
                if($pageData['data']['Security_Operations'] == 'Yes'){
                    $match = 'Security Operations';
                    $whereArray=array('book_category_status' => 1, 'book_category_title' => $match);
                    $book_categorys=$this->general_model->getResultDynamic('book_category',$whereArray);
            
                    if($book_categorys) {
                        foreach($book_categorys as $book_category){
                     ?>
                        
                        <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                                <a href="<?php echo  base_url().'category-books.html?book_category='.$book_category["book_category_id"]; ?>">
                                    <img src="<?php echo base_url().$book_category["book_category_image"] ?>" alt="">
                                </a>
                                <div class="caption">
                                    <h3><?php echo $book_category["book_category_title"]; ?></h3>
                                </div>
                            </div>
                        </div>
            
                        <?php } }
                }
                if($pageData['data']['Emergency_First_Aid'] == 'Yes'){
                    $match = 'Emergency First Aid';

                    $whereArray=array('book_category_status' => 1, 'book_category_title' => $match);
                    $book_categorys=$this->general_model->getResultDynamic('book_category',$whereArray);
            
                    if($book_categorys) {
                        foreach($book_categorys as $book_category){
                     ?>
                        
                        <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                                <a href="<?php echo  base_url().'category-books.html?book_category='.$book_category["book_category_id"]; ?>">
                                    <img src="<?php echo base_url().$book_category["book_category_image"] ?>" alt="">
                                </a>
                                <div class="caption">
                                    <h3><?php echo $book_category["book_category_title"]; ?></h3>
                                </div>
                            </div>
                        </div>
            
                        <?php } }
                }
                if($pageData['data']['Early_Childhood_and_Education'] == 'Yes'){
                    $match = 'Early Childhood';

                    $whereArray=array('book_category_status' => 1, 'book_category_title' => $match);
                    $book_categorys=$this->general_model->getResultDynamic('book_category',$whereArray);
            
                    if($book_categorys) {
                        foreach($book_categorys as $book_category){
                     ?>
                        
                        <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                                <a href="<?php echo  base_url().'category-books.html?book_category='.$book_category["book_category_id"]; ?>">
                                    <img src="<?php echo base_url().$book_category["book_category_image"] ?>" alt="">
                                </a>
                                <div class="caption">
                                    <h3><?php echo $book_category["book_category_title"]; ?></h3>
                                </div>
                            </div>
                        </div>
            
                        <?php } }
                }
                
                $whereArray=array('book_category_status' => 1,'book_category_title' => $match);
            }
            if ($this->session->userdata('user_id') && $user_type == 'trainer') {
                $whereArray=array('book_category_status' => 1);
                $book_categorys=$this->general_model->getResultDynamic('book_category',$whereArray);
        
                if($book_categorys) {
                    foreach($book_categorys as $book_category){
                 ?>
                    
                    <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                            <a href="<?php echo  base_url().'category-books.html?book_category='.$book_category["book_category_id"]; ?>">
                                <img src="<?php echo base_url().$book_category["book_category_image"] ?>" alt="">
                            </a>
                            <div class="caption">
                                <h3><?php echo $book_category["book_category_title"]; ?></h3>
                            </div>
                        </div>
                    </div>
        
                    <?php } }
            }


        // $book_categorys=$this->general_model->getResultDynamic('book_category',$whereArray);
        // if($book_categorys) {
        // foreach($book_categorys as $book_category){

        //  ?>
            
        <!-- //     <div class="col-sm-6 col-md-3">
        //         <div class="thumbnail">
        //             <a href="<?php echo  base_url().'category-books.html?book_category='.$book_category["book_category_id"]; ?>">
        //                 <img src="<?php echo base_url().$book_category["book_category_image"] ?>" alt="">
        //             </a>
        //             <div class="caption">
        //                 <h3><?php echo $book_category["book_category_title"]; ?></h3>
        //             </div>
        //         </div>
        //     </div> -->

             <?php //} } ?>
            
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