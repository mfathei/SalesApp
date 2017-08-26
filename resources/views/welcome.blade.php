@extends('layouts.master')


@section('content')

    <br><br><br>
    <br><br><br>
    <form action="{{  route('language-switcher', 'ar')  }}" method="get">
        {{ csrf_field() }}
        <select name="locale" id="locale">
            <option value="en">English</option>
            <option value="ar"{{ Lang::locale() === 'ar'? ' selected': '' }}>Arabic</option>
        </select>
        <input type="submit" value="Choose">

    </form>


    <h3>{{ trans('home.Hello') }} SalesApp</h3>
    <a class="text-center" href="{{ route('language-switcher', 'en') }}">English</a>
<h2>{{ App::getLocale() }}</h2>

@endsection
