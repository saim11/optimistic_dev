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
        <link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/style.css" rel="stylesheet">
				<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/bootnavbar.css" rel="stylesheet">
				<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/bootstrap.min.css" rel="stylesheet">
				<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/carouseller.css" rel="stylesheet">
				<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/glyphicons.css" rel="stylesheet">
				<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/responsive.css" rel="stylesheet">
				<link href="<?php echo FRONTEND_ASSETS; ?>front-pages/old_pages_css/style.css" rel="stylesheet">

    <!-- End header Files -->


<?php
$passport =base_url()."/resources-Images/dummy.jpg";
$driverLicense =base_url()."/resources-Images/dummy.jpg";
$citizenCert =base_url()."/resources-Images/dummy.jpg";
$regCert =base_url()."/resources-Images/dummy.jpg";
$medicare =base_url()."/resources-Images/dummy.jpg";
$b_cert =base_url()."/resources-Images/dummy.jpg";
$IMMI =base_url()."/resources-Images/dummy.jpg";
$VISA =base_url()."/resources-Images/dummy.jpg";
$passportURL =base_url()."/resources-Images/dummy.jpg";
$driverLicenseURL =base_url()."/resources-Images/dummy.jpg";
$citizenCertURL =base_url()."/resources-Images/dummy.jpg";
$regCertURL =base_url()."/resources-Images/dummy.jpg";
$medicareURL =base_url()."/resources-Images/dummy.jpg";
$b_certURL =base_url()."/resources-Images/dummy.jpg";
$IMMIURL =base_url()."/resources-Images/dummy.jpg";
$VISAURL =base_url()."/resources-Images/dummy.jpg";
$fileType = array();
foreach($students_docs as $cols){
  if($cols['doc_type'] =='passport'){
    $passportURL = base_url().$cols['file_image']; 
    $fileType =  $cols['file_image'];
    $fileType =  explode(".",$fileType);
    if($fileType[2] == 'pdf'){
      $passport = base_url()."resources-Images/pdf.png";
      
    }
    else{
      $passport = base_url().$cols['file_image']; 
    }
  }
  if($cols['doc_type'] =='driverLicense'){
    $driverLicenseURL = base_url().$cols['file_image'];
    $fileType =  $cols['file_image'];
    $fileType =  explode(".",$fileType);
    if($fileType[2] == 'pdf'){
      $driverLicense = base_url()."/resources-Images/pdf.png";
    }
    else{
      $driverLicense = base_url().$cols['file_image']; 
    } 
  }
  if($cols['doc_type'] =='citizenCert'){
    $citizenCertURL = base_url().$cols['file_image']; 
    $fileType =  $cols['file_image'];
    $fileType =  explode(".",$fileType);
    if($fileType[2] == 'pdf'){
      $citizenCert = base_url()."/resources-Images/pdf.png";
    }
    else{
      $citizenCert = base_url().$cols['file_image']; 
    } 
  }
  if($cols['doc_type'] =='regCert'){
    $regCertURL = base_url().$cols['file_image']; 
    $fileType =  $cols['file_image'];
    $fileType =  explode(".",$fileType);
    if($fileType[2] == 'pdf'){
      $regCert = base_url()."/resources-Images/pdf.png";
    }
    else{
      $regCert = base_url().$cols['file_image']; 
    } 
  }
  if($cols['doc_type'] =='medicare'){
    $medicareURL = base_url().$cols['file_image'];
    $fileType =  $cols['file_image'];
    $fileType =  explode(".",$fileType);
    if($fileType[2] == 'pdf'){
      $medicare = base_url()."/resources-Images/pdf.png";
    }
    else{
      $medicare = base_url().$cols['file_image']; 
    } 
     
  }
  if($cols['doc_type'] == 'b_cert'){
    $b_certURL = base_url().$cols['file_image']; 
    $fileType =  $cols['file_image'];
    $fileType =  explode(".",$fileType);
    if($fileType[2] == 'pdf'){
      $b_cert = base_url()."/resources-Images/pdf.png";
    }
    else{
      $b_cert = base_url().$cols['file_image']; 
    } 
  }
  if($cols['doc_type'] =='IMMI'){
    $IMMIURL = base_url().$cols['file_image']; 
    $fileType =  $cols['file_image'];
    $fileType =  explode(".",$fileType);
    if($fileType[2] == 'pdf'){
      $IMMI = base_url()."/resources-Images/pdf.png";
    }
    else{
      $IMMI = base_url().$cols['file_image']; 
    } 
  }
  if($cols['doc_type'] =='VISA'){
    $VISAURL = base_url().$cols['file_image']; 
    $fileType =  $cols['file_image'];
    $fileType =  explode(".",$fileType);
    if($fileType[2]=='pdf'){
      $VISA = base_url()."/resources-Images/pdf.png";
    }
    else{
      $VISA = base_url().$cols['file_image']; 
    } 
  }


}
?>







