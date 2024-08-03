<?php

namespace App\Http\Controllers;

use App\Models\DonHangMau;
use Illuminate\Http\Request;

class DonHangMauController extends Controller
{
    //
    public function index()
    {
        $items =  DonHangMau::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.product.index', ['items' => $items]);
    }
    public function search(Request $request)
    {
        $items = DonHangMau::where('sku', 'LIKE', '%' . $request->search . '%')->orwhere('name', 'LIKE', '%' . $request->search . '%')->paginate(5);
        return view('admin.product.index', compact('items'));
    }
    public function create()
    {
        return view('admin.product.create');
    }
    public function store(Request $req)
    {
        $req->validate([
            'ten_san_pham' => 'required',
            'hinh_san_pham' => 'required',
            'tong_gia' => 'required'
        ]);
        DonHangMau::create(
            [
                'ten_san_pham' => $req->ten_san_pham,
                'hinh_san_pham' => $req->hinh_san_pham,
                'tong_gia' => $req->tong_gia,
            ]
        );
        return redirect()->route('donhangmau.index')->with('success', 'Tạo sản phẩm mẫu thành công');
    }
    public function edit($id)
    {
        $item = DonHangMau::find($id);
        return view('admin.product.edit', compact('item'));
    }
    public function editPost(Request $req, $id)
    {
        $item = DonHangMau::find($id);
        $req->validate([
            'ten_san_pham' => 'required',
            'hinh_san_pham' => 'required',
            'tong_gia' => 'required'
        ]);
        $item->ten_san_pham = $req->ten_san_pham;
        $item->hinh_san_pham = $req->hinh_san_pham;
        $item->tong_gia = $req->tong_gia;
        $item->save();
        return redirect()->route('donhangmau.index')->with('success', 'Cập nhật sản phẩm mẫu thành công');
    }
    public function delete($id)
    {
        $item = DonHangMau::find($id);
        $item->delete();
        return redirect()->route('donhangmau.index')->with('success', 'Xoá sản phẩm mẫu thành công');
    }
}
