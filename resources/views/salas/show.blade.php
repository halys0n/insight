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
                    <div class="card-header">
                    <a href="{{ route('salas.edit',$sala->id)}}">EDITAR<i
                                                class="fa fa-edit"></i></a>
                        <h4 class="card-title"> {{$sala -> ano}} {{$sala -> serie}} {{$sala -> curso}} </h4>
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
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <th> Periodo</th>   
                            <th> Alunos</th>
                            <th>Media geral</th>
                            <th>Infrequencia</th>
                            <th>Frequencia</th>
                            <th>Media Portugues</th>
                            <th> Media Matematica</th>
                            <th> Media geral</th>
                            <th> Funções </th>
                        </thead>
                            <tbody>

                                @foreach ($sala->dado as $dado)
                                <tr>
                                    <td>{{ $dado->Periodo }}</td>
                                    <td>{{ $dado->QtdAlunos }}</td>
                                    <td>{{ $dado->MedGeral }}</td>
                                    <td>{{ $dado->InFreq }}</td>
                                    <td>{{ $dado->Freq }}</td>
                                    <td>{{ $dado->AcimaMedPT }}</td>
                                    <td>{{ $dado->AcimaMedMT }}</td>
                                    <td>{{ $dado->AcimaMedGeral }}</td>
                                <td>
                                    <form action="{{ route('dados.destroy',$dado->id) }}" method="POST">
                                        <a href="{{ route('dados.show',$dado->id) }}" class="btn btn-info btn-link btn-icon btn-sm like"><i
                                                class="fa fa-heart"></i></a>
                                        <a href="{{ route('dados.edit',$dado->id) }}" class="btn btn-warning btn-link btn-icon btn-sm edit"><i
                                                class="fa fa-edit"></i></a>

                                                @csrf
                                                @method('DELETE')
                                        <a class="btn btn-danger btn-link btn-icon btn-sm remove">
                                            <i class="fa fa-times"></i></a>
                                    </form>
                                </td>
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

{{-- @push('scripts')
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
                    searchPlaceholder: "Buscar Dados",
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
                alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
                
            });
    
            //Like record
            table.on('click', '.like', function() {
                alert('You clicked on Like button');
            });
        });
    </script>
@endpush --}}