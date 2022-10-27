@extends('layouts.layout')

@section('title')
    All Posts
@endsection

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @foreach($posts as $post)
        <div class="ml-12">
            <a href="{{ url('/posts/' . $post->id) }}"><img src="../{{$post->image}}" alt="{{$post->title}}" width="100px"></a>
            <a href="{{ url('/posts/' . $post->id) }}"><h2>{{$post->title}}</h2></a>
        </div>
    @endforeach
</div>
@endsection
