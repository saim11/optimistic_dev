<section class="Section_Devs Head_Titles">
	<div class="container">
		<h1>Enrollment Booklet</h1>
		<ol class="breadcrumb">
		  <li><a href="#">Home</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">Enrollment Booklet</li>
		</ol>
	</div>
</section>
<!-- Head_Titles Closed -->


<section class="Section_Devs Welcome_Classic Optim-Form0s">
	<div id="divtoconvert" class="container" style="background-color: white; " >
		<div class="row Add_details">
			<div class="col-md-12 col-sm-12 Contact_Add Appy-formy">
				<form id="contactForm" method="post" action="" class="validate">

				  <div class="col-sm-12">
					  <div class="form-group">
	                  	<label>Student Name</label>
	                    <input type="text" id="" class="form-control Form_Setup required">
	                  </div>
                  </div>

                  <br class="clearfix">
				  <h3>QUALIFICATIONS (Please tick)</h3>

				  <table class="table table-bordered opt-centered">
				    <thead>
				      <tr>
				        <th>Tick</th>
				        <th>Code</th>
				        <th>Title</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box1" type="checkbox" />
  							  <label for="box1"></label>
					        </div>
				        </td>
				        <td>CHC30113</td>
				        <td>Certificate III in Early Childhood Education and Care</td>
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box2" type="checkbox" />
  							  <label for="box2"></label>
					        </div>
				        </td>
				        <td>CHC50113</td>
				        <td>Diploma of Early Childhood Education and Care</td>
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box3" type="checkbox" />
  							  <label for="box3"></label>
					        </div>
				        </td>
				        <td>CPP20212</td>
				        <td>Certificate II in Security Operations</td>
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box4" type="checkbox" />
  							  <label for="box4"></label>
					        </div>
				        </td>
				        <td>CPP30411</td>
				        <td>Certificate III in Security Operations</td>
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box5" type="checkbox" />
  							  <label for="box5"></label>
					        </div>
				        </td>
				        <td>CHC33015</td>
				        <td>Certificate III in Individual Support</td>
				      </tr>
				    </tbody>
				  </table>



				  <br class="clearfix">
				  <h3>Attachments (Please tick)</h3>

				  <table class="table table-bordered opt-centered">
				    <tbody>
				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box6" type="checkbox" />
  							  <label for="box6"></label>
					        </div>
				        </td>
				        <td>Student Induction Form</td>				        
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box7" type="checkbox" />
  							  <label for="box7"></label>
					        </div>
				        </td>
				        <td>Pre-Assessment interview completed</td>				        
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box8" type="checkbox" />
  							  <label for="box8"></label>
					        </div>
				        </td>
				        <td>Language, Literacy and Numeracy Completed</td>				        
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box9" type="checkbox" />
  							  <label for="box9"></label>
					        </div>
				        </td>
				        <td>Skills First Program Enrolment Form Completed</td>				        
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box10" type="checkbox" />
  							  <label for="box10"></label>
					        </div>
				        </td>
				        <td>Student ID’s Checked and Completed</td>				        
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box11" type="checkbox" />
  							  <label for="box11"></label>
					        </div>
				        </td>
				        <td>USI Permission and Verification Form</td>				        
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box12" type="checkbox" />
  							  <label for="box12"></label>
					        </div>
				        </td>
				        <td>Recognition Prior Learning</td>				        
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box13" type="checkbox" />
  							  <label for="box13"></label>
					        </div>
				        </td>
				        <td>Credit Transfer Form</td>				        
				      </tr>

				      <tr>
				        <td>
				        	<div class="checkbox">
					          <input id="box14" type="checkbox" />
  							  <label for="box14"></label>
					        </div>
				        </td>
				        <td>Statement of Fees</td>				        
				      </tr>
				    </tbody>
				  </table>

                  
                  <!--<div class="col-md-12 col-sm-12">
                  	  <button type="submit" id="submitBtn" class="btn btn-default Submit_Button">SUBMIT</button>
                  </div>-->	                                       
                </form>				
			</div>	
		</div>		
	</div>

	<div class="container">
		<div class="row Add_details">
	<div class="col-md-12 col-sm-12">
                  	  <a  id="create_pdf" class="btn btn-default Submit_Button">SUBMIT</a>
                  </div>	   
                  </div>
                  </div>    
</section>
<!-- Welcome_Classic Closed -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script src="https://files.codepedia.info/files/uploads/iScripts/html2canvas.js"></script>

<script>
$(document).ready(function(){

	
var element = $("#divtoconvert"); // global variable
var getCanvas; // global variable
 
    $("#create_pdf").on('click', function () {
         html2canvas(element, {
         onrendered: function (canvas) {
                

                var  img = canvas.toDataURL("image/jpeg", 0.5);
                if(canvas.width > canvas.height){
				doc = new jsPDF('l', 'mm', [canvas.width + 20, canvas.height + 20],true);
				}
				else{
				doc = new jsPDF('p', 'mm', [canvas.height + 20, canvas.width + 20],true);
				}
                var width = canvas.width;    
                var height = canvas.height;
                doc.addImage(img, 'JPEG', 0, 0,width,height);  
                doc.save('Bhavdip-html-to-pdf.pdf');
                //var pdf = btoa(doc.output()); 

          //       var pdf = doc.output(); //returns raw body of resulting PDF returned as a string as per the plugin documentation.
		        // var data = new FormData();
		        // data.append("data" , pdf);
		        // var xhr = new XMLHttpRequest();
		        // xhr.open( 'post', '<?php echo base_url()."home/pdfsubmit"; ?>', true ); //Post to php Script to save to server
		        // xhr.send(data);

       //          $.ajax({
			    //   method: "POST",
			    //   url: "<?php echo base_url()."/pdfsubmit"; ?>",
			    //   data: {data: pdf},
			    // }).done(function(data){
			    //    console.log(data);
			    // });  
             }
         });
    });

	

});




</script>



