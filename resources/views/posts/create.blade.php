@extends('layout.app')
@section('title')
    posts
@endsection
@section('content')
    <form method="post" action="{{route('post.store')}}">
        @csrf
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="Title">
        </div>
        <div class="mb-3">
            <label for="descritpion" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="descritpion" style="height: 100px"></textarea>
        </div>
        <div class="mb-3">
            <label class="from-label">Post Creator</label>
            <select name="post_creator" class="form-control">
                @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
