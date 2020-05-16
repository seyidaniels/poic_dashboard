@extends('layouts.admin')


@section('content')

<!-- MAIN CONTENT
    ================================================== -->
<div class="main-content">
    <div class="container-fluid">
        <div class="my-4 "></div>
        <div class="row  mt-4 mb-4">
            <div class="col-12 col-xl-12">
                <h2>All Team Heads</h2>
                {{-- <button class="float-right btn btn-primary" onclick="download('POIC_TEAM_HEADS_2020')">Download</button> --}}
                <h1> </h1>
                <table class="table table-responsive table-bordered" id="project-table">
                    <thead>
                        <tr>
                            <th scope="col">
                                <a href="#" class="text-muted sort" data-sort="tables-row">#</a>
                            </th>
                            <th scope="col">
                                <a href="#" class="text-muted sort" data-sort="tables-first"> Team Name</a>
                            </th>

                            </th>
                            <th scope="col">
                                <a href="#" class="text-muted sort text-center" data-sort="tables-handle"> TeamHead </a>
                            </th>
                            <th scope="col">
                                <a href="#" class="text-muted sort " data-sort="tables-handle"> Submission Status </a>
                            </th>
                            <th scope="col">
                                <a href="#" class="text-muted sort " data-sort="tables-handle">
                                    Email </a>
                            </th>
                            <th scope="col">
                                <a href="#" class="text-muted sort " data-sort="tables-handle">
                                    Phone </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($teams as $i => $team)
                        <tr>
                            <th scope="row" class="tables-row">{{$i + 1}}</th>
                            <td>{{$team->name}}</td>
                            <td class="tables-handle">{{$team->head->fullname()}}</td>
                            <td> {{$team->project != null ? 'YES': 'NO'}} </td>
                            <td> {{$team->head->email}} </td>
                            <td>{{ $team->head->phone }}</td>
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
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script>
    var doc = new jsPDF();

function download(title) {
doc.fromHTML($('#project-table').html(), 15, 15, {
//   orientation: 'landscape',
});
doc.save(title);
}
</script>


<script>
    $(document).ready(function() {
        $('#project-table').DataTable(
            {
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
            ]
            }
        );
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
