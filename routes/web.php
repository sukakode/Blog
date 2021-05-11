<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

$frontend = 'App\Http\Controllers\Frontend\\';

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
//     return view('welcome');
// });

Route::get('/', [$frontend . MainController::class, 'index'])->name('frontend.main');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
