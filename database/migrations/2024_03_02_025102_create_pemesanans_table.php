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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('meja_id')->constrained('meja')->onDelete('cascade');
            $table->date('tanggal_pemesanan');
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->string('nama_pemesanan');
            $table->integer('jumlah_pelanggan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
