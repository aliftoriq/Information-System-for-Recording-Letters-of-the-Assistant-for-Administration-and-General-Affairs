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
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggal');
            $table->string('no_arsip');
            $table->string('no_surat');
            $table->string('instansi_id');
            $table->string('hal');
            $table->string('surat_sekda_id');
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
        Schema::dropIfExists('suratKeluar');
    }
};
