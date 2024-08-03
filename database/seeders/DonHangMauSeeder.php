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
                'ten_san_pham' => 'Đồng hồ điện tử màn hình LED với thiết kế tối giản phong cách Hàn Quốc',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/cn-11134301-7r98o-louxf20vdj6k7a',
                'tong_gia' => "13000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 2,
                'ten_san_pham' => 'Sữa rửa mặt Daily Face Wash than gỗ sồi, bùn khoáng Oniiz làm sạch bụi bẩn, dầu thừa, ngừa mụn cho da 100ml',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lwces78w7h7def',
                'tong_gia' => "99000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 3,
                'ten_san_pham' => 'Chế độ tai nghe chơi game không dây sẵn sàng X15 Pro Tai nghe BT 5.0 Âm thanh tốt Tai nghe nhét tai',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/sg-11134301-7rdya-ly682ik50lnuf8',
                'tong_gia' => "61000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 4,
                'ten_san_pham' => '[MUA 1 TẶNG 1] Sữa Tắm Purité 1.1L Tặng Sữa Tắm Anh Đào 500ml',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134201-7r98o-lygd1d1iz39p94',
                'tong_gia' => "270000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 5,
                'ten_san_pham' => 'LEGO DUPLO 10913 Thùng Gạch Duplo Sáng Tạo ( 65 Chi tiết) Đồ chơi lắp ráp giáo dục mầm non',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134201-7r98o-ly1ry2w2x6u114',
                'tong_gia' => "792000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 6,
                'ten_san_pham' => 'Soundcore Tai Nghe Nhét Tai anker liberty 4 nc bluetooth 5.3 anc Không Dây tws Pin Sạc 50h',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/cn-11134207-7r98o-lv5s0uppaea59a',
                'tong_gia' => "1990000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 7,
                'ten_san_pham' => 'Smart HD Tivi TOMKO 32 inch, chính hãng TOMKO, bảo hành đến 24 tháng',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lwif0j6q0vrt1d',
                'tong_gia' => "2400000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 8,
                'ten_san_pham' => 'Smart HD Tivi TOMKO 32 inch, chính hãng TOMKO, bảo hành đến 24 tháng',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lwif0j6q0vrt1d',
                'tong_gia' => "2940000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 9,
                'ten_san_pham' => 'Loa Bluetooth không dây di động Marshall Kilburn II Loa du lịch chống nước ngoài trời di động',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-ly7uyktalm4ta0',
                'tong_gia' => "3589000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 10,
                'ten_san_pham' => 'Đồng Hồ Thông Minh HUAWEI WATCH GT4 46mm Thiết Kế Thẩm Mỹ | Theo Dõi Sức Khỏe Chuyên Nghiệp |',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lya7llg8pidp4c',
                'tong_gia' => "4990000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 11,
                'ten_san_pham' => '[FREESHIP TOÀN QUỐC] Loa Kéo Karaoke ACNOS CB605PRO và AUCUS AK800 - bass 40cm - 1000w - hàng chính hãng - bảo hành 12 t',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/sg-11134201-7rd6h-lxaz3ltfz0y2af',
                'tong_gia' => "8900000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 12,
                'ten_san_pham' => 'HUAWEI WATCH GT 4 41MM Phiên Bản Xanh Hoa Lá | Thiết Kế Thẩm Mỹ | Theo Dõi Sức Khỏe Chuyên Nghiệp',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lwxwzuk1i6e387',
                'tong_gia' => "12350000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 14,
                'ten_san_pham' => 'Điện thoại Apple iPhone 15 Plus 128GBĐiện thoại Apple iPhone 15 Plus 128GB',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-llm05p5nstvz34',
                'tong_gia' => "23450000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 15,
                'ten_san_pham' => 'Smart Tivi TOMKO màn hình kích thước 43 inch FHD Tomko T43F8-1, bảo hành 24 tháng - chính hãng TOMKO',
                'hinh_san_pham' => 'https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lsatha0u7dzt66',
                'tong_gia' => "36510000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 16,
                'ten_san_pham' => 'Honda Winner X 2023',
                'hinh_san_pham' => 'https://hondasongtra.com/wp-content/uploads/2022/01/DB-Den-vang-1.png',
                'tong_gia' => "50060000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 17,
                'ten_san_pham' => 'SH160i/125i',
                'hinh_san_pham' => 'https://cdn.honda.com.vn/motorbike-versions/August2023/dRxlGKvDbVFbdEyfzYVc.png',
                'tong_gia' => "81775637",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 18,
                'ten_san_pham' => 'SH160i/125i - SH125i Phiên bản Cao Cấp',
                'hinh_san_pham' => 'https://cdn.honda.com.vn/motorbike-versions/August2023/dRxlGKvDbVFbdEyfzYVc.png',
                'tong_gia' => "81775637",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => 19,
                'ten_san_pham' => 'SH160i/125i - SH160i Phiên bản Cao Cấp',
                'hinh_san_pham' => 'https://cdn.honda.com.vn/motorbike-versions/August2023/CnHvlSx92RMG3SHNT8ZA.png',
                'tong_gia' => "101690000",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
