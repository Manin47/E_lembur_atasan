<?php

namespace App\Http\Controllers;
use App\DataLemburKeenam;

use Illuminate\Http\Request;

class DataLemburKeenamController extends Controller
{
    //
    public function tabel(){

        $data = DataLemburKeenam::all();


        return view('DataLemburKeenam.tabel',compact('data'));
    }
}
