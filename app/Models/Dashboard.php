<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    protected $table = 'dashboards';

    protected $fillable = [
        'user_id',
        'lapangan_id',
        'owner_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function lapangan(){
        return $this->belongsTo(Lapangan::class, 'lapangan_id', 'id');
    }
    public function owner(){
        return $this->belongsTo(OwnerLapangan::class, 'owner_id', 'id');
    }
}