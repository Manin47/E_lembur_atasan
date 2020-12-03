<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
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
          $data = User::where('id', $id)->first();

          return view('DataUser.edit_data_user', compact('data'));
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
        // dd($id);
        $data = User ::where('id', $id)->first();
       
       // dd($data);

        $data->nik_user = $request->nik_user;
        $data->name = $request->name;
        $data->level = $request->level;
        // $data->email = $request->email;
        $data->password = $request->password;

        $data->update(); //lalu update

        // lalu redirect lagi
        return redirect('halaman-empat')->with(['success' => 'Data   Berhasil Diupdate']);
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
        //dd($id);
         $data = User::where('id', $id)->first();

          // lalu hapus
          $data->delete();

         // lalu redirect lagi
          return redirect('halaman-empat')->with(['success' => 'Data   Berhasil Dihapus']);
    }

    // fungssi buat akun
    function buat_akun (){

        return view('DataUser.halaman_buat_akun');
    }

    public function detail($id){

        $data = User::where('id', $id)->first();

        return view('DataUser.Detail_user', compact('data'));  
    }
}
