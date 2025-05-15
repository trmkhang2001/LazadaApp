@extends('admin.layouts.app')
@section('contents')
<div class="bg-white p-4">
    <div class="">
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
        <div class="">
            @if (Session::has('error'))
            <div class="alert alert-danger mb-5" role="alert">
                {{ Session::get('error') }}
            </div>
            @endif
            @if (Session::has('success'))
            <div class="alert alert-success mb-5" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif
        </div>
    </div>
    <div class="mb-5">
        <div class="d-flex">
            <h3 class="align-items-start flex-column">
                <span class=" fw-bold fs-3 mb-1">Update User</span>
            </h3>
            <div class="">
                <button class="my-2 mx-5 p-2 btn-blue border-0" data-bs-toggle="modal" data-bs-target="#naptien">Nạp
                    tiền</button>
                <button class="my-2 mx-5 p-2 btn-blue border-0" data-bs-toggle="modal" data-bs-target="#trutien">Trừ
                    tiền</button>
            </div>
            <!-- Modal nạp tiền -->
            <div class="modal fade" id="naptien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <div class="modal fade" id="trutien" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <div class="">
            <div class="">
                <h3 style="color: red">Số dư của {{ $user->phone }} : {{ number_format($user->sodu) . ' VNĐ' }}</h3>
            </div>
            <form class="" action="{{ route('admin.user.update', $user->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="">
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Họ và tên</label>
                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="Họ và tên" value="@if (isset($user)) {{ $user->name }} @endif" />
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Số điện thoại</label>
                        <input type="phone" name="phone" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="0123456789" value="@if (isset($user)) {{ $user->phone }} @endif" readonly />
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Pass rút tiền</label>
                        <input type="pass" name="pass_rut_tien" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="" value="@if (isset($user)) {{ $user->pass_rut_tien }} @endif" />
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Email</label>
                        <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="example@domain.com" value="@if (isset($user)) {{ $user->email }} @endif" />
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Mật khẩu</label>
                        <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="" @if (isset($user)) {{ 'value=' . $user->password }} @else
                            {{ 'value=' . '123456a' }} @endif />
                        <label class="text-gray-600 mt-2" for="">Default:
                            123456a</label>
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Xác nhận mật khẩu</label>
                        <input type="password" name="password_confirmation"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                            value="@if (isset($user)) {{ $user->password }} @else {{ '123456a' }} @endif" />
                        <label class="text-gray-600 mt-2" for="">Default:
                            123456a</label>
                    </div>
                    <div class="mb-7">
                        <label class="required fw-semibold fs-6 mb-5">Quyền</label>
                        <div class='separator separator-dashed my-5'></div>
                        <div class="d-flex fv-row">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input me-3" name="level" type="radio" value="1000"
                                    id="kt_modal_update_role_option_2" />
                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                    <div class="fw-bold text-gray-800">Nhân Viên</div>
                                </label>
                            </div>
                        </div>
                        <!--end::Input row-->
                        <div class='separator separator-dashed my-5'></div>
                        <!--begin::Input row-->
                        <div class="d-flex fv-row">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="level" type="radio" value="1"
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