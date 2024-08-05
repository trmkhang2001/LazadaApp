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
                    <form action="{{ route('donhang.search') }}" method="POST">
                        @csrf
                        <div class="d-flex align-items-center position-relative my-1">
                            <input type="text" id="search" name="search" class="me-2"
                                placeholder="Nhập thông tin" />
                            <button type="submit" class="p-1 btn-blue border-0"> Tìm kiếm</button>
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
                            <th scope="col">Chế độ đơn thẻ</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Thông tin đơn hàng</th>
                            <th scope="col">Thông tin số tiền</th>
                            <th scope="col">Trạng thái đơn hàng</th>
                            <th scope="col">Thơi gian phát đơn</th>
                            <th scope="col">Cập nhật thời gian</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <th scope="row">{{ $order->ma_dh }}</th>
                                <td>
                                    <div class="cell">
                                        <span>{{ $order->user->phone }}</span>
                                        <span>VIP1</span>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <div class="text-danger">Số tiền cố định để gửi đơn đặt hàng</div>
                                        <div>Số tiền phù hợp: 80524.81-80524.81</div>
                                        <div>Phương thức hoa hồng: Tỷ lệ</div>
                                        <div>Tỷ lệ hoa hồng: 20%</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <div class="">
                                            @if (isset($order->don_hang_maus))
                                                <span>{{ $order->don_hang_maus->ten_san_pham }}</span>
                                                <br>
                                                <span>Giá phù hợp: ₫
                                                    {{ number_format($order->don_hang_maus->tong_gia) }}</span>
                                                <br>
                                                <span>Tỷ lệ hoa hồng: 20%</span>
                                                <br>
                                                <span class="text-danger">Hoa hồng hiện tại: ₫
                                                    {{ number_format($order->don_hang_maus->tong_gia * 0.2) }}</span>
                                            @else
                                                <span class="text-danger">Chưa có sản phẩm</span>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        @if (isset($order->don_hang_maus))
                                            <span>{{ $order->created_at }}</span>
                                            <br>
                                            <span>Tổng giá: ₫
                                                {{ number_format($order->don_hang_maus->tong_gia) }}</span>
                                            <br>
                                            <span class="text-danger">Tổng hoa hồng：₫
                                                {{ number_format($order->don_hang_maus->tong_gia * 0.2) }}</span>
                                            <br>
                                        @else
                                            <span class="text-danger">Chưa có sản phẩm</span>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        <div>Đóng băng: ₫0</div>
                                        <div>Số dư đơn hàng: ₫{{ number_format($order->user->sodu) }}</div>
                                        <div class="text-red">Số dư hiện tại: ₫{{ number_format($order->user->sodu) }}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">
                                        @if ($order->status == 0 && !isset($order->don_hang_maus))
                                            <div class="text-warning">Chờ phân phối</div>
                                        @elseif($order->status == 0)
                                            <div class="text-danger">Chờ gửi</div>
                                        @elseif($order->status == 2)
                                            <div class="text-danger">Chưa xác nhận</div>
                                        @elseif($order->status == 1)
                                            <div class="text-success">Xác nhận</div>
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <div class="cell">{{ $order->created_at }}</div>
                                </td>
                                <td>
                                    <div class="cell">{{ $order->updated_at }}</div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column">
                                        @if (isset($order->don_hang_maus))
                                            @if ($order->status == 2)
                                                <a href="{{ route('donhang.xacnhan', $order->id) }}"
                                                    class="btn-blue border-0" data-kt-menu-trigger="click"
                                                    data-kt-menu-placement="bottom-end">
                                                    Xác nhận
                                                </a>
                                            @elseif ($order->status == 0)
                                                <a href="{{ route('donhang.huydon', $order->id) }}"
                                                    class="btn-red border-0" data-kt-menu-trigger="click"
                                                    data-kt-menu-placement="bottom-end">
                                                    Huỷ Đơn
                                                </a>
                                            @endif
                                        @else
                                            <button class="btn-green border-0"
                                                onclick="openPhanPhoiDonModal({{ $order->id }})">Phân phối
                                                đơn</button>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="phanphoidonmodal" tabindex="-1" aria-labelledby="phanphoidon" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="phanphoidon">Phân phối đơn</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateUserForm" action="{{ route('donhang.phanphoidon') }}" method="POST">
                        @csrf
                        <input type="hidden" id="id" name="id">
                        <!-- Các trường khác để cập nhật thông tin người dùng -->
                        <div class="mb-3">
                            <label for="userName" class="form-label">Chọn đơn</label>
                            <input type="range" class="form-range" min="0" max="100000000" step="100000"
                                id="priceRange">
                            <div class="d-flex justify-content-between">
                                <span id="minPrice">Từ 0 VNĐ</span>
                                <span id="maxPrice">Đến 100,000,000 VNĐ</span>
                            </div>
                            <select class="form-select mt-3" aria-label="Default select example" name="don_mau"
                                id="don_mau_select">
                                <option selected>Chọn đơn phù hợp</option>
                                @foreach ($don_hang_maus as $don_mau)
                                    <option value="{{ $don_mau->id }}" data-gia="{{ $don_mau->tong_gia }}">
                                        {{ 'Giá: ' . number_format($don_mau->tong_gia) . 'VNĐ' . ' - Tên: ' . $don_mau->ten_san_pham }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Phân phối</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openPhanPhoiDonModal(id) {
            // Set the user ID and name in the modal form fields
            document.getElementById('id').value = id;

            // Show the modal
            var phanPhoiDonModal = new bootstrap.Modal(document.getElementById('phanphoidonmodal'));
            phanPhoiDonModal.show();
        }
        document.addEventListener('DOMContentLoaded', function() {
            const selectElement = document.getElementById('don_mau_select');
            const priceRange = document.getElementById('priceRange');
            const minPriceLabel = document.getElementById('minPrice');
            const maxPriceLabel = document.getElementById('maxPrice');

            // Hàm định dạng giá trị tiền tệ
            function formatCurrency(value) {
                return 'Đến ' + value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',') + ' VNĐ';
            }

            priceRange.addEventListener('input', function() {
                const maxPrice = parseFloat(priceRange.value);
                maxPriceLabel.textContent = formatCurrency(maxPrice);

                // Lọc các option dựa trên khoảng giá
                filterOptionsByPrice(selectElement, maxPrice);
            });

            // Hàm để lọc các option theo giá
            function filterOptionsByPrice(select, maxPrice) {
                const options = Array.from(select.options);

                options.forEach(option => {
                    const price = parseFloat(option.getAttribute('data-gia'));
                    if (price <= maxPrice) {
                        option.style.display = 'block';
                    } else {
                        option.style.display = 'none';
                    }
                });
            }
        });
    </script>
@endsection
