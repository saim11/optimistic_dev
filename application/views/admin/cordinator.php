

<ol class="breadcrumb bc-3">
<li><a href="<?php echo ADMIN_URL;?>"><i class="entypo-home"></i>Home</a></li>
<li class="active"><strong><?php echo $this->moduleName;?></strong></li>
</ol>

 <?php if($alert=="success") { ?>
 <div class="row alertrow">
	<div class="col-md-12">
    <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-success"><strong>Success!</strong> <?php echo rtrim($this->moduleName,'s');?> added sucessfully.</div>
	</div>
</div>
   <?php } if($alert=="deletesuccess") { ?>
 <div class="row alertrow">
	<div class="col-md-12">
    <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-success"><strong>Success!</strong> <?php echo rtrim($this->moduleName,'s');?> deleted sucessfully.</div>
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
		<div class="alert alert-success"><strong>Success!</strong> <?php echo rtrim($this->moduleName,'s');?> updated sucessfully.</div>
	</div>
</div>
   <?php } if($alert=="error") { ?>
  <div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> Error occurred while saving the record, please try again.</div>
	</div>
</div>
  <?php } ?>                    


<h2><?php echo $this->moduleName;?></h2>
<hr />



<div class="row" style="min-height:400px;">
	<div class="col-md-12">
		<button  id="deleteAllRecords" class="btn btn-default btn-icon icon-left" type="button">
            Delete Selected
            <i class="entypo-trash"></i>
        </button> 
        
        <button  class="btn btn-default btn-icon icon-left" type="button" onclick="javascript:window.location='<?php echo base_url('manage/'.$this->controller.'/control/?'.$_SERVER['QUERY_STRING']);?>'">
            Add <?php echo rtrim($this->moduleName,'s');?>
            <i class="entypo-plus-circled"></i>
        </button>
        
        <span class="selectPerPage pull-right"><br/>Records Per Page: <select class="noselect input-small" name="per_page" id="per_page">
            <option value="0" <?php echo ((int)$this->per_page===0) ? ' selected="selected" ' : '';?>>All</option>
            <?php
			for($i=10;$i<=100;$i+=10)
			{
				echo '<option value="'.$i.'"';
				echo ((int)$this->per_page===$i) ? ' selected="selected" ' : '';
				echo '>'.$i.'</option>';
			}

			
			?>
            </select></span>
		<br clear="all" />
		<hr />

		<?php
		 $count = 0;
		 foreach($listing as $data){
			//  if($data['co_status']=="Active"){
				$count = $count + 1;
			//  }
		 }
		 ?>

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









		

		<ul class="nav nav-tabs" role="tablist">
  			<li class="active"><a href="#home" role="tab" data-toggle="tab">Coordinators <span class="badge" style="background-color:#228B22;color:white"><?php echo $count ?></span></a></li>
		</ul>
		


		<div class="tab-content">
		  <div class="tab-pane active" id="home">      
			<form action="<?php echo ADMIN_URL.$this->controller.'/deleteall';?>" method="post" name="multiDel" id="multiDel">
			<table id="table-<?php echo $this->controller;?>" class="table table-hover table-striped">
				<thead>
					<tr>
						<th><input type="checkbox" id="all-checkbox" name="all-checkbox" autocomplete="off"></th>
						<!-- <th>ID</th> -->
						<?php foreach ($this->model as $cols) {
					if($cols['view_list']){
						?>
						<th><a href="<?php echo base_url('manage/'.$this->controller.'/index/'.$cols['name'].'/'.$order.'/'.$status.'/'.$keywords.'/'.$page_numb);?>"><?php echo $cols['view_name']; ?></th>
					<?php } } ?>
						<th>Actions</th>
					</tr>
				</thead>
				
				<tbody>
				<?php
				if(count($listing)>0 )
				{

					foreach($listing as $c)
					{

						// Push all students top in the list to show de-activated students, the loop will print all deactivated students 
						if($c['co_type'] == 'coordinator' && $c['co_status'] != 'Active'){

						?>
						
					<tr id="<?php echo $this->controller.'-'.$c[$this->pKey];?>" style="font-weight: bold;">
					<td><input name="records[]" autocomplete="off" class="cselect" value="<?php echo $c[$this->pKey];?>" type="checkbox" /> </td>
					<!-- <td> <?php echo $c[$this->pKey]; ?></td> -->
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
						<a class="icon-left font16" href="<?php echo base_url('manage/'.$this->controller.'/control/edit/'.$c[$this->pKey].'?'.$_SERVER['QUERY_STRING']);?>">
						<i class="entypo-pencil"></i></a>
						<a class="icon-left font16 delitem" href="javascript:void(0);" data-controller="<?php echo $this->controller; ?>" id="recordID<?php echo $c[$this->pKey];?>"><i class="entypo-cancel"></i></a>
					 </td>
					</tr>      
						
				<?php		
					}
				}


				// Push all students down in the list to show activated students, the loop will print all deactivated students 
				foreach($listing as $c)
					{
						if($c['co_type'] == 'coordinator' && $c['co_status'] == 'Active'){
						?>

					<tr id="<?php echo $this->controller.'-'.$c[$this->pKey];?>">
					<td><input name="records[]" autocomplete="off" class="cselect" value="<?php echo $c[$this->pKey];?>" type="checkbox" /> </td>
					<!-- <td><?php echo $c[$this->pKey]; ?></td> Comenting because ID not needed to be as column.-->
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
						<a class="icon-left font16" href="<?php echo base_url('manage/'.$this->controller.'/control/edit/'.$c[$this->pKey].'?'.$_SERVER['QUERY_STRING']);?>">
						<i class="entypo-pencil"></i></a>
						<a class="icon-left font16 delitem" href="javascript:void(0);" data-controller="<?php echo $this->controller; ?>" id="recordID<?php echo $c[$this->pKey];?>"><i class="entypo-cancel"></i></a>
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