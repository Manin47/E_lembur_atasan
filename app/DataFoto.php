<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataFoto extends Model
{
    //
    protected $table = 'tabel_gambar'; 
    protected $primaryKey = 'id_gambar';

    protected $fillable = ['id_gambar','file','keterangan'];
}
