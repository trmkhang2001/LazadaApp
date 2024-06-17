<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoanRut;
use Illuminate\Http\Request;

class ThongTinRutController extends Controller
{
    //
    public function index()
    {
        $items = TaiKhoanRut::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.thongtinrut.index', compact('items'));
    }
}
