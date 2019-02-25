jQuery(document).ready(function() {

    



// Main Slider, Post Slider, Animated Header

    $.fn.sliderApi = function() {

        var slider = $(this),

            header = $('.page-header'),

            animateClass;



        slider.find('[data-animate-in]').addClass('animated');        



        // Animation when Slide Appear

        function animateSlide() {

            slider.find('.active [data-animate-in], .carousel-indicators, .carousel-control').each(function () {

                var $this = $(this);

                animateClass = $this.data('animate-in');

                $this.addClass(animateClass);

            });

            slider.find('.active [data-animate-in], .carousel-indicators, .carousel-control').each(function () {

                var $this = $(this);

                animateClass = $this.data('animate-out');

                $this.removeClass(animateClass);

            });

        }



        // Animation when Slide Disappear

        function animateSlideEnd() {

            slider.find('.active [data-animate-in], .carousel-indicators, .carousel-control').each(function () {

                var $this = $(this);

                animateClass = $this.data('animate-in');

                $this.removeClass(animateClass)

            });

            slider.find('.active [data-animate-in], .carousel-indicators, .carousel-control').each(function () {

                var $this = $(this);

                animateClass = $this.data('animate-out');

                $this.addClass(animateClass);

            });

        }

        



        // Slider Controls Position

        function sliderControls() {

            // slider.find('.active .page-title, .active .entry-content p:last-child').each(function () {

            //     var $this = $(this),

            //         offset = $this.offset().top - slider.offset().top + $this.height();

            //     slider.find('.carousel-indicators').css('top', offset + 30);

            //     if (screenRes < 992) {

            //         slider.find('.carousel-indicators').css('top', offset + 10);

            //     }

            // })

        }



        sliderControls();        

        animateSlide();



        slider.on('slid.bs.carousel', function () {

            sliderControls();

           // slideDescAngle();

            animateSlide();

        });

        slider.on('slide.bs.carousel', function () {

            animateSlideEnd();

        });

        $(window).on('resize', function () {

            sliderControls();

           // slideDescAngle();

        });





        // if (Modernizr.touch) {

        //     slider.find('.carousel-inner').swipe( {

        //         swipeLeft: function() {

        //             $(this).parent().carousel('prev');

        //         },

        //         swipeRight: function() {

        //             $(this).parent().carousel('next');

        //         },

        //         threshold: 30

        //     })

        // }





    };



    $('#testimage').load(function() {

        $("#spinner, #testimage").remove();

        $(".main-slider, .site-logo-alt, #menu-call, .page-header, .header, .carousel-control").removeClass('invisible').addClass('animated fadeIn');



        $('#main-slider').carousel({interval: 8000, pause: 'none'});

        $('#workout-slider').carousel({interval: 10000, pause: 'none'});

        $('#main-slider').sliderApi();

        $('#workout-slider').sliderApi();

    });

    $('#post-slider').carousel({interval: 10000, pause: 'none'});

    $('#post-slider').sliderApi();





});











//------------------GOOGLE MAPS SCROLLER OFF---------------------//



$(document).ready(function () {

    // you want to enable the pointer events only on click;



    $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none on doc ready

    $('#canvas1').on('click', function () {

        $('#map_canvas1').removeClass('scrolloff'); // set the pointer events true on click

    });



    // you want to disable pointer events when the mouse leave the canvas area;



    $("#map_canvas1").mouseleave(function () {

        $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area

    });

});











//------------------NAVIGATION ACTIVE---------------------//



$(function() {

     var pgurl = window.location.href.substr(window.location.href

.lastIndexOf("/")+1);

     $("#navbar ul li a").each(function(){

          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )

          $(this).parent().addClass("active");

     })

});









//------------------4STEP FORM JQUERY---------------------//

// var form = $("#enrollForm");

//     form.validate({

//         errorPlacement: function errorPlacement(error, element) { element.before(error); },

//         rules: {

//             confirm: {

//                 equalTo: "#password"

//             },

            

//         },

       

        

//     });

//     form.children("div").steps({

//         headerTag: "h3",

//         bodyTag: "section",

//         transitionEffect: "slideLeft",

//         onStepChanging: function (event, currentIndex, newIndex)

//         {

//             form.validate().settings.ignore = ":disabled,:hidden";

