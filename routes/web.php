<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->group(function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    // Route::re('/kelas', [App\Http\Controllers\HomeController::class, 'index'])->name('kelas.index');
    Route::resource('/kelas', KelasController::class);
    Route::resource('/siswa', UserController::class);
    Route::resource('/admin', AdminController::class);

});

