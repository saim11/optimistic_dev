<section id="inner-banner">
    <div class="container">
        <h1>Content</h1>
    </div>
</section>
<div>
    <section class="post-section padd-tb">
        <div class="container">
            <div class="row">
                <?php if($blogs) {
                    foreach($blogs as $blog){
                ?>
                <div class="col-md-4 col-sm-4">
                    <a href="<?php echo $this->config->base_url().'blogs/slug/'.$blog["blog_slug"]; ?>">
                    <div class="post-box">
                        <div class="frame"><img width="360" height="200" src="<?php echo $this->config->base_url().$blog["blog_feature_image"]; ?>" alt="img"></div>
                        <div class="text-box"> <strong class="date"><i class="fa fa-calendar"></i><?php echo date_format(date_create($blog["blog_added"]),"M d, Y"); ?></strong>
                            <h4><?php echo $blog["blog_title"]; ?></h4>
                            <p><?php echo truncate($blog["blog_details"],100); ?></p>
                        </div>
                    </div>
                    </a>
                </div>
                <?php } } else
                { ?>

                <?php } ?>

            </div>
        </div>
    </section>
</div>

<?php
function truncate($text, $chars = 25) {
    $text = $text." ";
    $text = substr($text,0,$chars);
    $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}
?>