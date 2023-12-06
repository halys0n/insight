<?php

namespace App\Imports;

use App\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithLimit;
use Maatwebsite\Excel\Concerns\WithStartRow;
use DB;
class StudentImport implements ToModel, WithHeadingRow, WithStartRow
{
   
    public function model(array $row)
    {
        return new Student([
            'numero'=>$row[0],
            'nome'=>$row['nome'],
            'geografia'=>$row['geografia'],
            'historia'=>$row['historia'],
            'laboratorio_de_software'=>$row['laboratorio_de_software'],
            'laboratorio_de_web'=>$row['laboratorio_de_web'],
            'laboratorio_hardware'=>$row['laboratorio_hardware'],
            'matematica'=>$row['matematica'],
            'profissao_e_formacao'=>$row['profissao_e_formacao'],
            'quimica'=>$row['quimica'],
            'sociologia'=>$row['sociologia'],
            
        ]);
    }
    public function startRow(): int
    {
        return 12;
    }
    
    public function headingRow(): int
    {
        return 11;
    }
   
    
   
    

}