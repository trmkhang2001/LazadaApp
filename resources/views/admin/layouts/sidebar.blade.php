<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="/admin">
            <div class="d-flex flex-wrap app-sidebar-logo-default">
                <div class="app-sidebar-logo-default">
                    <img alt="Logo" src="{{ asset('admin_assets/media/logos/default-dark.svg') }}"
                        class="h-25px " />
                </div>
                <div class="app-sidebar-logo-default">
                    <h2 class="ms-5" style="color: white">Trang Admin</h2>
                </div>
            </div>
            <img alt="Logo" src="{{ asset('admin_assets/media/logos/default-dark.svg') }}"
                class="h-20px app-sidebar-logo-minimize" />
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <!--begin::Minimized sidebar setup:-->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link--><a class="menu-link" href="/admin/thanhvien"><span class="menu-bullet"><span
                                class="bullet bullet-dot"></span></span><span class="menu-title">Quản lý thành
                            viên</span></a><!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                {{-- <div class="menu-item">
                    <!--begin:Menu link--><a class="menu-link" href="/admin/category"><span class="menu-bullet"><span
                                class="bullet bullet-dot"></span></span><span class="menu-title">Lịch sử tài
                            khoản</span></a><!--end:Menu link-->
                </div> --}}
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link--><a class="menu-link" href="/admin/donhang"><span class="menu-bullet"><span
                                class="bullet bullet-dot"></span></span><span class="menu-title">Lịch sử đặt
                            hàng</span></a><!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link--><a class="menu-link" href="/admin/naptien"><span class="menu-bullet"><span
                                class="bullet bullet-dot"></span></span><span class="menu-title">Lịch sử nạp
                            tiền</span></a><!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link--><a class="menu-link" href="/admin/ruttien"><span class="menu-bullet"><span
                                class="bullet bullet-dot"></span></span><span class="menu-title">Lịch sử rút tiền
                        </span></a><!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link--><a class="menu-link" href="/admin/thongtinrut"><span class="menu-bullet"><span
                                class="bullet bullet-dot"></span></span><span class="menu-title">Thông tin rút
                            tiền</span></a><!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                @if (Auth::user()->level == 1024)
                    <div class="menu-item">
                        <!--begin:Menu link--><a class="menu-link" href="/admin/donhangmau"><span
                                class="menu-bullet"><span class="bullet bullet-dot"></span></span><span
                                class="menu-title">Quản lý sản phẩm
                                mẫu</span></a><!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link--><a class="menu-link" href="/admin/banking"><span class="menu-bullet"><span
                                    class="bullet bullet-dot"></span></span><span class="menu-title">Tài khoản nhận
                                tiền</span></a><!--end:Menu link-->
                    </div>
                @endif
            </div><!--end:Menu sub-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
    <!--begin::Footer-->
    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
        <a href="/"
            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click">
            <span class="btn-label">Quay Lại Store</span>
            <i class="ki-duotone ki-document btn-icon fs-2 m-0">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </a>
    </div>
    <!--end::Footer-->
</div>
