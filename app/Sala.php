<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;
    protected $fillable = [
        'ano', 'serie', 'curso', 
     ];

     public function dado  () {
        return $this->hasMany(Dado::class, 'ref');
     }
}

