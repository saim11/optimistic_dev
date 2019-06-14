<!-- Header files -->
        <!-- Animate.css -->
        <!-- <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>css/animate.css">
        <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>steps/css/normalize.css">
        <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>steps/css/jquery.steps.css"> -->
        <!-- All pages css -->
        <!-- <link href="<?php echo FRONTEND_ASSETS; ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/style-student-profile-form.css" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/styles.css?2" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/jquery.fancybox.css?1" rel="stylesheet">
        <link href="<?php echo FRONTEND_ASSETS; ?>css/media_queries.css" rel="stylesheet"> -->

    <!-- End header Files -->
<?php

$backgroundimage = "";

if ($pageData["page_background"] != "") {
 $backgroundimage = "style='background:url(" . base_url() . $pageData["page_background"] . ") no-repeat top center;background-size: cover;'";
}

?>
<div class="clearfix"></div>

<!--our satisfied customer Start -->
<div class="osc">
  <div class="ocs_sub">
    <!--Carousel Wrapper-->
    	<a href="#"><img src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/slider_contact.jpg" class="img-fluid" alt="Responsive image"></a>
    <!--/.Carousel Wrapper-->
  </div>
  <!-- ocs_sub-->
</div>
<!-- osc-->
<!--our satisfied customer End -->


<!--Form Body section START -->

	<div class="contact_body">
    	<div class="contact_body_sub">
        	<div class="contact_form_area">
            	<div class="google_maps">
                	<div class="g_map1">
                    	<div class="mapouter"><div class="gmap_canvas"><iframe width="238" height="266" id="gmap_canvas" src="https://maps.google.com/maps?q=4%20Lytton%20Street%2C%20Glenroy%2C%203046&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Werbung: <a href="https://www.pureblack.de">pureblack.de</a></div><style>.mapouter{position:relative;text-align:right;height:266px;width:238px;}.gmap_canvas {overflow:hidden;background:none!important;height:266px;width:238px;}</style></div>
                    </div><!-- g_map1-->
                    <div class="g_map2">
                    	<div class="mapouter"><div class="gmap_canvas"><iframe width="238" height="266" id="gmap_canvas" src="https://maps.google.com/maps?q=9%20Central%20Grove%2C%20Broadmeadows%2C3047&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Werbung: <a href="https://www.pureblack.de">pureblack.de</a></div><style>.mapouter{position:relative;text-align:right;height:266px;width:238px;}.gmap_canvas {overflow:hidden;background:none!important;height:266px;width:238px;}</style></div>
                    </div><!-- g_map2-->
                    <div class="g_map3">
                    	<div class="mapouter"><div class="gmap_canvas"><iframe width="238" height="266" id="gmap_canvas" src="https://maps.google.com/maps?q=54%20Macintosh%20Street%20Shepparton%203630&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Werbung: <a href="https://www.pureblack.de">pureblack.de</a></div><style>.mapouter{position:relative;text-align:right;height:266px;width:238px;}.gmap_canvas {overflow:hidden;background:none!important;height:266px;width:238px;}</style></div>
                    </div><!-- g_map3-->
                </div><!-- google_maps-->


                <div class="contact_address">
                	<div class="con_add">
                    	<h1>Address</h1>
                        <p>4 Lytton Street, Glenroy, 3046<br>
                            9 Central Grove, Broadmeadows, 3047<br>
                            54 Macintosh Street Shepparton, 3630</p>
                    </div><!-- con_add-->
                    <div class="con_phone">
                    	<h1>Phone</h1>
                        <p>Broadmeadows: 03 9309 3370<br>
                            Glenroy: 03 9917 2133<br>
                            Shepparton: 03 5821 8665</p>
                    </div><!-- con_phone-->
                </div><!-- contact_address-->


                <div class="contact_form_">
                	<h1>Your Details</h1>
                    <hr class="style6">

                    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title / Salutation</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Title / Salutation">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="First Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Last Name</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Last Name">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email*</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email*">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Phone</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Phone">
    </div>
  </div>

  <h1>What does your query relate to?</h1>
   <hr class="style6">

   <div class="form-group">
      <label for="inputState">Select*</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>

    <div class="form-group">
    <label for="inputAddress">Message</label>
    <textarea type="textarea" class="form-control" id="inputAddress" placeholder="Last Name">
    </textarea>
  </div>

	<div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>


</form>

                </div><!-- contact_form_-->


            </div><!-- contact_form_area-->

            <div class="contact_right_area">
            	<div class="contact_icon"><img src="images/clock_ico.jpg" alt="" class="mobile_image"</div><!-- contact_icon-->
                <div class="contact_heading"><h1>Opening Times</h1></div><!-- contact_heading-->
                <ul class="list-group list-group-horizontal-md my_style_list">
                  <li class="list-group-item my_style_list">Monday</li>
                  <li class="list-group-item my_style_list">10:00 - 17:00</li>
                </ul>
                <ul class="list-group list-group-horizontal-md my_style_list">
                  <li class="list-group-item my_style_list">Tuesday</li>
                  <li class="list-group-item my_style_list">10:00 - 17:00</li>
                </ul>
                <ul class="list-group list-group-horizontal-md my_style_list">
                  <li class="list-group-item my_style_list">Wednesday</li>
                  <li class="list-group-item my_style_list">10:00 - 17:00</li>
                </ul>
                <ul class="list-group list-group-horizontal-md my_style_list">
                  <li class="list-group-item my_style_list">Thursday</li>
                  <li class="list-group-item my_style_list">10:00 - 17:00</li>
                </ul>
                <ul class="list-group list-group-horizontal-md my_style_list">
                  <li class="list-group-item my_style_list">Friday</li>
                  <li class="list-group-item my_style_list">10:00 - 17:00</li>
                </ul>
                <ul class="list-group list-group-horizontal-md my_style_list">
                  <li class="list-group-item my_style_list">Saturday</li>
                  <li class="list-group-item my_style_list">10:00 - 17:00</li>
                </ul>
                <ul class="list-group list-group-horizontal-md my_style_list">
                  <li class="list-group-item my_style_list">Sunday</li>
                  <li class="list-group-item my_style_list">Closed</li>
                </ul>
            </div><!-- contact_right_area-->
        </div><!-- contact_body_sub-->
		</div><!-- contact_body-->
