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
        Schema::create('perguruan_tinggis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('telp');
            $table->string('email')->unique();
            $table->string('web');
            $table->string('alamat');
            $table->enum('akreditasi', ['A','B', 'C'])->default('C');
            $table->string('kategori');
            $table->integer('biaya');
            $table->date('waktu_pendaftaran');
            $table->string('foto');
            $table->text('banner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perguruan_tinggis');
    }
};
