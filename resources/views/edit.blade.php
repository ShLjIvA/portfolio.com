@extends('layouts.layout')

@section('title')
    Edit - {{$post->title}}
@endsection

@section('content')
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="ml-12">
            <img src="{{ asset($post->image)}}" alt="{{$post->title}}">

            <form action="{{ url('/posts/' . $post->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="titleEdit">New Title</label>
                    <input type="text" class="form-control" id="titleEdit" name="titleEdit" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="bodyEdit">Edit post body</label>
                    <textarea class="form-control" id="bodyEdit" name="bodyEdit" rows="10">{{$post->body}}</textarea>
                </div>
{{--                <div class="form-group">--}}
{{--                    <label for="editImage">Edit image</label>--}}
{{--                    <input type="file" class="form-control-file" id="editImage">--}}
{{--                </div>--}}
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>

    </div>
@endsection
