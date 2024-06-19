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
