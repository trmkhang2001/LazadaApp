<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoanRut;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
