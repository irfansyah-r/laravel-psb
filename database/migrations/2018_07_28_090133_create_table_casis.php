<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCasis extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->bigInteger('nisn');
            $table->string('no_reg', 16);
            $table->string('nama', 64);
            $table->string('kota_tl', 32);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->bigInteger('no_kk')->nullable();
            $table->string('alamat_kk', 256)->nullable();
            $table->string('alamat_dmsl', 256)->nullable();
            $table->string('asal_sekolah', 256)->nullable();
            $table->string('no_seri_ijazah')->nullable();
            $table->string('no_seri_skhun')->nullable();
            $table->string('nama_ayah', 64);
            $table->string('kota_tl_ayah', 32);
            $table->date('tanggal_lahir_ayah');
            $table->string('pendidikan_ayah', 8);
            $table->string('pekerjaan_ayah', 16);
            $table->bigInteger('penghasilan_ayah');
            $table->string('no_telp_ayah', 16)->nullable();
            $table->string('nama_ibu', 64);
            $table->string('kota_tl_ibu', 32);
            $table->date('tanggal_lahir_ibu');
            $table->string('pendidikan_ibu', 8);
            $table->string('pekerjaan_ibu', 16);
            $table->bigInteger('penghasilan_ibu');
            $table->string('no_telp_ibu', 16)->nullable();
            $table->string('status_tl', 16);
            $table->string('nama_wali', 64)->nullable();
            $table->string('kota_tl_wali', 32)->nullable();
            $table->date('tanggal_lahir_wali')->nullable();
            $table->string('pekerjaan_wali', 16)->nullable();
            $table->string('pendidikan_wali', 8)->nullable();;
            $table->integer('penghasilan_wali')->nullable();
            $table->string('hubungan_wali', 256)->nullable();
            $table->string('no_telp_wali', 16)->nullable();
            $table->enum('validasi', ['Y', 'N'])->nullable();
            $table->string('keterangan', 512)->nullable();
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
        Schema::dropIfExists('casis');
    }
}
