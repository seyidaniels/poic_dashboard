<template>
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="#">
            <img src="landing/assets/img/logo-white.png" class="navbar-brand-img
            mx-auto" alt="...">
          </a>

          <!-- User (xs) -->
          <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

              <!-- Toggle -->
              <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="https://image.flaticon.com/icons/svg/145/145849.svg" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="#" @click="logout" class="dropdown-item">Logout</a>
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
                <router-link class="nav-link" to="/" >
                  <i class="fe fe-home"></i> Dashboard
                </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/my-team" >
                  <i class="fe fe-file"></i> My Team
                </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/project" >
                  <i class="fe fe-user"></i> My Project
                </router-link>
              </li>
            </ul>

          </div> <!-- / .navbar-collapse -->

        </div>
      </nav>


</template>
<script>
export default {
    methods: {
logout () {
    axios.post (this.$store.state.serverURI + 'logout', {'token': localStorage.getItem('token')}).then (response => {
        if (response.data.success) {
            this.$store.dispatch("SET_TOKEN", null);
            this.$store.dispatch("SET_USER", null);
            localStorage.removeItem('user')
            localStorage.removeItem('token')
            location.href = '/dashboard'
        }
    }).catch (error => {
        handleError(error)
    })
}
}
}
</script>

