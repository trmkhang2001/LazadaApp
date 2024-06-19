<?php

namespace App\Http\Controllers;

use App\Models\RutTien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RutTienController extends Controller
{
    //client
    public function rutTien()
    {
        return view('pages.ruttien.index');
    }
    public function taoLenhRut(Request $req)
    {
        $req->validate([
            'tienrut' => 'required',
        ]);
        $user = User::find(Auth::user()->id);
        var_dump($user);
        if ($req->tienrut > $user->sodu) {
            return redirect()->back()->with('error', 'Số dư không đủ');
        }
        $rutien = RutTien::create([
            'user_id' => $user->id,
            'so_tien_truoc' => $user->sodu,
            'so_tien_rut' => $req->tienrut,
            'so_tien_sau' => ($user->sodu - $req->tienrut),
            'status' => 0
        ]);
        $user->sodu -= $rutien->so_tien_rut;
        $user->save();
        return redirect()->back()->with('success', 'Tạo lệnh rút tành công');
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
