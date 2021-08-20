<?php

namespace App\Providers;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\RateLimiter;


class RouteServiceProvider extends ServiceProvider
{
   
    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/client/profile';

                //  protected $namespace ='App\\Http\\Controller';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {

        $this->configureRateLimiting();

        $this->routes(function(){


            Route::prefix('api')->middleware('api')->namespace($this->namespace)->group(base_path('routes/web.php'));

            Route::middleware('web')->namespace($this->namespace)->group(base_path('routes/web.php'));
            Route::middleware('web')->namespace($this->namespace)->group(base_path('routes/backend.php'));
            
        });


    }
protected function ConfigureRateLimiting(){

    RateLimiter::for('api',function(Request $request){

               return Limit::perMinute(60);

    });
}
 
}
