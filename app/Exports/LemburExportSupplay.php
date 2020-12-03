<?php

namespace App\Exports;

use App\DataLemburKelimaSupply;
use Maatwebsite\Excel\Concerns\FromCollection;

class LemburExportSupplay implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataLemburKelimaSupply::all();
    }
}
