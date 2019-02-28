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

</style>

<ol class="breadcrumb bc-3">
<li><a href="<?php echo ADMIN_URL;?>"><i class="entypo-home"></i>Home</a></li>
<li class="active"><strong><?php echo $this->moduleName;?></strong></li>
</ol>


<div class="row" style="min-height:400px;">
	<div class="col-md-12">
	<button type="button" class="btn btn-info" style="float:right;" onClick="javascript:window.location.href='<?php echo base_url()."manage/studentForms"?>'"><i class="entypo-docs"></i>All Student Forms</button>
		<br clear="all" />
		<hr />
		<div class="page-header">
  			<h1>Student Forms</h1>
		</div>
		
		
			<!-- Trainer tab -->
			<div class="tab-pane" id="profile">
			<form action="<?php echo ADMIN_URL.$this->controller.'/deleteall';?>" method="post" name="multiDel" id="multiDel">
			<table id="table-<?php echo $this->controller;?>" class="table table-hover table-striped">
				<thead>
				<tr>
					<th>Student ID</th>
					<th>Form ID</th>
					<th>Student Name</th>
					<th>Form Name</th>					
					<th>Submission Date</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
                <tr>
				<?php foreach ($form1_data as $cols) {
				
					?>
					<td><?php echo $cols['user_id']; ?></td>
					<td><?php echo $cols['Id']; ?></td>
					<td><?php echo $student_name; ?></td>
					<td><?php echo "USI Permission Verification Form"?></td>
					<td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
					<td><?php echo $cols['form_approval']; ?></td>
					<td>										
					<a href="<?php echo base_url('manage/'.$this->controller.'/formOne/'.$cols['user_id']."/".$cols['Id'])?>">
					View Form
					</a>
					 </td>
				</tr>
                <?php }?>
                
				<tr>
                <?php foreach ($form2_data as $cols) {
				
					?>
					<td><?php echo $cols['user_id']; ?></td>
					<td><?php echo $cols['Id']; ?></td>
					<td><?php echo $student_name; ?></td>
					<td><?php echo "Enrolment Booklet"?></td>
					<td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
					<td><?php echo $cols['form_approval']; ?></td>
					<td>										
					<a href="<?php echo base_url('manage/'.$this->controller.'/formTwo/'.$cols['user_id']."/".$cols['Id'])?>">
					View Form
					</a>
					 </td>
				</tr>
				<tr>
				<?php }
				 foreach ($form3_data as $cols) {
				
					?>
					<td><?php echo $cols['user_id']; ?></td>
					<td><?php echo $cols['id']; ?></td>
					<td><?php echo $student_name; ?></td>
					<td><?php echo "SKILLS FIRST PROGRAM ENROLMENT AGREEMENT FORM"?></td>
					<td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date']));   ?></td>
					<td><?php echo $cols['form_approval']; ?></td>
					<td>										
					<a href="<?php echo base_url('manage/'.$this->controller.'/formThree/'.$cols['user_id']."/".$cols['id'])?>">
					View Form
					</a>
					 </td>
				</tr>
				<tr>
				<?php
				}
				foreach ($form4_data as $cols) {
					?>
					<td><?php echo $cols['user_id']; ?></td>
					<td><?php echo $cols['id']; ?></td>
					<td><?php echo $student_name; ?></td>
					<td><?php echo "STUDENT INDUCTION FORM"?></td>
					<td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date']));  ?></td>
					<td><?php echo $cols['form_approval']; ?></td>
					<td>										
					<a href="<?php echo base_url('manage/'.$this->controller.'/formFour/'.$cols['user_id']."/".$cols['id'])?>">
					View Form
					</a>
					 </td>
				</tr>
				<?php }?>
				</tbody>
			</table>
			<?php 
				if(sizeof($form2_data) <= 0 & sizeof($form3_data) <=0 & sizeof($form4_data) <=0 & sizeof($form1_data) <=0 )
				{?>
				<div class="page-header no-rec">
					 <small>No <strong>Record</strong> found for this user!</small>
				</div>
				<?php
					}
				?>	
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