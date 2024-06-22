@extends('layout.layout')
@section('noidung')
    <div class="mx-2">
        <div class="mt-4 mb-2 mx-3">
            <div class="mb-2">
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
            @forelse ($taikhoans as $taikhoan)
                <div class="bg-white shadow border-rad10 p-2 mb-3"><!---->
                    <div class="">
                        <div>Loại thẻ: BANK</div>
                        <div>Tên tài khoản: {{ $taikhoan->chu_tai_khoan }}</div>
                        <div>Tên ngân hàng: {{ $taikhoan->ten_ngan_hang }}</div>
                        <div>Tài khoản ngân hàng: {{ $taikhoan->tai_khoan }}</div>
                        <div>Số điện thoại dự bị: {{ $taikhoan->so_dien_thoai }}</div>
                        <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        <div style="margin-top: 5px;"><!----><!----></div>
                    </div>
                </div>
            @empty
                <div data-v-4c427a83="" class="van-empty">
                    <div class="van-empty__image"><img src="https://img01.yzcdn.cn/vant/empty-image-default.png"></div>
                    <p class="van-empty__description">Không có thêm dữ liệu</p>
                </div>
            @endforelse
            {{-- @foreach ($taikhoans as $taikhoan)
                <div class="bg-white shadow border-rad10 p-2 mb-3"><!---->
                    <div class="">
                        <div>Loại thẻ: BANK</div>
                        <div>Tên tài khoản: {{ $taikhoan->chu_tai_khoan }}</div>
                        <div>Tên ngân hàng: {{ $taikhoan->ten_ngan_hang }}</div>
                        <div>Tài khoản ngân hàng: {{ $taikhoan->tai_khoan }}</div>
                        <div>Số điện thoại dự bị: {{ $taikhoan->so_dien_thoai }}</div>
                        <!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!----><!---->
                        <div style="margin-top: 5px;"><!----><!----></div>
                    </div>
                </div>
            @endforeach --}}
            <button class="btn btn-primary w-100 border-rad10" data-bs-toggle="modal"
                data-bs-target="#taikhoanrut">Thêm</button>
        </div>
        <!-- Modal tài khoản rút -->
        <div class="modal fade" id="taikhoanrut" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div role="dialog" aria-labelledby="Thông tin rút tiền" tabindex="0" class="van-dialog"
                        style="width: 90%; height: 550px; overflow-y: scroll; z-index: 2008;">
                        <div class="van-dialog__header">Thông tin rút tiền</div>
                        <div class="van-dialog__content">
                            <form class="van-form" action="{{ route('add.taikhoanrut') }}" method="POST">
                                @csrf
                                <div class="van-cell van-field">
                                    <div class="van-cell__title van-field__label"><span>Loại thẻ</span></div>
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body">
                                            <div class="van-field__control van-field__control--custom">
                                                <div role="radiogroup"
                                                    class="ft-12 van-radio-group van-radio-group--horizontal">
                                                    <div role="radio" tabindex="0" aria-checked="true"
                                                        class="van-radio van-radio--horizontal">
                                                        <div class="van-radio__icon van-radio__icon--round van-radio__icon--checked"
                                                            style="font-size: 12px;"><i
                                                                class="van-icon van-icon-success"><!----></i></div><span
                                                            class="van-radio__label">BANK</span>
                                                    </div><!----><!----><!----><!----><!----><!---->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!----><!----><!---->
                                <div class="van-cell van-field">
                                    <div class="van-cell__title van-field__label"><span>Tên tài khoản</span></div>
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body"><input type="text"
                                                placeholder="Vui lòng nhập Tên tài khoản" class="van-field__control"
                                                name="chu_tai_khoan"></div>
                                    </div>
                                </div><!---->
                                <div class="van-cell van-field">
                                    <div class="van-cell__title van-field__label"><span>Số điện thoại dự bị</span></div>
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body"><input type="text" name="so_dien_thoai"
                                                placeholder="Vui lòng nhập Số điện thoại dự bị" class="van-field__control">
                                        </div>
                                    </div>
                                </div><!----><!----><!----><!---->
                                <div role="button" tabindex="0" class="van-cell van-cell--clickable van-field">
                                    <div class="van-cell__title van-field__label"><span>Tên ngân hàng</span></div>
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body">
                                            <select name="ten_ngan_hang" id="" class="form-select">
                                                <option value="ABBANK">ABBANK</option>
                                                <option value="ACB">ACB</option>
                                                <option value="Agribank">Agribank</option>
                                                <option value="Bac A Bank">Bac A Bank</option>
                                                <option value="BIDV">BIDV</option>
                                                <option value="BANKCOMMB">BANKCOMMB</option>
                                                <option value="BAOVIETBANK">BAOVIETBANK</option>
                                                <option value="BVBank">BVBank</option>
                                                <option value="DONGABANK">DONGABANK</option>
                                                <option value="PVcomBank">PVcomBank</option>
                                                <option value="PVcomBank">SACOMBANK</option>
                                                <option value="TPBANK">TPBANK</option>
                                                <option value="VPBANK">VPBANK</option>
                                                <option value="MBBANK">MBBANK</option>
                                                <option value="VIETINBANK">VIETINBANK</option>
                                            </select>
                                        </div>
                                    </div>
                                </div><!---->
                                <div class="van-cell van-field">
                                    <div class="van-cell__title van-field__label"><span>Tài khoản ngân hàng</span></div>
                                    <div class="van-cell__value van-field__value">
                                        <div class="van-field__body"><input type="text"
                                                placeholder="Vui lòng nhập Tài khoản ngân hàng" class="van-field__control"
                                                name="tai_khoan">
                                        </div>
                                    </div>
                                </div>
                                <div style="margin: 16px;">
                                    <button type="submit"
                                        class="van-button van-button--primary van-button--normal van-button--block van-button--round">
                                        <div class="van-button__content">
                                            <span class="van-button__text">
                                                Gửi
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </form>
                            <div class="text-red" style="padding: 10px;"></div>
                        </div>
                        <div class="van-hairline--top van-dialog__footer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
