

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">  
				<table  class="table">
    				<tbody>
						<tr>
						<form method="post" action="" enctype="multipart/form-data" id="catForm">
							<td><input type="text" name="addCatLvl1" id="addCatLvl1"  class="form-control " placeholder="Add Course of Books" data-validate="require,maxlength[250]"/></td>
							<td><input type="file" name="addCatLvl2" id="addCatLvl2"  class="form-control"  data-validate="require"/></td>
							<td><button type="button" id="addCatLvl1" class="btn btn-success" onClick="addCategory(this.id);" >Add</button></td>
						</form>
						</tr>
    				</tbody>
				  </table>
			       <hr />
					<table id ="categoryA" class="table table-striped table-bordered">
					<thead class="table-primary">
					<tr>
						<th>#</th>
						<th>Course Title</th>
						<!-- <th></th>
						<th></th> -->
					</tr>
					</thead>
					<tfoot id ="table">
					</tfoot>
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
  


<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script type="text/javascript">


$(document).ready( function () {
    $('#categoryA').DataTable({
		// processing: true,
    	// serverSide: true,
		ajax:<?php echo "'". base_url()."'" ?>+"training/fetchingRecord",
		columnDefs: [
            { 
                // targets: 2,
                // render: function(data, type, row, meta){
                //    return "<td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#confirm' id="+row['book_category_id']+" onClick='myCat(this.id)'>Update</button></td>";  
                // }
            },            
            { 
                // targets: 3,
                // render: function(data, type, row, meta){
                //    return "<td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#delete' id="+row['book_category_id']+" onClick='myId(this.id)'>Delete</button></td>";  
                // }
            },
			{"className": "dt-center", "targets": "_all"}            
        ],
		columns:[
			{ data: 'book_category_id' },
        	{ data: 'book_category_title' },
        	
			
		]
	});
});
</script>
