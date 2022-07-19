<?php

namespace App\Models;

use App\Models\suratKeluar;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class surat extends Model
{
    use HasFactory;


    // protected $fillable = [
    //     'no_arsip',
    //     'no_surat',
    //     'password',
    // ];

    protected $guarded = [];

    public function suratKeluar()
    {
        $c = surat::doesntHave('surat_keluars')->get();
        return $c;
    }

    public function surat_keluars(){
        return $this->hasMany(suratKeluar::class, 'surat_masuk_id','id');
    }
}
