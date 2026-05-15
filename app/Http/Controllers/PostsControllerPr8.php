<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Illuminate\Support\days;
use Illuminate\Support\Facades\DB;

class PostsControllerPr8 extends Controller
{
    public function alltable()
    {
        $posts = DB::table('postspr8')->get();
            dump($posts);

    }
    public function cikltable()
    {
        $posts = DB::table('postspr8')->get();
        foreach ($posts as $post) {
            dump($post);
        }
    }
    public function htmltable()
    {
        $posts = DB::table('postspr8')->get();
        return view('post.show',['posts'=>$posts]);
    }
    public function quest41()
    {
        DB::enableQueryLog();
        $query = DB::table('postspr8')->where('id','!=',3)->get();
        dump(DB::getQueryLog());
        dump($query);
    }
    public function quest42()
    {
        $query = DB::table('postspr8')->where('id','!=',3)->toSql();
        dump($query);
    }
    public function quest43()
    {
        $query = DB::table('postspr8')->where('id','!=',3)->dump();
        dump($query);
    }
    public function wheretime()
    {
        DB::enableQueryLog();
        $query = DB::table('postspr8')->get();
        dump(DB::getQueryLog());
        dump($query);
    }
    public function nameemail()
    {
        $query = DB::table('userspr8')->select('name','email')->get();
        dump($query);
    }
    public function name_email()
    {
        $query = DB::table('userspr8')->select('name','email as user_email')->get();
        dump($query);
    }
    public function agerav30()
    {
        $query = DB::table('userspr8')->where('age','=',30)->get();
        dump($query);
    }
    public function agenerav30()
    {
        $query = DB::table('userspr8')->where('age','!=',30)->get();
        dump($query);
    }
    public function agebol30()
    {
        $query = DB::table('userspr8')->where('age','>',30)->get();
        dump($query);
    }
    public function agemen30()
    {
        $query = DB::table('userspr8')->where('age','<',30)->get();
        dump($query);
    }
    public function agemenorrav30()
    {
        $query = DB::table('userspr8')->where('age','<',30)->orWhere('age','=',30)->get();
        dump($query);
    }
    public function ageot20do30()
    {
        $query = DB::table('userspr8')->whereBetween('age',[20,30])->get();
        dump($query);
    }
}
