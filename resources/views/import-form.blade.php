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
                        <form action= "{{ url('import-form') }} " method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                           <div class="col-md-6 col-sm-6">
                            <label> Arquivo </label>
                            <input type="file" name="file" />
                    
                        
                <button type="submit" values="Upload" class="btn btn-primary">Cadastrar</button>
                </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection