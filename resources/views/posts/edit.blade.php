@extends('layout.app')
@section('title')
    posts
@endsection
@section('content')
    <form method="post" action="{{route('post.update',1)}}">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="Title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="Title">
        </div>
        <div class="mb-3">
            <label for="descritpion" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="descritpion" style="height: 100px"></textarea>
        </div>
        <div class="mb-3">
            <label class="from-label">Post Edit</label>
            <select name="post_creator" class="form-control">
                <option value="1">Ahmed</option>
                <option value="2">Adel</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
