@extends('admin.layouts.app')
@section('contents')
    <div class="bg-white p-4">
        <form action="">
            <div class="d-flex mb-3">
                <div class="me-3">
                    <span>Mật khẩu cũ</span>
                </div>
                <div class="">
                    <input type="password" name="old_pass" placeholder="Mật khẩu cũ" class="form-control field_input">
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="me-3">
                    <span>Mật khẩu mới</span>
                </div>
                <div class="">
                    <input type="password" name="new_pass" placeholder="Mật khẩu mới" class="form-control field_input">
                </div>
            </div>
            <div class="d-flex mb-3">
                <div class="me-3">
                    <span>Xác nhận mật khẩu mới</span>
                </div>
                <div class="">
                    <input type="password" name="conf_new_pass" placeholder="Xác nhận mật khẩu mới"
                        class="form-control field_input">
                </div>
            </div>
            <div class="d-flex">
                <button class="btn-blue border-0">Xác nhận</button>
            </div>
        </form>
    </div>
@endsection
