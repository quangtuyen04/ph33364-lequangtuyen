@extends('layouts.app')

@section('title', $news->title)

@section('content')
    <h2>{{ $news->title }}</h2>
    <p>{{ $news->content }}</p>
@endsection

@section('aside')
    <h3>Tin liên quan</h3>
    <p>Nội dung cho phần aside...</p>
@endsection