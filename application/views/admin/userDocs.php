
<link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/admin/css/font-icons/entypo/css/entypo.css">

    <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/styles.css?2" rel="stylesheet"> -->
    <!-- <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/jquery.fancybox.css?1" rel="stylesheet"> -->
    <!-- <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/media_queries.css" rel="stylesheet">  -->
	<!-- <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/admin/css/font-icons/font-awesome/css/font-awesome.min.css"> -->
	<!-- <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/admin/css/font-icons/entypo/css/animation.css"> -->
	<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"> -->
	<!-- <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/admin/css/neon.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="http://dev.softkodes.com/optimisticfuture/assets/admin/js/fancy/jquery.fancybox.css?v=2.1.5" media="screen" /> -->
	<!-- <link rel="Shortcut Icon" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/images/logo /favicon.ico"> -->
	<!-- <link rel="icon" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/images/logo/favicon.ico" type="image/x-icon"> -->
	<!-- <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/admin/css/custom.css"> -->
	<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/style-student-profile-form.css" rel="stylesheet">
	<link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/styles_admin_student_forms.css?2" rel="stylesheet">
	<!-- <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/admin/css/ajaxupload.css" /> -->
    <!-- <script src="http://dev.softkodes.com/optimisticfuture/assets/admin/js/jquery-1.10.2.min.js"></script> -->





 <?php if($alert=="success") { ?>
 <div class="row alertrow">
	<div class="col-md-12">
    <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-success"><strong>Success!</strong> <?php echo rtrim($this->moduleName,'s');?> added sucessfully.</div>
	</div>
</div>
   <?php } if($alert=="deletesuccess") { ?>
 <div class="row alertrow">
	<div class="col-md-12">
    <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-success"><strong>Success!</strong> <?php echo rtrim($this->moduleName,'s');?> deleted sucessfully.</div>
	</div>
</div>
   <?php } if($alert=="deleteerror") { ?>
  <div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> Error occurred while deleting the record, please try again.</div>
	</div>
</div>
   <?php } if($alert=="editsuccess") { ?>
   <div class="row alertrow">
	<div class="col-md-12">
    <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-success"><strong>Success!</strong> <?php echo rtrim($this->moduleName,'s');?> updated sucessfully.</div>
	</div>
</div>
   <?php } if($alert=="error") { ?>
  <div class="row alertrow">
	<div class="col-md-12">
     <button class="close alertBox" data-dismiss="alert">x</button>
		<div class="alert alert-danger"><strong>Error!!</strong> Error occurred while saving the record, please try again.</div>
	</div>
</div>
  <?php } ?>

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
body{
	font-size:1em;
}
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
.container, .profile-info, .list-inline{
	font-size:13px;
}


</style>



<script type="text/javascript">

    $(document).ready(function(){

        $('.close_toper').click(function(){

            $(this).parent().hide();

        });
    });



</script>
<style>

.student_docs{
  text-shadow: 1px 1px 10px yellow;
	color: green;
	font-size: 2vw;
  padding:1%;
  font-weight: 900;
  border-radius: 4ex;
}
.action , .uploadFiles{
  border-radius: 4ex;
}
.action_ {
  border-radius: 1ex 4ex 4ex 1ex;
}

</style>

