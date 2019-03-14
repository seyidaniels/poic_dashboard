@extends('layouts.admin')


@section('content')

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
      <div class="container-fluid">
        <div class="my-4"></div>
        <div class="row justify-content-center mt-4">
          <div class="col-12 col-xl-8">

            @foreach ($teams as $team)
                            <!-- Card -->
            <div class="card mb-3">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <a href="profile-posts.html" class="avatar avatar-lg">
                      <img src="{{$team->image}}" alt="..." class="avatar-img rounded-circle">
                    </a>

                  </div>
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="profile-posts.html">{{$team->name}}</a>
                    </h4>

                    <!-- Text -->
                    <p class="card-text small text-muted mb-1">
                      {{$team->description}}
                    </p>

                    <!-- Status -->
                    <p class="card-text small">
                      <span class="text-success">●</span> {{$team->members->count()}} member(s)
                    </p>

                  </div>
                  <div class="col-auto">
                    @if($team->project)
                    <!-- Button -->
                    <a href="/admin/dashboard/project/view/{{$team->project->id}}" class="btn btn-sm btn-primary d-none d-md-inline-block" >
                      VIEW PROJECT
                    </a>
                    @else
                       Not Submitted Project
                    @endif

                  </div>
                  <div class="col-auto">

                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" data-expanded="false">
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" data-toggle="modal"   data-target="#modalMembers" data-team_id = {{$team->id}} class="dropdown-item">
                          Disqualifiy
                        </a>
                        <a href="#!"  data-toggle="modal" data-target="#messageMembers" data-team_id = {{$team->id}} class="dropdown-item">
                          Message
                        </a>
                      </div>
                    </div>

                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .card-body -->
            </div>

            @endforeach


            <p class="text-center">
                {{$teams->links()}}
            </p>


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
              <form action="send-mail" method="post" >
                  @csrf
                  <div class="form-group">
                    <label for="message">Subject</label>
                    <input type="hidden" name="team_id" id="team_id" >
                    <input type="text" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
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
<script>
$('#messageMembers').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var team_id = button.data('team_id') // Extract info from data-* attributes
  document.getElementById('team_id').value = team_id;

})
</script>
@endsection
