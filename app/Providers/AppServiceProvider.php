<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Services\CategoryService;
use App\Services\Services\ProductService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind("CategoryServices",function()
        {
           return new CategoryService();
        });
        $this->app->bind("ProductServices",function()
        {
           return new ProductService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
