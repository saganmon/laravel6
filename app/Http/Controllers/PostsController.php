<?php

namespace App\Http\Controllers;

use DB; //これでルートがわかるようになるので、\DBとしなくてよくなる
use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
