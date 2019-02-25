
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Optimistic Futures</title>
<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
<!-- <link rel="stylesheet" href="./asset-custom/css/bootstrap.min.css" > -->
<!-- <link rel="stylesheet" href="./asset-custom/css/bootstrap/bootstrap.css"> -->
<link rel="stylesheet" href="./asset-custom/fonts/ionicons/css/ionicons.min.css">
<link rel="stylesheet" href="./asset-custom/fonts/law-icons/font/flaticon.css">
<link rel="stylesheet" href="./asset-custom/fonts/fontawesome/css/font-awesome.min.css">
<link rel="stylesheet" href="./asset-custom/css/slick.css">
<link rel="stylesheet" href="./asset-custom/css/slick-theme.css">
<link rel="stylesheet" href="./asset-custom/css/helpers.css">
<link rel="stylesheet" href="./asset-custom/css/style.css">




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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


<script src="./asset-custom/js/jquery.min.js" type="text/javascript">  </script>
<script src="./asset-custom/js/jquery.min.js"></script> 
<script src="./asset-custom/js/popper.min.js"></script> 
<script src="./asset-custom/js/bootstrap.min.js"></script> 
<script src="./asset-custom/js/slick.min.js"></script> 
<script src="./asset-custom/js/jquery.waypoints.min.js"></script> 
<script src="./asset-custom/js/jquery.easing.1.3.js"></script> 
<script src="./asset-custom/js/main.js"></script>
</head>



<?php

$backgroundimage = "";
	if($pageData["page_background"] != "" && $pageData["page_id"]!=42)
	{
	$backgroundimage = "style='background:url(".base_url().$pageData["page_background"].") no-repeat top center;background-size: cover;'";
	}
	else{
		$backgroundimage=$backgroundimage = "style='background:url(".base_url().$pageData["page_background"].") no-repeat top center;background-size: cover;display:none'";
	}


?>
<section class="Section_Devs Head_Titles" <?php  echo $backgroundimage; ?> >
	<div class="container">
		<h1><?php echo ($pageData["page_id"]!=42) ?  $pageData["page_title"]:  "" ;  ?></h1>
		<!--<ol class="breadcrumb">
		  <li><a href="<?php echo $this->config->base_url(); ?>">Home</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active"><?php echo $pageData["page_title"]; ?></li>
		</ol>-->
	</div>
</section>
<!-- Head_Titles Closed -->

<?php 
echo $pageData["page_text"]; 
?>




