
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

</style>

<ol class="breadcrumb bc-3">
<li><a href="<?php echo ADMIN_URL;?>"><i class="entypo-home"></i>Home</a></li>
<li class="active"><strong><?php echo $this->moduleName;?></strong></li>
</ol>





<div class="row" style="min-height:400px;">
	<div class="col-md-12">

		<br clear="all" />
		<hr />
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
					<th style="text-align: center;color:white!important;">Students</th>
					<th style="text-align: center;color:white!important;">Coordinators</th>					
					<th style="text-align: center;color:white!important;">Status</th>
					<th style="text-align: center;color:white!important;">Action</th>
				</tr>
				</thead>
				<tbody style="text-align:center;">
				<?php
				foreach(array_unique($listing, SORT_REGULAR) as $cols){
					?>
					<tr>
					<td><?php echo $cols['course_name']; ?></td>
					<td><?php echo $cols['course_title']; ?></td>
					<td>
					
					<?php 
						$students = $this->SqlModel->getRecords('student_id', 'students', '', '',  array('sub_courses_id'=>$cols['id'],'course_id'=>$cols['course_id']));
						$students = array_unique($students, SORT_REGULAR);
					?>
					<span class="icon-left font16 inoti" style="color:grey">
							   <i class="entypo-users"></i><span class="badge badge-secondary" style="background-color:green"><?php echo count($students); ?></span>
					</span>
					</td>
					<td>
					<?php 
						$coordinator = $this->SqlModel->getRecords('coordinator_id', 'students', '', '',  array('sub_courses_id'=>$cols['id'],'course_id'=>$cols['course_id']));
						$coordinator = array_unique($coordinator, SORT_REGULAR);
						// echo count($coordinator);
					?>
					<span class="icon-left font16 inoti" style="color:grey" >
							   <i class="entypo-user"></i><span class="badge badge-secondary" style="background-color:blue"><?php echo count($coordinator); ?></span>
					</span>
					</td>
					<td style="color:blue"><?php echo $this->SqlModel->getSingleField('status', 'sub_courses',array('id'=>$cols['id'],'course_id'=>$cols['course_id'])); ?></td>
					<td ><a href="<?php echo base_url('manage/'.$this->controller.'/control/students/'.$cols['id'].'?'.$_SERVER['QUERY_STRING']);?>">View Details</a></td>
					</tr>
				<?php
				} ?>
                
				</tbody>
			</table>
		</form>

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