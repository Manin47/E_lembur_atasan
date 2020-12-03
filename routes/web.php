<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// isi agar public langsung ke login
Route::get('/', function () {
  return view('pengguna.login');
});

 //route reg awal halaman, inseert data akun 
 Route::post('reg', 'BerandaController@store'); 

 //route 
 Route::get('detail-akun/{id}', 'BerandaController@detail_akun'); 

 //route beranda dengan  controller
Route::get('/beranda','BerandaController@index');

 // route input lembur pilih department bisa di ases semua user , harus di luar route gtoup
 Route::get('input-pilih-department','PilihDepartmentController@index')->name('input-pilih-department');

 // route detail user
 Route::get('detail-user/{id}','UserController@detail');

 // route status
Route::get('status','DataLemburPertamaController@status')->name('status');

//route beranda tanpa controller
// Route::get('/beranda', function () {
//     return view('beranda');
// });


// route input data lembur department supplay chain
Route::get('input-data-lembur-hr-gal','PilihDepartmentController@hr_gal')->name('input-data-lembur-hr-gal');

//level admin bisa akses semua halaman
Route::group(['middleware' => ['auth','CekLevel:admin']], function (){
    //route beranda dengan  controller
   // Route::get('/beranda','BerandaController@index');

    Route::get('/halaman-satu','BerandaController@halamansatu')->name('halaman-satu');
    Route::get('/halaman-dua','BerandaController@halamandua')->name('halaman-dua');
    Route::get('/halaman-tiga','BerandaController@halamantiga')->name('halaman-tiga');
    Route::get('/halaman-empat','BerandaController@halamanempat')->name('halaman-empat');
    Route::get('/halaman-lima','BerandaController@halamanlima')->name('halaman-lima');
    Route::get('/halaman-enam','BerandaController@halamanenam')->name('halaman-enam');

    //   route export excell data karyawan
     Route::get('data-karyawan-export-excel', 'DataKaryawanController@export_excel')->name('export-data');

    //  route import data karyawan
     Route::post('import_excel', 'DataKaryawanController@import_data')->name('import-nya');

    //  route upload gambar
    Route::post('upload', 'BerandaController@proses_upload');

    // route detail
    Route::get('detail/{id}','DataKaryawanController@detail')->name('detail');

    // route create foto
    Route::get('create-foto', 'DataFotoController@create');
    // route simpan gambar
    Route::post('simpan-gambar', 'DataFotoController@store');
    // route delete gambar
    Route::get('delete-gambar/{id_gambar}', 'DataFotoController@destroy')->name('delete-gambar');
    // route edit gambar
    Route::get('edit-gambar/{id_gambar}', 'DataFotoController@edit');


    // route hapus user
    Route::get('hapus-user/{id}', 'UserController@destroy');
    // routr edit user
     Route::get('edit-user/{id}', 'UserController@edit');
    //  route buat user/ akun
    Route::get('buat-akun', 'UserController@buat_akun');
    // route update data akun
     Route::put('update-data-akun/{id}', 'UserController@update');


     // route hapus data karyawan
    Route::get('hapus/{nik_karyawan}','DataKaryawanController@hapus');
    // route detail karyawan
    Route::get('detail/{nik_karyawan}','DataKaryawanController@detail');
     // route cetak  per data karyawan
    Route::get('cetak-perdata/{nik_karyawan}', 'DataKaryawanController@perdata');
    // route edit data karyawan
    Route::get('edit/{nik_karyawan}/edit', 'DataKaryawanController@edit');
    // route update data karyawan
    Route::put('update/{nik_karyawan}', 'DataKaryawanController@update');
    // route hapus semua data karyawan
    Route::get('hapus-semua-data','DataKaryawanController@hapus_semua_data');

    Route::post('/simpan', 'DataKaryawanController@store')->name('simpan');

    // route export data lembur pertanggal
   // Route::get('/export-pertanggal/{awal}/{akhir}','DataLemburKelimaController@export_tanggal')->name('export-pertanggal');
    // export lembur
  //  Route::get('ex-lembur','DataLemburKelimaController@lembur_export');
  
  Route::get('searchlaundry', 'DataKaryawanController@search');

});


//level user hanya bisa akses beranda dan halaman satu
Route::group(['middleware' => ['auth','CekLevel:admin,user']], function (){
    //route beranda dengan  controller
   // Route::get('/beranda','BerandaController@index');

    Route::get('/halaman-satu','BerandaController@halamansatu')->name('halaman-satu');

    
   
});



