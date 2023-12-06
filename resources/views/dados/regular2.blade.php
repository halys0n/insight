@extends('layouts.app', [
    'class' => '',
    'folderActive' => 'forms',
    'elementActive' => 'regular-forms'
]) 

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-header ">
                        <h4 class="card-title">Cadastro de Turma</h4>
                    </div>
                    <div class="card-body ">
                        <form method="#" action="#">
                            <label>Ano</label>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Ano">
                            </div>    
                           {{--<label>Periodo</label>
                            <div class="form-group">
                            <select class="form-control" name="Periodo">
                                    <optgroup label="Periodo">
                                    <option value="1° Bimestre">1° Bimestre</option>
                                    <option value="2° Bimestre">2° Bimestre</option>
                                    <option value="3° Bimestre">3° Bimestre</option>
                                    <option value="4° Bimestre">4° Bimestre</option>
                                    </optgroup>
                            </select>
                            </div> --}}
                            <label>Serie</label>
                            <div class="form-group">
                            <select class="form-control" name="Serie">
                                <optgroup label="Serie">
                                <option value="1°">1°</option>
                                <option value="2°">2°</option>
                                <option value="3">3°</option>
                            </select>
                            </div> 
                            <label>Curso</label>
                            <div class="form-group">
                            <select class="form-control" name="Curso">
                                <optgroup label="Curso">
                                <option value="Agronegócio">Agronegócio</option>
                                <option value="Edificações">Edificações</option>
                                <option value="Informática">Informática</option>
                                <option value="Administração">Administração</option>
                                <option value="Nutrição">Nutrição</option>
                            </select>
                            </div>   
    
                            <label>Quantidade de Alunos</label>
                            <div class="form-group">
                                <input type="number" name="QtdAlunos" min="0" class="form-control">
                            </div>    
                            <label>Média Geral</label>
                            <div class="form-group">
                                <input type="number" name="MedGeral" pattern="^\d*(\.\d{0,2})?$" min="0" class="form-control">
                            </div> 
                            <label>Infrequência</label>
                            <div class="form-group">
                                <input type="number" name="InFreq" pattern="^\d*(\.\d{0,2})?$" min="0" class="form-control">
                            </div> 
                            <label>Frequência</label>
                            <div class="form-group">
                                <input type="number" name="Freq" pattern="^\d*(\.\d{0,2})?$" min="0" class="form-control">
                            </div> 
                            <label>Alunos acima da média em Português</label>
                            <div class="form-group">
                                <input type="number" name="AcimaMedPT" min="0" class="form-control">
                            </div>
                            <label>Alunos acima da média em Matemática</label>
                            <div class="form-group">
                                <input type="number" name="AcimaMedMT" min="0" class="form-control">
                            </div>
                            <label>Alunos acima da média em Matemática</label>
                            <div class="form-group">
                                <input type="number" name="AcimaMedMT" min="0" class="form-control">
                            </div>
                           
                        </form>
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-info btn-round">Submit</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection