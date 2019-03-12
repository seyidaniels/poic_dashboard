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
                                @include('includes.admin.message')

                </div>
                <div class="row justify-content-center">
                      <p class="lead">Communicate with Applicants and Admins</p>

                </div>
                <div class="row justify-content-center">

                    <div class="col-md-6">
                         <form action="send-mail" method="post">
                             @csrf
                <div class="form-group row">
                    <select name="type" id="" class="form-control">
                        <option value selected>Select Category</option>
                        <option value="admins">Admin</option>
                        <option value="applicants">Applicant</option>
                        <option value="team_heads">Team Heads</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" class="form-control">
                </div>
                <div class="form-group row">
                    <label for="subject">Message </label>
                    <textarea name="message" class="form-control"></textarea>
                </div>

                      <button type="submit" class="btn btn-primary float-center" >Send Message</button>

            </form>
                    </div>
                </div>




          </div>
        </div> <!-- / .row -->
      </div>
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
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Message Team
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
                    <label for="message">message</label>
                    <textarea name="message" id="message" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-primary float-center" type="submit">Message Team</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>


@endsection

@section('extra-js')

@endsection
