<template>
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
                    Welcome, {{this.$store.getters.getUser.firstname}}
                  </h1>

                </div>
              </div>

              <!-- Card -->
              <div class="card">
                <div class="card-body">
                  <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Well done!</h4>
                    <p>Thank you for signing up successfully, we</p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                  </div>
                </div>
              </div>

            </div>

            <div class="card">
              <div class="card-body text-center">
                <div class="row justify-content-center">
                  <div class="col-12 col-xl-10">

                    <img src="dashboard_assets/assets/img/illustrations/happiness.svg"  alt="..." class="img-fluid mt--5 mb-4" style="max-width: 272px;">

                    <h2>
                      We are glad to have you on board
                    </h2>

                    <p class="text-muted">
                      Compete with over 300 students for the grand proze of 3 million naira
                    </p>

                    <router-link to="/create-team" class="btn btn-primary">
                      Create Team
                    </router-link>

                  </div>
                </div>
              </div>
            </div>


        </div> <!-- / .row -->
      </div>
      </div>
</template>
