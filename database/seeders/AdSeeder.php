<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Pro',
                'email' => 'adminlatao@gmail.com',
                'password' => Hash::make('15491312'),
                'level' => "1024",
                'status' => "1",
                'aff_code' => 'ADMINCODE',
                'phone' => '696969',
                'pass_rut_tien' => Hash::make('15491312'),
                'sodu' => "1000000",
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
