<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermohonanDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permohonan_detail', function (Blueprint $table) {
            $table->integer('pd_id')->autoIncrement();
            $table->integer('permohonan_id');
            $table->string('permohonan')->nullable();
            $table->string('nota_dinas')->nullable();
            $table->string('disposisi')->nullable();
            $table->string('undangan')->nullable();
            $table->string('ba')->nullable();
            $table->string('ba_survey')->nullable();
            $table->string('kab')->nullable();
            $table->string('izin_prinsip')->nullable();
            $table->string('lengkapi_berkas')->nullable();
            $table->string('gambar_lokasi')->nullable();
            $table->string('gambar_konstruksi')->nullable();
            $table->string('jadwal_pelaksanaan')->nullable();
            $table->string('sanggup_bayar')->nullable();
            $table->string('rekom_teknis')->nullable();
            $table->string('surat_ijin')->nullable();
            $table->string('surat_mulai_kerja')->nullable();
            $table->string('kpknl')->nullable();
            $table->string('dirjen_bm')->nullable();
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
