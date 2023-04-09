<?php

use App\Http\Controllers\CommonController;
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

Route::get('/',[CommonController::class,'index'])->name('index');
Route::get('about',[CommonController::class,'about'])->name('about');
Route::get('service',[CommonController::class,'service'])->name('service');
Route::get('performed',[CommonController::class,'performed'])->name('performed');
Route::post('contact',[CommonController::class,'contact'])->name('contact');
Route::get('contact',[CommonController::class,'contact'])->name('contact');
Route::get('test',[CommonController::class,'test'])->name('test');