
<link rel="stylesheet" href="https://unpkg.com/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/animate.css/animate.css" type="text/css" />
	

    <link rel="stylesheet" href="https://unpkg.com/rmodal/dist/rmodal.css" type="text/css" />
    <script type="text/javascript" src="https://unpkg.com/rmodal/dist/rmodal.js"></script>
    <style type="text/css">
      .modal .modal-dialog {
        width: 400px;
      }
    </style>
<style>
/* unvisited link */
body{
		font-size: 1.2em;
	  }
a:link {
  color: red;
}

/* visited link */
a:visited {
  color: green;
}

/* mouse over link */
a:hover {
  color:blue;
}
.no-rec{
	margin: 0 auto;
	width: 50%;
	text-align:center;
	color:#2bb673;
	font-size:2em;
}
.tblhead{
	background-color:#707070;
	text-align: center;
	font-size:1.2em;
	color:white!important;

}

</style>

<ol class="breadcrumb bc-3">
<li><a href="<?php echo ADMIN_URL;?>"><i class="entypo-home"></i>Home</a></li>
<li><a href="<?php echo ADMIN_URL;?>"><?php echo $this->moduleName;?></a></li>
<li class="active"><strong><?php echo $this->moduleNameForStudent;?></strong></li>
</ol>






<div class="row" style="min-height:400px;">
	<div class="col-md-12">
        



		<br clear="all" />
		<hr />
		<?php 
		if(isset($_GET['m_'])){
			echo $theMessage = $_GET['m_'];  
		}
		?>
		<div class="page-header">
  			<h1>Course Log</h1>
		</div>
		
			<!-- Trainer tab -->
			<div class="tab-pane" id="profile">
			<form action="<?php echo ADMIN_URL.$this->controller.'/deleteall';?>" method="post" name="multiDel" id="multiDel">
			<table id="table-<?php echo $this->controller;?>" class="table table-hover table-striped">
				<thead class="tblhead">
				<tr>
					<th style="text-align: center;color:white!important;">Student Id</th>
					<th style="text-align: center;color:white!important;">Student</th>
					<th style="text-align: center;color:white!important;">Course</th>
					<th style="text-align: center;color:white!important;">Coordinator</th>					
					<th style="text-align: center;color:white!important;">Enrolled Date</th>
					<th style="text-align: center;color:white!important;">Units</th>
					<th style="text-align: center;color:white!important;">Action</th>

				</tr>
				</thead>
				<tbody style="text-align:center;">
				<?php
				$ids = array_column($tbl_data, 'student_id');
				$ids = array_unique($ids);
				$tbl_data_ = array_filter($tbl_data, function ($key, $value) use ($ids) {
					return in_array($value, array_keys($ids));
				}, ARRAY_FILTER_USE_BOTH);
				// echo "<pre>";
				// print_r($tbl_data);
        		// echo "</pre>";
				foreach($tbl_data_ as $cols){
					?>
					<script>var tblData = <?php echo json_encode($tbl_data); ?>;</script>
					<tr>
					<td><?php echo $cols['student_id']; ?></td>
					<td><?php echo $cols['user_name']; ?></td>
					<td><?php echo $cols['course_title']; ?></td>
					<td><?php echo $cols['co_name']; ?></td>
					<td><?php echo date('d-m-Y', strtotime($cols['user_added'])); ?></td>
					<td><?php echo $this->db->query('SELECT * FROM students WHERE student_id = '.$cols["user_id"].' AND unit_status="Completed" AND coordinator_id='.$cols['co_id'].' AND sub_courses_id='.$cols['sub_courses_id'])->num_rows()."/".$this->db->query('SELECT * FROM course_units WHERE sub_courses_id='.$cols['sub_courses_id'])->num_rows(); ?></td>
					<td >
					<button id=<?php echo $cols['student_id']; ?> class="btn btn-success" onclick="modalOpen(event, tblData);">Edit</button>
					<button id=<?php echo $cols['student_id']; ?> class="btn btn-danger" onclick="modalOpenForDelete(event, tblData);">Delete</button>
					</td>
					</tr>
					<tr></tr>

				<?php
				} ?>
                
				</tbody>
			</table>
		</form>

			</div>
