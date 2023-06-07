<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VendorsController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\AdminRouteController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\MainCatgeriesController;


/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/


####################################################################################################################
############################################# Route Page ###########################################################



Route::group(['middleware' => 'auth:admin'], function(){
    Route::get('index', [AdminRouteController::class, 'index'])->name('index-admin');
    #################################  Begin Languages Route ######################################
        Route::group(['prefix' => 'languages'], function(){
            Route::get('index',[LanguageController::class, 'index'])->name('admin.languages.settings');
            Route::get('create',[LanguageController::class, 'create'])->name('admin.languages.create');
            Route::post('store',[LanguageController::class, 'store'])->name('admin.languages.store');
            Route::get('edit/{id}',[LanguageController::class, 'edit'])->name('admin.languages.edit');
            Route::post('update/{id}', [LanguageController::class, 'update'])->name('admin.languages.update');
            Route::get('delete/{id}', [LanguageController::class, 'destroy'])->name('admin.languages.destroy');
        });
    #################################  End Languages Route ########################################

    #################################  Begin main catgeries Route #################################
    Route::group(['prefix' => 'main_catgeries'], function(){
        Route::get('index',[MainCatgeriesController::class, 'index'])->name('admin.main_catgeries.sections');
        Route::get('create',[MainCatgeriesController::class, 'create'])->name('admin.main_catgeries.create');
        Route::post('store',[MainCatgeriesController::class, 'store'])->name('admin.main_catgeries.store');
        Route::get('edit/{id}',[MainCatgeriesController::class, 'edit'])->name('admin.main_catgeries.edit');
        Route::post('update/{id}', [MainCatgeriesController::class, 'update'])->name('admin.main_catgeries.update');
        Route::get('delete/{id}', [MainCatgeriesController::class, 'destroy'])->name('admin.main_catgeries.destroy');
        Route::get('changeStatus/{id}', [MainCatgeriesController::class, 'changeStatus'])->name('admin.main_catgeries.changeStatus');
    });
    #################################  End main catgeries Route #################################

    #################################  Begin vendors Route ######################################
    Route::group(['prefix' => 'Venders'], function(){
        Route::get('index',[VendorsController::class, 'index'])->name('admin.Venders.index');
        Route::get('create',[VendorsController::class, 'create'])->name('admin.Venders.create');
        Route::post('store',[VendorsController::class, 'store'])->name('admin.Venders.store');
        Route::get('edit/{id}',[VendorsController::class, 'edit'])->name('admin.Venders.edit');
        Route::post('update/{id}', [VendorsController::class, 'update'])->name('admin.Venders.update');
        Route::get('delete/{id}', [VendorsController::class, 'destroy'])->name('admin.Venders.destroy');
        Route::get('changeStatus/{id}', [VendorsController::class, 'changeStatus'])->name('admin.Venders.changeStatus');
    });
    #################################  End vendors Route ########################################

    #################################  Begin vendors Route ######################################
    Route::group(['prefix' => 'SubCategory'], function(){
        Route::get('index',[SubCategoryController::class, 'index'])->name('admin.SubCategory.index');
        Route::get('create',[SubCategoryController::class, 'create'])->name('admin.SubCategory.create');
        Route::post('store',[SubCategoryController::class, 'store'])->name('admin.SubCategory.store');
        Route::get('edit/{id}',[SubCategoryController::class, 'edit'])->name('admin.SubCategory.edit');
        Route::post('update/{id}', [SubCategoryController::class, 'update'])->name('admin.SubCategory.update');
        Route::get('delete/{id}', [SubCategoryController::class, 'destroy'])->name('admin.SubCategory.destroy');
        Route::get('changeStatus/{id}', [SubCategoryController::class, 'changeStatus'])->name('admin.SubCategory.changeStatus');
    });
    #################################  End vendors Route ########################################

    #################################  Begin Product Route ######################################
    Route::group(['prefix' => 'Product'], function(){
        Route::get('index',[ProductController::class, 'index'])->name('admin.Product.index');
        Route::get('create',[ProductController::class, 'create'])->name('admin.Product.create');
        Route::post('store',[ProductController::class, 'store'])->name('admin.Product.store');
        Route::get('edit/{id}',[ProductController::class, 'edit'])->name('admin.Product.edit');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('admin.Product.update');
        Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('admin.Product.destroy');
        Route::get('changeStatus/{id}', [ProductController::class, 'changeStatus'])->name('admin.Product.changeStatus');
    });
    #################################  End Product Route ########################################

});



Route::group(['middleware' => 'guest:admin'], function(){
    Route::get('login', [AdminRouteController::class, 'getLogin'])->name('get.admin-login');
    Route::post('login', [AdminRouteController::class, 'login'])->name('admin.login');

});


Route::get('subcategory', function () {

    $subCategories = \App\Models\Admin\SubCategory::find(1);

    return $subCategories->mainCategory;
});
