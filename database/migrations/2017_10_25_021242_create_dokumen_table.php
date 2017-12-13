<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * flag dokumen
         * --> [0] Baru diupload, menunggu verifikasi.
         * --> [1] Status verifikasi OKE.
         * --> [2] Dokumen direvisi.
         * 
         * - tanggal_verifikasi akan di update ketika pokja mengganti status dokumen menjadi OKE.
         */

        Schema::create('dokumen', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_paket');
            $table->integer('id_jenis_dokumen');
            $table->string('file_path');
            $table->integer('flag')->default(0);
            $table->date('tanggal_verifikasi');
            $table->timestamps();
            $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokumen');
    }
}
