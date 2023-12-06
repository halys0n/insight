@extends('layouts.app', [
    'class' => '',
    'folderActive' => 'dados',
    'elementActive' => 'regular-forms'
]) 

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title" style="text-align:center;" >Arquivo</h4>
                    </div>
                    <div class="card-body ">
                        <form method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                           <div class="col-md-6 col-sm-6">
                            <label for="csv_file"> Arquivo </label>
                            <input type="file" name="csv_file" id="csv_file"/>
                    
                        
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection