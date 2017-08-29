<nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <img alt="Brand" class="img-responsive" src="/images/brand.png">
            </a>
            <a class="navbar-brand brand" href="/">
                SalesApp
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-{{ App::getLocale() === 'ar'? 'left': 'right' }}">
                @if (Auth::guest())
                    <li><a href="{{ route("login")  }}">{{ Lang::get('auth.login') }}</a></li>
                    <li><a href="{{ route("register")  }}">{{ Lang::get('auth.register') }}</a></li>
                @endif
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">{{ Lang::get('language.lang') }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if (App::getLocale() !== 'en')
                            <li><a href="{{ URL::route('language-switcher', 'en') }}">{{ Lang::get('language.en') }}</a>
                            </li>
                        @endif
                        @if (App::getLocale() !== 'ar')
                            <li><a href="{{ URL::route('language-switcher', 'ar') }}">{{ Lang::get('language.ar') }}</a>
                            </li>
                        @endif
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
                @if (Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();
                            ">
                                {{ Lang::get('auth.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>


                </li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>