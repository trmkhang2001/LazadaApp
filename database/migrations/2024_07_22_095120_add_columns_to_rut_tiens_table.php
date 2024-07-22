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
        Schema::table('rut_tiens', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id');
            $table->decimal('so_tien_truoc', 18, 2)->after('user_id');
            $table->decimal('so_tien_rut', 18, 2)->after('so_tien_truoc');
            $table->decimal('so_tien_sau', 18, 2)->after('so_tien_rut');
            $table->integer('status')->after('so_tien_sau');
            $table->integer('tai_khoan_rut_id')->after('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rut_tiens', function (Blueprint $table) {
            //
        });
    }
};
