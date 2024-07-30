@extends('admin.layouts.app')
@section('contents')
    <div class="bg-white p-4">
        <div class="">
            <div class="mb-5 d-flex">
                <div class="d-flex align-items-center me-4">
                    <input class="me-3" type="checkbox">
                    <div style="color: red">Tât cả dữ liệu khuyến mãi ngoại tuyến</div>
                </div>
                <div class="">
                    <form action="{{ route('thongtinrut.search') }}" method="POST">
                        @csrf
                        <div class="d-flex align-items-center position-relative my-1">
                            <input type="text" id="search" name="search" class="me-3"
                                placeholder="Nhập thông tin" />
                            <button type="submit" class="btn-blue border-0"> Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mb-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Tên tài khoản</th>
                            <th scope="col">Kiểu tài khoản</th>
                            <th scope="col">Tên thật</th>
                            <th scope="col">Ngân hàng tiền gửi</th>
                            <th scope="col">Tài khoản ngân hàng</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Khác</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $taikhoan)
                            <tr>
                                <th>
                                    {{ $taikhoan->so_dien_thoai }}
                                </th>
                                <td>
                                    BANK
                                </td>
                                <td>
                                    {{ $taikhoan->chu_tai_khoan }}
                                </td>
                                <td>
                                    {{ $taikhoan->ten_ngan_hang }}
                                </td>
                                <td>
                                    {{ $taikhoan->tai_khoan }}
                                </td>
                                <td>
                                    {{ $taikhoan->so_dien_thoai }}
                                </td>
                                <td>

                                </td>
                                <td>
                                    <button type="button" class="btn-blue border-0 p-2" data-bs-toggle="modal"
                                        data-bs-target="#editModal" data-bs-id="{{ $taikhoan->id }}"
                                        data-bs-tennganhang="{{ $taikhoan->ten_ngan_hang }}"
                                        data-bs-taikhoan="{{ $taikhoan->tai_khoan }}"
                                        data-bs-chutaikhoan="{{ $taikhoan->chu_tai_khoan }}"
                                        data-bs-sodienthoai="{{ $taikhoan->so_dien_thoai }}">Biên tập</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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
