@extends('layout.layout')
@section('noidung')
    <div class="mx-2">
        <div class="container mt-4">
            <div class="bluetheme mb-2 van-tabs van-tabs--card">
                <div>
                    <div class="van-sticky">
                        <div class="van-tabs__wrap">
                            <div role="tablist" class="van-tabs__nav van-tabs__nav--card"
                                style="border-color: rgb(109, 0, 190); background: rgb(255, 255, 255);">
                                <div role="tab" aria-selected="true" class="van-tab van-tab--active"
                                    style="border-color: rgb(109, 0, 190); background-color: rgb(109, 0, 190); color: rgb(255, 255, 255);">
                                    <span class="van-tab__text van-tab__text--ellipsis">Hệ thống thông báo</span>
                                </div>
                                <div role="tab" class="van-tab"
                                    style="border-color: rgb(109, 0, 190); color: rgb(109, 0, 190);"><span
                                        class="van-tab__text van-tab__text--ellipsis">Ga thư</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                @foreach ($congbos as $congbo)
                    <div role="feed" class="van-list ">
                        <div class=" mb-2 is-always-shadow bg-white border-rad10 p-3"><!---->
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <svg t="1647793631491" viewBox="0 0 1024 1024" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" p-id="4876" width="30" height="30"
                                        class="icon">
                                        <path
                                            d="M955.666682 268.427542c1.858324-8.362458 1.161453-16.957207-4.644787-23.693632-0.930185-1.160429-2.787486-0.929162-3.948938-2.090614-9.756201-22.532179-26.945699-38.09462-59.23408-38.09462H163.088402c-34.378995 0-71.777767 13.240559-88.270393 39.024805-0.696872 0.463558-1.626034 0.463558-2.322905 1.160429-6.039553 6.736425-6.968715 15.331173-5.342681 23.461342-0.232291 2.090615-1.626034 3.716648-1.626034 6.039553v445.99982c0 45.99352 51.336202 97.562013 97.562013 97.562013h724.749452c46.225811 0 69.919443-51.568493 69.919443-97.562013V274.235828c0-2.555196-1.857301-3.484358-2.090615-5.808286z m-81.766258-8.129144h14.16972L511.525186 560.418756l-375.151216-298.958906c8.594749-1.393743 19.047822-1.160429 26.713409-1.160429h710.813045v-0.001023z m13.93743 501.749541H163.088402c-15.331173 0-41.812291-26.481118-41.812291-41.812291V320.92622l372.131439 297.565163c5.110391 4.644787 11.614525 6.735401 18.118659 6.735401s13.008268-2.322905 18.35095-6.735401L902.007575 320.92622v399.540695c0 15.099906 1.161453 41.581024-14.169721 41.581024z"
                                            p-id="4877" fill="#d81e06"></path>
                                    </svg>
                                </div>
                                <div class="">
                                    <div class="fw-bold">Thông báo hệ thống</div>
                                    <div>Đơn hàng {{ $congbo->ma_dh }} @if ($congbo->status == 0)
                                            đang đợi phân phối.
                                        @elseif($congbo->status == 2)
                                            đã được gửi
                                        @elseif($congbo->status == 1)
                                            đã được xác nhận
                                        @elseif($congbo->statu == -1)
                                            đã bị hủy
                                        @endif
                                    </div>
                                    <div>2024-06-22 23:14:23</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div><!---->
@endsection
