
<?php
// print_r ($fetch_grand_child[0]["course_title"]);echo count($fetch_grand_child);
// print_r ($fetch_training_content[1]["content_title"]);echo count($fetch_training_content);  
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

<table class="tableThree">
    				<tbody>
						<tr>
							<label>Enter Book Title</label>
								<input type="text" name="bookTitle" id="bookTitle"  class="form-control " placeholder="Book Title for Trainer.." enctype="multipart/form-data" class="validate" value="<?= @set_value('bookTitle') ?>"/>
						</tr>
						<br />
						<tr>
							
								<select autocomplete="off" class="form-control"  name="catLevelOneSelector"  id="catLevelOneSelector" onChange="catSelectorA()"  class="validate">
								<option value="select">--Select Trainer Category--</option>
								<?php 
								for ($x = 0; $x <= count($fetch_rec)-1; $x++) {
									echo "<option value='".$fetch_rec[$x]['book_category_id']."'>".$fetch_rec[$x]['book_category_title']."</option>";
								} 
								?>	
								</select>
						</tr>
						<br />
						<tr>
								<select autocomplete="off" class="form-control"  name="catLevelTwoSelector"  id="catLevelTwoSelector" onChange="catSelectorB()">
								<option value="select">--Select Trainer Child Category--</option>
								<?php 
								?>	
								</select>
						</tr>	
						<br />
						<label>Upload Books:</label>
						<tr>
								<input type="file" name="userfile" id="userfile"  class="form-control " onChange="fileUpload(this.id)" enctype="multipart/form-data" />							
						</tr>
						<br/>
						<tr>
						<?php
						$resources=array('id'=>'1','name'=>'radio', 'value'=>'1');
						$assessment=array('id'=>'2','name'=>'radio', 'value'=>'2');
						$learner_guide=array('id'=>'3','name'=>'radio', 'value'=>'3');
						$placement_documents=array('id'=>'4','name'=>'radio', 'value'=>'4');
						$marking_guide=array('id'=>'5','name'=>'radio', 'value'=>'5');
						?>
						<label>Select Trainer books folder:</label>
						<td width="150">
						<?php
							echo form_radio($resources)."Resources";  
						?>
						
						</td>
  						<td width="150">
						  <?php
						  	echo  form_radio($assessment)."Assesment";
						  ?>
						</td>
						<td width="150">
						  <?php
						  	echo  form_radio($learner_guide)."Learner Guide";
						  ?>
						</td>
						<td width="200">
						  <?php
						  	echo  form_radio($placement_documents)."Placement Documents";
						  ?>
						</td>
						<td width="150">
						  <?php
						  	echo  form_radio($marking_guide)."Marking Guide";
						  ?>
						</td>
						</tr>
						<br />
						
						
    				</tbody>
				  </table>
			       <hr />
				<table class="table table-striped table-bordered" id="categoryE">
					<thead class="table-primary"  >
					<tr>
						<th>#</th>
						<th>Book Title</th>
						<th>Course Unit</th>
						<th>Course Name</th>
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
    url : <?php echo "'". base_url()."'" ?>+"trainingfive/fetchingRecordFive",
	type : "POST",
	cache: false,
    success : function(data) { 
		// splittingData(data);
		$('#categoryE').DataTable().ajax.reload();
	},
    error : function(data) {
        console.log("error in Loading page!!", data);
    }
	});
});

$('.modal').parent().on('show.bs.modal', function (e) { $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); });

function catSelectorA(){
	catSelected = document.getElementById("catLevelOneSelector").value;
	console.log(catSelected);
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"trainingfive/sub_cat_fetcher",
	type : "POST",
	cache: false,
	data : {"main_cat_id": catSelected},
    success : function(data) { 
		console.log("Data fetched successful!"+data);
		$('#catLevelTwoSelector').html(data);
	},
    error : function(data) {
        console.log("error at Fetching  Ajax Function!", data);
    }
	});
}





function myIdFive(id) {
	var doc = document.getElementsByTagName('button');
for (var i = 0; i < doc.length; i++) {
	if(doc.item(i).name=="yes"){
		 document.getElementsByTagName('button').item(i).id= id;
	}
  }
}

function deleteRecordFive(status) 
{
	var doc = document.getElementsByTagName('button');
	if(status == "true"){
		for (var i = 0; i < doc.length; i++) {
			if(doc.item(i).name=="yes"){
	var id =document.getElementsByTagName('button').item(i).id;
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"trainingfive/Delete",
	type : "POST",
	cache: false,
	data : {"deleteId": id},
    success : function(data) { 
		$('#deleteFive').modal('hide');
		location.reload();
		console.log("Delete function successful!");
		// splittingData(data);
		$('#categoryE').DataTable().ajax.reload();
	},
    error : function(data) {
        console.log("error in Delete page Ajax Function!", data);
    }
	});
  }}
 }
}


function splittingData(data){
	if(data){
		$('#categoryE').DataTable().ajax.reload();
		// $('#table').html(data);
	}
}

</script>
   <!-- Modal Box Pop Up for Delete-->
 <div class="modal fade" id="deleteFive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
					  	<div class="modal-body">
						  Are you sure , you want to delete this Record ?
					  	</div>
					  	<div class="modal-footer">
						<button type="button"  class="btn btn-secondary " data-dismiss="modal">Cancel</button>
						<button type="button" name ="yes" class="btn btn-primary " onClick="deleteRecordFive('true')">Yes, Sure</button>
					  </div>
					</div>
				  </div>
	</div>
   <!--End Modal Box Pop Up -->

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">

$(document).ready( function () {
    $('#categoryE').DataTable({
		// processing: true,
    	// serverSide: true,
		ajax:<?php echo "'". base_url()."'" ?>+"trainingfive/fetchingRecordFive",
		columnDefs: [
            { 
                targets: 4,
                render: function(data, type, row, meta){
                   return "<td><button type='button' class='btn btn-success' id="+row['book_id']+" onClick='myIdFive(this.id)'><a href="+window.location.origin+"/optimisticfuture/manage/pages/control/0/50/"+row['book_id']+">Update</a></button></td>";  
                }
            },            
            { 
                targets: 5,
                render: function(data, type, row, meta){
                   return "<td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteFive' id="+row['book_id']+" onClick='myIdFive(this.id)'>Delete</button></td>";  
                }
            },
			{"className": "dt-center", "targets": "_all"}            
        ],
		columns:[
			{ data: 'book_id' },
        	{ data: 'book_title' },
        	{ data: 'book_subCategory_title' },
        	{ data: 'book_category_title' },
		]
	});
});
</script>
