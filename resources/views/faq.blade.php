<!DOCTYPE html>
<html lang="en">

@include('includes.header')

<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
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
                    <li class="nav-item">
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

                    <li class="nav-item active">
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

    <div class="wrapper" style="margin-top: 150px;">

        <div class="container" >
            <!-- Container (About Section) -->
            <div id="about" class="container-fluid">
                <div class="row">
                    <div class="col-sm-8 text-justify">
                        <h2>How to Apply?</h2>
                        <p>
                            To participate in the challenge, participants must submit a two-page proposal in PDF format, including a short pitch (30 words maximum), a description (300 words description), concept images and/or sketches.
                            Names of participants, their qualifications (level, experience and backgrounds); a web-link to an online portfolio or website is preferred)
                        </p>
                        <br><br>
                    </div>
                    <div class="col-sm-4 text-center">
                        <img src="dashboard_assets/assets/img/illustrations/happiness.svg" alt="..." class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <img src="dashboard_assets/assets/img/illustrations/designer-life.svg" alt="..." class="img-fluid">
                    </div>
                    <div class="col-sm-8 text-right text-justify">
                        <h2>Qualification</h2>
                        <p>
                            The challenge is open to undergraduate and graduate students. Teams may have between 2-4 members. Teams/Participants are free to enlist professors, teachers, and professionals as advisors, but the work must be done by the students only.
                            All team members must be students at the time of submission of the application.
                        </p>
                        <br>
                    </div>
                </div>
            </div>

        </div>

        <div class="container" >
            <!-- Container (About Section) -->
            <div id="about" class="container-fluid">
                <div class="row">
                    <div class="col-sm-8 text-justify">
                        <h2>Writting a good submission</h2>
                        <p>
                            A good submission will address a real-world problem in a creative way. Your two-page proposal should help us understand the problem you are trying to solve and why it is important;
                            What your ideas will do and how people will interact with it.
                            A tactile grid display is appropriate for your application(Ideas), and a roadmap for development and how your team's skills can achieve them.
                        </p>
                    </div>
                    <div class="col-sm-4 text-center">
                        <img src="dashboard_assets/assets/img/illustrations/coworking.svg" alt="..." class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <img src="dashboard_assets/assets/img/illustrations/scale.svg" alt="..." class="img-fluid">
                    </div>
                    <div class="col-sm-8 text-right text-justify">
                        <h2>Submitting</h2><br>
                        <p>
                            Submissions will commence in late November 2018, on the conference website. Interested teams will complete the submission form, as well as sign the participant agreement.  Proposals would be submitted at 8:00 p.m. on January 8, 2019.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</body>

<footer>
    @include('includes.address')
</footer>

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
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>


<script type="text/javascript">
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

</html>