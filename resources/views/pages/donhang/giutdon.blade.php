@extends('layout.layout')
@section('noidung')
    <div class="mx-2">
        @if (session('success'))
            <div class="noti m-4" id="success">
                <div class="d-flex align-items-center alert alert-success">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="10" height="10" viewBox="0 0 48 48">
                        <circle cx="24" cy="24" r="20" fill="#4dd0e1"></circle>
                        <path fill="#fff"
                            d="M22.491,30.69c-0.576,0-1.152-0.22-1.591-0.659l-6.083-6.084c-0.879-0.878-0.879-2.303,0-3.182 c0.878-0.879,2.304-0.879,3.182,0l6.083,6.084c0.879,0.878,0.879,2.303,0,3.182C23.643,30.47,23.067,30.69,22.491,30.69z">
                        </path>
                        <path fill="#fff"
                            d="M22.491,30.69c-0.576,0-1.152-0.22-1.591-0.659c-0.879-0.878-0.879-2.303,0-3.182l9.539-9.539 c0.878-0.879,2.304-0.879,3.182,0c0.879,0.878,0.879,2.303,0,3.182l-9.539,9.539C23.643,30.47,23.067,30.69,22.491,30.69z">
                        </path>
                    </svg>
                    <span class="ms-2">Đơn giựt đã gửi thành công</span>
                </div>
            </div>
        @endif
        @if (session('error'))
            <div class="noti m-4">
                <div class="d-flex align-items-center alert alert-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="10" height="10"
                        viewBox="0 0 40 40">
                        <path fill="#f78f8f"
                            d="M20,38.5C9.799,38.5,1.5,30.201,1.5,20S9.799,1.5,20,1.5S38.5,9.799,38.5,20S30.201,38.5,20,38.5z">
                        </path>
                        <path fill="#c74343"
                            d="M20,2c9.925,0,18,8.075,18,18s-8.075,18-18,18S2,29.925,2,20S10.075,2,20,2 M20,1 C9.507,1,1,9.507,1,20s8.507,19,19,19s19-8.507,19-19S30.493,1,20,1L20,1z">
                        </path>
                        <path fill="#fff" d="M18.5 10H21.5V30H18.5z" transform="rotate(-134.999 20 20)"></path>
                        <path fill="#fff" d="M18.5 10H21.5V30H18.5z" transform="rotate(-45.001 20 20)"></path>
                    </svg>
                    <span class="ms-2">Có đơn đặt hàng chưa hoàn thành</span>
                </div>
            </div>
        @endif
        <div class="p-3 border-rad10 bg-white mt-4">
            <div class="row mt-3 mx-2">
                <div class="col">
                    <h3 class="mb-0 font-weight-normal fw-bold">{{ number_format($profile->sodu) }} ₫</h3>
                    <div class="text-mute text-secondary">Số dư tài khoản</div>
                </div>
                <div class="col-auto"><a href="/nap_tien_view" class="btn btn-rounded-54 shadow btn-primary">
                        <div class="van-button__content"><span class="van-button__text"><i
                                    class="material-icons">+</i></span></div>
                    </a></div>
            </div>
            <div>
                <div class="z-1">
                    <div class="border-rad10 bg-teamplate shadow mt-4 p-3" style="color: white">
                        <div class="">
                            <div class="row">
                                <div class="col-10 d-flex justify-between full-width">
                                    <h3>VIP1</h3><!---->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-2">
                                    <h5 class="font-weight-normal">Số dư tối thiểu&nbsp;30.000 ₫</h5>
                                </div>
                                <div class="col-12">
                                    <div>Hoa hồng&nbsp;20%</div>
                                </div>
                                <div class="col-12 mt-1">
                                    <h3 class="text-center"><span
                                            style="background: limegreen; padding: 0px 5px;">{{ $order_count }}</span><span>/20</span>
                                    </h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="z-0 mt-2">
                    <div class="border-rad10 shadow">
                        <div class=" border-bottom">
                            <div class="d-flex justify-content-between p-3">
                                <div class="">
                                    <div>0 ₫<br><small class="text-mute text-secondary">Hoa hồng</small></div>
                                </div>
                                <div class="">
                                    <div>0 ₫<br><small class="text-mute text-secondary">Số tiền đóng băng</small></div>
                                </div>
                            </div>
                        </div>
                        <div class="-body border-bottom">
                            <div class="d-flex justify-content-between p-3"><!---->
                                <div class="">
                                    <div>
                                        0 ₫<br><small class="text-mute text-secondary">Kinh phí nhiệm
                                            vụ</small><br><small class="text-mute text-secondary"></small></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-none pa-1 text-center mt-3 pb-3 px-2">
                            <a href="/laydon" id="delayed-link"
                                class="btn btn-lg btn-rounded shadow bg-teamplate w-100 d-flex justify-content-center "
                                style="color: white">
                                <svg class="me-2" width="30px" height="30px" viewBox="0 0 24 24" id="Layer_1"
                                    data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" stroke="#ffffff">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                        stroke="#CCCCCC" stroke-width="0.144"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: none;
                                                    stroke: #ffffff;
                                                    stroke-miterlimit: 10;
                                                    stroke-width: 1.91px;
                                                }
                                            </style>
                                        </defs>
                                        <path class="cls-1"
                                            d="M11.05,22.5,5.91,17.36a2,2,0,0,1-.59-1.43,2,2,0,0,1,2-2,2,2,0,0,1,1.43.59l1.32,1.32V6.38a2,2,0,0,1,1.74-2,1.89,1.89,0,0,1,1.52.56,1.87,1.87,0,0,1,.56,1.34V12l5,.72a1.91,1.91,0,0,1,1.64,1.89h0a17.18,17.18,0,0,1-1.82,7.71l-.09.18">
                                        </path>
                                        <polyline class="cls-1" points="19.64 7.23 22.5 4.36 19.64 1.5"></polyline>
                                        <line class="cls-1" x1="15.82" y1="4.36" x2="22.5" y2="4.36">
                                        </line>
                                        <polyline class="cls-1" points="4.36 7.23 1.5 4.36 4.36 1.5"></polyline>
                                        <line class="cls-1" x1="8.18" y1="4.36" x2="1.5" y2="4.36">
                                        </line>
                                    </g>
                                </svg>
                                Giựt Đơn
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mt-2 d-flex justify-content-start align-items-center">
                    <svg class="me-2" width="25px" height="25px" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path d="M20 6C20 6 21.5 7.8 21.5 12C21.5 16.2 20 18 20 18" stroke="#ababab"
                                stroke-width="1.5" stroke-linecap="round"></path>
                            <path d="M18 9C18 9 18.5 9.9 18.5 12C18.5 14.1 18 15 18 15" stroke="#ababab"
                                stroke-width="1.5" stroke-linecap="round"></path>
                            <path
                                d="M1.95863 8.57679C2.24482 8.04563 2.79239 7.53042 3.33997 7.27707C3.9393 6.99979 4.62626 6.99979 6.00018 6.99979C6.51225 6.99979 6.76828 6.99979 7.01629 6.95791C7.26147 6.9165 7.50056 6.84478 7.72804 6.74438C7.95815 6.64283 8.1719 6.50189 8.59941 6.22002L8.81835 6.07566C11.3613 4.39898 12.6328 3.56063 13.7001 3.92487C13.9048 3.9947 14.1029 4.09551 14.2798 4.21984C15.2025 4.86829 15.2726 6.37699 15.4128 9.3944C15.4647 10.5117 15.5001 11.4679 15.5001 11.9998C15.5001 12.5317 15.4647 13.4879 15.4128 14.6052C15.2726 17.6226 15.2025 19.1313 14.2798 19.7797C14.1029 19.9041 13.9048 20.0049 13.7001 20.0747C12.6328 20.4389 11.3613 19.6006 8.81834 17.9239L8.59941 17.7796C8.1719 17.4977 7.95815 17.3567 7.72804 17.2552C7.50056 17.1548 7.26147 17.0831 7.01629 17.0417C6.76828 16.9998 6.51225 16.9998 6.00018 16.9998C4.62626 16.9998 3.9393 16.9998 3.33997 16.7225C2.79239 16.4692 2.24482 15.9539 1.95863 15.4228C1.6454 14.8414 1.60856 14.237 1.53488 13.0282C1.52396 12.849 1.51525 12.6722 1.50928 12.4998"
                                stroke="#ababab" stroke-width="1.5" stroke-linecap="round"></path>
                        </g>
                    </svg>
                    <div class="custom-swiper-container">
                        <div class="custom-swiper-wrapper">
                            <div class="custom-swiper-slide">
                                <span style="font-size: 12px">556****07178 Hoa hồng thu nhập 790.000 ₫ 02-08</span>
                            </div>
                            <div class="custom-swiper-slide">
                                <span style="font-size: 12px">556****09352 Hoa hồng thu nhập 80.000 ₫ 02-08</span>
                            </div>
                            <div class="custom-swiper-slide">
                                <span style="font-size: 12px">556****11263 Hoa hồng thu nhập 32.000 ₫ 02-08</span>
                            </div>
                            <div class="custom-swiper-slide">
                                <span style="font-size: 12px">556****68461 Hoa hồng thu nhập 118.000 ₫ 02-08</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tips pt-3 textarea-content">
                <span>• Working hours: 10:00-23:00</span>
                <br>
                <span>• For inquiries about applicants, please consult agency services</span>
            </div><!---->
        </div>
    </div>
    <!-- Modal chờ phân phối -->
    <div class="modal fade" id="delayModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="">
                <div class="modal-body text-center">
                    <div class="">
                        <img src="{{ asset('layout/img/2.gif') }}" alt="">
                    </div>
                    <div class="mt-2 fw-bold text-white fs-5">
                        Đang chọn nhà cung cấp
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('javascript')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.custom-swiper-container', {
                direction: 'vertical',
                loop: true,
                autoplay: {
                    delay: 3000, // Thời gian giữa các lần cuộn (3 giây)
                    disableOnInteraction: false,
                },
                wrapperClass: 'custom-swiper-wrapper',
                slideClass: 'custom-swiper-slide',
            });
        });
        // Hiển thị modal nếu có success
        @if (session('success'))
            console.log('Success session variable found');
            var modal = new bootstrap.Modal(document.getElementById('delayModal'));
            modal.show();
            setTimeout(function() {
                document.querySelector('#delayModal .fw-bold').textContent = 'Đang phân phối sản phẩm';
            }, 3000);
            setTimeout(function() {
                modal.hide();
                document.getElementById('success').style.display = 'block';
            }, 6000);
            document.getElementById('success').style.display = 'none';
        @else
            console.log('No success session variable');
        @endif
    </script>
@stop
