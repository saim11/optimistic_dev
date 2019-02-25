
<style type="text/css">

.Menu-dropdown:hover .multi-level {
  display: block;
}

.multi-level {
  background: #2bb673;
  color: #fff;
}
.multi-level>li>a {
  color: #fff;
}

.dropdown-submenu {
  position: relative;
}

.dropdown-submenu>.dropdown-menu {
	top: 0;
	left: 100%;
	margin-top: -6px;
	margin-left: -1px;
	-webkit-border-radius: 0 6px 6px 6px;
	-moz-border-radius: 0 6px 6px;
	border-radius: 0 6px 6px 6px;
	background: #2bb673;
	color: #fff;
}

.dropdown-submenu:hover>.dropdown-menu {
	display: block;
}

.dropdown-menu>li>a {
  color: #fff;
}

.dropdown-submenu>a:after {
	display: block;
	content: " ";
	float: right;
	width: 0;
	height: 0;
	border-color: transparent;
	border-style: solid;
	border-width: 5px 0 5px 5px;
	border-left-color: #ccc;
	margin-top: 5px;
	margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
	border-left-color: #fff;
}

.dropdown-submenu.pull-left {
	float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
	left: -100%;
	margin-left: 10px;
	-webkit-border-radius: 6px 0 6px 6px;
	-moz-border-radius: 6px 0 6px 6px;
	border-radius: 6px 0 6px 6px;
}
</style>








  <style type="text/css">

  .toper

{

text-align: center;

transition: all 500ms linear 0s;

}



.top_popup_2 {

width: 100%;

background: rgb(209, 63, 63) none repeat scroll 0 0;

margin-top: 0;

max-height: 100%;

/* min-height: 50px; */

opacity: 1;

width: 100%;

z-index: 9999;

padding: 0px 0px;

}

.top_popup_2 p {

padding: 0 !important;

margin: 10px 10px 10px;

}



.top_popup_1 {

width: 100%;

background: #81c868 none repeat scroll 0 0;

margin-top: 0;

max-height: 100%;

/* min-height: 50px; */

opacity: 1;

width: 100%;

z-index: 9999;

padding: 0px 0px;

}

.top_popup_1 p {

padding: 0 !important;

margin:10px 10px 10px;

}

.right {

float: right;

}



.inner_top_popup {

display: inline-block;

/*width: 960px;*/

}

.popup_text {

margin: 0;

/* width: 900px;*/

}

.popup_text p {

color: #fff;

font-family: 'robotoregular';

font-size: 14px;

font-weight: normal;

text-align: center;

word-wrap: break-word;

}

.mybutton {

font: 900 14px/14px 'Roboto', sans-serif;

text-transform: uppercase;



padding: 10px 23px;

border-radius: 4px;

margin-bottom: 10px;

display: inline-block;

color: #fff;

}

.close_toper {

padding: 10px;

color: #fff;

font-size: 16px;

font-weight: bold;

}

.close_toper a i {

color: #fff;

cursor: pointer;

}

</style>




<section class="Section_Devs Head_Titles" style='background:url(<?php echo base_url(); ?>uploads/pages/student_profile_bg.jpg) no-repeat top center;background-size: cover;' >
	
    <div class="container">
		<h1>Student Details</h1>
		<ol class="breadcrumb">
		  <li><a href="index-2.html">Home</a></li>	
		  <li><i class="fa fa-angle-double-right" aria-hidden="true"></i></li>	  
		  <li class="active">Student Details</li>
		</ol>
	</div>
</section>
<!-- Head_Titles Closed -->


<section class="Section_Devs Welcome_Classic">
	<!-- container start -->
	<div class="container">
	<!-- row start -->
		<div class="row">
		<!-- column start -->
			<div class="col-md-12">
				<!-- my student details start -->
				<div class="my_courses_details1">
					<h1>Courses Details</h1>

					<!-- complete unit start -->
					<div class="my_completed_units">
                        <div class="select-list">
                            <div class="custom-select">
                              <select id="select_course">
                                <option value="0">Select Course</option>
                                <option value="1">CHC30113</option>
                                <option value="2">CHC33015</option>
                              </select>
							</div>
                        </div>
                    </div>
					<!-- complete unit end -->

					<div class="units_passed">
                        <h2>Completed</h2>
                        <div class="units"></div>
                            <ol class="completed_units_ol">
                                <li class="completed_units_ol1">04560245</li>
                                <li class="completed_units_ol1">tincidunt ullamcorper</li>
                                <li class="completed_units_ol1">Nullam quis tortor</li>
                                <li class="completed_units_ol1">tincidunt ullamcorper</li>
                                <li class="completed_units_ol1">faucibus</li>
                                <li class="completed_units_ol1">pharetra turpis</li>
                                <li class="completed_units_ol1">Pellentesque vitae</li>
                            </ol> 
                    </div><!-- units_passed -->

					<div class="units_left">
                        <h2 >Incompleted</h2>
                        <div class="units"></div>
                        	<ol class="completed_units_ol">
                            	<li class="completed_units_ol1">Pellentesque vitae</li>
                                <li class="completed_units_ol1">pharetra turpis</li>
                                <li class="completed_units_ol1">04560245</li>
                                <li class="completed_units_ol1">tincidunt ullamcorper</li>
                                <li class="completed_units_ol1">Naasd</li>
                                <li class="completed_units_ol1">CHC3254846</li>
                                <li class="completed_units_ol1">faucibus</li>
                            </ol> 
                    </div><!-- units_left -->

					<div class="pending_units">
                        <h2>Pending</h2>
                        <div class="units"></div>
                        	<ol class="completed_units_ol">
                            	<li class="completed_units_ol1">Pellentesque vitae</li>
                                <li class="completed_units_ol1">pharetra turpis</li>
                                <li class="completed_units_ol1">04560245</li>
                                <li class="completed_units_ol1">tincidunt ullamcorper</li>
                                <li class="completed_units_ol1">Naasd</li>
                                <li class="completed_units_ol1">CHC3254846</li>
                                <li class="completed_units_ol1">faucibus</li>
                            </ol> 
                    </div><!-- units_left -->

				</div>
				<!-- my student details end -->
			</div>
			<!-- column end -->

		</div>
	<!-- row end -->
	</div>
	<!--container end -->
</section>




<script src="assets/frontend/js/jquery.fancybox.js"></script>
<!-- //-CUSTOM PLUGINS-// -->

<script src="assets/frontend/js/custom.js"></script>

<script src="assets/frontend/js/custom-enroll.js"></script>






<!-- JS -->
    <script src="vendor/jquery/jquery-student-profile-form.min.js"></script>
    <script src="vendor/nouislider/nouislider-student-profile-form.min.js"></script>
    <script src="vendor/wnumb/wNumb-student-profile-form.js"></script>
    <script src="vendor/jquery-validation/dist/jquery-student-profile-form.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods-student-profile-form.min.js"></script>
    <script src="js/main-student-profile-form.js"></script>
     
     


<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);



/* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}

function myFunction() {
  var x = document.getElementById("myuploadfile");
  x.disabled = true;
}


</script>
