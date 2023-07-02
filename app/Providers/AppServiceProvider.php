<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\JobService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind(JobService::class, function ($app) {
            return new JobService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
