@extends('layouts.app')

@section('title', $news->title)

@section('content')
    <h2>{{ $news->title }}</h2>
    <p>{{ $news->content }}</p>
@endsection

@section('aside')
    <h3>Related News</h3>
    <p>This is the related news aside content.</p>
@endsection

