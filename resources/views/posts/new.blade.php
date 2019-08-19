
@extends('layout')

@section('content')
    @include('posts.errors')
    <form method="post" action="/posts">

        @csrf

        <div class="field">
            <label class="label">Title</label>
            <div class="control">
                <input class="input" type="text" name="title" placeholder="Enter your new post title" autocomplete="off">
            </div>
        </div>

        <div class="field">
            <label class="label">Content</label>
            <div class="control">
                <textarea class="textarea" name="body" placeholder="Enter your new post content"></textarea>
            </div>
        </div>

        <div class="field">
            <button class="button" type="submit">Submit</button>
        </div>

    </form>
@endsection
