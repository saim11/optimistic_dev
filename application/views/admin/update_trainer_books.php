
<?php
// print_r ($trainer_books);
// print_r ($fetch_training_content[1]["content_title"]);echo count($fetch_training_content);  
?>
<table class="tableThree">
    				<tbody>
						<tr>
							<label>Enter Book Title</label>
								<input type="text" name="bookTitle" id="bookTitle"  class="form-control " value=<?php echo "'".$trainer_books['book_title']."'" ?>/>
						</tr>
						<br />
						<tr>
								<select autocomplete="off" class="form-control"  name="catLevelOneSelector"  id="catLevelOneSelector" onChange="catSelectorA()">
								<option value=<?php echo "'".$trainer_books['book_category_id']."'"?> ><?php echo $this->SqlModel->getSingleField('book_category_title','book_category',array('book_category_id'=>$trainer_books['book_category_id']))?></option>
								<?php 
								for ($x = 0; $x <= count($fetch_rec)-1; $x++) {
									if($trainer_books['book_category_id'] != $fetch_rec[$x]['book_category_id'])
									echo "<option value='".$fetch_rec[$x]['book_category_id']."'>".$fetch_rec[$x]['book_category_title']."</option>";
								} 
								?>	
								</select>
						</tr>
						<br />
						<tr>
								<select autocomplete="off" class="form-control"  name="catLevelTwoSelector"  id="catLevelTwoSelector" onChange="catSelectorB()">
								<option value=<?php echo "'".$trainer_books['sub_cat_id']."'"?> ><?php echo $this->SqlModel->getSingleField('book_subCategory_title','books_sub_categories',array('sub_cat_id'=>$trainer_books['sub_cat_id']))?></option>	
								</select>
						</tr>	
						<br />
						<label>Upload Books:</label>
						<tr>
								<input type="file" name="userfile" id="userfile"  class="form-control" onChange="fileUpload(this.id)" enctype="multipart/form-data" />							
						</tr>
						<br/>
						<tr>
										<?php 
												$resources=FALSE;
												$assessment=FALSE;
												$learner_guide=FALSE;
												$placement_documents=FALSE;
												$marking_guide=FALSE;
												if('1' == $trainer_books['content_id'] ){
													$resources=TRUE;
													$assessment=FALSE;
													$learner_guide=FALSE;
													$placement_documents=FALSE;
													$marking_guide=FALSE;
												}
												if('2' == $trainer_books['content_id'] ){
													$resources=FALSE;
													$assessment=TRUE;
													$learner_guide=FALSE;
													$placement_documents=FALSE;
													$marking_guide=FALSE;
												}
												if('3' == $trainer_books['content_id'] ){
													$resources=FALSE;
													$assessment=FALSE;
													$learner_guide=TRUE;
													$placement_documents=FALSE;
													$marking_guide=FALSE;
												}
												if('4' == $trainer_books['content_id'] ){
													$resources=FALSE;
													$assessment=FALSE;
													$learner_guide=FALSE;
													$placement_documents=TRUE;
													$marking_guide=FALSE;
												}
												if('5' == $trainer_books['content_id'] ){
													$resources=FALSE;
													$assessment=FALSE;
													$learner_guide=FALSE;
													$placement_documents=FALSE;
													$marking_guide=TRUE;
												}
												$resources=array('id'=>'1','name'=>'radio', 'value'=>'1', 'checked'=>$resources);
												$assessment=array('id'=>'2','name'=>'radio', 'value'=>'2', 'checked'=>$assessment);
												$learner_guide=array('id'=>'3','name'=>'radio', 'value'=>'3', 'checked'=>$learner_guide);
												$placement_documents=array('id'=>'4','name'=>'radio', 'value'=>'4', 'checked'=>$placement_documents);
												$marking_guide=array('id'=>'5','name'=>'radio', 'value'=>'5', 'checked'=>$marking_guide);
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
<script type="text/javascript">






$( document ).ready(function() {
	$.ajax({
    url : "/optimisticfuture/trainingfive/fetchingRecordFive",
	type : "POST",
	cache: false,
    success : function(data) { 
		console.log(data);
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
    url : "/optimisticfuture/trainingfive/sub_cat_fetcher",
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
    url : "/optimisticfuture/trainingfive/Delete",
	type : "POST",
	cache: false,
	data : {"deleteId": id},
    success : function(data) { 
		splittingData(data);
		$('#deleteFive').modal('hide');
		console.log("Delete function successful!"+data);
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
