
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Optimistic Futures</title>


<!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- End Scripts -->

<!--End Bootstrap + all CSS -->
    <!-- <link title="hello" href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/bootstraps.min.css" rel="stylesheet"> -->
    <!-- <link  href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/style.css" rel="stylesheet"> -->
    <!-- <link  href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/responsive.css" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <!-- fontawesome CSS -->
        <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>front-pages/fontawesome/css/all.css">
        <!-- Glyphicons CSS -->
        <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/glyphicons.css">
        <!-- carousell CSS -->
        <link rel="stylesheet" href="<?php echo FRONTEND_ASSETS; ?>front-pages/css/carouseller.css">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="favicon.ico">

        <!-- WEB FONT -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,500' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,800,400' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- End WEB FONT -->

        <!-- End All pages css -->
<!--End Bootstrap + all CSS -->


<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
<!-- <link rel="stylesheet" href="./asset-custom/css/bootstrap.min.css" > -->
<!-- <link rel="stylesheet" href="./asset-custom/css/bootstrap/bootstrap.css"> -->
<!-- <link rel="stylesheet" href="./asset-custom/fonts/ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="./asset-custom/fonts/law-icons/font/flaticon.css">
<link rel="stylesheet" href="./asset-custom/fonts/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="./asset-custom/css/slick.css">
<link rel="stylesheet" href="./asset-custom/css/slick-theme.css">
<link rel="stylesheet" href="./asset-custom/css/helpers.css"> -->
<!-- <link rel="stylesheet" href="./asset-custom/css/style.css"> -->
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
    <style>
    /* h1{
      color: #fff;
    font-family: 'Lato', sans-serif;
    font-weight: bolder !important;
    font-size: 36px;
    margin: 0;
    } */
    .top_bar_nav{
      width:auto;
    }
    .panel{
      max-height:100% !important;
    }
    </style>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

<link href="./asset-custom/css/jquery.fancybox.css?1" rel="stylesheet">
<link href="./asset-custom/css/media_queries.css" rel="stylesheet">


<!-- Animate.css -->

    <link rel="stylesheet" href="./asset-custom/css/animate.css">



    <!-- 4step form.css -->

    <link rel="stylesheet" href="./asset-custom/css/normalize.css">

    <link rel="stylesheet" href="./asset-custom/css/jquery.steps.css">

<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,500' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:500,600,800,400' rel='stylesheet' type='text/css'>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<!-- <script src="./asset-custom/js/jquery.min.js" type="text/javascript">  </script>
<script src="./asset-custom/js/jquery.min.js"></script>
<script src="./asset-custom/js/popper.min.js"></script>
<script src="./asset-custom/js/bootstrap.min.js"></script>
<script src="./asset-custom/js/slick.min.js"></script>
<script src="./asset-custom/js/jquery.waypoints.min.js"></script>
<script src="./asset-custom/js/jquery.easing.1.3.js"></script>
<script src="./asset-custom/js/main.js"></script> -->
<!-- <link rel="stylesheet" href="./asset-custom/css/style.css"> -->

</head>



<?php

$backgroundimage = "";
if ($pageData["page_background"] != "" && $pageData["page_id"] != 42) {
 $backgroundimage = "style='background:url(" . base_url() . $pageData["page_background"] . ") no-repeat top center;background-size: cover;'";
} else {
//  $backgroundimage = $backgroundimage = "style='background:url(" . base_url() . $pageData["page_background"] . ") no-repeat top center;background-size: cover;display:none'";
}

?>
<!-- <section class="Section_Devs Head_Titles" <?php echo $backgroundimage; ?> >
	<div class="container">
		<h1><?php echo ($pageData["page_id"] != 42) ? $pageData["page_title"] : ""; ?></h1> -->
		<!--<ol class="breadcrumb">
		  <li><a href="<?php echo $this->config->base_url(); ?>">Home</a></li>
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>
		  <li class="active"><?php echo $pageData["page_title"]; ?></li>
		</ol>-->
	<!-- </div>
</section> -->
<!-- Head_Titles Closed -->

<?php
echo $pageData["page_text"];
?>


        <!-- Bootstrap JS -->
        <!-- <script src="<?php echo FRONTEND_ASSETS; ?>front-pages/js/jquery-3.3.1.js"></script>
        <script src="<?php echo FRONTEND_ASSETS; ?>front-pages/js/bootstrap.min.js"></script> -->
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
  window.onscroll = function () { myFunction() };

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





