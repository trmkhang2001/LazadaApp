@extends('layout.layout')
@section('noidung')

    <div class="mx-2 mt-4">
        <div class="text-center mb-3">
            <span class="fw-bold ">Thay đổi mật khẩu</span>
        </div>
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
        <div class="van-tabs van-tabs--line border-rad10" id="tabs">
            <div class="van-tabs__wrap">
                <div role="tablist" class="van-tabs__nav van-tabs__nav--line">
                    <div role="tab" class="van-tab van-tab--active" id="login-tab" aria-selected="true"><span
                            class="van-tab__text van-tab__text--ellipsis">Mật khẩu đăng nhập</span></div>
                    <div role="tab" class="van-tab" id="withdraw-tab"><span
                            class="van-tab__text van-tab__text--ellipsis">Mật khẩu rút
                            tiền</span></div>
                    <div class="van-tabs__line" id="tabs-line"
                        style="transform: translateX(90px) translateX(-50%); transition-duration: 0.3s;"></div>
                </div>
            </div>
            <div class="van-tabs__content">
                <div role="tabpanel" class="van-tab__pane" id="login-form-pane">
                    <form class="van-form" id="login-form" action="{{ route('doimatkhaudangnhap') }}" method="POST">
                        @csrf
                        <div class="van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>Mật khẩu cũ</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="password" placeholder="Mật khẩu cũ"
                                        class="van-field__control" name="old_password">
                                </div>
                            </div>
                        </div>
                        <div class="van-cell van-field">
                            @if ($errors->has('old_password'))
                                <div class="error text-danger">{{ $errors->first('old_password') }}</div>
                            @endif
                        </div>
                        <div class="van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>Mật khẩu mới</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="password" placeholder="Mật khẩu mới"
                                        class="van-field__control" name="new_password"></div>
                            </div>
                        </div>
                        <div class="van-cell van-field">
                            @if ($errors->has('new_password'))
                                <div class="error text-danger">{{ $errors->first('new_password') }}</div>
                            @endif
                        </div>

                        <div class="van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>Xác nhận mật khẩu</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="password" placeholder="Xác nhận mật khẩu"
                                        class="van-field__control" name="cf_password"></div>
                            </div>
                        </div>
                        <div class="van-cell van-field">
                            @if ($errors->has('cf_password'))
                                <div class="error text-danger">{{ $errors->first('cf_password') }}</div>
                            @endif
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn bg-teamplate w-100 border-rad10">
                                Gửi
                            </button>
                        </div>
                    </form>
                </div>
                <div role="tabpanel" class="van-tab__pane" id="withdraw-form-pane" style="display: none;">
                    <form class="van-form" id="withdraw-form" action="{{ route('doimatkhauruttien') }}" method="POST">
                        @csrf
                        <div class="van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>Mật khẩu cũ</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="password" placeholder="Mật khẩu cũ"
                                        class="van-field__control" name="old_password"></div>
                            </div>
                        </div>
                        <div class="van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>Mật khẩu mới</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="password" placeholder="Mật khẩu mới"
                                        class="van-field__control" name="new_password"></div>
                            </div>
                        </div>
                        <div class="van-cell van-field">
                            <div class="van-cell__title van-field__label"><span>Xác nhận mật khẩu</span></div>
                            <div class="van-cell__value van-field__value">
                                <div class="van-field__body"><input type="password" name="cf_password"
                                        placeholder="Xác nhận mật khẩu" class="van-field__control"></div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn bg-teamplate w-100 border-rad10">
                                Gửi
                            </button>
                        </div>
                    </form><!---->
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginTab = document.getElementById('login-tab');
            const withdrawTab = document.getElementById('withdraw-tab');
            const loginFormPane = document.getElementById('login-form-pane');
            const withdrawFormPane = document.getElementById('withdraw-form-pane');
            const tabsLine = document.getElementById('tabs-line');

            function moveTabsLine(tab) {
                const tabRect = tab.getBoundingClientRect();
                const tabListRect = tab.parentElement.getBoundingClientRect();
                const tabCenter = tabRect.left + (tabRect.width / 2);
                const translateX = tabCenter - tabListRect.left - (tabsLine.clientWidth / 2);
                tabsLine.style.transform = `translateX(${translateX}px)`;
            }

            loginTab.addEventListener('click', function() {
                loginTab.classList.add('van-tab--active');
                withdrawTab.classList.remove('van-tab--active');
                loginFormPane.style.display = '';
                withdrawFormPane.style.display = 'none';
                moveTabsLine(loginTab);
            });

            withdrawTab.addEventListener('click', function() {
                withdrawTab.classList.add('van-tab--active');
                loginTab.classList.remove('van-tab--active');
                withdrawFormPane.style.display = '';
                loginFormPane.style.display = 'none';
                moveTabsLine(withdrawTab);
            });

            // Initial position
            moveTabsLine(document.querySelector('.van-tab--active'));
        });
    </script>
@stop
