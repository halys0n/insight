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
                   
                
                    
                    <div class="card-body">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <th> Numero</th>   
                            <th> Aluno</th>
                            <th> Geografia</th>
                            <th> Historia</th>
                            <th> Lab Software</th>
                            <th> Lab Web</th>
                            <th> Lab Hardware</th>
                            <th> Matematica</th>
                            <th> Profissao F.</th>
                            <th> Quimica</th>
                            <th> Sociologia</th>
                            
                            
                        </thead>
                            <tbody>

                                @foreach ($student as $students)
                                <tr>  
                                    <td>{{ $students->numero }}</td>
                                    <td>{{ $students->nome }}</td>
                                    <td>{{ $students->geografia }}</td>
                                    <td>{{ $students->historia }}</td>
                                    <td>{{ $students->laboratorio_de_software }}</td>
                                    <td>{{ $students->laboratorio_de_web }}</td>
                                    <td>{{ $students->laboratorio_hardware }}</td>
                                    <td>{{ $students->matematica }}</td>
                                    <td>{{ $students->profissao_e_formacao }}</td>
                                    <td>{{ $students->quimica }}</td>
                                    <td>{{ $students->sociologia }}</td>
                                    
            
                                </tr>
                                @endforeach
                                
                            </table>             
                            </tbody>
                            
                                <table id="datatable" class="table table-striped table-bordered" cellspacing="0" >
                                    
                                    <th> Media Geral </th>
                                    
                               
                                <tbody>
                                    <tr>
                                    <td>{{ $result = number_format((($students->geografia)+($students->historia)+($students->laboratorio_de_software)+($students->laboratorio_de_web)+($students->laboratorio_hardware)+($students->matematica)+($students->profissao_e_formacao)+($students->quimica)+($students->sociologia))/9, 2)}}</td>
                                    </tr>
                                    </table>
                                </tbody>
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