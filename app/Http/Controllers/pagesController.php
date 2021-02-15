<?php
namespace App\Http\Controllers;

use App\Post;

class pagesController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function article($slug)
    {
        //
        // $post =  Post::find($slug); 
        $post = Post::where('slug', '=', $slug)->take(1)->get();
        return view('posts.single')->with('post', $post[0]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(20);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Display a list from a specified resource.
     *
     * @param  int  $params
     * @return \Illuminate\Http\Response
     */
    public function articles($params)
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(2);
        // $posts = DB::select('SELECT * FROM posts WHERE category=$params')->paginate(15);
        return view('pages.articles')->with('posts', $posts, )->with('name', $params);
    }
    /**
     * Show/return a view.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pages.about');
    }
    /**
     * Show/return a view.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('pages.contact');
    }
}
