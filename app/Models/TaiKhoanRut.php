<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaiKhoanRut extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'kieu_tai_khoan',
        'ten_ngan_hang',
        'tai_khoan',
        'chu_tai_khoan',
        'so_dien_thoai'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
