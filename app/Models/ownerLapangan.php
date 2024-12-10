<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ownerLapangan extends Model
{
    protected $table = 'ownerLapangan';
    protected $fillable = ['nama','email','no_telp'];

    public function ownerLapangan(){
       return $this->belongsTo(Lapangan::class, 'nama_lapangan', 'id');
    }
}
