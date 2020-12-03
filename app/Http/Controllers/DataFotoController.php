<?php

namespace App\Http\Controllers;
use App\DataFoto;

use Illuminate\Http\Request;

class DataFotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DataFoto.file_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        // validasi, file harus 
		$this->validate($request, [
            'file' => 'required|mimes:jpg,jpeg,png'

           
            
        ]);

        //dd($request->all());
        $nm = $request->file;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

         $data = new DataFoto;
          $data->keterangan = $request->keterangan;
          $data->file = $namaFile;

        $nm->move(public_path().'/img',$namaFile);
        $data->save();

       return redirect('halaman-tiga')->with(['success' => 'Data baru  Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($id);
        $data = DataFoto ::where('id_gambar', $id)->first();

        $nm = $request->file;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

        $data = new DataFoto;
          $data->keterangan = $request->keterangan;
          $data->file = $namaFile; 
          
         // $nm->move(public_path().'/img',$namaFile);
          $data->save();


    //     $data = DataFoto ::where('id_gambar', $id)->first();
       
    //    // dd($data);

    //     $data->keterangan = $request->keterangan;
    //     $data->file = $request->file;
       

    //     $data->update(); //lalu update

    //     // lalu redirect lagi
    //    return redirect('halaman-empat')->with(['success' => 'Data   Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // fungsi delete foto
    public function destroy ($id){
        // dd($id);
   
           $hapus = DataFoto::findorfail($id);
   
           $file = public_path('/img/').$hapus->file;
   
   
           // cek jika ada gambar
           if (file_exists($file)) {
               @unlink($file);
           }
   
   
           // hapus data di database
           $hapus->delete();
           return back()->with(['success' => 'Data Berhasil Dihapus']);
       }


       public function edit($id)
       {
           //
             $data = DataFoto::where('id_gambar', $id)->first();
   
             return view('DataFoto.edit_data_foto', compact('data'));
       }
}
