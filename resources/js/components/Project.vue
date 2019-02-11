<template>
  <div class="container-fluid">
    <div class="row justify-content-center my-4">
      <div class="col-10 col-lg-10 col-xl-8">
        <!-- Header -->
        <div class="header mt-md-5">
          <div class="header-body">
            <div class="row align-items-center">
              <div class="col">
                <!-- Pretitle -->
                <h6 class="header-pretitle">New project</h6>

                <!-- Title -->
                <h1 class="header-title">Create a new project</h1>
              </div>
            </div>
            <!-- / .row -->
          </div>
        </div>

        <!-- Form -->
        <!-- Project name -->
        <div class="form-group">
          <label>Project name</label>
          <input type="text" v-model="project.title" class="form-control">
        </div>

        <!-- Project description -->
        <div class="form-group">
          <label class="mb-1">Project description</label>
          <small
            class="form-text text-muted"
          >This will tell the judges about your innovative ideas, so make it good!</small>
          <editor v-model="project.body"></editor>
        </div>

        <!-- / .row -->
        <!-- Divider -->
        <hr class="mt-4 mb-5">

        <!-- Project cover -->
        <div class="form-group">
          <label class="mb-1">Project cover</label>
          <small class="form-text text-muted">Please use an image no larger than 1200px * 600px.</small>
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
              v-show="project.file"
              src
              id="imagePreview"
              class="img-responsive img-fluid img-thumbnail"
            >
          </div>
        </div>

        <!-- Divider -->
        <hr class="mt-5 mb-5">

        <!-- Buttons -->
        <button @click="submitProject" class="btn btn-primary text-white float-right">Create project</button>
        <button class="btn btn-secondary text-white float-left">Save</button>
      </div>
    </div>
    <div class="my-4"></div>
    <div class="my-4"></div>
    <!-- / .row -->
  </div>
</template>
<script>
import Editor from "./includes/Editor";
export default {
  components: {
    editor: Editor
  },
  data: function() {
    return {
      project: {
        title: "",
        body: "",
        file: ""
      }
    };
  },
  methods: {
    submitProject() {
      this.validateProject();
      let data = new FormData();
      data.append("image", this.project.file);
      data.append("title", this.project.title);
      data.append("body", this.project.body);
      axios
        .post(this.$store.state.serverURI + "process-project", data)
        .then(response => {
          console.log(response);
        });
    },
    validateProject() {
      if (this.project.title.length < 50) {
        return toastr.warning("Project Title must be more than 50 characters");
      }
      if (this.project.file == "") {
        return toastr.warning("Project Cover Picture not found");
      }
      if (this.project.body.split(" ").length < 1000) {
        return toastr.warning("Project Body should be minimum of 1000 words");
      }
    },
    handleFileUpload() {
      var preview = document.getElementById("imagePreview");
      this.project.file = this.$refs.file.files[0];
      var reader = new FileReader();
      reader.addEventListener(
        "load",
        function() {
          preview.src = reader.result;
        },
        false
      );
      if (this.project.file) {
        reader.readAsDataURL(this.project.file);
      }
    }
  }
};
</script>

