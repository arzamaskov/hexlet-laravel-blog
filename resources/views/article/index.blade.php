@extends('layouts.app')

@if (Session::has('success'))
    {{ Session::get('success') }}
@endif

@section('content')
<h1>Articles</h1>
@foreach ($articles as $article)
    <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a></h2>
    <div>{{ Str::limit($article->body, 200) }}</div>
@endforeach
@endsection
