<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');  // ID pengguna
            $table->foreignId('lapangan_id')->references('id')->on('lapangan')->onDelete('cascade');  // ID lapangan yang dipesan
            $table->dateTime('waktu_mulai');  // Waktu mulai
            $table->dateTime('waktu_selesai');  // Waktu selesai
            $table->enum('status', ['pending', 'confirmed', 'cancelled']);  // Status pemesanan
            $table->enum('payment_status', ['pending', 'paid'])->default('pending');  // Status pembayaran
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
