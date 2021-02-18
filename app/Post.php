<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
     /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'publish' => 'boolean',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    
    protected $fillable = [
        'title',
        'sub-title',
        'slug',
        'body',
        'category',
        'references',
        'publish',
        'date'  
    ];
     */
}
