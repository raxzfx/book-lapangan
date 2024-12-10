<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['kategori'];

    public function kategori(){
        return $this->hasMany(Lapangan::class, 'kategori_lapangan','id');
    }
}
