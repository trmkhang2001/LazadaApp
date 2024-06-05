<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

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
            'phone' => 'required',
            'password' => 'required',
            'cfpassword' => 'required',
            'matkhauruttien' => 'required',
            'xnmatkhauruttien' => 'required'
        ]);
        $aff_code = $req->aff_code;
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
                'aff_code' => $req->phone
            ]
        );
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
        return redirect('/');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        Auth::guard('web')->logout();

        return redirect('/login');
    }
}
