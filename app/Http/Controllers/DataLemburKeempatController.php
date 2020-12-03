<?php

namespace App\Http\Controllers;
use App\DataLemburKeempat;
use App\DataLemburKelima;

use Illuminate\Http\Request;

class DataLemburKeempatController extends Controller
{
    //

    public function index(){

        $data = DataLemburKeempat::all();

        return view('DataLemburKeempat.tabel_lembur_keempat', compact('data'));
    }


    public function form_approve($id){
      
        $data = DataLemburKeempat ::where('id_lembur', $id)->first();
        
        // oper data nay dengan compact
        return view('DataLemburKeempat.form_penerima', compact('data')); 

    }


    public function pindah(Request $request, $id){
      
       
        $data =  new DataLemburKelima;

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

        $hasil = DataLemburKeempat ::where('id_lembur', $id)->first();

          // lalu hapus
         $hasil->delete();


        return redirect('data-lembur-d')->with(['success' => 'Data  Berhasil Di Approve']);

    }


    public function reject($id){

        $data = DataLemburKeempat::where('id_lembur', $id)->first();
        //dd($data);
        
        // lalu hapus
        $data->delete();
 
        // lalu redirect lagi
        return redirect('data-lembur-d')->with(['success' => 'Data Di Reject']);

    }

}
