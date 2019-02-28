<style>
.badge-count{
	/* background-color:#1c995d; */
	background-image: linear-gradient(to bottom left, yellow, #1c995d);
	color:white;
	border-radius: 5px 55px 5px 55px;
	width:25px;
}
</style>
<?php 
 $count= array();
 $form1			= "usi_permission_verification_form";
 $form2			= "enrollment_booklet";
 $form3			= "skills_first_program_enrolment_agreement_for";
 $form4			= "student_induction_form";
?>
<ol class="breadcrumb bc-3">
<li><a href="<?php echo ADMIN_URL;?>"><i class="entypo-home"></i>Home</a></li>
<li class="active"><strong><?php echo $this->moduleName;?></strong></li>
</ol>

<div class="row" style="min-height:400px;">
	<div class="col-md-12">
	

		<br clear="all" />
		<hr />
		<div class="page-header">
  			<h1>Student Forms</h1>
		</div>
			 <form class="form-inline pull-right">

				<select autocomplete="off"  class=" noselect input-medium" name="search_in" id="search_in">
				<?php foreach ($this->model as $cols) {
				if($cols['view_list'] && $cols['type'] == 'text'){

				?>
				<option <?php if($cols['name'] == $search_col){ echo 'selected'; } ?> value="<?php echo $cols['name']; ?>" ><?php echo $cols['view_name']; ?></option>
				<?php } } ?>
				</select>
				<input class="input-medium" type="text" value="<?php echo ($keywords!="-") ? $keywords : "" ;?>"  name="search_keywords" id="search_keywords" placeholder="Search keywords" class=" span11 aplha">

								
				<!-- <select autocomplete="off"  class=" noselect input-medium" name="search_status" id="search_status">
				<option value="-">Select Status</option>
				<option value="Published" <?php if(isset($status)&&$status=="Published"){ echo ' selected="selected" ';} ?>>Published</option>
				<option value="Un-Published" <?php if(isset($status)&&$status=="Un-Published"){ echo ' selected="selected" ';} ?>>Un-Published</option>
				</select> -->
			</form> 			
				&nbsp;      
				<hr />


		



		
			<!-- Trainer tab -->
			<div class="tab-pane" id="profile">
			<form action="<?php echo ADMIN_URL.$this->controller.'/deleteall';?>" method="post" name="multiDel" id="multiDel">
			<table id="table-<?php echo $this->controller;?>" class="table table-hover table-striped">
				<thead>
					<tr>
						<th><input type="checkbox" id="all-checkbox" name="all-checkbox" autocomplete="off"></th>
						<?php foreach ($this->model as $cols) {
					if($cols['view_list']){ ?>
						<th><a href="<?php echo base_url('manage/'.$this->controller.'/index/'.$cols['name'].'/'.$order.'/'.$status.'/'.$keywords.'/'.$page_numb);?>"><?php echo $cols['view_name']; ?></th>
					<?php } } ?>
						<th>View Forms</th>
					</tr>
				</thead>
				
				<tbody>
				<?php
				if(count($listing)>0 )
				{


				// Fetching all records from trainer which is activated !

				foreach($listing as $c)
					{						
						if($c['user_status']){

						?>
					<tr id="<?php echo $this->controller.'-'.$c[$this->pKey];?>">
					<td><input name="records[]" autocomplete="off" class="cselect" value="<?php echo $c[$this->pKey];?>" type="checkbox" /> </td>
					<!-- <td><?php echo $c[$this->pKey]; ?></td> -->
					<?php foreach ($this->model as $cols) {
						if(!isset($cols['icon']))
						{
							$cols['icon'] = "entypo-docs";
						}
						

					if($cols['view_list']){ ?>
						<?php if($cols['type'] == 'custom_query') { ?>
							<?php
							$cols['query']=str_replace("@value@",$c[$cols['map_field']],$cols['query']);
								$result_arry=$this->SqlModel->runQuery($cols['query'],true);
								?>
							<td>
							<ul>
							<?php 
								foreach ($result_arry as $key => $value) { ?>
								<li><?php echo $key; ?> : <?php echo $value; ?></li>
							<?php
							}
							?>

							</ul>
							</td>

						<?php } else if($cols['type'] == 'select') { ?>
							<?php $value_select=""; foreach($cols['list'] as $option){
								if($option["value"] ==$c[$cols['name']]){
									$value_select=$option["show"];
								}
							} ?>
							<td><?php echo $value_select;?></td>
						<?php } else if($cols['type'] == 'detail') { ?>
						<td><a target="_blank" href="<?php echo $this->config->base_url().$cols['detail_link'].$c[$cols['name']]; ?>"> <i class="<?php echo $cols['icon']; ?>"></i></a></td>
					<?php } else if($cols['type'] == 'file'){ ?>
					<td><a href="<?php echo $this->config->base_url().$c[$cols['name']]; ?>"> <i class="<?php echo $cols['icon']; ?>"></i></a></td>
					<?php } else if($cols['type'] == 'image') { ?>
					<td>
						<?php if($c[$cols['name']] != "") { ?>
							<img width="100px" src="<?php echo $this->config->base_url().$c[$cols['name']]; ?>"  />
						<?php } ?>
					</td>
					<?php  } else if($cols['type'] != 'action') { ?>
							<td><?php echo $c[$cols['name']];?></td>
						<?php } else{
							if(isset($cols['map_field']))
							{
								$cols['query']=str_replace("@value@",$c[$cols['map_field']],$cols['query']);
								$cols['detail_link']=str_replace("@value@",$c[$cols['map_field']],$cols['detail_link']);
							}
							else
							{
								$cols['query']=str_replace("@value@",$c[$this->pKey],$cols['query']);
								$cols['detail_link'] = str_replace("@value@",$c[$this->pKey],$cols['detail_link']);
							}

							$result_arry=$this->SqlModel->runQuery($cols['query'],true);
							$c['count']=$result_arry["count"];

							?>
						<td><a class="icon-left font16 inoti" target="_blank" href="<?php echo base_url($cols['detail_link']); ?>">
								<i class="<?php echo $cols['icon']; ?>"></i><?php echo (isset($c['count']) && (int)$c['count']>0) ? '<span class="badge badge-secondary">'.$c['count'].'</span>' : '';?></a>
					</td>
					<?php } } } ?>

					 <td>										
						<a class="icon-left font16 inoti" href="<?php echo base_url('manage/'.$this->controller.'/control/forms/'.$c[$this->pKey].'?'.$_SERVER['QUERY_STRING']);?>">
						<i class="entypo-list" ></i> <span class="badge badge-count"><?php echo $count = ($this->SqlModel->countRecords($form1,array('user_id'=>$c['user_id'], 'form_submitted'=>"Submitted"))+$this->SqlModel->countRecords($form2,array('user_id'=>$c['user_id'], 'form_submitted'=>"Submitted"))+$this->SqlModel->countRecords($form3,array('user_id'=>$c['user_id'], 'form_submitted'=>"Submitted"))+$this->SqlModel->countRecords($form4,array('user_id'=>$c['user_id'], 'form_submitted'=>"Submitted")) > 0 ) ?  $this->SqlModel->countRecords($form1,array('user_id'=>$c['user_id'], 'form_submitted'=>"Submitted"))+$this->SqlModel->countRecords($form2,array('user_id'=>$c['user_id'], 'form_submitted'=>"Submitted"))+$this->SqlModel->countRecords($form3,array('user_id'=>$c['user_id'], 'form_submitted'=>"Submitted"))+$count3 = $this->SqlModel->countRecords($form4,array('user_id'=>$c['user_id'], 'form_submitted'=>"Submitted")) : "0"; ?></span></a>
						<!-- <a class="icon-left font16 delitem" href="javascript:void(0);" data-controller="<?php echo $this->controller; ?>" id="recordID<?php echo $c[$this->pKey];?>"><i class="entypo-cancel"></i></a> -->
					 </td>
					</tr>      
						
					<?php		
					}
				}
				}
				else{ ?>
					<tr><td colspan="9">Sorry! No Records.</td></tr>
				<?php  
				}
				?>				
				</tbody>
			</table>
			</form>
			</div>

<?php 
 $total_pages = ((int) $per_page === 0 )  ? '1' : ceil($total_rows/$per_page); 
 $current_page = ((int) $per_page === 0 )  ? '1' : ceil($page_numb/$per_page)+1; 
 if($total_pages=="1")
 {
	$showing_from = 1;
	$showing_to = $total_rows;
 }
 else if($total_pages==$current_page)
 {
	$showing_from = ($per_page*($current_page-1))+1;
	$showing_to = $total_rows; 
 }
 else{
	$showing_from = ($per_page*($current_page-1))+1;
	$showing_to = $per_page*$current_page;
 }
 if($total_rows>0)
 {
?>
 Showing <?php echo $showing_from;?> to <?php echo $showing_to;?> of <?php echo $total_rows;?> Record<?php echo ((int)$total_rows>1)? 's' : '';?> (Total <?php echo $total_pages;?> Page<?php echo ((int)$total_pages>1)? 's' : '';?>) <?php } echo (isset($paginate)&&$paginate!="") ? $paginate : '';?>  
		
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