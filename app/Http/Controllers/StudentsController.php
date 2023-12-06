<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use App\Imports\StudentImport;
use DB;
use Excel;

class StudentsController extends Controller
{
    public function index(){
        $data = Student::get();
        return view('student-list',compact('student'));
    }
    public function importForm(){
        return view('import-form');
    }
    public function SaveImportFile(Request $request){
        \Maatwebsite\Excel\Facades\Excel::import(new StudentImport, $request->file);
        return redirect()->route('import-show')
        ->with('successo','Relatorio de turma importado com sucesso.');
    }
    public function show()
    { 
        $student = Student::all();
        return view('import-show', compact('student'));
        DB::insert('insert into students(media) values(0)');
        DB::table('students')->whereIn('id', 20, 25)->delete();
    }
   
}