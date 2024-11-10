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
        Schema::table('perguruan_tinggis', function (Blueprint $table) {
            $table->foreign('admin_id')->references('id')->on('admins');
        });
      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perguruan_tinggis', function (Blueprint $table) {
            //
        });
    }
};
