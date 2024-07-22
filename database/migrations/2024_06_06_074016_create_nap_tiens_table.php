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
            $table->integer('loai_nap');
            $table->integer('phuong_thuc_thanh_toan');
            $table->decimal('so_tien_truoc', 18, 2);
            $table->decimal('so_tien_nap', 18, 2);
            $table->decimal('so_tien_sau', 18, 2);
            $table->integer('status');
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