<style type="text/css">
.img-fluid {
    max-height:110px;
    min-height:120px;
    overflow:auto;
}
.loading{
  position: fixed;
  left: 50%;
  top: 50%;
}
.loader{
    position: fixed;
    left: 45%;
    top: 35%;
    z-index: 1000;
    height: 31px;
    width: 31px;
    display:none;
}

  .Menu-dropdown:hover .multi-level {
    display: block;
  }

  .multi-level {
    background: #2bb673;
    color: #fff;
  }
  .multi-level>li>a {
    color: #fff;
  }

  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
      margin-left: -1px;
      -webkit-border-radius: 0 6px 6px 6px;
      -moz-border-radius: 0 6px 6px;
      border-radius: 0 6px 6px 6px;
      background: #2bb673;
      color: #fff;
  }

  .dropdown-submenu:hover>.dropdown-menu {
      display: block;
  }

  .dropdown-menu>li>a {
    color: #fff;
  }
  
  .dropdown-submenu>a:after {
      display: block;
      content: " ";
      float: right;
      width: 0;
      height: 0;
      border-color: transparent;
      border-style: solid;
      border-width: 5px 0 5px 5px;
      border-left-color: #ccc;
      margin-top: 5px;
      margin-right: -10px;
  }

  .dropdown-submenu:hover>a:after {
      border-left-color: #fff;
  }

  .dropdown-submenu.pull-left {
      float: none;
  }

  .dropdown-submenu.pull-left>.dropdown-menu {
      left: -100%;
      margin-left: 10px;
      -webkit-border-radius: 6px 0 6px 6px;
      -moz-border-radius: 6px 0 6px 6px;
      border-radius: 6px 0 6px 6px;
  }
</style>








    <style type="text/css">

    .toper

{

  text-align: center;

  transition: all 500ms linear 0s;

}



.top_popup_2 {

  width: 100%;

  background: rgb(209, 63, 63) none repeat scroll 0 0;

  margin-top: 0;

  max-height: 100%;

  /* min-height: 50px; */

  opacity: 1;

  width: 100%;

  z-index: 9999;

  padding: 0px 0px;

}

.top_popup_2 p {

padding: 0 !important;

  margin: 10px 10px 10px;

}



.top_popup_1 {

  width: 100%;

  background: #81c868 none repeat scroll 0 0;

  margin-top: 0;

  max-height: 100%;

  /* min-height: 50px; */

  opacity: 1;

  width: 100%;

  z-index: 9999;

  padding: 0px 0px;

}

.top_popup_1 p {

  padding: 0 !important;

  margin:10px 10px 10px;

}

.right {

  float: right;

}



.inner_top_popup {

  display: inline-block;

  /*width: 960px;*/

}

.popup_text {

  margin: 0;

 /* width: 900px;*/

}

.popup_text p {

  color: #fff;

  font-family: 'robotoregular';

  font-size: 14px;

  font-weight: normal;

  text-align: center;

  word-wrap: break-word;

}

.mybutton {

  font: 900 14px/14px 'Roboto', sans-serif;

  text-transform: uppercase;

  

  padding: 10px 23px;

  border-radius: 4px;

  margin-bottom: 10px;

  display: inline-block;

  color: #fff;

}

.close_toper {

  padding: 10px;

  color: #fff;

  font-size: 16px;

  font-weight: bold;

}

.close_toper a i {

  color: #fff;

  cursor: pointer;
}

