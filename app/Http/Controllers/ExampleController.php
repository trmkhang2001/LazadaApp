<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoanRut;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ExampleController extends Controller
{
    public function index()
    {
        $profile = User::find(Auth::user()->id);
        return view('pages.home.index', compact('profile'));
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
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = User::find(Auth::user()->id);

        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Mật khẩu cũ không đúng']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Mật khẩu đã được thay đổi thành công');
    }
}
