<?php $blog[ 'blog_description']=$this->SqlModel->getRecords('*', 'blog', '', '', array('blog_slug'=>$_GET['blog_slug'], 'blog_status'=>'published')); ?>

<div class="clearfix"></div>

<!--our satisfied customer Start -->
<section class="top_banner1" style="background-image:url('./uploads/pages/bannerBlog.jpg')"></section>
<!-- osc-->

<div class="container">

    <!--Blog Start -->

    <div class="row">
        <div class="leftcolumn1">
            <div class="card my_heading">
                <h5>May 7, 2019</h5>
                <a href="#">
                    <h2>About <span>Optimistic Futures</span></h2>
                </a>
                <h5><span>History</span></h5>
                <a href="#">
                    <div class="fakeimg1"
                        style="height:400px;background-image:url('<?php echo $blog[ 'blog_description'][0]['blog_feature_image'];  ?>')">
                    </div>
                </a>
                <div class="my_heading_inner">
                    <h2>History</h2>
                    <p>Optimistic Futures was established in 2014 with a vision to become a provider of high-quality
                        education and student experiences. Starting up with only one course on its scope, now we have
                        seven courses to offer to students in the fields that are in high demand in Australia.
                    </p>
                    <h2>Present Review</h2>
                    <p>Optimistic Futures is a registered training organisation (RTO), which provides quality training
                        on various courses including: Childcare, Security, Individual Support, First Aid and Building
                        and Construction. We offer students with a dynamic learning environment imbibed with diversity,
                        and flexibility in delivery and assessment. We pride ourselves on providing education and
                        training that leads to real career outcomes.<br>
                        <br>
                        Optimistic Futures’ certificate and diploma courses are government accredited. We offer basic
                        Certificate level to Diploma courses that are carefully designed to ensure that our students
                        graduate with the skill needed to pursue their future career endeavour. Our trainers are fully
                        qualified and have great industry experience to train you in what the current employers’ needs
                        are.<br>
                        <br>
                        We have three main campuses and more than 20 training centres across Melbourne and regional
                        areas, all connected with access to public transport and parking. Each campus equipped with
                        friendly learning atmosphere, helpful support services, and facilities to assist students get
                        the most out of their learning.<br>
                        <br>
                        Student’s satisfaction is our focus. Our support service will assist you to get most of your
                        potential and guide you to reach your future career goal. Student services are available
                        including but not limited to:<br>
                        <br>
                        • Simulated environment for individual support<br>
                        • Learning resources<br>
                        • Equipped classrooms<br>
                        • Free wifi access<br>
                        • Online enrolment support

                    </p>

                    <br>
                    <br>

                    <div class="tag_blog">
                        <p><span class="glyphicon glyphicon-tags"></span>&nbsp;&nbsp;<a href="#">Tag 1</a>, <a
                                href="#">Tag 2</a> </p>
                    </div>

                    <div class="clearfix"></div>

                    <div class="share_blog">
                        <h2>Share on:</h2>
                        <div class="social_blog">
                            <a href="#"><img src="images/facebook.jpg" alt=""></a><a href="#"><img
                                    src="images/twitter.jpg" alt=""></a><a href="#"><img src="images/linkedin.jpg"
                                    alt=""></a><a href="#"><img src="images/instagram.jpg" alt=""></a><a href="#"><img
                                    src="images/v.jpg" alt=""></a>
                        </div>
                    </div>

                    <div class="container laComment">

                        <h2>Leave a Comment<span><br>
                                *Your email address will not be published. Required fields are marked</span></h2>

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="Name" class="form-control" id="inputEmail4" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Comment"></textarea>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Send Comment</button>
                        </form>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--Blog END-->

</div>