<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function view(Post $post) {
        return view('show')->with(['post' => $post]);
    }
}
