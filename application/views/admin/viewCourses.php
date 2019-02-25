<?php 
// Flash Messages Started..
if($alert=="success") { ?>
 <div class="row alertrow">
	<div class="col-md-12">
    <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-success"><strong>Success!</strong> Web Page added sucessfully.</div>
	</div>
</div>
   <?php } if($alert=="deletesuccess") { ?>
 <div class="row alertrow">
	<div class="col-md-12">
    <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-success"><strong>Success!</strong> Record deleted sucessfully.</div>
	</div>
</div>
   <?php } if($alert=="deleteerror") { ?>
  <div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> Error occurred while deleting the record, please try again.</div>
	</div>
</div>
   <?php } if($alert=="editsuccess") { ?>
   <div class="row alertrow">
	<div class="col-md-12">
    <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-success"><strong>Success!</strong> Web Page updated sucessfully.</div>
	</div>
</div>
   <?php } if($alert=="error") { ?>
  <div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> Error occurred while saving the record, please try again.</div>
	</div>
</div>
<?php } if($alert=="errorField") { ?>

<div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> Some fields are missing to be filled.</div>
	</div>
</div>
<?php 
// Flash Messages End  
}?>

 <link rel="stylesheet" href="https://unpkg.com/animate.css/animate.css" type="text/css" />
	

    <link rel="stylesheet" href="https://unpkg.com/rmodal/dist/rmodal.css" type="text/css" />
    <script type="text/javascript" src="https://unpkg.com/rmodal/dist/rmodal.js"></script>
<style>




/* unvisited link */
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
.link_{
	float: left;
  margin-right: 2rem;
  border-radius: 0% 55%;
  -webkit-shape-outside: margin-box;
  shape-outside: margin-box;
  background-color:blue;
  color:white;
}

</style>

<ol class="breadcrumb bc-3">
<li><a href="<?php echo ADMIN_URL;?>"><i class="entypo-home"></i>Home</a></li>
<li class="active"><strong><?php echo $this->moduleName;?></strong></li>
</ol>





<div class="row" style="min-height:400px;">
	<div class="col-md-12">
		<button type="button" class="btn btn-secondary entypo-pencil entypo-plus-circled link_" onclick="modalOpenAddCourse(event);">
			Add Courses
		</button>
		
		<br clear="all" />
		<hr />
		<?php echo $alert; ?>
		<div class="page-header">
  			<h1>Course Details</h1>
		</div>
		
			<!-- Trainer tab -->
			<div class="tab-pane" id="profile">
			<form action="<?php echo ADMIN_URL.$this->controller.'/deleteall';?>" method="post" name="multiDel" id="multiDel">
			<table id="table-<?php echo $this->controller;?>" class="table table-hover table-striped">
				<thead class="tblhead">
				<tr>
					<th style="text-align: center;color:white!important;">Streams</th>
					<th style="text-align: center;color:white!important;">Courses</th>
					<th style="text-align: center;color:white!important;">Units</th>
					<th style="text-align: center;color:white!important;">Edit</th>
				</tr>
				</thead>
				<tbody style="text-align:center;">
				<script>var listing = <?php echo json_encode($listing); ?>;</script>
				<?php
				foreach(array_unique($listing, SORT_REGULAR) as $cols){
					?>
					<tr>
					<td><?php echo $cols['course_name']; ?></td>
					<td><?php echo $cols['course_title']; ?></td>
					<td>
					
					<?php 
						$students = $this->SqlModel->getRecords('id', 'course_units', '', '',  array('sub_courses_id'=>$cols['id'],'course_id'=>$cols['course_id']));
						$students = array_unique($students, SORT_REGULAR);
					?>
					<a class="icon-left font16 inoti" style="color:grey" id="<?php echo $cols['id']; ?>"  href="#" onclick="javascript:window.location='<?php echo base_url('manage/'.$this->controller.'/viewUnits/'.$cols['id']);?>'">
						<i class="entypo-list"></i><span class="badge badge-secondary" style="background-color:green"><?php echo count($students); ?></span>
					</a>
					</td>
					<td>
					<?php 
						$coordinator = $this->SqlModel->getRecords('coordinator_id', 'students', '', '',  array('sub_courses_id'=>$cols['id'],'course_id'=>$cols['course_id']));
						$coordinator = array_unique($coordinator, SORT_REGULAR);
						// echo count($coordinator);
					?>
					<a class=" entypo-pencil" style="color:blue;" id="<?php echo $cols['id']; ?>" href="#"  onclick="modalOpen(event,listing);">
					</a>
					<a class=" entypo-cancel" style="color:red;" id="<?php echo $cols['id']; ?>"  href="#" onclick="modalOpenDelete(event,listing);">
					</a>
					</td>
					</tr>
				<?php
				} ?>
                
				</tbody>
			</table>
		</form>

			</div>
