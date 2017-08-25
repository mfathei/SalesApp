<?php

namespace App\Http\Middleware;

use \Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Config;

use Closure;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('appLocale')
            AND array_key_exists(Session::get('appLocale'), Config::get('languages'))
        ) {
            App::setLocale(Session::get('appLocale'));
        }

        return $next($request);
    }
}