//route login
Route::get('/login', function () {
    return view('Pengguna.Login');
})->name('login');

//route login k belum jalan beranda
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

//route logout
Route::get('/logout', 'LoginController@logout')->name('logout');

// route simpan data
//Route::post('/simpan', 'DataKaryawanController@store')->name('simpan');

// route edit
//Route::get('simpan/{id}/edit', 'DataKaryawanController@edit');


// route update
//Route::put('update/{id}', 'DataKaryawanController@update');

// buat route delete data 
//Route::delete('simpan/{id}', 'DataKaryawanController@hapus');


 // route cetak  per data
 //Route::get('cetak-perdata/{id}', 'DataKaryawanController@perdata');

  // route cari data jquery
  //Route::get('searchlaundry', 'DataKaryawanController@search');





//level hrd hanya bisa akses ... baru 
Route::group(['middleware' => ['auth','CekLevel:hrd,user,admin']], function (){
   

   
});

Route::group(['middleware' => ['auth','CekLevel:hrd']], function (){
   
    //route beranda dengan  controller
  // Route::get('/beranda','BerandaController@index');  
       
    });


//==========================================================================================

  // route export data lembur pertanggal
  Route::get('/export-pertanggal/{awal}/{akhir}','DataLemburKelimaController@export_tanggal')->name('export-pertanggal');
  // export lembur
  Route::get('ex-lembur','DataLemburKelimaController@lembur_export');




//   route input data lembur
Route::get('/input-data-lembur','DataLemburPertamaController@index')->name('input-data-lembur');

// route data lembur A
Route::get('data-lembur-a','DataLemburPertamaController@data_lembur_pertama')->name('data-lembur-a');
// route data lembur B
Route::get('data-lembur-b','DataLemburKeduaController@index')->name('data-lembur-b');


// simpan data lembur pertama
Route::post('simpan-data-lembur-pertama', 'DataLemburPertamaController@store')->name('simpan-data-lembur-pertama');


// route approve pertama
Route::get('approve-pertama/{id_lembur}','DataLemburPertamaController@form_approve');
// route simpan / data pindah ke tabel kedua
Route::post('simpan-pindah/{id_lembur}', 'DataLemburPertamaController@pindah');
// route reject data pertama
Route::get('reject-pertama/{id_lembur}','DataLemburPertamaController@reject');

// route data lembur C
Route::get('data-lembur-c','DataLemburKetigaController@index')->name('data-lembur-c');
// route approve kedua
Route::get('approve-kedua/{id_lembur}','DataLemburKeduaController@form_approve');
// route simpan / data pindah ke tabel C
Route::post('simpan-pindah-ke-c/{id_lembur}', 'DataLemburKeduaController@pindah');
// route reject data kedua
Route::get('reject-kedua/{id_lembur}','DataLemburKeduaController@reject');


// route data lembur D
Route::get('data-lembur-d','DataLemburKeempatController@index')->name('data-lembur-d');
// route approve ketiga
Route::get('approve-ketiga/{id_lembur}','DataLemburKetigaController@form_approve');
// route simpan / data pindah ke tabel d
Route::post('simpan-pindah-ke-d/{id_lembur}', 'DataLemburKetigaController@pindah');
// route reject data ketiga
Route::get('reject-ketiga/{id_lembur}','DataLemburKetigaController@reject');


// route data lembur e
Route::get('data-lembur-e','DataLemburKelimaController@index')->name('data-lembur-e');
// route approve keempat
Route::get('approve-keempat/{id_lembur}','DataLemburKeempatController@form_approve');
// route simpan / data pindah ke tabel e
Route::post('simpan-pindah-ke-e/{id_lembur}', 'DataLemburKeempatController@pindah');
// route reject data keempat
Route::get('reject-keempat/{id_lembur}','DataLemburKeempatController@reject');


// route reject kelima
Route::get('reject-kelima/{id_lembur}','DataLemburKelimaController@reject');



// route input data lembur department supplay chain
Route::get('input-data-lembur-supplay-chain','PilihDepartmentController@supplay')->name('input-data-lembur-supplay-chain');
// route simpan-data-lembur-supplay-pertama
Route::post('simpan-data-lembur-supplay-pertama', 'DataLemburPertamaSupplayController@store')->name('simpan-data-lembur-supplay-pertama');
// route tabel data le,bur supplay a
Route::get('data-lembur-supplay-a','DataLemburPertamaSupplayController@tabel')->name('data-lembur-supplay-a');
// route reject supplay pertama
Route::get('reject-supplay-pertama/{id_lembur}','DataLemburPertamaSupplayController@reject');
// route approve data lembur supplay pertama
Route::get('approve-supplay-pertama/{id_lembur}','DataLemburPertamaSupplayController@form');
// route pindah data ke tabel B supplay chain
Route::post('simpan-pindah-supplay-ke-b/{id_lembur}', 'DataLemburPertamaSupplayController@pindah');


// route tabel data lembur supplay B
Route::get('data-lembur-supplay-b','DataLemburKeduaSupplayController@tabel')->name('data-lembur-supplay-b');
// route reject supplay kedua
Route::get('reject-supplay-kedua/{id_lembur}','DataLemburKeduaSupplayController@reject');
// route approve data lembur supplay kedua
Route::get('approve-supplay-kedua/{id_lembur}','DataLemburKeduaSupplayController@form');
// route pindah data ke tabel C supplay chain
Route::post('simpan-pindah-supplay-ke-c/{id_lembur}', 'DataLemburKeduaSupplayController@pindah');


// route tabel data lembur supplay C
Route::get('data-lembur-supplay-c','DataLemburKetigaSupplayController@tabel')->name('data-lembur-supplay-c');
// route reject supplay ketiga
Route::get('reject-supplay-ketiga/{id_lembur}','DataLemburKetigaSupplayController@reject');
// route approve data lembur supplay ketiga
Route::get('approve-supplay-ketiga/{id_lembur}','DataLemburKetigaSupplayController@form');
// route pindah data ke tabel D supplay chain
Route::post('simpan-pindah-supplay-ke-d/{id_lembur}', 'DataLemburKetigaSupplayController@pindah');


// route tabel data lembur supplay D
Route::get('data-lembur-supplay-d','DataLemburKeempatSupplayController@tabel')->name('data-lembur-supplay-d');
// route reject supplay keempat
Route::get('reject-supplay-keempat/{id_lembur}','DataLemburKeempatSupplayController@reject');
// route approve data lembur supplay keempat
Route::get('approve-supplay-keempat/{id_lembur}','DataLemburKeempatSupplayController@form');
// route pindah data ke tabel E supplay chain
Route::post('simpan-pindah-supplay-ke-e/{id_lembur}', 'DataLemburKeempatSupplayController@pindah');


// route tabel data lembur supplay E
Route::get('data-lembur-supplay-e','DataLemburKelimaSupplayController@tabel')->name('data-lembur-supplay-e');
// route reject supplay keempat
Route::get('reject-supplay-kelima/{id_lembur}','DataLemburKelimaSupplayController@reject');
// export lembur data supplay
Route::get('export-lembur-supplay','DataLemburKelimaController@lembur_export');



// route simpan-data-lembur-hr-gal-pertama
Route::post('simpan-data-lembur-hr-gal-pertama', 'DataLemburPertamaHrGalController@store')->name('simpan-data-lembur-hr-gal-pertama'); 
// route tabel data lembur hr-gal  a
Route::get('data-lembur-hr-gal-a','DataLemburPertamaHrGalController@tabel')->name('data-lembur-hr-gal-a');
// route reject supplay keempat
Route::get('reject-hr-gal-pertama/{id_lembur}','DataLemburPertamaHrGalController@reject');
// route approve data lembur supplay keempat
Route::get('approve-hr-gal-pertama/{id_lembur}','DataLemburPertamaHrGalController@form');
// route pindah data ke tabel 
Route::post('simpan-pindah-hr-gal-ke-b/{id_lembur}', 'DataLemburPertamaHrGalController@pindah');


// route tabel data lembur hr-gal  b
Route::get('data-lembur-hr-gal-b','DataLemburKeduaHrGalController@tabel')->name('data-lembur-hr-gal-b');
// route reject supplay keempat
Route::get('reject-hr-gal-kedua/{id_lembur}','DataLemburKeduaHrGalController@reject');
// route approve data lembur supplay keempat
Route::get('approve-hr-gal-kedua/{id_lembur}','DataLemburKeduaHrGalController@form');
// route pindah data ke tabel c hr gal
Route::post('simpan-pindah-hr-gal-ke-c/{id_lembur}', 'DataLemburKeduaHrGalController@pindah');



// route tabel data lembur hr-gal  b
Route::get('data-lembur-hr-gal-c','DataLemburKetigaHrGalController@tabel')->name('data-lembur-hr-gal-c');
// route reject 
Route::get('reject-hr-gal-ketiga/{id_lembur}','DataLemburKetigaHrGalController@reject');
// route approve data lembur 
Route::get('approve-hr-gal-ketiga/{id_lembur}','DataLemburKetigaHrGalController@form');
// route pindah data ke tabel c hr gal
Route::post('simpan-pindah-hr-gal-ke-d/{id_lembur}', 'DataLemburKetigaHrGalController@pindah');



