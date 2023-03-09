<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use App\Http\Requests\Api\Reviews\ReviewStoreRequest;
use App\Http\Requests\Api\Reviews\ReviewUpdateRequest;
use App\Http\Requests\Api\Reviews\ReviewRequestContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Resolve Reviews Request Class
        $this->app->singleton(ReviewRequestContract::class, function (Application $app) {
            // Validation needed only on store and update methods...
            return (request()->isMethod('post')) ? new ReviewStoreRequest() : new ReviewUpdateRequest();
        });
        // Resolve Reviews Model Class

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
