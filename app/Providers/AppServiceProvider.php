<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Product;

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
      $featured = Product::where('blyat','featured')->get(); 
      $onSale = Product::where('blyat','sales')->get(); 
      $topRated = Product::where('blyat','top')->get(); 
      $latestProducts = Product::all()->take(8);

      View::share('featured', $featured );
      View::share('sale', $onSale );
      View::share('top', $topRated  );
      View::share('latest', $latestProducts);
    }
}
