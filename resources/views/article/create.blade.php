@extends('layouts.app')

@section('content')
    {{ Form::model($article, ['route' => 'articles.store']) }}
        {{ Form::label('name', 'Название') }}<br>
        {{ Form::text('name') }}<br>

        @error('name')
            <p>{{ $message }}</p>
        @enderror

        {{ Form::label('body', 'Содержание') }}<br>
        {{ Form::textarea('body') }}<br>

        @error('body')
            <p>{{ $message }}</p>
        @enderror

        {{ Form::submit('Создать') }}
    {{ Form::close() }}
@endsection
