<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardrController extends Controller
{
    //
    public function index()
    {
        $nguoidung = User::count();
        $donhang = DonHang::count();
        return view('admin.dashboard.index', compact('donhang', 'nguoidung'));
    }
    public function doipass()
    {
        return view('admin.profile.doipass');
    }
}
