
@extends('layout')

@section('content')
    <p>{{  $post->title  }}</p>

    <p>{{ $post->body  }}</p>
@endsection
