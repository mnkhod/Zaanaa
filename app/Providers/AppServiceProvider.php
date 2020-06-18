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
      $fbItems = Product::where('blyat','fb')->get(); 
      $latestProducts = Product::all()->take(8);
      $relatedProducts = Product::all()->take(10);
      $cheapestProducts = Product::all()->take(4);

      View::share('featured', $featured );
      View::share('sale', $onSale );
      View::share('top', $topRated  );
      View::share('latest', $latestProducts);
      View::share('related', $relatedProducts);
      View::share('cheapest', $cheapestProducts);
      View::share('fb', $fbItems);
    }
}
