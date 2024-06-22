@extends('layout.layout')
@section('noidung')
    <div class="mx-2">
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
                                        0 ₫<br><small class="text-mute text-secondary">Kinh phí nhiệm vụ</small><br><small
                                            class="text-mute text-secondary"></small></div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-none pa-1 text-center mt-3 pb-3">
                            <a href="/laydon" class="btn btn-lg btn-rounded shadow bg-teamplate" style="color: white">
                                Nhận đơn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tips pt-5 textarea-content">
                <span>• Working hours: 10:00-23:00</span>
                <br>
                <span>• For inquiries about applicants, please consult agency services</span>
            </div><!---->
        </div>
    </div>
@stop
