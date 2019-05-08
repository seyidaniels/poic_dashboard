@extends('layouts.admin')


@section('content')

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content" id="view-admins" >

      <div class="container-fluid">
        <div class="my-4"></div>

        <div class="row justify-content-start mt-4">
            <div class="col-12 col-xl-8">
                <button class="float-right btn btn-primary" data-toggle="modal" data-target="#messageMembers">Add New</button>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
          <div class="col-12 col-xl-6">

            @if(count ($admins))

            @foreach ($admins as $admin)
                            <!-- Card -->
            <div class="card mb-3">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      {{$admin->fullname()}}
                    </h4>

                    <h4>Role:  <div class="badge badge-info"> {{$admin->hasRole['role']}} </div> </h4>

                     <h4>Category:  <div class="badge badge-warning"> {{$admin->hasRole['category']}} </div> </h4>


                  </div>
                  <div class="col-auto">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" data-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a style="cursor: pointer;" @click="editRole({{$admin}})" class="dropdown-item">
                         Edit Role
                        </a>
                      </div>

                    </div>

                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .card-body -->
            </div>

            @endforeach

            @else
                 <p class="alert alert-info">No Admin has been added yet!</p>
            @endif


            <p class="text-center">
                {{$admins->links()}}
            </p>


          </div>
        </div> <!-- / .row -->
      </div>

              <!-- Modal: Members -->
    <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Disqualify Team?
                  </h4>

                </div>
                <div class="col-auto">

                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                </div>
              </div> <!-- / .row -->
            </div>
            <div class="card-header">

              <!-- Form -->
              <form>
                <div class="form-group">
                    <label for="reason">Reason</label>
                    <textarea name="reason" id="reason" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-primary float-center" type="submit">Confirm</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>



        <!-- Modal: Members -->
    <div class="modal fade" id="messageMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Add Admin
                  </h4>

                </div>
                <div class="col-auto">

                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                </div>
              </div> <!-- / .row -->
            </div>
            <div class="card-header">
              <!-- Form -->
              <form @submit.prevent="createAdmin" >
                 <div class="form-group">
                    <label for="message">Title</label>
                    <select required name="title" v-model="admin.title" class="form-control" >
                        <option value selected>Select Title</option>
                        <option value="Mr">Mr</option>
                        <option value="Miss"> Miss</option>
                        <option value="Mrs"> Miss</option>
                        <option value="Dr">Dr</option>
                        <option value="Professor">Professor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">First Name</label>
                    <input name="firstname" required v-model="admin.firstname"  class="form-control" cols="30" rows="10">
                </div>
                <div class="form-group">
                    <label for="message">Last Name</label>
                    <input name="lastname" required v-model="admin.lastname"  class="form-control" cols="30" rows="10">
                </div>
                <div class="form-group">
                    <label for="message">Email</label>
                    <input name="email" required v-model="admin.email"  class="form-control" cols="30" rows="10">
                </div>
                 <div class="form-group">
                    <label for="message">Phone Number</label>
                    <input name="phone" v-model="admin.phone"  class="form-control" cols="30" rows="10">
                </div>
                <div class="form-group">
                    <label for="message">Select Role</label>
                    <select name="role" required v-model="admin.role" class="form-control" >
                        <option value selected>Select Role</option>
                        <option value="reviewer">Reviewer</option>
                        <option value="judge">Judge</option>
                        <option value="super">Super Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Select Category</label>
                    <select name="category" required v-model="admin.category" class="form-control" >
                        <option value selected>Select Category</option>
                        <option value="food">Food</option>
                        <option value="software">Software</option>
                        <option value="security">Security</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <button class="btn btn-primary float-right" :disabled="loading"
              type="submit"
            >
              <i v-if="loading" class="fa fa-circle-o-notch fa-spin"></i>
              <span v-if="!loading">Add</span>
            </button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

            <!-- Modal: Members -->
    <div class="modal fade" id="editRole" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    You are editing the roles of @{{admin.title}} @{{admin.firstname}} @{{admin.lastname}}
                  </h4>

                </div>
                <div class="col-auto">

                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>

                </div>
              </div> <!-- / .row -->
            </div>
            <div class="card-header">
              <!-- Form -->
              <form @submit.prevent="editAdmin" >
                <div class="form-group">
                    <label for="message">Select Role</label>
                    <select name="role" required v-model="admin.role" class="form-control" >
                        <option value selected>Select Role</option>
                        <option value="reviewer">Reviewer</option>
                        <option value="judge">Judge</option>
                        <option value="super">Super Admin</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Select Category</label>
                    <select name="category" required v-model="admin.category" class="form-control" >
                        <option value selected>Select Category</option>
                        <option value="food">Food</option>
                        <option value="software">Software</option>
                        <option value="security">Security</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <button class="btn btn-primary float-right" :disabled="loading"
              type="submit"
            >
              <i v-if="loading" class="fa fa-circle-o-notch fa-spin"></i>
              <span v-if="!loading">Update</span>
            </button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    </div>




@endsection

@section('extra-js')
    <script>


   new Vue ({
       el: "#view-admins",
       data: function () {
       return {
        admin: {
            is_admin: 1,
            verified: 1,
            title: '',
            firstname: '',
            lastname: '',
            phone: '',
            email: '',
            role: '',
            category: '',
        },
        loading: false
       }
       },
       methods: {
           editRole (admin) {
               this.admin = admin
               this.admin.category = admin.has_role.category
               this.admin.role = admin.has_role.role
               $('#editRole').modal();
           },
           createAdmin() {
               this.toggleLoading();
               axios.post('create-admin', this.admin).then (response => {
                   this.toggleLoading();
                    if (response.data.success) {
                        toastr.success("Admin has been added");
                        setTimeout( () => {
                            location.reload();
                        }, 2500)
                        return;
                    }else {
                        if (response.data.error) {
                            let errors = Object.values(response.data.error);
                            errors.forEach(element => {
                               toastr.error(element);
                            });
                        }
                    }
               }).catch(error => {
                this.toggleLoading()
                toastr.error ("Ooops! An error occurred! Check your Internet or Try again");
            })
           },
           editAdmin () {
               let edittedAdmin = {
                   id: this.admin.id,
                   role: this.admin.role,
                   category: this.admin.category
               }
               axios.post('edit-admin', edittedAdmin).then (response => {
                   this.toggleLoading()
                   if (response.data.success) {
                        toastr.success("Admin Role Updated");
                        setTimeout( () => {
                            location.reload();
                        }, 2500)
                        return;
                    }else {
                        if (response.data.error) {
                            let errors = Object.values(response.data.error);
                            errors.forEach(element => {
                               toastr.error(element);
                            });
                        }
                    }
               }).catch(error => {
                this.toggleLoading()
                toastr.error ("Ooops! An error occurred! Check your Internet or Try again");
            })

           },
           toggleLoading () {
               this.loading = !this.loading;
           }
       }
   })
    </script>
@endsection
