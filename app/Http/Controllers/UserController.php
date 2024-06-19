<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    //
    public function index()
    {
        $items = User::where('level', 1)->paginate(5);
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
