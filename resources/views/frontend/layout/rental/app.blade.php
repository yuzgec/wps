<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {!! SEO::generate() !!}
    @include('frontend.layout.css')
    @yield('customCSS')
</head>
<body>
<div class="body">
    @include('frontend.layout.rental.header')
    <div role="main" class="main">

        @yield('content')

    </div>
    @include('frontend.layout.footer')
</div>

@include('frontend.layout.js')
@yield('customJS')

</body>
</html>
