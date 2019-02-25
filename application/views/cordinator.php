


<section class="Section_Devs Head_Titles" style='background:url(<?php echo base_url(); ?>uploads/pages/student_profile_bg.jpg) no-repeat top center;background-size: cover;' >
	
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
							<form method="post" action="<?php echo $this->config->base_url().'editProfile/resetPassword' ?>">
							<!-- form row start -->
								<div class="form-row">
								<!-- form group start -->
									<div class="form-group my_group">

									<!-- Name input start -->
										<div class="form-input">
                        <label for="student_name" class="required">Name</label>
                        <input type="text" name="student_name" value="" id="Name" disabled />
                    </div>
										<!-- Name input end -->

										<!-- Email input start -->
										<div class="form-input">
											<label for="student_email" class="required">Email</label>
                      <input type="text" name="student_email" value="" id="Email" disabled />
                    </div>
										<!-- Email input end -->

										<!-- contact input start -->
										<div class="form-input">
                      <label for="student_contact" class="required">Contact number</label>
                    	<input type="number" name="student_contact" value="" id="Contact number" />
                    </div>
										<!-- contact input end -->

										<!-- Password input start -->
										<div class="form-input">
                      <label for="student_password" class="required">Password</label>
                      <input type="password" name="student_password" value="" id="Password" disabled /><br />
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
						<h1>Students Enrolled</h1>
						<!-- table start -->
						<table class="table table-striped table-responsive-md btn-table">
							<!-- table head section start -->
							<thead>
								<tr>
									<th>Id</th>
									<th>Student Name</th>
									<th>Enrolled Date</th>
									<th>Units Cleared</th>
									<th>View Details</th>
								</tr>
							</thead>
							<!-- table head section end -->

							<!-- table body start -->
								<tbody>
									<tr>
										<td>1</td>
										<td>Talal</td>
										<td>14/1/2019</td>
										<td>3/8</td>
										<td><a href="<?php echo $this->config->base_url().'student-details.html' ?>">View Deatils</a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Talal</td>
										<td>14/1/2019</td>
										<td>3/8</td>
										<td><a href="<?php echo $this->config->base_url().'student-details.html' ?>">View Deatils</a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Talal</td>
										<td>14/1/2019</td>
										<td>3/8</td>
										<td><a href="<?php echo $this->config->base_url().'student-details.html' ?>">View Deatils</a></td>
									</tr>
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
