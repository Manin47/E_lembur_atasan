<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//pake auth
use Auth;

class LoginController extends Controller
{
    //belum jalan, pasword tinker harus bcrypt
    public function postlogin (Request $request){
      //dd($request->all()); 
      
      if (Auth::attempt($request->only('nik_user','password'))){
       //  dd($request->all()); 
          return redirect('/beranda')->with(['success' => 'Berhasil Masuk']);
      }
     
    
      return redirect('login')->with(['success' => 'NIK dan Password Salah....  ']);
    }

    //jalan
    public function logout (Request $request){
        Auth::logout();

        return redirect('login');
      }
}
