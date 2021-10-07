<?php

use Illuminate\Support\Facades\Auth;
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
    // return view('welcome');
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function(){
    Route::prefix('gapi')->group(function(){
        Route::get('/gunungapi/index', [App\Http\Controllers\GapiController::class, 'gunungapi_index'])
           ->name('gunungapi.index');
        Route::get('/stasiun/index',  [App\Http\Controllers\GapiController::class, 'stasiun_index'])->name('stasiun.index');
        Route::get('/sejarah/index',  [App\Http\Controllers\GapiController::class, 'sejarah_index'])->name('sejarah.index');
        Route::get('/krb/index',  [App\Http\Controllers\GapiController::class, 'krb_index'])->name('krb.index');
        Route::get('/admin/index',  [App\Http\Controllers\GapiController::class, 'admin_index'])->name('admin.index');
    });
});
