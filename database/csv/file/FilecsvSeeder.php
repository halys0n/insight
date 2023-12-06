<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Filecsv;
class FilecsvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Filecsv::truncate();
        $csvData = (array) fopen('database/csv/relatorio.csv','r');
        $csvData = array_slice($csvData, [10]);
        $csvData = array_unique($csvData);
        $c = ",,,,,,,,,,,," . PHP_EOL;
        $deletKeys = array_search($c, $csvData);
        unset($csvData[$deletKeys]);
        $fileRaw = true;
        while(($data = fgetcsv($csvData, 'r', ',')) !== false){
            if(!$fileRaw) {
                Filecsv::create([
                    'NUMERO'=> $data[1],
                    'Alunos / Disciplinas'=> $data[2],
                    'GEOGRAFIA'=> $data[3],
                    'HISTÓRIA'=> $data[4],
                    'LABORATORIO DE SOFTWARE'=> $data[5],
                    'LABORATORIO HARDWARE'=> $data[6],
                    'MATEMÁTICA'=> $data[7],
                    'PROFISSAO E FORMAÇÃO'=> $data[8],
                    'QUÍMICA'=> $data[9],
                    'SOCIOLOGIA'=> $data[10],
                ]);
            }
        }
        $fileRaw = false;
    }
}