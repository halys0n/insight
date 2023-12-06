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
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('salas.store') }}" method="POST">
                                    @csrf
                            <label>Ano</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="ano">
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
                             
                            
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection