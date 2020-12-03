<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_karyawans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nik_karyawan');
            $table->string('nama_karyawan'); 
            $table->string('no_ktp');
            $table->text('alamat');
            $table->string('no_telpon');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('pendidikan_terakhir');
            $table->string('status_perkawinan');
            $table->string('golongan_darah');
            $table->string('bahasa');
            $table->string('suku');
            $table->text('daerah_asal');
            $table->string('cabang_pt');
            $table->string('nama_darurat');
            $table->string('hubungan');
            $table->text('alamat_darurat');
            $table->string('no_telpon_darurat');
            $table->date('dari_tahun');
            $table->date('sampai_tahun');
            $table->string('nama_perusahaan');
            $table->string('jabatan');
            $table->string('alasan');

            $table->string('nama_ayah_kandung');
            $table->string('nama_ibu_kandung');
            $table->string('nama_saudara_kandung');
            $table->string('nama_suami_istri');
            $table->string('nama_anak_kandung');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_karyawans');
    }
}
