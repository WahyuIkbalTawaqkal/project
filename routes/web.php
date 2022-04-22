<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\skckcontroller;

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

Route::get('/app', function () {
    return view('admin.app');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('dashboard', [dashboardcontroller::class, 'index'])->name('dashboard');
Route::get('/skck', [skckcontroller::class, 'index']);
