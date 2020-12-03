<?php

namespace App\Exports;

use App\DataKaryawan;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataKaryawanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataKaryawan::all();
    }
}
