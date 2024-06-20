@extends('layout.app')
@section('title')
    show
@endsection
@section('content')
{{--button--}}
    <div class="card mt-4">
        <h5 class="card-header">Post Info</h5>
        <div class="card-body">
            <h5 class="card-title">Title : {{$post['title']}} </h5>
            <p class="card-text">Description : {{$post['description']}}</p>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">
                Name : {{$post->user->name}}
            </h5>
            <p class="card-text">Email : {{$post->user->email}} </p>
            <p class="card-text">Created at : {{$post['created_at']}}</p>
        </div>
    </div>
{{--end button--}}
@endsection