</div>




				<?php
				$ids = array_column($tbl_data, 'student_id');
				$ids = array_unique($ids);
				$tbl_data_ = array_filter($tbl_data, function ($key, $value) use ($ids) {
					return in_array($value, array_keys($ids));
				}, ARRAY_FILTER_USE_BOTH);?>
				<!-- Modal for edit data -->
					<div id="modal" class="modal" style="font-size:1.2em;" >
        				<div class="modal-dialog animated" style="width:180%;max-width:1000px;">
            				<div class="modal-content"  style="width:100%;" >
							<form class="form-horizontal" method="POST" Id="editUnits" action="" >
						<div class="modal-header">
							<strong>Edit Students</strong>
						</div>		
						<div class="modal-body" >
						<table class="table table-hover" >
							<thead>
								<tr class="bg-primary" style="font-size: 20px;font-style: oblique;" >
								<th scope="col" style="text-align: center;color:white!important;">Course</th>
								<th scope="col" style="text-align: center;color:white!important;">Units</th>
								<th scope="col" style="text-align: center;color:white!important;" colspan="3">Segments</th>
								<th scope="col" style="text-align: center;color:white!important;">Status</th>
								<th scope="col" style="text-align: center;color:white!important;">Date</th>
								</tr>
								<tr class="bg-success" style="font-size: 16px;font-style: oblique;">
								<th scope="col" style="text-align: center;color:white!important;"></th>
								<th scope="col" style="text-align: center;color:white!important;"></th>
								<th scope="col" style="text-align: center;color:white!important;">Assesment</th>
								<th scope="col" style="text-align: center;color:white!important;">Workplace</th>
								<th scope="col" style="text-align: center;color:white!important;">Observation</th>
								<th scope="col" style="text-align: center;color:white!important;"></th>
								<th scope="col" style="text-align: center;color:white!important;"></th>
								</tr>
							</thead>
							<tbody id="tblData">
							
					
							</tbody>
						</table>
						</div>

						<div class="modal-footer">
							<button class="btn btn-default" type="button" onclick="modal.close();">Cancel</button>
							<button class="btn btn-primary" type="submit" onclick="modal.close();">Save</button>
						</div>
					</form>
					
            				</div>
        				</div>
    				</div>

					<!-- Modal for delete data -->
					<div id="modalDelete" class="modal" style="font-size:1.2em;" >
        				<div class="modal-dialog animated" style="width:180%;max-width:500px;">
            				<div class="modal-content"  style="width:100%;" >
							<form class="form-horizontal" method="POST" Id="deleteCourse" action="" >
						<div class="modal-header">
							<strong>Delete Student</strong>
						</div>		
						<div class="modal-body" >
						<p id="deleteData"> </p>
						</div>

						<div class="modal-footer">
							<button class="btn btn-default" type="button" onclick="modalDelete.close();">Cancel</button>
							<button class="btn btn-primary" type="submit" onclick="modalDelete.close();">Sure</button>
						</div>
					</form>
					
            				</div>
        				</div>
    				</div>











<script type="text/javascript">
$(function(){
$("#search_status").on('change',function(){
	var search_keywords = $("#search_keywords").val();
	var search_in = $("#search_in").val();
	search_keywords = (search_keywords=="") ? "-" : encodeURI(search_keywords);
	window.location = "<?php echo base_url().'manage/'.$this->controller.'/index/';?>"+"<?php echo '/'.$sortby.'/'.(($order=="ASC") ? 'DESC' : 'ASC');?>/"+$("#search_status").val()+"/"+search_keywords+"?search_col="+search_in;
});

$("#search_keywords").keypress(function(event) {
	if (event.keyCode == 13) {
		var search_keywords = $("#search_keywords").val();
		var search_in = $("#search_in").val();
	search_keywords = (search_keywords=="") ? "-" : encodeURI(search_keywords);
		window.location = "<?php echo base_url().'manage/'.$this->controller.'/index/';?>"+"<?php echo '/'.$sortby.'/'.(($order=="ASC") ? 'DESC' : 'ASC');?>/"+$("#search_status").val()+"/"+search_keywords+"?search_col="+search_in;
		return false;
	}
});	

var req = null;
	$('#table-<?php echo $this->controller;?>').tableDnD({
            onDrop: function(table, row) {
				if(req!=null) req.abort();
				req = $.post('<?php echo ADMIN_URL.$this->controller.'/sortrecords';?>',$.tableDnD.serialize(),function(d){
					
				});
	        }
    });

});

