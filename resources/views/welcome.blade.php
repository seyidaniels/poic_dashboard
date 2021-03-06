@extends('layouts.newindex')
@section('content')
<style>
    .text-obj {
        color: #fff !important;
    }

    @media only screen and (min-width : 576px) {
        .push-right {

            margin-left: 50% !important;
        }
    }

    .lead {
        color: #fff !important;
    }
</style>

<!-- Navbar -->
@include('includes.dashboard.navbar')
<!-- End Navbar -->

<!-- Hero Slider -->
<div class="wrapper">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image image-overlay image-zoom"
                    style="background-image:url(/landing/assets/newassets/img/POIC_PICS/DSC_3321.jpg)"></div>
                <div class="container">
                    <div class="row align-items-center vh-100">
                        <div class="col-lg-8 text-white" data-swiper-parallax-x="-100%">
                            <h1 class="display-1 mt-1 mb-3 font-weight-light">Professor Ogundipe Innovative Challenge.
                            </h1>
                            <p class="lead">Do you have an Innovative Idea or Technology Driven Solution?</p>
                            <a href="{{ url('/dashboard') }}" class="btn btn-lg rounded"
                                style="font-weight: 700;background: #b78743!important;">Join</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image image-overlay image-zoom"
                    style="background-image:url(/landing/assets/newassets/img/POIC_PICS/DSC_3274.jpg)"></div>
                <div class="container">
                    <div class="row align-items-end align-items-center vh-100">
                        <div class="col-lg-8 text-white" data-swiper-parallax-x="-100%">
                            <h1 class="display-1 mt-1 mb-3 font-weight-light">Professor Ogundipe Innovative Challenge.
                            </h1>
                            <p class="lead">Do you have an Innovative Idea or Technology Driven Solution?</p>
                            <a href="{{ url('/dashboard') }}" class="btn btn-lg rounded"
                                style="font-weight: 700;background: #b78743!important;">Join</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image image-overlay image-zoom"
                    style="background-image:url(/landing/assets/newassets/img/POIC_PICS/DSC_3252.jpg)"></div>
                <div class="container">
                    <div class="row align-items-center vh-100">
                        <div class="col-lg-8 text-white" data-swiper-parallax-x="-100%">
                            <h1 class="display-1 mt-1 mb-3 font-weight-light">Professor Ogundipe Innovative Challenge.
                            </h1>
                            <p class="lead">Do you have an Innovative Idea or Technology Driven Solution?</p>
                            <a href="{{ url('/dashboard') }}" class="btn btn-lg rounded"
                                style="font-weight: 700;background: #b78743!important;">Join</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-footer">
            <div class="container">
                <div class="row align-items-center mb-5">
                    <div class="col-lg-6">
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-6 text-right">
                        <div class="swiper-navigation">
                            <div class="swiper-button-prev" style="-webkit-transition: all 0.2s;
                    -moz-transition: all 0.2s;
                    transition: all 0.2s;
                    -webkit-transition-delay: 0s;
                    -moz-transition-delay: 0s;
                    transition-delay: 0s;
                    position: relative;
                    top: auto;
                    right: auto;
                    bottom: auto;
                    left: auto;
                    float: left;
                    display: block;
                    width: 3.75rem;
                    height: 3.75rem;
                    margin-top: 0;
                    text-align: center;
                    vertical-align: top;
                    background-image: none !important;
                    background-color: #fff;
                    border-radius: 50%;
                    outline: none;">
                            </div>
                            <div class="swiper-button-next" style="-webkit-transition: all 0.2s;
                    -moz-transition: all 0.2s;
                    transition: all 0.2s;
                    -webkit-transition-delay: 0s;
                    -moz-transition-delay: 0s;
                    transition-delay: 0s;
                    position: relative;
                    top: auto;
                    right: auto;
                    bottom: auto;
                    left: auto;
                    float: left;
                    display: block;
                    width: 3.75rem;
                    height: 3.75rem;
                    margin-top: 0;
                    text-align: center;
                    vertical-align: top;
                    background-image: none !important;
                    background-color: #fff;
                    border-radius: 50%;
                    outline: none;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // End Hero Slider -->

<section class="about-poic">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-xl-5 col-md-6 order-lg-12">
                <img src="/landing/assets/newassets/img/saas-sketch-6.svg" alt="">
            </div>
            <div class="col-md-5 pr-xl-4 mb-4 md-mb-0 order-lg-1">
                <h1 class="display-3 mb-3 mt-3 mt-lg-0" style="font-weight: 700;color: #121212!important;">About <span
                        class="link-1">POIC</span></h1>
                <p class="text-justify">
                    This platform empowers students and young entrepreneurs (age 16 -35) from around the world to be
                    awarded the opportunity to foster
                    and develop their ideas.
                </p>
                <p class="text-justify">
                    Participants are invited to submit their innovative ideas and projects with a societal impact, which
                    champion and implement in one or more of these focus areas; Agriculture, Software Engineering, and
                    Security.
                    These have been crafted with the Sustainable Development Goals (SDGs) in mind.

                </p>
                <div class="mb-3"></div>
                {{-- <a href="#" class="hover-arrow">
                Read More
                <span>
                    <svg viewBox="0 0 24 24" width="16" height="16" stroke="#b78743" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" class="css-i6dzq1">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </span>
                </a> --}}
                <!-- <p class="text-justify">
                Now narrowing it down to our faculty. Early November, after it was discovered that the annual Faculty Of Science
                Lecture wouldn’t hold for 2018/19 academic session. We were tasked with the challenge of creating an engaging program
                and at the same time solving. a societal problem. A lot of thinking went into this process.
                </p> -->
                <!-- <p class="text-justify">
                We reiterated a couple of times before finally concluding on an innovation challenge. This will help in engaging the
                minds of students and at the same time broaden their horizon when it comes to thinking. The Power of an innovative
                mind is one that can’t be overemphasized.
                </p> -->
            </div>
        </div>
    </div>
</section>


