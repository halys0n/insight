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
                        <h4 class="card-title">Cadastro de Turma</h4>
                        @if ($errors->any())
            <div class="alert alert-danger">
             <strong>Erro!</strong> Há algum problema com o dado<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
             </ul>
             </div>
            @endif
                    </div>
                    <div class="card-body ">
                        <form action="{{ route('dados.update',$dado->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="col-md-12 col-sm-12">
                                        <label>Sala</label>
                                         <div class="form-group">
                                         <select class="form-control" name="Dados da Sala">
                                                 <optgroup label="Ano / Serie / Curso">
                                                @foreach ($salas as $sala)
                                                <option value="{{ $sala->id }}">{{ $sala->ano. ' ' .$sala->serie.' '.$sala->curso }}</option>
                                                @endforeach



                                                
                                                 </optgroup>
                                         </select>
                                     </div>
                                    </div>
                            {{-- <label>Ano</label>
                            <div class="form-group">
                                <input type="number" class="form-control" name="Ano">
                            </div>     --}}
                            <div class="col-md-12 col-sm-12">
                           <label>Periodo</label>
                            <div class="form-group">
                            <select class="form-control" name="Periodo">
                                    <optgroup label="Periodo">
                                    <option value="1° Bimestre">1° Bimestre</option>
                                    <option value="2° Bimestre">2° Bimestre</option>
                                    <option value="3° Bimestre">3° Bimestre</option>
                                    <option value="4° Bimestre">4° Bimestre</option>
                                    </optgroup>
                            </select>
                        </div>
                            {{-- <label>Serie</label>
                            <div class="form-group">
                            <select class="form-control" name="Serie">
                                <optgroup label="Serie">
                                <option value="1°">1°</option>
                                <option value="2°">2°</option>
                                <option value="3°">3°</option>
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
                            </div>    --}}
                            
                            <label>Quantidade de Alunos</label>
                            <div class="form-group">
                                <input type="number" name="QtdAlunos" class="form-control">
                            </div>    
                            <label>Média Geral</label>
                            <div class="form-group">
                                <input type="number" name="MedGeral" pattern="^\d*(\.\d{8,2})?$"  class="form-control">
                            </div> 
                            <label>Infrequência</label>
                            <div class="form-group">
                                <input type="number" name="InFreq" pattern="^\d*(\.\d{8,2})?$"  class="form-control">
                            </div> 
                            <label>Frequência</label>
                            <div class="form-group">
                                <input type="number" name="Freq" pattern="^\d*(\.\d{8,2})?$"  class="form-control">
                            </div> 
                            <label>Alunos acima da média em Português</label>
                            <div class="form-group">
                                <input type="number" name="AcimaMedPT"  class="form-control">
                            </div>
                            <label>Alunos acima da média em Matemática</label>
                            <div class="form-group">
                                <input type="number" name="AcimaMedMT"  class="form-control">
                            </div>
                            <label>Alunos acima da média geral</label>
                            <div class="form-group">
                                <input type="number" name="AcimaMedGeral" class="form-control">
                            </div>
                            
                           </div>
                           <div class="col-md-6 col-sm-6">
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            <div>
                                
                                <span class="btn btn-rose btn-round btn-file">
                                    <span class="fileinput-new">Selecionar Arquivo CSV</span>
                                    <span class="fileinput-exists"></span>
                                    <input type="file" name="arquivo" />
                                </span>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-footer ">
                        <button type="submit" class="btn btn-info btn-round">Atualizar</button>
                    </div>
                    </div>
                </div>
            </div>
                            
        </div>
    </div>
@endsection