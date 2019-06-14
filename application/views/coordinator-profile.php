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
<?php
$incomplete = "";
$completed  = "";
$pending    = "";
$count      = 1;

?>





<div class="clearfix"></div>

<!--our satisfied customer Start -->
<div class="osc">
  <div class="ocs_sub">
    <!--Carousel Wrapper-->
    	<img src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/slider_coordinator.jpg" class="img-fluid" alt="Responsive image">
    <!--/.Carousel Wrapper-->
  </div>
  <!-- ocs_sub-->
</div>
<!-- osc-->
<!--our satisfied customer End -->
</section>
<!-- Head_Titles Closed -->

<div class="body_content">
		<div class="body_content_sub">
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
							<form method="post" action="<?php echo $this->config->base_url() . 'editProfile/coDetails/' . $user_details[0]['co_id'] ?>">
							<!-- form row start -->
							<div class="form-now">
                    <div class="">

									<!-- Name input start -->

                        <label for="student_name" class="required">Name</label>
                        <input type="text" class="form-control" name="student_name" value='<?php echo $user_details[0]['co_name'] ?>' id="Name" disabled />
										<!-- Name input end -->

										<!-- contact input start -->
										<div class="form-input">
                      <label for="student_contact" class="required">Contact number</label>
                    	<input class="form-control" type="number" name="co_contact" value='<?php echo $user_details[0]['co_contact'] ?>' id="Contact number" />
                    </div>
					<div class="form-input">
					  <label for="cordinator_code" class="required">Coordinator Code</label>
                      <input class="form-control" type="text" name="cordinator_code" value='<?php echo $user_details[0]['co_code'] ?>' id="cordinator_code" disabled  /><br />
                    </div>
										<!-- Email input start -->
										<div class="form-input">
											<label for="student_email" class="required">Email</label>
                      <input class="form-control" type="text" name="student_email" value='<?php echo $user_details[0]['co_email'] ?>' id="Email" disabled />
                    </div>
										<!-- Email input end -->

										<!-- contact input end -->

										<!-- Password input start -->
										<div class="form-input">
                      <label for="student_password" class="required">Password</label>
                      <input class="form-control" type="password" name="student_password" value='<?php echo $user_details[0]['co_password'] ?>' id="Password" disabled /><br />
                      <a id="reset" href="">Changed Password</a>
                    </div>
										<!-- password input change -->

										<input class="btn btn-success" type="submit" value="Update Account" class="submit" id="submit" name="accountBtn" />

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
foreach ($student_detail as $cols) {
 $all_students = $this->SqlModel->getRecords('*', 'students', '', '', array('coordinator_id' => $this->session->userdata('co_id'), 'student_id' => $cols[0]['user_id']));
 $ids          = array_column($all_students, 'sub_courses_id');
 $ids          = array_unique($ids);
 foreach ($ids as $col_st) {
  //  echo $col_st;
  //  echo $cols[0]['user_name'];

  ?>
									<tr aria-controls="collapseOne" align="center" aria-expanded="true" data-parent="#accordion2" data-toggle="collapse" href=<?php echo "#" . $cols[0]['user_name'] . "" . $col_st; ?>>
										<td ><?php echo $cols[0]['user_name'] ?></td>
										<td><?php echo date("d-m-Y", strtotime($cols[0]['user_added'])) ?></td>
										<td><?php echo $this->SqlModel->getSingleField('course_title', 'sub_courses', array('id' => $col_st)); ?></td>
										<td><?php echo $this->db->query('SELECT * FROM students WHERE student_id = ' . $cols[0]["user_id"] . ' AND unit_status="Completed" AND coordinator_id=' . $user_id . ' AND sub_courses_id=' . $col_st)->num_rows() . "/" . $this->db->query('SELECT * FROM course_units WHERE sub_courses_id = ' . $col_st)->num_rows(); ?></td>
										<td><a aria-controls="collapseOne" aria-expanded="true" data-parent="#accordion2" data-toggle="collapse" href=<?php echo "#" . $cols[0]['user_name'] . "" . $col_st; ?>></i> View Details </a></td>
									</tr>


									<tr>
									<?php $rec_id = $cols[0]["user_id"];?>
									<td colspan="5">
										<div aria-labelledby="headingOne" class="panel-collapse collapse" id=<?php echo $cols[0]['user_name'] . "" . $col_st; ?> role="tabpanel">
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
													<?php $record = $this->SqlModel->getRecords('*', 'course_units', '', '', array('sub_courses_id' => $col_st));
  $count                     = 1;
  foreach ($record as $cols_) {
   ?>
													<tr>
													<th style="border-right:1px solid gainsboro;text-align:center;"><?php echo $count;
   $count++; ?></th>
													<!-- <th style="text-align:center;border-right:1px solid gainsboro"> <?php echo $cols_['id'] ?></th> -->
													<th style="text-align:center;border-right:1px solid gainsboro"><?php echo $cols_['unit_name'] ?></th>
													<?php $status = $this->SqlModel->getSingleField('unit_status', 'students', array('student_id' => $rec_id, 'unit_id' => $cols_['id']));
   if ($status == 'Incomplete') {
    $incomplete = "X";
    $pending    = "";
    $completed  = "";
   } else if ($status == 'Pending') {
    $incomplete = "";
    $pending    = "X";
    $completed  = "";
   } else if ($status == 'Completed') {
    $incomplete = "";
    $pending    = "";
    $completed  = "X";
   } else {
    $incomplete = "";
    $pending    = "";
    $completed  = "";

   }
   $date = date('d-m-Y', strtotime($this->SqlModel->getSingleField('completion_date', 'students', array('student_id' => $rec_id, 'unit_id' => $cols_['id']))));
   ?>
													<th style="text-align:center;border-right:1px solid gainsboro"> <?php echo $completed; ?></th>
													<th style="text-align:center;border-right:1px solid gainsboro"> <?php echo $pending; ?></th>
													<th style="text-align:center;border-right:1px solid gainsboro"> <?php echo $incomplete; ?></th>
													<th style="text-align:center;border-right:1px solid gainsboro"> <?php if ($date == '01-01-1970') {echo "----";} else {echo $date;}?></th>
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
</div><!-- body_content_sub-->
	</div><!-- body_content-->
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
      var id = <?php echo $this->session->userdata('co_id'); ?>;
    $.ajax({
				type: 'POST',
				data: {printDate:data, co_id: id},
				url: '<?php echo base_url() ?>editProfile/printCoDetails',
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
