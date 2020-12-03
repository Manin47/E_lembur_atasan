<?php

namespace App\Imports;

use App\DataKaryawan;
use Maatwebsite\Excel\Concerns\ToModel;

class DataKaryawanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataKaryawan([
            //

            'nik_karyawan' => $row [0],
            'golongan' => $row [1],
            'jabatan_karyawan' => $row [2],
            'department' => $row [3],
            'divisi' => $row [4],
            'nama_karyawan' => $row [5],
            'jenis_kelamin' => $row [6],
            'tanggal_lahir' => $row [7],
            'pendidikan_terakhir' => $row [8],
            'cabang_pt' => $row [9]

           
        ]);
    }
}
