@extends('layouts.app')

@section('content')

    <h4>Newsübersicht</h4>

    <hr>

    @foreach($news as $n)
        <h1>
            <a href="{{ route('news', $n->id) }}">{{ $n->titel }}</a>
        </h1>
        <p>
            <em>{{ $n->created_at->diffForHumans() }}</em>
        </p>
        <p>
            {{ Str::limit($n->text, 100) }}
        </p>
        <a href="{{ route('news', $n->id) }}" class="button">Zur News</a>
        <hr>
    @endforeach

@endsection
