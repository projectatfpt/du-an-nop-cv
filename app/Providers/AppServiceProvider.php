<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $cart = Cart::where('user_id', auth()->id())->get();
            $allcate= Category::all();
            $allbrand= Brand::all();
            $view->with(compact('cart', 'allcate', 'allbrand'));
        });
        Paginator::useBootstrap();
    }
}
