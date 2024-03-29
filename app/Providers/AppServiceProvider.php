<?php

namespace App\Providers;

use App\Models\BlogPost;
use App\Models\BlogCategory;
use App\Observers\BlogCategoryObserver;
use App\Observers\BlogPostObserver;
use Illuminate\Support\ServiceProvider;
use Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services
     * 
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        BlogPost::observe(BlogPostObserver::class);
        BlogCategory::observe(BlogCategoryObserver::class);
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
