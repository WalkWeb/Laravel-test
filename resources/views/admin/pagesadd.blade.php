@extends('admin/site')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <h1>{{ $title }}</h1>
    
    {!! Form::open(['id'=>'myform', 'url'=>route('pagesAdd'), 'class'=>'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
    
        {!! Form::label('name', 'Название сервиса:') !!}
        <div>
            {!! Form::text('name', old('name'), ['class'=>'editform', 'placeholder'=>'Укажите название нового сервиса']) !!}
        </div>
        
        {!! Form::label('id', 'Псевдоним:') !!}
        <div>
            {!! Form::text('id', old('id'), ['class'=>'editform', 'placeholder'=>'Укажите номер нового сервиса']) !!}
        </div>
        
        {!! Form::label('icon', 'Иконка:') !!}
        <div>
            {!! Form::text('icon', old('icon'), ['class'=>'editform', 'placeholder'=>'Укажите код иконки']) !!}
        </div>
        
        {!! Form::label('description', 'Короткое описание:') !!}
        <div>
            {!! Form::textarea('description', old('description'), ['id'=>'editor', 'class'=>'editform editor', 'placeholder'=>'Короткое описание сервиса']) !!}
        </div>
        
        {!! Form::label('text', 'Полное описание:') !!}
        <div>
            {!! Form::textarea('text', old('text'), ['id'=>'editor', 'class'=>'editform editor', 'placeholder'=>'Подробное описание сервиса']) !!}
        </div>
        
        {!! Form::label('images', 'Картинка:') !!}
        <div>
            {!! Form::file('images', ['class'=>'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не найден']) !!}
        </div>
        
        {!! Form::button('Добавить', ['class'=>'editbutton','type'=>'submit']) !!}
        
    {!! Form::close() !!}
@endsection