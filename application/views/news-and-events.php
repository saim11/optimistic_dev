
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
			<div class="col-md-9 col-sm-9 News">

        <?php 
        $whereArray=array('blog_status' => 'Published','blog_type' => 'News');

        $blogs=$this->general_model->getResultDynamic('blog',$whereArray);
        

         ?>

			<?php if($blogs) {
                    foreach($blogs as $blog){
                ?>
				<div class="media">
				  <div class="media-left"><img src="<?php echo $this->config->base_url().$blog["blog_feature_image"]; ?>" class="pull-left img-rounded" alt=""></div>
				  <div class="media-body">				    
			        <h2 class="News_title"><?php echo $blog["blog_title"]; ?></h2>
			        <div class="News_post_dt">
			        	<span class="span-icons date"><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo date_format(date_create($blog["blog_added"]),"M d, Y"); ?></a></span>
			        </div>
			        <p><?php echo truncate($blog["blog_details"],100); ?></p>
			        <div class="text-right"><a href="<?php echo $this->config->base_url().'content/slug/'.$blog["blog_slug"]; ?>" class="read" role="button">Read more</a></div>
				  </div>
				</div>

				<?php } } else
                { ?>

                <?php } ?>

										
			</div>
			<!-- News Closed -->
			<div class="col-md-3 col-sm-3">
				<div class="Events">
					<div class="Ent_Title">
						<h1>Events</h1>
						<i class="fa fa-calendar" aria-hidden="true"></i>
					</div>


        <?php $whereArray=array('blog_status' => 'Published','blog_type' => 'Event');
        $blogs=$this->general_model->getResultDynamic('blog',$whereArray); ?>

			<?php if($blogs) {
                    foreach($blogs as $blog){
                ?>

					<div class="Ent_Panel">
						<a href="#">
						<div class="calendar">
						<span class="ev_month"><?php echo date_format(date_create($blog["blog_added"]),"M d"); ?></span>
							
						</div>
						</a>
						<a href="<?php echo $this->config->base_url().'content/slug/'.$blog["blog_slug"]; ?>">
						<div class="post-title">
							<?php echo $blog["blog_title"]; ?>
						</div>
						</a>
						<div class="clearfix"></div>
						<p><?php echo truncate($blog["blog_details"],50); ?></p>
					</div>
					<!-- Ent_Panel Closed -->
					<?php } } else
                { ?>

                <?php } ?>




				</div>
			</div>
			<!-- Events Closed -->			
		</div>		
	</div>
</section>
<!-- Welcome_Classic Closed -->
<?php
function truncate($text, $chars = 25) {
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}
?>
