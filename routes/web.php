<?php

use App\Http\Controllers\BlogControllers;
use App\Http\Controllers\indexController;
use App\Http\Controllers\MonitorController;
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

Route::get('/', [indexController::class, 'index']);
Route::get('/conocenos', function(){
   return view('conocenos');
});
Route::get('/blog', [BlogControllers::class, 'index'])->name('blog');
Route::get('/monitor', [MonitorController::class, 'index'])->name('monitor');