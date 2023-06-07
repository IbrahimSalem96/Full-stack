<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\RouteSiteController;
use App\Http\Controllers\HomeController;

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
define('PAGINATION_COUNT', 10);

Route::get('/', function () {
    return view('welcome');
});
    Route::get('index', [RouteSiteController::class, 'index'])->name('index');
    Route::get('category', [RouteSiteController::class, 'category'])->name('category');
    Route::get('details', [RouteSiteController::class, 'details'])->name('details');
    Route::get('checkout', [RouteSiteController::class, 'checkout'])->name('checkout');
    Route::get('shopping', [RouteSiteController::class, 'shopping'])->name('shopping');
    Route::get('confirmation', [RouteSiteController::class, 'confirmation'])->name('confirmation');
    Route::get('blog', [RouteSiteController::class, 'blog'])->name('blog');
    Route::get('loginBlog', [RouteSiteController::class, 'loginBlog'])->name('loginBlog');
    Route::get('loginuser', [RouteSiteController::class, 'loginuser'])->name('loginuser');
    Route::get('registration', [RouteSiteController::class, 'registration'])->name('registrationuser');
    Route::get('tracking', [RouteSiteController::class, 'tracking'])->name('tracking');
    Route::get('contact', [RouteSiteController::class, 'contact'])->name('contact');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

