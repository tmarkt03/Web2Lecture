<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
    Route::get('user', function () { return view('user'); })->name("user");
    Route::get('admin', 'App\Http\Controllers\AdminController@adminPage');

    Route::get('articles',[ArticleController::class,'index']);
    Route::get('articles/create',[ArticleController::class,'create']);
    Route::post('articles/store',[ArticleController::class,'store']);
    Route::get('articles/show/{article}',[ArticleController::class,'show']);
    Route::get('articles/edit/{article}',[ArticleController::class,'edit']);
    Route::post('articles/update/{article}',[ArticleController::class,'update']);
    Route::get('articles/delete/{article}',[ArticleController::class,'delete']);

});


Route::get('exercise1', function () { return view('view1'); });

Route::get('introduction', function () { return view('introduction'); });

Route::get('modelread', 'App\Http\Controllers\ControllerModel@read');
Route::get('modelcreate', 'App\Http\Controllers\ControllerModel@create');
Route::get('modelupdate', 'App\Http\Controllers\ControllerModel@update');
Route::get('modeldelete', 'App\Http\Controllers\ControllerModel@delete');

Route::get('relationship1', 'App\Http\Controllers\ControllerModel@print1');
Route::get('relationship2', 'App\Http\Controllers\ControllerModel@print2');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
