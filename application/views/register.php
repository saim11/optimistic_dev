<?php 
$tbl_coordinator = 	"co_ordinator";
$coordinator =  $this->SqlModel->getRecords('co_name,co_suburb,co_id',$tbl_coordinator);
$name_cordinator = array();
$suburb_cordinator = array();
foreach($coordinator as $field){
	array_push($name_cordinator,array(
		'value' => $field['co_name'],
		'show'=> $field['co_name']
	));
}
$suburbs =  $this->SqlModel->getRecords('id,suburb', 'suburbs');
foreach($suburbs as $field){
	array_push($suburb_cordinator,array(
		'value' => $field['id'],
    'show'=> $field['suburb']
	));
}

?>
<style>
#important_checkbox {
  display: none;
}
#important_checkbox + label span {
  border-radius: 50%;
border: 1px solid black;
background: blue;
width: 1em;
height: 1em;
margin-left: 1em;
display: inline-block;
vertical-align: middle;
}
#important_checkbox:checked + label span {
  background: green;
}
#label_checkbox{
	display:inline-block;
	padding:0px;
	margin:0px;
}
#Yes, #No{
width:35px;
border:1px solid black;
min-height:15px;
margin:0 auto;
}
.yes_cordinator{
	padding:5%;
}
select.minimal {
  background-image:
    linear-gradient(45deg, transparent 50%, gray 50%),
    linear-gradient(135deg, gray 50%, transparent 50%),
    linear-gradient(to right, #ccc, #ccc);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    calc(100% - 2.5em) 0.5em;
  background-size:
    5px 5px,
    5px 5px,
    1px 1.5em;
  background-repeat: no-repeat;
}

select.minimal:focus {
  background-image:
    linear-gradient(45deg, green 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, green 50%),
    linear-gradient(to right, #ccc, #ccc);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    calc(100% - 2.5em) 0.5em;
  background-size:
    5px 5px,
    5px 5px,
    1px 1.5em;
  background-repeat: no-repeat;
  outline: 0;
}


select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}


</style>

<section class="Section_Devs Welcome_Classic">
	<div class="container">
		
		<div class="row">
			<div class="About_Tag">
				<div class="col-md-12"><h1>REGISTER NOW</h1></div>				
				<div class="col-md-7 col-sm-7">
					<form id="" method="post"  action="<?php echo $this->config->base_url().'home/signup' ?>" class="validate Add_details">
					  <div class="row">
						<div class="col-md-12">
							  <div class="form-group">
								<label for="name">User Type :</label>
											<select autocomplete="off"  id="user_type" value="<?php echo set_value('user_type'); ?>" name="user_type" onChange="getCourse()" class="form-control Form_Setup required minimal">
												<!-- <option value="select">---</option> -->
												<option value="student">Student</option>
												<option value="trainer">Trainer</option>
											</select>
								</div>
							</div>

							<div class="col-md-12" id="studnetCourses" style="visibility:visible;">
							  <div class="form-group">
								<label for="name">Student Courses:</label>
											<select autocomplete="off"  id="courses" value="<?php echo set_value('courses'); ?>" name="courses"  class="form-control minimal">
											<i class="arrow down"></i>
												<option value="none" selected="selected">--Select  Course--</option>
												<option value="Individual_Support">Individual Support</option>
												<option value="Security_Operations">Security Operations</option>
												<option value="Early_Childhood_and_Education">Early Childhood and Education</option>
												<option value="Emergency_First_Aid">Emergency First Aid</option>
											</select>
								</div>
							</div>


						  				<div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="name">Name :</label>
			                    <input type="text" id="user_name" value="<?php echo set_value('user_name'); ?>" name="user_name" class="form-control Form_Setup required">                  
			                  </div>   
		                  </div>
											<div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="name">Contact (Personal):</label>
			                    <input type="text" id="user_contact" value="<?php echo set_value('user_contact'); ?>" name="user_contact" class="form-control Form_Setup required">                  
			                  </div>   
		                  </div>
		                  <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="email_address">email address :</label>
			                    <input type="text" id="user_email" value="<?php echo set_value('user_email'); ?>" name="user_email" class="form-control Form_Setup required">
			                  </div>   
		                  </div>
		                  <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="name">Password :</label>
			                    <input type="password" id="user_password" value="<?php echo set_value('user_password'); ?>" name="user_password" class="form-control Form_Setup required">
			                  </div>   
		                  </div>
		                  <div class="col-md-12">
			                  <div class="form-group">
			                  	<label for="name">Confirm Password :</label>
			                    <input type="password" id="passconf" value="<?php echo set_value('passconf'); ?>" name="passconf" class="form-control Form_Setup required">
			                  </div>   
		                  </div>
											<div class="col-md-12">
			                <div class="form-group" id="coordinator"  style="visibility:visible;">
												<label for="name" class="col-md-6">Refered by Co-Ordinator ?</label>														
														<label for="Yes" class="col-md-3"> Yes 
																<input id="Yes" type="checkbox" name="referance" value="Yes" class="col-md-2 check_box" />
														</label>
														<label for="No" class="col-md-3" > No 
																<input id="No" type="checkbox" name="referance" value="No" class="col-md-2 check_box" checked  />
														</label>
			                  </div>   
		                  </div>
											<div class="yes_cordinator">
													<div class="col-md-12" id="co-ordinator" style="visibility:visible;">
														<!-- <div class="form-group">
															<label for="name">Co-ordinator Code/Name :</label>
															<input type="text" id="co_ordinator_code" name="co_ordinator_code" value="<?php echo set_value('co_ordinator_code');?>"  class="form-control Form_Setup">                  
														</div> -->
														<div class="col-md-12"  style="visibility:visible;">
														<div class="form-group">
															<label for="name">Co-ordinator Code/Name :</label>
															<input autocomplete="off"  id="co_ordinator_code" name="co_ordinator_code" value="<?php echo set_value('co_ordinator_code');?>" name="courses"  class="form-control Form_Setup minimal">			
														</div>
														</div>
														<!-- <div class="form-group">
															<label for="name">Suburb Name:</label>
															<input type="text" id="co_ordinator_suburb" name="co_ordinator_suburb" value="<?php echo set_value('co_ordinator_suburb'); ?>"  class="form-control Form_Setup">                  
														</div>    -->
														<div class="col-md-12"  style="visibility:visible;">
														<div class="form-group">
															<label for="name">Suburb Name:</label>
																		<select autocomplete="off"  id="co_ordinator_suburb" name="co_ordinator_suburb" value="<?php echo set_value('co_ordinator_suburb'); ?>" name="courses"  class="form-control Form_Setup minimal">
																		<?php 
																			foreach($suburbs as $cols){				
																				?>
																				<option value='<?php echo $cols['id']; ?>'>
																				<?php echo $cols['suburb']; ?>
																				</option> 

																			<?php } ?>
																		</select>
														</div>
														</div>



													</div>
												</div>
		                  <div class="col-md-12 col-sm-12">
		                  	  <button type="submit" id="submitBtn" class="btn btn-default Submit_Button">SUBMIT</button>
		                  </div>
	                  </div>	                                  
	                </form>
				</div>
				<div class="col-md-5 col-sm-5">
					<img src="<?php echo FRONTEND_ASSETS;?>images/about_optimistic.jpg" class="img-responsive" alt="" />
				</div>
			</div>			
		</div>

	</div>
</section>

<script type="text/javascript">

$(document).ready(function(){
	$('#co-ordinator').hide(); 
	   
    $('.check_box').on('change',function() {
			var isChecked  = document.getElementById(this.id).value;
				$('.check_box').not(this).prop('checked', false);
				
				if(isChecked == 'No'){
					$('#co-ordinator').hide();  
				}
				else{
					$('#co-ordinator').show();
			}   
    });
});


function getCourse(){
	val = document.getElementById('user_type').value;
	console.log(val);
	if(val=="trainer"){
		$('#studnetCourses').hide();
		$('#coordinator').css("visibility", "hidden");
	}
	else{
		$('#studnetCourses').show();
		$('#coordinator').css("visibility", "visible");

	}   
}

</script>
<!-- Welcome_Classic Closed -->