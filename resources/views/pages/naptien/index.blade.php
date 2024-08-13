@extends('layout.layout')
@section('noidung')
    <div class="mx-3 mt-2">
        <div>
            <div>
                <form action="{{ route('nap_tien') }}" method="POST">
                    @csrf
                    <div class="recharge-content pa-3 mt-4">
                        <div class="title fw-bold">Vui lòng chọn kênh thanh toán</div>
                        <div class="type-list d-flex mt-2 flex-wrap">
                            <div class="item d-flex flex-column align-center mr-1 pa-2">
                                <span class="mb-2">BANK</span><i class="van-icon van-icon-checked"
                                    style="font-size: 24px;color: rgb(247, 206, 41);">
                                </i>
                            </div>
                        </div>
                        <div class="text-grey"></div>
                        <div class="cell-item mt-2 van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>Giới hạn số tiền</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body">
                                    <div class="van-field__control van-field__control--custom">
                                        <div class="wallet-info d-flex flex-full"><span class="text">10.000 ₫ ~
                                                300.000.000 ₫</span></div>
                                    </div>
                                </div>
                            </div>
                        </div><!----><!---->
                        <div class="input-amount van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>Số tiền nạp</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input id="tien_nap" name="tien_nap" type="text"
                                        placeholder="Vui lòng nhập số tiền nạp" class="van-field__control">
                                    <div class="van-field__button"><span>₫</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-1 mb-2 ml-4 text-red ft-14" style="font-size: medium; color: red;">Thanh toán thực
                            tế: <span id="thanh_toan_thuc_te">0</span>
                            ₫</div><!---->
                        <div class="ma-3">
                            <div class="tips text-red2 mb-2"></div><!---->
                            <button type="submit"
                                class="van-button van-button--default van-button--normal van-button--block"
                                style="color: white; background: rgb(247, 206, 41); border-color: rgb(247, 206, 41);">
                                <div class="van-button__content"><span class="van-button__text"><span class="ft-15"
                                            style="color: rgb(41, 47, 83);">Gửi đi</span></span></div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="px-3 py-3">
                        <div class="mb-2 text-center fs-3">Thông tin chuyển khoản:</div>
                        <div class="mb-2 d-flex align-items-center justify-content-between">
                            <div class="">
                                Chủ tài khoản:
                                <span class="fw-bold ps-1">{{ $tai_khoan->ho_ten }}</span>
                            </div>
                            <div class="copy-icon" id="copy_chutaikhoan">Sao
                                chép
                            </div>
                        </div>
                        <div class="mb-2 d-flex align-items-center justify-content-between">
                            <div class="">
                                Số tài khoản: <span class="fw-bold ps-1">{{ $tai_khoan->tai_khoan }}</span>
                            </div>
                            <div class="copy-icon" id="copy_sotaikhoan">
                                Sao
                                chép
                            </div>
                        </div>
                        <div class="mb-2 d-flex align-items-center justify-content-between">
                            <div class="">
                                Ngân hàng: <span class="fw-bold ps-1">{{ $tai_khoan->ngan_hang }}</span></div>
                            <div class="copy-icon" id="copy_nganhang">
                                Sao
                                chép
                            </div>
                        </div>
                        <div class="mb-2 d-flex align-items-center justify-content-between">
                            <div class="">
                                Nội dung: <span class="fw-bold ps-1">NT{{ Auth::user()->phone }}</span></div>
                            <div class="copy-icon" id="copy_noidung">
                                Sao
                                chép
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let chutaikhoan = "{{ $tai_khoan->ho_ten }}"
            let sotaikhoan = "{{ $tai_khoan->tai_khoan }}";
            let nganhang = "{{ $tai_khoan->ngan_hang }}"
            let noidung = "NT{{ Auth::user()->phone }}";
            document.getElementById("copy_chutaikhoan").addEventListener("click", function() {
                var textArea = document.createElement("textarea");
                textArea.value = chutaikhoan;
                document.body.appendChild(textArea);
                textArea.select();
                try {
                    document.execCommand('copy');
                    console.log('Text copied to clipboard');
                } catch (err) {
                    console.error('Failed to copy text: ', err);
                }
                document.body.removeChild(textArea);
            });
            document.getElementById("copy_sotaikhoan").addEventListener("click", function() {
                navigator.clipboard.writeText(sotaikhoan);
            });
            document.getElementById("copy_nganhang").addEventListener("click", function() {
                navigator.clipboard.writeText(nganhang);
            });
            document.getElementById("copy_noidung").addEventListener("click", function() {
                navigator.clipboard.writeText(noidung);
            });
            console.log(sotaikhoan);
            document.getElementById('tien_nap').addEventListener('input', function() {
                let tienNap = parseFloat(this.value.replace(/,/g, '')) || 0;
                document.getElementById('thanh_toan_thuc_te').textContent = tienNap.toLocaleString();
            });
            document.addEventListener('DOMContentLoaded', function() {
                var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            });
        </script>
    @endif
    <script>
        document.getElementById('tien_nap').addEventListener('input', function() {
            let tienNap = parseFloat(this.value.replace(/,/g, '')) || 0;
            document.getElementById('thanh_toan_thuc_te').textContent = tienNap.toLocaleString();
        });
    </script>
@stop
