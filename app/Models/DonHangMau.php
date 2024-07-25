<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHangMau extends Model
{
    use HasFactory;
    protected $fillable = [
        'ten_san_pham',
        'hinh_san_pham',
        'tong_gia',
    ];
}
