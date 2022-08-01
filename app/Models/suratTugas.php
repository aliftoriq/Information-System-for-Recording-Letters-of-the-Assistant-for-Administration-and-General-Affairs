<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratTugas extends Model
{
    use HasFactory;

    public function instansi(){
        return $this->belongsTo(instansi::class);
    }

    public function suratKeluars(){
        return $this->hasMany(suratKeluar::class, 'surat_masuk_id','id');
    }

    public function sekda(){
        return $this->hasMany(sekda::class, 'surat_masuk_id','id');
    }

    protected $guarded = [];
}
