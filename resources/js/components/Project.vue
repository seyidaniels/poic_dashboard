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

                <div v-if="!showIntro">
                  <div class="badge badge-info">Category</div>
                  {{project.category}}
                </div>
              </div>
            </div>
            <!-- / .row -->
          </div>
        </div>

        <div v-if="showIntro">
          <div class="row listAlias">
            <div class="col-12 col-md-6 col-xl-3">
              <!-- Card -->
              <label>
                <div class="card">
                  <input
                    type="radio"
                    name="category"
                    value="food"
                    v-model="project.category"
                    @change="clicked()"
                  >

                  <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTr8bDhmaVAJBPKrz06OeHrbW7NZUuI_RDal0JrGW1fbIaesJdz"
                    alt="..."
                    class="card-img-top"
                  >
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <!-- Title -->
                        <h4 class="card-title mb-2 name">FOOD</h4>
                        <!-- Subtitle -->
                        <p
                          class="card-text small text-muted"
                        >Food security, Food Microbiology, Food Engineering and Processing, Food choice and consumer behavior</p>
                      </div>
                    </div>
                    <!-- / .row -->
                    <!-- Divider -->
                    <hr>
                  </div>
                  <!-- / .card-body -->
                </div>
              </label>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <!-- Card -->
              <label>
                <div class="card">
                  <input
                    type="radio"
                    name="test"
                    value="software"
                    v-model="project.category"
                    @change="clicked()"
                    checked
                  >

                  <img
                    src="https://images.unsplash.com/photo-1534972195531-d756b9bfa9f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                    alt="..."
                    class="card-img-top"
                  >
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <!-- Title -->
                        <h4 class="card-title mb-2 name">SOFTWARE</h4>
                        <!-- Subtitle -->
                        <p
                          class="card-text small text-muted"
                        >Software Engineering and Programming, Human Computer Interaction, Robotics and Artificial Intelligence, Data Mining, Graphics Visualization, Bioinformatics and Computational Biology, Energy and Mineral Resources</p>
                      </div>
                    </div>
                    <!-- / .row -->
                    <!-- Divider -->
                    <hr>
                  </div>
                  <!-- / .card-body -->
                </div>
              </label>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <!-- Card -->
              <label>
                <div class="card">
                  <input
                    type="radio"
                    name="category"
                    value="security"
                    v-model="project.category"
                    @change="clicked()"
                    checked
                  >

                  <img
                    src="https://dexab.com/wp-content/uploads/2016/08/Army-Soldiers-Pictures-HD-Wallpaper-1345-425x281.jpg"
                    alt="..."
                    class="card-img-top"
                  >
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <!-- Title -->
                        <h4 class="card-title mb-2 name">SECURITY</h4>
                        <!-- Subtitle -->
                        <p
                          class="card-text small text-muted"
                        >Development of Counter Air Strike Missiles¸ Digital Forensics, Surveillance, Cyber Infrastructure security, Smart grid security, Database capture.</p>
                      </div>
                    </div>
                    <!-- / .row -->
                    <!-- Divider -->
                    <hr>
                  </div>
                  <!-- / .card-body -->
                </div>
              </label>
            </div>

            <div class="col-12 col-md-6 col-xl-3">
              <!-- Card -->
              <label>
                <div class="card">
                  <input
                    type="radio"
                    name="category"
                    value="other"
                    v-model="project.category"
                    @change="clicked()"
                    checked
                  >

                  <img
                    src="https://cdn.pixabay.com/photo/2016/12/01/13/10/lightbulb-1875247__340.jpg"
                    alt="..."
                    class="card-img-top"
                  >
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <!-- Title -->
                        <h4 class="card-title mb-2 name">Any other Category</h4>
                        <!-- Subtitle -->
                        <p
                          class="card-text small text-muted"
                        >This involves any other Category not mentioned here</p>
                      </div>
                    </div>
                    <!-- / .row -->
                    <!-- Divider -->
                    <hr>
                  </div>
                  <!-- / .card-body -->
                </div>
              </label>
            </div>
          </div>
          <button class="btn btn-primary" @click="proceed()">
            <span>
              <i class="fa fa-forward"></i>
            </span> Proceed Seyi
          </button>
        </div>

        <div v-if="!showIntro">
          <!-- Form -->
          <!-- Project name -->
          <div class="form-group">
            <label>Project name</label>
            <input type="text" v-model="project.title" class="form-control">
          </div>

          <div class="form-group">
            <label for>Project Status</label>
            <div v-if="project.is_submitted === 1">
              <div class="badge badge-info">{{project.status}}</div>
            </div>
          </div>

          <!-- Project description -->
          <div class="form-group">
            <label class="mb-1">Project description</label>
            <small class="form-text text-muted">
              This will tell the judges about your innovative ideas, so make it good!
              <span
                class="text-danger"
              >Minimum of 300 word length</span>
            </small>
            <editor v-model="project.body"></editor>
            <p class="text-info float-right">{{wordCount}} words</p>
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
              v-if="!project.image"
              ref="file"
              v-on:change="handleFileUpload()"
              id="teamImage"
              name="team_avatar"
              class="form-control"
            >
            <div v-show="project.image">
              <img
                :src="project.image"
                id="imagePreview"
                class="img-responsive img-fluid img-thumbnail"
                height="300"
                width="300"
              >
              <button class="btn btn-danger" @click="removeImage">Remove</button>
            </div>
          </div>

          <div v-if="!project.is_submitted">
            <!-- Buttons -->
            <button
              @click="submitProject(0)"
              class="btn btn-primary text-white float-right"
              :disabled="loading"
              type="submit"
            >
              <i v-if="loading" class="fa fa-circle-o-notch fa-spin"></i>
              <span v-if="!loading">Save</span>
            </button>
            <button
              @click="submitProject(1)"
              class="btn btn-secondary text-white float-left"
              :disabled="loading"
              type="submit"
            >
              <i v-if="loading" class="fa fa-circle-o-notch fa-spin"></i>
              <span v-if="!loading">Submit</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="my-4"></div>
    <div class="my-4"></div>

    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Other Category</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <input type="text" v-model="customCategory" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" @click="proceedFromCustom" class="btn btn-primary">Proceed</button>
          </div>
        </div>
      </div>
    </div>
    <!-- / .row -->
  </div>
