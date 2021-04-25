<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
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
<style>
th.dt-center, td.dt-center { text-align: center; }
</style>

<?php 
// Flash Messages End  
}?>

<?php 

$crumb2 = "";

 if(isset($tbl_data['page_id'])&&$tbl_data['page_id']!=""){
	$page_name = $tbl_data['page_name'];
	$page_title = $tbl_data['page_title'];
	$page_uri = $tbl_data['page_uri'];
	$page_text = stripslashes($tbl_data['page_text']);
	 $page_feature_text = stripslashes($tbl_data['page_feature_text']);
	$page_status = $tbl_data['page_status']; 
	$unpub_date = ($tbl_data['page_updated']!="0000-00-00 00:00:00") ? date('d F Y',strtotime($tbl_data['page_updated'])) : '';
	$unpub_time = ($tbl_data['page_updated']!="0000-00-00 00:00:00") ? date('H:i:s A',strtotime($tbl_data['page_updated'])) : '';
	 $page_background=$tbl_data['page_background'];

	$crumb = "Edit";
	$actionCat="addCategory/".$parent_id."/".$tbl_data['page_id'];
	$action = "editRecord/".$parent_id."/".$tbl_data['page_id']; 
 }
 else{
	$page_uri = "";
	$page_title = "";
	$page_name="";
	$page_text="";
	$page_status = "Published";
	$page_meta_key = "";
	$page_meta_desc = "";
	$page_extra_tags = "";
	$page_pdate = "";
	$pub_date = '';
	$pub_time = '';
	$unpub_date = '';
	 $page_feature_text="";
	$unpub_time = '';
	$page_featured = "No";
	$page_caption= "";
	$page_slider = "";
	$menu_name = "";
	$page_search = "Yes";
	$on_home = "No";
	$crumb = "Add";
	$color = 'green';
	$on_side = "No";
	$page_facebook = "Yes";
	$page_news= "Yes";
	$page_side_page= "No";
	$page_testi= "No";
	$page_links= "Yes";
	$page_background='';
	$action = "editRecord/".$parent_id; 
 }
 if($tbl_data['page_id'] == 50){
	$action = "editRecord/".$parent_id."/".$tbl_data['page_id']."/".$trainer_books['book_id'];
 }

 ?>

<ol class="breadcrumb bc-3">
<li><a href="<?php echo ADMIN_URL;?>"><i class="entypo-home"></i>Home</a></li>
<li><a href="<?php echo ADMIN_URL;?>pages"><i></i>Web Pages</a></li><?php if($parent_id!="0"){ ?><li><a href="<?php echo ADMIN_URL.'pages/index/'.$parent_id;?>"><?php echo $parent_name;?></a></li><?php  }?><li class="active"><strong><?php echo $crumb;?> Web page</strong></li>
</ol>
     
     
     

     
     

<h2><?php echo $crumb;?> Web Page</h2>
<br />
<div id="content"></div>


<div class="panel panel-primary"> 
   

	<div class="panel-body">
		 <form  id="page_form" name="page_form" method="post" action="<?php echo base_url();?>manage/pages/<?php echo $action;?>" enctype="multipart/form-data" class="validate">
		 	<?php 
		 	if($tbl_data['page_id'] != 50 ) {
			?>

			<div class="form-group">
				<label class="control-label">Page Name :</label>
                
                  <input type="text" name="page_name" id="page_name" value="<?php echo $page_name;?>" class="form-control " placeholder="About Us" data-validate="required,maxlength[250]"/>
			</div>
			
            <div class="form-group">
				<label class="control-label">Page Title :</label>
                
                  <input type="text" name="page_title" id="page_title" value="<?php echo $page_title;?>" class="form-control " placeholder="About Us" data-validate="required,maxlength[250]"/>
			</div>
			<?php
			}
		 	?>
            <div class="form-group">
					
						<div class="col-sm-8" style="padding-left:0px;">
						<?php 
		 					if($tbl_data['page_id'] != 50 && $tbl_data['page_id'] != 45 && $tbl_data['page_id'] != 46 && $tbl_data['page_id'] != 49 ) {
						?>
								<label class="control-label">Slug :</label><br clear="all" />
							<div class="pull-left">
								<input type="text" style="width:200px" name="page_uri" id="page_uri" value="<?php echo $page_uri;?>" class="form-control slug" placeholder="about-us" data-validate="required,maxlength[250]"/>
							</div>
                            <div class="pull-left" style="margin-top:7px">.html</div>
						<?php 
							}
						?>
						</div>
					</div>
					<br clear="all" /><br clear="all" />		


			
			<!-- Setting up training content which should be visible -->					
				<?php 
					if($tbl_data['page_id'] != 45 && $tbl_data['page_id'] != 46  && $tbl_data['page_id'] != 47 && $tbl_data['page_id'] != 48 && $tbl_data['page_id'] != 49 && $tbl_data['page_id'] != 50 ){
				?>		
            <div class="form-group" >
				<label class="control-label">page text :</label>
				<?php echo $this->ckeditor->editor("page_text",$page_text);?>
			</div>
			 <div class="form-group" >
				 <label class="control-label">page feature text :</label>
				 <?php echo $this->ckeditor->editor("page_feature_text",$page_feature_text);?>
			 </div>

			 <div class="form-group " >
				 <h4 class="control-label">page background :</h4>
				 <img width="100px" src="<?php echo $this->config->base_url().$page_background; ?>" />
				 <input type="file" name="page_background" id="page_background" accept="image/x-png,image/png,image/pjpeg,image/jpeg"/>
			 </div>

			 <!-- Upload course manual -->
			<?php if($tbl_data['page_id'] == 38 || $tbl_data['page_id'] == 25 || $tbl_data['page_id'] == 26 || $tbl_data['page_id'] == 25 || $tbl_data['page_id'] == 23|| $tbl_data['page_id'] == 24 || $tbl_data['page_id'] == 27|| $tbl_data['page_id'] == 28|| $tbl_data['page_id'] == 29|| $tbl_data['page_id'] == 30  )			{ ?>
			 <div class="form-group " >
				 <h4 class="control-label">Upload Course Manual:</h4>
				 <!-- <img width="100px" src="<?php echo $this->config->base_url().$page_background; ?>" /> -->
				 <?php //$upload_man = "upload-manual-".$tbl_data['page_id']; ?>
				 <input type="file" name="upload_manual" id='upload_manual' />
			 </div>			<?php } ?>
			<!--End Upload course manual  -->


					<?php 
					}
					else {
						if($tbl_data['page_id'] == 45){
							$this->load->view('admin/categoryLevelA');
						}
						else if($tbl_data['page_id'] == 46){
							$this->load->view('admin/categoryLevelB');
						}
						else if($tbl_data['page_id'] == 47){
							$this->load->view('admin/categoryLevelC');
						}
						else if($tbl_data['page_id'] == 49){
							$this->load->view('admin/categoryLevelE');
						}
						else if($tbl_data['page_id'] == 50){
							$this->load->view('admin/update_trainer_books');
						}
					}

						?>
						
				  <div class="form-group">
				 <label class="control-label">Status :</label>
                  <select autocomplete="off" class="form-control"  name="page_status" id="page_status">
                    <option value="Published" <?php if($page_status=="Published"){ echo ' selected="selected"';} ?>>Published</option>
                    <option value="Un-Published" <?php if($page_status=="Un-Published"){ echo ' selected="selected"';} ?>>Un-Published</option>
                  </select>
				</div>
			
				<!-- End of Setting up training content which should be visible -->	
			<br /><br />
			<div class="form-group">
				<button type="button" class="btn btn-danger" onclick="window.location='<?php echo ADMIN_URL;?>pages'">Cancel</button>
                <button type="submit"  class="btn btn-success">Submit</button>
			</div>
		</form>

		
 
	
	</div>
  
