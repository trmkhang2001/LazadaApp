@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Lịch sử rút tiền</h1>
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
                <li class="breadcrumb-item text-muted">Lịch sử rút tiền</li>
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
                            class="form-control form-control-solid w-250px ps-12"
                            placeholder="Nhập số điện thoại người dùng hoặc mã hoá đơn">
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-0">
                @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <!--begin::Table-->
                <div id="kt_ecommerce_sales_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                            id="kt_ecommerce_sales_table">
                            <thead>
                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Customer: activate to sort column ascending">
                                        Mã hóa đơn</th>
                                    <th class="" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Customer: activate to sort column ascending">
                                        Khách hàng</th>
                                    <th>Thông tin tài khoản rút</th>
                                    <th class="" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1">
                                        Số tiền trước (lúc tạo lệnh)</th>
                                    <th class=" " tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Status: activate to sort column ascending">
                                        Số tiền rút </th>
                                    <th class=" " tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1"
                                        aria-label="Status: activate to sort column ascending">
                                        Số tiền sau rút (lúc tạo lệnh)</th>
                                    <th class="" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1">
                                        Trạng thái</th>
                                    <th class="" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1">
                                        Số dư hiện tại:</th>
                                    <th class="" tabindex="0" aria-controls="kt_ecommerce_sales_table"
                                        rowspan="1" colspan="1">
                                        Thời gian</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($items as $ruttien)
                                    <tr>
                                        <td>
                                            <span class="text-danger">{{ $ruttien->id }}</span>
                                        </td>
                                        <td>
                                            <span>{{ $ruttien->user->phone }}</span>
                                        </td>
                                        <td>
                                            <span>Ngân hàng: {{ $ruttien->taikhoanrut->ten_ngan_hang }}</span>
                                            <br>
                                            <span>Tài khoản: {{ $ruttien->taikhoanrut->tai_khoan }}</span>
                                            <br>
                                            <span>Chủ tài khoản: {{ $ruttien->taikhoanrut->chu_tai_khoan }}</span>
                                            <br>
                                            <span>SDT: {{ $ruttien->taikhoanrut->so_dien_thoai }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-success">{{ number_format($ruttien->so_tien_truoc, 0, ',', '.') . ' VND' }}</span>
                                        </td>

                                        <td>
                                            <span
                                                class="text">{{ number_format($ruttien->so_tien_rut, 0, ',', '.') . ' VND' }}</span>
                                        </td>
                                        <td>
                                            <span
                                                class="text-primary">{{ number_format($ruttien->so_tien_sau, 0, ',', '.') . ' VND' }}</span>
                                        </td>
                                        <td>
                                            @if ($ruttien->status == 0)
                                                <div class="badge badge-light-warning">Chưa xác nhận</div>
                                                <!--end::Badges-->
                                            @elseif ($ruttien->status == -1)
                                                <div class="badge badge-light-danger">Đã hủy</div>
                                            @else
                                                <div class="badge badge-light-success">Xác nhận</div>
                                            @endif
                                        </td>
                                        <td>
                                            <span
                                                class="badge badge-light-danger">{{ number_format($ruttien->user->sodu) . ' VNĐ' }}</span>
                                        </td>
                                        <td>
                                            <span class="text">{{ $ruttien->created_at }}</span>
                                        </td>
                                        <td>
                                            @if ($ruttien->status == 0)
                                                <a href="{{ route('ruttien.xacnhan', $ruttien->id) }}"
                                                    class="btn btn-sm btn-primary">Xác nhận</a>
                                                <a href="{{ route('ruttien.huy', $ruttien->id) }}"
                                                    class="btn btn-sm btn-danger">Huỷ</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="">
                        {{-- {{ $items->links() }} --}}
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
    </div>
@endsection