<?php

namespace App\Http\Controllers;
use App\DataLemburKeduaSupply;
use App\DataLemburKetigaSupply;

use Illuminate\Http\Request;

class DataLemburKeduaSupplayController extends Controller
{
    //
    public function tabel(){

        $data = DataLemburKeduaSupply::all();


        return view('FolderDataSupplayKedua.tabel',compact('data'));
    }

    public function reject($id){

        $data = DataLemburKeduaSupply::where('id_lembur', $id)->first();
        //dd($data);
        
        // lalu hapus
        $data->delete();
 
        // lalu redirect lagi
        return redirect('data-lembur-supplay-b')->with(['success' => 'Data Di Reject']);

    }


    public function form($id){
      
        $data = DataLemburKeduaSupply ::where('id_lembur', $id)->first();
        
        // oper data nay dengan compact
        return view('FolderDataSupplayKedua.form_penerima', compact('data')); 

    }


    public function pindah(Request $request, $id){
      
       
        $data =  new DataLemburKetigaSupply;

        $data->nik_karyawan_foregin = $request->nik_karyawan_foregin;
        $data->golongan = $request->golongan;
        $data->hari_lembur = $request->hari_lembur;
        $data->tanggal_lembur = $request->tanggal_lembur;
        $data->shift = $request->shift;
        $data->alasan_lembur = $request->alasan_lembur;
        $data->mulai_dari_jam = $request->mulai_dari_jam;
        $data->sampai_jam = $request->sampai_jam;
        $data->total_jam = $request->total_jam;
        $data->poin = $request->poin;
        $data->insentif = $request->insentif;

        $data->save();

        $hasil = DataLemburKeduaSupply ::where('id_lembur', $id)->first();

          // lalu hapus
         $hasil->delete();


        return redirect('data-lembur-supplay-b')->with(['success' => 'Data  Berhasil Di Approve']);

    }
}
