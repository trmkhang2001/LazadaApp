<?php

namespace App\Http\Controllers;

use App\Models\TaiKhoanRut;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThongTinRutController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->level == 1000) {
            $aff_code = Auth::user()->phone;
            $items = RutTien::orderBy('created_at', 'desc')
                ->with(['user', 'taikhoanrut'])
                ->whereHas('user', function ($query) use ($aff_code) {
                    $query->where('aff_code', $aff_code);
                })
                ->paginate(8);
        } elseif (Auth::user()->level == 1024) {
            $items = TaiKhoanRut::orderBy('created_at', 'desc')->paginate(5);
        }
        return view('admin.thongtinrut.index', compact('items'));
    }
    public function search(Request $req)
    {
        $req->validate([
            'search' => 'required',
        ]);
        $id = User::where('phone', $req->search)->first();
        $items = TaiKhoanRut::orderBy('created_at', 'desc')->where('user_id', $id->id)->paginate(5);
        return view('admin.thongtinrut.index', compact('items'));
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required|exists:tai_khoan_ruts,id',
            'ten_ngan_hang' => 'required|string|max:255',
            'tai_khoan' => 'required|string|max:255',
            'chu_tai_khoan' => 'required|string|max:255',
            'so_dien_thoai' => 'required|string|max:255',
        ]);

        $taikhoan = TaiKhoanRut::findOrFail($request->id);
        $taikhoan->update($validated);

        return redirect()->back()->with('success', 'Cập nhật thông tin tài khoản thành công!');
    }
}
