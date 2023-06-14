<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD Example</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

    <style type="text/css">
        @font-face {
            font-family: IRANSans;
            src: url('{{ public_path('fonts/IRANSans-Regular.ttf') }}');
        }
        body { font-family: 'IRANSans' }
    </style>
</head>
<body>
<div class="container">
{{--    {{dd(public_path('fonts/IRANSans-Regular.ttf'))}}--}}
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
