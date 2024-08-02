<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NapTien;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

use function PHPUnit\Framework\isEmpty;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function postRegister(Request $req)
    {
        $validated = $req->validate([
            'aff_code' => 'required',
            'phone' => 'required|unique:users,phone',
            'password' => 'required',
            'cfpassword' => 'required',
            'matkhauruttien' => 'required',
            'xnmatkhauruttien' => 'required'
        ]);
        $aff_code = $req->aff_code;
        $user = ModelsUser::where('phone', $aff_code)->first();
        if (!$user) {
            return redirect()->back()->withErrors(['msg' => 'Mã mời không tôn tại']);
        }
        $phone = $req->phone;
        $password = $req->password;
        $cfpassword = $req->cfpassword;
        $matkhauruttien = $req->matkhauruttien;
        $xnmatkhauruttien = $req->xnmatkhauruttien;
        $user = ModelsUser::create(
            [
                'phone' => $req->phone,
                'password' => $req->password,
                'pass_rut_tien' => $req->matkhauruttien,
                'level' => 1,
                'status' => 1,
                'aff_code' => $req->aff_code,
                'sodu' => 30000
            ]
        );
        $id = $user->id;
        do {
            $ma_nap = Str::random(10);
        } while (NapTien::where('ma_nap', $ma_nap)->exists());
        NapTien::create([
            'user_id' => $id,
            'ma_nap' => $ma_nap,
            'loai_nap' => 0,
            'phuong_thuc_thanh_toan' => 0,
            'so_tien_truoc' => 0,
            'so_tien_nap' => 30000,
            'so_tien_sau' => 30000,
            'status' => 1
        ]);
        return redirect('login');
    }
    public function postLogin(Request $req)
    {
        $validated = $req->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);
        if (!Auth::attempt($req->only('phone', 'password'), $req->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
        if (Auth::user()->level == 1024 || Auth::user()->level == 1000) {
            return redirect('/admin');
        }
        return redirect('/');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        Auth::guard('web')->logout();

        return redirect('/login');
    }
}
