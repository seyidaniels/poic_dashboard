


    <!-- NAVIGATION
    ================================================== -->

      <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="#">
            <img src="/landing/assets/img/logo-white.png" class="navbar-brand-img
            mx-auto" alt="...">
          </a>

          <!-- User (xs) -->
          <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

              <!-- Toggle -->
              <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="/landing/assets/img/logo-white.png" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                <hr class="dropdown-divider">
                <a href="sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link " href="/admin/dashboard" >
                  <i class="fe fe-home"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard/projects">
                  <i class="fe fe-file"></i> Projects
                </a>
              </li>

              @if(Auth::user()->is_super())
                 <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard/teams" >
                  <i class="fe fe-user"></i> Teams
                </a>
              </li>
                            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard/communication" >
                  <i class="fe fe-mail"></i> Communication
                </a>
              </li>

                        <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard/admin-management" >
                  <i class="fe fe-mail"></i> Admin Management
                </a>
              </li>


                        <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard/scores" >
                  <i class="fe fe-mail"></i> LeaderBoards
                </a>
              </li>

                   <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard/scores" >
                  <i class="fe fe-gallery"></i> Gallery Images
                </a>
              </li>

              @endif
            </ul>

          </div> <!-- / .navbar-collapse -->

        </div>
      </nav>


      <nav class="navbar navbar-expand-lg navbar-light hidden-xs hidden-sm" id="topnav">
        <div class="container">
          <div class="mr-auto">
            Mon, 12th July '19'
          </div>

          <div class="d-none d-lg-block">
            <div class="navbar-user ">

              <!-- Dropdown -->
              <div class="dropdown">

                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="/landing/assets/img/logo-white.png" alt="..." class="avatar-img rounded-circle">
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="/admin/dashboard/change-password" class="dropdown-item">Change Password</a>
                  <hr class="dropdown-divider">
                  <a href="/admin/logout" class="dropdown-item">Logout</a>
                </div>

              </div>

            </div>
          </div>
        </div> <!-- / .container -->
      </nav>
