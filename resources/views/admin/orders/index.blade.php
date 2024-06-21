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
                    <form action="{{ route('donhang.search') }}" method="POST">
                        @csrf
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" id="search" name="search"
                                class="form-control form-control-solid w-250px ps-13" placeholder="Nhập thông tin" />
                            <button type="submit" class="btn btn-primary pd-2 ms-2"> Tìm kiếm</button>
                        </div>
                    </form>
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
                                            @if (isset($order->don_hang_maus))
                                                <span>{{ $order->don_hang_maus->ten_san_pham }}</span>
                                                <br>
                                                <span>Giá phù hợp:
                                                    {{ $order->don_hang_maus->tong_gia }}</span>
                                                <br>
                                                <span>Tỷ lệ hoa hồng: 20%</span>
                                            @else
                                                <span class="badge badge-light-danger">Chưa có sản phẩm</span>
                                            @endif
                                            <!--end::Badges-->
                                        </td>
                                        <td class=" pe-0" data-order="Expired">
                                            <!--begin::Badges-->
                                            @if ($order->status == 0 && !isset($order->don_hang_maus))
                                                <div class="badge badge-light-warning">Chờ phân phối</div>
                                            @elseif($order->status == 0)
                                                <div class="badge badge-light-danger">Chờ gửi</div>
                                            @elseif($order->status == 2)
                                                <div class="badge badge-light-danger">Chưa xác nhận</div>
                                                <!--end::Badges-->
                                            @elseif($order->status == 1)
                                                <div class="badge badge-light-success">Xác nhận</div>
                                            @endif
                                        </td>
                                        <td>

                                            @if (isset($order->don_hang_maus))
                                                <span>Số dư trước khi đặt đơn:
                                                    {{ number_format($order->user->sodu, 0, ',', '.') . ' VND' }}</span>
                                                <br>
                                                <span>Số dư sau khi đặt đơn:
                                                    {{ number_format($order->user->sodu - $order->don_hang_maus->tong_gia, 0, ',', '.') . ' VND' }}</span>
                                                <br>
                                                <span>Hoa hồng:
                                                    {{ number_format($order->don_hang_maus->tong_gia * 0.2, 0, ',', '.') . ' VND' }}</span>
                                            @else
                                                <span class="badge badge-light-danger">Chưa có thông tin</span>
                                            @endif
                                        </td>
                                        <td class="">
                                            <span class="fw-bold">{{ date('d/m/Y', strtotime($order->updated_at)) }}</span>
                                        </td>
                                        <td class="">
                                            @if (isset($order->don_hang_maus))
                                                @if ($order->status == 2)
                                                    <a href="{{ route('donhang.xacnhan', $order->id) }}"
                                                        class="mb-3 btn btn-sm btn-primary btn-flex btn-center btn-active-light-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        Xác nhận
                                                    </a>
                                                @elseif ($order->status == 0)
                                                    <a href="{{ route('donhang.huydon', $order->id) }}"
                                                        class="btn btn-sm btn-danger btn-flex btn-center btn-active-light-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        Huỷ Đơn
                                                    </a>
                                                @endif
                                            @else
                                                <button class="btn btn-sm btn-success"
                                                    onclick="openPhanPhoiDonModal({{ $order->id }})">Phân phối
                                                    đơn</button>
                                            @endif
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
    <!-- Modal -->
    <div class="modal fade" id="phanphoidonmodal" tabindex="-1" aria-labelledby="phanphoidon" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="phanphoidon">Phân phối đơn</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateUserForm" action="{{ route('donhang.phanphoidon') }}" method="POST">
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <!-- Other form fields for updating user details -->
                        <div class="mb-3">
                            <label for="userName" class="form-label">Chọn đơn</label>
                            <select class="form-select" aria-label="Default select example" name="don_mau">
                                <option selected>Chọn đơn phù hợp</option>
                                @foreach ($don_hang_maus as $don_mau)
                                    <option value="{{ $don_mau->id }}">
                                        {{ 'Tên: ' . $don_mau->ten_san_pham . ' - Giá: ' . $don_mau->tong_gia }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Phân phối</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openPhanPhoiDonModal(id) {
            // Set the user ID and name in the modal form fields
            document.getElementById('id').value = id;

            // Show the modal
            var phanPhoiDonModal = new bootstrap.Modal(document.getElementById('phanphoidonmodal'));
            phanPhoiDonModal.show();
        }
    </script>
@endsection
