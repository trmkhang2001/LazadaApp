<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/layout/css/style.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/vant/2.13.2/index.min.css" rel="stylesheet">
    <style>
        .nav-link {
            color: #000;
            /* Màu mặc định */
        }

        .nav-link.active {
            color: #409EFF;
            /* Màu khi đang ở trang */
        }

        .nav-link.active .nav-icon {
            fill: #409EFF;
            /* Màu của SVG khi đang ở trang */
        }

        .nav-link.active .nav-title {
            color: #409EFF;
            /* Màu tiêu đề khi đang ở trang */
        }

        .swiper-container {
            height: 300px;
            /* Chiều cao của khu vực hiển thị */
            overflow: hidden;
            /* Ẩn phần tử bị tràn */
        }

        .swiper-wrapper {
            display: flex;
            flex-direction: column;
            /* Cuộn dọc */
        }

        .custom-swiper-container {
            height: 50px;
            /* Đặt chiều cao phù hợp */
            overflow: hidden;
        }

        .custom-swiper-wrapper {
            display: flex;
            flex-direction: column;
        }

        .custom-swiper-slide {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .nav-item {
            font-size: 15px !important;
        }

        .copy-icon {
            padding: 5px 20px;
            background: #ffb300ed;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="main">
        {{-- menu tren --}}
        <header class="header d-flex justify-content-between px-3 w-100">
            <div class=""><img src="{{ asset('img/header_r.jpg') }}" class="rounded-lg" style="width: 30px">
            </div>
            <div class="">
                <img src="data:image/png;base64,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"
                    style="width: 30px">
                <a href="#"><img src="https://da7979.com/static/media/cskh_login.3fc99be87347a72979c0.png"
                        style="width: 30px"></a>
            </div>
        </header>
        <div class="noidung">
            @yield('noidung')
        </div>
        {{-- meundu duoi --}}
        <div class="nav_wrapper mt-5 px-3">
            <a class="nav-link" href="/">
                <div class="nav-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                        viewBox="0 0 512 512" class="nav-icon nav-active" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M416 174.74V48h-80v58.45L256 32 0 272h64v208h144V320h96v160h144V272h64l-96-97.26z">
                        </path>
                    </svg>
                    <div class="nav-title">Trang chủ</div>
                </div>
            </a>
            <a class="nav-link" href="/dondat">
                <div class="nav-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                        viewBox="0 0 24 24" class="nav-icon" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                        <path
                            d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V9h14v10zM5 7V5h14v2H5zm2 4h10v2H7zm0 4h7v2H7z">
                        </path>
                    </svg>
                    <div class="nav-title">Đơn hàng</div>
                </div>
            </a>
            <a class="nav-link item-giutdon" href="/giutdon">
                {{-- <div class="nav-item">
                    <svg class="nav-icon nav-icon-center" height="3em" width="3em" viewBox="0 0 24 24"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M11.25 6H9C7.11438 6 6.17157 6 5.58579 6.58579C5 7.17157 5 8.11438 5 10L5.00005 16.25H18.9999L19 10C19 8.11438 19 7.17157 18.4142 6.58579C17.8284 6 16.8856 6 15 6H12.75V10.9726L13.4306 10.1786C13.7001 9.86408 14.1736 9.82766 14.4881 10.0972C14.8026 10.3668 14.839 10.8403 14.5695 11.1548L12.5695 13.4881C12.427 13.6543 12.219 13.75 12 13.75C11.7811 13.75 11.5731 13.6543 11.4306 13.4881L9.43057 11.1548C9.161 10.8403 9.19743 10.3668 9.51192 10.0972C9.82641 9.82766 10.2999 9.86408 10.5695 10.1786L11.25 10.9726V6Z"
                                fill="#fff"></path>
                            <path
                                d="M5.0306 17.75H18.9694C18.9181 18.5406 18.781 19.0474 18.4142 19.4142C17.8284 20 16.8856 20 15 20H9C7.11438 20 6.17157 20 5.58579 19.4142C5.21898 19.0474 5.08186 18.5406 5.0306 17.75Z"
                                fill="#fff"></path>
                            <path
                                d="M5.88889 3H18.1111C20.2589 3 22 4.79998 22 7.02036C22 8.30971 21.4129 9.45731 20.5 10.193L20.5 9.91053C20.5001 9.0449 20.5002 8.25122 20.4134 7.6056C20.3178 6.89464 20.0929 6.14319 19.4748 5.52514C18.8568 4.90709 18.1054 4.6822 17.3944 4.58661C16.7488 4.49981 15.9551 4.4999 15.0895 4.50001H8.91048C8.04485 4.4999 7.25118 4.49981 6.60556 4.58661C5.8946 4.6822 5.14315 4.90709 4.5251 5.52514C3.90706 6.14319 3.68216 6.89464 3.58657 7.6056C3.49977 8.25122 3.49987 9.04488 3.49997 9.91052L3.49998 10.193C2.58709 9.45727 2 8.30969 2 7.02036C2 4.79998 3.74112 3 5.88889 3Z"
                                fill="#fff"></path>
                        </g>
                    </svg>
                    <div class="nav-item-center-bg"></div>
                </div> --}}
                <div class="nav-item" style="padding-top: 0px !important ">
                    <svg height="2em" width="2em" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M11.25 6H9C7.11438 6 6.17157 6 5.58579 6.58579C5 7.17157 5 8.11438 5 10L5.00005 16.25H18.9999L19 10C19 8.11438 19 7.17157 18.4142 6.58579C17.8284 6 16.8856 6 15 6H12.75V10.9726L13.4306 10.1786C13.7001 9.86408 14.1736 9.82766 14.4881 10.0972C14.8026 10.3668 14.839 10.8403 14.5695 11.1548L12.5695 13.4881C12.427 13.6543 12.219 13.75 12 13.75C11.7811 13.75 11.5731 13.6543 11.4306 13.4881L9.43057 11.1548C9.161 10.8403 9.19743 10.3668 9.51192 10.0972C9.82641 9.82766 10.2999 9.86408 10.5695 10.1786L11.25 10.9726V6Z"
                                fill="#fff"></path>
                            <path
                                d="M5.0306 17.75H18.9694C18.9181 18.5406 18.781 19.0474 18.4142 19.4142C17.8284 20 16.8856 20 15 20H9C7.11438 20 6.17157 20 5.58579 19.4142C5.21898 19.0474 5.08186 18.5406 5.0306 17.75Z"
                                fill="#fff"></path>
                            <path
                                d="M5.88889 3H18.1111C20.2589 3 22 4.79998 22 7.02036C22 8.30971 21.4129 9.45731 20.5 10.193L20.5 9.91053C20.5001 9.0449 20.5002 8.25122 20.4134 7.6056C20.3178 6.89464 20.0929 6.14319 19.4748 5.52514C18.8568 4.90709 18.1054 4.6822 17.3944 4.58661C16.7488 4.49981 15.9551 4.4999 15.0895 4.50001H8.91048C8.04485 4.4999 7.25118 4.49981 6.60556 4.58661C5.8946 4.6822 5.14315 4.90709 4.5251 5.52514C3.90706 6.14319 3.68216 6.89464 3.58657 7.6056C3.49977 8.25122 3.49987 9.04488 3.49997 9.91052L3.49998 10.193C2.58709 9.45727 2 8.30969 2 7.02036C2 4.79998 3.74112 3 5.88889 3Z"
                                fill="#fff"></path>
                        </g>
                    </svg>
                </div>
            </a>
            <a class="nav-link" href="/nap_tien_view">
                <div class="nav-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                        viewBox="0 0 640 512" class="nav-icon" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M608 32H32C14.33 32 0 46.33 0 64v384c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zM176 327.88V344c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-16.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V152c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v16.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07zM416 312c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16zm160 0c0 4.42-3.58 8-8 8h-80c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h272c4.42 0 8 3.58 8 8v16z">
                        </path>
                    </svg>
                    <div class="nav-title">Nạp tiền</div>
                </div>
            </a>
            <a class="nav-link" href="/profile">
                <div class="nav-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                        viewBox="0 0 512 512" class="nav-icon" height="1em" width="1em"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M256 256a112 112 0 1 0-112-112 112 112 0 0 0 112 112zm0 32c-69.42 0-208 42.88-208 128v64h416v-64c0-85.12-138.58-128-208-128z">
                        </path>
                    </svg>
                    <div class="nav-title">Cá nhân</div>
                </div>
            </a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vant/2.13.2/vant.min.js"></script>
<script>
    // Function to set active link
    function setActiveLink() {
        const links = document.querySelectorAll('.nav-link');
        const currentPath = window.location.pathname;

        links.forEach(link => {
            const href = link.getAttribute('href');
            if (currentPath === href) {
                link.classList.add('active');
            }
        });
    }

    // Run the function on page load
    document.addEventListener('DOMContentLoaded', setActiveLink);
</script>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@yield('javascript')

</html>
