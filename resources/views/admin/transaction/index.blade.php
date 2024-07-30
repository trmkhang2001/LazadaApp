@extends('admin.layouts.app')
@section('contents')
    <div class="bg-white p-4">
        <div class="">
            <div class="d-flex">
                <div class="d-flex align-items-center me-4">
                    <input class="me-3" type="checkbox">
                    <div style="color: red">Tât cả dữ liệu khuyến mãi ngoại tuyến</div>
                </div>
                <div class="">
                    <form action="{{ route('naptien.search') }}" method="POST">
                        @csrf
                        <div class="d-flex align-items-center position-relative my-1">
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
                            <th scope="col">Loại nạp tiền</th>
                            <th scope="col">Phương thức thanh toán</th>
                            <th scope="col">Số tiền trước đó</th>
                            <th scope="col">Số tiền nạp</th>
                            <th scope="col">Số tiền sau đó</th>
                            <th scope="col">Trang thái nạp tiền</th>
                            <th scope="col">Thời gian nạp</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $naptien)
                            <tr>
                                <th>
                                    <div class="cell">
                                        <div>{{ $naptien->ma_nap }}</div>
                                        <span class="text-danger">Thứ tự </span>
                                    </div>
                                </th>
                                <td>
                                    <div class="cell">
                                        <div>{{ $naptien->user->phone }}</div><!---->
                                        <div>Đại lý: {{ $naptien->user->aff_code }}</div>
                                    </div>
                                </td>
                                <td>
                                    <div>Nạp tiền trực tuyến</div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <div class="text-danger">BANKING ONLINE</div>
                                        <div>Tỷ giá: <span class="text-danger">1</span>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <span
                                            class="text-success">{{ number_format($naptien->so_tien_truoc, 0, ',', '.') . ' VND' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <span
                                            class="text">{{ number_format($naptien->so_tien_nap, 0, ',', '.') . ' VND' }}</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <span
                                            class="text-primary">{{ number_format($naptien->so_tien_sau, 0, ',', '.') . ' VND' }}</span>
                                    </div>
                                </td>
                                <td>
                                    @if ($naptien->status == 0)
                                        <div class="text-warning">Chưa xác nhận</div>
                                        <!--end::Badges-->
                                    @elseif ($naptien->status == -1)
                                        <div class="text-danger">Đã hủy</div>
                                    @else
                                        <div class="text-success">Xác nhận</div>
                                    @endif
                                </td>
                                <td>
                                    <div class="cell">{{ $naptien->created_at }}</div>
                                </td>
                                <td>
                                    @if ($naptien->status == 0)
                                        <a href="{{ route('xac_nhan_nap_tien', $naptien->id) }}"
                                            class="btn-blue border-0">Xác
                                            nhận</a>
                                        <a href="" class="btn-red border-0">Huỷ</a>
                                    @endif
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
