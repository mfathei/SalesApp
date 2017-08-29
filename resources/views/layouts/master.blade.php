
<!doctype html>
<html lang="{{ Config::get('languages')[App::getLocale()] }}">

@include('layouts.header')

<body>


@include('layouts.nav')

<div class="container">

    @yield('content')

</div>

@include('layouts.footer')

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    @yield('script')

</body>
</html>
