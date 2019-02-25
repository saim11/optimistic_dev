
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Optimistic Futures</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap -->

    <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/bootstrap.min.css" rel="stylesheet">

    <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/styles.css?2" rel="stylesheet">

    <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/jquery.fancybox.css?1" rel="stylesheet">

    <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/media_queries.css" rel="stylesheet">        



    <!-- Animate.css -->

    <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/css/animate.css">   



    <!-- 4step form.css -->

    <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/steps/css/normalize.css">

    <link rel="stylesheet" href="http://dev.softkodes.com/optimisticfuture/assets/frontend/steps/css/jquery.steps.css">

    

    <!-- WEB FONT -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,500' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,800,400' rel='stylesheet' type='text/css'>    

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->



  </head>

<body>

<!-- HEADER CLOSED -->



<style type="text/css">

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

</style>



<!-- <script type="text/javascript">

    $(document).ready(function(){

        $('.close_toper').click(function(){

            $(this).parent().hide();

        });



    });



</script> -->



    









 <div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content SNT_Modals">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>

                </div>

                <div class="modal-body">

                    <form id="LOGINForm" method="post" action="http://dev.softkodes.com/optimisticfuture/home/forgotpassword" class="validate Filter_Selector">

                        <div class="row">

                            <div class="col-md-12">

                                <div class="form-group">

                                    <input type="text" id="name-company" name="user_email" class="form-control Form_Setup required" placeholder="Email/Username">

                                </div>

                            </div>







                            <div class="col-md-12">

                                <div class="form-group">

                                    <button type="submit" id="submitBtn" class="btn btn-default Submit_Button">SUBMIT</button>

                                </div>

                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>




  
	  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
	  <link rel="stylesheet" href="/resources-Images/resources-page.css">
  

    <script type="text/javascript">

	var dFlipLocation = "http://dev.softkodes.com/optimisticfuture/assets/frontend/DFLIP";
</script>
<script src="http://dev.softkodes.com/optimisticfuture/assets/frontend/DFLIP/js/dflip.js"></script>
<script type="text/javascript">
	
	DFLIP.defaults.hideControls = "download,share";
</script>
    <!-- Flipbook StyleSheet -->
    <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/DFLIP/css/dflip.css" rel="stylesheet" type="text/css">

    <!-- Icons Stylesheet -->
    <link href="http://dev.softkodes.com/optimisticfuture/assets/frontend/DFLIP/css/themify-icons.css" rel="stylesheet" type="text/css">
  
  
      <div class="container gallery-container">

	  <h1></h1>
	  
	  <div class="tz-gallery">
  
		  <div class="row">

		  	   
			  <div class="col-sm-6 col-md-3">
				  <div class="thumbnail">
					  <a class="lightbox _df_custom" 
					  source="http://dev.softkodes.com/optimisticfuture/uploads/book/CPPSEC2001A_Security_Learner_Guide2.pdf"
    				id="df_manual_custom" >
						  <img src="http://dev.softkodes.com/optimisticfuture/uploads/book/23213.jpg"  alt="CPP20212 Certificate II in Security Operations">
					  </a>
				  </div>
			  </div>
			  
		  </div>
  
	  </div>
  
  </div>
    
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
      $(document).ready(function(){
	  baguetteBox.run('.tz-gallery');
      var urlVal = JSON.parse(localStorage.getItem("sourcePdf"));
      document.getElementById('df_manual_custom').setAttribute('source', urlVal)
      $('#df_manual_custom').trigger('click');
      console.log("hellllllllllooo");
});
  </script>


















  



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="http://dev.softkodes.com/optimisticfuture/assets/frontend/js/bootstrap.min.js"></script>



 

<!-- 4STEP FORM PLUGINS -->

<script type="text/javascript" src="http://dev.softkodes.com/optimisticfuture/assets/frontend/steps/js/jquery.steps.js"></script>   

<script type="text/javascript" src="http://dev.softkodes.com/optimisticfuture/assets/frontend/steps/js/jquery.validate.js"></script>










<script src="http://dev.softkodes.com/optimisticfuture/assets/frontend/js/jquery.fancybox.js"></script>
<!-- //-CUSTOM PLUGINS-// -->

<script src="http://dev.softkodes.com/optimisticfuture/assets/frontend/js/custom.js"></script>

<script src="http://dev.softkodes.com/optimisticfuture/assets/frontend/js/custom-enroll.js"></script>

    
</body>

</html>