//             return form.valid();

//         },

//         onFinishing: function (event, currentIndex)

//         {

//             form.validate().settings.ignore = ":disabled";

//             return form.valid();

//         },

//         onFinished: function (event, currentIndex)

//         {

//             $('#submitBtnappform').trigger('click');

//         }

//     });









  $(document).ready(function(e) {

    var QueryString = function () {

      // This function is anonymous, is executed immediately and

      // the return value is assigned to QueryString!

      var query_string = {};

      var query = window.location.search.substring(1);

      var vars = query.split("&");

      for (var i=0;i<vars.length;i++) {

        var pair = vars[i].split("=");

            // If first entry with this name

        if (typeof query_string[pair[0]] === "undefined") {

          query_string[pair[0]] = decodeURIComponent(pair[1]);

            // If second entry with this name

        } else if (typeof query_string[pair[0]] === "string") {

          var arr = [ query_string[pair[0]],decodeURIComponent(pair[1]) ];

          query_string[pair[0]] = arr;

            // If third or later entry with this name

        } else {

          query_string[pair[0]].push(decodeURIComponent(pair[1]));

        }

      }

        return query_string;

    }();

    $('#accordion').find('.course-'+QueryString.page_id).click();

  });







$(document).ready(function(){

    var btn = $("#btn_checkEligibility")

    $(btn).click(function(){

        

        //Clear all errors and alerts

        var error = 0;

        var good = 0;

        var bad = 0;

        $(".errors").text("");

        $("#eligibility-form li").removeClass("success");

        $("#eligibility-form li").removeClass("warning");

        $("#result_ineligible").fadeOut();

        $("#result_eligible").fadeOut();

        $("#help_citizen").fadeOut();

        $(btn).val('Check my eligibility');

        

        

        

        var qs = ["q1", "q2", "q3", "q4", "q5"];

        

        for (i=0; i < qs.length; i++) {

            

            //assigns variables

            var r1 = "#" + qs[i] + "r1";

            var r2 = "#" + qs[i] + "r2";

            var error = "#" + qs[i] + "_error";

        

            if($(r1).prop("checked") == true){

                $(qs[i]).removeClass("warning");

                $(qs[i]).addClass("success");

                good++;

            }

            else if ($(r2).prop("checked") == false){

                $(qs[i]).addClass("warning");

                $(error).text("This element is required");

                error++;

                $(btn).toggleClass("btn-good",false);

                $(btn).toggleClass("btn-warn",true);

                $(btn).toggleClass("btn-bad",false);

            }

            else {

                bad++;

                $("#result_ineligible").fadeIn();

                $(qs[i]).addClass("warning");

            }   

        };

            

            

        

            

            var pass = $("#result_eligible");

            var fail = $("#result_ineligible");

            

            

            //// Final verification and button contextual changes

            

            // Check to make sure the user has entered anything at all

            

            //Check if everything has passed 

            

        if (good == qs.length) {

            $(btn).toggleClass("btn-good",true);

            $(btn).toggleClass("btn-warn",false);

            $(btn).toggleClass("btn-bad",false);

            $(btn).val('Congratulations');

            $(pass).fadeIn();

            }

            // Check if data is missing everywhere

             else if (empty == qs.length) {

                $(btn).toggleClass("btn-good",false);

                $(btn).toggleClass("btn-warn",true);

                $(btn).toggleClass("btn-bad",false);

                $(btn).val('Try again');

            } 

            // Delcare the student a failure

            else {

                $(fail).fadeIn();

                $(pass).fadeOut();

                $(btn).toggleClass("btn-good",false);

                $(btn).toggleClass("btn-warn",false);

                $(btn).toggleClass("btn-bad",true);

                $(btn).val('Check my eligibility');

            }

    });

     

     //Hide results

     

     $(".dismiss-results").click(function() {

         $("#result_eligible").fadeOut();

         $("#result_ineligible").fadeOut();

     });

});


$(".fancybox")
    .attr('rel', 'gallery')
    .fancybox({
        openEffect  : 'none',
        closeEffect : 'none',
        nextEffect  : 'none',
        prevEffect  : 'none',
        padding     : 0,
        margin      : [20, 60, 20, 60] // Increase left/right margin
    });





















