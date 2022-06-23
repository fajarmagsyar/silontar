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
            $table->string('user_id');
            $table->string('jenis_permohonan');
            $table->string('kode');
            $table->string('surat_permohonan');
            $table->string('surat_permohonan_no');
            $table->string('surat_pernyataan');
            $table->string('surat_pernyataan_no');
            $table->string('ktp');
            $table->string('npwp');
            $table->string('kswp');
            $table->string('nib');
            $table->string('siup');
            $table->string('akta_perusahaan');
            $table->string('gambar_lokasi');
            $table->string('gambar_konstruksi');
            $table->string('jadwal_pelaksanaan');
            $table->string('jadwal_pelaksanaan_b');
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
