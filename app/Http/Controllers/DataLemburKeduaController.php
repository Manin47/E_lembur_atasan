<?php

namespace App\Http\Controllers;
use App\DataLemburKedua;
use App\DataLemburKetiga;

use Illuminate\Http\Request;

class DataLemburKeduaController extends Controller
{
    //
    public function index(){

        $data = DataLemburKedua::all();

        return view('DataLemburKedua.tabel_lembur_kedua', compact('data'));
    }

    public function form_approve($id){
      
        $data = DataLemburKedua ::where('id_lembur', $id)->first();
        
        // oper data nay dengan compact
        return view('DataLemburKedua.form_penerima', compact('data')); 

    }


    
    public function pindah(Request $request, $id){
      
       
        $data =  new DataLemburKetiga;

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

        $hasil = DataLemburKedua ::where('id_lembur', $id)->first();

          // lalu hapus
         $hasil->delete();


        return redirect('data-lembur-b')->with(['success' => 'Data  Berhasil Di Approve']);

    }


    public function reject($id){

        $data = DataLemburKedua::where('id_lembur', $id)->first();
        //dd($data);
        
        // lalu hapus
        $data->delete();
 
        // lalu redirect lagi
        return redirect('data-lembur-b')->with(['success' => 'Data Di Reject']);

    }
}
