<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filecsv extends Model
{
    use HasFactory;
    protected $fillable = [
        'NUMERO',
        'Alunos / Disciplinas',
        'GEOGRAFIA',
        'HISTÓRIA',
        'LABORATORIO DE SOFTWARE',
        'LABORATORIO HARDWARE',
        'MATEMÁTICA',
        'PROFISSAO E FORMAÇÃO',
        'QUÍMICA',
        'SOCIOLOGIA',
        
    ];
}
