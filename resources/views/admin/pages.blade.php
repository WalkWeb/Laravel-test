@extends('admin/site')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    @if($pages)
        @foreach($pages as $k => $page)
            <table style="border-collapse: collapse;" border="1" cellpadding="0" cellspacing="0" class="maintable">
                <tbody>
                    <tr>
                        <td class="collumtitle"><h3>Название:</h3></td>
                        <td>{{ $page->name }}</td>
                    </tr>
                    <tr>
                        <td><h3>Псевдоним:</h3></td>
                        <td>{{ $page->id }}</td>
                    </tr>
                    <tr>
                        <td><h3>Описание:</h3></td>
                        <td>{{ $page->description }}</td>
                    </tr>
                    <tr>
                        <td><h3>Иконка:</h3></td>
                        <td>{{ $page->icon }}</td>
                    </tr>
                    <tr>
                        <td><h3>Подробное описание:</h3></td>
                        <td>{{ $page->text }}</td>
                    </tr>
                    <tr>
                        <td><h3>Картинка:</h3></td>
                        <td><img src="{{ route('home') }}/images/{{ $page->images }}" alt="" class="imgservise" /></td>
                    </tr>
                    <tr>
                    <td colspan="2" rowspan="1">
                        <a href="{{ route('pagesEdit', ['page' => $page->id]) }}" title="" class="editbutton ml20">Редактировать</a>
                        {!! Form::open(['url'=>route('pagesEdit',['page'=>$page->id]), 'method'=>'POST']) !!}
                        
                            {{ method_field('DELETE') }}
                            {!! Form::button('Удалить',['class'=>'editbutton', 'type'=>'submit']) !!}
                            
                        {!! Form::close() !!}
                    </td>
                    </tr>
                </tbody>
            </table>
        @endforeach
    @endif
@endsection