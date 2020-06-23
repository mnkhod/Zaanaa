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
      $featured = Product::where('blyat','featured')->take(3)->get(); 
      $onSale = Product::where('blyat','sales')->take(3)->get(); 
      $topRated = Product::where('blyat','top')->take(3)->get();
      $fbItems = Product::where('blyat','fb')->get(); 
      $latestProducts = Product::all()->take(8);
      $relatedProducts = Product::all()->take(10);
      $cheapestProducts = Product::all()->take(4);
      $fea = Product::where('blyat','fea')->take(6)->get(); 
      $fee = Product::where('blyat','fee')->take(6)->get(); 
      $faa = Product::where('blyat','faa')->take(6)->get(); 
      $maintenance = Product::where('blyat', 'maintenance')->get();
      $hoop = Product::where('blyat', 'hoop')->get();

      View::share('featured', $featured );
      View::share('sale', $onSale );
      View::share('top', $topRated  );
      View::share('latest', $latestProducts);
      View::share('related', $relatedProducts);
      View::share('cheapest', $cheapestProducts);
      View::share('fb', $fbItems);
      View::share('fea', $fea );
      View::share('fee', $fee );
      View::share('faa', $faa );
      View::share('maintenance', $maintenance);
      View::share('hoop', $hoop);
    }
}
