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
        Schema::table('users', function (Blueprint $table) {
            $table->integer('level')->after('password')->default(0);
            $table->integer('status')->after('level')->default(0);
            $table->string('aff_code')->after('status');
            $table->string('phone')->after('id')->unique();
            $table->string('pass_rut_tien')->after('phone');
            $table->decimal('sodu', 18, 2)->after('aff_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
