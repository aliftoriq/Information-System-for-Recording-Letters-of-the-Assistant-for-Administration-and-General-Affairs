<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instansi extends Model
{
    use HasFactory;


    public function surat(){
        return $this->hasMany(surat::class, 'id','instansi_id');
    }

    public function suratKeluar(){
        return $this->hasMany(suratKeluar::class, 'id','instansi_id');
    }

    public function sekda(){
        return $this->hasMany(sekda::class, 'id','instansi_id');
    }

    public function suratTugas(){
        return $this->hasMany(suratTugas::class, 'id','instansi_id');
    }


    protected $fillable= ['nama', 'id'];


}
