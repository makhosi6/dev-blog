<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('addheaders');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.index')->with('posts', $posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required',
            'sub-title' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'category' => 'required',
            'publish' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);
        //
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

            // // make thumbnails
            // $thumbStore = 'thumb.' . $filename . '_' . time() . '.' . $extension;
            // $thumb = Image::make($request->file('cover_image')->getRealPath());

            // $thumb->save('storage/cover_images/' . $thumbStore);
        } else {
            $fileNameToStore = 'noimage.png';
        }

        $post = new Post;
        $post->title = $request->input('title'); //put as a defualt slug
        $post->post_id = uniqid('art_', true);
        $post->user_id = auth()->user()->id;
        $post->{'sub-title'} = $request->input('sub-title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->references = $request->input('references');
        $post->publish = $request->input('publish');
        $post->cover_image = $fileNameToStore;
        $post->date = Carbon::now()->toFormattedDateString();
        $post->save();

        return redirect('/admins')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        try {
            $post = Post::where('slug', '=', $slug)->take(1)->get()[0];
            return view('admin.article')->with('post', $post);
        } catch (\Exception $th) {
            return view('errors.404');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        try {
            $post = Post::where('post_id', $id)->get()[0];
            return view('admin.edit')->with('post', $post);
        } catch (\Exception $th) {
            return view('errors.404');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
        ]);
        $post = Post::where('post_id', $id)->get()[0];
        // Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/cover_images/' . $post->cover_image);

            //Make thumbnails
            $thumbStore = 'thumb.' . $filename . '_' . time() . '.' . $extension;
            $thumb = Image::make($request->file('cover_image')->getRealPath());
            $thumb->resize(80, 80);
            $thumb->save('storage/cover_images/' . $thumbStore);

        }
        // $post->id = $request->input('id');
        $post->title = $request->input('title');
        $post->{'sub-title'} = $request->input('sub-title');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->references = $request->input('references');
        $post->publish = $request->input('publish');
        if ($request->hasFile('cover_image')) {
            $post->cover_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/admins')->with('Success', 'Post Updated');
    }

    /**
     * Removes the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('post_id', $id)->get()[0];
        $post->delete();
        return redirect('/admins')->with('Success', 'Post Deleted');
    }
}
