<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Post;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('front.components.sidebar.news', function ($view) {
            // Get the $news
            $news = Post::published()->where('category_id', '3')->orderBy('created_at', 'desc')->take(5)->get() ;
            $view->with('news', $news);
        });
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
