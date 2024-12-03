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
        schema::create('lapangan', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lapangan',255);
        $table->text('lokasi');
        $table->decimal('harga_perjam',10,2);
        $table->timestamps();  
        });
     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('lapangan');
    }
};
