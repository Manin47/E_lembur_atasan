<?php

namespace App\Http\Controllers;
use App\DataLemburKelimaSupply;

use Illuminate\Http\Request;

class DataLemburKelimaSupplayController extends Controller
{
    //
    public function tabel(){

        $data = DataLemburKelimaSupply::all();


        return view('FolderDataSupplayKelima.tabel',compact('data'));
    }

    public function reject($id){

        $data = DataLemburKelimaSupply::where('id_lembur', $id)->first();
        //dd($data);
        
        // lalu hapus
        $data->delete();
 
        // lalu redirect lagi
        return redirect('data-lembur-supplay-e')->with(['success' => 'Data Di Reject']);

    }


    public function lembur_export(){
        return Excel::download(new LemburExportSupplay, 'Data_lembur_supplay.xlsx');
    }
}
