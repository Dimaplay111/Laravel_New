<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Illuminate\Support\days;
use Illuminate\Support\Facades\DB;

class PostsControllerPr8 extends Controller
{
    public function show()
    {
        $posts = DB::table('posts')->get();
        foreach ($posts as $post) {
            dump($post->title);
            dump($post->text);
        }
        return view('post.show',['posts'=>$posts]);
    }
}
