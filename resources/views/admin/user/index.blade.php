@extends('admin.layouts.app')
@section('contents')
    <div class="">
        <div class="d-flex">
            <div class="d-flex align-items-center me-4">
                <input class="me-3" type="checkbox">
                <div>Chỉ xem trực tuyến</div>
            </div>
            <div class="d-flex align-items-center me-4">
                <input class="me-3" type="checkbox">
                <div style="color: red">Tât cả dữ liệu khuyến mãi ngoại tuyến</div>
            </div>
            <div class="">
                <form action="{{ route('admin.page.user.seach') }}" method="POST">
                    @csrf
                    <div class="d-flex align-items-center">
                        <input type="text" id="search" name="search" class="" placeholder="Nhập thông tin" />
                        <button type="submit" class=""> Tìm kiếm </button>
                    </div>
                </form>
            </div>
        </div>
        <!--begin::Card-->
        <div class="card mb-5">
            <!--begin::Card header-->
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body py-4">
                <!--begin::Table-->
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                    <thead>
                        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">Khách hàng</th>
                            <th class="min-w-125px">Quyền</th>
                            <th class="min-w-125px">Số điện thoại</th>
                            <th>Số dư</th>
                            <th>Trạng thái</th>
                            @if (Auth::user()->role == config('app.role.ADMIN'))
                                <th class="text-end min-w-100px">Thay đổi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                        @foreach ($items as $user)
                            <tr>
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="#">
                                            <div class="symbol-label">
                                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMRBqTeY-dTImnv-0qS4j32of8dVtWelSEMw&s"
                                                    class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="#"
                                            class="text-gray-800 text-hover-primary text-uppercase fw-bold mb-1">{{ $user->name !== null ? $user->name : 'Tên khách hàng chưa có' }}</a>
                                        <span>{{ $user->email !== null ? $user->email : 'Email khách hàng chưa có' }}</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <td class="text-uppercase">
                                    @if ($user->level == 1)
                                        KHÁCH HÀNG
                                    @else
                                        NHÂN VIÊN
                                    @endif
                                </td>
                                <td>
                                    <div class="badge badge-light fw-bold">{{ $user->phone }}</div>
                                </td>
                                <td>
                                    <div class="badge badge-danger fw-bold">{{ number_format($user->sodu) . ' VNĐ' }}</div>
                                </td>
                                <td>
                                    @if ($user->status == 1)
                                        <div class="badge badge-light fw-bold">Bình Thường</div>
                                    @else
                                        <div class="badge badge-warning fw-bold">Đống Băng</div>
                                    @endif
                                </td>
                                @if (Auth::user()->role_id == config('app.role.ADMIN'))
                                    <td class="text-end">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Hành động
                                            <i class="ki-duotone ki-down fs-5 ms-1"></i> </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('admin.user.edit', $user->id) }}" class="menu-link px-3">
                                                    Sửa
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <form action="{{ route('admin.user.delete', $user->id) }}" method="POST"
                                                    type="button" onsubmit="return confirm('Bạn chắc chắn muốn xóa ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="menu-link px-3 btn">
                                                        Xoá
                                                    </button>
                                                </form>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="">
                    {{ $items->links() }}
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
@endsection
