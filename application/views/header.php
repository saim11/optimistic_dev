<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $page_title; ?></title>
    <meta name="description" content=<?php echo '"'.$page_meta.'"'; ?>>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    

    <!-- Bootstrap -->

    <link href="<?php echo FRONTEND_ASSETS;?>css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo FRONTEND_ASSETS;?>css/style-student-profile-form.css" rel="stylesheet">

    <link href="<?php echo FRONTEND_ASSETS;?>css/styles.css?2" rel="stylesheet">

    <link href="<?php echo FRONTEND_ASSETS;?>css/jquery.fancybox.css?1" rel="stylesheet">

    <link href="<?php echo FRONTEND_ASSETS;?>css/media_queries.css" rel="stylesheet">        



    <!-- Animate.css -->

    <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS;?>css/animate.css">   



    <!-- 4step form.css -->

    <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS;?>steps/css/normalize.css">

    <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS;?>steps/css/jquery.steps.css">

    

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



<header>

<div class="container">

<div class="row">

  <?php echo $this->ws['header_text']; ?>

<div class="col-md-9 col-sm-4 col-xs-12 optimistic_logs" >

<div class="clearfix">&nbsp;</div>

<p class="phone"  ><a href="tel:0393093370">Broadmeadows: 03 93093370</a> </p>
<p class="phone"> <a href="tel:0399172133">Glenroy: 03 99172133 </a> </p>
<p class="phone"> <a href="tel:0399172133">Shepparton: 03 58218665 </a> </p>
<p class="phone visible-xs"> TOID : 41053</p>



<ul class="nobg">
<?php   if($this->session->userdata('user_id'))

                                    { ?> 

  <!-- <li><a ><?php  echo $this->session->userdata('user_name'); ?></a></li> -->

  <!--<li><a  href="<?php echo $this->config->base_url().'home/tests'; ?>">Take Test</a></li>-->

<!-- <li><a class="btn btn-default theme_buttons" href="<?php echo $this->config->base_url().'home/logout'; ?>">Log Out</a></li> -->
<li class="Menu-dropdown">
    <!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-default theme_dropdown"><span class="glyphicon glyphicon-user" style="padding-right:5px"></span><?php  echo $this->session->userdata('user_name'); ?></button>
  <button type="button" class="btn btn-default theme_dropdown dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu " role="menu">
    <li ><a class="dropdown-toggle"  href="<?php echo $this->config->base_url().'home/myAccount/'.$this->session->userdata('user_id'); ?>"><span class="glyphicon glyphicon-cog" ></span> Account</a></li>
    <li ><a href="<?php echo $this->config->base_url().'home/logout'; ?>"><span class="glyphicon glyphicon-off" style="padding-right:5px"></span>Log Out</a></li>
  </ul>
</div>

</li>

    <?php } else if($this->session->userdata('co_id')){?>
        <li class="Menu-dropdown">
    <!-- Split button -->
<div class="btn-group">
  <button type="button" class="btn btn-default theme_dropdown"><span class="glyphicon glyphicon-user" style="padding-right:5px"></span><?php  echo $this->session->userdata('co_name'); ?></button>
  <button type="button" class="btn btn-default theme_dropdown dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu " role="menu">
    <li ><a class="dropdown-toggle"  href="<?php echo $this->config->base_url().'home/coAccount/'.$this->session->userdata('co_id'); ?>"><span class="glyphicon glyphicon-cog" ></span> Account</a></li>
    <li ><a href="<?php echo $this->config->base_url().'home/logout'; ?>"><span class="glyphicon glyphicon-off" style="padding-right:5px"></span>Log Out</a></li>
  </ul>
</div>

</li>



    <?php }else {  ?>
                        

  <li><a href="register.html">Register</a></li>
  <li><a class="btn btn-default theme_buttons" href="login.html">Log In</a></li>
                            <?php } ?>

</ul>

<div class="clearfix">&nbsp;</div>

</div>

<!-- optimistic_logs Closed --></div>

</div>









  <nav class="navbar navbar-default optic_navigation">

      <div class="container">

        <div class="navbar-header">

          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">

            <span class="sr-only">Toggle navigation</span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

            <span class="icon-bar"></span>

          </button>          

        </div>

        <div class="navbar-collapse collapse" id="navbar">

         <!-- <ul class="nav navbar-nav">

              <?php $menus=$this->SqlModel->getRecords('*', 'menu', 'menu_id', 'ASC',  array('menu_status'=>'Published')); ?>

                <?php foreach($menus as $menu){ ?>

                <li><a href="<?php echo $this->config->base_url().$menu['menulink']; ?>"><?php echo $menu['menutitle']; ?></a></li>

<?php } ?>

              <li class="Menu-dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1 <b class="caret"></b></a>
                  <ul class="dropdown-menu multi-level">
                      <li><a href="#">Action</a></li>
                      <li><a href="#">Another action</a></li>
                      <li><a href="#">Something else here</a></li>
                      <li class="dropdown-submenu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                          <ul class="dropdown-menu">
                              <li><a href="#">Action</a></li>
                              <li class="dropdown-submenu">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                  <ul class="dropdown-menu">
                                      <li class="dropdown-submenu">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                          <ul class="dropdown-menu">
                                              <li><a href="#">Action</a></li>
                                              <li><a href="#">Another action</a></li>
                                          </ul>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li>

          </ul> -->
          

          <?php $where = array('content_id'=>7,'content_status'=>'Published');  
    $contentData = $this->SqlModel->getSingleRecord('content',$where);
      if(isset($contentData['content_text']))
      {
         echo $contentData['content_text'];
      }
    ?>

          <ul class="nav navbar-nav navbar-right">

            <li class="number hidden-xs">TOID : 41053</li>            

          </ul>          

        </div><!--/.nav-collapse -->

      </div>

    </nav>





</header>

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



<script type="text/javascript">

    $(document).ready(function(){

        $('.close_toper').click(function(){

            $(this).parent().hide();

        });
        



    });



</script>



    <?php if($this->session->userdata('success_from_php')){ ?>



    <div class="top_popup_1 top_popup toper">

        <div class="right close_toper"  >

            <a title="Close" >

                <i class="fa fa-times"></i>

            </a>

        </div>



        <div class="inner_top_popup">



            <div class="popup_text right">

                <p><?php echo $this->session->userdata('success_from_php'); ?></p>

            </div>



        </div>

    </div>



<?php } else if($this->session->userdata('error_from_php')){ ?>

    <div class="top_popup_2 toper">

        <div class="right close_toper"  >

            <a  title="" >

                <i class="fa fa-times"></i>

            </a>

        </div>

        <div class="inner_top_popup">

            <div class="popup_text right">

                <p><?php echo $this->session->userdata('error_from_php'); ?></p>

            </div>

        </div>

    </div>



<?php }  ?>





<?php

$this->session->unset_userdata('success_from_php');

$this->session->unset_userdata('error_from_php');

?>





 <div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content SNT_Modals">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>

                </div>
                <section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4" style="background-image: url(assets/images/bg1.jpg)">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2 class="heading mb-3">Individual Support</h2>
            <p><a href="#" role="button" class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2 top_btn_css">Check Details</a>
                <a href="#" role="button" class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2 top_btn_css">Apply Now</a>
            </p>
        
      </div>
    </div>
  </div>
</section>
                <div class="modal-body">

                    <form id="LOGINForm" method="post" action="<?php echo $this->config->base_url().'home/forgotpassword'; ?>" class="validate Filter_Selector">

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