<section class="poic-objectives">
    <div class="container d-flex text-lg-left">
        <div class="col px-0">
            <div class="row row-grid ">
                <div class="col-lg-6 pr-lg-5">
                    <h1 class="display-4 mb-4" style="font-weight: 700;">Objectives of POIC</h1>
                    <p class="text-muted text-sm mb-0">Professor Ogundipe Innovative Challenge is a science and
                        technology competition which is set to reward technological innovations,
                        novel scientific concepts/ideas, redefined approach(es) to existing solutions to problems. POIC
                        promotes entrepreneurship, technological revolution and improved economic outlook
                    </p>
                    <div class="mb-3"></div>
                    {{-- <a href="#" class="hover-arrow">
                    Read More
                    <span>
                    <svg viewBox="0 0 24 24" width="16" height="16" stroke="#b78743" stroke-width="2" fill="none" stroke-linecap="round"
                        stroke-linejoin="round" class="css-i6dzq1">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                    </span>
                </a> --}}
                </div>
                <div class="col-lg-6">
                    <div class="row mx-n2 my-mt-lg-0 my-mt-5">
                        <div class="col-sm-6 mt-sm-6 px-sm-2">
                            <div class="card mb-3">
                                <div class="card-body py-5 h-100 cardi-b">
                                    {{-- <div class="num-1"> 1 </div> --}}
                                    {{-- <h5 class="h6 mt-4 mb-1">4.95 out of 5 stars</h5> --}}
                                    <p class="text-muted text-sm mb-0 text-obj">Rewards Technological Innovations</p>
                                </div>
                            </div>
                            <div class="card push-right">
                                <div class="card-body py-5 h-100 cardi-b">
                                    {{-- <div class="num-1"> 2 </div> --}}
                                    {{-- <h5 class="h6 mt-4 mb-1">4.95 out of 5 stars</h5> --}}
                                    <p class="text-muted text-sm mb-0 text-obj">Rewards Novel Scientific Concepts/Ideas
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 px-sm-2">
                            <div class="card mb-3">
                                <div class="card-body py-5 h-100 cardi-b align-center">
                                    {{-- <div class="num-1"> 3 </div> --}}
                                    {{-- <h5 class="h6 mt-4 mb-1">4.95 out of 5 stars</h5> --}}
                                    <p class="text-muted text-sm mb-0 text-obj">Rewards Redefined Approach(es) to
                                        Existing Solutions to Problems
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="who-is-ogundipe">
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-xl-5 col-md-6">
                <img src="/landing/assets/newassets/img/auto-size-cover.png" alt="" class="rounded shadow-lg layer-1">
                <div class="decoration top left scale-2 d-none d-md-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="122" viewBox="0 0 43 122" fill="none"
                        class="injected-svg bg-primary-2"
                        data-src="/landing/assets/newassets/img/decorations/deco-blob-13.svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M27.7833 0.279065C31.5153 -0.395935 34.1643 0.647081 35.8243 3.52708C37.3013 3.75308 38.6543 3.75507 39.8533 4.18507C42.1543 5.01007 42.9763 6.54608 42.4253 8.85508C41.9003 11.0481 41.2363 13.2141 40.5173 15.3541C39.3333 18.8831 38.0523 22.3801 36.8223 25.8941C36.5623 26.6401 36.3473 27.4031 36.1253 28.1161C37.0183 29.7191 37.8983 31.1721 38.6433 32.6931C38.9753 33.3751 39.2763 34.2291 39.1643 34.9391C38.7993 37.2861 38.4123 39.6531 37.7263 41.9191C34.3003 53.2441 30.6563 64.5041 27.3223 75.8571C24.0643 86.9611 21.6093 98.2541 20.5933 109.813C20.3373 112.721 20.3023 115.648 20.1133 118.563C20.0643 119.327 19.8203 120.077 19.6813 120.759C15.5443 121.634 15.1673 121.063 12.5563 118.159C10.5703 115.952 10.0543 113.611 9.89033 110.991C9.78533 109.283 9.15631 107.965 7.99531 106.752C5.98531 104.652 4.13033 102.404 2.07933 100.35C1.36233 99.6311 0.903309 98.9591 0.886309 97.9751C0.820309 94.3911 0.722321 90.8071 0.698321 87.2231C0.682321 84.7301 1.61831 82.2831 0.753314 79.7161C0.466314 78.8631 1.1893 77.7051 1.3173 76.6701C1.5593 74.6961 1.55332 72.6821 1.92232 70.7361C2.96332 65.2691 4.04931 59.8211 5.40431 54.4081C7.37531 46.5491 9.58832 38.7701 11.8923 31.0121C12.5353 28.8511 13.2773 26.7081 14.1303 24.6221C16.2923 19.3441 18.5343 14.0991 20.7713 8.85109C21.0273 8.24809 21.3243 7.49607 21.8303 7.19307C24.5723 5.55607 25.8093 2.64406 27.7833 0.279065Z"
                            fill="black"></path>
                    </svg>
                </div>
                <div class="decoration bottom middle-x scale-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="110" height="116" viewBox="0 0 110 116" fill="none"
                        class="injected-svg bg-primary"
                        data-src="/landing/assets/newassets/img/decorations/deco-dots-3.svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M56.0201 7.05393C59.1721 4.51793 59.7681 4.46094 62.2881 6.41394C62.0951 6.69994 61.9211 7.01594 61.6921 7.28394C61.1841 7.88094 61.1741 7.87095 61.8561 8.97595C61.3271 9.84795 60.7561 10.786 60.1081 11.855C60.6431 12.46 61.1801 13.029 61.6701 13.635C62.1681 14.251 62.7231 14.8549 63.0631 15.5549C63.3851 16.2189 63.4631 17.002 63.6741 17.834C61.8561 18.334 60.2351 18.0659 58.8281 16.7719C58.2441 16.2349 57.6871 15.6679 57.1821 15.1749C56.2431 15.0949 55.7871 15.743 55.2171 16.135C53.3071 17.447 51.3931 18.7399 49.1231 19.3709C48.8961 19.4339 48.6581 19.4569 48.4691 19.4919C48.2741 19.4259 48.1001 19.4089 47.9791 19.3199C46.3381 18.1189 46.1781 17.4189 47.3031 15.8059C47.6551 15.3039 48.1841 14.9089 48.6781 14.5269C49.2421 14.0899 49.8931 13.7629 50.4511 13.3179C53.4801 10.8969 53.0801 11.0889 51.2521 8.46894C49.9811 6.64594 48.9201 4.67293 47.8111 2.73993C47.3131 1.87393 47.3461 0.917928 47.8421 0.536928C48.5101 0.0219278 49.2811 -0.108072 50.1001 0.161928C51.0711 0.481928 51.6641 1.24693 52.2331 2.01593C53.1781 3.29693 54.0751 4.61694 55.0121 5.90494C55.2831 6.28094 55.6231 6.60693 56.0201 7.05393Z"
                            fill="black"></path>
                        <path
                            d="M45.2522 52.563C45.6802 53.121 45.8982 53.446 46.1582 53.735C46.5842 54.211 47.0332 54.6671 47.4802 55.1261C49.0032 56.6921 49.6262 58.568 49.4842 60.869C48.4452 60.965 47.5882 60.5641 46.7712 60.1421C46.0742 59.7831 45.2692 59.4151 44.8262 58.8201C43.6172 57.1911 41.8062 56.2541 40.6542 54.6871C39.7752 54.8601 39.0842 55.004 38.3882 55.132C37.0792 55.372 36.1932 54.8641 35.8572 53.6091C35.7382 53.1581 35.6072 52.572 35.7912 52.201C36.5312 50.712 35.6662 49.5981 35.0312 48.4401C34.6852 47.8071 34.2602 47.2361 34.2672 46.4651C34.2752 45.6621 34.8082 45.0261 35.6092 45.1341C36.2972 45.2281 37.0002 45.4641 37.6092 45.7971C38.1562 46.0961 38.6462 46.562 39.0502 47.046C40.0402 48.224 41.1552 48.3071 42.4562 47.6401C43.2372 47.2391 44.0502 46.9001 44.8542 46.5481C45.5122 46.2611 46.1842 46.0071 46.8402 45.7201C49.0592 44.7491 50.9102 46.8641 51.0632 48.8941C51.1082 49.5121 50.8132 50.0041 50.2742 50.2671C49.3422 50.7221 48.3762 51.106 47.4302 51.533C46.7832 51.825 46.1452 52.14 45.2522 52.563Z"
                            fill="black"></path>
                        <path
                            d="M70.824 40.181C70.357 40.472 69.8729 40.739 69.4259 41.059C68.7969 41.512 68.141 41.636 67.364 41.35C66.548 40.289 66.532 39.2 67.315 38.089C67.999 37.12 68.6859 36.153 69.4609 35.058C68.9789 34.524 68.5389 33.972 68.0329 33.488C66.9839 32.484 66.2029 31.295 65.4179 30.087C64.7319 29.033 64.717 28.035 65.203 26.77C65.746 26.841 66.348 26.767 66.769 27.007C67.589 27.474 68.3569 28.067 69.0599 28.701C70.2439 29.764 71.359 30.901 72.527 32.03C73.672 31.734 74.2299 30.79 75.0039 30.147C75.9019 29.399 76.8419 28.883 78.0629 29.19C78.6059 29.326 79.135 29.419 79.514 29.923C79.793 30.297 80.1859 30.585 80.6119 30.991C80.5589 33.131 78.7249 34.322 77.6329 36.135C77.8769 36.432 78.123 36.818 78.449 37.114C79.707 38.251 80.2669 39.66 80.2009 41.443C78.6309 42.078 77.3239 41.327 76.0429 40.561C75.6409 40.32 75.318 39.938 74.984 39.596C74.466 39.065 73.8379 39.13 73.1969 39.21L73.2399 39.261C72.8629 39.052 72.4879 38.923 72.1189 39.277C72.0019 39.344 71.8919 39.422 71.7909 39.511C71.4469 39.75 71.103 39.99 70.76 40.228L70.824 40.181Z"
                            fill="black"></path>
                        <path
                            d="M96.1969 45.298C95.2609 44.256 94.5079 43.44 93.7809 42.602C93.1009 41.821 92.3918 41.057 91.8038 40.21C91.1558 39.277 91.7079 38.274 92.8249 38.171C93.6489 38.095 94.4229 38.198 95.0869 38.719C95.8369 39.307 96.5689 39.916 97.2979 40.528C98.0269 41.139 98.7389 41.766 99.5419 42.457C100.458 42.04 101.009 41.271 101.649 40.588C102.602 39.573 104.172 39.237 105.364 39.766C106.288 40.176 106.975 40.789 106.88 41.942C106.847 42.334 106.837 42.738 106.896 43.124C107.029 43.992 106.81 44.633 106.05 45.176C105.421 45.624 104.941 46.275 104.413 46.816C104.772 47.655 105.151 48.343 105.358 49.079C105.542 49.736 105.532 50.447 105.631 51.329C103.625 51.114 101.963 50.533 100.447 49.324C99.7199 49.663 99.0109 49.994 98.3009 50.325C96.8339 51.011 95.2909 51.363 93.6699 51.312C92.8299 51.286 92.3768 50.75 92.3728 49.925C92.3648 48.594 93.1519 47.706 94.0639 46.91C94.6599 46.395 95.3219 45.956 96.1969 45.298Z"
                            fill="black"></path>
                        <path
                            d="M101.844 91.355C102.533 90.708 103.045 90.219 103.565 89.738C104.352 89.009 105.28 88.59 106.346 88.473C107.282 88.371 108.116 88.97 108.166 89.915C108.268 91.837 108.137 93.727 106.768 95.423C108.45 96.804 109.608 98.433 109.563 100.773C108.346 101.144 107.262 100.505 106.223 100.104C105.217 99.716 104.348 98.97 103.33 98.326C101.726 98.993 100.053 99.693 98.373 100.385C98.08 100.506 97.783 100.629 97.475 100.697C96.645 100.881 95.815 100.256 95.86 99.408C95.889 98.869 96.03 98.293 96.278 97.814C96.825 96.761 97.471 95.758 98.178 94.563C98.037 94.205 97.905 93.663 97.625 93.21C97.336 92.741 96.9 92.363 96.541 91.937C95.252 90.409 94.629 88.672 94.853 86.662C96.527 86.557 97.419 86.893 98.632 88.123C99.193 88.691 99.696 89.314 100.253 89.885C100.695 90.336 101.18 90.745 101.844 91.355Z"
                            fill="black"></path>
                        <path
                            d="M23.8872 15.5589C22.6252 16.2679 21.4532 16.9369 20.2702 17.5889C19.5822 17.9669 18.9482 18.371 18.0512 18.294C17.4892 18.246 16.8932 18.718 16.2972 18.911C15.7872 19.078 15.3522 18.905 15.0652 18.445C14.5652 17.646 14.4672 16.811 14.8952 15.945C15.4382 14.842 16.2172 13.9829 17.3132 13.3779C18.2802 12.8449 19.3152 12.3549 19.9202 11.1969C19.3592 9.76695 17.7032 9.25894 16.9362 8.01094C16.8932 7.24394 17.2312 6.65994 17.8252 6.39894C18.7062 6.00994 19.6772 5.88596 20.6122 6.28096C21.1262 6.49696 21.6142 6.77695 22.0922 7.06395C22.7742 7.47495 23.4342 7.91995 24.2092 8.41795C24.7172 8.15295 25.2932 7.89896 25.8202 7.56496C26.7812 6.95896 27.7732 7.01394 28.8182 7.26094C29.9662 7.53194 30.3612 8.55595 30.9042 9.37795C31.0842 9.64995 30.8492 10.318 30.6272 10.7C30.3972 11.094 29.9572 11.3709 29.5922 11.6789C29.1082 12.0869 28.6082 12.4749 28.1312 12.8569C28.4202 14.3099 28.7292 15.684 28.9552 17.071C29.0742 17.812 28.4632 18.199 27.7152 17.906C27.0492 17.645 26.3522 17.423 25.7442 17.057C25.1452 16.698 24.6412 16.1789 23.8872 15.5589Z"
                            fill="black"></path>
                        <path
                            d="M69.8009 69.525C69.1799 68.537 68.5409 67.532 67.9119 66.521C67.3529 65.621 67.0229 64.642 67.0159 63.58C67.0039 62.432 67.9179 61.762 68.9379 62.264C69.6289 62.604 70.2659 63.135 70.8009 63.7C71.5629 64.504 72.2109 65.417 72.9669 66.358C73.7209 66.049 74.4259 65.711 75.1619 65.469C76.9219 64.891 78.1719 65.803 78.5489 67.666C78.8359 69.082 78.6329 70.163 77.2109 70.859C77.6349 73.103 79.7929 74.8 79.2129 77.494C77.3889 76.984 75.6059 76.826 74.3259 75.264C73.4779 74.231 72.7649 74.256 71.6149 75.024C70.6209 75.686 69.6499 76.385 68.6399 77.02C67.9329 77.464 67.2119 77.227 66.8369 76.483C66.2609 75.338 66.1319 74.174 66.9419 73.094C67.7969 71.954 68.7209 70.867 69.8009 69.525Z"
                            fill="black"></path>
                        <path
                            d="M11.2291 50.851C12.3481 53.413 12.3931 53.754 11.8481 55.872C11.4161 55.737 10.9671 55.659 10.5781 55.459C9.80111 55.06 8.99812 54.671 8.31212 54.141C6.20712 52.516 6.17311 52.571 3.67711 53.987C3.16711 53.747 2.60311 53.481 2.13611 53.261C1.51111 51.93 1.95211 50.83 2.50511 49.796C1.85111 48.519 1.2841 47.296 0.616104 46.134C-0.160896 44.784 -0.115892 43.569 1.02611 42.371C3.56311 42.53 4.2331 45.257 6.2921 46.302C7.2761 46.048 7.9011 45.2 8.5631 44.438C9.0941 43.825 9.64111 43.278 10.4181 42.984C12.0331 42.374 13.3071 42.783 14.3031 44.259C15.3191 45.762 15.3601 46.257 14.2371 47.622C13.3361 48.723 12.2991 49.713 11.2291 50.851Z"
                            fill="black"></path>
                        <path
                            d="M103.832 64.201C106.49 63.505 107.318 63.6351 108.391 64.8361C109.336 65.8931 109.405 66.6721 108.692 68.6721C109.68 70.3131 110.381 72.0931 109.698 74.3111C109.05 73.9241 108.542 73.5901 108.005 73.3091C107.368 72.9771 106.683 72.735 106.067 72.373C105.526 72.054 105.049 71.6231 104.512 71.2161C103.106 71.6291 101.725 72.0101 100.362 72.4441C99.5981 72.6871 98.8421 73.1131 98.1711 72.3221C97.5541 71.5961 97.4911 70.3191 98.0711 69.4281C98.4561 68.8361 98.9441 68.3051 99.4261 67.7831C99.6801 67.5081 100.02 67.3081 100.401 67.0121C100.012 66.4651 99.6881 66.0281 99.3831 65.5781C98.6251 64.4541 97.8771 63.3241 97.1211 62.1971C96.2131 60.8421 96.2541 59.3161 96.4511 57.8141C96.5131 57.3341 97.0121 56.9111 97.2651 56.5281C98.2981 56.5371 98.6011 57.2771 99.0091 57.8311C100.142 59.3731 101.212 60.9631 102.347 62.5041C102.811 63.1331 103.377 63.686 103.832 64.201Z"
                            fill="black"></path>
                        <path
                            d="M107.551 8.04991C106.336 9.03991 105.123 10.0309 103.949 10.9879C104.795 13.7779 104.896 14.5269 104.662 16.3629C102.621 15.9779 101.082 14.7979 99.6482 13.3439C97.8102 13.9219 95.9982 14.4909 94.1682 15.0659C93.5982 14.7179 93.0662 14.3949 92.5762 14.0969C92.1762 12.8759 93.1172 12.2839 93.6832 11.5759C94.2242 10.9019 94.9212 10.3529 95.5582 9.74193C95.4432 8.91993 94.7202 8.62893 94.1812 8.19493C93.6282 7.74893 93.0312 7.35792 92.4842 6.96492C92.9982 5.24492 93.9632 4.56193 95.4272 4.95393C96.4192 5.21993 97.3762 5.64192 98.3232 6.05492C98.8992 6.30792 99.4272 6.67694 100.096 7.06194C100.524 6.76194 100.965 6.45292 101.407 6.14192C102.319 5.49992 103.19 4.78992 104.151 4.23192C105.473 3.46392 107.128 3.76191 108.051 4.89891C108.604 5.57991 108.459 6.38891 108.197 7.16591C108.31 6.78191 108.156 6.50592 107.783 6.70192C107.201 7.00592 107.16 7.51791 107.551 8.04991Z"
                            fill="black"></path>
                        <path
                            d="M16.3109 105.689C16.0039 105.412 15.8518 105.205 15.6488 105.103C13.2268 103.898 11.4479 101.953 9.70985 99.96C9.50485 99.724 9.26885 99.465 9.18885 99.177C9.06785 98.738 8.90787 98.2 9.05787 97.82C9.27887 97.266 9.85485 97.515 10.3219 97.603C11.7479 97.873 13.0599 98.323 14.2729 99.205C15.4919 100.092 16.8879 100.73 18.2089 101.473C18.9839 101.909 19.7729 102.17 20.7109 102.112C22.2789 102.016 23.4749 102.688 24.1719 104.163C24.3399 104.515 24.6349 104.808 24.8789 105.122C25.4399 105.849 25.7969 106.579 25.4039 107.554C25.2559 107.923 25.4369 108.427 25.4779 109.033C24.2769 108.762 23.2789 108.537 22.3449 108.327C20.9969 109.16 19.7489 110.016 18.4229 110.727C17.1609 111.403 15.8179 111.926 14.5749 112.487C13.8699 111.966 13.2059 111.532 12.6119 111.016C12.2289 110.682 12.0728 110.155 12.4208 109.722C12.9128 109.105 13.4479 108.496 14.0599 108.004C14.8709 107.353 15.7149 106.758 16.3109 105.689Z"
                            fill="black"></path>
                        <path
                            d="M49.1802 86.532C49.6552 88.307 50.2012 90.069 49.4182 92.006C47.9752 92.111 46.9712 91.287 46.0572 90.28C45.5362 89.706 45.0282 89.119 44.4832 88.502C43.6042 88.721 42.8542 88.906 42.0202 89.113C41.3502 87.704 42.0082 86.396 41.9362 84.813C41.0822 83.431 40.0862 81.808 39.0812 80.192C38.8272 79.786 38.5153 79.416 38.2823 79C37.7573 78.061 38.2622 77.047 39.3392 76.835C40.2572 76.654 41.1092 76.844 41.7962 77.458C42.4462 78.04 43.0152 78.715 43.6162 79.352C44.2122 79.982 44.6652 80.771 45.6732 81.115C45.8682 80.995 46.2143 80.897 46.3683 80.671C47.3063 79.299 48.6432 79.369 50.0182 79.622C50.9912 79.802 51.8252 80.741 51.9832 81.744C52.0322 82.058 52.0492 82.378 52.1002 82.692C52.2072 83.374 52.0393 83.926 51.4933 84.395C50.7133 85.066 49.9792 85.789 49.1802 86.532Z"
                            fill="black"></path>
                        <path
                            d="M67.0101 115.141C67.0281 114.983 67.0451 114.825 67.0781 114.52C66.5881 114.52 66.0961 114.557 65.6131 114.502C65.4001 114.479 65.1521 114.313 65.0151 114.136C64.7281 113.767 64.5051 113.348 64.2921 113.008C64.7801 111.246 65.6731 109.895 67.3801 109.008C66.3231 107.477 65.0621 106.319 63.8101 105.217C64.2611 103.867 65.351 103.764 66.369 103.842C67.221 103.906 68.0641 104.25 68.8751 104.565C69.4591 104.794 69.98 105.178 70.58 105.521C71.488 104.877 72.3441 104.182 73.2811 103.627C74.8771 102.682 76.9781 103.578 77.4201 105.334C77.4571 105.48 77.4711 105.715 77.3871 105.795C76.7871 106.361 77.0181 107.047 77.0161 107.722C77.0161 107.998 76.7501 108.287 76.5691 108.544C76.2491 109 75.9011 109.436 75.4791 109.994C75.4791 111.053 75.4791 112.223 75.4791 113.238C74.8111 113.9 74.2801 113.631 73.7881 113.39C72.4381 112.734 71.2221 112.945 69.9761 113.738C69.0501 114.328 68.1031 114.957 66.9531 115.078L67.0101 115.141Z"
                            fill="black"></path>
                        <path
                            d="M18.5682 79.488C20.3222 82.367 20.4922 83.267 19.5802 85.064C18.3182 84.46 16.9713 84.06 15.8593 83.108C14.8753 82.265 14.1542 82.273 13.0562 82.98C12.7242 83.195 12.4112 83.45 12.1202 83.718C11.4792 84.312 10.7782 84.134 10.1282 83.826C9.54424 83.55 9.48924 82.961 9.58924 82.376C9.72424 81.595 9.75326 80.769 10.0403 80.046C10.5073 78.871 10.3513 77.885 9.57126 76.934C9.37226 76.691 9.19426 76.405 9.10026 76.109C8.91426 75.513 8.62326 74.88 9.17026 74.318C9.62726 73.849 10.2113 73.959 10.7463 74.107C11.1973 74.234 11.6292 74.453 12.0512 74.669C12.4732 74.886 12.8732 75.148 13.4012 75.461C13.8402 75.044 14.2622 74.596 14.7312 74.207C15.6982 73.408 16.7843 72.988 18.0533 73.334C19.0453 73.604 19.6702 74.367 19.7662 75.389C19.9322 77.162 19.8552 77.431 18.5682 79.488Z"
                            fill="black"></path>
                    </svg>
                </div>
            </div>
            <div class="col-md-5 pr-xl-4 mb-4 mb-md-0">
                <h3 class="mb-3 my-mt-lg-0 my-mt-5" style="font-weight: 700;color: #b78743!important;">"Who is Professor
                    Ogundipe?"</h3>
                <p class="text-justify">Professor Oluwatoyin Temitayo Ogundipe (born May 31, 1960) is a Nigerian
                    academic, author and a Professor of botany.</p>
                <p class="text-justify">He is the 12th Vice-Chancellor of University of Lagos. He attended the
                    University of Ife (now Obafemi Awolowo
                    University) where he obtained a Bachelor of science (B.Sc.) degree in Botany. He holds a master's
                    degree in Botany from
                    the University of Ife and Doctorate degree (Ph.D.) from the same University.</p>
                <div class="mb-3"></div>
                {{-- <a href="#" class="hover-arrow">
                Read More
                <span>
                    <svg viewBox="0 0 24 24" width="16" height="16" stroke="#b78743" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" class="css-i6dzq1">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </span>
                </a> --}}
                <!-- <p>Thereafter, he obtained a master's degree
                in Business Administration from the University of Lagos and bagged a certificate of attendance from University of
                Reading in 1998.</p> -->
                <!-- <p class="text-justify">
                Professor Ogundipe began his academic career at the University of Lagos as a lecturer where he rose to the rank of
                professor of Botany in 2002. He was Dean, School of Postgraduate Studies from August 2007 to July 2011 and Director,
                Academic Planning Unit April 2012 to April 2016. He was appointed as the vice chancellor of the University of Lagos in
                November 2017.
                </p> -->
                <!-- <p class="text-justify">
                Until his appointment in November, he was the Deputy Vice Chancellor of the University of Lagos.
                </p>
                <p class="text-justify">
                Toyin Ogundipe is married with children.
                </p> -->
            </div>

        </div>
    </div>
