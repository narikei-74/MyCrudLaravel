<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class IndexController extends Controller
{
    public function view() {
        $posts = Post::orderBy('updated_at', 'desc')->get();

        return view('index')->with(['posts' => $posts]);
    }

    public function create(PostRequest $request) {

        $post = new Post();
        $post->title = $request->title;
        $post->text = $request->text;
        $post->save();

        return redirect()->route('index_view');
    }

    public function delete(Post $post) {
        $post->delete();

        return redirect()->route('index_view');
    }
}
