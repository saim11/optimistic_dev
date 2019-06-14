<!DOCTYPE html>

<html lang="en">
<?php
if (empty($page_meta) && empty($page_title)) {
 $page_title = "";
 $page_meta  = "";
}

?>

<head>
  <!-- Meta Details -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content=<?php echo '"' . $page_meta . '"'; ?>>
  <!--End Meta Details -->

  <!-- Title -->
  <title><?php echo $page_title; ?></title>
  <!-- End Title -->

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>

  <!-- End Scripts -->

  <!--End Bootstrap + all CSS -->
  <link title="hello" href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/bootstraps.min.css" rel="stylesheet">
  <link href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/style.css" rel="stylesheet">
  <link href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/responsive.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
    rel="stylesheet">
  <!-- fontawesome CSS -->
  <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>front-pages/fontawesome/css/all.css">
  <!-- Glyphicons CSS -->
  <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/glyphicons.css">
  <!-- carousell CSS -->
  <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/carouseller.css">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/png" href="favicon.ico">
  <!-- Bootstrap Nav CSS -->
  <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/bootnavbar.css">

  <!-- WEB FONT -->
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,500' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,800,400' rel='stylesheet' type='text/css'>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <!-- End WEB FONT -->

  <!-- End All pages css -->
  <!--End Bootstrap + all CSS -->


</head>

