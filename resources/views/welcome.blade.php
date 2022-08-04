@extends('layouts.app')

@section('title', 'Laravel')

@section('header', 'Laravel')

@section('content')
    <ul>
        <li>
            <a href="/about">About</a>
        </li>
        <li>
            <a href="{{ route('articles.index') }}">Articles</a>
        </li>
        <li>
            <a href="{{ route('articles.create') }}">Создать статью</a>
        </li>
    </ul>
@endsection
