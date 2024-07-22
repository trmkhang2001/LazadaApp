<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('banks')->insert([
            [
                'ngan_hang' => 'Ngân hàng ABC',
                'ho_ten' => 'Nguyễn Văn A',
                'tai_khoan' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
