<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CortController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TreningController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\TreningActivitiController;

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

Route::get('/fees', [FeesController::class,'index'])->name('fees.index');
Route::get('/gallery', [GalleryController::class,'index'])->name('gallery.index');
Route::get('/corts', [CortController::class,'index'])->name('courts.index');
Route::get('/about-us', [AboutUsController::class , 'index'])->name('aboutus.index');

Route::get('/gallery/albums/{album?}',[GalleryController::class,'show'])->name('gallery.show');

Route::prefix('/')->group(function(){
    Route::controller(TreningController::class)->group(function(){
        Route::get('/trenings','index')->name('trenings.index'); 
        Route::get('/trenings/{cat_id}/{type}','show')->name('trenings.show'); 
    });
});


Route::prefix('/')->group(function(){
    Route::controller(SessionController::class)->group(function(){
        Route::post('/registration','create')->name('register.create'); 
        Route::post('/login','login')->name('login.login'); 
        Route::post('/activation','activation')->name('login.activation'); 
        Route::get('/logout','logout')->name('login.logout')->middleware('auth');
    });
});

Route::prefix('/user')->group(function(){
    Route::controller(SessionController::class)->group(function(){
        Route::get('/cabinet','index')->name('cabinet.index')->middleware('auth');


        Route::get('/cabinet/setings','show')->name('cabinet.setings')->middleware('auth');

        
        Route::patch('/cabinet/setings/edit/{id}','edit')->name('cabinet.edit');
        
    });
    Route::controller(ChildrenController::class)->group(function(){
        Route::post('/cabinet/setings/addchildren','create')->name('children.create');
        Route::patch('/cabinet/setings/children/{id}','update')->name('children.update');
    });
    Route::controller(TreningActivitiController::class)->group(function(){
        Route::post('invite','store')->name('invite.create')->middleware('auth');
    });
});
Route::prefix('/admin')->middleware(['auth'])->group(function(){
    Route::controller(AdminController::class)->middleware(['admin'])->group(function(){
        Route::get('/','index')->name('admin.home');
        Route::get('/users','users')->name('admin.users');
        Route::get('/trenings','trenings')->name('admin.trenings');
        Route::get('/corts','corts')->name('admin.corts');
        Route::get('/trening_activiti','trening_activiti')->name('admin.tactiviti');

    });
    Route::controller(UserController::class)->middleware(['admin'])->group(function(){

    });
    Route::controller(TreningController::class)->middleware(['admin'])->group(function(){
        Route::get('/trenings/create','create')->name('admin.create.trening');
        Route::post('/trenings/store','store')->name('admin.store.trening');
        Route::delete('/trenings/delete/{Trening}','destroy')->name('admin.destroy.trening');
    });
    Route::controller(CortController::class)->middleware(['admin'])->group(function(){

    });
    Route::controller(TreningActivitiController::class)->middleware(['admin'])->group(function(){
        Route::get('/trening_activiti/create','create')->name('admin.create.tactiviti');
        Route::get('/trening_activiti/{id}/edit','edit')->name('admin.edit.tactiviti');
    });
});
