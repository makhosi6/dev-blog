<?php

namespace App\Providers;

use App\Post;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $unique = array();

        $categories = Post::orderBy('created_at', 'desc')->take(10)->get();
        $articles = Post::orderBy('created_at', 'desc')->take(3)->get();

        foreach ($categories as $c) {
            $unique[$c->category] = $c;
        }
       
        View::share("categories", $unique);
        View::share('articles', $articles);
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
