<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    // protected $policies= [
    //     'App\Model'=>'App\Policies\ModelPolicy',
    // ];
    /**
     * 
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // $this->registerPolicies();
        // Passport::routes();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
