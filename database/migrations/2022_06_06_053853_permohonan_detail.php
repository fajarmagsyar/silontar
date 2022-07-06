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
            $table->string('permohonan_date')->nullable();
            $table->string('nota_dinas_no')->nullable();
            $table->string('nota_dinas')->nullable();
            $table->string('nota_dinas_date')->nullable();
            $table->string('disposisi_no')->nullable();
            $table->string('disposisi')->nullable();
            $table->string('disposisi_date')->nullable();
            $table->string('undangan')->nullable();
            $table->string('undangan_no')->nullable();
            $table->string('undangan_date')->nullable();
            $table->string('ba_no')->nullable();
            $table->string('ba')->nullable();
            $table->string('ba_date')->nullable();
            $table->string('ba_survey')->nullable();
            $table->string('ba_survey_no')->nullable();
            $table->string('ba_survey_date')->nullable();
            $table->string('kab_no')->nullable();
            $table->string('kab')->nullable();
            $table->string('kab_date')->nullable();
            $table->string('izin_prinsip')->nullable();
            $table->string('izin_prinsip_no')->nullable();
            $table->string('izin_prinsip_date')->nullable();
            $table->string('lengkapi_berkas')->nullable();
            $table->string('lengkapi_berkas_date')->nullable();
            $table->string('gambar_lokasi')->nullable();
            $table->string('gambar_lokasi_date')->nullable();
            $table->string('gambar_konstruksi')->nullable();
            $table->string('gambar_konstruksi_date')->nullable();
            $table->string('jadwal_pelaksanaan')->nullable();
            $table->string('jadwal_pelaksanaan_b')->nullable();
            $table->string('jadwal_pelaksanaan_date')->nullable();
            $table->string('sanggup_bayar')->nullable();
            $table->string('sanggup_bayar_date')->nullable();
            $table->string('rekom_teknis')->nullable();
            $table->string('rekom_teknis_no')->nullable();
            $table->string('rekom_teknis_date')->nullable();
            $table->string('surat_ijin_no')->nullable();
            $table->string('surat_ijin')->nullable();
            $table->string('surat_ijin_date')->nullable();
            $table->string('surat_mulai_kerja_no')->nullable();
            $table->string('surat_mulai_kerja')->nullable();
            $table->string('surat_mulai_kerja_date')->nullable();
            $table->string('kpknl_no')->nullable();
            $table->string('kpknl')->nullable();
            $table->string('kpknl_date')->nullable();
            $table->string('dirjen_bm_no')->nullable();
            $table->string('dirjen_bm')->nullable();
            $table->string('dirjen_bm_date')->nullable();
            $table->string('komentar')->nullable();
            $table->string('komentar_date')->nullable();
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
