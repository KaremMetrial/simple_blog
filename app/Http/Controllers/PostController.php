<?php

namespace App\Http\Controllers;

use http\Env\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $allPosts = [
            [
                'id' => 1,
                'title' => 'PHP',
                'posted_by' => 'ahmed',
                'created_at' => '2022-10-10'
            ],
            [
                'id' => 2,
                'title' => 'JS',
                'posted_by' => 'adel',
                'created_at' => '2022-12-10'
            ],
        ];
        return view('posts.index', compact('allPosts'));
    }

    public function show($id)
    {
        $allPosts = [
            [
                'id' => 1,
                'title' => 'PHP',
                'posted_by' => 'ahmed',
                'description' => "personal home page",
                'created_at' => '2022-10-10'
            ],
            [
                'id' => 2,
                'title' => 'JS',
                'posted_by' => 'adel',
                'description' => "javascript",
                'created_at' => '2022-12-10'
            ],
        ];
        $post = null;
        foreach ($allPosts as $singlepost) {
            if ($singlepost['id'] == $id) {
                $post = $singlepost;
                break;
            }
        }

        return view('posts.show', compact('post'));

    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
//        $request = request();
//        dd($request->all());
        $data = request()->all();
        $title = $data['title'];
        $description = $data['description'];
        $postCreator = $data['post_creator'];
        return redirect(route('home'));
    }

    public function edit($id)
    {
        return view('posts.edit');
    }

    public function update($id)
    {
        $data = request()->all();
        $title = $data['title'];
        $description = $data['description'];
        $postCreator = $data['post_creator'];
        return redirect(route('home'));

    }

    public function destroy($id)
    {
           return redirect(route('home'));
    }
}
