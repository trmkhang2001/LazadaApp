@extends('admin.layouts.app')
@section('contents')
    <div class="bg-white p-4">
        <div class="">
            <div class="d-flex mb-4">
                <div class="d-flex align-items-center me-4">
                    <input class="me-3" type="checkbox">
                    <div style="color: red">Tât cả dữ liệu khuyến mãi ngoại tuyến</div>
                </div>
                <div class="">
                    <form action="{{ route('ruttien.search') }}" method="POST">
                        @csrf
                        <div class="d-flex">
                            <input type="text" id="search" name="search" class="me-3"
                                placeholder="Nhập thông tin" />
                            <button type="submit" class="btn-blue border-0"> Tìm kiếm</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mb-4">
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
            <div class="mb-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Mã đơn</th>
                            <th scope="col">Tên tài khoản</th>
                            <th scope="col">Thông tin tài khoản rút</th>
                            <th scope="col">Số tiền yêu cầu</th>
                            <th scope="col">Số tiền thanh toán</th>
                            <th scope="col">Phí xử lý</th>
                            <th scope="col">Số tiền sau rút</th>
                            <th scope="col">Trang thái</th>
                            <th scope="col">Trạng thái xem xét proxy</th>
                            <th scope="col">Phương thức thanh toán</th>
                            <th scope="col">Thời gian rút tiền</th>
                            <th scope="col">Thời gian cập nhật</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $ruttien)
                            <tr>
                                <th>
                                    <div class="cell">
                                        <div>{{ $ruttien->id }}</div>
                                    </div>
                                </th>
                                <td>
                                    <div class="cell">
                                        <div>
                                            <span class="me-2">{{ $ruttien->user->phone }}</span>
                                            <span class="text-success">Bên ngoài</span>
                                        </div>
                                        <div class="text-blue font-bold"
                                            style="color: rgb(32, 160, 255) !important; font-weight: 700;">Giá trị rủi ro: 0
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <div>Kiểu tài khoản: BANK</div>
                                        <div>Tên ngân hàng: {{ $ruttien->taikhoanrut->ten_ngan_hang }}</div>
                                        <div>Tài khoản ngân hàng: {{ $ruttien->taikhoanrut->tai_khoan }}</div>
                                        <div>Chủ tài khoản: {{ $ruttien->taikhoanrut->chu_tai_khoan }}</div>
                                        <div>Số điện thoại: {{ $ruttien->taikhoanrut->so_dien_thoai }}</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <span
                                            class="text-success">{{ number_format($ruttien->so_tien_rut, 0, ',', '.') . ' VND' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <span
                                            class="text-danger">{{ number_format($ruttien->so_tien_rut, 0, ',', '.') . ' VND' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">0</div>
                                </td>
                                <td>
                                    <div class="cell"><span
                                            class="text-primary">{{ number_format($ruttien->so_tien_sau, 0, ',', '.') . ' VND' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        @if ($ruttien->status == 0)
                                            <div class="text-warning">Chưa xác nhận</div>
                                            <!--end::Badges-->
                                        @elseif ($ruttien->status == -1)
                                            <div class="text-danger">Đã hủy</div>
                                        @else
                                            <div class="text-success">Xác nhận</div>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <span class="text-danger">Để được xem xét</span>
                                    </div>
                                </td>
                                <td>
                                    <div>Online</div>
                                </td>
                                <td>
                                    <div class="cell">{{ $ruttien->created_at }}</div>
                                </td>
                                <td>
                                    <div class="cell">{{ $ruttien->updated_at }}</div>
                                </td>
                                <td>
                                    <div class="cell">
                                        @if ($ruttien->status == 0)
                                            <a href="{{ route('ruttien.xacnhan', $ruttien->id) }}"
                                                class="btn-blue border-0">Xác nhận</a>
                                            <a href="{{ route('ruttien.huy', $ruttien->id) }}"
                                                class="btn-red border-0">Huỷ</a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="">
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
