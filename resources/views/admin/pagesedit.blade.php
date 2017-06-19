@extends('admin/site')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <h1>{{ $title }}</h1>
    
    {!! Form::open(['url'=>route('pagesEdit', array('page'=>$data['id'])), 'class'=>'form', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
    
        {!! Form::hidden('id', $data['id']) !!}
    
        {!! Form::label('name', 'Название сервиса:') !!}
        <div>
            {!! Form::text('name', $data['name'], ['class'=>'editform', 'placeholder'=>'Укажите название нового сервиса']) !!}
        </div>
        
        {!! Form::label('id', 'Псевдоним:') !!}
        <div>
            {!! Form::text('id', $data['id'], ['class'=>'editform', 'placeholder'=>'Укажите номер нового сервиса']) !!}
        </div>
        
        {!! Form::label('icon', 'Иконка:') !!}
        <div>
            {!! Form::text('icon', $data['icon'], ['class'=>'editform', 'placeholder'=>'Укажите номер нового сервиса']) !!}
        </div>
        
        {!! Form::label('description', 'Короткое описание:') !!}
        <div>
            {!! Form::textarea('description', $data['description'], ['id'=>'editor', 'class'=>'editform editor', 'placeholder'=>'Короткое описание сервиса']) !!}
        </div>
        
        {!! Form::label('text', 'Полное описание:') !!}
        <div>
            {!! Form::textarea('text', $data['text'], ['id'=>'editor', 'class'=>'editform editor', 'placeholder'=>'Подробное описание сервиса']) !!}
        </div>
        
        {!! Form::label('old_images', 'Картинка:') !!}
        <div>
            {!! Html::image('images/'.$data['images'], 'Картинка к сервису', array('class' => 'img')) !!}
            {!! Form::hidden('old_images', $data['images']) !!}
        </div>
        
        {!! Form::label('images', 'Новая картинка:') !!}
        <div>
            {!! Form::file('images', ['class' => 'filestyle', 'data-buttonText'=>'Выберите изображение', 'data-buttonName'=>'btn-primary', 'data-placeholder'=>'Файл не найден']) !!}
        </div>
        
        {!! Form::button('Сохранить', ['class' => 'editbutton','type' => 'submit']) !!}
        
    {!! Form::close() !!}
    
@endsection