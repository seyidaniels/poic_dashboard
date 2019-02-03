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
                    <li class="nav-item active">
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

    <div class="wrapper" style="margin-top: 150px;">
        <div class="container" >
            <div class="header text-center">
                <h3 class="title">STEPS TO FOLLOW</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-timeline card-plain">
                        <div class="card-body">
                            <ul class="timeline">
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success">
                                        <p></p>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-danger">STEP 1 </span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>The applications should be submitted in a written format to the website for the preliminary stage.</p>
                                        </div>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="timeline-badge success">
                                        <p></p>
                                    </div>
                                    <div class="timeline-panel" style="background-color:#f0f0f0">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-danger">STEP 2</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Applicants that passed the preliminary stage would be contacted for the quarter finals and would have to submit a video presentation of their invention.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success">
                                        <p></p>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-danger">STEP 3</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Applications that scale through the quarter finals into the semi-finals would be required to make a physical presentation with their invention,
                                                explaining how it works and how it can help Nigeria tackle a problem.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success">
                                        <p></p>
                                    </div>
                                    <div class="timeline-panel" style="background-color:#f0f0f0">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-danger">STEP 4</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Applications would be judged based on originality and effectiveness.</p>
                                        </div>
                                    </div>
                                </li>       
                            </ul>
                        </div>
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