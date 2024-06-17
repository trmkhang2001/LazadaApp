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
    }
}
