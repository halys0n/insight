@extends('layouts.app', [
    'class' => '',
    'folderActive' => 'salas',
    'elementActive' => 'regular-forms'
]) 

@section('content')

  
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Cadastro de Sala</h4>
                        @if ($errors->any())
            <div class="alert alert-danger">
             <strong>Erro!</strong> Há algum problema<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
             </ul>
             </div>
            @endif
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('salas.update',$sala->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                            <label>Ano</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="ano" placeholder="Ano" value="{{ $sala->ano}}">
                            </div>    
                          
                            <label>Serie</label>
                            <div class="form-group">
                            <select class="form-control" name="serie">
                                <optgroup label="Serie">
                                <option value="1°">1°</option>
                                <option value="2°">2°</option>
                                <option value="3°">3°</option>
                            </select>
                            </div> 
                            <label>Curso</label>
                            <div class="form-group">
                            <select class="form-control" name="curso">
                                <optgroup label="Curso">
                                <option value="Agronegócio">Agronegócio</option>
                                <option value="Edificações">Edificações</option>
                                <option value="Informática">Informática</option>
                                <option value="Administração">Administração</option>
                                <option value="Nutrição">Nutrição</option>
                            </select>
                            </div>   
                           </br>
                             <div class="col-md-6 col-sm-6">
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <strong>Arquivo de Nomes</strong>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Selecionar Arquivo CSV</span>
                                            <span class="fileinput-exists"></span>
                                            <input type="file" name="arquivo" />
                                        </span>
                                    </div>
                                </div>
                            </div> 
                            
                <button type="submit" class="btn btn-primary">Editar</button>
                    
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection