<?php

namespace App\Exports;

use App\DataLemburKeLimaHrGal;
use Maatwebsite\Excel\Concerns\FromCollection;

class LemburExportHrGal implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataLemburKeLimaHrGal::all();
    }
}