</template>
<script>
import Editor from "./includes/Editor";
import handleError from "../error";
export default {
  components: {
    editor: Editor
  },
  computed: {
    wordCount: function() {
      return this.project.body.split(" ").length - 1;
    }
  },
  mounted() {
    this.getProject();
  },
  data: function() {
    return {
      project: {
        title: "",
        body: "",
        image: "",
        category: ""
      },

      showIntro: true,
      loading: false,
      customCategory: ""
    };
  },
  methods: {
    getProject() {
      this.$vs.loading();
      axios
        .get(this.$store.state.serverURI + "get-project")
        .then(response => {
          if (response.data.success) {
            this.project = response.data.project;
            this.showIntro = false;
          }
          this.$vs.loading.close();
        })
        .catch(error => {
          handleError(error);
          this.$router.push("/create-team");
          this.$vs.loading.close();
        });
    },
    submitProject(is_submitted = 0) {
      if (this.validateProject()) {
        let data = new FormData();
        data.append("image", this.project.image);
        data.append("title", this.project.title);
        data.append("body", this.project.body);
        data.append("category", this.project.category);
        data.append("is_submitted", is_submitted);
        this.toggleLoading();
        axios
          .post(this.$store.state.serverURI + "process-project", data)
          .then(response => {
            if (response.data.success) {
              toastr.success(response.data.message);
              setTimeout(() => {
                window.location.reload();
              }, 3000);
            }
            this.toggleLoading();
          })
          .catch(error => {
            handleError(error);
            this.toggleLoading();
          });
      }
    },
    toggleLoading() {
      this.loading = !this.loading;
    },
    validateProject() {
      if (this.project.image == "") {
        toastr.warning("Project Cover Picture not found");
        return false;
      }
      if (this.wordCount < 300) {
        toastr.warning("Project Body should be minimum of 300 words");
        return false;
      }
      return true;
    },
    clicked() {
      console.log(this.project.category);
    },
    proceed() {
      if (this.project.category == "") {
        toastr.warning("Please, Kindly select a category");
        return;
      }
      if (this.project.category == "other") {
        $("#exampleModal").modal();
        return;
      }
      this.showIntro = !this.showIntro;
    },
    proceedFromCustom() {
      if (this.customCategory == "") {
        toastr.warning("Your Category should have a name");
        return;
      }
      $("#exampleModal").modal("hide");
      this.project.category = this.customCategory;
      this.showIntro = !this.showIntro;
    },
    handleFileUpload() {
      let file = this.$refs.file.files[0];
      if (!file.type.split("/").includes("image")) {
        this.$refs.file.value = "";
        toastr.error("Please upload an Image");
        return;
      }
      let preview = document.getElementById("imagePreview");
      this.project.image = file;
      var reader = new FileReader();
      reader.addEventListener(
        "load",
        function() {
          preview.src = reader.result;
        },
        false
      );
      if (this.project.image) {
        reader.readAsDataURL(this.project.image);
      }
    },
    removeImage() {
      this.project.image = "";
    }
  }
};
</script>
<style>
/* HIDE RADIO */
[type="radio"] {
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

/* IMAGE STYLES */
[type="radio"] + img {
  cursor: pointer;
}

/* CHECKED STYLES */
[type="radio"]:checked + img {
  outline: 5px solid #b78743;
}
</style>