$('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})

	</script>
    <script type="text/javascript">
	var modal = new RModal(document.getElementById('modal'), {
                //content: 'Abracadabra'
                beforeOpen: function(next) {
                    console.log('beforeOpen');
                    next();
                }
                , afterOpen: function() {
                    console.log('opened');
                }

                , beforeClose: function(next) {
                    console.log('beforeClose');
                    next();
                }
                , afterClose: function() {
                    console.log('closed');
                }
                // , bodyClass: 'modal-open'
                // , dialogClass: 'modal-dialog'
                // , dialogOpenClass: 'animated fadeIn'
                // , dialogCloseClass: 'animated fadeOut'

                // , focus: true
                // , focusElements: ['input.form-control', 'textarea', 'button.btn-primary']

                // , escapeClose: true
			});
			var modalDelete = new RModal(document.getElementById('modalDelete'), {
                //content: 'Abracadabra'
                beforeOpen: function(next) {
                    console.log('beforeOpen');
                    next();
                }
                , afterOpen: function() {
                    console.log('opened');
                }

                , beforeClose: function(next) {
                    console.log('beforeClose');
                    next();
                }
                , afterClose: function() {
                    console.log('closed');
                }
                // , bodyClass: 'modal-open'
                // , dialogClass: 'modal-dialog'
                // , dialogOpenClass: 'animated fadeIn'
                // , dialogCloseClass: 'animated fadeOut'

                // , focus: true
                // , focusElements: ['input.form-control', 'textarea', 'button.btn-primary']

                // , escapeClose: true
            });
	function modalOpen(e,data){
				$("#tblData").empty();
				count = 0;
				data.forEach(function(entry) {
				AssementYes=WorkplaceYes=ObservationYes="";
				AssementNo=WorkplaceNo=ObservationNo="";
				if(entry.Assesment == "Yes" ){
					AssementYes="Selected";
					AssementNo = false;
				}else if(entry.Assesment == "No"){
					AssementNo = "Selected";
					AssementYes = false;
				}
				if(entry.Workplace == "Yes" ){
					WorkplaceYes="Selected";
					WorkplaceNo = false;
				}else if(entry.Workplace == "No"){
					WorkplaceNo = "Selected";
					WorkplaceYes = false;
				}
				if(entry.Observation == "Yes" ){
					ObservationYes="Selected";
					ObservationNo = false;
				}else if(entry.Observation == "No"){
					ObservationNo = "Selected";
					ObservationYes = false;
				}
				
				console.log("ObservationYes-->",ObservationYes,"ObservationNo",ObservationNo);
				console.log(e.target.id,  entry.student_id);
					if(e.target.id == entry.student_id){
					$("#editUnits").attr('action','<?php echo base_url()."manage/".$this->controller.'/editRecord/';?>'+entry.student_id+"/"+entry.course_id+"/"+entry.sub_courses_id);
					$("#tblData")
    					.append($('<tr>')
							.append($('<td>')
									.attr('style', 'text-align: center')
									.append($('<input>')
									.attr('type', 'text')
									.attr('value', entry.course_title)
									.attr('name', entry.course_id)
									.attr('style', 'pointer-events:none')
									.attr('class','form-control')
									
								))
								.append($('<td>')
									.attr('style', 'text-align: center')
									.append($('<input>')
									.attr('type', 'text')
									.attr('value', entry.unit_name)
									.attr('name', entry.unit_id)
									.attr('style', 'pointer-events:none')
									.attr('class','form-control')
								))	
								.append($('<td>')
									.attr('style', 'text-align: center')
									.append($('<select>')
									.attr('name', "Assesment"+(count=count+1))
									.attr('class','form-control')
									.append($('<option >')
									.attr('value',"Yes").text("Yes")
									.attr('selected',AssementYes)
									)
									.append($('<option >')
									.attr('value',"No").text("No")
									.attr('selected',AssementNo)
									)

								))
								.append($('<td>')
									.attr('style', 'text-align: center')
									.append($('<select>')
									.attr('name', "Workplace"+(count=count+1))
									.attr('class','form-control')
									.append($('<option >')
									.attr('value',"Yes").text("Yes")
									.attr('selected',WorkplaceYes)
									)
									.append($('<option >')
									.attr('value',"No").text("No")
									.attr('selected',WorkplaceNo)
									)
									)
									
								)
								.append($('<td>')
									.attr('style', 'text-align: center')
									.append($('<select>')
									.attr('name', "Observation"+(count=count+1))
									.attr('class','form-control')
									.append($('<option >')
									.attr('value',"Yes").text("Yes")
									.attr('selected',ObservationYes)
									)
									.append($('<option >')
									.attr('value',"No").text("No")
									.attr('selected',ObservationNo)
									)
									)
									)		
								.append($('<td>')
									.attr('style', 'text-align: center')
									.text(entry.unit_status)
								)	
								.append($('<td>')
									.attr('style', 'text-align: center')
									.append($('<input>')
									.attr('type', 'date')
									.attr('data-date-format','DD MMMM YYYY')
									.attr('LANG','pt_BR /opt/google/chrome/chrome')
									.attr('value', entry.completion_date)
									.attr('class','form-control')
									.attr('style', 'pointer-events:none')
								))	
							);
						}
  				// $('#tblData').html('<tr style="text-align: center;"><td>'+entry.id+'</td><td>the Bird</td><td>@twitter</td><td>Otto</td><td>@mdo</td><td>@mdo</td></tr>');
								})
				e.preventDefault();
                modal.open();
			}
	//Modal open for deleting student course
	function modalOpenForDelete(e,data){
		$("#deleteData").empty();
		count = 0;
		console.log(data);
		data.forEach(function(entry){
			if(e.target.id == entry.student_id && count == 0){
					$("#deleteCourse").attr('action','<?php echo base_url()."manage/".$this->controller.'/delete/';?>'+entry.student_id+"/"+entry.course_id+"/"+entry.sub_courses_id);
					++count;
					$("#deleteData")
					.append("Deleting Course <strong> "+entry.course_title+"</strong> of Student <strong>"+entry.user_name+"</strong> Whose Co-Ordinater Is <strong>"+ entry.co_name+"</strong>");
					console.log(e.target.id,entry.student_id)
					e.preventDefault();
					modalDelete.open();
				}
				})
			} 

        window.onload = function() {
            var modal = new RModal(document.getElementById('modal'), {
                //content: 'Abracadabra'
                beforeOpen: function(next) {
                    console.log('beforeOpen');
                    next();
                }
                , afterOpen: function() {
                    console.log('opened');
                }

                , beforeClose: function(next) {
                    console.log('beforeClose');
                    next();
                }
                , afterClose: function() {
                    console.log('closed');
                }
                // , bodyClass: 'modal-open'
                // , dialogClass: 'modal-dialog'
                // , dialogOpenClass: 'animated fadeIn'
                // , dialogCloseClass: 'animated fadeOut'

                // , focus: true
                // , focusElements: ['input.form-control', 'textarea', 'button.btn-primary']

                // , escapeClose: true
            });

            document.addEventListener('keydown', function(ev) {
                modal.keydown(ev);
            }, false);

            document.getElementById('showModal').addEventListener("click", function(ev) {
                ev.preventDefault();
                modal.open();
            }, false);


			

            window.modal = modal;
        }
    </script>




	