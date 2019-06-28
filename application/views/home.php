<!-- Slider Start -->
<div class="slider_area">
    <!-- <div class="slider_sub">
      <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <?php $main_slider = $this->SqlModel->getRecords('*', 'slider', 'slider_id', 'ASC', array('slider_status' => 'Published'));?>
        <ol class="carousel-indicators" data-animate-in="fadeInUp" data-animate-out="fadeOutDown">
            <?php $i = 0;foreach ($main_slider as $slide) {?>
                <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i; ?>" class="<?php if ($i == 0) {echo "active";}?>"></li>
         <?php $i++;}?>
        </ol>
          <div class="carousel-inner">
            <?php $i = 0;foreach ($main_slider as $slide) {?>
            <div class="carousel-item <?php if ($i == 0) {echo "active";}?>"> <img src=<?php echo $this->config->base_url() . $slide['slider_image']; ?> class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <?php echo $slide['slider_text']; ?>
                </div>
            </div>
            <?php $i++;}?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"
              aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleCaptions"
            role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div> -->
    <!-- slider_area-->
</div>
<!-- slider_area-->
<!-- Slider End -->


<!-- Slider Start -->
<div class="slider_area">
    <div class="slider_sub">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <!--<ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>-->
                <div class="carousel-inner">
                    <div class="carousel-item active"> <img
                            src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/slide_1.jpg" class="d-block w-100"
                            alt="...">
                        <div class="carousel-caption d-none d-md-block"> </div>
                    </div>
                </div>
                <!--<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>-->
            </div>
        </div>
    </div>
    <!-- slider_area-->
</div>
<!-- slider_area-->
<!-- Slider End -->


<!-- Main Heading Area Start-->
<div class="main_heading">
    <div class="main_heading_sub">
        <p>The Optimistic Future is a diversified<br> Registered training organization <span>RTO 41053</span> </p>
    </div>
    <!-- main_heading_sub-->
</div>
<!-- main_heading-->
<!-- Main Heading Area End-->


<!-- Carousel Area Start-->

