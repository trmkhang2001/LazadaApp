<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NapTien extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'id_user',
        'ma_nap',
        'loai_nap',
        'phuong_thuc_thanh_toan',
        'so_tien_truoc',
        'so_tien_nap',
        'so_tien_sau',
        'status'
    ];
}
