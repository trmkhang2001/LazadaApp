<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.8
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>ADMIN PAGE</title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('clients_assets/images/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"> --}}
    <link href="{{ asset('admin_assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin_assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('admin_assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin_assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin_as_new/css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin_as_new/css/chunk-76d486d4.e2246661.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin_as_new/css/chunk-b790bce6.6a37b9cf.css') }}" type="text/css">
    <!--end::Global Stylesheets Bundle-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <style>
        .active {
            color: #409EFF
        }

        .main-content {
            font-size: 14px;
            line-height: 24px;
            color: #323233;
        }

        .card {
            border-radius: 0% !important;
        }

        .color-red {
            color: red !important;
        }

        .btn-yellow {
            background-color: #ff976a;
            color: white;
            padding: 2px;
        }

        .btn-blue {
            background-color: #409EFF;
            color: white;
            padding: 2px;
        }

        .btn-red {
            background-color: red;
            color: white;
            padding: 2px;
        }

        .btn-green {
            background-color: green;
            color: white;
            padding: 2px;
        }

        .field_input {
            border: 0;
        }

        .btn-war {
            background-color: #FFFF00;
            color: black;
            padding: 2px;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const currentPath = window.location.pathname;
            const links = document.querySelectorAll('a.menu-link');

            links.forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.parentElement.classList.add('active');
                }
            });
        });
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    @include('admin.layouts.header')
    <div class="p-5 main-content">
        @yield('contents')
    </div>
    <!--begin::App-->
    {{-- <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            {{-- @include('admin.layouts.header') --}}
    <!--end::Header-->
    <!--begin::Wrapper-->
    {{-- <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper"> --}}
    <!--begin::Sidebar-->
    {{-- @include('admin.layouts.sidebar') --}}
    <!--end::Sidebar-->
    <!--begin::Main-->
    {{-- <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    @yield('contents')
                </div> --}}
    <!--end:::Main-->
    {{-- </div> --}}
    <!--end::Wrapper-->
    {{-- </div> --}}
    <!--end::Page-->
    {{-- </div>  --}}
    <!--end::App-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "admin_assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('admin_assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin_assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('admin_assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('admin_assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('admin_assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('admin_assets/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/apps/chat/chat.js') }}"></script>
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('admin_assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('admin_assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    @stack('scripts')
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
