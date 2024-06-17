<?php

namespace App\Http\Controllers;

use App\Models\DonHangMau;
use Illuminate\Http\Request;

class DonHangMauController extends Controller
{
    //
    public function index()
    {
        $items =  DonHangMau::orderBy('created_at', 'desc')->paginate(5);
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
}
