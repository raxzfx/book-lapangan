<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = ['user_id','lapangan_id','waktu_mulai','waktu_selesai'];

    public function User(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Lapangan(){
        return $this->belongsTo(lapangan::class, 'lapangan_id','id');
    }
}
