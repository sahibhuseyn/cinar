<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('facebook')

    @php

        $seos = App\Seo::getSeo();
        $settings = App\UserSetting::getSettings();

    @endphp

    @foreach($seos as $seo)
        <meta name="description" content="{{ $seo->description }}">
        <meta name="keywords" content="{{ $seo->keywords }}">
    @endforeach

    <meta name="author" content="Nijat Zamanov, Sahib Huseynov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Çinar Yayımları - Təməlində sevgi var</title>
    <link href="{{ url('/client/images/logo1.png') }}" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link href="{{ url('/client/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/client/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('/client/flaticon/flaticon.css') }}" rel="stylesheet">
    <link href="{{ url('/client/css/style.css') }}" rel="stylesheet">
    <link href="{{ url('/client/css/responsive.css') }}" rel="stylesheet">

    @yield('head_js')


</head>
<body id="scroll-top">

@yield('fb_js')

@include('client.partials.header')


@yield('content')



@include('client.partials.footer')

<script src="{{ url('/client/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ url('/client/js/bootstrap.min.js') }}"></script>
@yield('js')
<script src="{{ url('/client/js/custom.js') }}"></script>
</body>
</html>