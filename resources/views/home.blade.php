@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h2>Featured News</h2>
    <ul>
        @foreach($featuredNews as $news)
            <li><a href="{{ url('/news/' . $news->id) }}">{{ $news->title }}</a></li>
        @endforeach
    </ul>

    <h2>Latest News</h2>
    <ul>
        @foreach($latestNews as $news)
            <li><a href="{{ url('/news/' . $news->id) }}">{{ $news->title }}</a></li>
        @endforeach
    </ul>

    <h2>Most Viewed News</h2>
    <ul>
        @foreach($mostViewedNews as $news)
            <li><a href="{{ url('/news/' . $news->id) }}">{{ $news->title }}</a></li>
        @endforeach
    </ul>
@endsection

@section('aside')
    <h3>Additional Information</h3>
    <p>This is the aside content.</p>
@endsection