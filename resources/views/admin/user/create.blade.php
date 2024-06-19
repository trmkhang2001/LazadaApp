@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                User</h1>
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
                <li class="breadcrumb-item text-muted">User</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
    </div>
@endsection

@section('contents')
    <div class="d-flex flex-column flex-column-fluid">
        <div class="app-content">
            <div class="">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="m-5">
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
            </div>
        </div>
        <div class="card mb-5 mb-xl-8">
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Update User</span>
                </h3>
                <div class="">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#naptien">Nạp tiền</button>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#trutien">Trừ tiền</button>
                </div>
                <!-- Modal nạp tiền -->
                <div class="modal fade" id="naptien" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('admin.user.congtien', $user->id) }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Nạp tiền cho {{ $user->phone }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span class="fw-bold" style="color: red">Số dư hiện tại là:
                                        {{ number_format($user->sodu) . ' VNĐ' }}</span>
                                    <div class="form-group">
                                        <label for="" class="form-label">Số tiền nạp:</label>
                                        <input type="number" name="tiennap" id="" class="form-control">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                                    <button type="submit" class="btn btn-primary">Cộng tiền ngay</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Modal trừ tiền -->
                <div class="modal fade" id="trutien" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('admin.user.trutien', $user->id) }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Trừ tiền cho {{ $user->phone }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <span class="fw-bold" style="color: red">Số dư hiện tại là:
                                        {{ number_format($user->sodu) . ' VNĐ' }}</span>
                                    <div class="form-group">
                                        <label for="" class="form-label">Số tiền trừ:</label>
                                        <input type="number" name="tientru" id="" class="form-control">
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Huỷ</button>
                                    <button type="submit" class="btn btn-primary">Trừ tiền ngay</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-3">
                <div class="">
                    <h3 style="color: red">Số dư của {{ $user->phone }} : {{ number_format($user->sodu) . ' VNĐ' }}</h3>
                </div>
                <form class="p-10" action="{{ route('admin.user.update', $user->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column">
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Họ và tên</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="Họ và tên"
                                value="@if (isset($user)) {{ $user->name }} @endif" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Số điện thoại</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="phone" name="phone" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="0123456789"
                                value="@if (isset($user)) {{ $user->phone }} @endif" readonly />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="example@domain.com"
                                value="@if (isset($user)) {{ $user->email }} @endif" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Mật khẩu</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder=""
                                @if (isset($user)) {{ 'value=' . $user->password }} @else {{ 'value=' . '123456a' }} @endif />
                            <!--end::Input-->
                            <label class="text-gray-600 mt-2" for="">Default:
                                123456a</label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-2">Xác nhận mật khẩu</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="password" name="password_confirmation"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                value="@if (isset($user)) {{ $user->password }} @else {{ '123456a' }} @endif" />
                            <!--end::Input-->
                            <label class="text-gray-600 mt-2" for="">Default:
                                123456a</label>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-7">
                            <!--begin::Label-->
                            <label class="required fw-semibold fs-6 mb-5">Role</label>
                            <!--end::Label-->
                            <!--begin::Roles-->
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="role_id" type="radio" value="1024"
                                        id="kt_modal_update_role_option_0" />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_0">
                                        <div class="fw-bold text-gray-800">Admin</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="role_id" type="radio" value="1000"
                                        id="kt_modal_update_role_option_2" />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_2">
                                        <div class="fw-bold text-gray-800">Nhân Viên</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                            <!--begin::Input row-->
                            <div class="d-flex fv-row">
                                <!--begin::Radio-->
                                <div class="form-check form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input me-3" name="role_id" type="radio" value="1"
                                        id="kt_modal_update_role_option_3" checked='checked' />
                                    <!--end::Input-->
                                    <!--begin::Label-->
                                    <label class="form-check-label" for="kt_modal_update_role_option_3">
                                        <div class="fw-bold text-gray-800">Khách hàng</div>
                                    </label>
                                    <!--end::Label-->
                                </div>
                                <!--end::Radio-->
                            </div>
                            <!--end::Input row-->
                            <div class='separator separator-dashed my-5'></div>
                            <!--end::Roles-->
                        </div>
                        <!--end::Input group-->
                        <div class="d-flex justify-content-end">
                            <a href="/admin/thanhvien" class="btn btn-secondary mx-5"> Huỷ</a>
                            @if (isset($user))
                                <button type="submit" class="btn btn-primary mx-5">Cập nhật</button>
                            @else
                                <button type="submit" class="btn btn-primary mx-5"> Lưu</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
