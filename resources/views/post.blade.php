@extends('layouts.layout')

@section('title')
    {{$post->title}}
@endsection

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="ml-12">
        <img src="../{{$post->image}}" alt="{{$post->title}}">
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
        <a href="{{ url('/posts/' . $post->id . '/edit') }}" class="btn btn-xs btn-warning pull-right">Edit</a>
    </div>

</div>
@endsection
