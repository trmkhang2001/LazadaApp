@extends('layout.layout')
@section('noidung')
    <div class="mx-2">
        {{-- Menu home --}}
        <div class="">
            <div class="d-flex mt-4">
                <div class="box-flex-50 border-rad8 bg-white m-2">
                    <a href="/nap_tien_view">
                        <div class="d-flex align-items-center p-3">
                            <img src="https://da8975.com/static/mobile/home/ic_recharge.png"
                                style="width: 40px; height: 40px">
                            <div class="ms-2 fs-bold" style="color: rgb(131, 137, 251);">Nạp tiền ngay bây giờ
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box-flex-50 border-rad8 bg-white m-2">
                    <a href="/tao_lenh_rut">
                        <div class="d-flex align-items-center p-3">
                            <img src="https://da8975.com/static/mobile/home/ic_withdraw.png"
                                style="width: 40px; height: 40px">
                            <div class="ms-2 fs-bold" style="color: rgb(251, 152, 51);">Rút tiền nhanh chóng
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="d-flex">
                <div class="box-flex-50 border-rad8 bg-white m-2">
                    <a href="">
                        <div class="d-flex align-items-center p-3">
                            <img src="https://da8975.com/static/mobile/home/ic_invite.png"
                                style="width: 40px; height: 40px">
                            <div class="ms-2 fs-bold" style="color: rgb(58, 192, 127);">Mời bạn bè
                            </div>
                        </div>
                    </a>
                </div>
                <div class="box-flex-50 border-rad8 bg-white m-2">
                    <a href="/chamsoc">
                        <div class="d-flex align-items-center p-3">
                            <img src="https://da8975.com/static/mobile/home/telegram.png" style="width: 40px; height: 40px">
                            <div class="ms-2 fs-bold" style="color: rgb(46, 143, 255);">Chăm sóc khách hàng
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        {{-- Card info --}}
        <div class="earning">
            <div class="d-flex justify-content-between pt-2 px-4">
                <div class="">
                    {{ $profile->phone }}
                </div>
                <div class="text-center">
                    {{ $profile->aff_code }}
                </div>
            </div>
            <div class="d-flex justify-content-between pt-2 px-4">
                <div class="">
                    Số dư tài khoản
                </div>
                <div class="text-center">
                    Kinh phí nhiệm vụ
                </div>
            </div>
            <div class="d-flex justify-content-between pt-2 px-4 fs-2 fw-bold">
                <div class="">
                    {{ number_format($profile->sodu) }} ₫ </div>
                <div class="text-center">
                    0 ₫
                </div>
            </div>
            <div class="d-flex  pt-2 px-4">
                <div class="flex-full">
                    Thu thập hôm nay
                    <br>
                    0 ₫
                </div>
                <div class="flex-full">
                    Thu thập hôm qua
                    <br>
                    0 ₫
                </div>
            </div>
            <div class="d-flex pt-2 pb-2 px-4">
                <div class="flex-full">
                    Thu thập tích luỹ
                    <br>
                    0 ₫
                </div>
                <div class="flex-full">
                    Lợi ích nhóm
                    <br>
                    0 ₫
                </div>
            </div>
        </div>
        {{-- Vip --}}
        <div class="mt-2 bg-white" style="width: 195px;    border-radius: 10px;">
            <div class="py-2">
                <div class="d-flex mt-2 align-items-center fw-bold mx-2">
                    <div class=" me-3"
                        style="background: red;padding:.08rem .266666667rem;color:#FFFFFF;border-radius: .266666667rem; ">
                        VIP1
                    </div>
                    <div class="" style="padding:.08rem .266666667rem; color: red">Cấp độ hiện tại</div>
                </div>
                <div class="">
                    <img class="border-rad8" src="https://da8975.com/static/theme2/level/1.png"
                        style="width: 100%; padding: 5px;">
                </div>
                <div class="d-flex align-items-center justify-content-between mx-2" style="font-size: 10px">
                    <div class="">
                        Số dư tối thiểu 30.000 ₫
                    </div>
                    <div class="">
                        <div class="">Hoa hồng</div>
                        <div class="text-center" style="font-size: 17px;background: #11a23a !important;">20%</div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Hoa hồng người dùng --}}
        <div class="mt-3 mx-1">
            <div class="fw-bold mb-4">
                Động thái hoa hồng người dùng
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <div class="bg-white border-rem border-0 mb-2">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-3 d-flex justify-content-center"> 06-20</div>
                                    <div class="col-auto d-flex flex-column align-start border-left">
                                        <div class="font-weight-normal mb-2">Hoa hồng thu nhập 1.550.000 ₫</div>
                                        <div class="text-mute small text-secondary">556****07178</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <div class="bg-white border-rem border-0 mb-2">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-3 d-flex justify-content-center"> 06-20</div>
                                    <div class="col-auto d-flex flex-column align-start border-left">
                                        <div class="font-weight-normal mb-2">Hoa hồng thu nhập 23.000 ₫</div>
                                        <div class="text-mute small text-secondary">556****07178</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <div class="bg-white border-rem border-0 mb-2">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-3 d-flex justify-content-center"> 06-20</div>
                                    <div class="col-auto d-flex flex-column align-start border-left">
                                        <div class="font-weight-normal mb-2">Hoa hồng thu nhập 790.000 ₫</div>
                                        <div class="text-mute small text-secondary">556****07178</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Các slide khác (thay đổi số lượng thành 10 slide) -->
                    <!-- Slide 4 đến Slide 10 -->
                    <!-- Ví dụ: Slide 4 -->
                    <div class="swiper-slide">
                        <div class="bg-white border-rem border-0 mb-2">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-3 d-flex justify-content-center"> 06-21</div>
                                    <div class="col-auto d-flex flex-column align-start border-left">
                                        <div class="font-weight-normal mb-2">Hoa hồng thu nhập 26.600 ₫</div>
                                        <div class="text-mute small text-secondary">556****07179</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Thêm các slide tiếp theo -->
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
        {{-- <div class="mt-3 mx-1">
            <div class="fw-bold mb-4">
                Động thái hoa hồng người dùng
            </div>
            <div class="mt-2">
                <div class="van-swipe-item mb-3">
                    <div class="bg-white border-rem  border-0 mb-2">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-3 d-flex justify-content-center"> 06-20</div>
                                <div class="col-auto d-flex flex-column align-start border-left">
                                    <div class="font-weight-normal mb-2">Hoa hồng thu nhập 500 ₫</div>
                                    <div class="text-mute small text-secondary">556****07178</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="van-swipe-item mb-3">
                    <div class="bg-white border-rem  border-0 mb-2">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-3 d-flex justify-content-center"> 06-20</div>
                                <div class="col-auto d-flex flex-column align-start border-left">
                                    <div class="font-weight-normal mb-2">Hoa hồng thu nhập 500 ₫</div>
                                    <div class="text-mute small text-secondary">556****07178</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="van-swipe-item mb-3">
                    <div class="bg-white border-rem  border-0 mb-2">
                        <div class="p-2">
                            <div class="row align-items-center">
                                <div class="col-3 d-flex justify-content-center"> 06-20</div>
                                <div class="col-auto d-flex flex-column align-start border-left">
                                    <div class="font-weight-normal mb-2">Hoa hồng thu nhập 500 ₫</div>
                                    <div class="text-mute small text-secondary">556****07178</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- Giới thiệu --}}
        <div class="">
            <div class="d-flex">
                <div class="box-flex-50 border-rad8  bg-white m-2">
                    <div class="d-flex align-items-center py-3 ps-3">
                        <img src="https://da8975.com/static/mobile/home/poster_1.png" style="width: 40px; height: 40px">
                        <div class="ms-2 fs-bold" style="font-size: 13px">Giới thiệu công ty
                        </div>
                    </div>
                </div>
                <div class="box-flex-50 border-rad8 bg-white m-2">
                    <div class="d-flex align-items-center py-3 ps-3">
                        <img src="https://da8975.com/static/mobile/home/poster_2.png" style="width: 40px; height: 40px">
                        <div class="ms-2 fs-bold" style="font-size: 13px">Mô tả quy tắc
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <div class="box-flex-50 border-rad8 bg-white m-2">
                    <div class="d-flex align-items-center py-3 ps-3">
                        <img src="https://da8975.com/static/mobile/home/poster_3.png" style="width: 40px; height: 40px">
                        <div class="ms-2 fs-bold" style="font-size: 13px">Hợp tác đại lý
                        </div>
                    </div>
                </div>
                <div class="box-flex-50 border-rad8 bg-white m-2">
                    <div class="d-flex align-items-center py-3 ps-3">
                        <img src="https://da8975.com/static/mobile/home/poster_4.png" style="width: 40px; height: 40px">
                        <div class="ms-2 fs-bold" style="font-size: 13px">Bản chất công ty
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Đối tác --}}
        <div class="mt-3 mx-1">
            <div class="fw-bold mb-3">Đối tác</div>
            <div class="d-flex flex-wrap">
                <div class="" style="flex-basis: 33.333%">
                    <div class="p-2">
                        <img class="border-rad8" src="https://da8975.com/static/mobile/link/1.png" width="100%">
                    </div>
                </div>
                <div class="" style="flex-basis: 33.333%">
                    <div class="p-2">
                        <img class="border-rad8" src="https://da8975.com/static/mobile/link/2.png" width="100%">
                    </div>
                </div>
                <div class="" style="flex-basis: 33.333%">
                    <div class="p-2">
                        <img class="border-rad8" src="https://da8975.com/static/mobile/link/3.png" width="100%">
                    </div>
                </div>
                <div class="" style="flex-basis: 33.333%">
                    <div class="p-2">
                        <img class="border-rad8" src="https://da8975.com/static/mobile/link/4.png" width="100%">
                    </div>
                </div>
                <div class="" style="flex-basis: 33.333%">
                    <div class="p-2">
                        <img class="border-rad8" src="https://da8975.com/static/mobile/link/5.png" width="100%">
                    </div>
                </div>
                <div class="" style="flex-basis: 33.333%">
                    <div class="p-2">
                        <img class="border-rad8" src="https://da8975.com/static/mobile/link/6.png" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('javascript')
    <script>
        var swiper = new Swiper('.swiper-container', {
            direction: 'vertical',
            loop: true,
            slidesPerView: 3,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>
@stop