</div>

<!-- <script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/frontend/js/training.js"></script> -->
<?php $this->load->helper('url'); ?>
<script type="text/javascript">
$('.modal').parent().on('show.bs.modal', function (e) { $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); })

/*
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
*/




function myId(id) {
	var doc = document.getElementsByTagName('button');
for (var i = 0; i < doc.length; i++) {
	if(doc.item(i).name=="yes"){
		 document.getElementsByTagName('button').item(i).id= id;
	}
  }
}



function deleteRecord(status) 
{
	var doc = document.getElementsByTagName('button');
	if(status == "true"){
		for (var i = 0; i < doc.length; i++) {
			if(doc.item(i).name=="yes"){
	var id =document.getElementsByTagName('button').item(i).id;
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"training/Delete",
	type : "POST",
	cache: false,
	data : {"deleteId": id},
    success : function(data) { 
		splittingData(data);
		$('#delete').modal('hide');
		console.log("Delete function successful!"+data);
	},
    error : function(data) {
        console.log("error in Delete page Ajax Function!", data);
    }
	});
  }}
 }
}


function updatedVal(status){
	var doc = document.getElementsByTagName('button');
	var catName = $("#category").val();
	if(status == "true"){
		for (var i = 0; i < doc.length; i++) {
	if(doc.item(i).name=="yes"){
		var id =document.getElementsByTagName('button').item(i).id;
		console.log("updateVal function",id, catName);
		$.ajax({
   	 	url : <?php echo "'". base_url()."'" ?>+"training/updatedVal",
		type : "POST",
		cache: false,
		data : {"updateId": id, "updatedValue":catName },
		success : function(data) { 
			splittingData(data);
			console.log("Update Value!"+data);
			$('#confirm').modal('hide');
		},
		error : function(data) {
			console.log("error in add page Ajax Function!", data);
		}
	})
  }}}
}

function myCat(id) {
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"training/Update",
	type : "POST",
	cache: false,
	dataType: "json",
	data : {"updateId": id},
    success : function(data) { 
		$("#category").val(data);
		console.log("Update function successful!"+data);
	},
    error : function(data) {
        console.log("error in add page Ajax Function!", data);
    }
});

var doc = document.getElementsByTagName('button');
for (var i = 0; i < doc.length; i++) {
	if(doc.item(i).name=="yes"){
	var elements = document.getElementsByTagName('button').item(i).id= id;
	}
}
}


function addCategory(elementId){
	val = document.getElementById(elementId).value;
	var form = new FormData(); 
	var oFReader = new FileReader();
	oFReader.readAsDataURL($('#addCatLvl2').prop('files')[0]);
	val2 = $('#addCatLvl2').prop('files')[0];
    form.append('image', val2);
    form.append('action', val);
    form.append('elementId', elementId);
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"training/index",
	type : "POST",
	data : form ,
	contentType: false,
    cache: false,
    processData: false,
    success : function(data) {
		console.log(data);
		document.getElementById(elementId).value = "";
		splittingData(data);
    },
    error : function(data) {
        console.log("error in add page Ajax Function!", data);
    }
});

}
function splittingData(data){
	if(data){
		// $('#table').html(data);
		console.log($('#categoryA').DataTable());
		$('#categoryA').DataTable().ajax.reload();
	}
}
function getBase64Image(img) {
    var canvas = document.createElement("canvas");
    canvas.width = img.width;
    canvas.height = img.height;
    var ctx = canvas.getContext("2d");
    ctx.drawImage(img, 0, 0);

    var dataURL = canvas.toDataURL("image/png");
    return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
}

</script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->