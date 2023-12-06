@extends('layouts.app',[
    'class' => '',
    'folderActive' => 'tables',
    'elementActive' => 'datatables'
])

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Turmas</h4>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Ano</th>
                                    <th>Serie</th>
                                    <th>Curso</th>
                                    <th>Age</th>
                                    <th class="disabled-sorting text-right">Funções</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Ano</th>
                                    <th>Serie</th>
                                    <th>Curso</th>
                                    <th>Age</th>
                                    <th class="disabled-sorting text-right">Funções</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-info btn-link btn-icon btn-sm like"><i
                                                class="fa fa-heart"></i></a>
                                        <a href="#" class="btn btn-warning btn-link btn-icon btn-sm edit"><i
                                                class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-link btn-icon btn-sm remove"><i
                                                class="fa fa-times"></i></a>
                                    </td>
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
                        [10, 25, 50, "All"]
                        ],
                    responsive: true,
                    language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
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
    </script>
@endpush