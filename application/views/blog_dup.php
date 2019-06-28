<style>
h3 a {
    color: black;
}
</style>

<div class="clearfix"></div>

<!--our satisfied customer Start -->
<section class="top_banner" style="background-image:url('./uploads/pages/mobile_login_banner.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="register.html" class="top_banner_btns">Apply Now</a>
            </div>
        </div>
    </div>
</section>
<!-- osc-->
<!--our satisfied customer End -->



<section class="blog_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php foreach ($all_blogs as $key=> $value) { ?>
                <a href="./viewBlogs.html?blog_slug=<?php echo $value['blog_slug']; ?>">
                    <aside class="blog">
                        <div class="post_image blog-img">
                            <img src=<?php echo $value[ 'blog_feature_image']; ?>>
                        </div>
                        <a href="./viewBlogs.html?blog_slug=<?php echo $value['blog_slug']; ?>">
                            <div class="post_title">
                                <h3><a
                                        href="./viewBlogs.html?blog_slug=<?php echo $value['blog_slug']; ?>"><?php echo $value['blog_title']; ?></a>
                                </h3>
                            </div>
                            <div class="post_content">
                                <p>
                                    <?php print_r(substr($value[ 'blog_details'],0,235));
                        echo "....";
                        ?>
                                </p>
                            </div>
                        </a>
                    </aside>
                    <?php } ?>
                </a>

            </div>
        </div>
    </div>
</section>