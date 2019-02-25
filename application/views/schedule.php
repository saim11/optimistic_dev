
<section class="Section_Devs Head_Titles">
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



<section class="Section_Devs Welcome_Classic">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 Locations">
<?php echo $pageData["page_text"]; ?>

<div class="text-left">
<?php
$redirction="";
if(isset($_GET['url']))
{
	$redirction=$_GET['url'];
}
?>
<form action="<?php echo base_url().$redirction;  ?>" method="GET" >I agree:&nbsp; <input name="agree" required style="margin-top:5px;" type="checkbox" value="0" /><br />
<br />
<input class="btn btn-default Continue_Button optic_buttons" type="submit" value="Continue" />&nbsp;&nbsp; <input class="btn btn-default Continue_Button optic_buttons" onclick="document.location.href='index.php';" type="button" value=" I don't agree " />&nbsp;</form>
</div>

<p>&nbsp;</p>
</div>
</div>
</div>
</section>
