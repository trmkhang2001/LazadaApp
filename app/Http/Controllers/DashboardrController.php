<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use App\Models\NapTien;
use App\Models\RutTien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardrController extends Controller
{
    //
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $phone = $user->phone;
        // Tìm tất cả người dùng có aff_code giống với số điện thoại của người đăng nhập
        $usersWithMatchingAffCode = User::where('aff_code', $phone)->pluck('id');

        // Tính tổng so_tien_nap cho những người dùng này
        $totalSoTienNap = NapTien::whereIn('user_id', $usersWithMatchingAffCode)->sum('so_tien_nap');
        $totalSoTienRut = RutTien::whereIn('user_id', $usersWithMatchingAffCode)->sum('so_tien_rut');
        $totalUsers = $usersWithMatchingAffCode->count();
        $nguoidung = User::count();
        $dangkymoi = User::where('level', 1)->count();
        $donhang = DonHang::count();
        return view('admin.dashboard.index', compact('donhang', 'nguoidung', 'dangkymoi', 'totalSoTienNap', 'totalSoTienRut', 'totalUsers'));
    }
    public function doipass()
    {
        return view('admin.profile.doipass');
    }
}
