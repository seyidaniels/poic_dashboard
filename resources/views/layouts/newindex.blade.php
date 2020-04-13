<!DOCTYPE html>
<html lang="en" class="js">

@include('includes.dashboard.newheader')

<body class="index-page sidebar-collapse">

    <!-- Preloader -->
    <div id="preloader"></div>

    @yield('content')

    <script type="text/javascript">
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>

    <script>
        const cursor = document.querySelector(".cursor");

        document.addEventListener('mousemove', e => {
          cursor.setAttribute("style", "top: " + (e.pageY - 10) + "px; left: " + (e.pageX - 10) + "px;")
        })
    </script>

    <!--   Core JS Files   -->
    <script src="/landing/assets/newassets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="/landing/assets/newassets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="/landing/assets/newassets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="/landing/assets/newassets/js/now-ui-kit.js?v=1.2.0" type="text/javascript"></script>
    <!-- SLick Carousel Slider -->
    <script src="/landing/assets/newassets/js/plugins/slick.min.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="/landing/assets/newassets/js/vendor.min.js" type="text/javascript"></script>
    <script src="/landing/assets/newassets/js/main-slider-script.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() {
          // the body of this function is in assets/js/now-ui-kit.js
          nowuiKit.initSliders();
        });
        function scrollToDownload() {
          if ($('.section-download').length != 0) {
            $("html, body").animate({
              scrollTop: $('.section-download').offset().top
            }, 1000);
          }
        }
    </script>
    <script>
        $(document).ready(function () {
          //Preloader
          preloaderFadeOutTime = 500;
          function hidePreloader() {
            var preloader = $('#preloader');
            preloader.fadeOut(preloaderFadeOutTime);
          }
          hidePreloader();
        });
    </script>
</body>

</html>
