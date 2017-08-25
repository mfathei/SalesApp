<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\App;
use \Illuminate\Support\Facades\Config;

class LanguageController extends Controller
{
    public function chooser($lang){
//        var_dump($lang);
        Session::put('appLocale' , $lang);
        return Redirect::back();
    }
}
