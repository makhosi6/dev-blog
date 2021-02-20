<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table Name
    protected $table = 'posts';
    // Primary Key
    // public $primaryKey = 'post_id';
    // Timestamps
    public $timestamps = true;
       /**
     * The attributes that should be cast.
     *
     * @var array
     */
    // protected $casts = [
    //     'publish' => 'boolean',
    // ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
