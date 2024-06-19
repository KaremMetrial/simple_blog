<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use http\Env\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);
        if (is_null($post)) {
            return redirect()->route('home');
        }

        return view('posts.show', compact('post'));

    }

    public function create()
    {
        $users = User::all();
        return view('posts.create',compact('users'));
    }

    public function store()
    {
        $title =  request()->input('title');
        $description = request()->input('description');
        $createdBy =  request()->input('post_creator');
        $post = new Post();
        $post->title = $title;
        $post->description = $description;
        $post->save();
        return redirect(route('home'));
    }

    public function edit($id)
    {
        $post = Post::find($id);
        $users = User::all();
        return view('posts.edit',compact('users', 'post'));
    }

    public function update($id)
    {
        $post = Post::find($id);
        $data = request()->all();
        $title = $data['title'];
        $description = $data['description'];
        $postCreator = $data['post_creator'];
        $post->update([
            'title' => $title,
            'description' => $description,
            'post_creator' => $postCreator
        ]);
        return redirect(route('post.show', $post->id));

    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect(route('home'));
    }
}
