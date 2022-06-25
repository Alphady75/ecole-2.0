<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::controller(Controller::class)->group(function () {
    Route::get('/', 'index')->name('accueil');
    Route::get('/about', 'about')->name('about');
    Route::get('/ateliers', 'ateliers')->name('ateliers');
    Route::get('/actualites', 'actualites')->name('actualites');
    Route::get('/actualite/{slug}', 'showActualite')->name('show.actualite');
    Route::get('/contact', 'contact')->name('contact');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
