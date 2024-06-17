<?php

namespace App\Http\Controllers;

use App\Models\NapTien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NapTienController extends Controller
{
    public function index()
    {
        $items = NapTien::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.transaction.index', ['items' => $items]);
    }
    //
    public function napTien(Request $req)
    {
        // $tien_nap = $req->tien_nap;
        // $loai_nap = $req->loai_nap;
        $tien_nap = 200000;
        $loai_nap = 1;
        $id = Auth::user()->id;
        $user = User::find($id);
        do {
            $ma_nap = Str::random(10);
        } while (NapTien::where('ma_nap', $ma_nap)->exists());
        $nap_tien = NapTien::create([
            'id_user' => $id,
            'ma_nap' => $ma_nap,
            'loai_nap' => $loai_nap,
            'phuong_thuc_thanh_toan' => 0,
            'so_tien_truoc' => $user->sodu,
            'so_tien_nap' => $tien_nap,
            'so_tien_sau' => ($user->sodu + $tien_nap),
            'status' => 0
        ]);
        $user->sodu -= $tien_nap;
        $user->save();
        var_dump($user);
        var_dump($nap_tien);
    }
}
