@extends('layouts.newindex')
@section('content')

    <!-- Navbar -->
   @include('includes.dashboard.navbar')
   <!-- End Navbar -->

   <div class="wrapper" style="margin-top: 150px;">
        <div class="container">
            <div class="header text-center">
                <h3 class="title">STEPS TO FOLLOW</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-timeline card-plain" style=" border:none !important;">
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
                                            <p>The applications should be submitted in a written format to the website for
                                                the preliminary stage.</p>
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
                                            <p>Applicants that passed the preliminary stage would be contacted for the
                                                quarter finals and would have to submit a video presentation of their
                                                invention.</p>
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
                                            <p>Applications that scale through the quarter finals into the semi-finals
                                                would be required to make a physical presentation with their invention,
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
            <p style="color:red; font-size:16px !important;">
                    Note: The Executive Committee ("EC") of the Professor Ogundipe Innovative Challenge ("POIC") reserves the right to update these rules at any time. 
                    Every attempt will be made to notify participants of any modification to this document; however, it is ultimately the responsibility of POIC participants to stay 
                    current with POIC Rules and Regulations.
            </p>
            <br>
            <h2>General Requirements</h2>
            <br>
            <div class="row text-justify" style="margin-left:5px;">
                    <p>
                        <b>Team</b>
                    </p>
                    <p>
                        All team members must be an enrolled student of any Tertiary Institution in Nigeria, as either an undergraduate or postgraduate student with a valid means of identification.
                        No less than two and no more than five (5) members to a team.                            
                    </p>
            </div>
            <br>
            <div class="row text-justify" style="margin-left:5px;">
                <p>
                    <b>Idea Pitch</b>
                </p>
                <p>
                    The proposed idea should be suitable for funding at some level to take it further.
                    The proposed idea should not be in violation of any intellectual property rights as far as you are aware.                           
                </p>
                <p>
                    Teams or team members that have received any form of venture capital financing for their idea or a likeness thereof may not participate in the competition. 
                    Competition participants may not contact POIC judges from any round and judges are not to contact any POIC participants during the course of the Competition.
                        
                </p>
            </div>
             <br>
            <div class="row text-justify" style="margin-left:5px;">
                <p>
                    <b>Prizes</b>
                </p>
                <p>
                    There are both monetary and "in-kind" prizes available for the top three teams. The three teams will receive a prize of N1,000, 000 each. In addition, the three winning teams will be entitled to receive certain other non-monetary prizes (to be announced)
                </p>
            </div>
            <br>
            <div class="row text-justify" style="margin-left:5px;">
                <p>
                    <b>Intellectual Property</b>
                </p>
                <p>
                    Ideas have little value. Only when they are built into real companies or turned into issued patents is any real value realizable. This competition is about building ideas into opportunities - the very first step on the way to possibly building any value. 
                    It is customary in these early stages that there is no real intellectual property with any value, unless one of the team members already has at least filed for patents. Investors, in any case, do not sign confidentiality agreements, and entrepreneurs 
                    must learn that trust is more important than legal documents. 
                </p>
                <p>
                    It is more important to build a team with people that you trust and to rely on the integrity of the judges to respect your ideas. In any case you should only disclose information with which 
                    you are comfortable. At this stage, it is not necessary to explain exactly how you do something that might give away "secrets", but to focus on the size of the opportunity and how you are going to take advantage of it.
                </p>
            </div>
            
        </div>
    </div>
    <br><br><br>
    <!-- Footer -->
    @include('includes.dashboard.footer')
    <!-- End Footer --> 
@endsection