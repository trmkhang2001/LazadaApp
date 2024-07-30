@extends('admin.layouts.app')
@section('contents')
    <div class="">
        <div class="d-flex mb-4">
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
                        <input type="text" id="search" name="search" class="me-3" placeholder="Nhập thông tin" />
                        <button type="submit" class=""> Tìm kiếm </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mb-5">
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
        </div>
        <div class="mb-5 bg-white">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Mã mời</th>
                        <th scope="col">Tên tài khoản</th>
                        <th scope="col">Số tiền</th>
                        <th scope="col">Tiền kinh nghiệm</th>
                        <th scope="col">Đại lý cao cấp</th>
                        <th scope="col">Thông tin đơn hàng</th>
                        <th scope="col">Thông tin điều khiển duy nhất</th>
                        <th scope="col">Nạp/ Rút tiền</th>
                        <th scope="col">Đăng nhập</th>
                        <th scope="col">Đăng nhập gần đây</th>
                        <th scope="col">Thơi gian đăng ký</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $user)
                        <tr>
                            <th scope="row">{{ $user->aff_code }}</th>
                            <td>
                                <div class="cell">
                                    <span class="el-tag el-tag--success el-tag--mini el-tag--light">Bên
                                        ngoài</span>
                                    <div>
                                        <a style="color: red;">{{ $user->phone }}</a>
                                        <div>Mã số cá nhân: 411068</div>
                                        <div class="text-primary">Cấp độ hiện tại: VIP1</div>
                                    </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div class="text-danger">{{ '₫' . number_format($user->sodu) }}</div>
                                    <div><a class="text-primary"><span class="el-link--inner">Điểm tín
                                                dụng: 60</span></a></div>
                                    <div><a class="text-primary"><span class="">Giá
                                                trị rủi ro: 0</span></a></div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <span class="text-danger">0</span>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <span class="text-success">Đại lý: {{ $user->aff_code }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div>Hoa hồng ngày hôm nay: 0 / 4Lần</div>
                                    <div>Hoa hồng tích lũy: 4 / 10586.96Lần</div>
                                    <div>Thu nhập của ngày hôm qua: 10586.96</div>
                                    <div>Hoa hồng khuyến mãi tích lũy: 0</div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div>Quyền hạn nhận đơn: <span class="text-success">Mở</span></div>
                                    <div>Giám sát đơn hàng: <span class="text-danger">Cấm</span></div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div>Rút tiền hàng ngày: ₫0</div>
                                    <div>Tổng số tiền rút: ₫0</div>
                                    <div>Nạp tiền hàng ngày: ₫0</div>
                                    <div>Tổng số tiền nạp: ₫0</div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">8</div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div>{{ $user->created_at }}</div>
                                    <div>IP: 27.64.108.76</div>
                                    <div>Địa chỉ IP: (105.841171,21.0245)</div>
                                </div>
                            </td>
                            <td>
                                <div class="cell">
                                    <div class="text-red">{{ $user->created_at }}</div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-column">
                                    <div class="mb-2">
                                        <a href="{{ route('admin.user.edit', $user->id) }}"
                                            class="my-2 me-5 p-2 btn-yellow">
                                            Sửa
                                        </a>
                                    </div>
                                    <div class="">
                                        <a href="" class="my-2 me-5 p-2 btn-blue">
                                            Xoá
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
