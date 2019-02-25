
<table class="table">
    				<tbody>
						<tr>
							<td><input type="text" name="addCatLvl1" id="addCatLvl1"  class="form-control " placeholder="Add Main Category of Books" data-validate="require,maxlength[250]"/></td>
							<td><button type="button"   id="addCatLvl1" class="btn btn-success" onClick="addCategory(this.id)" >Add</button></td>
						</tr>
    				</tbody>
				  </table>
			       <hr />
				<table class="table table-dark">
					<thead class="table-primary" style="background-color:#32CD32" >
					<tr>
						<th>#</th>
						<th>Category Title</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>
					</thead>
					<tbody id ="table">
					</tbody>
</table>





 <!-- Modal Box Pop Up -->
 <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
					  	<div class="modal-body">
							<div class="form-group">
								<label for="usr">Category Title:</label>
								<input type="text" class="form-control" id="category">
							</div>
					  	</div>
					  	<div class="modal-footer">
						<button type="button"  class="btn btn-secondary btn-block" data-dismiss="modal">Cancel</button>
						<button type="button" name ="yes" class="btn btn-primary btn-block" onClick="updatedVal('true')">Yes</button>
					  </div>
					</div>
				  </div>
	</div>
	
   <!--End Modal Box Pop Up -->
   <!-- Modal Box Pop Up for Delete-->
 <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
					  	<div class="modal-body">
						  Are you sure , you want to delete this Record ?
					  	</div>
					  	<div class="modal-footer">
						<button type="button"  class="btn btn-secondary " data-dismiss="modal">Cancel</button>
						<button type="button" name ="yes" class="btn btn-primary " onClick="deleteRecord('true')">Yes, Sure</button>
					  </div>
					</div>
				  </div>
	</div>
   <!--End Modal Box Pop Up -->
  



<script type="text/javascript">

$( document ).ready(function() {
	var x = <?php echo "'". base_url()."'" ?>;
	console.log(<?php echo "'". base_url()."'" ?>+"training/fetchingRecord");
	$.ajax({
    url : <?php echo "'". base_url()."'" ?>+"training/fetchingRecord",
	type : "POST",
	cache: false,
    success : function(data) { 
		splittingData(data);
	},
    error : function(data) {
        console.log("error in Reloading page!!", data);
    }
	});
});

function splittingData(data){
	if(data){
		$('#table').html(data);
	}
}
</script>