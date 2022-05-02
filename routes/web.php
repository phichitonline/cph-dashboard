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
// Route::get('/', function () {
//     return csrf_token();
// });

// Route::get('/', function () {
//     return view('index');
// });

Route::post('/product', function () {
    return 'My Product';
});

// Route::resource('emr', 'EmrController');
// Route::get('/', 'DashboardController@index')->name('dashboard');
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/page1', [App\Http\Controllers\DashboardController::class, 'index'])->name('page1');
Route::get('/page2', [App\Http\Controllers\DashboardController::class, 'index'])->name('page2');
