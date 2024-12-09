<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $table = 'lapangan';

    protected $fillable = [ 'nama_lapangan', 'lokasi', 'harga_perjam'];

    public function Booking(){
        return $this->hasMany(Booking::class, 'lapangan_id','id');
        return $this->belongsTo(Fasilitas::class, 'fasilitas_lapangan', 'id');
        return $this->hasMany(OwnerLapangan::class, 'nama_lapangan', 'id');
    }

}

