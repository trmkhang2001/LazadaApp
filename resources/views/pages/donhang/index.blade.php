@extends('layout.layout')
@section('content')
    <header class="d-flex justify-content-between px-8 py-5 fixed top-0 w-100 max-w-520 z-50 bg-white">
        <div class="w-3-5-rem h-3-rem "><img src="https://da7979.com/static/media/logo_lzd.45c33342471fc96718b6.png"
                class="rounded-lg">
        </div>
        <div class=" font-bold text-18-rem  text-[#000]">Lazada</div>
        <div class="d-flex items-center"><img
                src="data:image/png;base64,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"
                class="w-3rem h-2rem mr-4"><a href="/support"><img
                    src="https://da7979.com/static/media/cskh_login.3fc99be87347a72979c0.png" class="w-2rem h-2rem"></a>
        </div>
    </header>
    <div class="px-2">
        <div class="">
            <div class="mb-3">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif
            </div>
            <div class="mb-4">
                <h4 class="text-center">Thông tin đơn hàng</h4>
            </div>
            <div class="p-2">
                @foreach ($don_hangs as $don)
                    @if (isset($don->don_hang_maus))
                        <div class="mb-2 border p-2 rounded" style="background: rgb(245, 245, 245)">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ $don->don_hang_maus->hinh_san_pham }}" alt="" class="rounded">
                                </div>
                                <div class="col-5">
                                    <div class="mb-1">Mã đơn hàng: {{ $don->ma_dh }}</div>
                                    <div class="mb-1">Tên sản phẩm:
                                        {{ $don->don_hang_maus->ten_san_pham }}
                                    </div>
                                    <div class="mb-1">Giá:
                                        {{ number_format($don->don_hang_maus->tong_gia) . ' VNĐ' }}
                                    </div>
                                    <div class="mb-1">Hoa hồng:
                                        {{ number_format($don->don_hang_maus->tong_gia * 0.2) . ' VNĐ' }}
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2"> <span class="text-danger">Chờ gửi</span></div>
                                    <div> <a href="" class="btn btn-primary">Gửi đơn</a></div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="" style="margin-top: 50px"></div>
    </div>
@stop
