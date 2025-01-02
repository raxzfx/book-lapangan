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
            $table->string('nama_pemesan');
            $table->foreignId('lapangan_id')->references('id')->on('lapangan')->onDelete('cascade');  // ID lapangan yang dipesan
            $table->integer('durasi');
            $table->date('tanggal_booking');
            $table->time('waktu_mulai');  // Waktu mulai
            $table->time('waktu_selesai');  // Waktu selesai
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');  // Status pemesanan
            $table->enum('payment_status', ['pending', 'paid'])->default('pending');  // Status pembayaran
            $table->foreignId('harga_id')->nullable()->references('id')->on('lapangan')->onDelete('cascade');
            $table->string("kode_booking",6)->unique();
            $table->string('kode_pembayaran',6)->unique();
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