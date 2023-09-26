<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', 'PagesController@index');

Route::resource('pages', 'PagesController');
Route::resource('blogs', 'BlogsController');
Route::resource('widgets', 'WidgetsController');
Route::resource('events', 'DownloadsController');
Route::resource('stocks', 'StocksController');
Route::resource('products', 'ProductsController');
Route::resource('messages', 'MessagesController');
Route::resource('menus', 'MenusController');
Route::resource('collects', 'CollectsController');


Route::get('ml', 'PagesController@ml');
Route::get('hwr', 'PagesController@hwr');
Route::get('contact', 'PagesController@contact');
Route::get('types', 'PagesController@types');
Route::post('contactus', 'PagesController@contactus');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
