<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use App\Models\DonHangMau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DonHangController extends Controller
{
    public function index()
    {
        $orders = DonHang::orderBy('created_at', 'desc')->with('user')->with('don_hang_maus')->paginate(5);
        return view('admin.orders.index', compact('orders'));
    }
    //
    public function layDon()
    {
        $user = Auth::user();
        $don_mau = DonHangMau::orderByRaw('ABS(tong_gia - ?)<=15000', [$user->sodu])->first();
        // Tạo mã ngẫu nhiên 10 chữ số không trùng
        do {
            $ma_dh = Str::random(10);
        } while (DonHang::where('ma_dh', $ma_dh)->exists());
        $don_hang = DonHang::create([
            'ma_dh' => $ma_dh,
            'status' => 0,
            'id_sp' => $don_mau->id,
            'id_user' => $user->id
        ]);
        var_dump($don_hang);
    }
    public function donDat()
    {
        $user = Auth::user();
        $don_hang = DonHang::where('id_user', $user->id)->where('status', 0)->first();
        $san_pham = DonHangMau::find($don_hang->id_sp);
        var_dump($san_pham);
    }
    public function action()
    {
    }
}
