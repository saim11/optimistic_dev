
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

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
				<table id ="categoryB" class="table table-striped table-bordered">
					<thead class="table-primary" style="background-color:#32CD32">
					<tr>
						<th>#</th>
						<th>Main Course</th>
						<th>Course Units</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>
				</thead>
				<tfoot id ="table">
				</tfoot>
				</table>
<script type="text/javascript">

$( document ).ready(function() {
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"trainingtwo/fetchingRecordTwo",
	type : "POST",
	cache: false,
    success : function(data) { 
		$('#categoryB').DataTable().ajax.reload();
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
		$('#categoryB').DataTable().ajax.reload();
    },
    error : function(data) {
        console.log("error in add page Ajax Function!", data);
    }
});

}
function splittingData(data){
	if(data){
		$('#categoryB').DataTable().ajax.reload();
		// $('#table').html(data);
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
			console.log("Update Value!"+data);
			$('#confirmTwo').modal('hide');
			$('#categoryB').DataTable().ajax.reload();
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
		$('#categoryB').DataTable().ajax.reload();
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

   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">


$(document).ready( function () {
    $('#categoryB').DataTable({
		// processing: true,
    	// serverSide: true,
		ajax:<?php echo "'". base_url()."'" ?>+"trainingtwo/fetchingRecordTwo",
		columnDefs: [
            { 
                targets: 3,
                render: function(data, type, row, meta){
                   return "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirmTwo' id="+row['sub_cat_id']+" onClick='myCatTwo(this.id)'>Update</button></td>";  
                }
            },            
            { 
                targets: 4,
                render: function(data, type, row, meta){
                   return "<td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteTwo' id="+row['sub_cat_id']+" onClick='myIdTwo(this.id)'>Delete</button></td>";  
                }
            },
			{"className": "dt-center", "targets": "_all"}            
        ],
		columns:[
			{ data: 'sub_cat_id' },
        	{ data: 'book_category_title' },
        	{ data: 'book_subCategory_title' },
			
		]
	});
});
</script>

