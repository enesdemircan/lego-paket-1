<!DOCTYPE html>
<html lang="{{$lang}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    @if ($designs->seo->durum == 'Aktif')
        @php $title = $designs->seo->title.' | '.$designs->seo->kelime1.' | '.$designs->seo->kelime2.' | '.$designs->seo->kelime3; @endphp
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
        <meta name="googlebot" content="index, follow">
        <meta name="robots" content="all, index, follow">
        <meta name="author" content="http://www.istanbulwebmaster.com">
        <meta NAME="abstract" CONTENT="{{$designs->seo->title}}">
        <link rel="canonical" href="/" />
        <meta name="description" content="{{$designs->seo->title}} {{$designs->seo->kelime1}} {{$designs->seo->kelime2}} {{$designs->seo->kelime3}}" />
        <meta name="keywords" content="{{$designs->seo->keywords}}" />
        <meta property="og:site_name" content="/" />
        <meta property="og:title" content="{{$designs->seo->title}}" />
        <meta property="og:description" content="{{$designs->seo->title}} {{$designs->seo->kelime1}} {{$designs->seo->kelime2}} {{$designs->seo->kelime3}}" />
        <meta property="og:url" content="/" />
        <meta property="og:type" content="website" />
    @else
        @php $title = $designs->seo->title; @endphp
        <meta name="description" content="{{$designs->site_ayarlari->title}}" />
        <meta name="keywords" content="{{$designs->site_ayarlari->keywords}}" />
    @endif
    <title>@yield('title')  {{$title}}</title>
    <link rel="icon" href="{{env('SERVER_ADDRESS','NULL')}}/{{$designs->site_ayarlari->favicon}}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{env('SERVER_ADDRESS','NULL')}}/{{$designs->site_ayarlari->favicon}}" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="/assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="/assets/css/flaticon.css" rel="stylesheet">
    <link href="/assets/css/owl.css" rel="stylesheet">
    <link href="/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/nice-select.css" rel="stylesheet">
    <link href="/assets/css/rtl.css" rel="stylesheet">
    <link href="/assets/css/color.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet">
</head>
<body>

<div class="boxed_wrapper">
    {!! $generalModule !!}
    @yield('content')
    {!! $footerModule !!}
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fal fa-angle-up"></span>
    </button>
</div>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/owl.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/validation.js"></script>
<script src="/assets/js/jquery.fancybox.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/scrollbar.js"></script>
<script src="/assets/js/jquery.nice-select.min.js"></script>
<script src="/assets/js/script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
<script src="/assets/js/gmaps.js"></script>
<script src="/assets/js/map-helper.js"></script>

</body>


</html>