</div>




					<div id="modal" class="modal" >
        				<div class="modal-dialog animated" style="width:180%;max-width:500px;">
            				<div class="modal-content"  style="width:100%;" >
							<form class="form-horizontal" method="POST" Id="course" action="" >
						<div class="modal-header">
							<strong>Edit Course</strong>
						</div>		
						<div class="modal-body" >
						<p id="editCourse"> </p>
						</div>

						<div class="modal-footer">
							<button class="btn btn-default" type="button" onclick="modal.close();">Cancel</button>
							<button class="btn btn-primary" type="submit" onclick="modal.close();">Yes</button>
						</div>
					</form>
					
            				</div>
        				</div>
    				</div>
					
					<div id="modalDelete" class="modal" >
        				<div class="modal-dialog animated" style="width:180%;max-width:500px;">
            				<div class="modal-content"  style="width:100%;" >
							<form class="form-horizontal" method="POST" Id="deleteCourse" action="" >
						<div class="modal-header">
							<strong>Delete Course</strong>
						</div>		
						<div class="modal-body" >
						<p id="actionCourse"> </p>
						</div>

						<div class="modal-footer">
							<button class="btn btn-default" type="button" onclick="modalDelete.close();">Cancel</button>
							<button class="btn btn-primary" type="submit" onclick="modalDelete.close();">Yes</button>
						</div>
					</form>
					
            				</div>
        				</div>
    				</div>

					<div id="modalAddCourse" class="modal" >
        				<div class="modal-dialog animated" style="width:180%;max-width:500px;">
            				<div class="modal-content"  style="width:100%;" >
							<form class="form-horizontal" method="POST" Id="addCourseForm" action="" >
						<div class="modal-header">
							<strong>Add Course</strong>
						</div>		
						<div class="modal-body" >
						<p id="addCourse"> </p>
						</div>

						<div class="modal-footer">
							<button class="btn btn-default" type="button" onclick="modalAddCourse.close();">Cancel</button>
							<button class="btn btn-primary" type="submit" onclick="modalAddCourse.close();">Save</button>
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
  e.preventDefault()
  $(this).tab('show')
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
			var modalAddCourse = new RModal(document.getElementById('modalAddCourse'), {
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
		$("#editCourse").empty();
		count = 0;
		data.forEach(function(entry){
			if(e.target.id == entry.id && count == 0){
					$("#course").attr('action','<?php echo base_url()."manage/".$this->controller.'/editCourse/';?>'+entry.id);
					++count;
					$("#editCourse")
					.append("<input type='text' class='form-control' id='"+entry.id+"' name='"+entry.id+"' value='"+entry.course_title+"'/>");
					// .append("<input type='text' />");
					// console.log(e.target.id,entry.student_id);
					e.preventDefault();
					modal.open();
				}
				})
			} 
	function modalOpenDelete(e,data){
		$("#actionCourse").empty();
		count = 0;
		data.forEach(function(entry){
			if(e.target.id == entry.id && count == 0){
					$("#deleteCourse").attr('action','<?php echo base_url()."manage/".$this->controller.'/deleteCourse/';?>'+entry.id);
					++count;
					$("#actionCourse")
					.append("<h5> Do you want to delete <strong>"+entry.course_title+" </strong> ? </h5>");
					e.preventDefault();
					modalDelete.open();
				}
				})
			} 
		function modalOpenAddCourse(e){
		$("#addCourse").empty();

					$("#addCourseForm").attr('action','<?php echo base_url()."manage/".$this->controller.'/addCourse';?>');
					$("#addCourse")
					.append("<label>Select Stream</label><select class='form-control' id='addCourse' name='addCourse' ><option value='1'> Individual Support</option><option value='2'> Security Operations</option><option value='3'>Early Childdhood Education and Care</option></select>")
					.append("<br /><label>Enter Course </label><br />")
					.append("<input type='text' class='form-control' id='enterCourse' name='enterCourse' value=''/>");
					e.preventDefault();
					modalAddCourse.open();
			} 

</script>