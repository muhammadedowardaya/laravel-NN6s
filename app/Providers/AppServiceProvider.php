<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useTailwind();
        $this->app['router']->aliasMiddleware('web', \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class);
    }
}
