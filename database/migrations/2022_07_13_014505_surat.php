<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('tanggal');
            $table->string('no_arsip')->unique();
            $table->string('no_surat')->unique();
            $table->string('instansi_id');
            $table->string('hal');
            $table->String('jenis_surat');
            $table->rememberToken();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surats');
    }
};
