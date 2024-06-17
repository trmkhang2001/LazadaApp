<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use App\Models\DonHangMau;
use App\Models\User;
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
        $user = User::find(Auth::user()->id);
        $don_mau = DonHangMau::orderByRaw('ABS(tong_gia - ?)<=15000', [$user->sodu])->first();
        $don_hang_new = DonHang::where('user_id', $user->id);
        // Tạo mã ngẫu nhiên 10 chữ số không trùng
        do {
            $ma_dh = Str::random(10);
        } while (DonHang::where('ma_dh', $ma_dh)->exists());
        if ($user->sodu > $don_mau->tong_gia) {
            $don_hang = DonHang::create([
                'ma_dh' => $ma_dh,
                'status' => 0,
                'don_hang_maus_id' => $don_mau->id,
                'user_id' => $user->id
            ]);
            $user->sodu -= $don_mau->tong_gia;
            $user->save();
            return redirect()->route('don_dat')->with('success', 'Nhận đơn thành công');
        };
        return redirect()->route('don_dat')->with('error', 'Số dư không đủ để nhận đơn');
    }
    public function donDat()
    {
        $user = Auth::user();
        $don_hangs = DonHang::where('user_id', $user->id)->where('status', 0)->with('don_hang_maus')->get();
        return view('pages.donhang.index', compact('don_hangs'));
    }
    public function action()
    {
    }
}
