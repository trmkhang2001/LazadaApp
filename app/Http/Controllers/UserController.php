<?php

namespace App\Http\Controllers;

use App\Models\NapTien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    //
    public function index()
    {
        if (Auth::user()->level == 1024) {
            $items = User::paginate(5);
        } else {
            $aff_code = Auth::user()->phone;
            $items = User::where('level', '!=', 1024)
                ->where('level', '!=', 1000)
                ->where('aff_code', $aff_code)
                ->paginate(5);
        }
        return view('admin.user.index', compact('items'));
    }
    public function search(Request $request)
    {
        $items = User::where('level', 1)
            ->where(function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('email', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('phone', 'LIKE', '%' . $request->search . '%');
            })
            ->paginate(5);
        return view('admin.user.index', compact('items'));
    }
    public function edit(string $id)
    {
        $user = User::find($id);
        return view('admin.user.create', compact('user'));
    }
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $user->update(
            $request->all(),
        );
        return redirect()->route('thanhvien.index')->with('success', 'Cập nhật thông tin người dùng ' . $user->phone . ' thành công');
    }
    public function congtien(string $id, Request $req)
    {
        $req->validate([
            'tiennap' => 'required',
        ]);
        $user = User::find($id);
        $user->sodu += $req->tiennap;
        do {
            $ma_nap = Str::random(10);
        } while (NapTien::where('ma_nap', $ma_nap)->exists());
        NapTien::create([
            'user_id' => $id,
            'ma_nap' => $ma_nap,
            'loai_nap' => 3,
            'phuong_thuc_thanh_toan' => 0,
            'so_tien_truoc' => $user->sodu,
            'so_tien_nap' => $req->tiennap,
            'so_tien_sau' => ($user->sodu + $req->tiennap),
            'status' => 1
        ]);
        $user->save();
        return redirect()->back()->with('success', 'Cộng tiền thành công');
    }
    public function trutien(string $id, Request $req)
    {
        $req->validate([
            'tientru' => 'required',
        ]);
        $user = User::find($id);
        if ($req->tientru > $user->sodu) {
            return redirect()->back()->with('error', 'Số tiền trừ phải nhỏ hơn số dư');
        }
        $user->sodu -= $req->tientru;
        $user->save();
        return redirect()->back()->with('success', 'Trừ tiền thành công');
    }
    public function dongbang(string $id)
    {
        $user = User::find($id);
        $user->status = 0;
        $user->save();
        return redirect()->back()->with('success', 'Đóng băng tài khoản thành công');
    }
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('thanhvien.index')->with('success', 'Xoá người dùng thành công');
    }
}
