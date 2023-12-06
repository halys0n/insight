@extends('layouts.app',[
    'class' => '',
    'folderActive' => 'salas',
    'elementActive' => 'datatables'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <p></p>

                    <div class="card-header">
                        <h2  class="card-title" style="text-align:center;">Salas</h2>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                     <p>{{ $message }}</p>
                     </div>
                    @endif
                    <div class="card-body">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <a class="btn btn-success" href="{{ route('salas.create') }}"> Nova sala</a>
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Ano</th>
                                    <th>Serie</th>
                                    <th>Curso</th>
                                    <th>Funcoes</th>
                                  
                                </tr>
                            </thead>
                            

                            <tbody>
                            @foreach ($salas as $sala)
                                <tr>
                                    <td>{{ $sala -> id }}</td>
                                    <td>{{$sala -> ano}}</td>
                                    <td>{{$sala -> serie}}</td>
                                    <td>{{$sala-> curso}}</td>
                                    <td>
                                    <form action="{{ route('salas.destroy',$sala->id) }}" method="POST" >
                                        <a href="{{ route('salas.show',$sala->id) }}" class="btn btn-info btn-link btn-icon btn-sm like"><i
                                                class="fa fa-heart"></i></a>
                                        <a href="{{ route('salas.edit',$sala->id) }}" class="btn btn-warning btn-link btn-icon btn-sm edit"><i
                                                class="fa fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')
                                        <a 
                                        onclick="demo.showSwal('warning-message-and-confirmation')"
                                        class="btn btn-danger btn-link btn-icon btn-sm remove">
                                            <i class="fa fa-times"></i></a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        
        <!-- end row -->
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                        ],
                    responsive: true,
                    language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Buscar",
                }
            });
    
            var table = $('#datatable').DataTable();
    
           /*  // Edit record
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
        
                var data = table.row($tr).data();
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            }); */
    
            // Delete a record
            table.on('click', '.remove', function(e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });
    
           /*  //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            }); */
        });
        $(document).ready(function() {
            // Initialise Sweet Alert library
            demo.showSwal();
        });
    </script>
@endpush