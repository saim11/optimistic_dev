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
 <?php } if($alert=="adminerror") { ?>
  <div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> The user name or email you specified is already exist, please use different user name or email.</div>
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
        
        <button  class="btn btn-default btn-icon icon-left" type="button" onclick="javascript:window.location='<?php echo base_url('manage/'.$this->controller.'/control');?>'">
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
      
           <form class="form-inline pull-right">
                  <input class="input-medium" type="text" value="<?php echo ($keywords!="-") ? $keywords : "" ;?>"  name="search_keywords" id="search_keywords" placeholder="Search keywords" class=" span11 aplha">
                  
                  <select autocomplete="off"  class=" noselect input-medium" name="search_status" id="search_status">
                  <option value="-">Select Status</option>
                  <option value="Enable" <?php if(isset($status)&&$status=="Enable"){ echo ' selected="selected" ';} ?>>Enable</option>
                  <option value="Disable" <?php if(isset($status)&&$status=="Disable"){ echo ' selected="selected" ';} ?>>Disable</option>
                  </select>
             </form> 
         
        <strong>&nbsp;</strong>
      
        <hr />
		<form action="<?php echo ADMIN_URL.$this->controller;?>/deleteall" method="post" name="multiDel" id="multiDel">
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th><input type="checkbox" id="all-checkbox" name="all-checkbox" autocomplete="off"></th>
                    <th><a href="<?php echo base_url('manage/'.$this->controller.'/index/'.$this->pKey.'/'.$order.'/'.$status.'/'.$keywords.'/'.$page_numb);?>">ID</a></th>
					<th><a href="<?php echo base_url('manage/'.$this->controller.'/index/user_name/'.$order.'/'.$page_numb);?>">User Name</a></th>
                    <th  class="hideCol"><a href="<?php echo base_url('manage/'.$this->controller.'/index/full_name/'.$order.'/'.$page_numb);?>">Full Name</a></th>
                    <th class="hidden"><a href="<?php echo base_url('manage/'.$this->controller.'/index/user_role/'.$order.'/'.$status.'/'.$keywords.'/'.$page_numb);?>">Role</a></th>
                    <th><a href="<?php echo base_url('manage/'.$this->controller.'/index/'.$this->tStatus.'/'.$order.'/'.$status.'/'.$keywords.'/'.$page_numb);?>">Status</a></th>
                    <th  class="hideCol"><a href="<?php echo base_url('manage/'.$this->controller.'/index/date_created/'.$order.'/'.$page_numb);?>">Added On</a></th>
                    <th>Actions</th>
				</tr>
			</thead>
			
			<tbody>
            <?php
			  if(count($records)>0)
			  {
				foreach($records as $c)
				{
					?>
              <tr>
                  <td><?php if($c['id']>1){ ?><input name="records[]" autocomplete="off" class="cselect" value="<?php echo $c['id'];?>" type="checkbox" /><?php } ?></td>
                 <td><?php echo $c['id'];?></td>
                  
                  <td><a  href="<?php echo base_url();?>manage/users/control/edit/<?php echo $c['id'];?>"><?php echo $c['user_name'];?></a></td>
                  <td  class="hideCol"><a  href="<?php echo base_url();?>manage/users/control/edit/<?php echo $c['id'];?>"><?php echo $c['full_name'];?></a></td>
                  <td  class="hidden"><?php echo $c['user_role'];?></td>
                  <td><a class="<?php echo ($c['id']=="1") ? '' : 'changestatus';?>" href="javascript:void(0);" data-controller="<?php echo $this->controller;?>" id="statusID<?php echo $c[$this->pKey];?>"><?php echo $c['status'];?></a></td>
                  <td class="hideCol"><?php echo date('M d, Y h:i a', strtotime($c['date_created']));?></td>
                  <td>
                 	<a class="icon-left font16" href="<?php echo base_url('manage/'.$this->controller.'/control/edit/'.$c[$this->pKey]);?>">
					<i class="entypo-pencil"></i></a>
				
					<?php if($c['id']>1){ ?><a class="icon-left font16 delitem" href="javascript:void(0);" data-controller="<?php echo $this->controller;?>" id="recordID<?php echo $c[$this->pKey];?>">
					<i class="entypo-cancel"></i></a><?php } ?>
                    
                  </td>
                </tr>      
                    
			 <?php		
				}
			  }
			  else{ ?>
				<tr><td colspan="8">Sorry! No Records.</td></tr>
              <?php  
			  }
			  ?>
				
			</tbody>
		</table>
        </form>
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
$("#search_status").on('change',function(){
	var search_keywords = $("#search_keywords").val();
	search_keywords = (search_keywords=="") ? "-" : encodeURI(search_keywords);
	window.location = "<?php echo base_url('manage/'.$this->controller.'/index/'.$sortby.'/'.(($order=="ASC") ? 'DESC' : 'ASC'));?>/"+$("#search_status").val()+"/"+search_keywords;
});

$("#search_keywords").keypress(function(event) {
	if (event.keyCode == 13) {
		var search_keywords = $("#search_keywords").val();
	search_keywords = (search_keywords=="") ? "-" : encodeURI(search_keywords);
		window.location = "<?php echo base_url('manage/'.$this->controller.'/index/'.$sortby.'/'.(($order=="ASC") ? 'DESC' : 'ASC'));?>/"+$("#search_status").val()+"/"+search_keywords;
		return false;
	}
});	
</script>


