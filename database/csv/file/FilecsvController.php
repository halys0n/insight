<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Filecsv;'

'
class FilecsvController extends Controller
{
    public function filecsv()
    {
        Filecsv::truncate();
        $csvData = ($_FILES(['csv_file']));

        $csvData = array_unique($csvData);
        $c = ",,,,,,,,,,,," . PHP_EOL;
        $deletKeys = array_search($c, $csvData);
        unset($csvData[$deletKeys]);
        $csvData = Reader::createFromPath(request()->file('csv_file')->getRealPath());
        $csvData->setHeaderOffset(0);
        
    }
}
