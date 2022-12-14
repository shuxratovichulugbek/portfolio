<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\MainController;
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

Route::group(['middleware' => 'auth'], function() {

    Route::get('/', [MainController::class, 'main']);
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');

    Route::resource('applications', 'ApplicationController');

});






require __DIR__.'/auth.php';
