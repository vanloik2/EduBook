<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <script src="{{ asset('/web/js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('/web/js/bootstrap.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/web/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('web/css/home.css') }}">
</head>
<body>
    @yield('content')
</body>
</html>