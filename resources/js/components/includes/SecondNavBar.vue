<template>
  <nav class="navbar navbar-expand-lg navbar-light hidden-xs hidden-sm" id="topnav">
    <div class="container">
      <div class="mr-auto">{{moment().format('MMMM Do YYYY, h:mm:ss a')}}</div>

      <div class="d-none d-lg-block">
        <div class="navbar-user">
          <!-- Dropdown -->
          <div class="dropdown mr-4">
            <!-- Toggle -->
            <a
              href="#"
              class="text-muted"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <span class="icon active">
                <i class="fe fe-bell"></i>
              </span>
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h5 class="card-header-title">Notifications</h5>
                  </div>
                  <div class="col-auto">
                    <!-- Link -->
                    <router-link to="/notifications" class="small">View all</router-link>
                  </div>
                </div>
                <!-- / .row -->
              </div>
              <!-- / .card-header -->
              <div class="card-body">
                <!-- List group -->
                <div class="list-group list-group-flush my--3">
                  <a
                    class="list-group-item px-0"
                    href="#"
                    v-for="(msg , index) in notifications"
                    :key="index"
                  >
                    <div class="row">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <div class="avatar avatar-sm">
                          <img
                            src="https://image.flaticon.com/icons/svg/1040/1040216.svg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          >
                        </div>
                      </div>
                      <div class="col ml--2">
                        <!-- Content -->
                        <div class="small text-muted">
                          <strong
                            class="text-body"
                          >{{msg.data.message ? msg.data.message : msg.data}}</strong>.
                        </div>
                      </div>
                      <div class="col-auto">
                        <small class="text-muted">{{moment(msg.created_at).fromNow()}}</small>
                      </div>
                    </div>
                    <!-- / .row -->
                  </a>
                </div>
              </div>
            </div>
            <!-- / .dropdown-menu -->
          </div>

          <!-- Dropdown -->
          <div class="dropdown">
            <!-- Toggle -->
            <a
              href="#"
              class="avatar avatar-sm avatar-online dropdown-toggle"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <img
                src="https://image.flaticon.com/icons/svg/145/145849.svg"
                alt="..."
                class="avatar-img rounded-circle"
              >
            </a>

            <!-- Menu -->
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item">Profile</a>
              <a href="#" class="dropdown-item">Settings</a>
              <hr class="dropdown-divider">
              <a href="#" @click="logout" class="dropdown-item">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / .container -->
  </nav>
</template>
<script>
import { mapGetters } from "vuex";
import handleError from "../../error";

export default {
  data: function() {
    return {
      notifications: []
    };
  },
  watch: {
    notifications() {
      // this.notifications = this.$store.getters.notifications
    }
  },
  created() {
    if (this.$store.getters.isAuthenticated) {
      axios.defaults.headers.common["Authorization"] =
        "Bearer " + localStorage.getItem("token");
      axios
        .get(this.$store.state.serverURI + "get-notifications")
        .then(response => {
          if (response.data.success) {
            this.notifications = response.data.notifications;
            this.$store.dispatch("SET_NOTIFICATIONS", this.notifications);
          }
        })
        .catch(error => {
          handleError(error);
        });
    }
  },
  methods: {
    logout() {
      axios
        .post(this.$store.state.serverURI + "logout", {
          token: localStorage.getItem("token")
        })
        .then(response => {
          if (response.data.success) {
            this.$store.dispatch("SET_TOKEN", null);
            this.$store.dispatch("SET_USER", null);
            localStorage.removeItem("user");
            localStorage.removeItem("token");
            location.href = "/dashboard";
          }
        })
        .catch(error => {
          handleError(error);
        });
    }
  }
};
</script>

