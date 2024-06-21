@extends('layout.layout')
@section('noidung')
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
            <div class="bluetheme van-tabs van-tabs--card">
                <div>
                    <div class="van-sticky">
                        <div class="van-tabs__wrap">
                            <div role="tablist" class="van-tabs__nav van-tabs__nav--card">
                                <div role="tab" aria-selected="true" class="van-tab van-tab--active" data-status="all">
                                    <span class="van-tab__text van-tab__text--ellipsis">Toàn bộ</span>
                                </div>
                                <div role="tab" class="van-tab" data-status="2"><span
                                        class="van-tab__text van-tab__text--ellipsis">Đang chờ xem xét</span></div>
                                <div role="tab" class="van-tab" data-status="0"><span
                                        class="van-tab__text van-tab__text--ellipsis">Chờ gửi</span></div>
                                <div role="tab" class="van-tab" data-status="1"><span
                                        class="van-tab__text van-tab__text--ellipsis">Đã gửi</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 p-2">
                @if ($hasNull)
                    <div class="d-flex flex-column align-items-center justify-content-center mt-4 mb-4">
                        <div class="mb-2 text-center">
                            <span class="">Bạn đang có đơn hàng đợi phân phối</span>
                            <br>
                            <span class="" style="color: red">Load lại trang để cập nhật đơn</span>
                        </div>
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                @endif
                @foreach ($don_hangs as $don)
                    @if (isset($don->don_hang_maus_id))
                        <div class="mt-2 bg-white p-2 border-rad10 order-item" data-status="{{ $don->status }}">
                            <div class="">
                                <div class="d-flex justify-content-between">
                                    <div class="">
                                        <p class="text-secondary ft-12">{{ $don->created_at }}</p>
                                    </div>
                                    <div class="">
                                        <p class="text-secondary ft-12">{{ $don->ma_dh }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="van-card">
                                <div class="van-card__header"><a class="van-card__thumb">
                                        <div class="van-image" style="width: 100%; height: 100%;"><img
                                                src="{{ $don->don_hang_maus->hinh_san_pham }}" class="van-image__img"
                                                style="object-fit: cover;"></div>
                                    </a>
                                    <div class="van-card__content">
                                        <div>
                                            <div class="van-card__title van-multi-ellipsis--l2">
                                                {{ $don->don_hang_maus->ten_san_pham }} </div>
                                            @if ($don->status == 0)
                                                <span class="van-tag van-tag--plain van-tag--danger">Chờ
                                                    gửi</span>
                                            @elseif ($don->status == -1)
                                                <span class="van-tag van-tag--plain van-tag--danger">Đã huỷ</span>
                                            @elseif($don->status == 1)
                                                <span class="van-tag van-tag--plain van-tag--success">Đã gửi</span>
                                            @elseif($don->status == 2)
                                                <span class="van-tag van-tag--plain van-tag--warning">Đang chờ xác
                                                    nhận</span>
                                            @endif
                                        </div>
                                        <div class="van-card__bottom">
                                            <div class="van-card__price">
                                                {{ number_format($don->don_hang_maus->tong_gia) . ' ₫' }} </div>
                                            <div class="van-card__num">x1</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-1">
                                <div class="row">
                                    <div class="row-item d-flex justify-content-between full-width">
                                        <div class="text-333">Tổng số đơn đặt</div>
                                        <div class="text-right text-mute">
                                            {{ number_format($don->don_hang_maus->tong_gia) . ' ₫' }} </div>
                                    </div>
                                </div>
                                <div class="row-item d-flex justify-content-between full-width">
                                    <div class="text-333">Hoa hồng</div>
                                    <div class="text-right text-mute">
                                        {{ number_format($don->don_hang_maus->tong_gia * 0.2) . ' ₫' }}</div>
                                </div><!---->
                                <div class="row-item d-flex justify-content-between full-width">
                                    <div class="text-333">Chênh lệch giá</div>
                                    <div class="text-right text-mute">
                                        {{ number_format($don->don_hang_maus->tong_gia * 0.8987) . ' ₫' }}</div>
                                </div><!----><!----><!---->
                            </div>
                            <div class="mt-4 px-3">
                                @if ($don->status == 0)
                                    <button type="button" class="btn btn-primary w-100 p-2 " data-bs-toggle="modal"
                                        data-bs-target="#guiDonModal">Gửi đơn</button>
                                @endif
                            </div><!----><!---->
                        </div>
                    @endif
                @endforeach

                @if ($don_gui)
                    <div class="modal fade" id="guiDonModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content p-3">
                                <div class="mt-2 bg-white p-2 border-rad10 order-item">
                                    <div class="">
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <p class="text-secondary ft-12">{{ $don_gui->created_at }}</p>
                                            </div>
                                            <div class="">
                                                <p class="text-secondary ft-12">{{ $don_gui->ma_dh }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="van-card">
                                        <div class="van-card__header"><a class="van-card__thumb">
                                                <div class="van-image" style="width: 100%; height: 100%;"><img
                                                        src="{{ $don_gui->don_hang_maus->hinh_san_pham }}"
                                                        class="van-image__img" style="object-fit: cover;"></div>
                                            </a>
                                            <div class="van-card__content">
                                                <div class="van-card__bottom">
                                                    <div class="van-card__price">
                                                        {{ number_format($don_gui->don_hang_maus->tong_gia) . ' ₫' }}
                                                    </div>
                                                    <div class="van-card__num">x1</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-1">
                                        <div class="row">
                                            <div class="row-item d-flex justify-content-between full-width">
                                                <div class="text-333">Tổng số đơn đặt</div>
                                                <div class="text-right text-mute">
                                                    {{ number_format($don_gui->don_hang_maus->tong_gia) . ' ₫' }} </div>
                                            </div>
                                        </div>
                                        <div class="row-item d-flex justify-content-between full-width">
                                            <div class="text-333">Hoa hồng</div>
                                            <div class="text-right text-mute">
                                                {{ number_format($don_gui->don_hang_maus->tong_gia * 0.2) . ' ₫' }}</div>
                                        </div><!---->
                                        <div class="row-item d-flex justify-content-between full-width">
                                            <div class="text-333">Chênh lệch giá</div>
                                            <div class="text-right text-mute">
                                                {{ number_format($don_gui->don_hang_maus->tong_gia * 0.8987) . ' ₫' }}
                                            </div>
                                        </div><!----><!----><!---->
                                    </div>
                                    <div class="mt-4 px-3">
                                        @if ($don->status == 0)
                                            <button type="button" class="btn btn-primary w-100 p-2 "
                                                data-bs-toggle="modal" data-bs-target="#guiDonModal">Gửi đơn</button>
                                        @endif
                                    </div><!----><!---->
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Huỷ</button>
                                    <a href="{{ route('gui_don', $don_gui->id) }}" class="btn">Gửi Đơn</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.van-tab');
            const orderItems = document.querySelectorAll('.order-item');

            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('van-tab--active'));
                    // Add active class to the clicked tab
                    this.classList.add('van-tab--active');

                    // Get the status from the clicked tab
                    const status = this.getAttribute('data-status');

                    // Show/Hide orders based on the selected status
                    orderItems.forEach(item => {
                        if (status === 'all' || item.getAttribute('data-status') ===
                            status) {
                            item.style.display = '';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
@stop
