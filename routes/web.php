<?php

use Illuminate\Support\Facades\Route;

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





Route::get('/',[\App\Http\Controllers\PortfolioController::class, 'index'])->name('index');

Route::get('/категории/{category}',[\App\Http\Controllers\PortfolioController::class, 'showCategories'])->name('category');


Route::get('/login', function (){
    return view('mainContent.login');
})->name('login');

Route::post('/login',[\App\Http\Controllers\AdminController::class,'login'])->name('doLogin');

Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index'])->middleware('auth')->name('admin');

Route::get('/logout',[\App\Http\Controllers\AdminController::class,'logout'])->middleware('auth')->name('logout');

Route::post('/admin/add-category',[\App\Http\Controllers\AdminController::class,'addCategory'])->middleware('auth')
    ->name('addCategory');

Route::post('/admin/add-img',[\App\Http\Controllers\AdminController::class,'addImg'])->middleware('auth')->name('addImg');

Route::post('/admin/add-subcategory',[\App\Http\Controllers\AdminController::class,'addSubcategory'])->middleware
('auth')->name('addSubcategory');

Route::post('/admin/delete-subcategory',[\App\Http\Controllers\AdminController::class,'deleteSubCategory'])
    ->middleware('auth')->name
('deleteSubCategory');

Route::post('/admin/delete-category',[\App\Http\Controllers\AdminController::class,'deleteCategory'])->middleware
('auth')->name('deleteCategory');

Route::post('/admin/change-category-order',[\App\Http\Controllers\AdminController::class,'changeCategoryOrder'])->middleware
('auth')->name('changeCategoryOrder');

Route::post('/admin/change-sub-category-order',[\App\Http\Controllers\AdminController::class,'changeSubCategoryOrder'])
    ->middleware
('auth')->name('changeSubCategoryOrder');


Route::fallback(function ()
{
    return redirect()->to('/');
});
