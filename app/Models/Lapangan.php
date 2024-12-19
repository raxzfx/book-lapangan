<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $table = 'lapangan';

    protected $fillable = [ 'nama_lapangan', 'lokasi', 'harga_perjam', 'fasilitas_lapangan', 'kategori_lapangan' ];

    public function Booking(){
        return $this->hasMany(Booking::class, 'lapangan_id','id');
    }

    public function kategori(){
        return $this->belongsTo(kategori::class, 'kategori_lapangan','id');
    }

    public function ownerLapangan(){
        return $this->hasMany(OwnerLapangan::class, 'nama_lapangan', 'id');
    }

    public function dashboard(){
        return $this->hasMany(Dashboard::class, 'lapangan_id', 'id' );
    }
}

