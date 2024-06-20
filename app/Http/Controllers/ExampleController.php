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
}
