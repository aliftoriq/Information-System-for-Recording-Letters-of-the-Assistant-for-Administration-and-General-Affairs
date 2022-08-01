<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekdas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggal');
            $table->string('no_arsip');
            $table->string('no_surat');
            $table->string('instansi_id');
            $table->string('hal');
            $table->date('tanggal_diterima');
            $table->String('surat_masuk_id');
            $table->String('jenis_surat');
            $table->string('nama_penerima');
            $table->boolean('status')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sekdas');
    }
};
