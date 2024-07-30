<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lazada Affilate</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/layout/auth/style.css') }}" rel="stylesheet">
    <style>
        .input_log {
            border: 0;
            background-color: transparent;
            border-radius: 0;
            border-bottom: 1px solid #dddada;
            color: #ffffff;
        }

        .input_log:focus {
            border: 0;
            background-color: transparent;
            border-radius: 0;
            border-bottom: 1px solid #dddada;
            color: #ffffff;
        }

        .field_input::placeholder {
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="main">
        @yield('content')
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
