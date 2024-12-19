<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ownerLapangan extends Model
{
    protected $table = 'ownerLapangan';
    protected $fillable = ['nama','email','no_telp','nama_lapangan'];

    public function lapangan(){
       return $this->belongsTo(Lapangan::class, 'nama_lapangan', 'id');
    }
    public function dashboard(){
        return $this->hasMany(Dashboard::class, 'owner_id', 'id' );
    }
}