<h1 class="panel panel-default student_docs">Student Documents</h1>
<div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <form enctype="multipart/form-data" accept-charset="utf-8" method="POST" action="<?php echo base_url().'manage/user/docs/'.$user_id ?>" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-radio">
                                    <div class="my_courses_details1">
                                    <div class="form-radio-group">            
                                            <div class="form-radio-item checkbox123">
                                            <div class="row">
                                            <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8 heading">
                                                PASSPORT
                                                <a href=<?php echo $passportURL; ?> class="thumbnail">
                                                  <img id="passportImg" src= <?php echo $passport; ?> class="img-fluid" crossOrigin="Anonymous" >
                                                  <canvas id="passportURL" style="display:none;"  />
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                              <input type="file" id="passport" class="action_" name="passport" class="myuploadbtn" onChange="fileUploaded();">
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-print" style="color:green"></span></span>
                                              <button type="button" id="passportImg" onClick="printDoc(this.id,'<?php echo $passportURL; ?>');" class="btn btn-success action_" style="width:100%;">Print Document</button>
                                            </div>
                                            <br>
                                            <br>
                                             
                                            <div class="row">
                                            <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8 heading">
                                            DRIVERS LICENCE 
                                                <a href=<?php echo $driverLicenseURL; ?> class="thumbnail">
                                                  <img id="driversImg" src=<?php echo $driverLicense; ?>  alt="..." class="img-fluid">
                                                  <canvas id="driversURL" style="display:none;"  />
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                            <span class="input-group-addon action"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                            <input type="file" id="driverLicense" class="action_" name="driverLicense" class="myuploadbtn">
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-print" style="color:green"></span></span>
                                              <button id="driversImg" type="button" class="btn btn-success action_" onClick="printDoc(this.id,'<?php echo $driverLicenseURL; ?>');" style="width:100%;">Print Document</button>
                                            </div>

                                            
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="row">
                                            <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8 heading">
                                              MEDICARE (GREEN ONLY)
                                                <a href=<?php echo $medicareURL; ?> class="thumbnail">
                                                  <img id="medicareImg" src=<?php echo $medicare; ?>  alt="..." class="img-fluid">
                                                  <canvas id="medicareURL" style="display:none;"  />
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                            
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                              <input type="file" id="medicare" class="action_" name="medicare" class="myuploadbtn">
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-print" style="color:green"></span></span>
                                              <button type="button" id="medicareImg" class="btn btn-success action_" onClick="printDoc(this.id,'<?php echo $medicareURL; ?>');" style="width:100%;">Print Document</button>
                                            </div>
                                            
                                            <br>
                                            <br>
                                            <div class="row">
                                            
                                            <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8 heading">
                                            BIRTH CERTIFICATE 
                                                <a href=<?php echo $b_certURL; ?> class="thumbnail">
                                                  <img id="b_certImg" src=<?php echo $b_cert; ?> alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                            <span class="input-group-addon action"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                            <input type="file" id="b_cert" class="action_" name="b_cert" class="myuploadbtn">
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-print" style="color:green"></span></span>
                                              <button type="button" id="b_certImg" class="btn btn-success action_"  onClick="printDoc(this.id,'<?php echo $b_certURL; ?>');" style="width:100%;">Print Document</button>
                                            </div>
                                            <br>
                                        </div>

                                        
                                        <div class="form-radio-group">            
                                            <div class="form-radio-item">
                                            
                                            <div class="row">
                                              <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8 heading">
                                                  CITIZENSHIP CERTIFICATE
                                                <a href=<?php echo $citizenCertURL; ?> class="thumbnail">
                                                  <img id="citizenCertImg" src=<?php echo $citizenCert; ?> alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                             <input type="file" id="citizenCert" class="action_" name="citizenCert" class="myuploadbtn">
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-print" style="color:green"></span></span>
                                              <button type="button" id="citizenCertImg" class="btn btn-success action_" onClick="printDoc(this.id,'<?php echo $citizenCertURL; ?>');" style="width:100%;">Print Document</button>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                            
                                              <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8 heading">
                                            REGISTRATION CERTIFICATE BY DESCENT
                                                <a href=<?php echo $regCertURL; ?> class="thumbnail">
                                                  <img id="regCertImg" src=<?php echo $regCert; ?> alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                              <input type="file" id="regCert" class="action_" name="regCert" class="myuploadbtn">
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-print" style="color:green"></span></span>
                                              <button type="button" id="regCertImg" class="btn btn-success action_" onClick="printDoc(this.id,'<?php echo $regCertURL; ?>');" style="width:100%;">Print Document</button>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="row">
                                            
                                              <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8 heading">
                                            IMMI CARD
                                                <a href=<?php echo $IMMIURL; ?> class="thumbnail">
                                                  <img id="IMMIImg" src=<?php echo $IMMI; ?> alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                            
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                              <input type="file" id="IMMI" class="action_" name="IMMI" class="myuploadbtn">
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-print" style="color:green"></span></span>
                                              <button id="IMMIImg" type="button" class="btn btn-success action_" onClick="printDoc(this.id,'<?php echo $IMMIURL; ?>');" style="width:100%;">Print Document</button>
                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                            
                                              <div class="col-xs-6 col-md-2"></div>
                                              <div class="col-xs-6 col-md-8 heading">
                                            VISA
                                                <a href=<?php echo $VISAURL; ?> class="thumbnail">
                                                  <img id="VISAImg" src=<?php echo $VISA; ?> alt="..." class="img-fluid">
                                                </a>
                                              </div>
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-saved" style="color:green"></span></span>
                                              <input type="file" id="VISA" class="action_" name="VISA" class="myuploadbtn">
                                            </div>
                                            <div class="input-group">
                                              <span class="input-group-addon action"><span class="glyphicon glyphicon-print" style="color:green"></span></span>
                                              <button id="VISAImg" type="button" class="btn btn-success action_"onClick="printDoc(this.id,'<?php echo $VISAURL; ?>');"  style="width:100%;">Print Document</button>
                                            </div>
                                            <br>
                                        </div>
                                      </div>
                                    </div>    
                                </div> 
                            </div> 
                          <div class="form-submi">
                          <input type="submit" value="UPDATE" class="uploadFiles" id="submit" onClick="fileUploaded(this)" name="uploadBtn" /> 
                        </div> 
                      </div>
                    </form>
                </div>
            </div>
        </div>


<script src='<?php echo base_url(); ?>ofpdfs/coordinater/pdfmake.min.js'></script>
<script src='<?php echo base_url(); ?>ofpdfs/coordinater/vfs_fonts.js'></script>
<script src='<?php echo base_url(); ?>ofpdfs/coordinater/userDocs.js'></script>
<script src='<?php echo base_url(); ?>ofpdfs/coordinater/form_attested.js'></script>
<script src="http://dev.softkodes.com/optimisticfuture/assets/admin/js/bootstrap.min.js"></script>
