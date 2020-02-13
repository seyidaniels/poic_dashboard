@extends('layouts.newindex')
@section('content')

   <!-- Navbar -->
   @include('includes.dashboard.navbar')
   <!-- End Navbar -->
    
   <div class="wrapper" style="margin-top: 150px">
    
        <div class="container">
            <div class="header text-center">
                <h3 class="title">Timeline of Events</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-timeline card-plain" style=" border:none !important;">
                        <div class="card-body">
                            <ul class="timeline">
                                <li class="timeline-inverted">
                                    <div class="timeline-badge danger">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-danger">February 1st - April 1st</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Application is Open to all </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-success">April 1st - April 10th</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Application Vetting </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-success">April 10th - May 10th</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Presentation Production</p>
                                        </div>
                                    </div>
                                </li>
    
                                <li>
                                    <div class="timeline-badge warning">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-success">May 10th - May 26th</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Application Vetting II</p>
                                        </div>
                                    </div>
                                </li>
    
    
                                <li>
                                    <div class="timeline-badge warning">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-success">May 26th - June 16th</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Team get Notified of Challenge and Sucessfull team qualifies</p>
                                        </div>
                                    </div>
                                </li>
    
                                <li>
                                    <div class="timeline-badge danger">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-danger">June 10th - June 15th</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Registration and Grand Finale
                                            </p>
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
    <br><br><br>
        <!-- Footer -->
        @include('includes.dashboard.footer')
        <!-- End Footer --> 
@endsection
