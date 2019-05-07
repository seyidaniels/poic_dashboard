@extends('layouts.admin')


@section('content')

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
      <div class="container-fluid">
        <div class="my-4"></div>
        <div class="row justify-content-center mt-4">
            @if(count($projects))
          <div class="col-12 col-xl-8" >



            @foreach ($projects as $project)
                            <!-- Card -->
            <div class="card mb-3" >
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">

                    <!-- Avatar -->
                    <a href="#" class="avatar avatar-lg">
                      <img src="{{$project->image}}" alt="..." class="avatar-img rounded-circle">
                    </a>

                  </div>
                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="#">{{$project->title}}</a>
                      <div class="badge badge-success"> {{$project->status}} </div>
                    </h4>

                    <!-- Text -->
                    <p class="card-text small text-muted mb-1">
                      by {{$project->team->name}}
                    </p>

                    <!-- Status -->
                    <p class="card-text small">
                      {{-- <span class="text-success">●</span> {{$project->members->count()}} member(s) --}}
                    </p>

                  </div>
                  <div class="col-auto">

                    <!-- Button -->
                    <a href="/admin/dashboard/project/view/{{$project->id}}" class="btn btn-sm btn-primary d-none d-md-inline-block">
                      VIEW PROJECT
                    </a>

                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .card-body -->
            </div>

            @endforeach

            @if ($projects instanceof \Illuminate\Pagination\LengthAwarePaginator )
)
            {{ $projects->links() }}
            @endif



          </div>
          @else

          <p class="alert alert-info mt-4">No Project to be Vetted by You, Please check back!</p>

          @endif
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
