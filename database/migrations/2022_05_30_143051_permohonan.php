<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permohonan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('permohonan', function (Blueprint $table) {
            $table->integer('permohonan_id')->autoIncrement();
            $table->string('user_id')->nullable();
            $table->string('jenis_permohonan')->nullable();
            $table->string('kode')->nullable();
            $table->string('surat_permohonan')->nullable();
            $table->string('surat_permohonan_no')->nullable();
            $table->string('surat_pernyataan')->nullable();
            $table->string('surat_pernyataan_no')->nullable();
            $table->string('ktp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('kswp')->nullable();
            $table->string('nib')->nullable();
            $table->string('siup')->nullable();
            $table->string('akta_perusahaan')->nullable();
            $table->string('gambar_lokasi')->nullable();
            $table->string('gambar_konstruksi')->nullable();
            $table->string('jadwal_pelaksanaan')->nullable();
            $table->string('jadwal_pelaksanaan_b')->nullable();
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
        //
    }
}
