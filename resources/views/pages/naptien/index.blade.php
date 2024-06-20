@extends('layout.layout')
@section('noidung')
    <div class="mx-3 mt-2">
        <div>
            <div>
                <form action="{{ route('nap_tien') }}" method="POST">
                    @csrf
                    <div class="recharge-content pa-3 mt-4">
                        <div class="title">Vui lòng chọn kênh thanh toán</div>
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
                        <div class="mt-1 mb-2 ml-4 text-red ft-14">Thanh toán thực tế: <span
                                id="thanh_toan_thuc_te">0</span>
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
            <div class="card-body" style="padding: 0px 30px;">
                <div class="row align-items-center">
                    <div class="col pr-0">
                        <p class=".text-red small" style="font-size: medium; color: red;">

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('tien_nap').addEventListener('input', function() {
            let tienNap = parseFloat(this.value.replace(/,/g, '')) || 0;
            document.getElementById('thanh_toan_thuc_te').textContent = tienNap.toLocaleString();
        });
    </script>
@stop
