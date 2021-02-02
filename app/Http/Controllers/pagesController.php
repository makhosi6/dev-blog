<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Support\Facades\DB;

class pagesController extends Controller {
    public function test($param){
        echo $param;
    }
    public function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(2);
        // $posts = DB::select('SELECT * FROM posts');
        return view('posts.index')->with('posts', $posts);
    }
    public function articles($params){
        $posts = Post::orderBy('created_at','desc')->paginate(2);
        // $posts = DB::select('SELECT * FROM posts');
       // $posts = DB::table('articles')->where('categoty', $params)->paginate(15);
       return view('pages.articles')->with('posts', $posts);
    }

    public function about(){
        return view('pages/about');
    }
    public function contact(){
     $data = array(
            'title' => 'Services',
            'services'=> ['SEO', 'Web Design', 'Software Development', 'Data Mining'],
        );
        return view('pages/services')->with($data);
    }
}