<div class="carousel_area">
    <div class="carousel_area_sub">
        <div class="works_item alignleft clear">
            <h1>Explore Our Courses</h1>
            <div id="second" class="carouseller"> <a href="javascript:void(0)" class="carouseller__left">‹</a>
                <div class="carouseller__wrap">
                    <div class="carouseller__list">
                        <div class="car__3"> <a
                                href="http://dev.softkodes.com/optimisticfuture/chc30113-certificate-iii-in-early-childhood-education-and-care.html"><img
                                    src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/caro_1.jpg" alt=""></a> </div>
                        <div class="car__3"> <a
                                href="http://dev.softkodes.com/optimisticfuture/cpp20212-certificate-ii-in-security-operations.html"><img
                                    src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/caro_2.jpg" alt=""></a> </div>
                        <div class="car__3"> <a
                                href="http://dev.softkodes.com/optimisticfuture/individual-support.html"><img
                                    src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/caro_3.jpg" alt=""></a> </div>
                        <div class="car__3"> <a
                                href="http://dev.softkodes.com/optimisticfuture/hltaid001-provide-cardiopulmonary-resuscitation.html"><img
                                    src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/caro_4.jpg" alt=""></a> </div>
                        <div class="car__3"> <a href="#"><img
                                    src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/caro_5.jpg" alt=""></a> </div>
                        <div class="car__3"> <a
                                href="http://dev.softkodes.com/optimisticfuture/chc30113-certificate-iii-in-early-childhood-education-and-care.html"><img
                                    src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/caro_1.jpg" alt=""></a> </div>
                        <div class="car__3"> <a
                                href="http://dev.softkodes.com/optimisticfuture/cpp20212-certificate-ii-in-security-operations.html"><img
                                    src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/caro_2.jpg" alt=""></a> </div>
                        <div class="car__3"> <a
                                href="http://dev.softkodes.com/optimisticfuture/individual-support.html"><img
                                    src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/caro_3.jpg" alt=""></a> </div>
                        <div class="car__3"> <a
                                href="http://dev.softkodes.com/optimisticfuture/hltaid001-provide-cardiopulmonary-resuscitation.html"><img
                                    src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/caro_4.jpg" alt=""></a> </div>
                        <div class="car__3"> <a href="#"><img
                                    src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/caro_5.jpg" alt=""></a> </div>
                    </div>
                </div>
                <a href="javascript:void(0)" class="carouseller__right">›</a>
            </div>
            <hr class="style1">
        </div>
        <!-- carousel_area_sub-->
    </div>
    <!-- carousel_area-->
    <!-- Carousel Area END-->

    <!-- Student Heading Area Start-->

    <div class="student_heading">
        <div class="student_heading_sub">
            <div class="main_student">
                <h1>2000+ Students</h1>
            </div>
            <!-- main_student-->

            <div class="normal_text">
                <p>At the Optimistic Future, To promote life-long learning,<br> Tech employability skills, encourage
                    continuous
                    professional
                    <br> development, inculcate social responsibility.<a href="#"><span>+</span></a></p>
            </div>
            <!-- normal_text-->
        </div>
        <!-- student_heading_sub-->
    </div>
    <!-- student_heading-->

    <!-- Student Heading Area END-->

    <!--our satisfied customer Start -->
    <div class="osc">
        <div class="ocs_sub">
            <!--Carousel Wrapper-->
            <a href="#"><img src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/play_video.jpg" class="img-fluid"
                    alt="Responsive image"></a>
            <!--/.Carousel Wrapper-->
        </div>
        <!-- ocs_sub-->
    </div>
    <!-- osc-->
    <!--our satisfied customer End -->

    <!--Three Sections Area Start -->

    <div class="three_section">
        <div class="three_section_sub">
            <div class="section_one">
                <h1>How Can We Help?</h1>
                <button type="button" class="btn btn-outline-success sections_buttons">Course Brochure</button> <button
                    type="button" class="btn btn-outline-success sections_buttons">Courses Apply Now</button>
                <img src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/traning_image.jpg" alt=""
                    class="mobile_image">
                <h2>Login to Online Testing</h2>

                <form method="post" action="<?php echo $this->config->base_url() . 'home/login' ?>">
                    <div class="form-group">
                        <input type="email" id="email" value="<?php echo set_value('user_email'); ?>" name="user_email"
                            class="form-control my_login" aria-describedby="emailHelp" placeholder="Email">

                    </div>
                    <div class="form-group">
                        <input type="password" id="password" value="<?php echo set_value('user_password'); ?>"
                            name="user_password" class="form-control my_login" placeholder="Password">
                    </div>
                    <div class="form-group form-check my_check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>
                    <button type="submit" id="submitBtn" class="btn btn-success my_submit">Sign In</button>
                    <div class="form-group form-check my_check1">
                        <label class="form-check-label" for="exampleCheck1"><a href="#">Forgot Password?</a></label>
                    </div>
                </form>



            </div><!-- section_one-->
            <div class="section_two">
                <a href="http://dev.softkodes.com/optimisticfuture/cpp20212-certificate-ii-in-security-operations.html"><img
                        src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/1.jpg" alt=""
                        class="section2_img mobile_image"></a>
                <a href="http://dev.softkodes.com/optimisticfuture/cpp20212-cert-ii-control-rooms.html"><img
                        src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/2.jpg" alt=""></a><a href="#"><img
                        src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/3.jpg" alt=""></a>

            </div><!-- section_two-->
            <div class="section_three">
                <a href="http://www.dev.softkodes.com/ofhtml/v10/chc30113.html"><img
                        src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/4.jpg" alt="" class="mobile_image"></a>
                <a
                    href="http://dev.softkodes.com/optimisticfuture/hltaid001-provide-cardiopulmonary-resuscitation.html"><img
                        src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/5.jpg" alt=""
                        class="section3_img mobile_image"></a>
                <a href="http://dev.softkodes.com/optimisticfuture/individual-support.html"><img
                        src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/6.jpg" alt="" class="mobile_image"></a>
            </div><!-- section_three-->

            <hr class="style2"><!-- HR LINE-->

        </div><!-- three_section_sub-->
    </div><!-- three_section-->
    <!--Three Sections Area End -->


    <!--OUR partner Section Start -->

    <div class="our_partner">
        <div class="our_partner_sub"> <img class="image_res"
                src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/partner1.jpg" alt=""><img class="image_res"
                src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/partner2.jpg" alt=""><img
                class="<?php echo FRONTEND_ASSETS; ?>front-pages/image_res"
                src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/partner3.jpg" alt=""><img
                class="<?php echo FRONTEND_ASSETS; ?>front-pages/image_res"
                src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/partner4.jpg" alt=""> </div>
        <!-- our_partner_sub-->
    </div><!-- our_partner-->

    <!--OUR partner Section End -->

    <!--client section START -->

    <div class="client_section">
        <div class="client_section_sub">

            <div class="testi_area">

                <div class="works_item alignleft clear">
                    <h1>Testimonials</h1>
                    <div id="third" class="carouseller">
                        <div class="carouseller__wrap">
                            <div class="carouseller__list">

                                <div class="car__4">
                                    <p>"If you are looking to earn an early childhood teaching credential or
                                        certificate, then you are at
                                        the right place! <br>
                                        <br> Optimistic Futures’s teachers have given me ongoing support and knowledge
                                        that lead me to start
                                        an honourable career of a primary teacher. I hope students will get influence
                                        and gain a better
                                        future."<br>
                                        <br>
                                        <b style="position:relative; left:30%;">Shakila Qureshi</b></p>
                                </div>

                                <div class="car__4">
                                    <p>"It has been an amazing studying and working experience at Optimistic Futures
                                        that not only monitor
                                        educational growth, also social development. They offer complete diploma in
                                        early childhood
                                        education
                                        and care at the most reasonable course fee. They are running a top notch
                                        educational programs that
                                        include physical working environment so that students could implement their
                                        practices in a
                                        professional
                                        atmosphere."
                                        <br>
                                        <br>
                                        <b style="position:relative; left:30%;">Lilian</b></p>
                                </div>

                                <div class="car__4">
                                    <p>"I am very pleased to study and completed my certificate course in security
                                        operation here. During
                                        this time, I met some great friends and teachers. Their certificate is
                                        considered reliable and
                                        authentic
                                        in the security industry. After completing my course certificate, I got enough
                                        job opportunities,
                                        and
                                        now I am happily working and gaining professional experience."<br>
                                        <br>
                                        <b style="position:relative; left:30%;">Abdullah Dahab</b></p>
                                </div>

                                <div class="car__4">
                                    <p>"I am very pleased to study and completed my certificate course in security
                                        operation here. During
                                        this time, I met some great friends and teachers. Their certificate is
                                        considered reliable and
                                        authentic
                                        in the security industry. After completing my course certificate, I got enough
                                        job opportunities,
                                        and
                                        now I am happily working and gaining professional experience."<br>
                                        <br>
                                        <b style="position:relative; left:40%;">Popi hatzimihalias</b></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div><!-- testi_area-->

            <div class="client_img">
                <img class="mobile_image" src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/client_section.jpg"
                    alt="">
            </div><!-- client_img-->

        </div><!-- client_section_sub-->
    </div><!-- client_section-->


    <!--client section End -->
    <!--Bottom Link section START -->

    <div class="bottom_link">
        <div class="bottom_link_sub">
            <h1>Want to know more?</h1>
            <h2>3 campuses&nbsp;&nbsp; | &nbsp;&nbsp;27 locations</h2>
            <div class="bottom_link_images">
                <a href="./blog.html"><img class="mobile_image"
                        src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/bottom_link.jpg" alt=""></a><a
                    href="./details-and-schedule.html"><img class="mobile_image"
                        src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/bottom_link1.jpg" alt=""></a>
                <a href="./contact.html"><img class="mobile_image"
                        src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/bottom_link3.jpg" alt=""></a><a
                    href="./join_us.html"><img class="mobile_image"
                        src="<?php echo FRONTEND_ASSETS; ?>front-pages/images/bottom_link4.jpg" alt=""></a>
            </div><!-- bottom_link_images-->
        </div><!-- bottom_link_sub-->
    </div><!-- bottom_link-->

    <!--Bottom Link section END -->


    </body>
    <!-- body END -->