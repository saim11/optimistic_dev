
<!-- <?php print_r ($fetch_rec[0]["book_category_title"]);echo count($fetch_rec); ?> -->

<table class="tableTwo">
					<hr />
    				<tbody>
						<tr>
							<td width="30%">
								<select autocomplete="off" class="form-control"  name="page_status"  id="catLevelOneSelector" onChange="catSelector()">
								<option value="select">--Select Trainer Category--</option>
								<?php 
								for ($x = 0; $x <= count($fetch_rec)-1; $x++) {
									echo "<option value='".$fetch_rec[$x]['book_category_id']."'>".$fetch_rec[$x]['book_category_title']."</option>";
								} 
								?>	
								</select>
							</td>
							<td width="70%"><input type="text" name="addCatLvl2" id="addCatLvl2"  class="form-control " placeholder="Add Child Category of Books" data-validate="require,maxlength[250]"/></td>
							<td><button type="button"  id="addCatLvl2" class="btn btn-success" onClick="addCategoryB(this.id)" >Add</button></td>
						</tr>
    				</tbody>
				  </table>
			       <hr />
				<table class="table table-dark">
					<thead class="table-primary" style="background-color:#32CD32">
					<tr>
						<th>#</th>
						<th>Child Category Title</th>
						<th>Category Title</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>
					</thead>
					<tbody id ="table">
					</tbody>
</table>
<script type="text/javascript">

$( document ).ready(function() {
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"trainingtwo/fetchingRecordTwo",
	type : "POST",
	cache: false,
    success : function(data) { 
		splittingData(data);
	},
    error : function(data) {
        console.log("error in Loading page!!", data);
    }
	});
});

$('.modal').parent().on('show.bs.modal', function (e) { $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); });
var catSelected= "";
function catSelector(){
	catSelected = document.getElementById("catLevelOneSelector").value;
	console.log(catSelected);
}

// Add Child Category of Level B
function addCategoryB(elementId){
	val = document.getElementById(elementId).value;
	console.log(elementId, catSelected, val)
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"training/index",
	type : "POST",
	cache: false,
	data : {"action": val, 'catSelected' : catSelected  ,"elementId":elementId},
    success : function(data) {
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
		$('#table').html(data);
	}
}


function myCatTwo(id) {
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"trainingtwo/Update",
	type : "POST",
	cache: false,
	dataType: "json",
	data : {"subCatUpdateId": id},
    success : function(data) { 
		$("#categoryTwo").val(data);
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



function updatedValTwo(status){
	var doc = document.getElementsByTagName('button');
	var catName = $("#categoryTwo").val();
	if(status == "true"){
		for (var i = 0; i < doc.length; i++) {
	if(doc.item(i).name=="yes"){
		var id =document.getElementsByTagName('button').item(i).id;
		console.log("updateVal function",id, catName);
		$.ajax({
   	 	url : <?php echo "'". base_url()."'" ?>+"trainingtwo/updatedVal",
		type : "POST",
		cache: false,
		data : {"updateId": id, "updatedValue":catName },
		success : function(data) { 
			splittingData(data);
			console.log("Update Value!"+data);
			$('#confirmTwo').modal('hide');
		},
		error : function(data) {
			console.log("Error in add page Ajax Function!", data);
		}
	})
  }}}
}



function myIdTwo(id) {
	var doc = document.getElementsByTagName('button');
for (var i = 0; i < doc.length; i++) {
	if(doc.item(i).name=="yes"){
		 document.getElementsByTagName('button').item(i).id= id;
	}
  }
}

function deleteRecordTwo(status) 
{
	var doc = document.getElementsByTagName('button');
	if(status == "true"){
		for (var i = 0; i < doc.length; i++) {
			if(doc.item(i).name=="yes"){
	var id =document.getElementsByTagName('button').item(i).id;
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"trainingtwo/Delete",
	type : "POST",
	cache: false,
	data : {"deleteId": id},
    success : function(data) { 
		splittingData(data);
		$('#deleteTwo').modal('hide');
		console.log("Delete function successful!");
	},
    error : function(data) {
        console.log("Error in Delete page Ajax Function!", data);
		}
	});
  }
  }
 }
}
















</script>




<div class="panel panel-primary">
 <!-- Modal Box Pop Up -->
 <div class="modal fade" id="confirmTwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
					  	<div class="modal-body">
							<div class="form-group">
								<label for="usr">Category Title:</label>
								<input type="text" class="form-control" id="categoryTwo">
							</div>
					  	</div>
					  	<div class="modal-footer">
						<button type="button"  class="btn btn-secondary btn-block" data-dismiss="modal">Cancel</button>
						<button type="button" name ="yes" class="btn btn-primary btn-block" onClick="updatedValTwo('true')">Yes</button>
					  </div>
					</div>
				  </div>
	</div>
	
   <!--End Modal Box Pop Up -->
   <!-- Modal Box Pop Up for Delete-->
 <div class="modal fade" id="deleteTwo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
					  	<div class="modal-body">
						  Are you sure , you want to delete this Record ?
					  	</div>
					  	<div class="modal-footer">
						<button type="button"  class="btn btn-secondary " data-dismiss="modal">Cancel</button>
						<button type="button" name ="yes" class="btn btn-primary " onClick="deleteRecordTwo('true')">Yes, Sure</button>
					  </div>
					</div>
				  </div>
	</div>
	
   <!--End Modal Box Pop Up -->
