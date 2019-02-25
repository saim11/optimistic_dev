<?php 
$crumb2 = "";
$data_array=array();
 if(isset($tbl_data[$this->pKey])&&$tbl_data[$this->pKey]!=""){
	
	
	  
	$crumb = "Edit";
	$action = "editRecord/edit/".$tbl_data[$this->pKey]; 
 }
 else{

	$crumb = "Add";
	$action = "addRecord"; 
 }
  foreach ($this->model as $cols) {
	 
	        if($cols['view_update'])
			{
				$value_col="";
				if(isset($tbl_data[$cols['name']]))
				{
					$value_col=$tbl_data[$cols['name']];
				}
				else
				{
					if(isset($_GET[$cols['name']]))
					{
						$value_col=$_GET[$cols['name']];
					}
					else if(isset($cols['default']))
					{
						$value_col=$cols['default'];
					}
				}
				$data_array[$cols['name']]=$value_col;
			}
 }
 
 
 ?>

<ol class="breadcrumb bc-3">
<li><a href="<?php echo ADMIN_URL;?>"><i class="entypo-home"></i>Home</a></li>
<li><a href="<?php echo ADMIN_URL.$this->controller;?>"><i></i><?php echo $this->moduleName;?></a></li><li class="active"><strong><?php echo $crumb;?> <?php echo rtrim($this->moduleName,'s');?></strong></li>
</ol>
     
     
     

     
     

<h2><?php echo $crumb;?> <?php echo rtrim($this->moduleName,'s');?></h2>
<br />


<div class="panel panel-primary">

	
	
	<div class="panel-body">
		 <form  id="page_form" name="page_form" method="post" action="<?php echo base_url('manage/'.$this->controller.'/'.$action.'?'.$_SERVER['QUERY_STRING']);?>" enctype="multipart/form-data" class="validate">
			
          <?php foreach ($this->model as $cols) {
	         if($cols['view_update']) {
				 ?>

			 <?php if($cols['type'] == 'text') { ?>
			 <div class="form-group">
				<h4 class="control-label"><?php echo $cols['view_name']; ?> :</h4>
                  <input type="text" name="<?php echo $cols['name']; ?>" id="<?php echo $cols['name']; ?>" value="<?php echo $data_array[$cols['name']]; ?>" class="form-control " placeholder="<?php echo $cols['view_name']; ?>" data-validate="maxlength[250]"/>
			 </div>
			 <?php } ?>

				 <?php if($cols['type'] == 'date') { ?>
					 <div class="form-group">
						 <h4 class="control-label"><?php echo $cols['view_name']; ?> :</h4>

						 <input  type="text" name="<?php echo $cols['name']; ?>" id="<?php echo $cols['name']; ?>" value="<?php echo $data_array[$cols['name']]; ?>" class="form-control datetimepick" placeholder="<?php echo $cols['view_name']; ?>" data-validate="required,maxlength[250]"/>
					 </div>
				 <?php } ?>
			<?php if($cols['type'] == 'detail') { ?>
					 <div class="form-group">
						 <h4 class="control-label"><?php echo $cols['view_name']; ?> :</h4>
						 <a href="<?php echo $this->config->base_url().$cols['detail_link'].$data_array[$cols['name']]; ?>">link</a>
					 </div>
			<?php } ?>
			 
			 <?php if($cols['type'] == 'image') { ?>
			  <div class="form-group " >
				 <h4 class="control-label"><?php echo $cols['view_name']; ?> :</h4>
                  <img width="100px" src="<?php echo $this->config->base_url().$data_array[$cols['name']]; ?>" />
                  <input type="file" name="<?php echo $cols['name']; ?>" id="<?php echo $cols['name']; ?>" accept="image/x-png,image/png,image/pjpeg,image/jpeg"/>
			</div>
			 <?php } ?>
			 
			 <?php if($cols['type'] == 'rte') { ?>
			 
			 <div class="form-group">
				<h4 class="control-label"><?php echo $cols['view_name']; ?> :</h4>
                
                  <?php   echo $this->ckeditor->editor($cols['name'],html_entity_decode($data_array[$cols['name']]));?>
			</div>
			 
			 <?php } ?>
			 
			 <?php if($cols['type'] == 'textarea') { ?>
			 
			 <div class="form-group">
				<h4 class="control-label"><?php echo $cols['view_name']; ?> :</h4>
                <textarea name="<?php echo $cols['name']; ?>"><?php echo $data_array[$cols['name']]; ?></textarea>
			</div>
			 
			 <?php } ?>
			 
			 <?php if($cols['type'] == 'radio') { ?>

			 <div class="form-group">
			 <h4 class="control-label"><?php echo $cols['view_name']; ?> :</h4>
			 <?php foreach($cols['list'] as $option){  ?>
				<div>
				<br>
				<label class="control-label"><?php echo $option["show"]; ?> :</label>
                <input name="<?php echo $cols['name']; ?>" <?php if($option["value"] ==$data_array[$cols['name']]){ echo "checked"; } ?> value="<?php echo $option["value"]; ?>" type="radio" />
				</div>
			 <?php } ?>
                  
			</div>
			 
			 <?php } ?>
			 
			 <?php if($cols['type'] == 'checkbox') {
             $checkbox_values=explode(',', $data_array[$cols['name']]);
			 ?>
			 <div class="form-group">
				<h4 class="control-label"><?php echo $cols['view_name']; ?> :</h4>
                <?php foreach($cols['list'] as $option){  ?>
				<div>
				<br>
				<label class="control-label"><?php echo $option["show"]; ?> :</label>
                <input name="<?php echo $cols['name']; ?>[]" <?php if (in_array($option["value"], $checkbox_values)){ echo "checked"; } ?> value="<?php echo $option["value"]; ?>" type="checkbox" />
				</div>
			 <?php } ?>
                  
			</div>
			 <?php } ?>
			 
			 <?php if($cols['type'] == 'select') { ?>
			 <div class="form-group">
				<h4 class="control-label"><?php echo $cols['view_name']; ?> :</h4>
                <select name="<?php echo $cols['name']; ?>" autocomplete="off" class="form-control" >
				<?php foreach($cols['list'] as $option){  ?>
				<option <?php if($option["value"] ==$data_array[$cols['name']]){ echo "selected"; } ?> value="<?php echo $option["value"]; ?>"  ><?php echo $option["show"]; ?> </option>
				<?php } ?>
				
				</select>
                  
			</div>
			 <?php } ?>
			 
			 <?php if($cols['type'] == 'file') { ?>
			 <div class="form-group " >
				 <h4 class="control-label"><?php echo $cols['view_name']; ?> :</h4>
                 <a href="<?php echo $this->config->base_url().$data_array[$cols['name']]; ?>">link</a>
                  <input type="file" name="<?php echo $cols['name']; ?>" id="<?php echo $cols['name']; ?>" />
			</div>
			 <?php } ?>
			 
				
			
		  <?php } } ?>
                        
			
			<div class="form-group">
				
				<button type="button" class="btn btn-danger" onclick="window.location='<?php echo ADMIN_URL;?>pages'">Cancel</button>
                <button type="submit"  class="btn btn-success">Submit</button>
			</div>
		
		</form>
	
  
	
</div>
  
  </div>


<script type="text/javascript">
$(function(){
	$("#on_side").on('change',function(){
		if(this.value=="Yes")
		{
			$("#colorBox").removeClass("hidden");	
		}
		else{
			$("#colorBox").addClass("hidden");
			
		}
	});	
});

</script>