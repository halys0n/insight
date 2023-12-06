<?php

namespace App\Http\Controllers;

use App\Sala;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = Sala::latest()->paginate(10000);
    
        return view('salas.index',compact('salas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salas.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'ano' => 'required',
            'curso' => 'required',
        ]);
    
        Sala::create($request->all());
     
        return redirect()->route('salas.index')
                        ->with('success','Sala cadastrada.');
    }

    public function show(Sala $sala)
    {
        return view('salas.show',compact('sala'));
    }

    
    public function edit(Sala $sala)
    {
        return view('salas.edit',compact('sala'));
    }

    
    public function update(Request $request, Sala $sala)
    {
        $request->validate([
            'ano' => 'required',
            'curso' => 'required',
        ]);
    
        $sala->update($request->all());
    
        return redirect()->route('salas.index')
                        ->with('success','Sala editada com sucesso');
    }


    public function destroy(Sala $sala)
    {
        $sala->delete();
    
        return redirect()->route('salas.index')
                        ->with('success','Sala deletada com sucesso');
    }
}
