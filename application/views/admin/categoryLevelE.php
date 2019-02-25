
<?php
// print_r ($fetch_grand_child[0]["course_title"]);echo count($fetch_grand_child);
// print_r ($fetch_training_content[1]["content_title"]);echo count($fetch_training_content);  
?>

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
								// for ($x = 0; $x <= count($fetch_sub_cat)-1; $x++) {
								// 	echo "<option value='".$fetch_sub_cat[$x]['sub_cat_id']."'>".$fetch_sub_cat[$x]['book_subCategory_title']."</option>";
								// } 
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
						<label>Select Trainer books folder:</label>
						<td width="250">
						<?php
						$questions=array('id'=>'1','name'=>'radio', 'value'=>'1');
						$answers=array('id'=>'2','name'=>'radio', 'value'=>'2');
							echo form_radio($questions)."Questionnaires";  
						?>
						</td>
  						<td >
						  <?php
						  	echo  form_radio($answers)."Answers";
						  ?>
						</td>
						</tr>
						<br />
						
						<!-- <tr>
							<td></td>
							<td><button type="button"  id="addCatLvl5" class="btn btn-success btn-block" onClick="addCategoryE(this.id)" >Upload Book</button></td>
						</tr> -->
						
    				</tbody>
				  </table>
			       <hr />
				<table class="table table-dark">
					<thead class="table-primary" style="background-color:#32CD32" >
					<tr>
						<th>#</th>
						<!-- <th>Grand Child Category Title</th> -->
						<th>Book Title</th>
						<th>Trainer Child Category</th>
						<th>Trainer Parent Category</th>
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
		splittingData(data);
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
		splittingData(data);
		$('#deleteFive').modal('hide');
		location.reload();
		console.log("Delete function successful!");
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
		$('#table').html(data);
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
