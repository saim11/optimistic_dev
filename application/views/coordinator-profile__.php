<?php 
$incomplete="";
$completed="";
$pending="";
$count = 1;

?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
.img-fluid {
    max-height:110px;
    min-height:120px;
    overflow:auto;
}
.loading{
  position: fixed;
  left: 50%;
  top: 50%;
}
.loader{
    position: fixed;
    left: 45%;
    top: 35%;
    z-index: 1000;
    height: 31px;
    width: 31px;
    display:none;
}

  .Menu-dropdown:hover .multi-level {
    display: block;
  }

  .multi-level {
    background: #2bb673;
    color: #fff;
  }
  .multi-level>li>a {
    color: #fff;
  }

  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
      margin-left: -1px;
      -webkit-border-radius: 0 6px 6px 6px;
      -moz-border-radius: 0 6px 6px;
      border-radius: 0 6px 6px 6px;
      background: #2bb673;
      color: #fff;
  }

  .dropdown-submenu:hover>.dropdown-menu {
      display: block;
  }

  .dropdown-menu>li>a {
    color: #fff;
  }
  
  .dropdown-submenu>a:after {
      display: block;
      content: " ";
      float: right;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid;
      border-width: 5px 0 5px 5px;
      border-left-color: #ccc;
      margin-top: 5px;
      margin-right: -10px;
  }

  .dropdown-submenu:hover>a:after {
      border-left-color: #fff;
  }

  .dropdown-submenu.pull-left {
      float: none;
  }

  .dropdown-submenu.pull-left>.dropdown-menu {
      left: -100%;
      margin-left: 10px;
      -webkit-border-radius: 6px 0 6px 6px;
      -moz-border-radius: 6px 0 6px 6px;
      border-radius: 6px 0 6px 6px;
  }
</style>








    <style type="text/css">

    .toper

{

  text-align: center;

  transition: all 500ms linear 0s;

}



.top_popup_2 {

  width: 100%;

  background: rgb(209, 63, 63) none repeat scroll 0 0;

  margin-top: 0;

  max-height: 100%;

  /* min-height: 50px; */

  opacity: 1;

  width: 100%;

  z-index: 9999;

  padding: 0px 0px;

}

.top_popup_2 p {

padding: 0 !important;

  margin: 10px 10px 10px;

}



.top_popup_1 {

  width: 100%;

  background: #81c868 none repeat scroll 0 0;

  margin-top: 0;

  max-height: 100%;

  /* min-height: 50px; */

  opacity: 1;

  width: 100%;

  z-index: 9999;

  padding: 0px 0px;

}

.top_popup_1 p {

  padding: 0 !important;

  margin:10px 10px 10px;

}

.right {

  float: right;

}



.inner_top_popup {

  display: inline-block;

  /*width: 960px;*/

}

.popup_text {

  margin: 0;

 /* width: 900px;*/

}

.popup_text p {

  color: #fff;

  font-family: 'robotoregular';

  font-size: 14px;

  font-weight: normal;

  text-align: center;

  word-wrap: break-word;

}

.mybutton {

  font: 900 14px/14px 'Roboto', sans-serif;

  text-transform: uppercase;

  

  padding: 10px 23px;

  border-radius: 4px;

  margin-bottom: 10px;

  display: inline-block;

  color: #fff;

}

.close_toper {

  padding: 10px;

  color: #fff;

  font-size: 16px;

  font-weight: bold;

}

