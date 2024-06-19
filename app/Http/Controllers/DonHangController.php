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
        $don_hang_maus = DonHangMau::orderBy('created_at', 'desc')->get();
        $orders = DonHang::orderBy('created_at', 'desc')->with('user')->with('don_hang_maus')->paginate(5);
        return view('admin.orders.index', compact('orders', 'don_hang_maus'));
    }
    //
    public function layDon()
    {
        $user = User::find(Auth::user()->id);
        $ktra = DonHang::where('user_id', $user->id)->where('status', '0')->count();
        if ($ktra > 0) {
            echo 'bạn có đơn chưa hoàn thành';
        }
        // Tạo mã ngẫu nhiên 10 chữ số không trùng
        do {
            $ma_dh = Str::random(10);
        } while (DonHang::where('ma_dh', $ma_dh)->exists());
        $don_hang = DonHang::create([
            'ma_dh' => $ma_dh,
            'status' => 0,
            'user_id' => $user->id
        ]);
        //return redirect()->route('don_dat')->with('success', 'Nhận đơn thành công');
    }
    public function search(Request $request)
    {
        // $don_hang_maus = DonHangMau::orderBy('created_at', 'desc')->get();
        // $orders = DonHang::orderBy('created_at', 'desc')->with('user')->with('don_hang_maus')->where(function ($query) use ($request) {
        //     $query->where('name', 'LIKE', '%' . $request->search . '%')
        //         ->orWhere('email', 'LIKE', '%' . $request->search . '%')
        //         ->orWhere('phone', 'LIKE', '%' . $request->search . '%');
        // })->paginate(5);
        // return view('admin.orders.index', compact('orders', 'don_hang_maus'));
    }
    public function phanPhoiDon(Request $req)
    {
        $req->validate([
            'id' => 'required',
            'don_mau' => 'required'
        ]);
        $order = DonHang::find($req->id);
        $order->don_hang_maus_id = $req->don_mau;
        $order->save();
        return redirect()->back()->with('success', 'Phân phối đơn thành công');
    }
    public function donDat()
    {
        $user = Auth::user();
        $don_hangs = DonHang::where('user_id', $user->id)->where('status', 0)->with('don_hang_maus')->get();
        return view('pages.donhang.index', compact('don_hangs'));
    }
    public function xacNhan(string $id)
    {
        $order = DonHang::with(['user', 'don_hang_maus'])->find($id);
        if ($order->don_hang_maus->tong_gia > $order->user->sodu) {
            return redirect()->back()->with('error', 'Số dư của người dùng không đủ');
        }
        $order->status = 1;
        $order->save();
        return redirect()->back()->with('success', 'Xác nhận đơn hàng thành công');
    }
    public function huyDon(string $id)
    {
        $order = DonHang::find($id);
        $order->status = -1;
        $order->save();
        return redirect()->back()->with('success', 'Huỷ đơn hàng thành công');
    }
}
