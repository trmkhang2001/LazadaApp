@extends('auth.layout')
@section('content')
    <div class="pt-5">
        <div class="text-center">
            <img src="https://da8975.com/api//file/front/1c233457962c411fb234ad445f08787b_.jpg" alt=""
                style="width: 80px;    height: 80px;">
        </div>
        <form action="/register" class="px-5 pt-5" method="POST">
            @csrf
            @if ($errors->any())
                <h4 class="alert alert-danger">{{ $errors->first() }}</h4>
            @endif
            <div class="mb-3">
                <input type="text" class="form-control input_log @error('title') is-invalid @enderror" id="aff_code"
                    placeholder="Mã mời" value="{{ old('aff_code') }}" name="aff_code">
                @error('aff_code')
                    <span class="mt-1 ms-1" style="color: rgb(165, 54, 54)">Vui lòng điền mã mời</span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control input_log" id="phone" placeholder="Số điện thoại"
                    value="{{ old('phone') }}" name="phone">
                @error('phone')
                    <span class="mt-1 ms-1" style="color: rgb(165, 54, 54)">Vui lòng điền số điện thoại</span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control input_log" id="password" placeholder="Mật khẩu" name="password">
                @error('password')
                    <span class="mt-1 ms-1" style="color: rgb(165, 54, 54)">Vui lòng điền mật khẩu hợp lệ</span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control input_log" id="cfpassword" placeholder="Xác nhận mật khẩu"
                    name="cfpassword">
                @error('cfpassword')
                    <span class="mt-1 ms-1" style="color: rgb(165, 54, 54)">Vui lòng điền mật khẩu hợp lệ</span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control input_log" id="matkhauruttien" placeholder="Mật khẩu rút tiền"
                    name="matkhauruttien">
                @error('matkhauruttien')
                    <span class="mt-1 ms-1" style="color: rgb(165, 54, 54)">Vui lòng điền mật khẩu rút tiền</span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control input_log" id="xnmatkhauruttien"
                    placeholder="Xác nhật mật khẩu rút tiền" name="xnmatkhauruttien">
                @error('xnmatkhauruttien')
                    <span class="mt-1 ms-1" style="color: rgb(165, 54, 54)">Vui lòng xác nhận mật khẩu rút tiền</span>
                @enderror
            </div>
            <div class="mt-5 mb-3">
                <button type="submit" class="btn btn-light w-100 border-rad15">Gửi</button>
            </div>
            <div class="mb-3">
                <a href="/login" class="btn btn-primary w-100 border-rad15">Đăng nhập</a>
            </div>
        </form>
    </div>
@stop
