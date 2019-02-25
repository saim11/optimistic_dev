<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title><?php echo (isset($page_title)) ? $page_title : PROJECT_TITLE;?></title>

	<!--<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/no-theme/jquery-ui-1.10.3.custom.min.css">-->
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/font-icons/font-awesome/css/font-awesome.min.css">
	  <link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/font-icons/entypo/css/animation.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/neon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo ADMIN_ASSETS;?>js/fancy/jquery.fancybox.css?v=2.1.5" media="screen" />

	<link rel="Shortcut Icon" href="<?php echo FRONTEND_ASSETS;?>images/logo /favicon.ico">
	<link rel="icon" href="<?php echo FRONTEND_ASSETS;?>images/logo/favicon.ico" type="image/x-icon">

	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/custom.css">
	<link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/ajaxupload.css" />
    <?php if(isset($menuActive)){ ?>
    <link rel="stylesheet" href="<?php echo ADMIN_ASSETS;?>css/menu.css" />
    <?php } ?>
	<script src="<?php echo ADMIN_ASSETS;?>js/jquery-1.10.2.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>