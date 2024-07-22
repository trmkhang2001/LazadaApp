<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DonHangMauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('don_hang_maus')->insert([
            [
                'id' => 1,
                'ten_san_pham' => 'Sản Phẩm 1',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2',
                'tong_gia' => "10000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'ten_san_pham' => 'Sản Phẩm 2',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2',
                'tong_gia' => "20000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'ten_san_pham' => 'Sản Phẩm 3',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2',
                'tong_gia' => "400000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'ten_san_pham' => 'Sản Phẩm 4',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134258-7r98o-lwh4xn4v5zh7d2',
                'tong_gia' => "1200000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
