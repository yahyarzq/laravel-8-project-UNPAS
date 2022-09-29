@extends('layouts/main')
@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>{{ $post->author }}</h5>
        <h5><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
        {!!  $post->body !!}
    </article>

@endsection