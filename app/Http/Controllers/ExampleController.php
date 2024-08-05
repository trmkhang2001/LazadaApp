<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use App\Models\TaiKhoanRut;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ExampleController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;

        // Lấy ngày hôm qua và hôm nay
        $today = Carbon::today();
        $yesterday = Carbon::yesterday();

        // Tính tổng giá hôm nay
        $tongGiaHienTai = DonHang::where('don_hangs.user_id', $userId)
            ->where('don_hangs.status', 1)
            ->whereDate('don_hangs.created_at', $today)
            ->join('don_hang_maus', 'don_hang_maus.id', '=', 'don_hangs.don_hang_maus_id')
            ->sum('don_hang_maus.tong_gia');

        // Tính tổng giá ngày hôm qua
        $tongGiaHomQua = DonHang::where('don_hangs.user_id', $userId)
            ->where('don_hangs.status', 1)
            ->whereDate('don_hangs.created_at', $yesterday)
            ->join('don_hang_maus', 'don_hang_maus.id', '=', 'don_hangs.don_hang_maus_id')
            ->sum('don_hang_maus.tong_gia');

        // Tính tổng giá toàn bộ
        $tongGiaTong = DonHang::where('don_hangs.user_id', $userId)
            ->where('don_hangs.status', 1)
            ->join('don_hang_maus', 'don_hang_maus.id', '=', 'don_hangs.don_hang_maus_id')
            ->sum('don_hang_maus.tong_gia');

        // Hiển thị kết quả để kiểm tra
        // var_dump($tongGiaHienTai, $tongGiaHomQua, $tongGiaTong);

        // Trả về view với dữ liệu
        $profile = User::find(Auth::user()->id);
        return view('pages.home.index', compact('profile', 'tongGiaHienTai', 'tongGiaHomQua', 'tongGiaTong'));
    }
    public function profile()
    {
        $profile = User::find(Auth::user()->id);
        return view('pages.profile.index', compact('profile'));
    }
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function chamsoc()
    {
        return view('pages.chamsoc.index');
    }
    public function taikhoanrut()
    {
        $taikhoans = TaiKhoanRut::where('user_id', Auth::user()->id)->get();
        return view('pages.profile.taikhoanrut', compact('taikhoans'));
    }
    public function post_taikhoanrut(Request $req)
    {
        $req->validate([
            'chu_tai_khoan' => 'required',
            'so_dien_thoai' => 'required',
            'ten_ngan_hang' => 'required',
            'tai_khoan' => 'required',
        ]);
        $user = User::find(Auth::user()->id);
        $taikhoan = TaiKhoanRut::create([
            'user_id' => $user->id,
            'kieu_tai_khoan' => 'BANK',
            'ten_ngan_hang' => $req->ten_ngan_hang,
            'tai_khoan' => $req->tai_khoan,
            'chu_tai_khoan' => $req->chu_tai_khoan,
            'so_dien_thoai' => $req->so_dien_thoai
        ]);
        return redirect()->back()->with('success', 'Thên thông tin rút tiền thành công');
    }
    public function quanlymatkhau()
    {
        return view('pages.profile.matkhau');
    }

    public function doimatkhaudangnhap(Request $request)
    {
        $request->validate(
            [
                'old_password' => 'required',
                'new_password' => 'required|min:8',
                'cf_password' => 'required|min:8',
            ],
            [
                'required' => 'Vui lòng nhập thông tin.',
                'min' => 'Độ dài phải từ 8 ký tự.',
            ]
        );
        if ($request->new_password != $request->cf_password) {
            return back()->with('error', 'Mật khẩu xác thực không đúng ');
        }
        $user = User::find(Auth::user()->id);

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->with('error', 'Mật khẩu cũ không đúng');
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Mật khẩu đã được thay đổi thành công');
    }
    public function doimatkhauruttien(Request $request)
    {
        $request->validate(
            [
                'old_password' => 'required',
                'new_password' => 'required|min:6',
                'cf_password' => 'required|min:6',
            ],
            [
                'required' => 'Vui lòng nhập thông tin.',
                'min' => 'Độ dài phải từ 6 ký tự.',
            ]
        );
        if ($request->new_password != $request->cf_password) {
            return back()->with('error', 'Mật khẩu xác thực không đúng ');
        }
        $user = User::find(Auth::user()->id);

        if ($request->old_password != $user->pass_rut_tien) {
            return back()->with('error', 'Mật khẩu cũ không đúng');
        }

        $user->pass_rut_tien = $request->new_password;
        $user->save();

        return back()->with('success', 'Mật khẩu rút tiền đã được thay đổi thành công');
    }
    public function congbo()
    {
        $congbos = DonHang::where('user_id', Auth::user()->id)->get();
        return view('pages.congbo.index', compact('congbos'));
    }
}