// route tabel data lembur hr-gal  d
Route::get('data-lembur-hr-gal-d','DataLemburKeempatHrGalController@tabel')->name('data-lembur-hr-gal-d');
// route reject 
Route::get('reject-hr-gal-keempat/{id_lembur}','DataLemburKeempatHrGalController@reject');
// route approve data lembur 
Route::get('approve-hr-gal-keempat/{id_lembur}','DataLemburKeempatHrGalController@form');
// route pindah data ke tabel c hr gal
Route::post('simpan-pindah-hr-gal-ke-e/{id_lembur}', 'DataLemburKeempatHrGalController@pindah');


// route tabel data lembur hr-gal  e
Route::get('data-lembur-hr-gal-e','DataLemburKeLimaHrGalController@tabel')->name('data-lembur-hr-gal-e');
// route reject 
Route::get('reject-hr-gal-kelima/{id_lembur}','DataLemburKeLimaHrGalController@reject');
// export lembur data supplay
Route::get('export-lembur-hr-gal','DataLemburKeLimaHrGalController@lembur_export');




// rote menu pilih department quzlity assurance 
// route input data lembur department quality assurance
Route::get('input-data-lembur-quality-assurance','PilihDepartmentController@quality_assurance')->name('input-data-lembur-quality-assurance');
//route simpan-data-lembur-supplay-pertama
Route::post('simpan-data-lembur-quality-assurance-pertama', 'DataLemburPertamaQualityAssuranceController@store')->name('simpan-data-lembur-quality-assurance-pertama');
// route tabel data lembur quality assurance  a
Route::get('data-lembur-quality-assurance-a','DataLemburPertamaQualityAssuranceController@tabel')->name('data-lembur-quality-assurance-a');
// route reject quality assurance pertama
Route::get('reject-quality-assurance-pertama/{id_lembur}','DataLemburPertamaQualityAssuranceController@reject');
// route approve data lembur quality assurance pertama
Route::get('approve-quality-assurance-pertama/{id_lembur}','DataLemburPertamaQualityAssuranceController@form');
// route pindah data ke tabel 
Route::post('simpan-pindah-quality-assurance-ke-b/{id_lembur}', 'DataLemburPertamaQualityAssuranceController@pindah');


// route tabel data lembur quality assurance  b
Route::get('data-lembur-quality-assurance-b','DataLemburKeduaQualityAssuranceController@tabel')->name('data-lembur-quality-assurance-b');
// route reject quality assurance kedua
Route::get('reject-quality-assurance-kedua/{id_lembur}','DataLemburKeduaQualityAssuranceController@reject');
// route approve data lembur quality assurance pertama
Route::get('approve-quality-assurance-kedua/{id_lembur}','DataLemburKeduaQualityAssuranceController@form');
// route pindah data ke tabel 
Route::post('simpan-pindah-quality-assurance-ke-c/{id_lembur}', 'DataLemburKeduaQualityAssuranceController@pindah');


// route tabel data lembur quality assurance  c
Route::get('data-lembur-quality-assurance-c','DataLemburKetigaQualityAssuranceController@tabel')->name('data-lembur-quality-assurance-c');
// route reject quality assurance ketiga
Route::get('reject-quality-assurance-ketiga/{id_lembur}','DataLemburKetigaQualityAssuranceController@reject');
// route approve data lembur quality assurance pertama
Route::get('approve-quality-assurance-ketiga/{id_lembur}','DataLemburKetigaQualityAssuranceController@form');
// route pindah data ke tabel 
Route::post('simpan-pindah-quality-assurance-ke-d/{id_lembur}', 'DataLemburKetigaQualityAssuranceController@pindah');



// route tabel data lembur quality assurance  d
Route::get('data-lembur-quality-assurance-d','DataLemburKeempatQualityAssuranceController@tabel')->name('data-lembur-quality-assurance-d');



// ATASAN
// route tabel data lembur  f
Route::get('data-lembur-f','DataLemburKeenamController@tabel')->name('data-lembur-f');
// route tabel data lembur  g
Route::get('data-lembur-g','DataLemburKetujuhController@tabel')->name('data-lembur-g');

// route tabel data lembur  h
Route::get('data-lembur-h','DataLemburKedelapanController@tabel')->name('data-lembur-h');

