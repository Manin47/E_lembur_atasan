<?php

namespace App\Http\Controllers;
use App\DataLemburKeempatQualityAssurance;

use Illuminate\Http\Request;

class DataLemburKeempatQualityAssuranceController extends Controller
{
    //
    public function tabel(){

        $data = DataLemburKeempatQualityAssurance::all();


        return view('FolderDataQualityAssuranceKeempat.tabel',compact('data'));
    }
}
