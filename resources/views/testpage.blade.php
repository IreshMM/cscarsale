<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <title>Home | C&S Car Sale</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="{{ asset('js/app.js') }}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    @include('auth.register_modal')
    {{-- Content placeholder --}}
    {{-- <div id="placeholder" style="background-color: green; height: 2000px;"></div> --}}
</body>

</html>
