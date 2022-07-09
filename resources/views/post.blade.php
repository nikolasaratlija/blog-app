@extends('layout')

@section('content')
    <article>
        <h2> {{ $post->title }} </h2>
        <p> {!! $post->body !!} </p>
    </article>

    <a href="/">Go Back</a>
@endsection
