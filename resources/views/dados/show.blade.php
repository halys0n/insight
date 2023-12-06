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
                                <tr>
                                    
                                    <th>Periodo</th>
                                    <th>Alunos</th>
                                    <th>Media Geral</th>
                                    <th>Infrequência</th>
                                    <th>Frequência</th>
                                    <th>Acima da média em Portugues</th>
                                    <th>Acima da média em Matemática</th>
                                    <th>Acima média no Geral</th>
                                    <th>Ide Sala Gerado</th>

                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    
                                    <td>{{$dado-> Periodo}}</td>
                                    <td>{{$dado -> QtdAlunos}}</td>
                                    <td>{{$dado -> MedGeral}}</td>
                                    <td>{{$dado -> InFreq}}</td>
                                    <td>{{$dado -> Freq}}</td>
                                    <td>{{$dado -> AcimaMedPT}}</td>
                                    <td>{{$dado -> AcimaMedMT}}</td>
                                    <td>{{$dado -> AcimaMedGeral}}</td>
                                    <td>{{ $ideSALA = number_format((($dado->MedGeral)*($dado->Freq)*($percentPT = ($dado->AcimaMedPT)/($dado->QtdAlunos))*($percentMT = ($dado->AcimaMedMT)/($dado->QtdAlunos))*($percentGeral = ($dado->AcimaMedGeral)/($dado->QtdAlunos)))/100, 2)}}</td>
                                    
                                    
                                </tr>
                                
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
@endpush