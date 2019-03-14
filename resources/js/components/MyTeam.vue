<template >
  <div class="main-content" v-cloak>
    <div class="container-fluid">
      <div v-if="team" class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
          <!-- Header -->
          <div class="header mt-md-5">
            <div class="header-body">
              <div class="row align-items-center">
                <div class="col">
                  <!-- Pretitle -->
                  <h6 class="header-pretitle">TEAM</h6>

                  <!-- Title -->
                  <h1 class="header-title">{{team.name}}</h1>
                  <div class>
                    <div class="badge badge-info">Team head</div>
                    {{team.head.firstname +" " +team.head.lastname}}
                  </div>
                </div>
                <div class="col-auto">
                  <a @click="leaveTeam" class="btn btn-primary ml-2">Leave Team</a>
                </div>
              </div>
              <!-- / .row -->
            </div>
          </div>

          <!-- Content -->
          <div class="card card-body p-5">
            <div class="row">
              <div class="col text-center">
                <!-- Logo -->
                <img
                  :src="team.image"
                  alt="..."
                  class="img-fluid mt-5 mb-4"
                  style="max-width: 272px;"
                >

                <div class="table-responsive justify-content-center">Team Members
                  <table class="table my-4">
                    <thead>
                      <tr>
                        <th class="px-0 bg-transparent border-top-0">
                          <span class="h6">Name</span>
                        </th>
                        <th class="px-0 bg-transparent border-top-0">
                          <span class="h6">email</span>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="(member, index) in team.members" :key="index">
                        <td class="px-0">{{member.firstname}} {{member.lastname}}</td>
                        <td class="px-0">{{member.email}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="row my-4">
                  <div class="badge badge-danger">Created {{moment(team.created_at).fromNow()}}</div>
                </div>

                <!-- Title -->
                <h6 class="text-uppercase">DESCRIPTION</h6>

                <!-- Text -->
                <p class="text-muted mb-0 text-justify">{{team.description}}</p>
              </div>
            </div>
            <!-- / .row -->
          </div>
        </div>
      </div>
      <!-- / .row -->
      <div class="row justify-content-center" v-else>
        <div class="card mt-5">
          <div class="card-body text-center">
            <div class="row justify-content-center">
              <div class="col-12 col-xl-10">
                <img
                  src="https://image.flaticon.com/icons/svg/1410/1410245.svg"
                  alt="..."
                  class="img-fluid mt--5 mb-4"
                  style="max-width: 272px;"
                >

                <h2>You do not have a team yet</h2>

                <p
                  class="text-muted"
                >You can be a part of a team by creating one or asking another registered member to add your email</p>

                <router-link to="/create-team" class="btn btn-primary">Create Team</router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import handleError from "../error.js";
export default {
  data: function() {
    return {
      team: [],
      members: [],
      noTeam: false
    };
  },
  mounted() {
    console.log(this.noTeam);
    axios
      .get(this.$store.state.serverURI + "get-team")
      .then(response => {
        if (response.data.success) {
          this.team = response.data.team;
          // this.members = response.data.members
        } else {
          this.$router.push("/create-team");
        }
        this.$vs.loading.close();
      })
      .catch(error => {
        handleError(error);
      });
  },
  methods: {
    leaveTeam() {
      if (confirm("Are you sure you want to leave this team")) {
        console.log("Sends a request to the server");
      }
    }
  }
};
</script>
<style>
[v-cloak] {
  display: none;
}
</style>



