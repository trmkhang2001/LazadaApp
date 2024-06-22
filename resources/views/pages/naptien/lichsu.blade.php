@extends('layout.layout')
@section('noidung')
    <div class="mx-2">
        <div class="text-center fw-bold mb-3">
            Lịch sử rút
        </div>
        @foreach ($lich_sus as $ls)
            <div class="bg-white border-rad10 p-3 mb-3">
                <div class="card__body">
                    <div><span class="fw-bold">Mã lệnh nạp:</span> <span class="text-red">{{ $ls->ma_nap }}</span></div>
                    <!---->
                    <div>Số tiền trước khi nạp: {{ number_format($ls->so_tien_truoc) . ' ₫' }} </div>
                    <div>Số tiền nạp:<span class="text-red">{{ number_format($ls->so_tien_nap) . ' ₫' }}</span>
                    </div>
                    <div>Số tiền sau khi nạp: {{ number_format($ls->so_tien_sau) . ' ₫' }}</div>
                    <div>Trạng thái nạp: @if ($ls->status == 1)
                            <span class="p-1 alert-success border-rad10">Thành công</span>
                        @elseif($ls->status == 0)
                            <span class="p-1 alert-warning border-rad10">Chờ cập nhật</span>
                        @elseif ($ls->status == -1)
                            <span class="p-1 alert-danger border-rad10">Đã bác bỏ</span>
                        @endif
                    </div>
                    <div>Thời gian nạp: {{ $ls->created_at }}</div>
                </div>
            </div>
        @endforeach
    </div><!---->
@endsection
