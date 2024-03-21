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
    Schema::create('menu', function (Blueprint $table) {
        $table->id();
        $table->foreignId('jenis_id')->constrained('jenis')->onDelete('cascade');
        $table->string('nama_menu', 100);
        $table->integer('harga');
        $table->integer('stok');
        $table->string('deskripsi', 100);
        $table->string('image', 255)->nullable(); // Tambahkan baris ini
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
