@extends('main/site')

@section('header')
    
@endsection

@section('content')
        <div class="content-section">
            <div class="container">
                <div class="heading-section col-md-12 text-center">
                    <h2>Сервис: {{ $title }}</h2>
                </div>
                {!! $text !!}
                <p align="center"><img src="{{ route('home') }}/images/{!! $images !!}" alt="" class="imgservise" /></p>
                <div class="col-md-4 hidden-xs go-home">
                    <a href="{{ route('home') }}" id="go-top">На главную</a>
                </div>
            </div>
        </div>
@endsection