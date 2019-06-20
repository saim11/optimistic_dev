
<!doctype html>


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
        <a href="#" class="single_job_link">
          <aside class="main_job_section">
            <h3>SYDNEY</h3>
            <a href=""><h2>Cloud Engineer - Linux (Managed Services)</h2></a>
            <h3>Sales and Account Management</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </aside>
        </a>

        <a href="#" class="single_job_link">
          <aside class="main_job_section">
            <h3>MELBOURNE</h3>
            <h2>DevOps Engineer</h2>
            <h3>Operations</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </aside>
        </a>

        <a href="#" class="single_job_link">
          <aside class="main_job_section">
            <h3>SYDNEY</h3>
            <h2>DataStage Developer</h2>
            <h3>Mobile, Project Management, Technology</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </aside>
        </a>
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
<script src="js/bootnavbar.js" ></script>

    <script>
        $(function () {
            $('#main_navbar').bootnavbar();
        })
    </script>
<!-- body END -->

<script>
window.onscroll = function() {myFunction()};

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