<body>




  <!-- Top Bar Start -->
  <div class="top_bar">
    <div class="top_bar_sub">
      <div class="top_social"> <a href="#"><i class="fab fa-facebook-f"></i></a> <a href="#"><i
            class="fab fa-youtube"></i></a>
        <p>Broadmeadows: 03 93093370 | Glenroy: 03 99172133 | Shepparton: 03 58218665</p>
      </div>
      <!-- top_social-->
      <div class="top_bar_nav">
        <ul class="nav my_top_nav">
          <li class="nav-item"> <a class="nav-link active"
              href="http://dev.softkodes.com/optimisticfuture/index.html">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="http://dev.softkodes.com/optimisticfuture/about-us.html">About
              Us</a> </li>
          <li class="nav-item"> <a class="nav-link"
              href="http://dev.softkodes.com/optimisticfuture/resources.html">Resourses</a> </li>
          <div class="login_area">
            <?php if ($this->session->userdata('user_id')) {
 if ($this->session->userdata('user_type') == 'trainer') {?>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle loggedIn" href="#" id="navbarDropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><?php echo $this->session->userdata('user_name'); ?></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo $this->config->base_url() . 'home/logout'; ?>"><span
                    class="glyphicon glyphicon-off" style="padding-right:5px"></span>Log Out</a>
              </div>
            </li>
            <?php
} else {
  ?>

            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle loggedIn" href="#" id="navbarDropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><?php echo $this->session->userdata('user_name'); ?></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"
                  href="<?php echo $this->config->base_url() . 'home/myAccount/' . $this->session->userdata('user_id'); ?>"><span
                    class="glyphicon glyphicon-cog"></span> Account</a>
                <a class="dropdown-item" href="<?php echo $this->config->base_url() . 'home/logout'; ?>"><span
                    class="glyphicon glyphicon-off" style="padding-right:5px"></span>Log Out</a>
              </div>
            </li>

            <?php }} else if ($this->session->userdata('co_id')) {?>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle loggedIn" href="#" id="navbarDropdown"
                role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"><?php echo $this->session->userdata('co_name'); ?></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item"
                  href="<?php echo $this->config->base_url() . 'home/coAccount/' . $this->session->userdata('co_id'); ?>"><span
                    class="glyphicon glyphicon-cog"></span> Account</a>
                <a class="dropdown-item" href="<?php echo $this->config->base_url() . 'home/logout'; ?>"><span
                    class="glyphicon glyphicon-off" style="padding-right:5px"></span>Log Out</a>
              </div>
            </li>
            <li class="Menu-dropdown">
              <!-- Split button -->
              <div class="btn-group">
                <button type="button" class="btn btn-outline-primary btn-sm login_btn"><span
                    class="glyphicon glyphicon-user"
                    style="padding-right:5px"></span><?php echo $this->session->userdata('co_name'); ?></button>
                <button type="button" class="btn btn-outline-primary btn-sm login_btn" data-toggle="dropdown">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu " role="menu">
                  <li><a class="dropdown-toggle"
                      href="<?php echo $this->config->base_url() . 'home/coAccount/' . $this->session->userdata('co_id'); ?>"><span
                        class="glyphicon glyphicon-cog"></span> Account</a></li>
                  <li><a href="<?php echo $this->config->base_url() . 'home/logout'; ?>"><span
                        class="glyphicon glyphicon-off" style="padding-right:5px"></span>Log Out</a></li>
                </ul>
              </div>

            </li>



            <?php } else {?>

            <a href="register.html"><button type="button"
                class="btn btn-outline-primary btn-sm login_btn">Register</button></a>
            <a href="login.html"><button type="button" class="btn btn-outline-primary btn-sm login_btn">Log
                In</button></a>
            <?php }?>

          </div>
          <!-- login_area-->
        </ul>
      </div>
      <!-- top_bar_nav-->
    </div>
    <!-- top Sub-->
  </div>
  <!-- top bar-->
  <!-- Top Bar End -->

  <!-- Header Start -->
  <div class="header_area" id="myHeader">
    <div class="header_area_sub">
      <?php echo $this->ws['header_text']; ?>
      <!-- logo-->
      <div class="top_nav text-right">
        <nav class="navbar navbar-expand-lg navbar-light desk_nav" id="main_navbar">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
              class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item "> <a class="nav-link"
                  href="http://dev.softkodes.com/optimisticfuture/student-info.html">Student Information<span
                    class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item"> <a class="nav-link"
                  href="http://dev.softkodes.com/optimisticfuture/application-form.html">Application Forms</a> </li>


              <!-- Talal Customization start -->
                <li class="nav-item">
                      <a class="nav-link" href="http://dev.softkodes.com/optimisticfuture/join_us.html">Join Us</a> 
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="http://dev.softkodes.com/optimisticfuture/blog.html">Blog</a>
                </li>
              <!-- Talal Customization end -->


              <li class="nav-item"> <a class="nav-link"
                  href="http://dev.softkodes.com/optimisticfuture/details-and-schedule.html">Details and Schedule</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Courses
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Individual Support
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/individual-support.html">CHC33015 Cert III</a>
                      </li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Security Operations
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/cpp20212-certificate-ii-in-security-operations.html">CPP20212
                          Cert II</a></li>
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/cpp30411-certificate-iii-in-security-operations.html">CPP30411
                          Cert III</a></li>
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/brochure-baton-handcuffs.html">Baton &
                          Handcuff </a></li>
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/cpp20212-cert-ii-control-rooms.html">Control
                          Room</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Early Childhood Education And Care
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/chc30113-certificate-iii-in-early-childhood-education-and-care.html">CHC30113
                          Cert
                          III</a></li>
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/chc50113-diploma-in-early-childhood-education-and-care.html">CHC50113
                          Diploma</a></li>
                    </ul>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Emergency First Aid
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/hltaid001-provide-cardiopulmonary-resuscitation.html">HLTAID001</a>
                      </li>
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/hltaid002-provide-basic-emergency-life-support.html">HLTAID002</a>
                      </li>
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/hltaid003-provide-first-aid.html">HLTAID003</a>
                      </li>
                      <li><a class="dropdown-item"
                          href="http://dev.softkodes.com/optimisticfuture/hltaid004-provide-an-emergency-first-aid-response-in-an-education-and-care-setting.html">HLTAID004</a>
                      </li>
                    </ul>
                  </li>

                </ul>
              </li>
              <li class="nav-item"> <a class="nav-link" href="contact.html">Contacts</a> </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- top_nav-->
    </div>
    <!-- header_area_sub-->
  </div>
  <!-- header_area-->
  <!-- Header End -->

  <div class="clearfix"></div>





  <!-- HEADER CLOSED -->










  <script type="text/javascript">
    $(document).ready(function () {

      $('.close_toper').click(function () {

        $(this).parent().hide();

      });




    });
  </script>



  <?php if ($this->session->userdata('success_from_php')) {?>



  <div class="top_popup_1 top_popup toper">

    <div class="right close_toper">

      <a title="Close">

        <i class="fa fa-times"></i>

      </a>

    </div>



    <div class="inner_top_popup">



      <div class="popup_text right">

        <p><?php echo $this->session->userdata('success_from_php'); ?></p>

      </div>



    </div>

  </div>



  <?php } else if ($this->session->userdata('error_from_php')) {?>

  <div id="error" class="alert alert-warning alert-dismissible fade show " role="alert">
    <strong style="position:relative;left:50%;"><?php echo $this->session->userdata('error_from_php'); ?></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>


  <?php }?>


  <?php

$this->session->unset_userdata('success_from_php');

$this->session->unset_userdata('error_from_php');

