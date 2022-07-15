<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agendaSuratMasuk
{

    public static $surat = [
        "no-arsip" => "0001A3",
        // 'no-surat' => '202/VII/OKI/2022',
        // 'instansi' => 'organisasi',
        // 'hal' => 'halo'
    ];

    public static function all(){
        return self::$surat;
    }


}
