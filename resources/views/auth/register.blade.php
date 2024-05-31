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
                <input type="text" class="form-control" id="username" placeholder="Mã mời">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="username" placeholder="Số điện thoại">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="cfpassword" placeholder="Xác nhận mật khẩu">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="matkhauruttien" placeholder="Mật khẩu rút tiền">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="xnmatkhauruttien" placeholder="Xác nhật mật khẩu rút tiền">
            </div>
            <div class="mt-5 mb-3">
                <button type="submit" class="btn btn-light w-100">Gửi</button>
            </div>
            <div class="mb-3">
                <a href="/login" class="btn btn-primary w-100">Đăng nhập</a>
            </div>
        </form>
    </div>
@stop
