@extends('auth.layout')
@section('content')
    <div class="pt-5">
        <div class="text-center">
            <img src="https://da7979.com/static/media/logo_lzd.45c33342471fc96718b6.png" alt=""
                style="width: 80px;    height: 67px;" class="rounded">
            <h3 class="text-center text-white">Larada</h3>
        </div>
        <form action="" class="px-5 pt-5">
            <div class="mb-3">
                <input type="text" class="form-control" id="username" placeholder="Mời bạn nhập số điện thoại">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="password" placeholder="Mời bạn nhập mật khẩu">
            </div>
            <div class="mt-5 mb-3">
                <button type="submit" class="btn btn-light w-100">Đăng nhập</button>
            </div>
            <div class="mb-3">
                <a href="" class="btn btn-primary w-100">Đăng ký</a>
            </div>
        </form>
    </div>
@stop
