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
                      Registered Users
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                     {{$users}}
                    </span>
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
                      Teams
                    </h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">
                     {{$teams}}
                    </span>

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
                      SUBMITTED
                    </h6>



                        <!-- Heading -->
                        <span class="h2 mr-2 mb-0">
                          {{$projects}}
                        </span>

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
