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
  <table class="table">
    <thead>
      <tr>
        <th scope="col">
          <a href="#" class="text-muted sort" data-sort="tables-row">#</a>
        </th>
        <th scope="col">
          <a href="#" class="text-muted sort" data-sort="tables-first"> Team Name</a>
        </th>
        <th scope="col">
          <a href="#" class="text-muted sort" data-sort="tables-handle"> Status </a>
        </th>
        </th>
                <th scope="col">
          <a href="#" class="text-muted sort text-center" data-sort="tables-handle"> Score (Reviewes) </a>
        </th>
           <th scope="col">
          <a href="#" class="text-muted sort " data-sort="tables-handle"> Score (Judges) </a>
        </th>
      </tr>
    </thead>
    <tbody class="list">
        @foreach ($projects as $project)
                  <tr>
        <th scope="row" class="tables-row">1</th>
        <td class="tables-first">{{$project->team->name}} <div class="badge badge-info">{{$project->category}}</div></td>
        <td class="tables-handle">{{$project->status}}</td>
        <td class="tables-last">{{$project->score('reviewer')}}</td>
        <td class="tables-last">{{$project->score('judge')}}</td>
      </tr>
        @endforeach


    </tbody>
  </table>
</div>
          </div>
        </div> <!-- / .row -->
      </div>
    </div>


@endsection
