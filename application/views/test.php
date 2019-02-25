<section class=" Head_Titles">
	<div class="container">
		<h1><?php echo $test['test_title']; ?></h1>
		<ol class="breadcrumb">
		  <li><a href="<?php echo $this->config->base_url(); ?>">Home</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active"><?php echo $test['test_title']; ?></li>
		</ol>
	</div>
</section>
<section class=" Welcome_Classic">
	<div class="container">
		<div class="row">			
			<div class="col-md-12 Contact_Add">
				<form id="contactForm" method="post" action="" class="validate Filter_Selector">

				  <div class="col-md-12">
				  	<p><?php echo $test['test_description']; ?></p>
				  </div>
<?php $whereArray=array('question_status' => 'Published','question_test' => $test['test_id']);
        $questions=$this->general_model->getResultDynamic('question',$whereArray);
        if($questions) {
                    foreach($questions as $question){ ?>
				  <div class="col-md-12">
	                  <div class="form-group">
	                  	<label for="q_<?php echo $question['question_id'];  ?>"><?php echo $question['question_string']; ?> </label>
	                  <?php  if($question['question_type']=='text'){ ?>

	            <input type="text" id="q_<?php echo $question['question_id'];  ?>" name="q_<?php echo $question['question_id'];  ?>" class="form-control Form_Setup required">	

<?php } else if($question['question_type']=='textarea'){  ?> 

<textarea name="q_<?php echo $question['question_id'];  ?>" class="form-control Form_Setup_Textarea required" rows="3"></textarea>
	                  

	                  <?php } else if($question['question_type']=='checkbox'){  ?> 
<?php $whereArray=array('option_status' => 'Published','option_question' => $question['question_id']);
        $options=$this->general_model->getResultDynamic('option',$whereArray);
        if($options) {
                    foreach($options as $option){ ?>
	                  <label class="control control--checkbox"><?php echo $option['option_text']; ?>
							<input name="q_<?php echo $question['question_id'];  ?>[]" value="<?php echo $option['option_text']; ?>" type="checkbox"/>
							<div class="control__indicator"></div>
						</label>

						<?php } } ?>
						   
                   
                      <?php } else if($question['question_type']=='radio'){  ?> 
                      <?php $whereArray=array('option_status' => 'Published','option_question' => $question['question_id']);
        $options=$this->general_model->getResultDynamic('option',$whereArray);
        if($options) {
                    foreach($options as $option){ ?>
                        <label class="control control--radio"><?php echo $option['option_text']; ?>
							<input type="radio" name="q_<?php echo $question['question_id'];  ?>" value="<?php echo $option['option_text']; ?>" />
							<div class="control__indicator"></div>
						</label>
						<?php } } ?>
						
                      <?php } else if($question['question_type']=='select'){  ?> 
                         <select class="form-control Form_Setup required" name="q_<?php echo $question['question_id'];  ?>" id="q_<?php echo $question['question_id'];  ?>">
                          <?php $whereArray=array('option_status' => 'Published','option_question' => $question['question_id']);
        $options=$this->general_model->getResultDynamic('option',$whereArray);
        if($options) {
                    foreach($options as $option){ ?>
						    <option value="<?php echo $option['option_text']; ?>"><?php echo $option['option_text']; ?></option>
						    <?php } } ?>
						  </select>	
                      <?php } ?>




	                                       
	                  </div>   
                  </div>
                   <?php } } ?>
                 
                  
                  <div class="col-md-12">
                  	  <button type="submit" id="submitBtn" class="btn btn-default Submit_Button">SUBMIT</button>
                  </div>	                                       
                </form>				
			</div>						
		</div>		
	</div>
</section>
<p></p>
<p></p>
<p></p>
<!-- Welcome_Classic Closed -->
<div class="clearfix" ></div>