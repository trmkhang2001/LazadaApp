@extends('auth.layout')
@section('content')
    <div class="pt-5">
        <div class="text-center">
            <img src="https://da8975.com/api//file/front/1c233457962c411fb234ad445f08787b_.jpg" alt=""
                style="width: 80px;    height: 80px;">
        </div>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <form action="/login" class="px-5 pt-5" method="POST">
            @csrf

            <div class="mb-3">
                <input type="text" class="form-control field_input input_log" id="phone"
                    placeholder="Mời bạn nhập số điện thoại" name="phone" value="{{ old('phone') }}">
                @error('phone')
                    <span class="mt-1 ms-1" style="color: rgb(165, 54, 54)">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control field_input input_log" id="password"
                    placeholder="Mời bạn nhập mật khẩu" name="password" value="{{ old('password') }}">
                @error('password')
                    <span class="mt-1 ms-1" style="color: rgb(165, 54, 54)">{{ $message }}</span>
                @enderror
            </div>
            <div class="mt-5 mb-3">
                <button type="submit" class="btn btn-light w-100 border-rad15">Đăng nhập</button>
            </div>
            <div class="mb-3">
                <a href="/register" class="btn btn-primary w-100 border-rad15">Đăng ký</a>
            </div>
        </form>
    </div>
@stop
