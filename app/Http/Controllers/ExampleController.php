<?php

namespace App\Http\Controllers;

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
        return view('pages.profile.taikhoanrut');
    }
    public function post_taikhoanrut(Request $req)
    {
        $req->validate([
            'chu_tai_khoan' => 'required',
            'so_dien_thoai' => 'required',
            'ten_ngan_hang' => 'required',
            'tai_khoan' => 'required',
            'mat_khau_rut' => 'required'
        ]);
        $user = User::find(Auth::user()->id);
        if($req->mat_khau_rut!=$user->pass_rut_tien){
            return redirect()
        }
    }
}
