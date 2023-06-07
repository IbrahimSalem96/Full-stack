<?php

namespace App\Providers;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        $settings = Setting::checkSettings();
        $categories = Category::with('children')->where('parent' , 0)->orWhere('parent' , null)->get();
        $lastFivePosts = Post::with('category','user')->orderBy('id')->limit(5)->get();
        $post = Post::get();
        View()->share([
            'setting'=>$settings,
            'categories'=>$categories,
            'lastFivePosts'=>$lastFivePosts,
            'postshare'=>$post,
        ]);
    }
}
