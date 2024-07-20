@extends('layouts.app')

@section('title', 'Kết quả tìm kiếm')

@section('content')
    <h2>Kết quả tìm kiếm cho "{{ $query }}"</h2>
    @foreach($results as $article)
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