@extends('layouts.admin')


@section('content')

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
      <div class="container-fluid">
        <div class="my-4"></div>
        <div class="row justify-content-center mt-4">
          <div class="col-12 col-xl-8">
                <div class="row justify-content-center">
                      <p class="lead">Change Password</p>

                </div>
                <div class="row justify-content-center">

                    <div class="col-md-6">
                         <form method="post" action="update-password"  >
                             @csrf
                 <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="field-1" class="control-label">Current Password</label>
                     <input type="password" name="old_password" required class="form-control" id="old_password"
                        placeholder="Current Password">
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="field-2" class="control-label">New Password</label>
                     <input type="password" name="password" required class="form-control" id="password"
                        placeholder="New Password">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label for="field-3" class="control-label">Confirm Password</label>
                     <input type="password" name="password_confirmation" required class="form-control" id="password_confirmation"
                        placeholder="Confirm Password">
                  </div>
               </div>
            </div>

                <button type="submit" class="btn btn-primary">Change Password</button>

            </form>
                    </div>
                </div>




          </div>
        </div> <!-- / .row -->


                                                    <div class="row justify-content-center mt-4">
                                @include('includes.admin.message')

                                                    </div>
      </div>
    </div>
@endsection

@section('extra-js')

@endsection
