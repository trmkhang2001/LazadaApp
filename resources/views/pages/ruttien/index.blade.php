@extends('layout.layout')
@section('noidung')
    <div class="mx-2">
        <div class="mt-3">
            <div class="container">
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
        <div>
            <form class="van-form" action="{{ route('tao_lenh_rut_tien') }}" method="POST">
                @csrf
                <div class="container">
                    <div class="bg-teamplate shadow mt-4 border-rad10 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col text-center" style="color: white">
                                    <h3 class="fw-bold">{{ number_format($profile->sodu) }} ₫</h3>
                                    <p class="text-mute">Số dư tài khoản</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="bg-white shadow mt-4 border-rad10 mb-3">
                        <div class="card-body">
                            <div class="">
                                Số điện thoại: 0866411902
                            </div>
                            <div class="fw-bold">
                                Vui lòng chọn tài khoản ngân hàng rút:
                            </div>
                            <div class="" style="color: rgb(0, 0, 0)">
                                {{-- @foreach ($tai_khoan_ruts as $tai_khoan)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="taikhoan"
                                            id="flexRadioDefault1" checked value="{{ $tai_khoan->id }}">
                                        <label class="form-check-label" for="flexRadioDefault1" style="font-size: 14px">
                                            Loại thẻ: BANK - {{ $tai_khoan->tai_khoan }} - {{ $tai_khoan->ten_ngan_hang }}
                                        </label>
                                    </div>
                                @endforeach --}}
                                @forelse ($tai_khoan_ruts as $tai_khoan)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="taikhoan"
                                            id="flexRadioDefault1" value="{{ $tai_khoan->id }}">
                                        <label class="form-check-label" for="flexRadioDefault1" style="font-size: 14px">
                                            Loại thẻ: BANK - {{ $tai_khoan->tai_khoan }} - {{ $tai_khoan->ten_ngan_hang }}
                                        </label>
                                    </div>
                                @empty
                                    <div class="text-danger">Chưa có tài khoản rút.</div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="shadow mt-4 border-rad10 mb-3">
                        <div class="card-body">
                            <div class="van-cell  mb-3 border-rad10">
                                <input class="" type="text" name="tienrut" placeholder="Số tiền rut"
                                    id="tienrut">
                            </div>
                            <div class="van-cell  mb-3 border-rad10">
                                <input class="" type="text" name="pass_rut_tien" placeholder="Mật khẩu rút">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <button type="submit" class="btn bg-teamplate border-rad10 w-100">Gửi</button>
                </div>
            </form>

            <div class="container mt-4">
                <div class="mb-1">
                    Phí thủ tục: <span id="phi_thu_tuc"></span>đ ( <span style="color: red">0%</span>)
                </div>
                <div class="">
                    Thực nhận: <span id="thuc_nhan"></span>₫
                </div>
            </div>
        </div>
    </div><!---->
    </div>
    </div>
    <div class="modal fade" id="chuacotaikhoanrut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div role="dialog" tabindex="0" class="van-dialog" style="z-index: 2021;"
                    aria-labelledby="Vui lòng thêm thông tin rút tiền trước">
                    <div class="van-dialog__content van-dialog__content--isolated">
                        <div class="van-dialog__message">Vui lòng thêm thông tin rút tiền trước</div>
                    </div>
                    <div class="van-hairline--top van-dialog__footer">
                        <a href="/profile" type="button"
                            class="van-button van-button--default van-button--large van-dialog__cancel">
                            <div class="van-button__content"><span class="van-button__text">Hủy bỏ</span></div>
                        </a>
                        <a href="/taikhoanrut" type="button"
                            class="van-button van-button--default van-button--large van-dialog__confirm van-hairline--left">
                            <div class="van-button__content"><span class="van-button__text" style="color: blue">Xác
                                    nhận</span></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('tienrut').addEventListener('input', function() {
            let soTienRut = parseFloat(this.value.replace(/,/g, '')) || 0;
            let phiThuTuc = soTienRut * 0;
            let thucNhan = soTienRut - phiThuTuc;

            document.getElementById('phi_thu_tuc').innerText = phiThuTuc.toLocaleString('vi-VN');
            document.getElementById('thuc_nhan').innerText = thucNhan.toLocaleString('vi-VN');
        });
        @if ($tai_khoan_ruts->isEmpty())
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('chuacotaikhoanrut'), {
                    keyboard: false
                });
                myModal.show();
            });
        @endif
    </script>
@endsection
