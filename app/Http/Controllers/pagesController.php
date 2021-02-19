<?php
namespace App\Http\Controllers;

use App\Post;
use Exception;
use Illuminate\Support\Facades\DB;

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
        try {
            $post = Post::where('slug', '=', $slug)->take(1)->get();
            return view('posts.single')->with('post', $post[0]);
        } catch (\Exception $th) {
            return view('errors.404');
        }
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
     * @param  string  $params
     * @return \Illuminate\Http\Response
     */
    public function articles($params)
    {
        try {
            $posts = DB::table('posts')->where('category', '=', $params)->paginate(1);
            return view('pages.articles')->with('posts', $posts, )->with('name', $params);
        } catch (\Exception $th) {
            return view('errors.500');
        }
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
