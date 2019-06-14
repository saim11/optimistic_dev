<?php

$backgroundimage = "";

if($pageData["page_background"] != "")
{
$backgroundimage = "style='background:url(".base_url().$pageData["page_background"].") no-repeat top center;background-size: cover;'";
}

?>
<section class="Section_Devs Head_Titles" <?php  echo $backgroundimage; ?> >
	<div class="container">
		<h1><?php echo $pageData["page_title"]; ?></h1>
		<ol class="breadcrumb">
		  <li><a href="<?php echo $this->config->base_url(); ?>">Home</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active"><?php echo $pageData["page_title"]; ?></li>
		</ol>
	</div>
</section>

<!-- Head_Titles Closed -->

<section class="Section_Devs Welcome_Classic">
	<div class="container">
		<div class="row Add_details">
			<div class="col-md-4 col-sm-4"><div class="Map_Volt" id="canvas1"><iframe allowfullscreen="" frameborder="0" height="400" id="map_canvas1" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=4+Lytton+St+Glenroy+3046&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed" style="border:0" width="100%"></iframe></div></div>

<div class="col-md-4 col-sm-4"><div class="Map_Volt" id="canvas1"><iframe allowfullscreen="" frameborder="0" height="400" id="map_canvas1" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=9+Central+grove+Broadmeadows+3047+VIC&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed" style="border:0" width="100%"></iframe></div></div>

<div class="col-md-4 col-sm-4"><div class="Map_Volt" id="canvas1"><iframe allowfullscreen="" frameborder="0" height="400" id="map_canvas1" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=54+Mcintosh+Street+Shepparton+3630+VIC&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed" style="border:0" width="100%"></iframe></div></div>

			<!-- map_wrapper Closed -->
			<div class="col-md-8 col-sm-8 Contact_Add">
				<form id="contactForm" method="post" action="<?php echo $this->config->base_url().'home/docontact' ?>" class="validate">
				  <div class="col-md-6 col-sm-6">
	                  <div class="form-group">
	                  	<label for="name">Full name :</label>
	                    <input type="text" id="name" name="name" class="form-control Form_Setup required">
	                    <br />
	                    <br />
	                  </div>   
                  </div>
                  <div class="col-md-6 col-sm-6">
	                  <div class="form-group">
	                  	<label for="email_address">email address :</label>
	                    <input type="email" id="email" name="email" class="form-control Form_Setup required">
	                    <br />
	                    <br />
	                  </div>   
                  </div>
                   <div class="col-md-12 col-sm-12">
	                  <div class="form-group">
	                  	<label for="email_address">Subject :</label>
	                    <input type="text" id="subject" name="subject" class="form-control Form_Setup required">
	                    <br />
	                    <br />
	                  </div>   
                  </div>

                  <div class="col-md-12 col-sm-12">
                  	<div class="form-group">
                  		<label for="message">message :</label>
	                    <textarea id="request" name="message" class="form-control Form_Setup_Textarea required" rows="3"></textarea>
	                    <p id="thankyou" class="hidden">Thank you for contacting us. We will respond to you as soon as possible.<br/><br/></p>
                        <img class="pull-right hidden" src="images/loader.gif" id="loader" />	                        
	                  </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                  	  <button type="submit" id="submitBtn" class="btn btn-default Submit_Button">SUBMIT</button>
                  </div>	                                       
                </form>				
			</div>
			<div class="col-md-4 col-sm-4">										  
			  <h5>address:</h5>
			  <p>4 Lytton street Glenroy 3046 VIC<br>9 Central grove Broadmeadows 3047 VIC<br>54 Macintosh Street Shepparton 3630 VIC</p>

			  <br />

			  <!--<h5>Fax number</h5>
			  <p><?php echo nl2br($this->ws['fax']); ?></p>

			  <br />-->

			  <h5>Phone number</h5>
			  <p><?php echo nl2br($this->ws['phone']); ?></p>

			  <br />

			  <h5>Email address:</h5>
			  <a href"#"><?php echo nl2br($this->ws['email']); ?></a>							
			</div>			
		</div>		
	</div>
</section>
<!-- Welcome_Classic Closed -->




