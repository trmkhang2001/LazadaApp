@extends('layout.layout')
@section('noidung')
    <div class="mx-2">
        <div class="text-center fw-bold mb-3">
            Lịch sử rút
        </div>
        @foreach ($lich_sus as $ls)
            <div class="bg-white border-rad10 p-3 mb-3">
                <div class="card__body">
                    <div><span class="fw-bold">Mã lệnh rút:</span> <span class="text-red">{{ 'RT' . $ls->id }}</span></div>
                    <!---->
                    <div>Số tiền trước khi rút: {{ number_format($ls->so_tien_truoc) . ' ₫' }} </div>
                    <div>Số tiền rút:<span class="text-red">{{ number_format($ls->so_tien_rut) . ' ₫' }}</span>
                    </div>
                    <div>Số tiền sau khi rút: {{ number_format($ls->so_tien_sau) . ' ₫' }}</div>
                    <div>Trạng thái rút: @if ($ls->status == 1)
                            <span class="p-1 alert-success border-rad10">Thành công</span>
                        @elseif($ls->status == -1)
                            <span class="p-1 alert-danger border-rad10">Đẫ huỷ</span>
                        @else
                            <span class="p-1 alert-warning border-rad10">Đang gửi</span>
                        @endif
                    </div>
                    <div>Thời gian rút: {{ $ls->created_at }}</div>
                    <div class="">
                        <span class="fw-bold">Tài khoản rút:</span>
                        <div class="">Kiểu tài khoản: <span>BANK</span></div>
                        <div class="">Chủ tài khoản: <span>{{ $ls->taikhoanrut->chu_tai_khoan }}</span></div>
                        <div class="">Tên ngân hàng: <span>{{ $ls->taikhoanrut->ten_ngan_hang }}</span></div>
                        <div class="">Tài khoản: <span>{{ $ls->taikhoanrut->tai_khoan }}</span></div>
                        <div class="">Số điện thoại dự bị: <span>{{ $ls->taikhoanrut->so_dien_thoai }}</span></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div><!---->
@endsection
