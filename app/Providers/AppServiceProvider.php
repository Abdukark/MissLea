<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer(['admin/categories','admin/addproducts', 'admin/edit'], 'App\Http\Controllers\ViewComposer\Cat');

        View::composer('admin/products', 'App\Http\Controllers\ViewComposer\produc');

        View::composer(['admin/tags','admin/addproducts', 'admin/edit'], 'App\Http\Controllers\ViewComposer\ta');

        View::composer(['admin/colors','admin/addproducts', 'admin/edit'], 'App\Http\Controllers\ViewComposer\Colo');

        View::composer('admin/users', 'App\Http\Controllers\ViewComposer\profil');
    }
}
