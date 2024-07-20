@extends('layouts.app')

@section('title', $category->name)

@section('content')
    <h2>Tin trong loại {{ $category->name }}</h2>
    @foreach($news as $article)
        <article>
            <h3><a href="{{ url('/news/' . $article->id) }}">{{ $article->title }}</a></h3>
            <p>{{ $article->summary }}</p>
        </article>
    @endforeach
@endsection

@section('aside')
    <h3>Tin liên quan</h3>
    <p>Nội dung cho phần aside...</p>
@endsection