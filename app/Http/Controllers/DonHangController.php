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
        $orders = DonHang::orderBy('created_at', 'desc')->with('user')->with('don_hang_maus')->paginate(10);
        return view('admin.orders.index', compact('orders', 'don_hang_maus'));
    }
    //
    public function layDon()
    {
        $user = User::find(Auth::user()->id);
        $ktra = DonHang::where('user_id', $user->id)->where('status', '0')->count();
        $ktra2 = DonHang::where('user_id', $user->id)->where('status', '2')->count();
        if ($ktra > 0 || $ktra2 > 0) {
            return redirect()->route('don_dat')->with('error', 'Bạn đang có đơn chưa hoàn thành');
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
        return redirect()->route('don_dat')->with('success', 'Nhận đơn thành công');
    }
    public function search(Request $request)
    {

        $don_hang_maus = DonHangMau::orderBy('created_at', 'desc')->get();
        $orders = DonHang::orderBy('created_at', 'desc')
            ->with('user')
            ->with('don_hang_maus')
            ->where(function ($query) use ($request) {
                $query->where('ma_dh', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('status', 'LIKE', '%' . $request->search . '%')
                    ->orWhereHas('don_hang_maus', function ($subquery) use ($request) {
                        $subquery->where('ten_san_pham', 'LIKE', '%' . $request->search . '%');
                    })
                    ->orWhereHas('user', function ($subquery) use ($request) {
                        $subquery->where('name', 'LIKE', '%' . $request->search . '%')
                            ->orWhere('email', 'LIKE', '%' . $request->search . '%')
                            ->orWhere('phone', 'LIKE', '%' . $request->search . '%');
                    });
            })
            ->paginate(10);
        return view('admin.orders.index', compact('orders', 'don_hang_maus'));
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
        $hasNull  = DonHang::where('user_id', $user->id)
            ->where('status', 0)
            ->whereNull('don_hang_maus_id')
            ->exists();
        $don_gui = DonHang::where('user_id', $user->id)
            ->where('status', 0)->whereNotNull('don_hang_maus_id')->first();
        $don_hangs = DonHang::orderBy('created_at', 'desc')->where('user_id', $user->id)->with('don_hang_maus')->get();
        return view('pages.donhang.index', compact('don_hangs', 'hasNull', 'don_gui'));
    }
    public function guiDon(string $id)
    {
        $don_gui = DonHang::with(['user', 'don_hang_maus'])->find($id);
        if ($don_gui->don_hang_maus->tong_gia > $don_gui->user->sodu) {
            $thieu = $don_gui->don_hang_maus->tong_gia - $don_gui->user->sodu;
            return redirect()->back()->with('error', 'Số dư của bạn không đủ, thiếu tối thiểu ' . number_format($thieu) . ' đ');
        }
        $user = User::find($don_gui->user_id);
        $user->sodu -= $don_gui->don_hang_maus->tong_gia;
        $user->save();
        $don_gui->status = 2;
        $don_gui->save();
        return redirect()->back()->with('success', 'Gửi đơn hàng thành công');
    }
    public function xacNhan(string $id)
    {
        $order = DonHang::with(['user', 'don_hang_maus'])->find($id);
        // if ($order->don_hang_maus->tong_gia > $order->user->sodu) {
        //     return redirect()->back()->with('error', 'Số dư của người dùng không đủ');
        // }
        $user = User::find($order->user_id);
        $user->sodu = $user->sodu + $order->don_hang_maus->tong_gia + $order->don_hang_maus->tong_gia * 0.2;
        $user->save();
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
