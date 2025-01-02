<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';
    protected $fillable = ['kode_booking','kode_pembayaran', 'nama_pemesan', 'lapangan_id', 'waktu_mulai', 'waktu_selesai', 'durasi', 'tanggal_booking', 'status'];

    // Relasi ke model Lapangan
    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class, 'lapangan_id', 'id');
    }

    // Relasi ke harga (jika harga_id digunakan)
    public function harga()
    {
        return $this->belongsTo(Lapangan::class, 'harga_id', 'id');
    }

    // Generate kode booking unik
    public static function generateKodeBooking()
    {
        $lastBooking = self::latest('id')->first();
        $nextNumber = $lastBooking ? intval(substr($lastBooking->kode_booking, 3)) + 1 : 1;
        return 'spt' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
    }
}
