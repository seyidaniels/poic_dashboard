@extends('layouts.admin')


@section('content')

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">
      <div class="container-fluid">
        <div class="my-4 "></div>
        <div class="row  mt-4 mb-4">
          <div class="col-12 col-xl-12">
              <h2>All Projects</h2>
              <button class="float-right btn btn-primary" onclick="download('POIC_PROJECT_REVIEW_ANALYTICS')">Download</button>

  <table class="table table-responsive table-bordered" id="project-table" >
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
          <a href="#" class="text-muted sort text-center" data-sort="tables-handle"> TeamHead  </a>
        </th>
           <th scope="col">
          <a href="#" class="text-muted sort " data-sort="tables-handle"> Date Submitted </a>
        </th>
        <th scope="col">
                <a href="#" class="text-muted sort " data-sort="tables-handle"> Project Reviewers </a>
              </th>
              <th scope="col">
                    <a href="#" class="text-muted sort " data-sort="tables-handle"> Reviewed by </a>
                  </th>
                  <th scope="col">
                        <a href="#" class="text-muted sort " data-sort="tables-handle"> Not Reviewed by </a>
                      </th>
      </tr>
    </thead>
    <tbody class="list">
        @foreach ($projects as $i => $project)
                  <tr>
        <th scope="row" class="tables-row">{{$i + 1}}</th>
        <td >{{$project->team->name}} <div class="badge badge-info">{{$project->category}}</div></td>
        <td class="tables-handle">{{$project->status}}</td>
        <td > {{$project->team->head->email}} </td>
        <td class="tables-last">{{$project->created_at->format('M d Y')}}</td>
        <td> {{count($project->reviewers())}} </td>
        <td>
             <ol>
                @foreach ($project->reviewers() as $reviewer)
                 <li> {{$reviewer->fullname()}} | {{$reviewer->role->role}} </li>
                 @foreach ( $reviewer->reviewCategories($project->id) as $category)
                 <div class="badge badge-info">
                    {{$category}}
                 </div>
                 @endforeach
                </br>
                @endforeach
            </ol>
         </td>
        <td class="tables-last">
                <ol>
                        @foreach ($project->notReviewedBy() as $reviewer)
                         <li> {{$reviewer->fullname()}} | {{$reviewer->role->role}} </li>
                         @foreach ( $reviewer->reviewCategories($project->id) as $category)
                         <div class="badge badge-info">
                            {{$category}}
                         </div>
                         @endforeach
                        </br>
                        @endforeach
                    </ol>
        </td>
      </tr>
        @endforeach


    </tbody>
  </table>
          </div>
        </div> <!-- / .row -->
      </div>
    </div>


@endsection

@section('extra-js')
<script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js
"></script>

<script>
 var doc = new jsPDF();

function download(title) {
doc.fromHTML($('#project-table').html(), 15, 15, {
    'width': 170
});
doc.save(title);
}
</script>
<script src="https://cdn.jsdelivr.net/npm/table2csv@1.1.3/src/table2csv.min.js"></script>


    <script>
        $(document).ready(function() {
        $('#project-table').DataTable();
        $('table').each(function() {
    var $table = $(this);
 
    var $button = $("<button type='button'>");
    $button.text("Export to spreadsheet");
    $button.insertAfter($table);
 
    $button.click(function() {
      var csv = $table.table2CSV({delivery:'value'});
      window.location.href = 'data:text/csv;charset=UTF-8,'
                            + encodeURIComponent(csv);
    });
  });
            


} );
    </script>
@endsection
