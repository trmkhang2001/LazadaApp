@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Lịch sử đặt hàng</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="/admin/dashboard" class="text-muted text-hover-primary">Admin</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Lịch sử đặt hàng</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
    </div>
@endsection
@section('contents')
    <div class="d-flex flex-column flex-column-fluid">
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span
                                class="path2"></span></i> <input type="text" data-kt-ecommerce-order-filter="search"
                            class="form-control form-control-solid w-250px ps-12" placeholder="Search Order">
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-0">

                <!--begin::Table-->
                <div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                            id="kt_ecommerce_sales_table">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="min-w-175px sorting" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Customer: activate to sort column ascending">
                                        Tài khoản</th>
                                    <th class="min" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1">
                                        Sản phẩm</th>
                                    <th class="" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Status: activate to sort column ascending">
                                        Trạng thái</th>
                                    <th class="" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Status: activate to sort column ascending">
                                        Chi tiết</th>
                                    <th class="" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1">Ngày Đặt Hàng</th>
                                    <th class="" rowspan="1" colspan="1" aria-label="Actions"
                                        style="width: 132.688px;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($orders as $order)
                                    <tr class="odd">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $order->user->phone }}</a>
                                                    <br>
                                                    <!--end::Title-->
                                                    <span>{{ $order->address }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class=" pe-0">
                                            <!--begin::Badges-->
                                            <span>{{ $order->don_hang_maus->ten_san_pham }}</span>
                                            <br>
                                            <span>Giá phù hợp:
                                                {{ $order->don_hang_maus->tong_gia }}</span>
                                            <br>
                                            <span>Tỷ lệ hoa hồng: 20%</span>
                                            <!--end::Badges-->
                                        </td>
                                        <td class=" pe-0" data-order="Expired">
                                            <!--begin::Badges-->
                                            @if ($order->status == 0)
                                                <div class="badge badge-light-danger">Chưa xác nhận</div>
                                                <!--end::Badges-->
                                            @else
                                                <div class="badge badge-light-success">Xác nhận</div>
                                            @endif
                                        </td>
                                        <td>

                                            <span>Số dư trước khi đặt đơn:
                                                {{ number_format($order->user->sodu, 0, ',', '.') . ' VND' }}</span>
                                            <br>
                                            <span>Số dư sau khi đặt đơn:
                                                {{ number_format($order->user->sodu - $order->don_hang_maus->tong_gia, 0, ',', '.') . ' VND' }}</span>
                                            <br>
                                            <span>Hoa hồng:
                                                {{ number_format($order->don_hang_maus->tong_gia * 0.2, 0, ',', '.') . ' VND' }}</span>
                                        </td>
                                        <td class="">
                                            <span class="fw-bold">{{ date('d/m/Y', strtotime($order->updated_at)) }}</span>
                                        </td>
                                        <td class="">
                                            <a href="#"
                                                class="mb-3 btn btn-sm btn-primary btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                Xác nhận
                                            </a>
                                            <a href="#"
                                                class="btn btn-sm btn-danger btn-flex btn-center btn-active-light-primary"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                Huỷ Đơn
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="">
                        {{ $orders->links() }}
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
    </div>
@endsection
