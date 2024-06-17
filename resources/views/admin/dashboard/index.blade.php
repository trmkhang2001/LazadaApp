@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Dashboard</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="/admin" class="text-muted text-hover-primary">Admin</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Dashboard</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
    </div>
@endsection
@section('contents')
    <style>
        h3 {
            text-transform: uppercase;
        }
    </style>
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Row-->
        <div class="row mx-5 p-5 mt-4">
            <div class="text-center">
                <h1 class="mb-5">Thông kê số lượng</h1>
            </div>
            <div class="col">
                <div class="card p-5 mx-0">
                    <h3>Người dùng: </h3>
                </div>
            </div>
            <div class="col">
                <div class="card p-5 mx-0">
                    <h3>Đơn hàng: </h3>
                </div>
            </div>
            <div class="col">
                <div class="card p-5 mx-0">
                    <h3>Sản phẩm : </h3>
                </div>
            </div>
            <div class="col">
                <div class="card p-5 mx-0">
                    <h3>Danh mục: </h3>
                </div>
            </div>
        </div>
        <!--end::Row-->
        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mt-3 mb-5 mb-xl-10 mx-5">
            <!--begin::Col-->
            <div class="text-center">
                <h1>Biểu đồ bán hàng</h1>
            </div>
            <div class="col-xxl-8">
                <!--begin::Chart widget 38-->
                <div class="card card-flush h-md-100">
                    <!--begin::Header-->
                    <div class="card-header">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Lượng mua hàng</span>
                            <span class="text-gray-400 mt-1 fw-bold fs-6">Số lượng mua hàng của user</span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex align-items-end px-0 pt-3 pb-5">
                        <!--begin::Chart-->
                        <div class="w-100 min-h-auto pe-6">
                            <div class="card-body">
                                <canvas id="chBar"></canvas>
                            </div>
                        </div>
                        <!--end::Chart-->
                    </div>
                    <!--end: Card Body-->
                </div>
                <!--end::Chart widget 38-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xxl-4">
                <!--begin::Engage widget 1-->
                <div class="card h-md-100" dir="ltr">
                    <!--begin::Header-->
                    <div class="card-header">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Tỉ lệ đơn hàng</span>
                        </h3>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <canvas id="doughnutChart"></canvas>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 1-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
@endsection
