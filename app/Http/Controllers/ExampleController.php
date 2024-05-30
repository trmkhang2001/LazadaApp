<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(){
        return view('pages.home.index');
    }
    public function profile(){
        return view('pages.profile.index');
    }
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
}
