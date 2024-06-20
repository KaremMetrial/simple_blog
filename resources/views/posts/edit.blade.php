@extends('layout.app')
@section('title')
    posts
@endsection
@section('content')
    <form method="post" action="{{route('post.update',$post->id)}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" name="title" value="{{$post->title}}" class="form-control" id="Title" required>
        </div>
        <div class="mb-3">
            <label for="descritpion" class="form-label">Description</label>
            <textarea class="form-control" name="description"  id="descritpion" style="height: 100px" required>{{$post->description}}</textarea>
        </div>
        <div class="mb-3">
            <label class="from-label">Post Edit</label>
            <select name="post_creator" class="form-control">
                @foreach($users as $user)
                    <option @if($user->id == $post->user_id) selected @endif value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
