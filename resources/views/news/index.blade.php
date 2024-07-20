@extends('layouts.app')

@section('title', 'News')

@section('content')
    <h2>News Categories</h2>
    <ul>
        @foreach($categories as $category)
            <li><a href="{{ url('/news/' . $category->id) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
@endsection

@section('aside')
    <h3>Latest News</h3>
    <p>This is the latest news aside content.</p>
@endsection