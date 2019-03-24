@extends('layouts.index')
@section('content')
<div class="wrapper">
    <div class="page-header page-header-custom clear-filter">
        <div class="page-header-image bg-overlay"  id="particles-js" data-parallax="true">
        </div>
        <div class="container">
            <div class="content-center brand text-left">
                <div class="row">
                    <div class="col-md-8" style="margin-top: 80px;" >
                        <h3 class="m-4 poic-heading">Professor Ogundipe <span class="text-orange">Innovative</span> Challenge</h3>
                        <h5 class="text-white">Do you have an innovative idea or technology-driven solution?</h5>

                         <h3 id="countdown" class=" poic-heading mt-4"  style="font-size: 25px;
" ></h3>
                        <!-- <a class=" btn btn-lg btn-orange text-left" href="{{URL('dashboard')}}"> Apply Now
                            <span class="pull-right fa fa-chevron-right"></span>
                        </a>
                        <a class=" text-orange text-left ml-4" href="{{URL('dashboard')}}"> Learn More
                            </a> -->
                    </div>
                    <div class="col-md-4">
                        <img  src="/landing/assets/img/home-head.png" class="img-fluid img-md land-illust img-responsive" alt="">
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="main">
        <div class="about" id="about">
                <div class="container">
                        <div class="row">
                                <div class="col-md-12">
                                   <div class="bio-border">
                                       <div class="row">
                                           <div class="col-md-4 ">
                                                <h2 class="font-weight-bold mt-1 ">Who is Professor Ogundipe?</h2>
                                                <img src="dashboard_assets/assets/img/covers/aut-size-cover.png"  class="img-fluid img-responsive" alt="">
                                           </div>

                                           <div class="col-md-8">

                                                <p class="text-justify"> Professor Oluwatoyin Temitayo Ogundipe (born May 31, 1960) is a Nigerian academic, author and a Professor of botany. </p>
                                                <p class="text-justify"> He is the 12th Vice-Chancellor of University of Lagos. He attended the University of Ife (now Obafemi Awolowo University) where he obtained a Bachelor of science (B.Sc.) degree in Botany. He holds a master's degree in Botany from the University of Ife and Doctorate degree (Ph.D.) from the same University. Thereafter, he obtained a master's degree in Business Administration from the University of Lagos and bagged a certificate of attendance from University of Reading in 1998.</p>
                                                   <p class="text-justify"> Professor Ogundipe began his academic career at the University of Lagos as a lecturer where he rose to the rank of professor of Botany in 2002. He was Dean, School of Postgraduate Studies from August 2007 to July 2011 and Director, Academic Planning Unit April 2012 to April 2016. He was appointed as the vice chancellor of the University of Lagos in November 2017.</p>
                                                    <p class="text-justify"> Until his appointment in November, he was the Deputy Vice Chancellor of the University of Lagos. </p>
                                                      <p class="text-justify"> Toyin Ogundipe is married with children</p>

                                           </div>
                                       </div>



                                   </div>
                                </div>

                            </div>
                </div>

        </div>

        <div class="about-poic">

             <div class="container-fluid">
                    <div class="row">
                            <div class="col-md-4">
                               <img src="/landing/assets/img/layer.png" alt="">
                            </div>
                            <div class="col-md-3"></div>
                            <div class="col-md-5 mt-4">
                                   <h3 class="mb-0 font-weight-bold text-right underline"  > About the challenge </h3>
                                   <div class="container mt-4">
                                       <p class="text-justify">
                                            Over the years, in a bid to make sure their idea come to life, Nigerian students become outbound thereby sourcing out their potentials. A staggering amount of 170,000+ students Left the country between year 2015-2018.
                                       </p>
                                       <p class="text-justify">
                                            Now narrowing it down to our faculty. Early November, after it was discovered that the annual Faculty Of Science Lecture wouldn’t hold for 2018/19 academic session. We were tasked with the challenge of creating an engaging program and at the same time solving. a societal problem. A lot of thinking went into this process.
                                       </p>
                                       <p class="text-justify">
                                            We reiterated a couple of times before finally concluding on an innovation challenge. This will help in engaging the minds of students and at the same time broaden their horizon when it comes to thinking. The Power of an innovative mind is one that can’t be overemphasized.
                                       </p>
                                   </div>
                            </div>
                        </div>
             </div>

        </div>

        <div class="need-cash">
            <div class="container">
                <div class="cash-content text-center text-white">
                    <h3 class="mb-0 font-weight-bold">Got a Ground Breaking Innovative Idea ?</h3>
                    <p>Compete with over 200 Students from Nigerian Tertiary Institutions to win the grand prize of  <span class="text-orange">3 Million Naira</span> </p>
                     <a class=" btn btn-lg btn-orange text-center" href="{{URL('dashboard')}}">See Rules and Guidlines
                            <span class="pull-right fa fa-chevron-right"></span>
                        </a>
                </div>
            </div>
        </div>

         <div class="questions">
            <div class="container">
                <div class="sponsor text-center text-white" style="padding-bottom: 100px;
    padding-top: 20px;">
                    <h3 class="font-weight-bold">Lead Sponsor </h3>
                    <a href="http://fcmb.com">
                    <img class="logo" class="img-fluid img-white" style="width: 25%;" src="https://nigerialogos.com/logos/fcmb/fcmb.svg
" alt=""></a>
                </div>
            </div>
        </div>

        <div class="need-cash">
            <div class="container">
                <div class="questions-content text-center">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mt-5 mb-0 font-weight-bold">got Inquiries?</h3>
                            <p>For Sponsorship and Contact details, we are ready to heed your calls</p>
                            <a class=" btn btn-lg btn-orange text-center" href="mailto:poic@unilag.edu.ng?Subject=Enquiries About POIC" target="_top">Message
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>




 </div>
@endsection
