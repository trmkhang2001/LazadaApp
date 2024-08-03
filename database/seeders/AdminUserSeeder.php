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
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('86868686'),
                'level' => "1024",
                'status' => "1",
                'aff_code' => 'ADMINCODE',
                'phone' => '86868686',
                'pass_rut_tien' => Hash::make('15491132'),
                'sodu' => "1000000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nhân Viên 1',
                'email' => 'nhanvien1@example.com',
                'password' => Hash::make('13141516'),
                'level' => "1000",
                'status' => "1",
                'aff_code' => '86868686',
                'phone' => '11111111',
                'pass_rut_tien' => Hash::make('13141516'),
                'sodu' => "30000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nhân Viên 2',
                'email' => 'nhanvien2@example.com',
                'password' => Hash::make('13141516'),
                'level' => "1000",
                'status' => "1",
                'aff_code' => '86868686',
                'phone' => '22222222',
                'pass_rut_tien' => Hash::make('13141516'),
                'sodu' => "30000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nhân Viên 3',
                'email' => 'nhanvien3@example.com',
                'password' => Hash::make('13141516'),
                'level' => "1000",
                'status' => "1",
                'aff_code' => '86868686',
                'phone' => '33333333',
                'pass_rut_tien' => Hash::make('13141516'),
                'sodu' => "30000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nhân Viên 4',
                'email' => 'nhanvien4@example.com',
                'password' => Hash::make('13141516'),
                'level' => "1000",
                'status' => "1",
                'aff_code' => '86868686',
                'phone' => '44444444',
                'pass_rut_tien' => Hash::make('13141516'),
                'sodu' => "30000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nhân Viên 5',
                'email' => 'nhanvien5@example.com',
                'password' => Hash::make('13141516'),
                'level' => "1000",
                'status' => "1",
                'aff_code' => '86868686',
                'phone' => '55555555',
                'pass_rut_tien' => Hash::make('13141516'),
                'sodu' => "30000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nhân Viên 6',
                'email' => 'nhanvien6@example.com',
                'password' => Hash::make('13141516'),
                'level' => "1000",
                'status' => "1",
                'aff_code' => '86868686',
                'phone' => '66666666',
                'pass_rut_tien' => Hash::make('13141516'),
                'sodu' => "30000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nhân Viên 7',
                'email' => 'nhanvien7@example.com',
                'password' => Hash::make('13141516'),
                'level' => "1000",
                'status' => "1",
                'aff_code' => '86868686',
                'phone' => '77777777',
                'pass_rut_tien' => Hash::make('13141516'),
                'sodu' => "30000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nhân Viên 8',
                'email' => 'nhanvien8@example.com',
                'password' => Hash::make('13141516'),
                'level' => "1000",
                'status' => "1",
                'aff_code' => '86868686',
                'phone' => '88888888',
                'pass_rut_tien' => Hash::make('13141516'),
                'sodu' => "30000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nhân Viên 9',
                'email' => 'nhanvien9@example.com',
                'password' => Hash::make('13141516'),
                'level' => "1000",
                'status' => "1",
                'aff_code' => '86868686',
                'phone' => '9999999',
                'pass_rut_tien' => Hash::make('13141516'),
                'sodu' => "30000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nhân Viên 10',
                'email' => 'nhanvien10@example.com',
                'password' => Hash::make('13141516'),
                'level' => "1000",
                'status' => "1",
                'aff_code' => '86868686',
                'phone' => '10101010',
                'pass_rut_tien' => Hash::make('13141516'),
                'sodu' => "30000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
