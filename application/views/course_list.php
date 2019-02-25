<?php 
$main_category = $this -> session -> userdata('main_category');
$sub_category = $this -> session -> userdata('sub_category');  	
// echo "Main cat".$main_category, "Sub cat".$sub_category."Course_id".$_GET["book_category"];
?>

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
              $book_categorys=$this->SqlModel->getRecords('*','training_content' );
        if($book_categorys) {
            foreach($book_categorys as $book_category){
         ?>
            
            <div class="col-sm-6 col-md-2">
                <div class="thumbnail">
                    <a href="<?php echo  base_url().'trainer_books.html?book_category='.$book_category["content_id"]; ?>">
                        <img src="<?php echo base_url().$book_category["content_image"] ?>" alt="" >
                    </a>
                <div class="caption">
                        <h4><?php echo $book_category["content_title"]; ?></h4>
                </div>
                </div>
            </div>

            <?php } } 
            // Setting up main and sub data to session.
            
            // $autoload['libraries'] = array('session');
            // $the_session = array("course_id" => $_GET["book_category"]);
            // $this -> session -> set_userdata($the_session);
            $autoload['libraries'] = array('session');
            $the_session = array("sub_category" => $_GET["book_sub_category"]);
            $this -> session -> set_userdata($the_session);

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