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
        Schema::create('tai_khoan_ruts', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('id_user');
            $table->string('kieu_tai_khoan');
            $table->string('ten_ngan_hang');
            $table->string('tai_khoan');
            $table->string('chu_tai_khoan');
            $table->string('so_dien_thoai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tai_khoan_ruts');
    }
};
