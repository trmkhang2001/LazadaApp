@extends('layout.layout')
@section('noidung')
    <div class="mt-3 mx-2">
        <div class="border-rad8 bg-teamplate mb-3" style="padding: 15px;">
            <div class="">
                <div class="row">
                    <div class="col-3"><i class="photo van-icon van-icon-manager fs-1"
                            style="color: rgb(0, 0, 0);"><!----></i>
                    </div>
                    <div class="col-auto pl-0 d-flex flex-column justify-content-start justify-content-center"
                        style="color: white">
                        <h5 class="mb-1">{{ $profile->phone }}&nbsp;<span class="text-mute small">VIP1</span></h5>
                        <a href="" class="d-flex text-grey" style="color: white">
                            <span class="text-mute text-invite_code small" style="opacity: .7;">Mã
                                mời: <b>{{ $profile->aff_code }}</b></span>
                            <i class="ms-2 u-font-18 van-icon van-icon-point-gift"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-rad8 bg-white mb-3" style="padding: 15px;">
            <div class="d-flex align-items-center justify-content-between border-bottom">
                <div class="">
                    <div class="fw-bold fs-1">{{ number_format($profile->sodu) }} ₫</div>
                    <div class="">Số dư tài khoản</div>
                </div>
                <div class="">
                    <a href="/nap_tien_view" class="btn btn-primary fs-1 border-rad8">+</a>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-between py-3">
                <div class="">
                    <div class="text-center" style="color: #00a300 !important;">{{ number_format($profile->sodu) }} ₫</div>
                    <div class="">Số dư khả dụng</div>
                </div>
                <div class="ps-3" style="border-left: 1px dashed rgba(0, 0, 0, .1) !important;">
                    <div class="text-center" style="color: red">60</div>
                    <div class="">Điểm tín dụng</div>
                </div>
                <div class="ps-3" style=" border-left: 1px dashed rgba(0, 0, 0, .1) !important;">
                    <div class="text-center" style="color: red">0 ₫</div>
                    <div class="">Số tiền đóng băng</div>
                </div>
            </div>
        </div>
        <div class="menu-list shadow border-rad8 bg-white mb-3 " style="padding: 15px;">
            <a href="">
                <div role="button" tabindex="0" class="text-template van-cell van-cell--clickable van-cell--center">
                    <div class="avatar avatar-50 rounded me-2 d-flex justify-center">
                        <div class="overlay bg-template" style="border-radius: 0px;"></div><i
                            class="fs-2 van-icon van-icon-share"><!----></i>
                    </div>
                    <div class="van-cell__title"><span>Rút tiền</span></div><i
                        class="van-icon van-icon-arrow van-cell__right-icon"><!----></i>
                </div>
            </a>
            <a href="">
                <div role="button" tabindex="0" class="text-template van-cell van-cell--clickable van-cell--center">
                    <div class="avatar avatar-50 rounded me-2 d-flex justify-center">
                        <div class="overlay bg-template" style="border-radius: 0px;"></div><i
                            class="fs-2 van-icon van-icon-cluster"><!----></i>
                    </div>
                    <div class="van-cell__title"><span>Báo cáo nhóm</span></div><i
                        class="van-icon van-icon-arrow van-cell__right-icon"><!----></i>
                </div>
            </a>
            <a href="">
                <div role="button" tabindex="0" class="text-template van-cell van-cell--clickable van-cell--center">
                    <div class="avatar avatar-50 rounded me-2 d-flex justify-center">
                        <div class="overlay bg-template" style="border-radius: 0px;"></div><i
                            class="fs-2 van-icon van-icon-notes"><!----></i>
                    </div>
                    <div class="van-cell__title"><span>Lịch sử rút</span></div><i
                        class="van-icon van-icon-arrow van-cell__right-icon"><!----></i>
                </div>
            </a>
            <a href="">
                <div role="button" tabindex="0" class="text-template van-cell van-cell--clickable van-cell--center">
                    <div class="avatar avatar-50 rounded me-2 d-flex justify-center">
                        <div class="overlay bg-template" style="border-radius: 0px;"></div><i
                            class="fs-2 van-icon van-icon-goods-collect"><!----></i>
                    </div>
                    <div class="van-cell__title"><span>Xác nhận</span></div><i
                        class="van-icon van-icon-arrow van-cell__right-icon"><!----></i>
                </div>
            </a>
            <a href="">
                <div role="button" tabindex="0" class="text-template van-cell van-cell--clickable van-cell--center">
                    <div class="avatar avatar-50 rounded me-2 d-flex justify-center">
                        <div class="overlay bg-template" style="border-radius: 0px;"></div><i
                            class="fs-2 van-icon van-icon-notes"><!----></i>
                    </div>
                    <div class="van-cell__title"><span>Hồ sơ thay đổi tài
                            khoản</span></div><i class="van-icon van-icon-arrow van-cell__right-icon"><!----></i>
                </div>
            </a>
            <!---->
            <a href="/taikhoanrut">
                <div role="button" tabindex="0" class="text-template van-cell van-cell--clickable van-cell--center">
                    <div class="avatar avatar-50 rounded me-2 d-flex justify-center">
                        <div class="overlay bg-template" style="border-radius: 0px;"></div><i
                            class="fs-2 van-icon van-icon-card"><!----></i>
                    </div>
                    <div class="van-cell__title"><span>Thông tin rút tiền</span>
                    </div><i class="van-icon van-icon-arrow van-cell__right-icon"><!----></i>
                </div>
            </a><!---->
            <a href="">
                <div role="button" tabindex="0" class="text-template van-cell van-cell--clickable van-cell--center">
                    <div class="avatar avatar-50 rounded me-2 d-flex justify-center">
                        <div class="overlay bg-template" style="border-radius: 0px;"></div><i
                            class="fs-2 van-icon van-icon-bell"><!----></i>
                    </div>
                    <div class="van-cell__title"><span>Tin nhắn công bố</span>
                    </div><i class="van-icon van-icon-arrow van-cell__right-icon"><!----></i>
                </div>
            </a>
            <a href="">
                <div role="button" tabindex="0" class="text-template van-cell van-cell--clickable van-cell--center">
                    <div class="avatar avatar-50 rounded me-2 d-flex justify-center">
                        <div class="overlay bg-template" style="border-radius: 0px;"></div><i
                            class="fs-2 van-icon van-icon-lock"><!----></i>
                    </div>
                    <div class="van-cell__title"><span>Quản lý mật khẩu</span>
                    </div><i class="van-icon van-icon-arrow van-cell__right-icon"><!----></i>
                </div>
            </a><!----><!---->
            <a href="/logout">
                <div role="button" tabindex="0" class="text-template van-cell van-cell--clickable van-cell--center">
                    <div class="avatar avatar-50 rounded me-2 d-flex justify-center">
                        <div class="overlay bg-template" style="border-radius: 0px;"></div><i
                            class="fs-2 van-icon van-icon-stop" style="color: red;"><!----></i>
                    </div>
                    <div class="van-cell__title"><span>Đăng xuất</span></div><i
                        class="van-icon van-icon-arrow van-cell__right-icon"><!----></i>
                </div>
            </a>
        </div>
    </div>
@stop
