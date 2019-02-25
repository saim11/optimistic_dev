
<?php print_r ($fetch_sub_cat[0]["book_subCategory_title"]);echo count($fetch_sub_cat); ?>

<table class="tableThree">
    				<tbody>
						<tr>
							<td width="30%">
								<select autocomplete="off" class="form-control"  name="page_status"  id="catLevelOneSelector" onChange="catSelectorA()">
								<option value="select">--Select Trainer Category--</option>
								<?php 
								for ($x = 0; $x <= count($fetch_rec)-1; $x++) {
									echo "<option value='".$fetch_rec[$x]['book_category_id']."'>".$fetch_rec[$x]['book_category_title']."</option>";
								} 
								?>	
								</select>
							</td>
							<td width="30%">
								<select autocomplete="off" class="form-control"  name="page_status"  id="catLevelTwoSelector" onChange="catSelectorB()">
								<option value="select">--Select Trainer Child Category--</option>
								<?php 
								for ($x = 0; $x <= count($fetch_sub_cat)-1; $x++) {
									echo "<option value='".$fetch_sub_cat[$x]['sub_cat_id']."'>".$fetch_sub_cat[$x]['book_subCategory_title']."</option>";
								} 
								?>	
								</select>
							</td>
							<td><input type="text" name="addCatLvl3" id="addCatLvl3"  class="form-control " placeholder="Add Child Category of Books" data-validate="required,maxlength[250]"/></td>
							<td><button type="button"  id="addCatLvl3" class="btn btn-success" onClick="addCategoryC(this.id)" >Add</button></td>
						</tr>
    				</tbody>
				  </table>
			       <hr />
				<table class="table table-dark">
					<thead class="table-primary" >
					<tr>
						<th>#</th>
						<th>Grand Child Category Title</th>
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
    url : <?php echo "'". base_url()."'" ?>+"trainingthree/fetchingRecordThree",
	type : "POST",
	cache: false,
    success : function(data) { 
		// console.log(data);
		splittingData(data);
	},
    error : function(data) {
        console.log("error in Loading page!!", data);
    }
	});
});

$('.modal').parent().on('show.bs.modal', function (e) { $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); });
var catSelectedA= "";
var catSelectedB= "";
function catSelectorA(){
	catSelectedA = document.getElementById("catLevelOneSelector").value;
	console.log(catSelectedA);
}
function catSelectorB(){
	catSelectedB = document.getElementById("catLevelTwoSelector").value;
	console.log(catSelectedB);
}

// Add Child Category of Level B
function addCategoryC(elementId){
	val = document.getElementById(elementId).value;
	console.log(elementId, catSelectedA, catSelectedB, val)
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"trainingthree/add",
	type : "POST",
	cache: false,
	data : {"action": val,'catSelectedA' : catSelectedA, 'catSelectedB' : catSelectedB,"elementId":elementId},
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
		$('#table').html(data);
	}
}


function myCatThree(id) {
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"trainingthree/Update",
	type : "POST",
	cache: false,
	dataType: "json",
	data : {"subCatUpdateId": id},
    success : function(data) { 
		$("#categoryThree").val(data);
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



function updatedValThree(status){
	var doc = document.getElementsByTagName('button');
	var catName = $("#categoryThree").val();
	if(status == "true"){
		for (var i = 0; i < doc.length; i++) {
	if(doc.item(i).name=="yes"){
		var id =document.getElementsByTagName('button').item(i).id;
		console.log("updateVal function",id, catName);
		$.ajax({
   	 	url : <?php echo "'". base_url()."'" ?>+"trainingthree/updatedVal",
		type : "POST",
		cache: false,
		data : {"updateId": id, "updatedValue":catName },
		success : function(data) { 
			splittingData(data);
			console.log("Update Value!"+data);
			$('#confirmThree').modal('hide');
		},
		error : function(data) {
			console.log("error in add page Ajax Function!", data);
		}
	})
  }}}
}



function myIdThree(id) {
	var doc = document.getElementsByTagName('button');
for (var i = 0; i < doc.length; i++) {
	if(doc.item(i).name=="yes"){
		 document.getElementsByTagName('button').item(i).id= id;
	}
  }
}

function deleteRecordThree(status) 
{
	var doc = document.getElementsByTagName('button');
	if(status == "true"){
		for (var i = 0; i < doc.length; i++) {
			if(doc.item(i).name=="yes"){
	var id =document.getElementsByTagName('button').item(i).id;
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"trainingthree/Delete",
	type : "POST",
	cache: false,
	data : {"deleteId": id},
    success : function(data) { 
		splittingData(data);
		$('#deleteThree').modal('hide');
		console.log("Delete function successful!"+data);
	},
    error : function(data) {
        console.log("error in Delete page Ajax Function!", data);
    }
	});
  }}
 }
}
















</script>




<div class="panel panel-primary">
 <!-- Modal Box Pop Up -->
 <div class="modal fade" id="confirmThree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
					  	<div class="modal-body">
							<div class="form-group">
								<label for="usr">Category Title:</label>
								<input type="text" class="form-control" id="categoryThree">
							</div>
					  	</div>
					  	<div class="modal-footer">
						<button type="button"  class="btn btn-secondary btn-block" data-dismiss="modal">Cancel</button>
						<button type="button" name ="yes" class="btn btn-primary btn-block" onClick="updatedValThree('true')">Yes</button>
					  </div>
					</div>
				  </div>
	</div>
	
   <!--End Modal Box Pop Up -->
   <!-- Modal Box Pop Up for Delete-->
 <div class="modal fade" id="deleteThree" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
					  	<div class="modal-body">
						  Are you sure , you want to delete this Record ?
					  	</div>
					  	<div class="modal-footer">
						<button type="button"  class="btn btn-secondary " data-dismiss="modal">Cancel</button>
						<button type="button" name ="yes" class="btn btn-primary " onClick="deleteRecordThree('true')">Yes, Sure</button>
					  </div>
					</div>
				  </div>
	</div>
	
   <!--End Modal Box Pop Up -->
