<!DOCTYPE html>
<html lang="en">

@include('includes.header')
<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-transparent" id="navbar" color-on-scroll="10">
        <div class="container-fluid" style="padding-left: 50px; padding-right: 50px;" >
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/landing/assets/img/logo-white.png"  class="img-fluid img-white" style="width: 50%;" alt="">
                    <img src="/landing/assets/img/logo-white.png"class="img-fluid img-blue" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link page-scroll" href="{{ url('/') }}">
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ URL('timeline') }}" class="nav-link "style="font-size: 14px;">
                            Timeline
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('rules') }}" style="font-size: 14px;">
                            Rules
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL('faq') }}" style="font-size: 14px;">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/dashboard">
                            <button class="nav-link btn btn-orange" style="border-radius: 40px;" >
                                <p>Apply Now</p>
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('extra-css')
    @yield('content')

    @include('includes.address')

                    <!-- Contact Modal -->

<!--   Core JS Files   -->
<script src="/landing/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<!-- Slider Slider -->
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/landing/assets/slick/slick.min.js"></script>

<script src="/landing/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="/landing/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="/landing/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="/landing/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/landing/assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script src="/landing/assets/js/script.js" type="text/javascript"></script>
<script src="/landing/assets/js/typewritter.js" type="text/javascript"></script>
<!-- Scrolling Nav JavaScript -->
<script src="/landing/assets/scroll/jquery.easing.min.js"></script>
<script src="/landing/assets/scroll/scrolling-nav.js"></script>
<script src="/landing/assets/particles-js/particles.js"></script>
<script src="/landing/assets/particles-js/demo/js/app.js"></script>
@yield('extra-js')

<script type="text/javascript">

var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}



    $('.logos').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 3,
      autoplay: true,
      arrows: false,
      autoplaySpeed: 2000
    });

    $('.img-blue').hide();
    function scrollToDownload() {
        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    };

    $("#arrow-down").click(function(e) {
        e.preventDefault();
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#about").offset().top
    }, 2000);
});





</script>


<script>
        // // Set the date we're counting down to
        // var countDownDate = new Date("Feb 1, 2019 12:00:00").getTime();

        // // Update the count down every 1 second
        // var x = setInterval(function() {

        //   // Get todays date and time
        //   let now = new Date().getTime();

        //   // Find the distance between now and the count down date
        //   let distance = countDownDate - now;

        //   // Time calculations for days, hours, minutes and seconds
        //   let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        //   let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        //   let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        //   var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        //   // Display the result in the element with id="demo"
        //   document.getElementById("countdown").innerHTML = days + " days " + hours + " hours "
        //   + minutes + "minutes " + seconds +" seconds";

        //   // If the count down is finished, write some text
        //   if (distance < 0) {
        //     clearInterval(x);
        //     document.getElementById("demo").innerHTML = "EXPIRED";
        //   }
        // }, 1000);
        </script>
</body>
</html>
