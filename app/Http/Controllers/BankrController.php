<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banks;
use Illuminate\Http\Request;

class BankrController extends Controller
{
    //\
    public function index()
    {
        $item = Banks::find(1);
        return view('admin.bank.index', compact('item'));
    }
    public function update(Request $request)
    {
        $item = Banks::find(1);
        $item->ngan_hang = $request->ngan_hang;
        $item->tai_khoan = $request->tai_khoan;
        $item->ho_ten = $request->ho_ten;
        $item->save();
        return redirect()->back();
    }
}
