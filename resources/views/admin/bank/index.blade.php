@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Tài khoản nhận tiền</h1>
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
                <li class="breadcrumb-item text-muted">Tài khoản nhận tiền</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
    </div>
@endsection
@section('contents')
    <div class="d-flex flex-column flex-column-fluid">
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Tài khoản nhận tiền</span>
                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <form action="{{ route('banking.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ngân hàng</label>
                        <input type="text" class="form-control" name="ngan_hang" aria-describedby="emailHelp"
                            value="{{ $item->ngan_hang }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tài khoản</label>
                        <input type="text" class="form-control" name="tai_khoan" value="{{ $item->tai_khoan }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chủ tài khoản</label>
                        <input type="text" class="form-control" name="ho_ten" value="{{ $item->ho_ten }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
    </div>
@endsection
