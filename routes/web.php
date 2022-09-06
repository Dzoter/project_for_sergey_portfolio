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

Route::get('/', function () {
    return view('mainContent.index');
})->name('index');



Route::get('/categories/{category}',[\App\Http\Controllers\PortfolioController::class, 'showCategories'])->name('category');

Route::fallback(function ()
{
    return redirect()->to('/');
});
