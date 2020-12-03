<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKaryawan extends Model
{
    //
    protected $primaryKey = 'nik_karyawan';
    protected $fillable = ['nik_karyawan',
                           'golongan',
                           'jabatan_karyawan',
                           'department',
                           'divisi',
                           'nama_karyawan',
                           'jenis_kelamin',
                           'tanggal_lahir',
                           'pendidikan_terakhir',
                           'cabang_pt'

                        ];

    //  protected $dates = ['tanggal_lahir'];
}
