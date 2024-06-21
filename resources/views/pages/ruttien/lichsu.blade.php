@extends('layout.layout')
@section('noidung')
    <div class="mx-2">
        <div class="">
            Lịch sử rút
        </div>
        <div class="bg-white border-rad10 p-3">
            <div class="card__body">
                <div>Mã lệnh rút:<span class="text-red">RT1312</span></div><!---->
                <div>Số tiền trước khi rút: 34.100 ₫</div>
                <div>Số tiền rút:<span class="text-red">5.000 ₫</span>
                </div>
                <div>Số tiền sau khi rút: 39.100 ₫</div>
                <div>Trạng thái rút: <span class="alert-success">thành công</span></div>
                <div>Thời gian rút: 2024-06-18 10:20:02</div>
                <div class="">
                    <span>Tài khoản rút:</span>
                    <div class="">Kiểu tài khoản: <span>BANK</span></div>
                    <div class="">Chủ tài khoản: <span>Minh Khang</span></div>
                    <div class="">Tên ngân hàng: <span>Vietcobank</span></div>
                    <div class="">Tài khoản: <span>123131231</span></div>
                    <div class="">Số điện thoại dự bị: <span>01111111</span></div>
                </div>
            </div>
        </div>
    </div><!---->
@endsection
