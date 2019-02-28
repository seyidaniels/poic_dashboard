@extends('layouts.admin')


@section('content')

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">

            <!-- ALERTS -->
            <div id="alerts">

              <!-- Header -->
              <div class="header mt-md-6">
                <div class="header-body">

                  <!-- Title -->
                  <h1 class="header-title">
                    Welcome, {{Auth::user()->firstname}}
                  </h1>

                </div>
              </div>

            </div>

            <div class="card">
              <div class="card-body text-center">
                <div class="row">
          <div class="col-12 col-lg-6 col-xl">

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Budget
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      $24,500
                    </span>

                    <!-- Badge -->
                    <span class="badge badge-soft-success mt--1">
                      +3.5%
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Total Hours
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      763.5
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Progress
                    </h6>

                    <div class="row align-items-center no-gutters">
                      <div class="col-auto">

                        <!-- Heading -->
                        <span class="h2 mr-2 mb-0">
                          84.5%
                        </span>

                      </div>
                      <div class="col">

                        <!-- Progress -->
                        <div class="progress progress-sm">
                          <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                      </div>
                    </div> <!-- / .row -->

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-clipboard text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

          </div>
          <div class="col-12 col-lg-6 col-xl">

            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">
                      Effective Hourly
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                      $85.50
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Icon -->
                    <span class="h2 fe fe-clock text-muted mb-0"></span>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

          </div>
        </div>
              </div>
            </div>


        </div> <!-- / .row -->
      </div>
    </div> <!-- / .main-content -->
    </div>


@endsection
