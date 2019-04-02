<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 col-xl-8">
        <!-- Header -->
        <div class="header mt-md-5">
          <div class="header-body">
            <div class="row align-items-center">
              <div class="col">
                <!-- Title -->
                <h1 class="header-title">Create a team</h1>
              </div>
            </div>
            <!-- / .row -->
          </div>
        </div>

        <!-- Form -->
        <div v-if="page=== 1">
          <!-- Team name -->
          <div class="form-group">
            <label>Team name</label>
            <input v-model="team.name" type="text" class="form-control">
          </div>

          <!-- Team description -->
          <div class="form-group">
            <label class="mb-1">Team description</label>
            <small
              class="form-text text-muted"
            >This is how others will learn about the team, so make it good!</small>

            <textarea
              name="description"
              class="form-control"
              v-model="team.description"
              cols="30"
              rows="3"
            ></textarea>
          </div>
        </div>
        <button
          v-if="page === 1"
          @click="next"
          class="btn text-light btn-large float-right btn-primary"
        >Next</button>

        <div v-if="page === 2">
          <div
            class="alert alert-warning"
          >Please note that your team members must have created an account before you can add them as team members</div>
          <div class="form-group">
            <label class="mb-1">Select Team Picture</label>
            <input
              type="file"
              ref="file"
              v-on:change="handleFileUpload()"
              id="teamImage"
              name="team_avatar"
              class="form-control"
            >
            <div>
              <img
                v-show="file"
                src
                id="imagePreview"
                class="img-responsive img-fluid img-thumbnail"
              >
            </div>
          </div>

          <div class="form-group">
            <label class="mb-1">Select team Members</label>

            <div v-for="(member, index) in members" class="mt-4" :key="index">
              <input
                v-model="members[index]"
                :readonly="index == 0"
                type="email"
                class="form-control"
                name="member"
              >
            </div>
          </div>
          <div class="form-group">
            <button class="btn-danger" @click="addMember">
              <i class="fa fa-plus"></i>
            </button>
            <button v-if="members.length >= 1" @click="removeMember" class="btn-info">
              <i class="fa fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="mb-4">
          <button
            v-if="page === 2"
            @click="page -= 1"
            class="btn text-light btn-large float-left btn-secondary"
          >Previous</button>

          <button
            v-if="page === 2"
            @click="submitTeam"
            class="btn text-light btn-large float-right btn-primary"
            :disabled="loading"
            type="submit"
          >
            <i v-if="loading" class="fa fa-circle-o-notch fa-spin"></i>
            <span v-if="!loading">Create Team</span>
          </button>
        </div>
      </div>
    </div>
    <div class="mb-4"></div>
  </div>
</template>
<script>
import Select2 from "@/js/components/includes/Select2";
import handleError from "../error";

export default {
  data: function() {
    return {
      page: 1,
      file: "",
      loading: false,
      members: [],
      team: {
        name: "",
        description: ""
      }
    };
  },
  mounted() {
    if (this.$store.getters.isAuthenticated) {
      this.members.push(this.$store.getters.getUser.email);
    }
  },
  components: {
    "select-2": Select2
  },
  methods: {
    removeMember() {
      this.members.pop();
    },
    next() {
      if (this.team.name.length < 5)
        return toastr.warning("Team Name too short");
      if (this.team.description.length < 15)
        return toastr.warning("Team Description is too short");
      this.page += 1;
    },
    addMember() {
      if (this.members.length >= 4)
        return toastr.error("You cant have more than 4 team members");
      this.members.push("");
    },
    toggleLoading() {
      this.loading = !this.loading;
    },
    submitTeam() {
      if (confirm("Are you sure? Once team is created, you cannot edit")) {
        let data = new FormData();
        data.append("image", this.file);
        data.append("name", this.team.name);
        data.append("description", this.team.description);
        this.members.forEach(function(member, index) {
          data.append(`members[${index}]`, member);
        });
        this.toggleLoading();
        axios
          .post(this.$store.state.serverURI + "create-team", data)
          .then(response => {
            if (response.data.success) {
              toastr.success(response.data.message);
            } else {
              toastr.error(response.data.message);
            }
            this.$router.push("/my-team");
          })
          .catch(error => {
            handleError(error);
            this.toggleLoading();
          });
      }
    },
    handleFileUpload() {
      var preview = document.getElementById("imagePreview");
      this.file = this.$refs.file.files[0];
      var reader = new FileReader();
      reader.addEventListener(
        "load",
        function() {
          preview.src = reader.result;
        },
        false
      );
      if (this.file) {
        reader.readAsDataURL(this.file);
      }
    }
  }
};
</script>
