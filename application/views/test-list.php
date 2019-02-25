
<section class=" Head_Titles">
	<div class="container">
		<h1>Tests</h1>
		<ol class="breadcrumb">
		  <li><a href="<?php echo $this->config->base_url(); ?>">Home</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">Tests</li>
		</ol>
	</div>
</section>
<section class=" Welcome_Classic">
	<div class="container">
		
		<div class="row">
			<div class="About_Tag">
			<div class="col-md-3"><a href="./ofdocs/PnPStudentHandbook.pdf"><img class="image-responsive center-block" src="<?php echo FRONTEND_ASSETS; ?>images/handbook.jpg"> </a>

<h3><a href="./ofdocs/PnPStudentHandbook.pdf">Student Handbook</a></h3>
</div>
				<div class="col-md-12"><h1>FORM TEST LISTING</h1></div>				
				<div class="col-md-12">
					<table class="table table-bordered Listing">
					    <thead>
					      <tr>
					        <th class="text-center">Test Name</th>
					        <th class="text-center">Test Discription</th>
					        <th class="text-center">Apply For</th>
					      </tr>
					    </thead>
					    <tbody>

					     <?php 
        $whereArray=array('test_status' => 'Published');

        $tests=$this->general_model->getResultDynamic('test',$whereArray);
        if($tests) {
                    foreach($tests as $test){

         ?>
					      <tr>
					        <td><?php echo $test['test_title']; ?></td>
					        <td><?php echo $test['test_description']; ?></td>
					        <td class="text-center" style="vertical-align:middle;"><a href="<?php echo base_url().'home/test/'.$test['test_id']; ?>" class="btn btn-default">Apply Now</a></td>
					      </tr>
					      <?php } } ?>
					      
					    </tbody>
					</table>
				</div>				
			</div>			
		</div>




	</div>
</section>
<!-- Welcome_Classic Closed -->