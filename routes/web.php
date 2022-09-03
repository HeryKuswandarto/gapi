<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GunungapiController;
use App\Http\Controllers\JenisstasiunController;
use App\Http\Controllers\StasiunController;
use App\Http\Controllers\SejarahController;

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
    //return view('welcome');
    return view('auth.login');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->group(function(){
    Route::prefix('gapi')->group(function(){
        Route::get('/gunungapi/index', [GunungapiController::class, 'index'])
           ->name('gunungapi.index');
        Route::get('/gunungapi/create', [GunungapiController::class, 'create'])
           ->name('gunungapi.create');
        Route::post('/gunungapi/store', [GunungapiController::class, 'store'])
           ->name('gunungapi.store');
        Route::get('/gunungapi/edit/{id}', [GunungapiController::class, 'edit'])
           ->name('gunungapi.edit');
        Route::post('/gunungapi/update/{id}', [GunungapiController::class, 'update'])
           ->name('gunungapi.update');
        Route::get('/gunungapi/destroy/{id}', [GunungapiController::class, 'destroy'])
           ->name('gunungapi.destroy');

        Route::get('/jenisstasiun/index', [JenisstasiunController::class, 'index'])
           ->name('jenisstasiun.index');
        Route::get('/jenisstasiun/create', [JenisstasiunController::class, 'create'])
           ->name('jenisstasiun.create');
        Route::post('/jenisstasiun/store', [JenisstasiunController::class, 'store'])
           ->name('jenisstasiun.store');
        Route::get('/jenisstasiun/edit/{id}', [JenisstasiunController::class, 'edit'])
           ->name('jenisstasiun.edit');
        Route::post('/jenisstasiun/update/{id}', [JenisstasiunController::class, 'update'])
           ->name('jenisstasiun.update');
        Route::get('/jenisstasiun/destroy/{id}', [JenisstasiunController::class, 'destroy'])
           ->name('jenisstasiun.destroy');

        Route::get('/stasiun/index', [StasiunController::class, 'index'])
           ->name('stasiun.index');
        Route::get('/stasiun/create', [StasiunController::class, 'create'])
           ->name('stasiun.create');
        Route::post('/stasiun/store', [StasiunController::class, 'store'])
           ->name('stasiun.store');
           Route::get('/stasiun/edit/{id}', [StasiunController::class, 'edit'])
           ->name('stasiun.edit');
        Route::post('/stasiun/update/{id}', [StasiunController::class, 'update'])
           ->name('stasiun.update');
        Route::get('/stasiun/destroy/{id}', [StasiunController::class, 'destroy'])
           ->name('stasiun.destroy');

        Route::get('/sejarah/index', [SejarahController::class, 'index'])
           ->name('sejarah.index');
        Route::get('/sejarah/create', [SejarahController::class, 'create'])
           ->name('sejarah.create');
        Route::post('/sejarah/store', [SejarahController::class, 'store'])
           ->name('sejarah.store');
           Route::get('/sejarah/edit/{id}', [SejarahController::class, 'edit'])
           ->name('sejarah.edit');
        Route::post('/sejarah/update/{id}', [SejarahController::class, 'update'])
           ->name('sejarah.update');
        Route::get('/sejarah/destroy/{id}', [SejarahController::class, 'destroy'])
           ->name('sejarah.destroy');

      //   Route::get('/stasiun/index',  [App\Http\Controllers\GapiController::class, 'stasiun_index'])->name('stasiun.index');
      //  Route::get('/sejarah/index',  [App\Http\Controllers\GapiController::class, 'sejarah_index'])->name('sejarah.index');
        Route::get('/krb/index',  [App\Http\Controllers\GapiController::class, 'krb_index'])->name('krb.index');
        Route::get('/admin/index',  [App\Http\Controllers\GapiController::class, 'admin_index'])->name('admin.index');
    });
});
