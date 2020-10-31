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
Route::middleware('auth')->group(function (){
    Route::resources([
        'admin/category' => 'App\Http\Controllers\Admin\CategoryController',
        'admin/ad' => 'App\Http\Controllers\Admin\AdController'
    ]);
});

Route::resource('ads','App\Http\Controllers\AdController',['only'=>['create','store']]);


Route::get('/', function () {
    return redirect()->route('ads');
});

Route::get('welcome/{locale}', function ($locale) {

    \Illuminate\Support\Facades\Session::put('locale',$locale);

    return redirect()->back();
})->name('locale');

Route::get('/ads',['App\Http\Controllers\AdController','index'] )->name('ads');
Route::get('ads/{category}',['App\Http\Controllers\SubController','listings']);
Route::get('ads/{category}/{subcategory}',['App\Http\Controllers\SubController','show']);
Route::get('ads/{category}/{subcategory}/{ad}',['App\Http\Controllers\AdController','show'])->name('show_ad');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
