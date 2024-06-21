<?php

namespace App\Http\Controllers;

use App\Models\RutTien;
use App\Models\TaiKhoanRut;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RutTienController extends Controller
{
    //client
    public function rutTien()
    {
        $profile = User::find(Auth::user()->id);
        $tai_khoan_ruts = TaiKhoanRut::where('user_id', Auth::user()->id)->get();
        return view('pages.ruttien.index', compact('tai_khoan_ruts', 'profile'));
    }
    public function taoLenhRut(Request $req)
    {
        $req->validate([
            'taikhoan' => 'required',
            'tienrut' => 'required',
            'pass_rut_tien' => 'required',
        ]);
        $user = User::find(Auth::user()->id);
        if ($req->pass_rut_tien != $user->pass_rut_tien) {
            return redirect()->back()->with('error', 'Mật khẩu rút tiền không chính xác');
        }
        if ($req->tienrut > $user->sodu) {
            return redirect()->back()->with('error', 'Số dư không đủ');
        }
        $rutien = RutTien::create([
            'user_id' => $user->id,
            'so_tien_truoc' => $user->sodu,
            'so_tien_rut' => $req->tienrut,
            'tai_khoan_rut_id' => $req->taikhoan,
            'so_tien_sau' => ($user->sodu - $req->tienrut),
            'status' => 0
        ]);
        $user->sodu -= $rutien->so_tien_rut;
        $user->save();
        return redirect()->back()->with('success', 'Tạo lệnh rút tành công');
    }
    public function lichSuRut()
    {
        $lich_sus = RutTien::where('user_id', Auth::user()->id)->with('taikhoanrut')->get();
        return view('pages.ruttien.lichsu', compact('lich_sus'));
    }
    //admin
    public function index()
    {
        $items = RutTien::orderBy('created_at', 'desc')
            ->with(['user', 'taikhoanrut'])
            ->paginate(8);
        return view('admin.ruttien.index', compact('items'));
    }
    public function xacnhan(string $id)
    {
        $item = RutTien::find($id);
        $item->status = 1;
        $item->save();
        return redirect()->back()->with('success', 'Xác nhận rút tiền');
    }
    public function huy(string $id)
    {
        $item = RutTien::find($id);
        $item->status = -1;
        $item->save();
        return redirect()->back()->with('success', 'Huỷ rút tiền');
    }
}
