<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class LikesController extends Controller
{
     /**
     * Increment number of likes.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function like($id){
        Post::where('post_id', $id)->increment('likes');
     }
     /**
     * Increment number of dislikes.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function dislike($id){
        Post::where('post_id', $id)->increment('dislikes');
     }
}
