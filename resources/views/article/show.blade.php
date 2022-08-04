@extends('layouts.app')

@section('content')
    <h1>{{ $article->name }}</h1>
    <div>{{ $article->body }}</div>
    <p><a href="{{ route('articles.edit', $article->id) }}">Редактировать</a></p>
@endsection
