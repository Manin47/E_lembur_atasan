<?php

namespace App\Http\Controllers;
use App\DataLemburKelima;

use App\Imports\DataKaryawanImport;
use App\Exports\LemburExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DataLemburKelimaController extends Controller
{
    //

    public function index(){

        $data = DataLemburKelima::all();

        return view('DataLemburKelima.tabel_lembur_kelima', compact('data'));
    }


    public function export_tanggal($awal, $akhir){

      //dd("awal= ".$awal, "akhir= ". $akhir);
      // $data = DataLemburKelima::all();

      $hasil = DataLemburKelima::whereBetween('tanggal_lembur', [$awal, $akhir])->get();
      //$hasil = DataLemburKelima::whereBetween('tanggal_lembur', [$awal, $akhir]);

      //dd($hasil);

      return view('DataLemburKelima.coba', compact('hasil'));
    }

    public function lembur_export(){
        return Excel::download(new LemburExport, 'Data_lembur.xlsx');
    }


    public function reject($id){

        $data = DataLemburKelima::where('id_lembur', $id)->first();
        //dd($data);
        
        // lalu hapus
        $data->delete();
 
        // lalu redirect lagi
        return redirect('data-lembur-e')->with(['success' => 'Data Di Hapus']);

    }
}
