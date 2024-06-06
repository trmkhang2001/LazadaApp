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
        Schema::create('nap_tiens', function (Blueprint $table) {
            $table->id();
            $table->string('ma_nap');
            $table->tinyInteger('loai_nap');
            $table->tinyInteger('phuong_thuc_thanh_toan');
            $table->float('so_tien_truoc');
            $table->float('so_tien_nap');
            $table->float('so_tien_sau');
            $table->tinyInteger('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nap_tiens');
    }
};
