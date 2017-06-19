@extends('admin/site')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <h1>{{ $title }}</h1>
    <p>{{ $text }}</p>
    
    <p><a href="{{ route('logout') }}"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Выйти
    </a></p>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

@endsection

