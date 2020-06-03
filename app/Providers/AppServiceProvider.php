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
      $featured = Product::where('id',1)->get(); 
      $onSale = Product::where('id',2)->get(); 
      $topRated = Product::where('id',3)->get(); 

      View::share('featured', $featured );
      View::share('sale', $onSale );
      View::share('top', $topRated  );
    }
}
