<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['numero', 'nome', 'geografia', 'historia', 'laboratorio_de_software', 'laboratorio_de_web', 'laboratorio_hardware', 'matematica','vazio', 'profissao_e_formacao', 'quimica', 'sociologia'];
    public static function getAllStudent(){
        $result = \Illuminate\Support\Facades\DB::table('students')
        ->select('numero', 'nome', 'geografia', 'historia', 'laboratorio_de_software', 'laboratorio_de_web', 'laboratorio_hardware', 'matematica', 'vazio', 'profissao_e_formcao', 'quimica', 'sociologia')
        ->get()->toArray();
        return $result;
    }
}
