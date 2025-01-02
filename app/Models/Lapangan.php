<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $table = 'lapangan';

    protected $fillable = [ 'nama_lapangan','kota','lokasi', 'harga_perjam', 'fasilitas_lapangan','image', 'kategori_lapangan', 'deskripsi' ];

    public function Booking(){
        return $this->hasMany(Booking::class, 'lapangan_id','id');
    }

    public function HargaBooking(){
        return $this->hasMany(Booking::class, 'harga_id','id');
    }
    public function kategori(){
        return $this->belongsTo(kategori::class, 'kategori_lapangan','id');
    }

    public function dashboard(){
        return $this->hasMany(Dashboard::class, 'lapangan_id', 'id' );
    }
}

