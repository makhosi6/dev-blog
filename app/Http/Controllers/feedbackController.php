<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class feedbackController extends Controller
{
      /**
     * Increment number of likes.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function upVote($id)
    {
        Post::where('post_id', $id)->increment('likes');
     }
    public function dig(){
        echo "DIG!!";
    }
     /**
     * Increment number of dislikes.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function downVote($id)
     {
        Post::where('post_id', $id)->increment('dislikes');
     }
}
