<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/layout/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="main">
        <div class="wrapper">
            <div class="content" style="padding-bottom: 120px">
                @yield('content')
            </div>
            <nav class="nav_wrapper mt-5"><a class="nav-link" href="/">
                    <div class="nav-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" class="nav-icon nav-active" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M416 174.74V48h-80v58.45L256 32 0 272h64v208h144V320h96v160h144V272h64l-96-97.26z">
                            </path>
                        </svg>
                        <div class="nav-tittle">Trang chủ</div>
                    </div>
                </a><a class="nav-link" href="/">
                    <div class="nav-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 24 24" class="nav-icon" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0V0z"></path>
                            <path
                                d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V9h14v10zM5 7V5h14v2H5zm2 4h10v2H7zm0 4h7v2H7z">
                            </path>
                        </svg>
                        <div class="nav-title">Đơn đặt hàng</div>
                    </div>
                </a><a class="nav-link" href="/">
                    <div class="nav-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 24 24" class="nav-icon nav-icon-center" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M7 2v11h3v9l7-12h-4l4-8z"></path>
                        </svg>
                        <div class="nav-item-center-bg"></div>
                        <div class="nav-title"></div>
                    </div>
                </a><a class="nav-link" href="/">
                    <div class="nav-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 640 512" class="nav-icon" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M608 32H32C14.33 32 0 46.33 0 64v384c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zM176 327.88V344c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-16.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V152c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v16.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07zM416 312c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16zm160 0c0 4.42-3.58 8-8 8h-80c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h272c4.42 0 8 3.58 8 8v16z">
                            </path>
                        </svg>
                        <div class="nav-title">Nạp tiền</div>
                    </div>
                </a><a class="nav-link" href="/profile">
                    <div class="nav-item"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 512 512" class="nav-icon" height="1em" width="1em"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M256 256a112 112 0 1 0-112-112 112 112 0 0 0 112 112zm0 32c-69.42 0-208 42.88-208 128v64h416v-64c0-85.12-138.58-128-208-128z">
                            </path>
                        </svg>
                        <div class="nav-title">Của tôi</div>
                    </div>
                </a></nav>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
