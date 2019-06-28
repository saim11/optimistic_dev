<style>
.overflowContent {
    color: lightGrey;
}

.jobTitle {
    color: #2bb673 !important;
}
</style>



<div class="clearfix"></div>

<!--our satisfied customer Start -->
<section class="top_banner" style="background-image:url('./uploads/pages/detail_schedule.jpg')">
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



<section class="join_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="join_us_main_section_title">CAREER OPPORTUNITIES</h2>


                <?php
foreach ($all_jobs as $key => $value) {
?>
                <a href="./viewJobs.html?job_uri=<?php echo $value['job_uri']; ?>" class="single_job_link">
                    <aside class="main_job_section">
                        <h3><?php echo $value['job_location']; ?></h3>
                        <a href="./viewJobs.html?job_uri=<?php echo $value['job_uri']; ?>">
                            <h2 class="jobTitle"><?php echo $value['job_title']; ?></h2>
                        </a>
                        <h3><?php echo $value['business_unit']; ?></h3>
                        <div class="overflowContent">
                            <?php 
                              print_r(substr($value['job_text'],0,260));
                              echo "....";
                            ?>
                        </div>
                    </aside>
                </a>
                <?php }?>

            </div>
        </div>
    </div>
</section>





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