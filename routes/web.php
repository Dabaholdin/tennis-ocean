<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CourtController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TreningController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home.index');
Route::get('/trenings', [TreningController::class,'index'])->name('trenings.index');
Route::get('/trenings/{cat_id}/{type}', [TreningController::class,'show'])->name('trenings.show');
Route::get('/fees', [FeesController::class,'index'])->name('fees.index');
Route::get('/gallery', [GalleryController::class,'index'])->name('gallery.index');
Route::get('/courts', [CourtController::class,'index'])->name('courts.index');
Route::get('/about-us', [AboutUsController::class , 'index'])->name('aboutus.index');



Route::get('/registration',[RegisterController::class , 'add'])->name('register.add');
Route::post('/login',[LoginController::class , 'login'])->name('login.enter');