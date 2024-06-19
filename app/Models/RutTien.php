<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RutTien extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'so_tien_truoc',
        'so_tien_rut',
        'so_tien_sau',
        'tai_khoan_rut_id',
        'status'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function taikhoanrut()
    {
        return $this->belongsTo(TaiKhoanRut::class, 'tai_khoan_rut_id');
    }
}
