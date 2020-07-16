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
  <table class="table" id="example">
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
        @foreach ($projects as $i => $project)
                  <tr>
        <th scope="row" class="tables-row">{{$i + 1}}</th>
        <td class="tables-first">{{ $project->team->name}} <div class="badge badge-info">{{$project->category}}</div></td>
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


@section('extra-js')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js
"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );
} );
</script>
@endsection 