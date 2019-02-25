<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ((isset($this->ws['website_title'])) ? $this->ws['website_title'] : '');?></title>
<style>
body{
	background:#333;
	color:#FFF;
	font-family:Arial, Helvetica, sans-serif;	
}
</style>
</head>

<body>
<center><br />
<br />
<br />
<br />

<figure><img src="<?php echo $this->imagethumb->image('./assets/frontend/images/logo/'.$this->ws['logo'],300,0);?>" class="img-responsive" alt="<?php echo (isset($this->ws['website_title'])) ? $this->ws['website_title'] : '';?> Logo" /></figure>
<br clear="all" />
<h1><?php echo ((isset($this->ws['website_title'])) ? $this->ws['website_title'] : '');?></h1>
<h1>Website Under Construction</h1>
</center>
</body>
</html>
