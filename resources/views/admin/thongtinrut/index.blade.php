@extends('admin.layouts.app')
@section('title_page')
    <div class="app-navbar-item ms-1 ms-md-3">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                Thông tin rút</h1>
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
                <li class="breadcrumb-item text-muted">Thông tin rút</li>
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
                    <span class="card-label fw-bold fs-3 mb-1">Dánh sách tài khoản rút của khách</span>
                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bold text-muted">
                                <th class="min-w-100px">Tên ngân hàng</th>
                                <th class="min-w-100px">Tài khoản</th>
                                <th class="min-w-100px">Chủ tài khoản</th>
                                <th class="min-w-100px">Số điện thoại</th>
                                <th>Thay đổi</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($items as $taikhoan)
                                <tr>
                                    <td>{{ $taikhoan->ten_ngan_hang }}</td>
                                    <td>{{ $taikhoan->tai_khoan }}</td>
                                    <td>{{ $taikhoan->chu_tai_khoan }}</td>
                                    <td>{{ $taikhoan->so_dien_thoai }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#editModal" data-bs-id="{{ $taikhoan->id }}"
                                            data-bs-tennganhang="{{ $taikhoan->ten_ngan_hang }}"
                                            data-bs-taikhoan="{{ $taikhoan->tai_khoan }}"
                                            data-bs-chutaikhoan="{{ $taikhoan->chu_tai_khoan }}"
                                            data-bs-sodienthoai="{{ $taikhoan->so_dien_thoai }}">Sửa</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <div class="">
                        {{ $items->links() }}
                    </div>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
    </div>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Sửa thông tin tài khoản</h5>
                </div>
                <form action="{{ route('taikhoan.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit-id">
                        <div class="form-group">
                            <label for="ten-ngan-hang">Tên ngân hàng</label>
                            <input type="text" class="form-control" id="edit-ten-ngan-hang" name="ten_ngan_hang"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="tai-khoan">Tài khoản</label>
                            <input type="text" class="form-control" id="edit-tai-khoan" name="tai_khoan" required>
                        </div>
                        <div class="form-group">
                            <label for="chu-tai-khoan">Chủ tài khoản</label>
                            <input type="text" class="form-control" id="edit-chu-tai-khoan" name="chu_tai_khoan"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="so-dien-thoai">Số điện thoại</label>
                            <input type="text" class="form-control" id="edit-so-dien-thoai" name="so_dien_thoai"
                                required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Script to populate modal fields -->
    <script>
        var editModal = document.getElementById('editModal');
        editModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var id = button.getAttribute('data-bs-id');
            var tennganhang = button.getAttribute('data-bs-tennganhang');
            var taikhoan = button.getAttribute('data-bs-taikhoan');
            var chutaikhoan = button.getAttribute('data-bs-chutaikhoan');
            var sodienthoai = button.getAttribute('data-bs-sodienthoai');

            // Find elements inside the modal
            var modalIdInput = editModal.querySelector('#edit-id');
            var modalTenNganHangInput = editModal.querySelector('#edit-ten-ngan-hang');
            var modalTaiKhoanInput = editModal.querySelector('#edit-tai-khoan');
            var modalChuTaiKhoanInput = editModal.querySelector('#edit-chu-tai-khoan');
            var modalSoDienThoaiInput = editModal.querySelector('#edit-so-dien-thoai');

            // Update the modal's content with the data from the button
            modalIdInput.value = id;
            modalTenNganHangInput.value = tennganhang;
            modalTaiKhoanInput.value = taikhoan;
            modalChuTaiKhoanInput.value = chutaikhoan;
            modalSoDienThoaiInput.value = sodienthoai;
        });
    </script>

    <!-- Script to populate modal fields -->
@endsection
