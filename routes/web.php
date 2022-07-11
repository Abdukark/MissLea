<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mafftor\LaravelFileManager\Lfm;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/products', function () {
        return view('products');
    });

    Route::get('/cart', function () {
        return view('cart');
    });

    Route::get('/admin/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboard');

    Route::get('/admin/tags', function () {
        return view('admin/tags');
    })->name('tags');

    Route::post('/admin/tags', [App\Http\Controllers\TagController::class, 'store'])->name('tag.store');

    Route::get('/admin/tag/delete/{id}', [App\Http\Controllers\TagController::class, 'destroy'])->name('tag.destroy');

    Route::get('/admin/categories', function () {
        return view('admin/categories');
    })->name('categories');

    Route::post('/admin/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');

    Route::get('/admin/category/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');

    Route::get('/admin/colors', function () {
        return view('admin/colors');
    })->name('colors');

    Route::post('/admin/colors', [App\Http\Controllers\ColorController::class, 'store'])->name('color.store');

    Route::get('/admin/color/delete/{id}', [App\Http\Controllers\ColorController::class, 'destroy'])->name('color.destroy');

    Route::get('/admin/users', function () {
        return view('admin/users');
    })->name('users');

    Route::get('/admin/users/profile/{id}', [App\Http\Controllers\ProfileController::class, 'show'])->name('users.profile');

    Route::get('/admin/users/profile/delete/{id}', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('users.profile.delete');

    Route::get('/admin/users/profile/edit/{id}',[App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');

    Route::post('/admin/users/profile/update/{id}',[App\Http\Controllers\ProfileController::class, 'update'])->name('profile.edit.update');

    Route::get('/admin/products', function () {
        return view('admin/products');
    })->name('products');

    Route::get('/admin/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/admin/products/addproducts', function () {
        return view('admin/addproducts');
    })->name('addproducts');

    Route::get('/admin/products/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');

    Route::post('/admin/products/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');

    Route::post('/admin/products/addproducts', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');

    Route::get('/partials/navbar', function () {
        return view('admin/partials/navbar');
    })->name('partials.navbar');
});



