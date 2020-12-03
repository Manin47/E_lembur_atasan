<?php

namespace App\Http\Controllers;
use App\ DataLemburKeLimaHrGal;


// harus import 2 ini agar export excell nya berjalan
use App\Exports\LemburExportHrGal;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class DataLemburKeLimaHrGalController extends Controller
{
    //
    public function tabel(){

        $data =  DataLemburKeLimaHrGal::all();


        return view('FolderDataHrGalKelima.tabel',compact('data'));
    }


    public function reject($id){

        $data =  DataLemburKeLimaHrGal::where('id_lembur', $id)->first();
        //dd($data);
        
        // lalu hapus
        $data->delete();
 
        // lalu redirect lagi
        return redirect('data-lembur-hr-gal-e')->with(['success' => 'Data Di Reject']);

    }



    public function lembur_export(){
        return Excel::download(new LemburExportHrGal, 'Data_lembur_hr_gal.xlsx');
    }

}
