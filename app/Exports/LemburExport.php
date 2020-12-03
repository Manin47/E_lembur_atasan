<?php

namespace App\Exports;

use App\DataLemburKelima;
use Maatwebsite\Excel\Concerns\FromCollection;

class LemburExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

      //  $hasil = DataLemburKelima::whereBetween('tanggal_lembur', [$awal, $akhir])->get();

        return DataLemburKelima::all();

       // return $hasil;
    }
}