</section>


<section class="images pb-1 no-overflow">
    <div class="container">
        <div class="row gutter-1">
            <div class="col-md-6 col-lg-4 level-1">
                <div class="card card-equal bg-primary text-white">
                    <div class="card-header p-4">
                        <i class="">
                            <svg viewBox="0 0 24 24" width="28" height="28" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </i>
                    </div>
                    {{-- <div class="card-footer p-4">
                    <h2 class="card-title fs-30 w-75">Images from Previous <a href="#!" class="font-weight-bold underline">Event</a></h2>
                </div> --}}
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="owl-carousel owl-carousel-alt visible owl-loaded owl-drag" data-items="[2,2,1,1]"
                    data-margin="10" data-loop="true" data-nav="true">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-1149px, 0px, 0px); transition: all 0.4s ease 0s; width: 4217px;">
                            <div class="owl-item cloned" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3355.jpg)"></a>
                                </figure>
                            </div>
                            <div class="owl-item cloned" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3341.jpg)"></a>
                                </figure>
                            </div>
                            <div class="owl-item cloned" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3339.jpg)"></a>
                                </figure>
                            </div>
                            <div class="owl-item active" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3325.jpg)"></a>
                                </figure>
                            </div>
                            <div class="owl-item active" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3327.jpg)"></a>
                                </figure>
                            </div>
                            <div class="owl-item" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3328.jpg)"></a>
                                </figure>
                            </div>
                            <div class="owl-item" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3283.jpg)"></a>
                                </figure>
                            </div>
                            <div class="owl-item" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3279.jpg)"></a>
                                </figure>
                            </div>
                            <div class="owl-item cloned" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3249.jpg)"></a>
                                </figure>
                            </div>
                            <div class="owl-item cloned" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3191.jpg)"></a>
                                </figure>
                            </div>
                            <div class="owl-item cloned" style="width: 373.328px; margin-right: 10px;">
                                <figure class="equal"><a class="image image-fade" href="#!"
                                        style="background-image: url(/landing/assets/newassets/img/POIC_PICS/DSC_3187.jpg)"></a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev">
                            <span aria-label="Previous">‹</span>
                        </button>
                        <button type="button" role="presentation" class="owl-next">
                            <span aria-label="Next">›</span>
                        </button>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="pt-5 pb-4">
    <div class="container text-center">
        <div class="row mb-5">
            <div class="col">
                <h5>Featured on Nigeria’s Leading Media Companies</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <ul class="d-flex flex-wrap justify-content-center list-unstyled">
                    <li class="mx-xl-4 mx-3 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                        <svg xmlns="http://www.w3.org/2000/svg" width="141" height="36" viewBox="0 0 141 36" fill="none"
                            class="injected-svg icon icon-lg opacity-20" data-src="assets/img/logos/brand/intercom.svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M47.8017 23.2V12.8C47.8017 12.16 48.3226 11.64 48.9637 11.64C49.6048 11.64 50.1257 12.16 50.1257 12.8V23.2C50.1257 23.84 49.6048 24.36 48.9637 24.36C48.3627 24.36 47.8017 23.84 47.8017 23.2ZM61.1045 23.64L56.0558 15.6V23.2C56.0558 23.84 55.5349 24.36 54.8938 24.36C54.2527 24.36 53.7319 23.84 53.7319 23.2V13.12C53.7319 12.28 54.413 11.56 55.2945 11.56H55.3747C55.8955 11.56 56.4164 11.84 56.6969 12.28L61.7055 20.2V12.72C61.7055 12.08 62.2264 11.56 62.8675 11.56C63.5086 11.56 64.0295 12.08 64.0295 12.72V22.8C64.0295 23.64 63.3483 24.36 62.4668 24.36C61.9058 24.36 61.3849 24.12 61.1045 23.64ZM72.1233 13.8V23.32C72.1233 23.92 71.6425 24.4 71.0414 24.4H70.8812C70.2801 24.4 69.7993 23.92 69.7993 23.32V13.8H67.1147C66.5137 13.8 66.0329 13.32 66.0329 12.72C66.0329 12.12 66.5137 11.64 67.1147 11.64H74.8479C75.449 11.64 75.9298 12.12 75.9298 12.72C75.9298 13.32 75.449 13.8 74.8479 13.8H72.1233ZM77.7729 23.32V12.64C77.7729 12.08 78.2538 11.6 78.8147 11.6H85.8267C86.3877 11.6 86.8685 12.08 86.8685 12.64C86.8685 13.2 86.3877 13.68 85.8267 13.68H80.0969V16.64H85.0253C85.5863 16.64 86.0671 17.12 86.0671 17.68C86.0671 18.24 85.5863 18.72 85.0253 18.72H80.0969V22.2H85.8267C86.3877 22.2 86.8685 22.68 86.8685 23.24C86.8685 23.8 86.3877 24.28 85.8267 24.28H78.8147C78.2538 24.36 77.7729 23.92 77.7729 23.32V23.32ZM96.6853 23.68L94.8421 19.56H91.9973V23.24C91.9973 23.88 91.4764 24.4 90.8353 24.4H90.7952C90.1541 24.4 89.6332 23.88 89.6332 23.24V12.8C89.6332 12.16 90.1541 11.64 90.7952 11.64H95.0425C98.0877 11.64 99.4901 13.56 99.4901 15.6C99.4901 17.32 98.5685 18.64 97.1661 19.16L98.7688 22.76C99.0894 23.52 98.5685 24.36 97.7271 24.36C97.2863 24.36 96.8455 24.12 96.6853 23.68V23.68ZM95.0825 13.64H92.0373V17.44H95.1226C96.4449 17.44 97.2062 16.76 97.2062 15.56C97.1661 14.56 96.4048 13.64 95.0825 13.64V13.64ZM110.549 23.08C109.587 24.04 108.265 24.6 106.903 24.6C105.54 24.6 104.258 24.16 103.297 23.16C101.894 21.76 101.694 20.08 101.694 18C101.694 15.92 101.894 14.2 103.297 12.84C104.258 11.88 105.54 11.4 106.903 11.4C108.265 11.4 109.587 11.92 110.549 12.88C110.87 13.24 111.15 13.6 111.35 14.04C111.711 14.8 111.15 15.64 110.309 15.64C109.828 15.64 109.427 15.36 109.227 14.92C109.147 14.68 108.986 14.48 108.826 14.28C108.425 13.76 107.704 13.48 106.903 13.48C106.181 13.48 105.46 13.8 104.939 14.32C104.058 15.24 104.058 16.8 104.058 18C104.058 19.16 104.058 20.76 104.939 21.68C105.46 22.2 106.181 22.52 106.903 22.52C107.704 22.52 108.425 22.24 108.826 21.72C108.986 21.52 109.147 21.28 109.227 21.04C109.387 20.6 109.828 20.32 110.309 20.32C111.15 20.32 111.711 21.16 111.35 21.92C111.15 22.36 110.87 22.76 110.549 23.08ZM123.01 23.16C122.049 24.12 120.686 24.6 119.324 24.6C117.962 24.6 116.639 24.12 115.638 23.16C114.235 21.76 114.035 20.08 114.035 18C114.035 15.92 114.275 14.2 115.638 12.84C116.599 11.88 117.962 11.4 119.324 11.4C120.686 11.4 122.009 11.88 123.01 12.84C124.413 14.24 124.613 15.92 124.613 18C124.653 20.08 124.413 21.8 123.01 23.16ZM121.367 14.36C120.847 13.84 120.085 13.52 119.364 13.52C118.643 13.52 117.841 13.84 117.361 14.36C116.479 15.28 116.439 16.84 116.439 18.04C116.439 19.2 116.479 20.76 117.361 21.68C117.882 22.2 118.643 22.52 119.364 22.52C120.085 22.52 120.887 22.2 121.367 21.68C122.249 20.76 122.289 19.2 122.289 18.04C122.289 16.84 122.249 15.24 121.367 14.36V14.36ZM138.116 23.24V15.28L135.111 23.4C134.951 23.88 134.47 24.2 133.949 24.2C133.428 24.2 132.987 23.88 132.787 23.4L129.782 15.16V23.24C129.782 23.88 129.261 24.36 128.66 24.36C128.019 24.36 127.538 23.84 127.538 23.24V13.36C127.538 12.4 128.339 11.6 129.301 11.6H129.461C130.183 11.6 130.864 12.04 131.104 12.76L134.029 20.68L136.994 12.76C137.235 12.08 137.916 11.6 138.637 11.6C139.599 11.6 140.4 12.4 140.4 13.36V23.24C140.4 23.88 139.879 24.36 139.278 24.36C138.597 24.36 138.116 23.88 138.116 23.24V23.24ZM31.574 0H4.52774C2.00342 0 0 2 0 4.48V31.48C0 34 2.00342 36 4.52774 36H31.574C34.0582 36 36.0616 34 36.0616 31.52V4.52C36.0616 2 34.0582 0 31.574 0ZM22.839 6.6C22.839 5.92 23.3599 5.4 24.0411 5.4C24.7223 5.4 25.2432 5.92 25.2432 6.6V22.64C25.2432 23.32 24.7223 23.84 24.0411 23.84C23.3599 23.84 22.839 23.32 22.839 22.64V6.6ZM16.8288 6C16.8288 5.32 17.3497 4.8 18.0308 4.8C18.712 4.8 19.2329 5.32 19.2329 6V23.4C19.2329 24.08 18.712 24.6 18.0308 24.6C17.3497 24.6 16.8288 24.08 16.8288 23.4V6ZM10.8185 6.6C10.8185 5.92 11.3394 5.4 12.0205 5.4C12.7017 5.4 13.2226 5.92 13.2226 6.6V22.64C13.2226 23.32 12.7017 23.84 12.0205 23.84C11.3394 23.84 10.8185 23.32 10.8185 22.64V6.6ZM4.80822 9C4.80822 8.32 5.32911 7.8 6.01027 7.8C6.69144 7.8 7.21233 8.32 7.21233 9V19.8C7.21233 20.48 6.69144 21 6.01027 21C5.32911 21 4.80822 20.48 4.80822 19.8V9ZM30.8527 27.32C30.6524 27.48 26.2048 31.2 18.0308 31.2C9.85685 31.2 5.40925 27.48 5.2089 27.32C4.68801 26.88 4.64795 26.12 5.0887 25.64C5.52945 25.12 6.29075 25.08 6.77158 25.52C6.85171 25.52 10.8185 28.8 18.0308 28.8C25.3233 28.8 29.25 25.52 29.25 25.48C29.7709 25.04 30.5322 25.12 30.9329 25.6C31.4137 26.12 31.3336 26.88 30.8527 27.32ZM31.2534 19.8C31.2534 20.48 30.7325 21 30.0514 21C29.3702 21 28.8493 20.48 28.8493 19.8V9C28.8493 8.32 29.3702 7.8 30.0514 7.8C30.7325 7.8 31.2534 8.32 31.2534 9V19.8Z"
                                fill="#ADB5BD"></path>
                        </svg>
                    </li>
                    <li class="mx-xl-4 mx-3 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                        <svg xmlns="http://www.w3.org/2000/svg" width="120" height="36" viewBox="0 0 120 36" fill="none"
                            class="injected-svg icon icon-lg opacity-20" data-src="assets/img/logos/brand/slack.svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M42.8475 14.0442C42.8475 10.4894 45.443 8.00725 50.1598 8.00725C53.0378 8.00725 55.3928 8.92485 56.6687 9.82373C56.8513 9.95208 57.177 10.2635 56.9817 10.8426C56.7314 11.4663 56.2723 12.4043 55.943 13.0136C55.7512 13.3687 55.2616 13.3219 55.0108 13.195C54.102 12.7351 52.6114 11.9571 51.242 11.8137C50.8953 11.776 50.5464 11.7609 50.1977 11.7686C48.9917 11.7954 47.9842 12.2136 47.6294 13.1324C47.5598 13.3062 47.5211 13.4908 47.5148 13.6779C47.4816 14.8886 49.169 15.3264 51.2132 15.6772C55.0135 16.3273 57.8886 17.4399 57.8886 21.3459C57.8886 24.6629 55.2487 27.6606 50.0762 27.5687C46.6663 27.4999 44.2471 26.3493 42.9508 25.2329C42.9066 25.195 42.4131 24.6931 42.6776 24.0895C42.9803 23.3125 43.4913 22.422 43.8923 21.9492C44.1152 21.6455 44.7035 21.5973 45.0094 21.7865C46.0779 22.4496 47.8365 23.5128 49.8636 23.5834C50.0236 23.5889 50.1821 23.5898 50.3378 23.5858C52.1612 23.5416 53.2643 22.8512 53.2413 21.6882C53.2216 20.6636 51.7758 20.0651 49.4737 19.6318C45.8019 18.9412 42.848 17.7326 42.848 14.0442H42.8475ZM76.2049 19.1057C73.6156 19.1396 71.2416 19.8463 71.1732 21.8669C71.1724 23.4704 72.475 24.2579 74.3032 24.1548C76.0569 23.9861 77.3943 23.2266 77.9836 22.2188C78.2015 21.8453 78.2346 20.4477 78.2214 19.8504C78.2181 19.7232 77.9663 19.4826 77.856 19.4363C77.3059 19.2048 76.8987 19.1333 76.2046 19.1052L76.2049 19.1057ZM67.5893 10.9637C68.8001 9.88179 71.2008 8.19773 75.0268 8.28649C80.0758 8.39133 82.7431 10.755 82.9915 16.4093C83.0939 18.7411 82.9243 25.2451 82.8839 26.8656C82.8779 27.098 82.7991 27.2588 82.4854 27.2648C81.6539 27.2981 79.733 27.2849 78.8504 27.2734C78.405 27.2518 78.3533 27.0311 78.3475 26.8001C78.3437 26.649 78.3307 26.2008 78.3214 25.8355C78.3163 25.6417 78.134 25.6472 78.0874 25.6968C76.903 26.9596 74.9634 27.5694 72.9007 27.5694C69.7656 27.5694 66.6402 25.7278 66.6498 22.0807C66.6594 18.3455 69.3116 16.5031 72.2252 16.0687C74.0908 15.7913 76.1938 16.038 77.7864 16.6698C77.8882 16.7106 78.0963 16.6516 78.0979 16.5074C78.1044 16.0315 78.0814 15.1244 77.9898 14.6945C77.7561 13.5992 76.841 12.7178 74.9187 12.4803C74.5228 12.4316 74.1242 12.4156 73.7252 12.4472C72.197 12.5672 70.358 13.757 69.5965 14.2025C69.4173 14.3071 69.1367 14.2306 69.0459 14.1138C68.6014 13.5404 67.4843 11.8636 67.3964 11.5956C67.3085 11.3284 67.4325 11.1033 67.5888 10.9628L67.5893 10.9637V10.9637ZM84.6564 17.9168C84.6263 12.7075 88.2611 8.31288 94.1632 8.27426C97.846 8.25027 100.522 9.91753 100.993 10.7039C101.089 10.8886 101.04 11.0429 100.974 11.2288C100.662 11.8861 99.8743 13.1561 99.3131 13.8758C99.0741 14.1824 98.8146 13.9197 98.5131 13.7194C97.6764 13.1628 96.0865 12.4822 94.5219 12.4822C91.6833 12.4827 89.5694 14.4263 89.593 18.0022C89.6151 21.4337 91.6398 23.3195 94.5317 23.3878C96.0435 23.4257 97.5082 22.558 98.2962 21.8472C98.5437 21.6316 98.7997 21.7395 99.0825 21.9602C99.6374 22.5266 100.433 23.401 100.875 24.0029C101.164 24.3373 100.947 24.6646 100.843 24.796C99.6461 26.309 97.3336 27.5824 94.2732 27.5997C87.8652 27.6445 84.6864 23.1453 84.6568 17.9175L84.6564 17.9168ZM115.245 27.3648C115.546 27.3423 118.755 26.8999 119.741 26.6746C119.985 26.619 120.072 26.4136 119.935 26.2102C119.385 25.3864 117.939 23.047 116.424 20.9527C115.031 19.027 113.562 17.3334 113.087 16.6818C112.971 16.5235 112.977 16.3676 113.104 16.2447C114.007 15.3619 117.787 11.6616 119.208 10.1334C119.758 9.53898 119.427 9.28325 118.96 9.14435C118.058 8.87567 116.598 8.54078 115.767 8.3659C115.417 8.29201 114.996 8.31792 114.69 8.63218C113.269 9.9552 108.933 14.3009 107.638 15.5999C107.405 15.8343 107.27 15.7822 107.269 15.4473C107.258 12.9428 107.208 2.22004 107.119 0.456339C107.113 0.223161 106.832 0.0461189 106.673 0.0377226C105.86 -0.00473869 103.803 -0.0169735 102.993 0.0305256C102.766 0.0561943 102.549 0.287213 102.529 0.482487C102.343 3.30269 102.609 24.0051 102.72 26.9011C102.728 27.1105 102.884 27.2729 103.083 27.2847C103.891 27.3315 105.891 27.3283 106.824 27.3108C107.284 27.3108 107.34 26.9884 107.34 26.9884L107.409 21.4332C107.409 21.4332 107.456 21.1861 107.533 21.1045C107.862 20.7507 108.773 19.7762 109.161 19.3996C109.254 19.3092 109.401 19.3156 109.496 19.4435C109.957 20.0648 111.273 22.0847 112.492 23.8887C113.612 25.5459 114.658 27.0167 114.731 27.1206C114.9 27.3605 115.097 27.3701 115.245 27.3655V27.3648H115.245ZM60.6554 27.3456C60.9377 27.355 63.0794 27.3526 64.0283 27.3514C64.3478 27.3576 64.5138 27.116 64.5244 26.9028C64.726 22.8423 64.6397 3.51019 64.5124 0.457538C64.5018 0.193654 64.3887 0.0945778 64.2083 0.0705884C63.3939 -0.0383237 61.0794 -0.0128951 60.3376 0.18094C60.1925 0.218603 60.107 0.328714 60.1024 0.470252C59.9208 8.33879 60.0433 26.4796 60.0817 26.8231C60.1199 27.1671 60.3001 27.3336 60.6559 27.3456H60.6554V27.3456Z"
                                fill="#ADB5BD"></path>
                            <path
                                d="M3.01795 19.1999C1.69499 19.21 0.574302 18.424 0.161088 17.1974C0.145759 17.151 0.131468 17.1044 0.118226 17.0574C-0.332072 15.4865 0.541072 13.8431 2.10604 13.3169L27.2071 4.93356C27.5051 4.84761 27.8136 4.8027 28.1238 4.80009C29.4819 4.78953 30.6335 5.59274 31.0568 6.84534L31.0943 6.96633C31.5639 8.60253 30.3972 10.063 28.9994 10.5311C28.9984 10.5318 28.7441 10.6175 4.0375 19.0268C3.7091 19.1384 3.36489 19.1968 3.01795 19.1999V19.1999Z"
                                fill="#ADB5BD"></path>
                            <path
                                d="M7.22233 31.7995C5.89266 31.809 4.7712 31.0404 4.36391 29.8411C4.34845 29.7955 4.33404 29.7495 4.32069 29.7032C3.86538 28.1265 4.73517 26.4793 6.30114 25.9566L31.3346 17.5651C31.6581 17.4579 31.9921 17.4032 32.3281 17.4001C33.6613 17.3901 34.8327 18.1977 35.246 19.4106L35.2845 19.5368C35.5263 20.3752 35.3834 21.3174 34.9026 22.061C34.5443 22.6139 33.4142 23.1006 33.4142 23.1006L8.28568 31.6197C7.94297 31.7348 7.58413 31.7956 7.22233 31.8V31.7995V31.7995Z"
                                fill="#ADB5BD"></path>
                            <path
                                d="M28.179 31.7999C27.5347 31.8061 26.9049 31.6054 26.3799 31.2263C25.8549 30.8473 25.4617 30.3094 25.2566 29.6897L16.9602 4.69099L16.9187 4.55068C16.4692 2.95651 17.3337 1.29364 18.883 0.763865C19.193 0.658151 19.5135 0.602996 19.8362 0.600093C20.3155 0.596465 20.7793 0.706048 21.2162 0.924975C21.5761 1.10551 21.8972 1.35643 22.1611 1.66331C22.425 1.9702 22.6266 2.32698 22.7541 2.71315L31.0497 27.7097L31.0738 27.79C31.5397 29.4451 30.6772 31.109 29.1279 31.6388C28.8218 31.7425 28.5016 31.7968 28.179 31.7999V31.7999Z"
                                fill="#ADB5BD"></path>
                            <path
                                d="M15.5714 35.9998C14.9271 36.0061 14.2974 35.8051 13.7725 35.4257C13.2476 35.0463 12.8545 34.508 12.6496 33.8878L4.36057 8.8882C4.23213 8.50252 4.17989 8.09491 4.20685 7.6887C4.2338 7.2825 4.33941 6.88568 4.51763 6.52097C4.69585 6.15625 4.94319 5.8308 5.24548 5.56325C5.54777 5.29569 5.89907 5.09129 6.27928 4.96174C6.58558 4.8578 6.90605 4.80327 7.22899 4.80014C7.87303 4.79368 8.50256 4.9944 9.02731 5.3735C9.55206 5.7526 9.9451 6.29063 10.1501 6.91046L18.4393 31.9111C18.5678 32.2969 18.6201 32.7047 18.593 33.1111C18.566 33.5175 18.4602 33.9145 18.2818 34.2793C18.1033 34.6441 17.8557 34.9696 17.5531 35.2371C17.2506 35.5047 16.899 35.7089 16.5185 35.8382C16.2128 35.9422 15.8928 35.9967 15.5704 35.9996H15.5714V35.9998Z"
                                fill="#ADB5BD"></path>
                            <path d="M24.1267 26.4L30 24.3684L28.08 18.6L22.2 20.6103L24.1267 26.4V26.4Z"
                                fill="#ADB5BD"></path>
                            <path d="M11.5372 30.6L17.4001 28.58L15.4688 22.8L9.6001 24.7997L11.5372 30.6V30.6Z"
                                fill="#ADB5BD"></path>
                            <path d="M19.9127 13.8L25.8 11.7527L23.8982 6L18 8.01266L19.9127 13.8Z" fill="#ADB5BD">
                            </path>
                            <path d="M7.33018 18L13.1999 15.9718L11.2805 10.2L5.3999 12.1937L7.33018 18V18Z"
                                fill="#ADB5BD"></path>
                        </svg>
                    </li>
                    <li class="mx-xl-4 mx-3 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <svg xmlns="http://www.w3.org/2000/svg" width="121" height="36" viewBox="0 0 121 36" fill="none"
                            class="injected-svg icon icon-lg opacity-20" data-src="assets/img/logos/brand/spotify.svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path
                                d="M17.9999 0C8.05904 0 0 8.05882 0 17.9997C0 27.9416 8.05904 36 17.9999 36C27.9412 36 35.9998 27.9416 35.9998 17.9997C35.9998 8.05946 27.9416 0.00085911 17.9997 0.00085911L17.9999 0V0ZM26.2545 25.9607C25.9313 26.491 25.2404 26.6571 24.7119 26.334C20.485 23.7507 15.1648 23.1671 8.89923 24.5984C8.29546 24.7368 7.69363 24.3583 7.55607 23.7547C7.41786 23.151 7.79465 22.5491 8.39993 22.4116C15.2566 20.844 21.138 21.5187 25.8825 24.4178C26.4112 24.7424 26.5789 25.4324 26.2543 25.9611L26.2545 25.9607V25.9607ZM28.4577 21.0602C28.0506 21.7208 27.1869 21.928 26.5273 21.5224C21.69 18.5489 14.3138 17.6876 8.59102 19.4248C7.84881 19.6489 7.06493 19.2307 6.83967 18.4898C6.61613 17.7476 7.03462 16.9652 7.77553 16.7395C14.3126 14.756 22.4391 15.7168 27.9953 19.1311C28.6552 19.5374 28.8637 20.4015 28.4575 21.0605L28.4577 21.0602ZM28.6468 15.9567C22.8447 12.5109 13.2742 12.1941 7.73531 13.8751C6.84589 14.1449 5.9053 13.6428 5.63577 12.7534C5.36623 11.8635 5.8679 10.9236 6.75798 10.6532C13.1162 8.72299 23.686 9.09591 30.3651 13.0609C31.1651 13.5357 31.4275 14.569 30.9534 15.3679C30.4805 16.1679 29.4445 16.4317 28.647 15.9567H28.6468V15.9567ZM48.9718 16.617C45.8639 15.8758 45.3106 15.3557 45.3106 14.2627C45.3106 13.2301 46.2828 12.5352 47.7285 12.5352C49.1299 12.5352 50.5195 13.0629 51.9764 14.1492C52.0205 14.1821 52.0757 14.1952 52.1301 14.1866C52.1845 14.1784 52.2326 14.1486 52.2645 14.1036L53.782 11.9645C53.8443 11.8764 53.8273 11.755 53.7433 11.6877C52.0093 10.2964 50.0568 9.61994 47.7745 9.61994C44.4189 9.61994 42.0749 11.6337 42.0749 14.515C42.0749 17.6048 44.0969 18.6989 47.591 19.5434C50.5649 20.2284 51.0668 20.8023 51.0668 21.8282C51.0668 22.9651 50.0519 23.6718 48.4185 23.6718C46.6044 23.6718 45.1247 23.0607 43.4695 21.6273C43.4284 21.5918 43.3721 21.5757 43.3201 21.5787C43.2653 21.5832 43.2152 21.6086 43.1804 21.6505L41.4789 23.6754C41.4075 23.7595 41.4166 23.885 41.4991 23.9577C43.425 25.677 45.7936 26.5851 48.3497 26.5851C51.9657 26.5851 54.3023 24.6094 54.3023 21.5514C54.3088 18.9699 52.7634 17.5406 48.9782 16.6198L48.9718 16.617V16.617ZM62.483 13.5519C60.9157 13.5519 59.6301 14.1692 58.57 15.4341V14.0103C58.57 13.8979 58.4789 13.8064 58.3667 13.8064H55.5838C55.4714 13.8064 55.3805 13.8979 55.3805 14.0103V29.8305C55.3805 29.9429 55.4714 30.0345 55.5838 30.0345H58.3667C58.4789 30.0345 58.57 29.9429 58.57 29.8305V24.8368C59.6303 26.0267 60.9161 26.6081 62.483 26.6081C65.3953 26.6081 68.3434 24.3663 68.3434 20.0807C68.3477 15.7942 65.3987 13.5517 62.4862 13.5517L62.483 13.5519ZM65.1075 20.0807C65.1075 22.2631 63.7632 23.7859 61.8384 23.7859C59.9355 23.7859 58.5001 22.1938 58.5001 20.0807C58.5001 17.9679 59.9355 16.3756 61.8384 16.3756C63.7321 16.3754 65.1077 17.9333 65.1077 20.0805L65.1075 20.0807V20.0807ZM75.8997 13.5519C72.1492 13.5519 69.2109 16.4398 69.2109 20.1274C69.2109 23.7747 72.129 26.6324 75.8537 26.6324C79.6176 26.6324 82.5648 23.7541 82.5648 20.0807C82.5648 16.4201 79.6373 13.5523 75.8995 13.5523L75.8997 13.5519V13.5519ZM75.8997 23.8076C73.9048 23.8076 72.4009 22.2048 72.4009 20.0797C72.4009 17.9455 73.8528 16.3968 75.8537 16.3968C77.8615 16.3968 79.3755 17.9997 79.3755 20.1263C79.3755 22.26 77.9139 23.8076 75.8999 23.8076H75.8997V23.8076ZM90.5738 13.8064H87.5115V10.6755C87.5115 10.5633 87.4208 10.4718 87.3084 10.4718H84.526C84.4133 10.4718 84.322 10.5633 84.322 10.6755V13.8064H82.984C82.872 13.8064 82.7813 13.8979 82.7813 14.0104V16.402C82.7813 16.5142 82.872 16.606 82.984 16.606H84.322V22.7944C84.322 25.2952 85.5667 26.5632 88.0216 26.5632C89.0198 26.5632 89.8479 26.3571 90.6284 25.9145C90.6918 25.879 90.7311 25.8107 90.7311 25.738V23.4605C90.7311 23.3902 90.6946 23.3238 90.6344 23.2871C90.5738 23.249 90.4984 23.2471 90.4362 23.2778C89.9002 23.5476 89.3819 23.672 88.8027 23.672C87.9098 23.672 87.5115 23.2666 87.5115 22.3581V16.6071H90.5738C90.6862 16.6071 90.7767 16.5155 90.7767 16.4031V14.0117C90.781 13.8992 90.6907 13.8077 90.5768 13.8077L90.5738 13.8064V13.8064ZM101.244 13.8186V13.4341C101.244 12.3028 101.677 11.7984 102.65 11.7984C103.23 11.7984 103.696 11.9136 104.218 12.0877C104.282 12.1079 104.349 12.0978 104.402 12.0593C104.455 12.0208 104.486 11.9592 104.486 11.8938V9.54879C104.486 9.45915 104.428 9.37984 104.342 9.3534C103.79 9.18939 103.085 9.0211 102.029 9.0211C99.4584 9.0211 98.0998 10.4685 98.0998 13.2054V13.7943H96.7628C96.6506 13.7943 96.5587 13.8859 96.5587 13.9981V16.402C96.5587 16.5142 96.6506 16.606 96.7628 16.606H98.0998V26.1513C98.0998 26.2637 98.1905 26.3553 98.3027 26.3553H101.086C101.198 26.3553 101.29 26.2637 101.29 26.1513V16.6066H103.888L107.868 26.1496C107.416 27.1523 106.972 27.3518 106.365 27.3518C105.875 27.3518 105.359 27.2054 104.831 26.9165C104.781 26.8892 104.722 26.8847 104.669 26.9013C104.616 26.92 104.571 26.9595 104.548 27.0111L103.605 29.0804C103.56 29.1782 103.599 29.293 103.693 29.3437C104.677 29.8769 105.566 30.1046 106.665 30.1046C108.72 30.1046 109.855 29.1474 110.857 26.5724L115.684 14.0972C115.709 14.0344 115.701 13.9635 115.663 13.9078C115.625 13.8526 115.563 13.8193 115.495 13.8193H112.599C112.512 13.8193 112.434 13.8745 112.406 13.956L109.438 22.4329L106.187 13.9504C106.158 13.8715 106.082 13.8193 105.997 13.8193H101.243L101.244 13.8186V13.8186ZM95.0575 13.8064H92.2746C92.1622 13.8064 92.0707 13.8979 92.0707 14.0104V26.1513C92.0707 26.2638 92.1622 26.3553 92.2746 26.3553H95.0575C95.1697 26.3553 95.2615 26.2638 95.2615 26.1513V14.0112C95.2615 13.9844 95.2563 13.9578 95.246 13.933C95.2358 13.9082 95.2208 13.8857 95.2018 13.8668C95.1828 13.8478 95.1603 13.8328 95.1355 13.8226C95.1107 13.8123 95.0841 13.8071 95.0573 13.8072L95.0575 13.8064ZM93.6819 8.27828C92.5794 8.27828 91.6848 9.17071 91.6848 10.2732C91.6848 11.3762 92.5796 12.2698 93.6819 12.2698C94.7839 12.2698 95.6776 11.3762 95.6776 10.2732C95.6776 9.17093 94.7835 8.27828 93.683 8.27828H93.6819V8.27828ZM118.061 17.7099C116.959 17.7099 116.102 16.8254 116.102 15.7514C116.102 14.6773 116.97 13.7827 118.071 13.7827C119.172 13.7827 120.029 14.667 120.029 15.7402C120.029 16.8143 119.161 17.7099 118.06 17.7099H118.061V17.7099ZM118.071 13.9775C117.068 13.9775 116.309 14.7749 116.309 15.7514C116.309 16.7274 117.063 17.5141 118.061 17.5141C119.064 17.5141 119.824 16.7173 119.824 15.7402C119.824 14.7642 119.07 13.9775 118.072 13.9775H118.071V13.9775ZM118.506 15.9416L119.059 16.7171H118.592L118.094 16.0057H117.665V16.7171H117.274V14.6614H118.191C118.668 14.6614 118.982 14.9058 118.982 15.3172C118.984 15.6542 118.789 15.8601 118.507 15.9416H118.506V15.9416ZM118.175 15.0141H117.665V15.6643H118.175C118.429 15.6643 118.581 15.5399 118.581 15.3389C118.581 15.1274 118.428 15.0141 118.175 15.0141H118.175V15.0141Z"
                                fill="#ADB5BD"></path>
                        </svg>
                    </li>
                    <li class="mx-xl-4 mx-3 mb-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="169" height="36" viewBox="0 0 169 36" fill="none"
                            class="injected-svg icon icon-lg opacity-20" data-src="assets/img/logos/brand/target.svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M41.6843 9.70153H49.1328V30.6888H55.3223V9.70153H62.7717V4.38867H41.6843V9.70153ZM57.1064 30.6888H63.6109L65.4645 25.3768H73.0519L74.8368 30.6888H81.2367L72.2135 4.38958H65.4464L57.1064 30.6888V30.6888ZM71.2651 20.5969H66.7477L69.0181 14.267L71.2651 20.5969ZM81.7619 30.6888H87.7412V21.2212H92.0438C92.9517 21.2212 94.0057 21.0556 94.5444 21.7957C95.0831 22.5358 95.0326 23.8242 95.0137 25.1561C94.9929 26.4879 94.9992 27.8613 95.3006 28.8412C95.6002 29.8211 96.1398 30.6888 96.9222 30.6888H102.324C101.704 30.0349 101.264 29.2304 101.048 28.3544C100.835 27.4732 100.865 26.5132 100.904 25.4492C100.942 24.3861 100.988 23.2198 100.865 22.2635C100.743 21.3053 100.454 20.558 99.9814 19.9662C99.5028 19.374 98.8591 18.938 98.1323 18.714C99.273 17.8934 100.23 16.8013 100.812 15.6432C101.392 14.486 101.596 13.2636 101.673 12.053C101.751 10.8425 101.7 9.64453 101.319 8.50632C100.936 7.36811 100.224 6.28871 99.2658 5.5486C98.2975 4.80374 97.113 4.39672 95.8926 4.38958H81.761V30.6888H81.7619V30.6888ZM94.6861 10.2091C95.4053 10.6859 95.8439 11.5609 95.833 12.4466C95.8222 12.8991 95.7055 13.3426 95.4925 13.7416C95.2795 14.1406 94.9761 14.4839 94.6067 14.7439C93.8559 15.2614 92.8479 15.151 91.9103 15.151H87.7367V9.95396H92.1395C93.0184 9.95396 93.9651 9.7323 94.6861 10.2091V10.2091ZM104.806 9.04376C103.907 10.3756 103.244 11.939 102.884 13.9386C102.525 15.9382 102.467 18.3747 102.791 20.501C103.113 22.6281 103.818 24.444 104.675 25.8518C105.531 27.2597 106.539 28.2576 107.637 29.1099C108.736 29.9622 109.92 30.668 111.256 31.0643C112.603 31.4547 114.018 31.5522 115.405 31.3502C116.74 31.1511 117.924 30.6653 118.847 30.2445C119.768 29.8229 120.43 29.4664 121.05 29.0484L122.1 30.6879H125.983L125.974 15.9427H114.853V21.0873H120.068C120.271 21.9749 120.149 22.9466 119.7 23.7555C119.25 24.5634 118.472 25.2085 117.368 25.6645C116.264 26.1196 114.837 26.3847 113.446 25.9622C112.057 25.5397 110.707 24.4295 109.818 23.1583C108.93 21.8889 108.501 20.4575 108.312 18.8733C108.126 17.2899 108.179 15.5527 108.557 14.0381C108.935 12.5235 109.639 11.2297 110.522 10.2978C111.407 9.36586 112.472 8.79676 113.813 8.55337C115.153 8.30998 116.77 8.39413 117.847 8.99671C118.926 9.59929 119.465 10.7194 119.776 11.4315C120.086 12.1435 120.169 12.4466 120.179 12.7579H125.766C125.683 11.5943 125.353 10.457 124.687 9.15776C124.02 7.8585 123.018 6.39909 121.594 5.37036C120.17 4.34163 118.325 3.74537 116.614 3.51918C115.041 3.30347 113.44 3.40966 111.908 3.83133C110.492 4.22491 109.231 4.86821 108.034 5.7386C106.838 6.61171 105.704 7.71193 104.806 9.04376V9.04376ZM146.651 30.6888V25.3768H134.324V19.275L144.918 19.2533L144.92 14.4362H134.324V9.70244H146.651V4.38958L128.157 4.3932L128.187 30.6888H146.651V30.6888ZM147.543 9.70153H154.994V30.6888H161.183V9.70153H168.632V4.38867H147.543V9.70153V9.70153ZM164.169 29.5089H164.51V29.4429C164.46 29.4438 164.391 29.4275 164.362 29.3615L164.103 28.9308C164.349 28.8521 164.448 28.5345 164.193 28.3653C164.082 28.3056 163.986 28.2965 163.844 28.2929H163.215V28.3517C163.285 28.3345 163.412 28.387 163.385 28.4784C163.38 28.7833 163.4 29.0692 163.371 29.3931C163.317 29.4619 163.291 29.4357 163.221 29.4429V29.5089H163.836V29.4429C163.77 29.4592 163.639 29.4085 163.666 29.3162V28.9308H163.836L164.169 29.5089ZM163.665 28.8702V28.3734C163.815 28.3662 164.047 28.3961 164.047 28.5743C164.06 28.6458 164.047 28.8521 163.872 28.8656C163.809 28.8756 163.733 28.8693 163.665 28.8702V28.8702ZM163.813 30.0581C164.029 30.0581 164.264 29.9975 164.488 29.8374C165.037 29.3814 165.119 28.8123 164.749 28.2287C164.292 27.6722 163.723 27.5899 163.132 27.9654C162.579 28.4205 162.498 28.9896 162.87 29.5741C163.134 29.927 163.48 30.0545 163.813 30.0581V30.0581ZM163.813 29.9315C163.622 29.9315 163.413 29.8772 163.214 29.7351C162.722 29.328 162.648 28.8222 162.981 28.2956C163.384 27.8043 163.892 27.7329 164.412 28.0649C164.904 28.4703 164.978 28.9796 164.647 29.4999C164.412 29.8139 164.103 29.9288 163.813 29.9315V29.9315Z"
                                fill="#ADB5BD"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M20.8416 12.9132C19.9258 12.4013 18.8682 12.1263 17.8105 12.1263C16.7528 12.1263 15.6951 12.4013 14.7793 12.9132C13.8586 13.4303 13.0933 14.1716 12.5595 15.0636C12.0293 15.9571 11.7493 16.9694 11.7473 18C11.7473 19.0255 12.0311 20.0502 12.5595 20.9373C13.0888 21.8245 13.8627 22.575 14.7793 23.0869C15.696 23.5987 16.7528 23.8737 17.8105 23.8737C18.8682 23.8737 19.9258 23.5996 20.8416 23.0869C21.7574 22.5741 22.5321 21.8245 23.0614 20.9373C23.5918 20.0435 23.8718 19.031 23.8736 18C23.8736 16.9754 23.5907 15.9508 23.0614 15.0636C22.5276 14.1716 21.7624 13.4303 20.8416 12.9132V12.9132Z"
                                fill="#ADB5BD"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M33.5889 8.99933C32.0192 6.27967 29.72 3.98064 27.0011 2.41095C24.2822 0.841259 21.1409 0 18.0005 0C14.86 0 11.7205 0.841259 9.00068 2.41095C6.26746 3.99497 3.99607 6.26625 2.41198 8.99933C0.841303 11.719 0 14.8593 0 17.9995C0 21.1398 0.841303 24.2801 2.41198 26.9998C3.99554 29.7333 6.26705 32.0047 9.00068 33.5881C11.7387 35.1636 14.8415 35.9951 18.0005 36C21.1409 36 24.2813 35.1587 27.0011 33.5881C29.7209 32.0185 32.0192 29.7194 33.5889 26.9998C35.1587 24.2801 36 21.1398 36 17.9995C36 14.8593 35.1587 11.7181 33.5889 8.99933ZM28.3145 23.9516C27.2706 25.7537 25.773 27.2512 23.9708 28.2951C22.1651 29.3332 20.1194 29.8812 18.0366 29.8846C15.9667 29.8846 13.8968 29.3304 12.1032 28.2951C10.3105 27.2597 8.79486 25.7442 7.75948 23.9516C6.7241 22.1589 6.16986 20.0883 6.16986 18.0185C6.16986 15.9478 6.7241 13.8772 7.75948 12.0845C8.79486 10.2919 10.3105 8.77547 12.1032 7.74104C13.9084 6.70263 15.954 6.15463 18.0366 6.15149C20.1073 6.15149 22.1772 6.70571 23.9708 7.74104C25.7728 8.7852 27.2703 10.2826 28.3145 12.0845C29.3534 13.8899 29.9017 15.9356 29.9051 18.0185C29.9012 20.101 29.3529 22.1463 28.3145 23.9516V23.9516Z"
                                fill="#ADB5BD"></path>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}
<!-- Footer -->
@include('includes.dashboard.footer')
<!-- End Footer -->
</div>

<div class="cursor">
    <div class="cursor--small"></div>
</div>

@endsection

@section('js')

@endsection
