@extends('layouts.admin')


@section('content')

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
      <div class="container-fluid">
        <div class="my-4"></div>
        <div class="row justify-content-center mt-4">
          <div class="col-12 col-xl-8">
              <h2>List of Scores</h2>
              <div class="table-responsive" data-toggle="lists" data-lists-values='["tables-row", "tables-first", "tables-last", "tables-handle"]'>
                </div>
          </div>

        </div> <!-- / .row -->
        <div class="row justify-content-center">
            <!-- Multiple -->
            <form class="dropzone dropzone-multiple" data-toggle="dropzone" data-dropzone-multipl action="/admin/dashboard/upload-image">
                @csrf
                <div e data-dropzone-url="">

  <div class="fallback">
    <div class="custom-file">
      <input type="file" name="image" class="custom-file-input" id="customFileUploadMultiple" multiple>
      <label class="custom-file-label" for="customFileUploadMultiple">Choose file</label>
    </div>
  </div>

  <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
    <li class="list-group-item px-0">
      <div class="row align-items-center">
        <div class="col-auto">
          <div class="avatar">
            <img class="avatar-img rounded" src="..." alt="..." data-dz-thumbnail>
          </div>
        </div>
        <div class="col ml--3">
          <h4 class="mb-1" data-dz-name>...</h4>
          <p class="small text-muted mb-0" data-dz-size>...</p>
        </div>
        <div class="col-auto">

          <div class="dropdown">
            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fe fe-more-vertical"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item" data-dz-remove>
                Remove
              </a>
            </div>
          </div>

        </div>
      </div>
    </li>
  </ul>

</div>

            </form>

        </div>
      </div>
    </div>


@endsection
