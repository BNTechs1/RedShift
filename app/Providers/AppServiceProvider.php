<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\Service;
use App\Models\Team;
use App\Models\Portfolio;
use App\Models\Blog;

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
        $products = Product::latest()->filter(request(['tag','search']))->paginate(10);
        $services = Service::latest()->paginate(3);
        $teams = Team::latest()->paginate(4);
        $portfolios = Portfolio::latest()->paginate(3);
        $newss = Blog::latest()->paginate(4);;

        View::composer('*', function($view) use($products,$services,$teams,$portfolios,$newss){
            $view->with('products', $products);
            $view->with('services', $services);
            $view->with('teams', $teams);
            $view->with('portfolios', $portfolios);
            $view->with('newss', $newss);


          });
    }
}
