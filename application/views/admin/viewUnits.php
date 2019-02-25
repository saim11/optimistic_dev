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
  background-color:green;
  color:white;
}
.link_back{
	float: left;
  margin-right: 2rem;
  border-radius: 55% 0%;
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
		<button type="button" class="btn btn-secondary entypo-plus-circled link_" onclick="modalOpenAddUnits(event,<?php echo $sub_course_id ?>);">
			Add Units
		</button>
		<button type="button" class="btn btn-secondary entypo-back link_back" onclick="javascript:window.location='<?php echo base_url('manage/'.$this->controller.'/viewCourses');?>'">
			Back to Courses
		</button>

		<br clear="all" />
		<hr />
		<?php echo $alert; ?>
		<div class="page-header">
  			<h1>Units Details</h1>
		</div>
		
			<!-- Trainer tab -->
			<div class="tab-pane" id="profile">
			<form action="<?php echo ADMIN_URL.$this->controller.'/deleteall';?>" method="post" name="multiDel" id="multiDel">
			<table id="table-<?php echo $this->controller;?>" class="table table-hover table-striped">
				<thead class="tblhead">
				<tr>
					<th style="text-align: center;color:white!important;">#</th>
					<th style="text-align: center;color:white!important;">Unit</th>
					<th style="text-align: center;color:white!important;">Course</th>
					<th style="text-align: center;color:white!important;">Description</th>
					<th style="text-align: center;color:white!important;">Hours</th>
					<th style="text-align: center;color:white!important;">Action</th>
				</tr>
				</thead>
				<tbody style="text-align:center;">
				<script>var listing = <?php echo json_encode($listing); ?>;</script>
				<?php
				$count = 1;
				foreach(array_unique($listing, SORT_REGULAR) as $cols){
					?>
					<tr>
					<td><?php echo $count++; ?></td>
					<td><?php echo $cols['unit_name']; ?></td>
					<td><?php echo $sub_course; ?></td>
					<td><?php echo $cols['unit_description']; ?></td>
					<td><?php echo $cols['unit_hours']; ?></td>
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
							<strong>Edit Unit</strong>
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
							<form class="form-horizontal" method="POST" Id="deleteUnits" action="" >
						<div class="modal-header">
							<strong>Delete Unit</strong>
						</div>		
						<div class="modal-body" >
						<p id="actionUnits"> </p>
						</div>

						<div class="modal-footer">
							<button class="btn btn-default" type="button" onclick="modalDelete.close();">Cancel</button>
							<button class="btn btn-primary" type="submit" onclick="modalDelete.close();">Yes</button>
						</div>
					</form>
					
            				</div>
        				</div>
    				</div>

					<div id="modalAddUnits" class="modal" >
        				<div class="modal-dialog animated" style="width:180%;max-width:500px;">
            				<div class="modal-content"  style="width:100%;" >
							<form class="form-horizontal" method="POST" Id="addCourseForm" action="" >
						<div class="modal-header">
							<strong>Add Units</strong>
						</div>		
						<div class="modal-body" >
						<p id="addUnits"> </p>
						</div>

						<div class="modal-footer">
							<button class="btn btn-default" type="button" onclick="modalAddUnits.close();">Cancel</button>
							<button class="btn btn-primary" type="submit" onclick="modalAddUnits.close();">Save</button>
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
			var modalAddUnits = new RModal(document.getElementById('modalAddUnits'), {
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
		console.log(data);
		data.forEach(function(entry){
			if(e.target.id == entry.id && count == 0){
					$("#course").attr('action','<?php echo base_url()."manage/".$this->controller.'/editUnits/';?>'+entry.sub_courses_id+"/"+entry.id);
					++count;
					$("#editCourse")
					.append("<br /><label>Unit Name </label><br />")
					.append("<input type='text' class='form-control' id='"+entry.id+"' name='"+entry.id+"_name' value='"+entry.unit_name+"'/>")
					.append("<br /><label>Unit Description </label><br />")
					.append("<input type='text' class='form-control' id='"+entry.id+"_description' name='"+entry.id+"_description' value='"+entry.unit_description+"'/>")
					.append("<br /><label>Unit hours </label><br />")
					.append("<input type='text' class='form-control' id='"+entry.id+"_unit_hours' name='"+entry.id+"_hours' value='"+entry.unit_hours+"'/>");
					e.preventDefault();
					modal.open();
				}
				})
			} 
	function modalOpenDelete(e,data){
		$("#actionUnits").empty();
		count = 0;
		data.forEach(function(entry){
			if(e.target.id == entry.id && count == 0){
					$("#deleteUnits").attr('action','<?php echo base_url()."manage/".$this->controller.'/deleteUnits/';?>'+entry.sub_courses_id+"/"+entry.id);
					++count;
					$("#actionUnits")
					.append("<h5> Do you want to delete <strong>"+entry.unit_name+" </strong> ? </h5>");
					e.preventDefault();
					modalDelete.open();
				}
				})
			} 
		function modalOpenAddUnits(e,id){
		$("#addUnits").empty();

					$("#addCourseForm").attr('action','<?php echo base_url()."manage/".$this->controller.'/addUnits/';?>'+id);
					$("#addUnits")
					.append("<br /><label>Unit Name </label><br />")
					.append("<input type='text' class='form-control' id='unitName' name='unitName' value=''/>")
					.append("<br /><label>Unit Description </label><br />")
					.append("<input type='text' class='form-control' id='unitDescription' name='unitDescription' value=''/>")
					.append("<br /><label>Unit hours </label><br />")
					.append("<input type='text' class='form-control' id='unitHours' name='unitHours' value=''/>");
					e.preventDefault();
					modalAddUnits.open();
			} 

</script>