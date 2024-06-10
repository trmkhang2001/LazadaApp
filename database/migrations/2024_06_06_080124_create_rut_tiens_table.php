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
        Schema::create('rut_tiens', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('user_id');
            $table->float('tien_truoc_rut');
            $table->float('tien_sau_rut');
            $table->float('tien_rut');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rut_tiens');
    }
};
