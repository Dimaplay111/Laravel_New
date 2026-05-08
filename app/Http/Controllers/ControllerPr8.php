<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Illuminate\Support\days;
use Illuminate\Support\Facades\DB;

class PostsControllerPr8 extends Controller
{
    public function show()
    {
        $posts = DB::table('postspr8')->get();
        foreach ($posts as $post) {
            dump($post);
        }
        
    }
}
