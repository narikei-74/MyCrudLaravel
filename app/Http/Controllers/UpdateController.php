<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function view(Post $post) {
        return view('update')->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post) {
        $post->title = $request->title;
        $post->text = $request->text;
        $post->save();

        return redirect()->route('index_view');
    }
}
