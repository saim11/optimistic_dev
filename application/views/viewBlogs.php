<style>
/* Blog page css starts here */

section.blog_section {
    padding: 50px 0px;
}

aside.blog {
    margin-bottom: 45px;
    width: 33.33%;
    float: left;
    padding-left: 15px;
    padding-right: 15px;
}

.post_image img {
    width: 100%;
}

.post_title h3 {
    font-size: 22px;
    font-weight: bold;
    margin: 20px 0px 10px;
}

.post_title h3 a {
    color: #4a4a4a;
    text-decoration: none;
}

.post_location h3 {
    text-transform: capitalize;
    font-size: 22px;
    font-weight: bold;
}

section.top_banner {
    min-height: 500px;
    position: relative;
    background-size: cover;
    /* background-position: center; */
    display: flex;
    /* justify-content: center; */
    align-items: center;
}

a.top_banner_btns {
    background: #32b574;
    border: solid 1px #32b574;
    color: #fff;
    padding: 12px 35px;
    text-transform: uppercase;
    position: absolute;
    right: 50px;
    /* bottom: 0px; */
    display: inline-block;
    text-decoration: none;
    border-radius: 10px;
    font-size: 28px;
    /*font-family: NotoSans-Bold;*/
    font-weight: bold;
    transition: all 900ms ease;
}

a.top_banner_btns:hover {
    color: #32b574;
    background: #ffffff;
}

section.join_section {
    padding: 25px 0px;
}

h2.join_us_main_section_title {
    font-size: 16px;
    color: #2bb673;
    /*font-family: NotoSans-Bold;*/
    font-weight: bold;
    border-bottom: solid 2px #dbdbdb;
    padding-bottom: 35px;
}

aside.main_job_section {
    /* border-top: solid 2px #dbdbdb; */
    border-bottom: solid 2px #dbdbdb;
    padding: 18px 0px 0px 0px;
    margin-bottom: 20px;
}

aside.main_job_section h3 {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 15px;
}

aside.main_job_section h2 {
    color: #242424;
    font-size: 24px;
    margin-bottom: 15px;
    font-weight: bold;
    text-transform: capitalize;
}

a.single_job_link p {
    color: #212529;
}

a.single_job_link {
    text-decoration: none;
}

/* Blog page css ends here */

/* Career styling css starts here */

section.career_green_section {
    background: #2bb673;
    padding: 40px 0px 20px 0px;
}

a.return_to_link {
    font-size: 18px;
    margin-bottom: 30px;
    display: inline-block;
    color: #ffffff;
    font-weight: 600;
    text-decoration: none;
}

.first_info_col {
    width: 20%;
    float: left;
    font-size: 16px;
    font-weight: bold;
    color: #fff;
}

.second_info_col {
    width: 80%;
    float: left;
    font-size: 16px;
    font-weight: 300;
    color: #fff;
}

.full_info_col a {
    color: #2bb673;
    background: #ffffff;
    padding: 20px 40px;
    border-radius: 45px;
    font-size: 15px;
    font-weight: 600;
    text-decoration: none;
    margin: 20px 0px;
    display: inline-block;
}

section.career_content_section {
    padding: 30px 0px;
}

section.career_content_section p {
    color: #242424;
    font-size: 15px;
}

section.career_content_section h3 {
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 15px;
}

section.career_content_section ul {
    padding-left: 15px;
}

section.single_blog_section {
    padding: 40px 0px;
}

.blog_image img {
    width: 100%;
}

.blog_image {
    margin-bottom: 15px;
}

/* Career srtyling css ends here */
</style>
<?php $blog[ 'blog_description']=$this->SqlModel->getRecords('*', 'blog', '', '', array('blog_slug'=>$_GET['blog_slug'], 'blog_status'=>'published')); ?>

<div class="clearfix"></div>

<section class="top_banner" style="background-image:url('./uploads/pages/inner_slider.jpg')">
</section>

<section class="single_blog_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="blog_image">
                    <img src="./uploads/pages/mobile_login_banner.jpg">
                </div>
                <div class="blog_content">
                    <h1>History</h1>
                    <p>
                        Optimistic Futures was established in 2014 with a vision to become a provider of high-quality
                        education and student experiences. Starting up with only one course on its scope, now we have
                        seven courses to offer to students in the fields that are in high demand in Australia.
                    </p>

                    <h1>Present Review</h1>
                    <p>
                        Optimistic Futures is a registered training organisation (RTO), which provides quality training
                        on various courses including: Childcare, Security, Individual Support, First Aid and Building
                        and Construction. We offer students with a dynamic learning environment imbibed with diversity,
                        and flexibility in delivery and assessment. We pride ourselves on providing education and
                        training that leads to real career outcomes.


                        <br /><br />
                        Optimistic Futures’ certificate and diploma courses are government accredited. We offer basic
                        Certificate level to Diploma courses that are carefully designed to ensure that our students
                        graduate with the skill needed to pursue their future career endeavour. Our trainers are fully
                        qualified and have great industry experience to train you in what the current employers’ needs
                        are.

                        <br /><br />


                        We have three main campuses and more than 20 training centres across Melbourne and regional
                        areas, all connected with access to public transport and parking. Each campus equipped with
                        friendly learning atmosphere, helpful support services, and facilities to assist students get
                        the most out of their learning.

                        <br /><br />

                        Student’s satisfaction is our focus. Our support service will assist you to get most of your
                        potential and guide you to reach your future career goal. Student services are available
                        including but not limited to:
                        <ul>
                            <li>
                                Simulated environment for individual support
                            </li>
                            <li>
                                Learning resources
                            </li>
                            <li>
                                Equipped classrooms
                            </li>
                            <li>
                                Free wifi access
                            </li>
                            <li>
                                Online enrolment support
                            </li>

                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>