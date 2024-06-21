<?php

namespace App\Http\Controllers;

use App\Models\Banks;
use App\Models\NapTien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NapTienController extends Controller
{
    public function index()
    {
        $items = NapTien::orderBy('created_at', 'desc')->with('user')->paginate(10);
        return view('admin.transaction.index', ['items' => $items]);
    }
    //
    public function nap_tien_view()
    {
        $tai_khoan = Banks::find(1);
        return view('pages.naptien.index', compact('tai_khoan'));
    }
    public function napTien(Request $req)
    {
        $req->validate([
            'tien_nap' => 'required',
        ]);
        $tien_nap = $req->tien_nap;
        $loai_nap = 1;
        $id = Auth::user()->id;
        $user = User::find($id);
        do {
            $ma_nap = Str::random(10);
        } while (NapTien::where('ma_nap', $ma_nap)->exists());
        $nap_tien = NapTien::create([
            'user_id' => $id,
            'ma_nap' => $ma_nap,
            'loai_nap' => $loai_nap,
            'phuong_thuc_thanh_toan' => 0,
            'so_tien_truoc' => $user->sodu,
            'so_tien_nap' => $tien_nap,
            'so_tien_sau' => ($user->sodu + $tien_nap),
            'status' => 0
        ]);
        return redirect()->back()->with('success', 'Xác nhận nạp tiền thành công');
    }
    public function xac_nhan(string $id)
    {
        $nap_tien = NapTien::find($id);
        $user = User::find($nap_tien->user_id);
        $user->sodu += $nap_tien->so_tien_nap;
        $nap_tien->status = 1;
        $user->save();
        $nap_tien->save();
        return redirect()->back()->with('success', 'Xác nhận nạp tiền thành công');
    }
    public function huy(string $id)
    {
        $nap_tien = NapTien::find($id);
        $nap_tien->status = -1;
        $nap_tien->save();
        return redirect()->back();
    }
}
