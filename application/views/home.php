<section class="main-row main-row-slim">

<div class="main-header">
<!-- Main Slider -->
<div id="main-slider" class="main-slider carousel slide fade-effect invisible">
    <!-- Carousel items -->
    <div class="carousel-inner">

<?php $main_slider=$this->SqlModel->getRecords('*', 'slider', 'slider_id', 'ASC',  array('slider_status'=>'Published')); ?>
 <?php $i=0; foreach($main_slider as $slide){ ?>
        <!-- Item -->
        <section class="<?php if($i==0){ echo "active"; } ?> item" style="background-image: url(<?php echo $this->config->base_url().$slide['slider_image'] ?>);">
            <div class="container">
                <div class="row">
                       <?php echo $slide['slider_text'] ?>                                      
                </div>
            </div>
        </section>
        <!--/ Item -->
        <?php $i++; } ?>

    </div>
    <!-- Carousel indicators -->
    <ol class="carousel-indicators" data-animate-in="fadeInUp" data-animate-out="fadeOutDown">
    <?php $i=0; foreach($main_slider as $slide){ ?>
        <li data-target="#main-slider" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){ echo "active"; } ?>"></li>
         <?php $i++; } ?>
    </ol>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#main-slider" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#main-slider" data-slide="next">&rsaquo;</a>
</div>
<!--/ Main Slider -->


</div>
</section>


<?php $where = array('content_id'=>1,'content_status'=>'Published');	
	  $contentData = $this->SqlModel->getSingleRecord('content',$where);
      if(isset($contentData['content_text']))
      {
         echo $contentData['content_text'];
      }
    ?>

    <?php $where = array('content_id'=>2,'content_status'=>'Published');	
	  $contentData = $this->SqlModel->getSingleRecord('content',$where);
      if(isset($contentData['content_text']))
      {
         echo $contentData['content_text'];
      }
    ?>


    <?php $where = array('content_id'=>3,'content_status'=>'Published');	
	  $contentData = $this->SqlModel->getSingleRecord('content',$where);
      if(isset($contentData['content_text']))
      {
         echo $contentData['content_text'];
      }
    ?>



<section class="Section_Devs Testimonials">
	<div class="container">
		<div class="row">
			<h2>Testimonials<span></span></h2>

			<div class="col-md-12" data-wow-delay="0.2s">
			    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
			        <!-- Bottom Carousel Indicators -->
			        <ol class="carousel-indicators">
			          <?php $testimonials=$this->SqlModel->getRecords('*', 'testimonials', 'testimonials_id', 'ASC',  array('testimonials_status'=>'Published')); ?>
   <?php $i=0; foreach($testimonials as $testimonial){ ?>
			            <li data-target="#quote-carousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){ echo "active"; } ?>"><img class="img-responsive " src="<?php echo $this->config->base_url().$testimonial["image"]; ?>" alt="">
			            </li>
			            <?php $i++; } ?>
			           
			        </ol>

			        <!-- Carousel Slides / Quotes -->
			        <div class="carousel-inner text-center Opti_Testimonials">
            <?php $testimonials=$this->SqlModel->getRecords('*', 'testimonials', 'testimonials_id', 'ASC',  array('testimonials_status'=>'Published')); ?>
   <?php $i=0; foreach($testimonials as $testimonial){ ?>
			            <!-- Quote 1 -->
			            <div class="item <?php if($i==0){ echo "active"; } ?>">
			                <blockquote>
			                    <div class="row">
			                        <div class="col-sm-8 col-sm-offset-2">
			                        	<h4><?php echo $testimonial["testimonial_by"]; ?></h4>
			                        	<!--<small><?php echo $testimonial["designation"]; ?></small>-->
			                            <p>"<?php echo $testimonial["feedback"]; ?>"</p>			                            
			                        </div>
			                    </div>
			                </blockquote>
			            </div>
			            <!-- Quote 2 -->

			            <?php $i++; } ?>
			            
			        </div>

			        
			        </div>
			    </div>
			</div>

			
		</div>
	</div>
</section>
<!-- Testimonials Closed -->
