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
		
		<div class="row">
			<div class="About_Tag">
		<!--	<div class="col-md-3"><a href="./ofdocs/PnPStudentHandbook.pdf"><img class="image-responsive center-block" src="<?php echo FRONTEND_ASSETS; ?>images/handbook.jpg"> </a>

<h3><a href="./ofdocs/PnPStudentHandbook.pdf">Student Handbook</a></h3>
</div>-->

	     <?php 
        $whereArray=array('book_category_status' => 1);

        $book_categorys=$this->general_model->getResultDynamic('book_category',$whereArray);
        if($book_categorys) {
        foreach($book_categorys as $book_category){

         ?>
				<div class="col-md-12"><h1><?php echo $book_category["book_category_title"]; ?></h1></div>				
				<div class="col-md-12">
					<table class="table table-bordered Listing">
					    <thead>
					      <tr>
					        <th class="text-center">Book Name</th>
					        <th class="text-center"></th>
					      </tr>
					    </thead>
					    <tbody>

					    	 <?php 
        $whereArray2 =array('book_status' => 1,'book_category' => $book_category["book_category_id"]);

        $books=$this->general_model->getResultDynamic('book',$whereArray2);
        if($books) {
        foreach($books as $book){

         ?>

					      <tr>
					        <td><?php echo $book["book_title"]; ?></td>
					        <td class="text-center" style="vertical-align:middle;"><a  class="btn btn-default" onclick="PDFObject.embed('<?php echo base_url().$book["book_file_path"] ?>', '#example1');"  data-toggle="modal" data-target="#myModal">Read now</a></td>
					      </tr>

					      <?php } } ?>

					      
					     
					      
					    </tbody>
					</table>
				</div>	

               <?php } } ?>


			</div>			
		</div>




	</div>
</section>
<!-- Welcome_Classic Closed -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!--<h4 class="modal-title">Modal Header</h4>-->
      </div>
      <div class="modal-body">
        <div id="example1"></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#plugin').oncontextmenu = function() { 
    return false; 
};

$('#myModal').on('show.bs.modal', function () {
    $('.modal .modal-body').css('overflow-y', 'auto'); 
    $('.modal .modal-body').css('height', $(window).height() * 0.8);
    $('#example1').css('height', ($(window).height() * 0.8) - 50);
});
});


	
</script>

<style type="text/css">

	.modal-dialog,.modal-content {
    /* 80% of window height */
    /*max-height: 100%;*/
     width: 90%;
}

.modal-body {
    /* 100% = dialog height, 120px = header + footer */
    max-height: 100%;
    overflow-y: scroll;
}
</style>