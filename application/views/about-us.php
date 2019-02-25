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

<?php echo $pageData["page_text"]; ?>