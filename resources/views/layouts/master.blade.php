
<!doctype html>
<html lang="{{ Config::get('languages')[App::getLocale()] }}">

@include('layouts.header')

<body>

<div class="container-fluid">

    @if (Session::has('success'))

        <div class="alert alert-success alert-dismissable show" role="alert">
            <strong>Success:</strong> {{ Session::get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    @if (Session::has('error'))

        <div class="alert alert-danger alert-dismissable show" role="alert">
           <strong>Error:</strong> {{ Session::get('error') }}
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    @endif

    @if (count($errors) > 0)
        
        <div class="alert alert-danger alert-dismissable show" role="alert">
            <strong>Errors:</strong>
            <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
    @endif


</div>


@include('layouts.nav')

<div class="container-fluid">

    @yield('content')

</div>

@include('layouts.footer')

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    @yield('script')

</body>
</html>
