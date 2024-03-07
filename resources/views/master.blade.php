<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @include('seo')

    @include('head')

    @yield('head')

    @include('google')

</head>
<body>

    @include('header')

    @yield('content')

    @include('footer')

    <a href="tel:02946500999" class="item_circle call-btn-fixed is-hidden-tablet">
        <span class="material-icons">call</span>
    </a>
    @include('script')
</body>
</html>
