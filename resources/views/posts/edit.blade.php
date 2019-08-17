
@extends('layout')

@section('content')
    <form method="post" action="/posts/{{ $post->id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" autocomplete="off" value="{{ $post->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Content</label>
            <div class="control">
                <textarea class="textarea" name="body">{{ $post->body }}</textarea>
            </div>
        </div>

        <div class="field">
            <button class="button" type="submit">Update</button>
        </div>

        <form method="post" action="/posts/{{ $post->id }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <div class="field">
                <button class="button is-danger" type="submit">Delete</button>
            </div>
        </form>
    </form>
@endsection
