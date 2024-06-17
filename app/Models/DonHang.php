<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class DonHang extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ma_dh',
        'status',
        'don_hang_maus_id',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function don_hang_maus()
    {
        return $this->belongsTo(DonHangMau::class);
    }
}
