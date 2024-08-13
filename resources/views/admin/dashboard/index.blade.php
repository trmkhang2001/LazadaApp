@extends('admin.layouts.app')
@section('contents')
    <div class="">
        <div class="mb-4">
            <span class="me-2">Link đại lý:</span><span style="color: red">https://lazada.vn</span>
        </div>
        <div class="d-flex mb-4">
            <div class="card me-4 shadow">
                <div class="card-body">
                    Số lượng người dùng: {{ $nguoidung }} người
                </div>
            </div>
            <div class="card ms-4 shadow">
                <div class="card-body">
                    Mã mời: {{ Auth::user()->phone }}
                </div>
            </div>
        </div>
        <div class="d-flex mb-4">
            <div class="d-flex align-items-center me-4">
                <input class="me-3" type="checkbox">
                <div style="color: red">Tât cả dữ liệu khuyến mãi ngoại tuyến</div>
            </div>
            <div class="d-flex">
                <span>Thời gian: </span>
                <div class="ms-3">
                    <input type="date" placeholder="Ngày bắt đầu" name="date-start">
                    <span> - </span>
                    <input type="date" placeholder="Ngày bắt đầu" name="date-end">
                    <a class="my-2 me-5 p-2" style="background-color: #F56C6C;color:white ">
                        <span>Tìm kiếm</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="mb-4">
            <span>Phạm vi truy vấn: </span>
        </div>
        <div class="mb-4">
            <div class="row mb-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Tổng số thành viên
                        </div>
                        <div class="card-footer color-red">
                            {{ $tongnhanvien }} nhân viên / {{ $nguoidung }} người dùng
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Người đăng ký mới
                        </div>
                        <div class="card-footer color-red">
                            {{ $dangkymoi }} người
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Tổng số tiền nạp
                        </div>
                        <div class="card-footer color-red">
                            ₫{{ number_format($totalSoTienNap) }} / {{ $totalUsers }}Người
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Tổng số tiền rút
                        </div>
                        <div class="card-footer color-red">
                            ₫{{ number_format($totalSoTienRut) }} / {{ $totalUsers }}Người
                        </div>
                    </div>
                </div>

            </div>
            {{-- <div class="row mb-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Nạp tiền trực tuyến
                        </div>
                        <div class="card-footer">
                            <span class="color-red me-3">₫70,000 / 1Lần / 1Người</span><span>Phí xử lý:₫0 </span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Tổng tiền thanh toán
                        </div>
                        <div class="card-footer">
                            <span class="color-red me-3">₫100,000 / 1Lần / 1Người</span><span>Phí xử lý:₫0 </span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Tổng lần đăng nhập
                        </div>
                        <div class="card-footer color-red">
                            402 người
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Người dùng trực tuyến
                        </div>
                        <div class="card-footer color-red">
                            {{ $dangkymoi }} người
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Nạp tiền nền
                        </div>
                        <div class="card-footer">
                            <span class="color-red me-3">₫0 / 0Lần / 0Người</span><span>Ghi nợ thủ công:₫0 </span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Hoa hồng đơn hàng
                        </div>
                        <div class="card-footer color-red">
                            ₫20,854 / 2Lần / 1Người
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Hoa hồng khuyến mãi
                        </div>
                        <div class="card-footer color-red">
                            ₫0 / 0Lần / 0Người
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            Doanh thu nạp
                        </div>
                        <div class="card-footer color-red">
                            ₫-30,000
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
