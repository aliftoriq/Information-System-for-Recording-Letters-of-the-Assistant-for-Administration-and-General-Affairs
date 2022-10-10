<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class sekda extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function instansi(){
        return $this->belongsTo(instansi::class);
        // , 'instansi_id','id'ph
    }

    public function suratKeluars(){
        return $this->hasMany(suratKeluar::class, 'surat_sekda_id','id');
        // return $this->hasMany(suratKeluar::class, 'surat_masuk_id','id');
    }

}
