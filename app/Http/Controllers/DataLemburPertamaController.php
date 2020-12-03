<?php

namespace App\Http\Controllers;
use App\DataKaryawan;
use App\DataLemburPertama;
use App\User;
use App\DataLemburKedua;
use App\DataLemburKetiga;
use App\DataLemburKeempat;
use App\DataLemburKelima;
use App\DataLemburKeenam;
use App\DataLemburKetujuh;
use App\DataLemburKedelapan;


use Illuminate\Http\Request;

class DataLemburPertamaController extends Controller
{
    //
    public function index(){

       // $data = DataKaryawan::all();
        $data = user::all();

        return view('DataLemburPertama.form_input', compact('data'));
    }


    public function status(){

        return view('DataLemburPertama.halaman_status');
    }

    public function data_lembur_pertama(){
        $data = DataLemburPertama::all();

        return view('DataLemburPertama.tabel_lembur_pertama', compact('data'));
    }



    public function store(Request $request)
    {
        //
        // dd($request);
        $atasan=  $request->atasan;

        if ($atasan == "spv_produksi_g1") {

            $data =  new DataLemburPertama;

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
            $data->atasan = $request->atasan;
    
            
          
    
            //dd($data);
            $data->save();
    
            return redirect('status')->with(['success' => 'Data  Berhasil Di Kirim']);
        }
        else if ($atasan == "spv_produksi_g2") {
            $data =  new DataLemburKedua;

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
            $data->atasan = $request->atasan;
    
            
          
    
            //dd($data);
            $data->save();
    
            return redirect('status')->with(['success' => 'Data  Berhasil Di Kirim ke atasan ']);
        }
        else if ($atasan == "spv_produksi_g3") {
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
            $data->atasan = $request->atasan;
    
            
          
    
            //dd($data);
            $data->save();
    
            return redirect('status')->with(['success' => 'Data  Berhasil Di Kirim ke atasan']);
        }
        else if ($atasan == "spv_maintenance") {
            $data =  new DataLemburKeempat;

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
            $data->atasan = $request->atasan;
    
            
          
    
            //dd($data);
            $data->save();
    
            return redirect('status')->with(['success' => 'Data  Berhasil Di Kirim ke atasan ']);
        }
        else if ($atasan == "spv_logistic") {
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
            $data->atasan = $request->atasan;
    
            
          
    
            //dd($data);
            $data->save();
    
            return redirect('status')->with(['success' => 'Data  Berhasil Di Kirim ke atasan ']);
        }
        else if ($atasan == "spv_qc_inline") {
            $data =  new DataLemburKeenam;

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
            $data->atasan = $request->atasan;
    
            
          
    
            //dd($data);
            $data->save();
    
            return redirect('status')->with(['success' => 'Data  Berhasil Di Kirim ke atasan ']);
        }
        else if ($atasan == "spv_qc_analist") {
            $data =  new DataLemburKetujuh;

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
            $data->atasan = $request->atasan;
    
            
          
    
            //dd($data);
            $data->save();
    
            return redirect('status')->with(['success' => 'Data  Berhasil Di Kirim ke atasan ']);
        }
        else if ($atasan == "spv_gal") {
            $data =  new DataLemburKedelapan;

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
            $data->atasan = $request->atasan;
    
            
          
    
            //dd($data);
            $data->save();
    
            return redirect('status')->with(['success' => 'Data  Berhasil Di Kirim ke atasan ']);
        }
        else  {}


       

       
    }


    public function form_approve($id){
      
        $data = DataLemburPertama ::where('id_lembur', $id)->first();
        
        // oper data nay dengan compact
        return view('DataLemburPertama.form_penerima', compact('data')); 

    }

    public function pindah(Request $request, $id){
      
       
        $data =  new DataLemburKedua;

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

        $hasil = DataLemburPertama ::where('id_lembur', $id)->first();

          // lalu hapus
         $hasil->delete();


        return redirect('data-lembur-a')->with(['success' => 'Data  Berhasil Di Approve']);

    }


    public function reject($id){

        $data = DataLemburPertama::where('id_lembur', $id)->first();
        //dd($data);
        
        // lalu hapus
        $data->delete();
 
        // lalu redirect lagi
        return redirect('data-lembur-a')->with(['success' => 'Data Di Reject']);

    }

}
