<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        //
        $categories = Post::orderBy('created_at', 'desc')->take(10)->get(); 
       $articles = Post::orderBy('created_at', 'desc')->take(3)->get(); 

        View::share("categories" , $categories);
        View::share('articles' , $articles);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
