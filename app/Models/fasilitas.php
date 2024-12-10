<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';

    protected $fillable = [
        'fasilitas'
    ];

    public function fasilitas(){
        return $this->hasMany(Lapangan::class, 'fasilitas_lapangan','id');
    }
}