?>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="LOGINForm" method="post" action="<?php echo $this->config->base_url() . 'home/forgotpassword'; ?>">
            <div class="form-group">
              <input type="text" class="form-control" id="recipient-name" placeholder="Email / Username">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="submitBtn" class="btn btn-success">Submit</button>
        </div>
      </div>
    </div>
  </div>




  <div class="modal fade" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog" role="document">

      <div class="modal-content SNT_Modals">

        <div class="modal-header">

          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
              aria-hidden="true">&times;</span></button>

          <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>

        </div>
        <section class="pb_sm_py_cover text-center cover-bg-black cover-bg-opacity-4"
          style="background-image: url(assets/images/bg1.jpg)">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6">
                <h2 class="heading mb-3">Individual Support</h2>
                <p><a href="#" role="button"
                    class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2 top_btn_css">Check
                    Details</a>
                  <a href="#" role="button"
                    class="btn smoothscroll pb_outline-light p-3 rounded-0 pb_font-13 pb_letter-spacing-2 top_btn_css">Apply
                    Now</a>
                </p>

              </div>
            </div>
          </div>
        </section>
        <div class="modal-body">

          <form id="LOGINForm" method="post" action="<?php echo $this->config->base_url() . 'home/forgotpassword'; ?>"
            class="validate Filter_Selector">

            <div class="row">

              <div class="col-md-12">

                <div class="form-group">

                  <input type="text" id="name-company" name="user_email" class="form-control Form_Setup required"
                    placeholder="Email/Username">

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


  <!-- <span class="preload">
    <img src="http://dev.softkodes.com/optimisticfuture/resources-Images/loader.gif">
    <div class="bottom-left">Loading..</div>
</span> -->
  </div>

  <span class="content">
  </span>

  <script>
    $(window).on('load', function () {
      $(".preload").fadeOut(10000, function () {
        $(".content").fadeIn(500);
      });
    });
  </script>

  <style>
    .preload {
      position: relative;
      text-align: center;
      color: white;
    }

    .content {
      display: none;
    }

    .preload {
      width: 100px;
      height: 100px;
      position: fixed;
      top: 50%;
      left: 45%;
    }

    /* Bottom left text */
    .bottom-left {
      position: absolute;
      top: 100%;
      left: 60%;
      color: brown;
      font-weight: 900;
    }

    .myOverlay {
      position: absolute;
      height: 100%;
      width: 100%;
    }

    .login_btn {
      border-color: white !important;
      border-radius: 20px !important;
    }

    .loggedIn {
      border: 3px double white !important;
      border-radius: 20% 20% 20% 20% !important;
      height: 100% !important;
    }

    header .logo {
      padding: 20px 0;
    }

    .top_popup_2 {
      width: 100%;
      background: rgb(209, 63, 63) none repeat scroll 0 0;
      margin-top: 0;
      max-height: 100%;
      min-height: 50px;
      opacity: 1;
      width: 100%;
      z-index: 9999;
      padding: 0px 0px;
    }

    .toper {
      text-align: center !important;
      transition: all 500ms linear 0s;
    }
  </style>
  <!-- Bootstrap JS -->
  <script src="<?php echo FRONTEND_ASSETS; ?>front-pages/js/jquery-3.3.1.js"></script>
  <script src="<?php echo FRONTEND_ASSETS; ?>front-pages/js/bootstrap.min.js"></script>
  <!-- carousel JS -->
  <script src="<?php echo FRONTEND_ASSETS; ?>front-pages/js/carouseller.js"></script>
  <script src="<?php echo FRONTEND_ASSETS; ?>front-pages/js/jquery.easing.1.3.js"></script>

  <!-- bootnav JS -->
  <script src="<?php echo FRONTEND_ASSETS; ?>front-pages/js/bootnavbar.js"></script>
  <script>
    $(function () {
      $('#main_navbar').bootnavbar();
    })
  </script>
  <script>
    window.onscroll = function () {
      myFunction()
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky_header");
      } else {
        header.classList.remove("sticky_header");
      }
    }

    /* Open when someone clicks on the span element */
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }

    $(function () {
      $('#second').carouseller({
        scrollSpeed: 300,
        autoScrollDelay: 4000,
        easing: 'linear'
      });
    });


    $(function () {
      $('#third').carouseller({
        scrollSpeed: 800,
        autoScrollDelay: 1600,
        easing: 'linear'
      });
    });
  </script>
  <script type="text/javascript">
    function toggleIcon(e) {
      $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
    }

    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
  </script>