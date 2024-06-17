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
        <div class="home">
            <div class="" style="padding-top: 5rem"></div>
            <div id="carouselExampleIndicators" class="carousel slide py-5" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://img.lazcdn.com/us/domino/fe623ca4bad4a9fd560e20cecd024cd0.jpg_2200x2200q80.jpg_.webp"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.lazcdn.com/us/domino/b86b602fef0f9a28940a283a4609db97.jpg_2200x2200q80.jpg_.webp"
                            class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://img.lazcdn.com/us/domino/758abdd8e91b24756e773b13bdc458cd.jpg_2200x2200q80.jpg_.webp"
                            class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="">
            <div class="mb-3">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
            <div class="mb-4">
                <h3>Thông tin chuyển khoản</h3>
                <div class="mb-3">
                    <label for="form-label">Ngân hàng</label>
                    <input type="text" class="form-control" value="{{ $tai_khoan->ngan_hang }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="form-label">Chủ tài khoản</label>
                    <input type="text" class="form-control" value="{{ $tai_khoan->ho_ten }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="form-label">Tài khoản</label>
                    <input type="text" class="form-control" value="{{ $tai_khoan->tai_khoan }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="form-label">Nội dung</label>
                    <input type="text" class="form-control" value="{{ Auth::user()->phone }}" readonly>
                </div>
            </div>
            <form action="{{ route('nap_tien') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="form-label">Nhập số tiền nạp</label>
                    <input type="text" name="tien_nap" class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"> Xác nhận </button>
                </div>
            </form>
        </div>
        <div class="" style="margin-top: 50px"></div>
    </div>
@stop
