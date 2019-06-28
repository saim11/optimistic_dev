<?php $jobs['job_description'] =$this->SqlModel->getRecords('*', 'jobs', '', '',  array('job_uri'=>$_GET['job_uri'], 'job_status'=>'published')); 
?>
<style>
.h7 {
    font-size: 0.8rem;
}

.gedf-wrapper {
    margin-top: 0.97rem;
}

@media (min-width: 992px) {
    .gedf-main {
        padding-left: 4rem;
        padding-right: 4rem;
        max-width: 100%;
        flex: 0 0 99% !important;

    }

    .gedf-card {
        margin-bottom: 2.77rem;
    }


}

/**Reset Bootstrap*/
.dropdown-toggle::after {
    content: none;
    display: none;
}

.card-link {
    text-align: center;
}

/* Style the header */
</style>



<div class="clearfix"></div>

<!--our satisfied customer Start -->
<section class="top_banner" style="background-image:url('./uploads/pages/banner-view-jobs.jpg')">
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
<div class="container-fluid gedf-wrapper">
    <div class="row">
        <div class="col-md-6 gedf-main">

            <!--- \\\\\\\Post-->

            <!-- Post /////-->

            <!--- \\\\\\\Post-->
            <div class="card gedf-card content_data">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="mr-2">
                                <img class="rounded-circle" width="55"
                                    src="http://dev.softkodes.com/uploads/ckeditor/optimistic-futures/images/optimistic_logo.png"
                                    alt="">
                            </div>
                            <div class="ml-2">
                                <div class="h5 m-0"><?php echo $jobs['job_description'][0]['job_title'];?></div>
                                <div class="h7 text-muted"><?php echo $jobs['job_description'][0]['business_unit'];?>
                                </div>
                                <div class="h7 text-muted"><?php echo $jobs['job_description'][0]['job_location'];?>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                    <div class="h6 dropdown-header">Configuration</div>
                                    <a class="dropdown-item" href="#">Save</a>
                                    <a class="dropdown-item" href="#">Hide</a>
                                    <a class="dropdown-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <?php echo $jobs['job_description'][0]['job_text'];?>
                </div>
                <div class="card-footer">
                    <a href="#" class="card-link"><i class="fa fa-envelope-o"></i> Apply Now</a>
                </div>
            </div>
            <!-- Post /////-->
        </div>
    </div>
</div>





<!--Footer section START -->

<!-- Talal==== -->

<!-- Custom delete footer section here -->

<!--Footer section End -->



<!-- Bootstrap JS -->
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- carousel JS -->
<script src="js/carouseller.js"></script>
<script src="js/jquery.easing.1.3.js"></script>

<!-- bootnav JS -->
<script src="js/bootnavbar.js"></script>

<script>
$(function() {
    $('#main_navbar').bootnavbar();
})
</script>
<!-- body END -->

<script>
window.onscroll = function() {
    myFunction()
};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky_header");
    } else {
        header.classList.remove("sticky_header");
    }
}

/* Open when someone clicks on the span element */
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

$(function() {
    $('#second').carouseller({
        scrollSpeed: 300,
        autoScrollDelay: 4000,
        easing: 'linear'
    });
});


$(function() {
    $('#third').carouseller({
        scrollSpeed: 800,
        autoScrollDelay: 1600,
        easing: 'linear'
    });
});
</script>