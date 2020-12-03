<?php

namespace App\Http\Controllers;
use App\DataLemburKetujuh;

use Illuminate\Http\Request;

class DataLemburKetujuhController extends Controller
{
    //
    public function tabel(){

        $data = DataLemburKetujuh::all();


        return view('DataLemburKetujuh.tabel',compact('data'));
    }
}
