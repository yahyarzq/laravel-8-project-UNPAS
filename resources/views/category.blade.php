@extends('layouts/main')

    
@section('container')
<h1>Post Category {{ $category }}</h1>
    @foreach($posts as $post)
    <article>
        <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
        {{-- <h5>{{ $post->author }}</h5> --}}
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach

@endsection