.close_toper a i {

  color: #fff;

  cursor: pointer;
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
  height:50px;
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

<section class="Section_Devs Head_Titles" style='background:url(<?php echo base_url(); ?>uploads/pages/co.png) no-repeat top center;background-size: cover;' >
	
    <div class="container">
		<h1>Coordinator</h1>
		<ol class="breadcrumb">
		  <li><a href="index-2.html">Home</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">Coordinator</li>
		</ol>
	</div>
</section>
<!-- Head_Titles Closed -->


<section class="Section_Devs Welcome_Classic">
	<!-- container start -->
	<div class="container">
	<!-- row start -->
		<div class="row">
		<!-- column start -->
			<div class="col-md-12">
			<!-- main div satrt -->
				<div class="main">
				<!-- container div start -->
					<div class="container">
					<!-- cordinator section start -->
						<div class="cordinator_section">
						<!-- form start -->
							<form method="post" action="<?php echo $this->config->base_url().'editProfile/coDetails/'.$user_details[0]['co_id'] ?>">
							<!-- form row start -->
								<div class="form-row">
								<!-- form group start -->
									<div class="form-group my_group">

									<!-- Name input start -->
										<div class="form-input">
                        <label for="student_name" class="required">Name</label>
                        <input type="text" name="student_name" value='<?php echo $user_details[0]['co_name'] ?>' id="Name" disabled />
                    </div>
										<!-- Name input end -->

										<!-- contact input start -->
										<div class="form-input">
                      <label for="student_contact" class="required">Contact number</label>
                    	<input type="number" name="co_contact" value='<?php echo $user_details[0]['co_contact'] ?>' id="Contact number" />
                    </div>
					<div class="form-input"> 
					  <label for="cordinator_code" class="required">Coordinator Code</label>
                      <input type="text" name="cordinator_code" value='<?php echo $user_details[0]['co_code'] ?>' id="cordinator_code" disabled  /><br />
                    </div>
										<!-- Email input start -->
										<div class="form-input">
											<label for="student_email" class="required">Email</label>
                      <input type="text" name="student_email" value='<?php echo $user_details[0]['co_email'] ?>' id="Email" disabled />
                    </div>
										<!-- Email input end -->

										<!-- contact input end -->

										<!-- Password input start -->
										<div class="form-input">
                      <label for="student_password" class="required">Password</label>
                      <input type="password" name="student_password" value='<?php echo $user_details[0]['co_password'] ?>' id="Password" disabled /><br />
                      <a id="reset">Changed Password</a>
                    </div>
										<!-- password input change -->

										<input type="submit" value="Update Account" class="submit" id="submit" name="accountBtn" /> 
										
									</div>		
									<!-- form group end -->
								</div>
								<!-- form row end -->
							</form>
							<!-- form end -->
						</div>
						<!-- cordinator section end -->
					</div>
					<!-- container div end -->

				</div>
				<!-- main div end -->

				<!-- ======================================== -->
					<!-- my student list start -->
					<div class="my_courses_details">
						<h1>Enrolled Students</h1>
						<!-- table start -->
						<table class="table table-striped table-responsive-md btn-table">
							<!-- table head section start -->
							<thead>
							<tr >
							<div style="border-radius:25px;background-color:CadetBlue;max-height:20px;">
							<td >
  								<div class="panel-body" style="text-align:right">
								  Select month to print the report:
								</div>
							</td>

							<td>
								<div class="my_completed_units panel-body">
                      <div class="form-input">
												 <input type="text" name="printDate" size="40" id="printDate" autocomplete="off" class="form-control Form_Setup required minimal">
                      </div>
                </div>
							</td>
							<td>
							
							<div class="btn-group panel-body ">
								<button type="button" class="btn btn-primary" style="padding: 5px 24px;" id="print">Print</button>
							</div>
							</td>
							<td></td><td></td>
							</div>
							</tr>
								<tr >
									<th style="text-align:center">Student Name</th>
									<th style="text-align:center">Enrolled Date</th>
									<th style="text-align:center">Course Name</th>
									<th style="text-align:center">Units Cleared</th>
									<th style="text-align:center">Details</th>
								</tr>
							</thead>
							<!-- table head section end -->

							<!-- table body start -->
								<tbody>
								<?php
								$user_id = $this->session->userdata("co_id");
								foreach($student_detail as $cols){
										 $all_students = $this->SqlModel->getRecords('*', 'students' ,'','',array('coordinator_id'=>$this->session->userdata('co_id'),'student_id'=>$cols[0]['user_id'] ));
										 $ids = array_column($all_students, 'sub_courses_id');
										 $ids = array_unique($ids);
										 foreach($ids as $col_st){
											//  echo $col_st;
											//  echo $cols[0]['user_name'];
										 
									?>
									<tr aria-controls="collapseOne" align="center" aria-expanded="true" data-parent="#accordion2" data-toggle="collapse" data-target=<?php echo "#".$cols[0]['user_name']."".$col_st; ?>>
										<td ><?php echo $cols[0]['user_name'] ?></td>
										<td><?php echo date("d-m-Y", strtotime($cols[0]['user_added'])) ?></td>
										<td><?php echo $this->SqlModel->getSingleField('course_title', 'sub_courses',array('id'=>$col_st)); ?></td>
										<td><?php echo $this->db->query('SELECT * FROM students WHERE student_id = '.$cols[0]["user_id"].' AND unit_status="Completed" AND coordinator_id='.$user_id.' AND sub_courses_id='.$col_st)->num_rows()."/".$this->db->query('SELECT * FROM course_units WHERE sub_courses_id = '.$col_st)->num_rows(); ?></td>
										<td><a aria-controls="collapseOne" aria-expanded="true" data-parent="#accordion2" data-toggle="collapse" data-target=<?php echo "#".$cols[0]['user_name']."".$col_st; ?>></i> View Details </a></td>
									</tr>
										 

									<tr>
									<?php $rec_id = $cols[0]["user_id"]; ?>
									<td colspan="5">
										<div aria-labelledby="headingOne" class="panel-collapse collapse" id=<?php echo $cols[0]['user_name']."".$col_st; ?> role="tabpanel">
											<table class="table table-striped table-responsive-md btn-table" >
												<!-- table head section start -->
												<thead>
													<tr style="background-color:CadetBlue ;color:white">
														<th style="text-align:center;border-right:1px solid gainsboro">#</th>
														<th style="text-align:center;border-right:1px solid gainsboro">Unit ID</th>
														<!-- <th style="text-align:center;border-right:1px solid gainsboro" >Units</th> -->
														<th style="text-align:center;border-right:1px solid gainsboro" colspan='4'>Status</th>
													</tr>
													<tr style="background-color:blue;color:white" >
													<th style="border-right:1px solid gainsboro"></th>
													<th style="border-right:1px solid gainsboro"></th>
													<th style="text-align:center;border-right:1px solid gainsboro">Completed</th>
													<th style="text-align:center;border-right:1px solid gainsboro">Pending</th>
													<th style="text-align:center;border-right:1px solid gainsboro">Incomplete</th>
													<th style="text-align:center;border-right:1px solid gainsboro">Completion Date</th>
													</tr>
													<?php $record = $this->SqlModel->getRecords('*', 'course_units' ,'','',array('sub_courses_id'=>$col_st)); 
													$count = 1;
													foreach($record as $cols_){
													?>
													<tr>
													<th style="border-right:1px solid gainsboro;text-align:center;"><?php echo $count;$count++; ?></th>
													<!-- <th style="text-align:center;border-right:1px solid gainsboro"> <?php echo $cols_['id'] ?></th> -->
													<th style="text-align:center;border-right:1px solid gainsboro"><?php echo $cols_['unit_name'] ?></th>
													<?php $status = $this->SqlModel->getSingleField('unit_status', 'students',array('student_id'=>$rec_id,'unit_id'=>$cols_['id'])); 
													if($status == 'Incomplete'){
														$incomplete="X";
														$pending = "";
														$completed = "";
													}
													else if($status == 'Pending'){
														$incomplete="";
														$pending = "X";
														$completed = "";
													}
													else if($status == 'Completed'){
														$incomplete="";
														$pending = "";
														$completed = "X";
													}
													else{
														$incomplete="";
														$pending = "";
														$completed = "";

													}
													$date = date('d-m-Y',strtotime($this->SqlModel->getSingleField('completion_date', 'students',array('student_id'=>$rec_id,'unit_id'=>$cols_['id']))));
													?>
													<th style="text-align:center;border-right:1px solid gainsboro"> <?php echo $completed; ?></th>
													<th style="text-align:center;border-right:1px solid gainsboro"> <?php echo $pending; ?></th>
													<th style="text-align:center;border-right:1px solid gainsboro"> <?php echo $incomplete; ?></th>
													<th style="text-align:center;border-right:1px solid gainsboro"> <?php if($date == '01-01-1970'){echo "----";}else{echo $date;} ?></th>
													<?php }?>
													
													</tr>
												</thead>
													<!-- table head section end -->
													<!-- table body start -->
												<tbody>
												</tbody>
											</table>



										</div>
									</td>
									</tr>
												<?php }?>
								<?php
									}?>
								</tbody>
							<!-- table body end -->
						</table>
						<!-- table end -->

					</div>
					<!-- my student list end -->

				<!-- ======================================== -->

			</div>
			<!-- column end -->

		</div>
	<!-- row end -->
	</div>
	<!-- container end -->
</section>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script type="text/javascript">
// $(function() {
// var date = new Date();
// var currentMonth = date.getMonth();
// var currentDate = date.getDate();
// var currentYear = date.getFullYear();
// $('#printDate').datepicker({
// maxDate: new Date(currentYear, currentMonth, currentDate)
// });
// });

$(document).ready(function()
{   
	var date = new Date();
	var currentMonth = date.getMonth();
	var currentYear = date.getFullYear();
    $("#printDate").datepicker({
        dateFormat: 'MM yy',
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
		maxDate: new Date(currentYear, currentMonth),

        onClose: function(dateText, inst) {
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            $(this).val($.datepicker.formatDate('MM yy', new Date(year, month, 1)));
        }
    });

    $("#printDate").focus(function () {
        $(".ui-datepicker-calendar").hide();
        $("#ui-datepicker-div").position({
            my: "center top",
            at: "center bottom",
            of: $(this)
        });
    });


		$("#print").on('click',function (){
      
      var data = $('#printDate').val();
      var id = <?php echo $this->session->userdata('co_id');?>;
    $.ajax({
				type: 'POST',
				data: {printDate:data, co_id: id},
				url: '<?php echo base_url()?>editProfile/printCoDetails',
				success: function(result){
						console.log(result);
						printCoordinaterReport(result);
		    	},
				error: function(err){
					console.log(err);
				}	
			});
    });
		



});
</script>

<!-- <script src="assets/frontend/js/bootstrap.min.js"></script>
<script src="assets/frontend/js/custom.js"></script>
<script src="vendor/jquery/jquery-student-profile-form.min.js"></script>
<script src="vendor/nouislider/nouislider-student-profile-form.min.js"></script>
<script src="vendor/wnumb/wNumb-student-profile-form.js"></script>
<script src="vendor/jquery-validation/dist/jquery-student-profile-form.validate.min.js"></script>
<script src="vendor/jquery-validation/dist/additional-methods-student-profile-form.min.js"></script>
<script src="js/main-student-profile-form.js"></script> -->
<script src='<?php echo base_url(); ?>ofpdfs/coordinater/form.js'></script>
<script src='<?php echo base_url(); ?>ofpdfs/coordinater/pdfmake.min.js'></script>
<script src='<?php echo base_url(); ?>ofpdfs/coordinater/vfs_fonts.js'></script>
