<?php

namespace App\Http\Controllers;
use App\ DataLemburKedelapan;

use Illuminate\Http\Request;

class DataLemburKedelapanController extends Controller
{
    //
    public function tabel(){

        $data = DataLemburKedelapan::all();


        return view('DataLemburKedelapan.tabel',compact('data'));
    }
}
