<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dado extends Model
{
    use HasFactory;
    protected $fillable = [
        'Periodo', 'QtdAlunos', 'MedGeral', 'InFreq', 'Freq', 'AcimaMedPT', 'AcimaMedMT', 'AcimaMedGeral', 'IdeSala',
     ];
}

