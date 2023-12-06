@extends('layouts.app',[
    'class' => '',
    'folderActive' => 'dados',
    'elementActive' => 'datatables'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2  class="card-title" style="text-align:center;">Medias de sala</h2>
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
                        <a class="btn btn-success" href="{{ route('dados.create') }}">Inserir</a>
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Turma</th>
                                    <th>Periodo</th></th>
                                    <th>Infrequência</th>
                                    <th>Media geral</th>
                                    <th>Alunos</th>
                                    <th>Recentes</th>
                                    <th class="disabled-sorting text-right">Funções</th>
                                </tr>
                            </thead>
                            

                            <tbody>
                            @foreach ($dados as $dado)
                                <tr>
                                    <td>{{ $dado -> ref }}</td>
                                    
                                    <td>{{$dado -> Periodo}}</td>
                                    <td>{{$dado -> InFreq}}</td>
                                    <td>{{$dado -> MedGeral}}</td>
                                    <td>{{$dado-> QtdAlunos}}</td>
                                    <td>{{$dado -> created_at}}
                                    <td>
                                    <form action="{{ route('dados.destroy',$dado->id) }}" method="POST">
                                        <a href="{{ route('dados.show',$dado->id) }}" class="btn btn-info btn-link btn-icon btn-sm like"><i
                                                class="fa fa-heart"></i></a>
                                        <a href="{{ route('dados.edit',$dado->id) }}" class="btn btn-warning btn-link btn-icon btn-sm edit"><i
                                                class="fa fa-edit"></i></a>

                                                @csrf
                                        <a onclick="demo.showSwal('warning-message-and-confirmation')"
                                        class="btn btn-danger btn-link btn-icon btn-sm remove">
                                            <i class="fa fa-times"></i></a>
                                    </form>
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
                        [10, 25, 50, "Todos"]
                        ],
                    responsive: true,
                    language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Buscar",
                }
            });
    
            var table = $('#datatable').DataTable();
    
            // Edit record
            table.on('click', '.edit', function() {
                $tr = $(this).closest('tr');
        
                var data = table.row($tr).data();
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
            });
    
            // Delete a record
            table.on('click', '.remove', function(e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            });
    
            //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });
        });
        $(document).ready(function() {
            // Initialise Sweet Alert library
            demo.showSwal();
        });
    </script>
@endpush