<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Westlife</title>

    <link rel="icon" href="{{ asset('/images/icon.png') }}" type="image/gif">

    <!-- Fonts -->
    <link href="{{ asset('/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/su_si.css') }}">

    <!-- boostrap css -->
    <link rel="stylesheet" href="{{ asset('/bootstrap4/css/bootstrap.min.css') }}">

    <!-- album and mp3 player css-->
    <link rel="stylesheet" href="{{ asset('/css/albumShow.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/reset.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/plyr.css') }}" type="text/css">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>

    </style>
</head>
<body>

    @include('layouts.header')

    <main class="main-content">
        @yield('content')
    </main>

    @include('layouts.footer')

    <!-- site js original-->
    <script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('/js/plugins.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>

    <!-- boostrap js -->
    <script src="{{ asset('/bootstrap4/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('/bootstrap4/js/popper.min.js') }}"></script>
    <script src="{{ asset('/bootstrap4/js/bootstrap.min.js') }}"></script>

    <script type="text/javascript">$.noConflict();</script>

    <!-- additional js for mp3 player-->
    {{--<script src="{{ asset('/js/html5media.min.js') }}"></script>--}}
    {{--<script src="{{ asset('/js/plyr.js') }}"></script>--}}
    {{--<script src="{{ asset('/js/prefixfree.min.js') }}"></script>--}}
    {{--<script src="/js/mp3Player.js"></script>--}}
</body>
</html>
