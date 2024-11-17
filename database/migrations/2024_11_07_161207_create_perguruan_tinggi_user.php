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
        Schema::create('perguruan_tinggi_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('perguruan_tinggi_id')->constrained();
            $table->foreignId('fakultas_id')->constrained();
            $table->foreignId('jurusan_id')->constrained();
            $table->text('alamat');
            $table->string('telp');
            $table->date('ttl');
            $table->text('nilai_akhir');
            $table->enum('status', ['Pending', 0, 1])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perguruan_tinggi_user');
    }
};
