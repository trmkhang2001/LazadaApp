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
        Schema::table('nap_tiens', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id'); // Thêm cột id_user sau cột id

            // Nếu bạn muốn thiết lập ràng buộc khóa ngoại, bạn có thể thêm:
            // $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('nap_tiens', function (Blueprint $table) {
            $table->dropColumn('id_user');

            // Nếu bạn đã thêm ràng buộc khóa ngoại, bạn cần bỏ nó trước khi xóa cột:
            // $table->dropForeign(['id_user']);
        });
    }
};
