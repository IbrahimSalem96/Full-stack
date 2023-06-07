<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\PostController;
use App\Http\Controllers\Website\IndexController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\PostsController;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\MessagesController;
use App\Http\Controllers\Website\WebsiteCategoryController;
use App\Http\Controllers\Website\ContactController;
use App\Http\Controllers\Website\CommentController;


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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/categories/{category}', [WebsiteCategoryController::class, 'show'])->name('category');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post');


Route::post('/comment/{post_id}', [CommentController::class, 'store'])->name('comment.store');



Route::resources([
    'contacts' => ContactController::class,
]);



/*
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
|--------------------------------------------------------------------------
*/


Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => ['auth', 'App\Http\Middleware\checkLogin'], 'verified'], function(){

    Route::get('/', [SettingController::class, 'index'])->name('setting');
    Route::get('setting', [SettingController::class, 'setting'])->name('settings');
    Route::post('update/{setting}', [SettingController::class, 'update'])->name('setting.update');


        Route::get('/users/all', [UserController::class, 'getUsersDatatable'])->name('users.all');
        Route::post('/users/delete', [UserController::class, 'delete'])->name('users.delete');

        Route::get('/category/all', [CategoryController::class, 'getCategoriesDatatable'])->name('category.all');
        Route::post('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');

        Route::get('/posts/all', [PostsController::class, 'getPostsDatatable'])->name('posts.all');
        Route::post('/posts/delete', [PostsController::class, 'delete'])->name('posts.delete');

        Route::get('/messages/all', [MessagesController::class, 'getMessagesDatatable'])->name('messages.all');
        Route::post('/messages/delete', [MessagesController::class, 'delete'])->name('messages.delete');
        Route::post('/messages/send', [MessagesController::class, 'send'])->name('messages.send');


    Route::resources([
        'users' => UserController::class,
        'category' => CategoryController::class,
        'posts' => PostsController::class,
        'messages' => MessagesController::class
    ]);

});


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth','verified');
