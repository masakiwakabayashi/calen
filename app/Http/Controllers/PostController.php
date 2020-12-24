<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::get();
        $posts_counted = count($posts);
        return view('post/index', ['posts' => $posts, 'posts_counted' => $posts_counted, 'keyword' => null]);
    }

    public function search(Request $request) {
        $keyword = $request->input('keyword');
        if($keyword == null) {
            $posts = Post::get();
        } else {
            $posts = Post::SearchingPost($keyword)->get();
        }
        $posts_counted = count($posts);
        return view('post/index', ['posts' => $posts, 'posts_counted' => $posts_counted, 'keyword' => $keyword]);
    }

    public function show($id) {
        $post = Post::find($id);
        return view('post/show', ['post' => $post ]);
    }

    public function create($id) {
        $post = Post::find($id);
        return view('post/create', ['post' => $post ]);
    }
}