select.minimal {
  background-image:
    linear-gradient(45deg, transparent 50%, gray 50%),
    linear-gradient(135deg, gray 50%, transparent 50%),
    linear-gradient(to right, #ccc, #ccc);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    calc(100% - 2.5em) 0.5em;
  background-size:
    5px 5px,
    5px 5px,
    1px 1.5em;
  background-repeat: no-repeat;
  height:50px;
}

select.minimal:focus {
  background-image:
    linear-gradient(45deg, green 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, green 50%),
    linear-gradient(to right, #ccc, #ccc);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    calc(100% - 2.5em) 0.5em;
  background-size:
    5px 5px,
    5px 5px,
    1px 1.5em;
  background-repeat: no-repeat;
  outline: 0;
}


select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}

</style>



<script type="text/javascript">

    $(document).ready(function(){

        $('.close_toper').click(function(){

            $(this).parent().hide();

        });
    });



</script>




<!--our satisfied customer Start -->
<div class="osc">
  <div class="ocs_sub"> 
    <!--Carousel Wrapper-->
    	<img src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/slider_myaccount.jpg" class="img-fluid" alt="Responsive image">
    <!--/.Carousel Wrapper--> 
  </div>
  <!-- ocs_sub--> 
</div>
<!-- osc--> 
<!-- Head_Titles Closed -->












<section class="Section_Devs Welcome_Classic">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            
            <div class="main">
              <div class="container">
                <div class="signup-conten">
                  <div class="signup-for">
                    <form method="POST" action="<?php echo $this->config->base_url().'editProfile/resetPassword' ?>" class="register-form" id="register_form">
                        <div class="">
                          <div class="form-group my_group">
                            <br /><br /><br />
                              <div class="form-input">
                                    <label for="student_name" class="required">Name</label>
                                    <input type="text" class="form-control" name="student_name" value=<?php echo '"'.$user_details[0]['user_name'].'"' ?> id="Name" disabled />
                                </div>
                                <div class="form-input">
                                    <label for="student_email" class="required">Email</label>
                                    <input type="text" name="student_email" class="form-control" value=<?php echo '"'.$user_details[0]['user_email'].'"' ?> id="Email" disabled />
                                </div>
                                <div class="form-input">
                                    <label for="student_contact" class="required">Contact number</label>
                                    <input type="number" class="form-control" name="student_contact" value=<?php echo '"'.$user_details[0]['user_contact'].'"' ?> id="Contact number" />
                                </div>
                                <div class="form-input">
                                    <label for="student_password" class="required">Password</label>
                                    <input type="password" class="form-control" name="student_password" value=<?php echo '"'.$user_details[0]['user_password'].'"' ?> id="Password" disabled /><br />
                                    <small id="emailHelp" class="form-text text-muted"><a id="reset" href="" onclick="openNav()"> Changed Password </a></small> 
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Update Account" class="btn btn-success" id="submit_" name="accountBtn" />    
                            

                            
   <!-- <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  
  <div class="overlay-content">
<div class="form-popup" id="myForm">
  <form  method="post" action="<?php echo $this->config->base_url().'editProfile/resetPassword' ?>" class="form-container">
    <h1 class="form_h1">Reset Password</h1>
    <label for="old_password"><b>old Password</b></label><br>
    <br>
    <input type="text" placeholder="Old Password" name="old_password" require class="text_color"><br>
    
    <label for="new_password"><b>New password</b></label><br>
    <br>
    <input type="password" placeholder="New password" name="new_password" require class="text_color"><br>
    
    <label for="confirm_password"><b>Confirm password</b></label><br>
    <br>
    <input type="password" placeholder="Confirm password" name="confirm_password" require class="text_color"><br>

    <button type="submit" value="saveBtn" class="my-btn" name="saveBtn">Save Password</button>
  </form>
</div>
  </div> -->
  
  
  
  
</div>

                                                       
    </div>
</form>
            </div>
            </div>
        </div>

    </div>
    
    
	<div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" action="<?php echo $this->config->base_url().'editProfile/profileUpload' ?>" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-radio">
                                	<h1>Upload Files</h1>
                                    <div class="my_courses_details1">
                                    <div class="form-radio-group">            
                                            <div class="form-radio-item checkbox123">
                                            <div class="container">
                                            <div class="row">
                                            <div class="col-sm">
                                            <div class="row">
                                            <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8">
                                                PASSPORT
                                                <a href=<?php echo $passportURL; ?> class="thumbnail">
                                                  <img src= <?php echo $passport; ?> class="img-fluid" >
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                              <input type="file" id="passport" name="passport" class="myuploadbtn" onChange="fileUploaded();">
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                            </div>
                                            <br>
                                            <br>
                                            </div>
                                             
                                            <div class="col-sm">
                                            <div class="row">
                                            <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8">
                                            DRIVERS LICENCE 
                                                <a href=<?php echo $driverLicenseURL; ?> class="thumbnail">
                                                  <img src=<?php echo $driverLicense; ?>  alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                            <input type="file" id="driverLicense" name="driverLicense" class="myuploadbtn">
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                            </div>
                                            </div>
    
    </div>
  </div>

                                            
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="container">
  <div class="row">
    <div class="col-sm">
                                            <div class="row">
                                            <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8">
                                              Medicare (Green only)
                                                <a href=<?php echo $medicareURL; ?> class="thumbnail">
                                                  <img src=<?php echo $medicare; ?>  alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                              <input type="file" id="medicare" name="medicare" class="myuploadbtn">
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                            </div>
                                            </div>
                                            
                                            <br>
                                            <br>
                                            <div class="col-sm">
                                            <div class="row">
                                            
                                            <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8">
                                            BIRTH CERTIFICATE 
                                                <a href=<?php echo $b_certURL; ?> class="thumbnail">
                                                  <img src=<?php echo $b_cert; ?> alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                            <input type="file" id="b_cert" name="b_cert" class="myuploadbtn">
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                            </div>
                                            <br>
                                            <br>
    <br>
    <br>
    <br>
                                        </div>
    </div>
    
  </div>
</div>

                                        
                                        <div class="form-radio-group">            
                                            <div class="form-radio-item">
                                            <div class="container">
  <div class="row">
    <div class="col-sm">
                                            <div class="row">
                                              <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8">
                                                  CITIZENSHIP CERTIFICATE
                                                <a href=<?php echo $citizenCertURL; ?> class="thumbnail">
                                                  <img src=<?php echo $citizenCert; ?> alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                             <input type="file" id="citizenCert" name="citizenCert" class="myuploadbtn">
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                            </div>
                                            <br>
                                            <br>
                                            </div>
    <div class="col-sm">
                                            <div class="row">
                                            
                                              <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8">
                                            REGISTRATION CERTIFICATE BY DESCENT
                                                <a href=<?php echo $regCertURL; ?> class="thumbnail">
                                                  <img src=<?php echo $regCert; ?> alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                              <input type="file" id="regCert" name="regCert" class="myuploadbtn">
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                            </div>
                                            <br>
    <br>
    <br>
    <br>
    <br>
    </div>
    
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm">
                                            <div class="row">
                                            
                                              <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8">
                                            IMMI CARD
                                                <a href=<?php echo $IMMIURL; ?> class="thumbnail">
                                                  <img src=<?php echo $IMMI; ?> alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                            
                                              <input type="file" id="IMMI" name="IMMI" class="myuploadbtn">
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                            </div>
                                            <br>
                                            <br>
                                            </div>
    <div class="col-sm">
                                            <div class="row">
                                            
                                              <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8">
                                            VISA
                                                <a href=<?php echo $VISAURL; ?> class="thumbnail">
                                                  <img src=<?php echo $VISA; ?> alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                              <input type="file" id="VISA" name="VISA" class="myuploadbtn">
                                              <span class="input-group-addon"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                            </div>
                                            <br>
    <br>
    <br>
    </div>
  </div>
</div>
                                        </div>
                                      </div>
                                    </div>    
                                </div> 
                            </div> 
                          <div class="form-submi">
                          <input type="submit" value="Upload" class="uploadFiles btn btn-success" id="submit" onClick="fileUploaded(this)" name="uploadBtn" /> 
                        </div> 
                      </div>
                    </form>
                </div>
            </div>
        </div>

                    <hr />
    </div>
    
    <div  id ="loader" class="loader">
      <span class="loading">
      Loading..  
      </span>
      <img src=<?php echo base_url()."/resources-Images/loader.gif" ?> alt="Loading ...">
    </div>
                        
<div class="my_courses_details">
    <h1>Forms Submitted </h1>
        <table class="table table-striped table-responsive-md btn-table">
  <thead>
    <tr>
      <th>Form Id</th>
      <th>Student Name</th>
      <th>Form Name</th>
      <th>Submission On</th>
      <th>Form Status</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
  <?php     
    foreach ($form_apply1 as $cols) 
    {
      // Show all enrollment booklets which are submitted and Approved..
      if($cols['form_approval'] != "Approved"){
        $style_ ="pointer-events: none;color:grey";
      }
      else{
        $style_="";
    }
    if($cols['form_submitted'] == 'Submitted' && $cols['form_approval'] == 'Approved'){
    ?>
    <tr scope="row">
        <td><?php echo $cols['Id']; ?></td>
        <td><?php echo $user_name ?></td>
        <td><?php echo "USI Permission Verificaton Form"?></td>
        <td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_approval']; ?></td>
        <td><a class="" style=<?php echo "'".$style_."'" ?> href=<?php echo base_url().$cols['download_path'] ?> >Print</a></td>
    </tr>
  <?php 
    }
    // Show all enrollment booklets which are submitted and Pending..
    if($cols['form_submitted'] == 'Submitted' && $cols['form_approval'] == 'Pending'){
      ?>
      <tr scope="row">
        <td><?php echo $cols['Id']; ?></td>
        <td><?php echo $user_name ?></td>
        <td><?php echo "USI Permission Verificaton Form"?></td>
        <td><?php echo  date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_submitted']; ?></td>
        <td><a class="" style=<?php echo "'".$style_."'" ?> href=<?php echo base_url().$cols['download_path'] ?> >Print</a></td>
    </tr>
    <?php 
    }
    // Show all enrollment booklets which are Pending by user and and not submitted..
    if($cols['form_submitted'] == 'Pending' && $cols['form_approval'] == 'Pending'){
      ?>
      <tr scope="row">
        <td><?php echo $cols['Id']; ?></td>
        <td><?php echo $user_name ?></td>
        <td><?php echo "USI Permission Verificaton Form"?></td>
        <td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_approval']; ?></td>
        <td><a class="" style=<?php echo "'".$style_."'" ?> href=<?php echo base_url().$cols['download_path'] ?> >Print</a></td>
    </tr>

  <?php  
  }}
  ?>


    <?php     
    foreach ($form_apply2 as $cols) 
    {
      // Show all enrollment booklets which are submitted and Approved..
      if($cols['form_approval'] != "Approved"){
        $style_ ="pointer-events: none;color:grey";
      }
      else{
        $style_="";
    }
    if($cols['form_submitted'] == 'Submitted' && $cols['form_approval'] == 'Approved'){
    ?>
    <tr scope="row">
        <td><?php echo $cols['Id']; ?></td>
        <td><?php echo $user_name ?></td>
        <td><?php echo "Enrolment Booklet"?></td>
        <td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_approval']; ?></td>
        <td><a class="" style=<?php echo "'".$style_."'" ?> href=<?php echo base_url().$cols['download_path'] ?> >Print</a></td>
    </tr>
  <?php 
    }
    // Show all enrollment booklets which are submitted and Pending..
    if($cols['form_submitted'] == 'Submitted' && $cols['form_approval'] == 'Pending'){
      ?>
      <tr scope="row">
        <td><?php echo $cols['Id']; ?></td>
        <td><?php echo $user_name ?></td>
        <td><?php echo "Enrolment Booklet"?></td>
        <td><?php echo  date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_submitted']; ?></td>
        <td><a class="" style=<?php echo "'".$style_."'" ?> href=<?php echo base_url().$cols['download_path'] ?> >Print</a></td>
    </tr>
    <?php 
    }
    // Show all enrollment booklets which are Pending by user and and not submitted..
    if($cols['form_submitted'] == 'Pending' && $cols['form_approval'] == 'Pending'){
      ?>
      <tr scope="row">
        <td><?php echo $cols['Id']; ?></td>
        <td><?php echo $user_name ?></td>
        <td><?php echo "Enrolment Booklet"?></td>
        <td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_approval']; ?></td>
        <td><a class="" style=<?php echo "'".$style_."'" ?> href=<?php echo base_url().$cols['download_path'] ?> >Print</a></td>
    </tr>

  <?php  
  }}
  ?>
  <?php
      // Show all Skill first forms which are submitted and Approved..
    foreach ($form_apply3 as $cols) 
  {
    if($cols['form_approval'] != "Approved"){
      $style_ ="pointer-events: none;color:grey";
    }
    else{
      $style_="";
    }
    if($cols['form_submitted'] == 'Submitted' && $cols['form_approval'] == 'Approved'){
    ?>
    <tr scope="row">
        <td><?php echo $cols['id']; ?></td>
        <td><?php echo $user_name; ?></td>
        <td><?php echo "SKILLS FIRST PROGRAM ENROLMENT AGREEMENT FORM"?></td>
        <td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_approval']; ?></td>
        <td><a style=<?php echo "'".$style_."'" ?> class="" href=<?php echo base_url().$cols['download_path'] ?> >Print</a></td>
    </tr>
    <?php
    } 
    // Show all enrollment booklets which are submitted and Pending..
    if($cols['form_submitted'] == 'Submitted' && $cols['form_approval'] == 'Pending'){
      ?>
      <tr scope="row">
        <td><?php echo $cols['id']; ?></td>
        <td><?php echo $user_name; ?></td>
        <td><?php echo "SKILLS FIRST PROGRAM ENROLMENT AGREEMENT FORM"?></td>
        <td><?php echo $cols['submission_date']; ?></td>
        <td><?php echo date('d-m-Y h:i A', strtotime($cols['form_submitted'])); ?></td>
        <td><a style=<?php echo "'".$style_."'" ?> class="" href=<?php echo base_url().$cols['download_path'] ?> ><?php echo $cols['form_approval']; ?></a></td>
    </tr>
    <?php
    } 
   // Show all enrollment booklets which are Pending by user and and not submitted..
   if($cols['form_submitted'] == 'Pending' && $cols['form_approval'] == 'Pending'){
      ?>
      <tr scope="row">
        <td><?php echo $cols['id']; ?></td>
        <td><?php echo $user_name; ?></td>
        <td><?php echo "SKILLS FIRST PROGRAM ENROLMENT AGREEMENT FORM"?></td>
        <td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_approval']; ?></td>
        <td><a style=<?php echo "'".$style_."'" ?> class="" href=<?php echo base_url().$cols['download_path'] ?> >Print</a></td>
      </tr>

    <?php 
    }
  }?>
<?php
    foreach ($form_apply4 as $cols) 
  {
    if($cols['form_approval'] != "Approved"){
      $style_ ="pointer-events: none;color:grey";
    }
    else{
      $style_="";
    }
    if($cols['form_submitted'] == 'Submitted' && $cols['form_approval'] == 'Approved'){
    ?>
    <tr scope="row">
        <td><?php echo $cols['id']; ?></td>
        <td><?php echo $user_name; ?></td>
        <td><?php echo "STUDENT INDUCTION FORM"?></td>
        <td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_approval']; ?></td>
        <td><a class=""  style=<?php echo "'".$style_."'" ?> class="" href=<?php echo base_url().$cols['download_path'] ?> > Print</a></td>
    </tr>
    <?php }
    if($cols['form_submitted'] == 'Submitted' && $cols['form_approval'] == 'Pending'){?>
    <tr scope="row">
        <td><?php echo $cols['id']; ?></td>
        <td><?php echo $user_name; ?></td>
        <td><?php echo "STUDENT INDUCTION FORM"?></td>
        <td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_submitted'] ?></td>
        <td><a class=""  style=<?php echo "'".$style_."'" ?> class="" href=<?php echo base_url().$cols['download_path'] ?> > Print</a></td>
    </tr>
    <?php }
    if($cols['form_submitted'] == 'Pending' && $cols['form_approval'] == 'Pending'){?>
    <tr scope="row">
        <td><?php echo $cols['id']; ?></td>
        <td><?php echo $user_name; ?></td>
        <td><?php echo "STUDENT INDUCTION FORM"?></td>
        <td><?php echo date('d-m-Y h:i A', strtotime($cols['submission_date'])); ?></td>
        <td><?php echo $cols['form_approval']; ?></td>
        <td><a class=""  style=<?php echo "'".$style_."'" ?> class="" href=<?php echo base_url().$cols['download_path'] ?> > Print</a></td>
    </tr>

    <?php 
    }
  }
    ?>
    
    
  </tbody>

</table>
 </div><!-- my_courses_details -->           

            <div class="my_courses_details1">
            	<h1>Courses Details</h1>
											
                
                    <div class="my_completed_units">
                            <div class="select-list">
                            <select autocomplete="off"  id="course" value="" name="course" onchange="course(this)" class="form-control Form_Setup required minimal">
												                  <option value="0">Select Course</option>
                                          <?php 
                                          $i= 0;
                                          foreach(array_unique($sub_courses_title, SORT_REGULAR) as $cols){
                                          ?>
                                            <option value=<?php echo $cols[0]['id'] ?>><?php echo $cols[0]['course_title'] ?></option>
                                          <?php 
                                          }?>
											      </select>
                            </div>
                    </div>
                    <!-- my_completed_units -->
                    
                    
                    <div id="result">

                      </div> 
                
                    
                    
            
            </div><!-- my_courses_details -->
            
            
            
            </div><!-- col-md-12 -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- Welcome_Classic Closed -->
































<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="assets/frontend/js/bootstrap.min.js"></script>



 

<!-- 4STEP FORM PLUGINS -->

<script type="text/javascript" src="assets/frontend/steps/js/jquery.steps.js"></script>   

<script type="text/javascript" src="assets/frontend/steps/js/jquery.validate.js"></script>





<!-- Attach Testimage to Header -->

<script>

    jQuery(function($) {

        $('.main-slider, .page-header').prepend('<img src="https://of.edu.au/assets/frontend/images/slider1.jpg" alt="" id="testimage" class="hidden">');

    });
    function fileUploaded(){
      file1 = document.getElementById('passport').files[0] ? document.getElementById('passport').files[0]: 0 ;
      file2 = document.getElementById('driverLicense').files[0] ? document.getElementById('driverLicense').files[0].size : 0;
      file3 = document.getElementById('medicare').files[0] ? document.getElementById('medicare').files[0].size:0;
      file4 = document.getElementById('b.cert').files[0] ? document.getElementById('b.cert').files[0].size : 0;
      file5 = document.getElementById('citizenCert').files[0] ? document.getElementById('citizenCert').files[0].size:0;
      file6 = document.getElementById('regCert').files[0] ? document.getElementById('regCert').files[0].size: 0;
      file7 = document.getElementById('IMMI').files[0] ?  document.getElementById('IMMI').files[0].size: 0;
      file8 = document.getElementById('VISA').files[0] ? document.getElementById('VISA').files[0].size: 0;
      // setTimeout(function(){ 
      //   document.getElementById('loader').style.display = "inline";
      // },100);
      // document.getElementById('loader').style.display = "none";

    }
    
    function course(){
      
      var data = $('#course').val();
      var id = <?php echo $this->session->userdata('user_id');?>;
    $.ajax({
				type: 'POST',
				data: {course:data, st_id:id},
				url: '<?php echo base_url()?>editProfile/units',
				success: function(result){
		    		$('#result').html(result);
		    	}
			});
    }
    

</script>




<script src="assets/frontend/js/jquery.fancybox.js"></script>
<!-- //-CUSTOM PLUGINS-// -->

<script src="assets/frontend/js/custom.js"></script>

<script src="assets/frontend/js/custom-enroll.js"></script>






<!-- JS -->
    <script src="vendor/jquery/jquery-student-profile-form.min.js"></script>
    <script src="vendor/nouislider/nouislider-student-profile-form.min.js"></script>
    <script src="vendor/wnumb/wNumb-student-profile-form.js"></script>
    <script src="vendor/jquery-validation/dist/jquery-student-profile-form.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods-student-profile-form.min.js"></script>
    <script src="js/main-student-profile-form.js"></script>
     
     
     
<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);



/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

function myFunction() {
  var x = document.getElementById("myuploadfile");
  x.disabled = true;
}


</script>      
        




<!-- Mirrored from of.edu.au/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Dec 2018 08:27:27 GMT -->
