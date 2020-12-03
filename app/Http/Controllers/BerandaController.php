<?php

namespace App\Http\Controllers;
use App\User;
use App\DataKaryawan;
use App\Gambar;
use App\DataFoto;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = DataFoto::all();

            $sorted = $data->sortByDesc('id_gambar');
            $data = $sorted;

        return view ('HalamanDepan.beranda',compact('data'));
    }

    public function detail_akun($id)
    {
        //
        //dd($id);

        $data = User::where('id', $id)->get();

        return view('DetailData.akun',compact('data'));
    }


    public function halamansatu()
    {
        //halaman satu
        return view ('Halaman.halaman-satu');
    }

    public function halamandua()
    {
        //halaman dua
        // ambil semua data dari dtabase model DataKaryawan
        $data = DataKaryawan::all();
        
        	// sortir data DESCENDING
            $sorted = $data->sortByDesc('id');
            $data = $sorted;
          

            return view('Halaman.halaman-dua',compact('data'));
        //return view ('Halaman.halaman-dua');
    }


    public function halamantiga()
    {
        //halaman dua
        // ambil semua data dari dtabase model DataKaryawan
        $data = DataFoto::all();
        
        	// sortir data DESCENDING
            $sorted = $data->sortByDesc('id_gambar');
            $data = $sorted;
          

            return view('Halaman.halaman-tiga',compact('data'));
        //return view ('Halaman.halaman-dua');
    }

    public function halamanempat()
    {
        //halaman dua
        // ambil semua data dari dtabase model DataKaryawan
       $data = User::all();
        
        	// sortir data DESCENDING
            $sorted = $data->sortByDesc('id');
            $data = $sorted;
          

            return view('Halaman.halaman-empat',compact('data'));
        //return view ('Halaman.halaman-dua');
    }

    public function halamanlima()
    {
        //halaman dua
        // ambil semua data dari dtabase model DataKaryawan
        $data = DataKaryawan::all();
        
        	// sortir data DESCENDING
            $sorted = $data->sortByDesc('id');
            $data = $sorted;
          

            return view('Halaman.halaman-lima',compact('data'));
        //return view ('Halaman.halaman-dua');
    }

    public function halamanenam()
    {
        //halaman dua
        // ambil semua data dari dtabase model DataKaryawan
        $data = DataKaryawan::all();
        
        	// sortir data DESCENDING
            $sorted = $data->sortByDesc('id');
            $data = $sorted;
          

            return view('Halaman.halaman-enam',compact('data'));
        //return view ('Halaman.halaman-dua');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
           
       // dd($request);
       $akun =  new User;
       $akun->nik_user = $request->nik_user;
       $akun->name = $request->name;
       $akun->level = $request->level;
    //    $akun->email = $request->email;
       $akun->password = bcrypt($request->password);
       
             

       $akun->save();

        // setelah data disimpan, kembalikan lagi ke user ke halaman login
        return redirect('halaman-empat')->with(['success' => 'Berhasil Buat Akun ']);
    }



    // fungsi upload gambar
    public function upload(){
		$gambar = Gambar::get();
		return view('HalamanDepan.beranda',['file' => $gambar]);
    }



    // eror
    public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	 // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Gambar::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		//return redirect()->back();
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
    public function edit($id)
    {
        //
    }

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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
