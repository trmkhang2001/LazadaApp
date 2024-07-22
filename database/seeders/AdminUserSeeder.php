<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('86868686'),
            'level' => "1024",
            'status' => "1",
            'aff_code' => 'ADMINCODE',
            'phone' => '88888888',
            'pass_rut_tien' => Hash::make('86868686'),
            'sodu' => "1000000",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
