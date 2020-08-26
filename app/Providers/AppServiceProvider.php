<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// en caso de problemas en la migracion de tablas de bases de datos
// use Illuminate\Support\Schema;

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
        // en caso de problemas en la migracion de tablas de bases de datos
        // Schema::defaultStringLenght(191)
    }
}
