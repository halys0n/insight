<?php

namespace App\Http\Controllers;

use App\Dado;
use App\Sala;
use Illuminate\Http\Request;

class DadoController extends Controller
{
    
    public function index()
    {
        $dados = Dado::latest()->paginate(10000);
    
        return view('dados.index',compact('dados'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    
    public function create()
    {
        $salas = Sala::all();
        return view('dados.create', compact(['salas']));
    }

    public function file(Dado $dado)
    {
        return view('dados.file',compact('dado'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'periodo' => 'required',
            'id' => 'required',
        ]);
    
        Dado::create($request->all());
     
        return redirect()->route('dados.index')
                        ->with('successo','Dados de turma cadastrados com sucesso.');
    }

  
    public function show(Dado $dado)
    {
        return view('dados.show',compact('dado'));
    }

   
    public function edit(Dado $dado)
    {
        return view('dados.edit',compact('dado'));
    }

    
    public function update(Request $request, Dado $dado)
    {
       
    
        $dado->update($request->all());
    
        return redirect()->route('dados.index')
                        ->with('success','Dados editados com sucesso');
    }

    public function destroy(Dado $dado)
    {
        $dado->delete();
    
        return redirect()->route('dados.index')
                        ->with('success','Dados da turma deletados com sucesso');
    }
}
