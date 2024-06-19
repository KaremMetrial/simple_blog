@extends('layout.app')
@section('title')
    posts
@endsection
@section('content')
{{--button--}}

    <div class="text-center">
        <a href="{{route('post.create')}}" class="btn btn-success">Create Post</a>
    </div>

    {{--end button--}}
    {{--start table--}}

    <table class="table mt-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Posted By</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        @foreach($allPosts as $post)
            <tr>
                <th scope="row">{{$post['id']}}</th>
                <td>{{$post['title']}}</td>
                <td>{{$post['posted_by']}}</td>
                <td>{{$post['created_at']}}</td>
                <td>
                    <a href="{{route('post.show',[$post['id']])}}" class="btn btn-info">View</a>
                    <a href="{{route('post.edit',[$post['id']])}}" class="btn btn-primary">Edit</a>
                    <form style="display: inline" action="{{route('post.destroy',[$post['id']])}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
